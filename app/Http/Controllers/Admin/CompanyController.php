<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\HotelBrand;
use App\HotelLocation;
use App\Http\Controllers\Controller;
use App\Package;
use App\Role;
use App\Service;
use App\Services\CompanyServices;
use App\SubBrand;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class CompanyController extends Controller
{
    public function companies(Request $request)
    {
        if ($request->ajax()) {
            $data = Company::with(['user', 'location', 'brand'])->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addColumn('action', function (Company $company) {

                    $btn = '<a href="' . route('edit-company', ['companyId' => $company->id]) . '"
class="btn btn-primary btn-sm"><i
class="fas fa-pencil-alt"></i></a>
  <a href="'.route('scheduleListingCompany',$company->id).'" class="btn btn-primary btn-sm viw-btn-sh">View
                                                    Portal</a>
';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('dashboard.companies.company-listing');
    }

    public function addCompany()
    {
        $password = Str::random('16');
        $hotelBrands = HotelBrand::all();
        $subBrands = SubBrand::all();
        $hotelLocations = HotelLocation::all();
        return view('dashboard.companies.add-company', ['hotelBrands' => $hotelBrands, 'subBrands' => $subBrands, 'hotelLocations' => $hotelLocations, 'password' => $password]);
    }

    public function editCompany($companyId)
    {
        $company = Company::find($companyId);
        if ($company) {
            $hotelBrands = HotelBrand::all();
            $subBrands = SubBrand::all();
            $hotelLocations = HotelLocation::all();
            return view('dashboard.companies.edit-company', ['company' => $company,'hotelBrands' => $hotelBrands, 'subBrands' => $subBrands, 'hotelLocations' => $hotelLocations]);
        } else {
            return 'No Record Found';
        }
    }

    public function addCompanyPost(Request $request, CompanyServices $companyServices)
    {

        $data = $companyServices->addCompanyPost($request);
        return $data;
    }

    public function editCompanyPost($companyId, Request $request, CompanyServices $companyServices)
    {
        $data = $companyServices->editCompanyPost($companyId, $request);
        return $data;
    }

    public function hotels(Request $request)
    {
        return view('dashboard.companies.hotel-listing');
    }

    public function calender(Request $request)
    {
        return view('dashboard.schedules.schedule-calender');
    }

    public function visits(Request $request)
    {
        return view('dashboard.schedules.completed-visits');
    }


}
