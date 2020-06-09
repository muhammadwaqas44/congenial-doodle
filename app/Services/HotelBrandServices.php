<?php
/**
 * Created by PhpStorm.
 * User: Waqas Rana
 * Date: 2/3/2020
 * Time: 3:24 PM
 */

namespace App\Services;


use App\HotelBrand;
use App\HotelLocation;
use App\SubBrand;
use Illuminate\Support\Facades\Auth;

class HotelBrandServices
{
    public function addHotelBrandPost($request)
    {
        $request->validate([
            'brand_name' => 'required|string',
            'address_one' => 'required|string',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'zip' => 'required',

        ], [
            'brand_name.required' => 'Hotel Company Name is required',
            'address_one.required' => 'Address 1 is required',
            'city.required' => 'City Name is required',
            'state.required' => 'Please select state',
            'country.required' => 'Please select country',
            'zip.required' => 'Zip is required',
        ]);
        $hotelBrand = HotelBrand::create(array_merge($request->except('_token'), ['user_id' => Auth::id()]));
        if ($hotelBrand) {
            return response()->json(['result' => 'success', 'message' => 'Hotel Brand Add Successfully']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'Form Not Submit']);
        }

    }

    public function editHotelBrandPost($request)
    {
        $request->validate([
            'brand_name' => 'required|string',
            'address_one' => 'required|string',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'zip' => 'required',

        ], [
            'brand_name.required' => 'Hotel Company Name is required',
            'address_one.required' => 'Address 1 is required',
            'city.required' => 'City Name is required',
            'state.required' => 'Please select state',
            'country.required' => 'Please select country',
            'zip.required' => 'Zip is required',
        ]);
        $hotelBrand = HotelBrand::find($request->id);
        if ($hotelBrand) {
            $hotelBrand->update(array_merge($request->except('_token')));
            return response()->json(['result' => 'success', 'message' => 'Hotel Brand Update Successfully']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'Record Not Found']);
        }

    }

    public function subBrandAddPost($request)
    {
        $request->validate([
            'sub_brand' => 'required|string',
        ], [
            'sub_brand.required' => 'Sub Brand Name is required',
        ]);
        $hotelBrand = SubBrand::create(array_merge($request->except('_token'), ['user_id' => Auth::id()]));
        if ($hotelBrand) {
            return response()->json(['result' => 'success', 'message' => 'Sub Brand Add Successfully']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'Form Not Submit']);
        }

    }


    public function subBrandEditPost($request)
    {
        $request->validate([
            'sub_brand' => 'required|string',
        ], [
            'sub_brand.required' => 'Sub Brand Name is required',
        ]);
        $subBrand = SubBrand::find($request->id);
        if ($subBrand) {
            $subBrand->update(array_merge($request->except('_token')));
            return response()->json(['result' => 'success', 'message' => 'Sub Brand Update Successfully']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'No Record Find']);
        }

    }

    public function addHotelLocationPost($request)
    {

        $request->validate([
            'brand_id' => 'required|integer',
            'company_id' => 'required|integer',
//            'sub_brand_id' => 'required|integer',
            'location_name' => 'required|string',
            'address_one' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'zip' => 'required|string',
            'region' => 'required|string',
            'type' => 'required|string',
            'star_rating' => 'required|string',

        ], [
            'brand_name.required' => 'Hotel Brand is requried , Please select Hotel Brand',
            'company_id.required' => 'Company is requried , Please select Company',
//            'sub_brand_id.required' => 'Sub Brand is requried , Please select Sub Brand',
            'address_one.required' => 'Address 1 is required',
            'location_name.required' => 'Location Name is required',
            'city.required' => 'City Name is required',
            'state.required' => 'Please select state',
            'country.required' => 'Please select country',
            'zip.required' => 'Zip is required',
            'region.required' => 'Location Region is requried , Please select Location Region',
            'type.required' => 'Hotel Type is requried , Please select Hotel Type',
            'star_rating.required' => 'Star Rating is requried , Please select Star Rating',
        ]);
       $hotelBrandLocation = HotelLocation::create([
           'user_id' => Auth::id(),
           "brand_id" => $request->brand_id,
           "sub_brand_id" => $request->sub_brand_id,
           "company_id" => $request->company_id,
           "location_name" => $request->location_name,
           "city" => $request->city,
           "address_one" => $request->address_one,
           "address_two" => $request->address_two,
           "zip" => $request->zip,
           "state" => $request->state,
           "country" => $request->country,
           "notes" => $request->notes,
           "region" => $request->region,
           "type" => $request->type,
           "star_rating" => $request->star_rating,
       ]);
        if ($hotelBrandLocation) {
            return response()->json(['result' => 'success', 'message' => 'Hotel Brand Location Add Successfully']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'Form Not Submit']);
        }

    }
    public function editHotelLocationPost($request)
    {

        $request->validate([
            'brand_id' => 'required|integer',
            'company_id' => 'required|integer',
//            'sub_brand_id' => 'required|integer',
            'location_name' => 'required|string',
            'address_one' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'zip' => 'required|string',
            'region' => 'required|string',
            'type' => 'required|string',
            'star_rating' => 'required|string',

        ], [
            'brand_name.required' => 'Hotel Brand is requried , Please select Hotel Brand',
            'company_id.required' => 'Company is requried , Please select Company',
//            'sub_brand_id.required' => 'Sub Brand is requried , Please select Sub Brand',
            'address_one.required' => 'Address 1 is required',
            'location_name.required' => 'Location Name is required',
            'city.required' => 'City Name is required',
            'state.required' => 'Please select state',
            'country.required' => 'Please select country',
            'zip.required' => 'Zip is required',
            'region.required' => 'Location Region is requried , Please select Location Region',
            'type.required' => 'Hotel Type is requried , Please select Hotel Type',
            'star_rating.required' => 'Star Rating is requried , Please select Star Rating',
        ]);
        $hotelBrandLocation = HotelLocation::find($request->id);

        if ($hotelBrandLocation) {
            $hotelBrandLocation->update([
                "brand_id" => $request->brand_id,
                "company_id" => $request->company_id,
                "sub_brand_id" => $request->sub_brand_id,
                "location_name" => $request->location_name,
                "city" => $request->city,
                "address_one" => $request->address_one,
                "address_two" => $request->address_two,
                "zip" => $request->zip,
                "state" => $request->state,
                "country" => $request->country,
                "notes" => $request->notes,
                "region" => $request->region,
                "type" => $request->type,
                "star_rating" => $request->star_rating,
            ]);
            return response()->json(['result' => 'success', 'message' => 'Hotel Brand Location Update Successfully']);
        } else {
            return response()->json(['result' => 'error', 'message' => 'Record Not Found']);
        }

    }
}
