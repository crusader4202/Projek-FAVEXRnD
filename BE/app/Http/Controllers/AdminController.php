<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class AdminController extends Controller
{
    //
    public function viewfood(){
        $foods = Food::all();
        return view('food', compact('foods'));
    }

    public function createfood(){
        return view('createfood');
    }

    public function store(Request $request){
        if($request->hasFile('gambar')){
            $fileNameWithExt = $request->file('gambar')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'_'.'.'.$extension;
            $path = $request->file('gambar')->storeAs('public/food', $fileNameToStore);
        }else{
            $fileNameToStore = 'no-image.jpg';
        }
        
        Food::create([
            'nama' => $request->nama,
            'desc' => $request->desc,
            'harga' => $request->harga,
            'gambar' => $fileNameToStore
        ]);
        return redirect('/');
    }

    public function destroyfood($id){
        Food::destroy($id);
        return back();
    }

    public function viewdata($id){
        $food = Food::FindOrFail($id);
        return view('viewfood', compact('food'));
    }

    public function edit($id){
        $food = Food::FindOrFail($id);
        return view('update', compact('food'));
    }

    public function updatefood(Request $request, $id){
        if($request->hasFile('gambar')){
            $fileNameWithExt = $request->file('gambar')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'_'.'.'.$extension;
            $path = $request->file('gambar')->storeAs('public/food', $fileNameToStore);
        }else{
            $fileNameToStore = 'no-image.jpg';
        }

        Food::FindOrFail($id)->update([
            'nama' => $request->nama,
            'desc' => $request->desc,
            'harga' => $request->harga,
            'gambar' => $fileNameToStore
        ]);
        return redirect('/');
    }
}
