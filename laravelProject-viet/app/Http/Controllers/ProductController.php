<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function edit($id){
        $data = DB::table('product')->where('id_product',$id)->leftJoin('category', 'category.id', '=', 'product.category_id');
        $data = $data->get();
        //dd($data);
        return view('admin.pages.product.editProduct',compact('data'));
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('product')->select('*')->leftJoin('category', 'category.id', '=', 'product.category_id');
        //$data = DB::table('product')->select('*');
        $data = $data->get();
        //dd($data);
        return view('admin.pages.product.productList',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id_product = $request->input('id_product');
        $name = $request->input('title');
        $price = $request->input('price');
        $discount = $request->input('discount');
        $description = $request->input('description');
        $category_name = $request->input('category_name');
        $thumbnail = $request->input('thumbnail');

        if($request->hasFile('image')){
            $request->file('image')->move('backend/img/', $request->file('image')->getClientOriginalName());
            $thumbnail = $request->file('image')->getClientOriginalName();
            //$data->save();
        }

        $data = array('id_product' => $id_product,'title'=>$name,'price'=>$price,'discount'=>$discount,'description'=>$description,
        'thumbnail'=>$thumbnail,'category_name'=>$category_name) ;
        DB::table('product')->where('id_product',$id_product)->leftJoin('category', 'category.id', '=', 'product.category_id')->update($data);
        dd($request->all());
        return redirect()->route('admin.productList');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =  DB::table('product')->where('id_product',$id);
        $data->delete();
        return redirect()->route('admin.productList');
    }
}
