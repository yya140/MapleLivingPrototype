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

    public function saveHousing(Request $request){
        $housing = new Housing();
        $housing->address = $request->input('address');
        $housing->unit = $request->input('unit');
        $housing->city = $request->input('city');
        $housing->category = $request->input('category');
        $housing->description = $request->input('description');
        $housing->size = $request->input('size');
        $housing->numberOfBedroom = $request->input('numberOfBedroom');
        $housing->numberOfPrivateBathroom = $request->input('numberOfPrivateBathroom');
        $housing->numberOfSharedBathroom = $request->input('numberOfSharedBathroom');
        $housing->numberOfLocker = $request->input('numberOfLocker');
        $housing->maxOccupancy = $request->input('maxOccupancy');
        $housing->pet = $request->input('pet');
        $housing->furnished = $request->input('furnished');
        $housing->smoking = $request->input('smoking');
        $housing->sublease = $request->input('sublease');
        $housing->price = $request->input('price');
        $housing->paymentFrequency = $request->input('paymentFrequency');
        $housing->duration = $request->input('duration');
        $housing->availableDate = $request->input('availableDate');

        $file = $request->file('file');
        // 图片上传是否成功
        if ($file->isValid()) {
            // 扩展名
            $ext = $file->getClientOriginalExtension();
            // 生成唯一的文件名
            $filename = date('YmdHis') . '-' . uniqid() . '.' . $ext;
            // 将文件存储到 public/images
            $file->move(public_path('images/'), $filename);
        }

        $housing->imageName = $filename;

        $housing->save();
        return redirect('backHome')->with('success', 'Car has been successfully added');
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
