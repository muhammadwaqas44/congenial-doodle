<?php

namespace App\Http\Controllers\Editor;

use App\Category;
use App\GenericForm;
use App\GenericFormSchedule;
use App\Http\Controllers\Controller;
use App\MarksValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function questionCategory($scheduleId, $catId)
    {
        $category = Category::find($catId);
        if ($category) {
            $questionsA = GenericForm::where('category_id', $catId)->get();
            $questionsB = GenericFormSchedule::where([['schedule_id', $scheduleId], ['category_id', $catId]])->get();
            if ($questionsA || $questionsB) {
                return view('editor-dashboard.question.question-form', compact('category', 'questionsA', 'questionsB', 'scheduleId'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function questionEditCategory($scheduleId, $catId)
    {
        $category = Category::find($catId);
        if ($category) {
            $questionsA = GenericForm::where('category_id', $catId)->get();
            $questionsB = GenericFormSchedule::where([['schedule_id', $scheduleId], ['category_id', $catId]])->get();
            $marks = MarksValue::where([['schedule_id', $scheduleId], ['category_id', $catId]])->get();
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
            if ($questionsA || $questionsB) {
                return view('editor-dashboard.question.edit-question', compact('category', 'questionsA', 'questionsB', 'scheduleId', 'aArray', 'bArray'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }


    public function scheduleQuestionPostAdd(Request $request)
    {
        $request->validate([
            'possible_point' => 'required|integer',
            'question' => 'required|string',
        ], [

            'possible_point.required' => 'Possible point  is required',
            'question.required' => 'Question  is required',
        ]);
        $GenericFormSchedule = GenericFormSchedule::create([
            "category_id" => $request->category_id,
            "schedule_id" => $request->schedule_id,
            "possible_point" => $request->possible_point,
            "question" => $request->question,
            'user_id' => Auth::id(),
        ]);
        if ($GenericFormSchedule) {
            return response()->json(['result' => 'success', 'message' => 'Question Add Successfully']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'Form Not Submit']);
        }

    }

    public function marksValuePost(Request $request)
    {
        $scheduleId = $request->schedule_id;
        $catId = $request->category_id;
        $insertArray = [];
        foreach ($request->value as $type => $value) {
            foreach ($value as $key => $val) {
                $insertArray[] = [
                    'question_id' => $key,
                    'value' => $val,
                    'type' => $type,
                    'schedule_id' => $scheduleId,
                    'category_id' => $catId,
                    'user_id' => Auth::id(),
                ];
            }
        }
        $data = MarksValue::insert($insertArray);
        if ($data) {
            return response()->json(['result' => 'success', 'message' => 'Report Add Successfully']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'Report Not Submit']);
        }
    }

    public function marksEditValuePost(Request $request)
    {

        $scheduleId = $request->schedule_id;
        $catId = $request->category_id;
        $insertArray = [];
        foreach ($request->value as $type => $value) {
            foreach ($value as $key => $val) {
                MarksValue::where(["type" => $type, "schedule_id" => $scheduleId, "category_id" => $catId, "question_id" => $key])->update([
                    'value' => $val,
                ]);
            }
        }
        return response()->json(['result' => 'success', 'message' => 'Report Edit Successfully']);
    }
}
