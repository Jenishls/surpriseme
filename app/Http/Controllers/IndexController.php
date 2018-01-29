<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jumbotron;
use App\IndexCat;
use App\Product;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumb = Jumbotron::all();
        $cat1 = IndexCat::find(1);
        $cat2 = IndexCat::find(2);
        $cat3 = IndexCat::find(3);
        $cat4 = IndexCat::find(4);
        $products = Product::all();
        
        
    
 
        $data = array(
         
            'cat1' => $cat1,
            'cat2' => $cat2, 
            'cat3' => $cat3,
            'cat4' => $cat4,
            'jumbotron' => $jumb,
            'products' => $products    
        );
    
        return view('pages.index')->with($data);
    
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
