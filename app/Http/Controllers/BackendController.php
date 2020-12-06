<?php

namespace App\Http\Controllers;

use App\Housing;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function backHome(){
        return view('back/home');
    }

    public function createHousing(){
        return view('back/housing/createHousing');
    }

    public function saveHousing(){
        $housing = new Housing();
        $housing->test = 'testfield';
        $housing->testchange = '1';
        $housing->save();
        return redirect('home')->with('success', 'Car has been successfully added');
    }

    public function modifyHousing(){
        return view('/back/housing/modifyHousing');
    }



    public function updateHousing(Request $request){
        $housing = Housing::Where('test', '=', 'testfield');
        $housing->update(['testchange' => '2','carcompany' => $request->input('carcompany')]);
        return redirect('home')->with('success', 'Car has been successfully added');
    }

}
