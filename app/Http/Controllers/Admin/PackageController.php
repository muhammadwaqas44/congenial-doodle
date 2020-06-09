<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Package;
use App\Service;
use Illuminate\Http\Request;
use Validator;
use Yajra\DataTables\DataTables;

class PackageController extends Controller
{
    public function packages(Request $request)
    {
        if ($request->ajax()) {
            $data = Package::orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function (Package $package) {

                    $btn = '<a href="' . route('edit-package', ['id' => $package->id]) . '"
                                                       class="btn btn-primary btn-sm"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                <a href="' . route('delete-package', ['id' => $package->id]) . '" class="btn btn-danger btn-sm" id="delete"><i class="far fa-trash-alt"></i></a>
                                                            
                                                            ';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('dashboard.packages.package-listing');
    }

    public function addPackage()
    {
        return view('dashboard.packages.add-package', ['package' => '']);
    }

    public function addPackage_Post(Request $request)
    {
        $errorMessage = [
            'title.required' => 'Please add title'
        ];
        $validator = Validator::make($request->all(),
            [
                'title' => 'required|string'
            ], $errorMessage
        );
        if ($validator->fails()) {
            return response()->json(['result' => 'error', 'message' => $validator->messages()->first()]);
        }
        $package = new Package();
        $package->title = $request->title;
        $package->save();
        if ($package) {
            return response()->json(['result' => 'success', 'message' => 'Package has been added.']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'Package not added.']);
        }
    }

    public function editPackage($id)
    {
        $package = Package::where('id', $id)->first();
        if ($package) {
            return view('dashboard.packages.add-package', ['package' => $package]);
        } else {
            return redirect()->route('package-listing')->with(['result' => 'error', 'message' => 'This id does not exists']);
        }
    }

    public function editPackage_Post(Request $request)
    {
        $package = Package::where('id', $request->id)->first();
        if ($package->count() > 0) {
            $package->title = $request->title;
            $package->save();
            return response()->json(['result' => 'success', 'message' => 'Package has been updated.']);
        } else {
            return redirect()->route('package-listing')->with(['result' => 'error', 'message' => 'This id does not exists']);
        }
    }

    public function packageDelete($id)
    {
        $package = Package::where('id', $id)->first();
        if ($package) {
            $package->delete();
            return redirect()->back();
        } else {
            return 'No Record Found';
        }
    }
}
