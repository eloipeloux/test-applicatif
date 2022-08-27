<?php

namespace App\Http\Controllers;

use App\Models\MyHouse1;
use App\Models\MyHouse2;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create(Request $request)
    {
        $html = '';
        $nbBlueHouses = 0;
        $nbGreenHouses = 0;

        if(isset($request->blue_houses)) {
            for($i = 0; $i < $request->blue_houses; $i++) {
                // Create a new House for inputed int in form
                $house = new MyHouse1();
                $html .= $house->generate();
                $nbBlueHouses++;
            }
        }
        if(isset($request->green_houses)) {
            for($i = 0; $i < $request->green_houses; $i++) {
                $house2 = new MyHouse2();
                $html .= $house2->generate();
                $nbGreenHouses++;
            }
        }

        return view('welcome', compact('nbBlueHouses', 'nbGreenHouses', 'html'));
    }
}
