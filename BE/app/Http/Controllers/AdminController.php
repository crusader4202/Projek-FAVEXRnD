<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Food;
use App\Category;

class AdminController extends Controller
{
    //
    public function viewfood(){
        $foods = DB::table('food')->paginate(8);
        $categories = Category::all();
        return view('food', ['foods'=>$foods],compact('categories'));
    }

    public function createfood(){
        $categories = Category::all();
        return view('createfood', compact('categories'));
    }

    public function storefood(Request $request){
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
            'gambar' => $fileNameToStore,
            'category_id' => $request->category_id
        ]);
        return redirect('/');
    }

    public function destroyfood($id){
        Food::destroy($id);
        return back();
    }

    public function viewdatafood($id){
        $food = Food::FindOrFail($id);
        return view('viewfood', compact('food'));
    }

    public function editfood($id){
        $food = Food::FindOrFail($id);
        $categories = Category::all();
        return view('updatefood', compact('food', 'categories'));
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
            'gambar' => $fileNameToStore,
            'category_id' => $request->category_id
        ]);
        return redirect('/');
    }

    public function createcategory(){
        return view('createcategory');
    }

    public function storecategory(Request $request){
        if($request->hasFile('gambar')){
            $fileNameWithExt = $request->file('gambar')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'_'.'.'.$extension;
            $path = $request->file('gambar')->storeAs('public/category', $fileNameToStore);
        }else{
            $fileNameToStore = 'no-image.jpg';
        }
        
        Category::create([
            'nama' => $request->nama,
            'gambar' => $fileNameToStore,
        ]);
        return redirect('/');
    }

    public function destroycategory($id){
        Category::destroy($id);
        return back();
    }

    public function viewdatacategory($id){
        $category = Category::FindOrFail($id);
        $categories = Category::all();
        return view('viewcategory', compact('categories', 'category', 'id'));
    }

    public function editcategory($id){
        $category = Category::FindOrFail($id);
        $foods = Food::all();
        return view('updatecategory', compact('foods', 'category'));
    }

    public function updatecategory(Request $request, $id){
        if($request->hasFile('gambar')){
            $fileNameWithExt = $request->file('gambar')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'_'.'.'.$extension;
            $path = $request->file('gambar')->storeAs('public/category', $fileNameToStore);
        }else{
            $fileNameToStore = 'no-image.jpg';
        }

        Category::FindOrFail($id)->update([
            'nama' => $request->nama,
            'gambar' => $fileNameToStore
        ]);
        return redirect('/');
    }

    public function viewprofile(){
        return view('profile');
    }
}
