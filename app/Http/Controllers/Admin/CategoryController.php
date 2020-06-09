<?php

namespace App\Http\Controllers\Admin;

use App\GenericForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Validator;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    public function lodgingList(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::orderBy('id', 'DESC')->where([['parent_id', null], ['type', 1]])->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function (Category $category) {

                    $btn = '<a href="' . route('edit-category', $category->id) . '" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                                            <a href="' . route('question-category', $category->id) . '" class="btn btn-primary btn-sm">
                                                            Question Form View</a>';
                    return $btn;
                })
                ->addColumn('type', function (Category $category) {

                    if ($category->type == 1) {
                        $type = 'Lodging';
                        return $type;
                    } elseif ($category->type == 2) {
                        $type = 'Outlet';
                        return $type;
                    } else {
                        $type = 'Outlet Category';
                        return $type;
                    }
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('dashboard.category.lodging-listing');
    }

    public function outletsList(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::orderBy('id', 'DESC')->where([['parent_id', null], ['type', 2]])->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function (Category $category) {

                    $btn = '<a href="' . route('edit-category', $category->id) . '" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                                          <a href="' . route('sub-outlets-listing', ['parentId' => $category->id]) . '"
                      class="btn btn-primary btn-sm">View Sub Categories</a>  ';
                    return $btn;
                })
                ->addColumn('type', function (Category $category) {

                    if ($category->type == 1) {
                        $type = 'Lodging';
                        return $type;
                    } elseif ($category->type == 2) {
                        $type = 'Outlet';
                        return $type;
                    } else {
                        $type = 'Outlet Category';
                        return $type;
                    }
                })
                ->addColumn('sub_button', function (Category $category) {

                    $category_count = Category::where('parent_id', $category->id)->count();
                    if ($category_count != null) {
                        $sub_button = '<h5><span class="badge badge-pill badge-primary">'.$category_count .'</span></h5>';
                        return $sub_button;
                    } else {

                        $sub_button = '<a href="#" class="btn btn-info btn-sm">
                            No Sub Categories</a>';
                        return $sub_button;
                    }
                })
                ->rawColumns(['action', 'sub_button'])
                ->make(true);
        }
        return view('dashboard.category.outlets-listing');
    }

    public function categorySubList(Request $request, $parentId)
    {
        $category = Category::find($parentId);
        if ($request->ajax()) {
            $data = Category::orderBy('id', 'DESC')->where('parent_id', $parentId)->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function (Category $category) {

                    $btn = '<a href="' . route('edit-category', $category->id) . '" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                                            <a href="' . route('question-category', $category->id) . '" class="btn btn-primary btn-sm">
                                                            Question Form View</a> ';
                    return $btn;
                })
                ->addColumn('type', function (Category $category) {

                    if ($category->type == 1) {
                        $type = 'Lodging';
                        return $type;
                    } elseif ($category->type == 2) {
                        $type = 'Outlet';
                        return $type;
                    } else {
                        $type = 'Outlet Category';
                        return $type;
                    }
                })
                ->addColumn('parent_category', function (Category $category) {

                    if ($category->category == null) {
                        $parent = 'No Parent Category';
                        return $parent;
                    } else {
                        $parent = $category->category->name;
                        return $parent;
                    }
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('dashboard.category.sub-categories-listing', compact('category', 'parentId'));
    }


    public function addCategory()
    {
        return view('dashboard.category.add-category');
    }

    public function categoryQuestion($id)
    {
        $questions = GenericForm::where('category_id', $id)->get();
        if ($questions) {
            $category = Category::find($id);
            return view('dashboard.category.question', compact('questions', 'category'));
        } else {
            return 'No Record Found';
        }
    }

    public function categoryQuestionPostAdd(Request $request)
    {
        $errorMessage = [
            'question.required' => 'Please add Question',
            'possible_point.required' => 'Please add Possible Point',
            'question_no.required' => 'Please add Question no',
            'category_id.required' => 'Not Found any Category Id',
        ];
        $validator = Validator::make($request->all(),
            [
                'question' => 'required|string',
                'possible_point' => 'required|integer',
                'question_no' => 'required|integer',
                'category_id' => 'required|integer',
            ], $errorMessage
        );
        if ($validator->fails()) {
            return response()->json(['result' => 'error', 'message' => $validator->messages()->first()]);
        }
        $question = new GenericForm();
        $question->question = $request->question;
        $question->possible_point = $request->possible_point;
        $question->question_no = $request->question_no;
        $question->category_id = $request->category_id;
        $question->save();
        if ($question) {
            return response()->json(['result' => 'success', 'message' => 'Question has been updated.']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'Form not submit']);
        }
    }

    public
    function categoryQuestionPostEdit(Request $request)
    {
        $question = GenericForm::where('id', $request->id)->first();
        if ($question->count() > 0) {
            $question->question = $request->question;
            $question->possible_point = $request->possible_point;
            $question->question_no = $request->question_no;
            $question->save();
            return response()->json(['result' => 'success', 'message' => 'Question has been updated.']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'This id does not exists']);
        }
    }

    public
    function editCategory($id)
    {
        $category = Category::where('id', $id)->first();
        if ($category) {
            return view('dashboard.category.add-category', ['category' => $category]);
        } else {
            return redirect()->route('categories-listing')->with(['result' => 'error', 'message' => 'This id does not exists']);
        }

    }

    public
    function addCategory_post(Request $request)
    {
        $errorMessage = [
            'name.required' => 'Please add title',
        ];
        $validator = Validator::make($request->all(),
            [
                'title' => 'required|string',
            ], $errorMessage
        );
        if ($validator->fails()) {
            return response()->json(['result' => 'error', 'message' => $validator->messages()->first()]);
        }

        $category = new Category();
        $category->name = $request->name;
        $category = $category->save();
        if ($category) {
            return response()->json(['result' => 'success', 'message' => 'Category has been added.']);
        }
    }

    public
    function edidCategory_post(Request $request)
    {
        $category = Category::where('id', $request->id)->first();
        if ($category->count() > 0) {
            $category->name = $request->name;
            $category->save();
            return response()->json(['result' => 'success', 'message' => 'Category has been updated.']);
        } else {
            return redirect()->route('categories-listing')->with(['result' => 'error', 'message' => 'This id does not exists']);
        }
    }

}
