<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\SubCategory;

class SubCategoryController extends Controller
{
   public function show($id)
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
    elseif(request()->has('star'))
    {
        $request = request('star');
        if($request === 'Above 4')
        {
            $product = Product::where('Review','>','4')
            ->where('SubCategoryId',$id)                
            ->paginate(12)
            ->appends('star', request('star')); 
        }
        elseif($request === 'Above 3')
        {
            $product = Product::where('Review','>','3')
            
            ->where('SubCategoryId',$id)
            ->paginate(12)
            ->appends('star', request('star'));
        }
        elseif($request === 'Above 2')
        {
            $product = Product::where('Review','>','2')
            
            ->where('SubCategoryId',$id)
            ->paginate(12)
            ->appends('star', request('star'));
        }
        else
        {
            $product = Product::where('Review','>','1')
            
            ->where('SubCategoryId',$id)
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
            
            ->where('SubCategoryId',$id)
            ->paginate(12)
            ->appends('discount', request('discount'));
        }
        elseif($request === 'Above 10%')
        {
            $product = Product::where('Discount','>','10')
            
            ->where('SubCategoryId',$id)
            ->paginate(12)
            ->appends('discount', request('discount'));
        }
        elseif($request === 'Above 20%')
        {
            $product = Product::where('Discount','>','20')
            
            ->where('SubCategoryId',$id)
            ->paginate(12)
            ->appends('discount', request('discount'));
        }
        else
        {
            $product = Product::where('Discount','>','25')
            
            ->where('SubCategoryId',$id)
            ->paginate(12)
            ->appends('discount', request('discount'));
        }
    }
    else{
        $product = Product::where('SubCategoryId',$id)->paginate(12);
    }
    
    $categoryJson =  SubCategory::where('SubCategoryId', $id)->get(['CategoryId']);
    $categoryId;
    foreach($categoryJson as $foo)
    {
        $categoryId = $foo['CategoryId'];
    }
   
       $pageSubCategory = SubCategory::where('SubCategoryId',$id)->first(); 
       $category = Category::where('CategoryId', $categoryId)->first();
       $allCategory = Category::all();
       $subCategory = SubCategory::all();
       
       $new = Product::orderBy('created_at','desc')->take(10)->get();
       // $posts = Post::orderBy('created_at','desc')->paginate(10);
       
       $data = array(
           'category' => $category,
           'products' => $product,
           'allCategory' => $allCategory,
           'subCategory' => $subCategory,
           'pageSubCategory' => $pageSubCategory,
           'new' => $new
       );
       return view('pages.category')->with($data);
   }

}
