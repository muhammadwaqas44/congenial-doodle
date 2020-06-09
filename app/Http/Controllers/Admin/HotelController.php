<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\HotelBrand;
use App\HotelLocation;
use App\Http\Controllers\Controller;
use App\Services\HotelBrandServices;
use App\SubBrand;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class HotelController extends Controller
{
    public function allHotelBrands(Request $request)
    {
        if ($request->ajax()) {
            $data = HotelBrand::orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addColumn('action', function (HotelBrand $hotelBrand) {

                    $btn = ' <a href="' . route('edit-hotel-brand', $hotelBrand->id) . '" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a> ';
                    return $btn;
//                    <a href="#" class="btn btn-danger btn-sm" ><i class="far fa-trash-alt"></i></a>
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('dashboard.hotel-brand.hotel-listing');
    }

    public function addHotelBrand()
    {
        return view('dashboard.hotel-brand.add-hotel', ['hotelbrand' => '']);
    }

    public function editHotelBrand($id)
    {
        $hotelbrand = HotelBrand::find($id);
        return view('dashboard.hotel-brand.add-hotel', ['hotelbrand' => $hotelbrand]);
    }

    public function addHotelBrandPost(Request $request, HotelBrandServices $hotelBrandServices)
    {
        $data = $hotelBrandServices->addHotelBrandPost($request);
        return $data;
    }

    public function editHotelBrandPost(Request $request, HotelBrandServices $hotelBrandServices)
    {
        $data = $hotelBrandServices->editHotelBrandPost($request);
        return $data;
    }

    public function subBrandListing(Request $request)
    {
        if ($request->ajax()) {
            $data = SubBrand::orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addColumn('action', function (SubBrand $subBrand) {
                    $btn = ' <a href="' . route('subBrandEdit', $subBrand->id) . '" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                             ';
//                    <a href="#" class="btn btn-danger btn-sm" ><i class="far fa-trash-alt"></i></a>

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('dashboard.sub-brand.sub-brand-listing');
    }

    public function subBrandAdd()
    {
        return view('dashboard.sub-brand.add-sub-brand', ['subbrand' => '']);
    }

    public function subBrandEdit($id)
    {
        $subbrand = SubBrand::find($id);
        return view('dashboard.sub-brand.add-sub-brand', ['subbrand' => $subbrand]);
    }

    public function subBrandAddPost(Request $request, HotelBrandServices $hotelBrandServices)
    {
        $data = $hotelBrandServices->subBrandAddPost($request);
        return $data;
    }

    public function subBrandEditPost(Request $request, HotelBrandServices $hotelBrandServices)
    {
        $data = $hotelBrandServices->subBrandEditPost($request);
        return $data;
    }

    public function allHotelLocations(Request $request)
    {
        if ($request->ajax()) {
            $data = HotelLocation::with(['brand', 'subbrand','company'])->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addColumn('action', function (HotelLocation $hotelLocation) {
                    $btn = ' <a href="' . route('editHotelLocation', $hotelLocation->id) . '" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                             ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('dashboard.hotel-location.hotel-location-listing');
    }

    public function addHotelLocation()
    {
        $hotelBrands = HotelBrand::all();
        $subBrands = SubBrand::all();
        $companies = Company::all();
        return view('dashboard.hotel-location.add-hotel-location', ['hotelLocation' => '', 'hotelBrands' => $hotelBrands, 'subBrands' => $subBrands, 'companies' => $companies]);
    }

    public function editHotelLocation($id)
    {
        $hotelBrands = HotelBrand::all();
        $subBrands = SubBrand::all();
        $hotelLocation = HotelLocation::find($id);
        $companies = Company::all();
        return view('dashboard.hotel-location.add-hotel-location', ['hotelLocation' => $hotelLocation, 'hotelBrands' => $hotelBrands, 'companies' => $companies, 'subBrands' => $subBrands]);
    }

    public function addHotelLocationPost(Request $request, HotelBrandServices $hotelBrandServices)
    {
        $data = $hotelBrandServices->addHotelLocationPost($request);
        return $data;
    }

    public function editHotelLocationPost(Request $request, HotelBrandServices $hotelBrandServices)
    {
        $data = $hotelBrandServices->editHotelLocationPost($request);
        return $data;
    }

}
