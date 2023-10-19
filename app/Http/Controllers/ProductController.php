<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class ProductController extends Controller
{
    function list()
    {
//        return DB::table('members')->get();
        return DB::connection('mysql2')->table('cruds')->get();
    }

//    function add(Request $request)
//    {
//        $product = new Product;
//        $product->name = $request->name;
//        $product->detail = $request->detail;
//        $product->image = $request->image;
//        $result = $product->save();
//
//        if ($result) {
//            return ["result"=>"Data has been Saved"];
//        } else {
//            return ["result"=>"Operation Failed"];
//        }
//    }
//
//    function update(Request $request)
//    {
//        $product = Product::find($request->id);
//        $product->name = $request->name;
//        $product->detail = $request->detail;
//        $product->image = $request->image;
//        $result = $product->save();
//
//        if ($result) {
//            return ["Result"=>"Data has been Updated "];
//        } else {
//            return ["Result"=>"Operastion Failed"];
//        }
//    }
//
//    function search($name)
//    {
//        return Product::where("name","like","%".$name."%")->get();//where method
//    }
//
//    function testData(Request $request)
//    {
//        $rules=array(
//            // "id"=>"required | max:3",
//            "name"=>"required"
//        );
//
//        $validator = Validator::make($request->all(),$rules);
//
//        if ($validator->fails()) {
//            return $validator->errors();
//        } else {
//            // return ["a"=>"x"];
//
//            $product = new Product;
//            $product->name = $request->name;
//            $product->detail = $request->detail;
//            $product->image = $request->image;
//            $result = $product->save();//$result variable
//
//            if ($result) {
//                return ["result"=>"Data has been Saved"];
//            } else {
//                return ["result"=>"Operation Failed"];
//            }
//
//        }
//    }
//
//
//    function list($id=null)
//    {
//        return $id?Product::find($id):Product::all();//find method
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);

        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Product::create($input);

        return redirect()->route('products.index')
            ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Product $product)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'detail' => 'required'
    //     ]);

    //     $input = $request->all();

    //     if ($image = $request->file('image')) {
    //         $destinationPath = 'image/';
    //         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    //         $image->move($destinationPath, $profileImage);
    //         $input['image'] = "$profileImage";
    //     }else{
    //         unset($input['image']);
    //     }

    //     $product->update($input);

    //     return redirect()->route('products.index')
    //         ->with('success','Product updated successfully');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success','Product deleted successfully');
    }
}
