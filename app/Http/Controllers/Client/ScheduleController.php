<?php

namespace App\Http\Controllers\Client;

use App\Category;
use App\GenericForm;
use App\GenericFormSchedule;
use App\Http\Controllers\Controller;
use App\MarksValue;
use App\Schedule;
use App\ScheduleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class ScheduleController extends Controller
{
    public function scheduleListing(Request $request)
    {
        if ($request->ajax()) {
            $data = Schedule::with(['brand', 'subbrand', 'company', 'consultant'])->whereHas('company', function ($query) use ($request) {
                $query->where([
                    'user_id' => Auth::id(),
                ]);
            })->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addColumn('action', function (Schedule $schedule) {
                    $btn = '<a href="' . route('visit-detail-Client', ['scheduleId' => $schedule->id]) . '"
                    class="btn btn-primary btn-sm">	View Visit Summary</a>
                    ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('client.schedules.schedule-listing');
    }

    public function reviewEvaluation($scheduleId)
    {
        $schedule = Schedule::where('id', $scheduleId)->with('brand', 'subbrand', 'company', 'consultant', 'hotellocation')->first();
        if ($schedule) {
            $lodgings = ScheduleCategory::where(['schedule_id' => $schedule->id, 'type' => 'lodging'])->get();
            $oultets = ScheduleCategory::where([['schedule_id', $scheduleId], ['type', '=', 'outlet']])->get();
            $marks = MarksValue::where('schedule_id', $scheduleId)->get();
            return view('client.details.detail-visit', compact('schedule', 'oultets', 'lodgings', 'marks'));
        } else {
            return abort(404);
        }
    }

    public function questionMarks($scheduleId, $catId)
    {
        $category = Category::find($catId);
        $schedule = Schedule::find($scheduleId);
        $previousSchedule = Schedule::where('hotel_location_id', $schedule->hotel_location_id)->whereDate('date', '<=', $schedule->date)->orderBy('date', 'desc')->skip(1)->take(1)->first();
        if ($category) {
            $questionsA = GenericForm::where('category_id', $catId)->get();
            $questionsB = GenericFormSchedule::where([['schedule_id', $scheduleId], ['category_id', $catId]])->get();
            $marks = MarksValue::where([['schedule_id', $scheduleId], ['category_id', $catId]])->get();
            if ($previousSchedule) {
                $marksPrevious = MarksValue::where([['schedule_id', $previousSchedule->id], ['category_id', $catId]])->get();
            } else {
                $marksPrevious = null;
            }
            $aArray = [];
            $bArray = [];
            foreach ($marks as $mark) {
                if ($mark->type == "table_a") {
                    $aArray[$mark->question_id] = $mark->value;
                }
                if ($mark->type == "table_b") {
                    $bArray[$mark->question_id] = $mark->value;
                }
            }
            $aArrayPrevious = [];
            $bArrayPrevious = [];
            if ($previousSchedule) {
                foreach ($marksPrevious as $mark) {
                    if ($mark->type == "table_a") {
                        $aArrayPrevious[$mark->question_id] = $mark->value;
                    }
                    if ($mark->type == "table_b") {
                        $bArrayPrevious[$mark->question_id] = $mark->value;
                    }
                }
            } else {
                foreach ($marks as $mark) {
                    if ($mark->type == "table_a") {
                        $aArrayPrevious[$mark->question_id] = null;
                    }
                    if ($mark->type == "table_b") {
                        $bArrayPrevious[$mark->question_id] = null;
                    }
                }
            }
            if ($questionsA || $questionsB) {
                return view('client.question.details', compact(
                    'category',
                    'questionsA',
                    'questionsB',
                    'scheduleId',
                    'aArray',
                    'bArray',
                    'marks',
                    'aArrayPrevious',
                    'bArrayPrevious'
                ));
            } else {
                return abort(404);
            }
        } else {
            return abort(404);
        }
    }

    public function questionOutletMarks($scheduleId, $catId)
    {
        $categoryName = Category::find($catId);
        $categories = Category::where('parent_id', $catId)->get();
        $schedule = Schedule::find($scheduleId);
        $previousSchedule = Schedule::where('hotel_location_id', $schedule->hotel_location_id)->whereDate('date', '<=', $schedule->date)->orderBy('date', 'desc')->skip(1)->take(1)->first();
        $categoriesId = $categories->pluck('id');
        if ($categories) {
            $questionsA = [];
            $questionsB = [];
            $marks = [];
            $marksPrevious = [];
            foreach ($categories as $category) {
                $questionsA[$category->name] = GenericForm::where('category_id', $category->id)->get();
                $questionsB[$category->name] = GenericFormSchedule::where([['schedule_id', $scheduleId], ['category_id', $category->id]])->get();
                $marks[$category->name] = MarksValue::where([['schedule_id', $scheduleId], ['category_id', $category->id]])->get();
                if ($previousSchedule != null) {
                    $marksPrevious[$category->name] = MarksValue::where([['schedule_id', $previousSchedule->id], ['category_id', $category->id]])->get();
                } else {
                    $marksPrevious[$category->name] = null;
                }
            }
            $aArray = [];
            $bArray = [];
            foreach ($marks as $markAll) {
                foreach ($markAll as $mark) {
                    if ($mark->type == "table_a") {
                        $aArray[$mark->question_id] = $mark->value;
                    }
                    if ($mark->type == "table_b") {
                        $bArray[$mark->question_id] = $mark->value;
                    }
                }
            }
            $aArrayPrevious = [];
            $bArrayPrevious = [];
            if ($previousSchedule != null) {
                foreach ($marksPrevious as $markAll) {
                    foreach ($markAll as $mark) {
                        if ($mark->type == "table_a") {
                            $aArrayPrevious[$mark->question_id] = $mark->value;
                        }
                        if ($mark->type == "table_b") {
                            $bArrayPrevious[$mark->question_id] = $mark->value;
                        }
                    }
                }
            } else {
                foreach ($marks as $markAll) {
                    foreach ($markAll as $mark) {
                        if ($mark->type == "table_a") {
                            $aArrayPrevious[$mark->question_id] = null;
                        }
                        if ($mark->type == "table_b") {
                            $bArrayPrevious[$mark->question_id] = null;
                        }
                    }
                }
            }
            $questionsASum = GenericForm::whereIn('category_id', $categoriesId)->sum('possible_point');
            $questionsBSum = GenericFormSchedule::where([['schedule_id', $scheduleId]])->whereIn('category_id', $categoriesId)->sum('possible_point');
            $marksSum = MarksValue::where([['schedule_id', $scheduleId]])->whereIn('category_id', $categoriesId)->sum('value');
            if ($previousSchedule) {
                $marksPreviousSum = MarksValue::where([['schedule_id', $previousSchedule->id]])->whereIn('category_id', $categoriesId)->sum('value');
            } else {
                $marksPreviousSum = 0;
            }
            $total_possible = $questionsASum + $questionsBSum;
            if ($questionsA || $questionsB) {
                return view('client.question.outlet-detail', compact(
                    'categoryName',
                    'categories',
                    'questionsA',
                    'questionsB',
                    'scheduleId',
                    'aArray',
                    'bArray',
                    'marks',
                    'total_possible',
                    'marksSum',
                    'marksPreviousSum',
                    'aArrayPrevious',
                    'bArrayPrevious'
                ));
            } else {
                return abort(404);
            }
        } else {
            return abort(404);
        }
    }

    public function summaryReport($scheduleId)
    {
        $schedule = Schedule::find($scheduleId);
        $previousSchedule = Schedule::where('hotel_location_id', $schedule->hotel_location_id)->whereDate('date', '<=', $schedule->date)->orderBy('date', 'desc')->skip(1)->take(1)->first();
        if ($schedule) {
            $lodgings = ScheduleCategory::where(['schedule_id' => $schedule->id, 'type' => 'lodging'])->get();
            $oultets = ScheduleCategory::where([['schedule_id', $scheduleId], ['type', '=', 'outlet']])->get();
            $marks = MarksValue::where('schedule_id', $scheduleId)->get();
            $questionsASum = [];
            $questionsBSum = [];
            $marksSum = [];
            $marksPreviousSum = [];
            $total_possible = [];
            foreach ($oultets as $oultet) {
                $categories = Category::where('parent_id', $oultet->category_id)->get();
                $categoriesId = $categories->pluck('id');
                if ($categories) {
                    $questionsASum[$oultet->category_id] = GenericForm::whereIn('category_id', $categoriesId)->sum('possible_point');
                    $questionsBSum[$oultet->category_id] = GenericFormSchedule::where([['schedule_id', $scheduleId]])->whereIn('category_id', $categoriesId)->sum('possible_point');
                    $marksSum[$oultet->category_id] = MarksValue::where([['schedule_id', $scheduleId]])->whereIn('category_id', $categoriesId)->sum('value');
                    if ($previousSchedule) {
                        $marksPreviousSum[$oultet->category_id] = MarksValue::where([['schedule_id', $previousSchedule->id]])->whereIn('category_id', $categoriesId)->sum('value');
                    } else {
                        $marksPreviousSum[$oultet->category_id] = null;
                    }                }
                $total_possible[$oultet->category_id] = $questionsASum[$oultet->category_id] + $questionsBSum[$oultet->category_id];
            }
            $total_possible_all = collect($total_possible)->sum();
            $marksSumAll = collect($marksSum)->sum();
            if ($previousSchedule) {
                $marksPreviousSumALl = collect($marksPreviousSum)->sum();
            } else {
                $marksPreviousSumALl = 0;
            }            $lodgingASum = [];
            $lodgingBSum = [];
            $lodgingMarksSum = [];
            $lodgingMarksPreviousSum = [];
            $total_possible_loding = [];
            foreach ($lodgings as $lodging) {
                $lodgingASum[$lodging->category_id] = GenericForm::where('category_id', $lodging->category_id)->sum('possible_point');
                $lodgingBSum[$lodging->category_id] = GenericFormSchedule::where([['schedule_id', $scheduleId], ['category_id', $lodging->category_id]])->sum('possible_point');
                $lodgingMarksSum[$lodging->category_id] = MarksValue::where([['schedule_id', $scheduleId], ['category_id', $lodging->category_id]])->sum('value');
                if ($previousSchedule){
                    $lodgingMarksPreviousSum[$lodging->category_id] = MarksValue::where([['schedule_id', $previousSchedule->category_id], ['category_id', $lodging->id]])->sum('value');
                }else{
                    $lodgingMarksPreviousSum[$lodging->category_id] = null;
                }                $total_possible_loding[$lodging->category_id] = $lodgingASum[$lodging->category_id] + $lodgingBSum[$lodging->category_id];
            }
            return view('client.summary.score', compact(
                'schedule',
                'total_possible',
                'oultets',
                'lodgings',
                'marks',
                'marksSum',
                'marksPreviousSum',
                'total_possible_all',
                'marksPreviousSumALl',
                'marksSumAll',
                'lodgingMarksSum',
                'lodgingMarksPreviousSum',
                'total_possible_loding'
            ));
        } else {
            return abort(404);
        }
    }

}
