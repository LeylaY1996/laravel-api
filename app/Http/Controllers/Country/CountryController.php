<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CountryModel;

class CountryController extends Controller
{
    public function country()
    {
        return response()->json(CountryModel::get(), 200);
    }

    public function countryByID($id)
    {
        return response()->json(CountryModel::find($id), 200);
    }


    /* 201 create success code */
    public function countrySave(Request $request)
    {
        var_dump($_POST);
        $country = CountryModel::create($request->all());
        return response()->json($country, 201);
    }
}