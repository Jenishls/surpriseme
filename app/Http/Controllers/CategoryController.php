<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\SubCategory;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $category = Category::all();
        // return view('category.index')->with('category', $category);
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
    public function show($id, $filter = null)
    {

        if(request()->has('filter'))
        {
            $request = request('filter');
            if($request === 'Under 500')
            {
                $product = Product::where('Price','<','500')
                ->where('SubCategoryId',$id)
                ->paginate(12)
                ->appends('filter', request('filter'));
            }
    
            elseif($request === 'Between 500-1000')
            {
                $product = Product::where('Price','>','500')
                ->where('Price','<','1000')
                ->where('SubCategoryId',$id)
                ->paginate(12)
                ->appends('filter', request('filter'));
            }
    
            elseif($request === 'Between 1000-2000')
            {
                $product = Product::where('Price','>','1000')
                ->where('Price','<','2000')
                ->where('SubCategoryId',$id)
                ->paginate(12)
                ->appends('filter', request('filter'));
                
            }
    
            elseif($request === 'Between 2000-5000')
            {
                $product = Product::where('Price','>','2000')
                ->where('Price','<','5000')
                ->where('SubCategoryId',$id)
                ->paginate(12)
                ->appends('filter', request('filter'));
            }
    
            else
            {
                $product = Product::where('Price','>','5000')
                ->where('SubCategoryId',$id)
                ->paginate(12)
                ->appends('filter', request('filter'));
                
            }
    
            
        }
        else{
            $product = Product::where('SubCategoryId',$id)->paginate(12);
        }
        

        $category = Category::where('CategoryId', $id)->first();
        $allCategory = Category::all();
        $subCategory = SubCategory::all();
        
        $new = Product::orderBy('created_at','desc')->take(10)->get();
        // $posts = Post::orderBy('created_at','desc')->paginate(10);
        
        $data = array(
            'category' => $category,
            'products' => $product,
            'allCategory' => $allCategory,
            'subCategory' => $subCategory,
            'new' => $new,
            'pageSubCategory' => ""
        );
        return view('pages.category')->with($data);
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
