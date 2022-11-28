<?php

namespace App\Http\Controllers;

use App\Models\cities;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function getAllJson(Request $request)
    {
        $collection = $request->all();

        if (isset($collection['search'])) {
            $search = $collection['search'] . '%';
            $cities = cities::where('city_ascii', 'like', $search)->get(['id', 'city_ascii'])->toArray();
        } else {
            $cities = cities::get(['id', 'city_ascii'])->take(10)->toArray();
        }

        $return = [];
        foreach ($cities as $city) {
            $return['items'][] = [
                'id' => $city['id'],
                'text' => $city['city_ascii']
            ];
        }
        return response()->json($return);
    }
}
