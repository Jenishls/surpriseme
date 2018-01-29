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
                ->where('CategoryId',$id)
                ->paginate(12)
                ->appends('filter', request('filter'));
            }
    
            elseif($request === 'Between 500-1000')
            {
                $product = Product::where('Price','>','500')
                ->where('Price','<','1000')
                ->where('CategoryId',$id)
                ->paginate(12)
                ->appends('filter', request('filter'));
            }
    
            elseif($request === 'Between 1000-2000')
            {
                $product = Product::where('Price','>','1000')
                ->where('Price','<','2000')
                ->where('CategoryId',$id)
                ->paginate(12)
                ->appends('filter', request('filter'));
                
            }
    
            elseif($request === 'Between 2000-5000')
            {
                $product = Product::where('Price','>','2000')
                ->where('Price','<','5000')
                ->where('CategoryId',$id)
                ->paginate(12)
                ->appends('filter', request('filter'));
            }
    
            else
            {
                $product = Product::where('Price','>','5000')
                ->where('CategoryId',$id)
                ->paginate(12)
                ->appends('filter', request('filter'));
                
            }
    
            
        }
        elseif(request()->has('star'))
        {
            $request = request('star');
            if($request === 'Above 4')
            {
                $product = Product::where('Review','>','4')
                ->where('CategoryId',$id)                
                ->paginate(12)
                ->appends('star', request('star')); 
            }
            elseif($request === 'Above 3')
            {
                $product = Product::where('Review','>','3')
                
                ->where('CategoryId',$id)
                ->paginate(12)
                ->appends('star', request('star'));
            }
            elseif($request === 'Above 2')
            {
                $product = Product::where('Review','>','2')
                
                ->where('CategoryId',$id)
                ->paginate(12)
                ->appends('star', request('star'));
            }
            else
            {
                $product = Product::where('Review','>','1')
                
                ->where('CategoryId',$id)
                ->paginate(12)
                ->appends('star', request('star'));
            }
        }
        elseif(request()->has('discount'))
        {
            $request = request('discount');

            if($request === 'Above 5%')
            {
                $product = Product::where('Discount','>','5')
                
                ->where('CategoryId',$id)
                ->paginate(12)
                ->appends('discount', request('discount'));
            }
            elseif($request === 'Above 10%')
            {
                $product = Product::where('Discount','>','10')
                
                ->where('CategoryId',$id)
                ->paginate(12)
                ->appends('discount', request('discount'));
            }
            elseif($request === 'Above 20%')
            {
                $product = Product::where('Discount','>','20')
                
                ->where('CategoryId',$id)
                ->paginate(12)
                ->appends('discount', request('discount'));
            }
            else
            {
                $product = Product::where('Discount','>','25')
                
                ->where('CategoryId',$id)
                ->paginate(12)
                ->appends('discount', request('discount'));
            }
        }
        else
        {
            $product = Product::where('CategoryId',$id)->paginate(12);
        }
        

        $category = Category::where('CategoryId', $id)->first();
        $allCategory = Category::all();
        $subCategory = SubCategory::all();
        
        $new = Product::orderBy('created_at','desc')->take(10)->get();
        $userChoice = Product::where('Review','>','3')
        // ->where('CategoryId',$id)
        ->take(10)
        ->get();
        // $posts = Post::orderBy('created_at','desc')->paginate(10);
        
        $data = array(
            'category' => $category,
            'products' => $product,
            'allCategory' => $allCategory,
            'subCategory' => $subCategory,
            'new' => $new,
            'pageSubCategory' => "",
            'userChoice' => $userChoice
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
