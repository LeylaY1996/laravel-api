<?php

namespace App\Http\Controllers\Country;

use App\Models\CountryModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    public function country()
    {
        return response()->json(CountryModel::get(), 200);
    }

    public function countryByID($id)
    {
        $country = CountryModel::find($id);
        if (is_null($country)) {
            return response()->json(["message"=>"Böyle bir ülke yok"], 404);
        }
        return response()->json($country, 200);
    }


    /* 201 create save success code */
    public function countrySave(Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'iso' => 'required|min:2|max:5'
        ];
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $country = CountryModel::create($request->all());
        return response()->json($country, 201);
    }

    public function countryUpdate(Request $request, $id)
    {
        $country = CountryModel::find($id);
        if (is_null($country)) {
            return response()->json(["message"=>"Böyle bir ülke yok"], 404);
        }
        $country->update($request->all());
        return response()->json($country, 200);
    }

    /* 204 create delete success code */
    public function countryDelete(Request $request, $id)
    {
        $country = CountryModel::find($id);
        if (is_null($country)) {
            return response()->json(["message"=>"Böyle bir ülke yok"], 404);
        }
        $country->delete();
        return response()->json(null, 204);
    }
}