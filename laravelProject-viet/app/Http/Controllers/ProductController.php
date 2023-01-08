<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function edit($id){
        $data = DB::table('product')->where('id_product',$id);
        $data = $data->get();
        //dd($data);
        return view('admin.pages.product.editProduct',compact('data'));
     }

    //  public function updatedata(Request $req, $id) {
    //     $product -> id_product = $req->input('id_product');
    //     $product -> title = $req->input('title');
    //     $product -> price = $req->input('price');
    //     $product -> discount = $req->input('discount');
    //     $product -> description = $req->input('description');

    //     $product -> save();
    //     return redirect()->route('admin.productList');
    // }

    public function updatedata(Request $req,$id) {
        $id = $req->input('id_product');
        $name = $req->input('title');
        $price = $req->input('price');
        $discount = $req->input('discount');
        $description = $req->input('description');

        $data = array('title'=>$name,'price'=>$price,'discount'=>$discount,'description'=>$description) ;
        //DB::table('product')->where('id_product',$id)->update($data);
        DB::table('users')->where('id_product',$id)->update(array($data));
        //dd($req->all());
        //$data->save($req->all());
        return redirect()->route('admin.productList');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = DB::table('product')->select('*');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
