<?php

namespace App\Http\Controllers;

use App\Category;
use App\GenericForm;
use App\GenericFormSchedule;
use App\Http\Controllers\Controller;
use App\MarksValue;
use App\Schedule;
use App\ScheduleCategory;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class ReportPrintController extends Controller
{
    public function outletPrint($scheduleID)
    {
        $schedulesLcationOne = Schedule::find($scheduleID);;
        $schedulesLcationTwo = Schedule::where('hotel_location_id', $schedulesLcationOne->hotel_location_id)->whereDate('date', '<=', $schedulesLcationOne->date)->orderBy('date', 'desc')->skip(1)->take(1)->first();
        $outletsAll = Category::where('type', '2')->get();
        if ($schedulesLcationOne) {
            $outlets = [];
            foreach ($outletsAll as $outlet) {
                $outlets[$outlet->id] = ScheduleCategory::where([['schedule_id', $schedulesLcationOne->id], ['type', '=', 'outlet']])->get();
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
                        $marksPreviousSum[$oultet->id] = 0;
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
            $pdf = PDF::loadView('print.outlet', compact(
                'schedulesLcationOne',
                'schedulesLcationTwo',
                'total_possible',
                'outletsAll',
                'outlets',
                'marks',
                'marksSum',
                'marksPreviousSum',
                'total_possible_all',
                'marksPreviousSumALl',
                'marksSumAll'
            ));
            return $pdf->download('outlet-summary.pdf');
        } else {
            return abort(404);
        }
    }

    public function lodgingPrint($scheduleID)
    {
        $schedulesLcationOne = Schedule::find($scheduleID);;
        $schedulesLcationTwo = Schedule::where('hotel_location_id', $schedulesLcationOne->hotel_location_id)->whereDate('date', '<=', $schedulesLcationOne->date)->orderBy('date', 'desc')->skip(1)->take(1)->first();
        $lodgingsAll = Category::where('type', '1')->get();
        if ($schedulesLcationOne) {
            $lodgings = [];
            $lodgingASum = [];
            foreach ($lodgingsAll as $lodging) {
                $lodgings[$lodging->id] = ScheduleCategory::where(['schedule_id' => $schedulesLcationOne->id, 'type' => 'lodging'])->get();
                $lodgingASum[$lodging->id] = GenericForm::where('category_id', $lodging->id)->sum('possible_point');
            }
            $marks = MarksValue::where('schedule_id', $schedulesLcationOne->id)->get();
            $lodgingMarksSum = [];
            $lodgingMarksPreviousSum = [];
            foreach ($lodgings as $lodgingGet) {
                foreach ($lodgingGet as $lodging) {
                    $lodgingMarksSum[$lodging->category_id] = MarksValue::where([['schedule_id', $schedulesLcationOne->id], ['category_id', $lodging->category_id]])->sum('value');
                    if ($schedulesLcationTwo) {
                        $lodgingMarksPreviousSum[$lodging->category_id] = MarksValue::where([['schedule_id', $schedulesLcationTwo->id], ['category_id', $lodging->category_id]])->sum('value');
                    } else {
                        $lodgingMarksPreviousSum[$lodging->category_id] = 0;
                    }
                }
            }
            $pdf = PDF::loadView('print.lodging', compact(
                'schedulesLcationOne',
                'schedulesLcationTwo',
                'lodgingsAll',
                'lodgings',
                'lodgingMarksSum',
                'lodgingMarksPreviousSum',
                'lodgingASum'
            ));
            return $pdf->download('lodging-summary.pdf');
        } else {
            return abort(404);
        }
    }
}
