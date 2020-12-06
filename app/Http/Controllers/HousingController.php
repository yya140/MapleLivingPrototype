<?php

namespace App\Http\Controllers;

use App\Housing;
use Illuminate\Http\Request;

class HousingController extends Controller
{
    public function createHousing(){
        return view('back/housing/createHousing');
    }

    public function saveHousing(){
        $housing = new Housing();
        $housing->test = 'testfield';
        $housing->save();
        return redirect('home')->with('success', 'Car has been successfully added');
    }
}
