<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function countryList()
    {
        return response()->download(public_path('search-not-found.png'), 'Search Image');
    }

    public function countrySave(Request $request)
    {
        $fileName = "search-not-found.png";
        $path = $request->file('photo')->move(public_path("/"), $fileName);
        $photoURL = url('/'.$fileName);
        dd($path);
        return response()->json(['url' => $photoURL], 200);
    }
}