<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\Helpers\GeneralHelper;
use App\HotelBrand;
use App\HotelLocation;
use App\Http\Controllers\Controller;
use App\Schedule;
use App\SubBrand;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class ScheduleController extends Controller
{
    public function scheduleListing(Request $request)
    {
        if ($request->ajax()) {
            $data = Schedule::where('status_id', '!=', 6)->with(['brand', 'subbrand', 'company', 'consultant'])->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addColumn('action', function (Schedule $schedule) {
                    $btn = '<a href="' . route('editVisitSchedule', ['id' => $schedule->id]) . '"
                    class="btn btn-primary btn-sm"><i
                    class="fas fa-pencil-alt"></i></a>
                    ';
                    return $btn;
                })
                ->addColumn('date', function (Schedule $schedule) {
                    $date = Carbon::parse($schedule->date)->format('d F Y');
                    return $date;
                })
                ->rawColumns(['action', 'date'])
                ->make(true);
        }

        return view('dashboard.schedules.schedule-listing');
    }

    public function scheduleCompleteListing(Request $request)
    {
        if ($request->ajax()) {
            $data = Schedule::where('status_id', 6)->with(['brand', 'subbrand', 'company', 'editor', 'consultant'])->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addColumn('date', function (Schedule $schedule) {
                    $date = Carbon::parse($schedule->date)->format('d F Y');
                    return $date;
                })
                ->rawColumns(['date'])
                ->make(true);
        }

        return view('dashboard.schedules.completed-visits');
    }

    public function editVisitSchedule($id)
    {
//        dd($id);
        $editSchedule = Schedule::where('id', $id)->with('brand', 'subbrand', 'company', 'consultant', 'hotellocation')->first();
        if (!$editSchedule) {
            return redirect()->back()->with('error', ['id not found']);
        }
        $hotelBrands = HotelBrand::all();
        $subBrands = SubBrand::all();
        $hotelLocations = HotelLocation::all();
        $companies = Company::all();
        $consultants = User::with('roles')->whereHas('roles', function ($query) {
            $query->where([
                'roles.id' => 2,
            ]);
        })->get();
        return view('dashboard.schedules.add-schedule', compact('hotelBrands', 'subBrands', 'consultants', 'hotelLocations', 'companies', 'editSchedule'));

    }

    public function updateVisitSchedule_post(Request $request)
    {
        $request->validate([
            'consultant_id' => 'required|integer',
            'date' => 'required|string',
        ], [

            'consultan_id.required' => 'consultan  is required',
            'date.required' => 'date is required',
        ]);

        $schedule = Schedule::where('id', $request->schedule_id)->first();
        if (!$schedule) {
            return redirect()->back()->with('error', ['id not found']);
        }

        $schedule->consultant_id = $request->consultant_id;
        $schedule->date = $request->date;
        $schedule->notes = $request->remarks;
        $schedule->user_id = Auth::user()->id;
        $schedule->save();
        if ($schedule) {
//            $tpye = 'Schedule';
//            $message = 'Schedule To Consultant Updated';
//            GeneralHelper::saveEvent(Auth::id(), $request->consultant_id, $tpye, $message);
            return response()->json(['result' => 'success', 'message' => 'Schedule Updated Successfully']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'Form Not Submit']);
        }

    }

    public function addVisitSchedule(Request $request)
    {
        $hotelBrands = HotelBrand::all();
        $subBrands = SubBrand::all();
        $hotelLocations = HotelLocation::all();
        $companies = Company::all();
        $consultants = User::with('roles')->whereHas('roles', function ($query) {
            $query->where([
                'roles.id' => 2,
            ]);
        })->get();
        $editSchedule = '';

        return view('dashboard.schedules.add-schedule', compact('hotelBrands', 'subBrands', 'consultants', 'hotelLocations', 'companies', 'editSchedule'));
    }

    public function addVisitSchedule_post(Request $request)
    {
        $request->validate([
            'brand_id' => 'required|integer',
//            'sub_brand_id' => 'required|integer',
            'hotel_location_id' => 'required|integer',
            'consultant_id' => 'required|integer',
            'company_id' => 'required|integer',
            'date' => 'required|string',
//            'remarks' => 'required|string',
        ], [
            'brand_id.required' => 'brand is required',
//            'sub_brand_id.required' => 'sub brand is required',
            'hotel_location_id.required' => 'hotel location is required',
            'consultan_id.required' => 'consultan  is required',
            'company_id.required' => 'company is required',
            'date.required' => 'date is required',
//            'remarks.required' => 'remarks are required',
        ]);

        $schedule = new Schedule();
        $schedule->brand_id = $request->brand_id;
        $schedule->sub_brand_id = $request->sub_brand_id;
        $schedule->hotel_location_id = $request->hotel_location_id;
        $schedule->consultant_id = $request->consultant_id;
        $schedule->company_id = $request->company_id;
        $schedule->status_id = 1;
        $schedule->date = $request->date;
        $schedule->notes = $request->remarks;
        $schedule->user_id = Auth::user()->id;
        $schedule->save();
        if ($schedule) {
            $tpye = 'Schedule';
            $message = 'Schedule Added To Consultant';
            GeneralHelper::saveEvent($request->consultant_id, Auth::id(),$schedule->id, $message, $tpye);
            return response()->json(['result' => 'success', 'message' => 'Schedule Add Successfully']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'Form Not Submit']);
        }
    }
}
