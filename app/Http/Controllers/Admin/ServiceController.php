<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Company;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;
use Validator;
use Yajra\DataTables\DataTables;

class ServiceController extends Controller
{
    public function categoryList(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::orderBy('id', 'DESC')->where('parent_id',null)->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function (Category $category) {

                    $btn = '<a href="'.route('edit-category',$category->id).'" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                                            ';
                    return $btn;
                })
                ->addColumn('type', function (Category $category) {

                    if ($category->type == 1){
                        $type =  'Lodging' ;
                        return $type;
                    } elseif ($category->type == 2) {
                        $type =  'Outlet' ;
                        return $type;
                    }  else{
                        $type =  'Outlet Category' ;
                        return $type;
                    }
                })
                ->addColumn('parent_category', function (Category $category) {

                    if ($category->category == null){
                        $parent=  'No Parent Category' ;
                        return $parent;
                    }  else{
                        $parent =  $category->category->name ;
                        return $parent;
                    }
                })
                ->addColumn('sub_button', function (Category $category) {

                    $category_count = Category::where('parent_id',$category->id)->count();
                    if ($category_count != null){
                        $sub_button  = '<a href="' . route('sub-categories-listing', ['parentId' => $category->id]) . '"
                      class="btn btn-primary btn-sm">'.$category_count.' Sub Categories</a>';
                        return $sub_button;
                    }else{

                        $sub_button  ='<a href="#" class="btn btn-info btn-sm">
                            No Sub Categories</a>';
                        return $sub_button;
                    }
                })
                ->rawColumns(['action','sub_button'])
                ->make(true);
        }
        return view('dashboard.category.categories-listing');
    }

    public function categorySubList(Request $request, $parentId)
    {
        if ($request->ajax()) {
            $data = Category::orderBy('id', 'DESC')->where('parent_id',$parentId)->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function (Category $category) {

                    $btn = '<a href="'.route('edit-category',$category->id).'" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                                            ';
                    return $btn;
                })
                ->addColumn('type', function (Category $category) {

                    if ($category->type == 1){
                        $type =  'Lodging' ;
                        return $type;
                    } elseif ($category->type == 2) {
                        $type =  'Outlet' ;
                        return $type;
                    }  else{
                        $type =  'Outlet Category' ;
                        return $type;
                    }
                })
                ->addColumn('parent_category', function (Category $category) {

                    if ($category->category == null){
                        $parent=  'No Parent Category' ;
                        return $parent;
                    }  else{
                        $parent =  $category->category->name ;
                        return $parent;
                    }
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('dashboard.category.sub-categories-listing',compact('parentId'));
    }


    public function addCategory()
    {
        return view('dashboard.category.add-category', ['category' => '']);
    }

    public function editCategory($id)
    {
        $category = Category::where('id', $id)->first();
        if ($category) {
            return view('dashboard.category.add-category', ['category' => $category]);
        } else {
            return redirect()->route('categories-listing')->with(['result' => 'error', 'message' => 'This id does not exists']);
        }

    }

    public function addCategory_post(Request $request)
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

    public function edidCategory_post(Request $request)
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
