<?php

namespace App\Http\Controllers\Consultant;

use App\Category;
use App\Event;
use App\Helpers\ImageHelpers;
use App\Http\Controllers\Controller;
use App\MarksValue;
use App\Schedule;
use App\SchedulePhoto;
use App\Helpers\GeneralHelper;
use App\ScheduleCategory;
use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class ConsultantController extends Controller
{
    public function pendingVisit(Request $request)
    {
        if ($request->ajax()) {
            $data = Schedule::where('consultant_id', Auth::user()->id)->whereIn('status_id', [1])->with('brand', 'subbrand', 'hotellocation', 'consultant', 'company')->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addColumn('action', function (Schedule $schedule) {
                    $btn = '
                    <button type="button" onClick="startEvaluationConsultant(' . $schedule->id . ')"
                    class="btn btn-primary btn-sm viw-btn-sh start_visit_con" >Start Evaluation</button>
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
        return view('consultant-dashboard.pending-visit.pending-visit');
    }

    public function startEvaluation($id)
    {
        $schedule = Schedule::where('id', $id)->with('brand', 'subbrand', 'company', 'consultant', 'hotellocation')->first();
        if (!$schedule) {
            return response()->json(['result' => 'error', 'message' => 'No Record Found']);
        } else {
            $schedule->status_id = 2;
            $schedule->consultant_start_date = Carbon::now();
            $schedule->save();
            $tpye = 'Start';
//            $message = 'Consultant Has Start Evaluation';
            $message = '' . $schedule->consultant->name . '(Consultant) Has Start Evaluation On This Location (' . $schedule->hotellocation->location_name . ')';
            GeneralHelper::saveEvent($schedule->user_id, Auth::id(), $schedule->id, $tpye, $message);

            return response()->json(['result' => 'success', 'message' => 'Consultant Has Start This Evaluation']);
        }
    }

    public function activeVisit(Request $request)
    {
        if ($request->ajax()) {
            $data = Schedule::where('consultant_id', Auth::user()->id)->whereIn('status_id', [2, 5])->with('brand', 'subbrand', 'hotellocation', 'consultant', 'company')->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addColumn('action', function (Schedule $schedule) {

                    $btn = '<a href="' . route('visit-detail-consultant', $schedule->id) . '" class="btn btn-primary btn-sm btn-sm-sh">Review Evaluation</a>
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
        return view('consultant-dashboard.active-visit.active-visit');
    }

    public function consultantPhoto($id)
    {
        $categories = Category::where('type', 1)->get();
        return view('consultant-dashboard.form.photo', ['categories' => $categories, 'id' => $id]);
    }

    public function addPicture(Request $request)
    {
        $request->validate([
            'schedule_id' => 'required|integer',
            'title' => 'required',
            'category' => 'required',
            'photo_type' => 'required',
        ], [
            'schedule_id.required' => 'Schedule id not found',
            'title.required' => 'Title is required',
            'category.required' => 'Category is required',
            'photo_type.required' => 'Photo Type is required',
        ]);
        if (empty($request->profile_image)) {
            return response()->json(['result' => 'error', 'message' => 'Please upload image']);
        }
        $path = 'storage/photos/';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        $fileName = time() . "-" . $request->name . ".png";
        $result = ImageHelpers::updateProfileImage($path, $request->file('profile_image'), 'not-link', $fileName);

//        dd($result);
        $profile_image = $path . $fileName;

        $scheulephoto = new SchedulePhoto();
        $scheulephoto->title = $request->title;
        $scheulephoto->category_id = $request->category;
        $scheulephoto->schedule_id = $request->schedule_id;
        $scheulephoto->photo_type = $request->photo_type;
        $scheulephoto->notes = $request->notes;
        $scheulephoto->image = $profile_image;
        $scheulephoto->user_id = Auth::id();
        $scheulephoto->save();
        if ($scheulephoto) {
            return response()->json(['result' => 'success', 'message' => 'Schedule photo added successfully.']);
        }
    }

    public function reviewEvaluation($scheduleId)
    {
        $schedule = Schedule::where('id', $scheduleId)->with('brand', 'subbrand', 'company', 'consultant', 'hotellocation')->first();
        if ($schedule) {
            $lodgings = ScheduleCategory::where(['schedule_id' => $schedule->id, 'type' => 'lodging'])->get();
            $oultets = ScheduleCategory::where([['schedule_id', $scheduleId], ['type', '=', 'outlet']])->get();
            $marks = MarksValue::where('schedule_id', $scheduleId)->get();
//            dd($marks);
            return view('consultant-dashboard.details.visit-detail', compact('scheduleId', 'schedule', 'oultets', 'lodgings', 'marks'));
        } else {
            return abort(404);
        }
    }

    public function deleteByTypeConsultant($category, $type)
    {
        $schedule = ScheduleCategory::where(['id' => $type, 'type' => $category])->first();
        if ($schedule) {
            $schedule->delete();
            return response()->json(['result' => 'success', 'message' => 'Deleted Successfully']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'Could not  deleted']);
        }
    }

    public function addNarrative($scheduleId)
    {
        $narratives = Category::where('type', 1)->get();
        return view('consultant-dashboard.form.narrative', compact('narratives', 'scheduleId'));
    }

    public function addLodging($scheduleId)
    {
        $lodgings = Category::where('type', 1)->get();
        return view('consultant-dashboard.form.lodging', compact('lodgings', 'scheduleId'));
    }

    public function addOutlet($scheduleId)
    {
        $outlets = Category::where('type', 2)->get();
        return view('consultant-dashboard.form.outlet', compact('outlets', 'scheduleId'));
    }

    public function editOutlet($oultetId)
    {
        $outlet = ScheduleCategory::where('id', $oultetId)->first();
        $categories = Category::where('parent_id', $outlet->category_id)->get();
        $marks = MarksValue::where('schedule_id', $outlet->schedule_id)->get();
        if (!$outlet) {
            return abort(404);
        }
        return view('consultant-dashboard.form.edit-outlet', compact('outlet', 'categories', 'marks'));
    }

    public function editOutlet_Post($oultetId, Request $request)
    {
        $s = ScheduleCategory::where('id', $oultetId)->first();
        $this->validate($request, [
            'time' => 'required',
        ], [
            'time.required' => 'Visit Date is required',
        ]);
        $s->visit_date = $request->time;
        $s->save();
        if ($s) {
            return response()->json(['result' => 'success', 'message' => 'Visit date updated Successfully']);
        }
    }

    public function addNarrativePost(Request $request)
    {
        $this->validate($request, [
            'schedule_id' => 'required|integer',
            'category_id' => 'required|integer'
        ], [
            'schedule_id.required' => 'Schedule id Not Found',
            'category_id.required' => 'Please select Cy,it is requiredategor',
        ]);
        $narrative = ScheduleCategory::create([
            'schedule_id' => $request->schedule_id,
            'category_id' => $request->category_id,
            'send_summary' => $request->send_summary,
            'notes' => $request->notes,
            'type' => 'narrative',
            'user_id' => Auth::id(),
        ]);

        if ($narrative) {
            return response()->json(['result' => 'success', 'message' => 'Narrative Add Successfully']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'Form Not Submit']);
        }
    }

    public function addLodgingPost(Request $request)
    {
        $this->validate($request, [
            'schedule_id' => 'required|integer',
            'category_id' => 'required'
        ], [
            'schedule_id.required' => 'Schedule id Not Found',
            'category_id.required' => 'Please select Category,it is required',
        ]);
        $lodging = [];
        foreach ($request->category_id as $cat) {
            $old = ScheduleCategory::where(['schedule_id' => $request->schedule_id, 'category_id' => $cat])->first();
            if (!$old) {
                $lodging[] = ScheduleCategory::create([
                    'schedule_id' => $request->schedule_id,
                    'category_id' => $cat,
                    'type' => 'lodging',
                    'user_id' => Auth::id(),
                ]);
            }
        }

        if ($lodging) {
            return response()->json(['result' => 'success', 'message' => 'Lodging Add Successfully']);
        } elseif (count($lodging) == 0){
            return response()->json(['result' => 'error', 'message' => 'Already Added']);
        }else {
            return response()->json(['result' => 'error', 'message' => 'Form Not Submit']);
        }
    }

    public function addOutletPost(Request $request)
    {
        $this->validate($request, [
            'schedule_id' => 'required|integer',
            'category_id' => 'required|integer',
            'visit_number' => 'required',
            'visit_date' => 'required',
            'name' => 'required',
        ], [
            'name.required' => 'Title Of Outlet is required',
            'schedule_id.required' => 'Schedule id Not Found',
            'category_id.required' => 'Please select Category,it is required',
            'visit_number.required' => 'Please select Visit Number,it is required',
            'visit_date.required' => 'Please select Visit date,it is required',
        ]);
        $old = ScheduleCategory::where(['schedule_id' => $request->schedule_id, 'category_id' => $request->category_id])->first();
        if ($old) {
            return response()->json(['result' => 'error', 'message' => 'This Outlet Already Added']);
        } else {
            $outlet = ScheduleCategory::create([
                'schedule_id' => $request->schedule_id,
                'category_id' => $request->category_id,
                'name' => $request->name,
                'visit_number' => $request->visit_number,
                'visit_date' => Carbon::parse(str_replace('-', '', $request->visit_date))->format('Y-m-d'),
                'type' => 'outlet',
                'user_id' => Auth::id(),
            ]);

            if ($outlet) {
                return response()->json(['result' => 'success', 'message' => 'Outlet Add Successfully']);
            } else {
                return response()->json(['result' => 'error', 'message' => 'Form Not Submit']);
            }
        }
    }

    public function lodgingPhotoListing($scheduleId, Request $request)
    {
        if ($request->ajax()) {
            $data = SchedulePhoto::where('schedule_id', $scheduleId)->with('category')->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addColumn('image', function (SchedulePhoto $schedulePhoto) {
                    $url = asset($schedulePhoto->image);
                    $img = '<img src="' . $url . '" border="0" width="40" class="img-rounded" align="center" />';
                    return $img;
                })
                ->rawColumns(['image'])
                ->make(true);
        }
        return view('consultant-dashboard.details.lodging-photo-listing', compact('scheduleId'));
    }

    public function narrativeListing($scheduleId, Request $request)
    {
        if ($request->ajax()) {
            $data = ScheduleCategory::where(['schedule_id' => $scheduleId, 'type' => 'narrative'])->with('category')->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->make(true);
        }
        return view('consultant-dashboard.details.narrative-listing', compact('scheduleId'));
    }

    public function transaction($scheduleId)
    {
        $c = Schedule::where('id', $scheduleId)->first();
        if (!$c) {
            return abort(404);
        }
        return view('consultant-dashboard.form.transaction', ['scheduleId' => $scheduleId]);
    }

    public function transaction_listing($scheduleId, Request $request)
    {
        if ($request->ajax()) {
            $data = Transaction::where('schedule_id', $scheduleId)->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->make(true);
        }
        return view('consultant-dashboard.details.transaction-listing', ['scheduleId' => $scheduleId]);
    }

    public function transaction_post(Request $request, $scheduleId)
    {
        $request->validate([
            'serverName' => 'required',
            'time' => 'required',
            'amount' => 'required|integer',
            'amount_paid' => 'required|integer',
            'transaction_check_number' => 'required',
            'payment_method' => 'required',
            'coupon' => 'required',
        ], [
            'serverName.required' => 'server Name is required',
            'time.required' => 'time is required',
            'amount.required' => 'amount is required',
            'amount_paid.email' => 'amount paid is required',
            'transaction_check_number.required' => 'transaction check number is required',
            'payment_method.required' => 'payment method is required',
            'coupon.required' => 'coupon is required',
        ]);
        $path = 'storage/transactions/';
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (!empty($request->file)) {
            $extension = $request->file->getClientOriginalExtension();
            $fileName = time() . "-" . 'transaction.' . $extension;
            ImageHelpers::uploadFile($path, $request->file('file'), $fileName);
            $image = $path . $fileName;
        } else {
            $image = null;
        }

        $transaction = new Transaction();
        $transaction->image = $image;
        $transaction->server_name = $request->serverName;
        $transaction->date = $request->time;
        $transaction->amount = $request->amount;
        $transaction->amount_paid = $request->amount_paid;
        $transaction->amount_check_number = $request->transaction_check_number;
        $transaction->payment_method = $request->payment_method;
        $transaction->coupon = $request->coupon;
        $transaction->notes = $request->notes;
        $transaction->schedule_id = $scheduleId;
        $transaction->user_id = Auth::user()->id;
        $transaction->save();
        if ($transaction) {
            return response()->json(['result' => 'success', 'message' => 'Transaction Add Successfully']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'Could not add transaction']);
        }


    }

    public function submitVisit($scheduleId)
    {
        $schedule = Schedule::find($scheduleId);
        if ($schedule) {
            return view('consultant-dashboard.active-visit.submit', ['schedule' => $schedule]);
        } else {
            return abort(404);
        }
    }

    public function submitVisitEditor($scheduleId)
    {
        $schedule = Schedule::find($scheduleId);
        if (!$schedule) {
            return response()->json(['result' => 'error', 'message' => 'No Record Found']);
        } else {

            $schedule->status_id = 3;
            $schedule->save();
            $tpye = 'Submitted';
            $message = 'Submitted Evaluation By ' . $schedule->consultant->name . ' For Editorial Review On ' . $schedule->hotellocation->location_name . '';
            GeneralHelper::saveEvent($schedule->user_id, Auth::id(), $schedule->id, $tpye, $message);
            GeneralHelper::saveEvent($schedule->user_id, Auth::id(), $scheduleId, $tpye, $message);
            return response()->json(['result' => 'success', 'message' => 'Consultant Has Submit for Editorial Review']);
        }
    }

    public function readAllNotifications(Request $request)
    {
        Event::where('to_id', Auth::user()->id)->update(['read' => 1]);
        if ($request->ajax()) {
            $data = Event::where('to_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->make(true);
        }
        return view('consultant-dashboard.all-notifications');
    }

}
