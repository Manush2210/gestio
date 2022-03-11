<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    //

    public function index()
    {

        return view('dashboard.setting');
    }
    public function create()
    {

        return view('dashboard.setting');
    }

    public function store(Request $request)
    {
        $product= new Product;
        $product->name= $request->input('name');
        $product->type= $request->input('type');
        $product->quantity= $request->input('quantity');
        $product->provider= $request->input('provider');
        $product->description= $request->input('description');
        
        if ($request->hasfile('image')) 
        {
            // code...
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();
                $path = $file->storeAs('public/', $filename);

                $product->image= $filename;
        }
        $product->save();
        return view('dashboard.addproduct');
    }


}
