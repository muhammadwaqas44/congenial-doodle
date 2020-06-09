<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Company;
use App\GenericForm;
use App\GenericFormSchedule;
use App\HotelLocation;
use App\Http\Controllers\Controller;
use App\MarksValue;
use App\Schedule;
use App\ScheduleCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\DataTables;

class ReportController extends Controller
{
    public function scheduleListing(Request $request)
    {
        if ($request->ajax()) {
            $data = Schedule::with(['brand', 'subbrand', 'company', 'consultant'])->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addColumn('action', function (Schedule $schedule) {
                    $btn = '<a href="' . route('visit-detail-company', ['scheduleId' => $schedule->id]) . '"
                    class="btn btn-primary btn-sm">	View Visit Summary</a>
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
        return view('dashboard.report.all-schedules');
    }

    public function compareForm()
    {
        $years2 = (int)Carbon::now()->addYears(5)->format("Y");
        $years1 = (int)Carbon::now()->subYears(5)->format("Y");
        $months = array(
            '01' => 'January',
            '02' => 'February',
            '03' => 'March',
            '04' => 'April',
            '05' => 'May',
            '06' => 'June',
            '07' => 'July',
            '08' => 'August',
            '09' => 'September',
            '10' => 'October',
            '11' => 'November',
            '12' => 'December'
        );
        $years = [];
        for ($x = $years1; $x <= $years2; $x++) {
            $years[] = $x;
        }

        $companies = Company::all();
        return view('dashboard.report.compare.compare-form', compact('companies', 'years', 'months'));
    }

    public function getLocationListOne(Request $request)
    {
        $locations = HotelLocation::where("company_id", $request->company_id_one)
            ->pluck("location_name", "id");
        return response()->json($locations);
    }

    public function getLocationListTwo(Request $request)
    {
        $locations = HotelLocation::where("company_id", $request->company_id_two)
            ->pluck("location_name", "id");
        return response()->json($locations);
    }

    public function compareReport(Request $request)
    {
        $month = (int)$request->month;
        $year = (int)$request->year;
        $schedules = Schedule::whereMonth('date', $month)->whereYear('date', $year);
        $schedulesLcationOne = $schedules->where(['hotel_location_id' => $request->location_id_one, 'status_id' => 6])->with(['company', 'hotellocation'])->first();
        $schedulesLcationTwo = $schedules->where(['hotel_location_id' => $request->location_id_two, 'status_id' => 6])->with(['company', 'hotellocation'])->first();
        $lodgingsAll = Category::where('type', '1')->get();
        $outletsAll = Category::where('type', '2')->get();
        if ($schedulesLcationOne && $schedulesLcationTwo) {
            $outlets = [];
            $lodgings = [];
            $lodgingASum = [];
            foreach ($outletsAll as $outlet) {
                $outlets[$outlet->id] = ScheduleCategory::where([['schedule_id', $schedulesLcationOne->id], ['type', '=', 'outlet']])->get();
            }
            foreach ($lodgingsAll as $lodging) {
                $lodgings[$lodging->id] = ScheduleCategory::where(['schedule_id' => $schedulesLcationOne->id, 'type' => 'lodging'])->get();
                $lodgingASum[$lodging->id] = GenericForm::where('category_id', $lodging->id)->sum('possible_point');
            }
            $marks = MarksValue::where('schedule_id', $schedulesLcationOne->id)->get();
            $questionsASum = [];
            $questionsBSum = [];
            $marksSum = [];
            $marksPreviousSum = [];
            $total_possible = [];
            foreach ($outletsAll as $oultet) {
                $categories = Category::where('parent_id', $oultet->id)->get();
                $categoriesId = $categories->pluck('id');
                if ($categories) {
                    $questionsASum[$oultet->id] = GenericForm::whereIn('category_id', $categoriesId)->sum('possible_point');
                    $questionsBSum[$oultet->id] = GenericFormSchedule::where([['schedule_id', $schedulesLcationOne->id]])->whereIn('category_id', $categoriesId)->sum('possible_point');
                    $marksSum[$oultet->id] = MarksValue::where([['schedule_id', $schedulesLcationOne->id]])->whereIn('category_id', $categoriesId)->sum('value');
                    if ($schedulesLcationTwo) {
                        $marksPreviousSum[$oultet->id] = MarksValue::where([['schedule_id', $schedulesLcationTwo->id]])->whereIn('category_id', $categoriesId)->sum('value');
                    } else {
                        $marksPreviousSum[$oultet->id] = null;
                    }
                }
                $total_possible[$oultet->id] = $questionsASum[$oultet->id] + $questionsBSum[$oultet->id];
            }
            $total_possible_all = collect($total_possible)->sum();
            $marksSumAll = collect($marksSum)->sum();
            if ($schedulesLcationTwo) {
                $marksPreviousSumALl = collect($marksPreviousSum)->sum();
            } else {
                $marksPreviousSumALl = 0;
            }
            $lodgingMarksSum = [];
            $lodgingMarksPreviousSum = [];

            foreach ($lodgings as $lodgingGet) {
                foreach ($lodgingGet as $lodging) {
                    $lodgingMarksSum[$lodging->category_id] = MarksValue::where([['schedule_id', $schedulesLcationOne->id], ['category_id', $lodging->category_id]])->sum('value');
//                    if ($schedulesLcationTwo) {
                    $lodgingMarksPreviousSum[$lodging->category_id] = MarksValue::where([['schedule_id', $schedulesLcationTwo->id], ['category_id', $lodging->category_id]])->sum('value');
//                    } else {
//                        $lodgingMarksPreviousSum[$lodging->category_id] = null;
//                    }

                }
            }

            return view('dashboard.report.compare.compare-report', compact(
                'schedulesLcationOne',
                'schedulesLcationTwo',
                'total_possible',
                'lodgingsAll',
                'outletsAll',
                'outlets',
                'lodgings',
                'marks',
                'marksSum',
                'marksPreviousSum',
                'total_possible_all',
                'marksPreviousSumALl',
                'marksSumAll',
                'lodgingMarksSum',
                'lodgingMarksPreviousSum',
                'lodgingASum'
            ));
        } else {
//            Session::flash('message', "No Record Found");
            return redirect()->back()->with('message', "No Record Found!");
        }

    }

}
