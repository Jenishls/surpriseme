@extends('layout.app')
@section('content')

<div class="container-fluid ">
    <div class="row" style="background-color: #e9ecef" >
      <div class="col-sm-3 " >
       <h2 style="line-height: 2em; margin-left:25px">{{$category['CategoryName']}}</h2>
      </div>
      <div class="col-sm-2" >
        
      </div>
      <div class="col-sm-2" >
      
        
      </div>
      <div class="col-sm-2  "  >
        
      </div>
      <div class="col-sm-3  " style=" ">
        <ol class="breadcrumb" style="margin-top: 10px; " >
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item"><a href="/category/{{$category['CategoryId']}}">{{$category['CategoryName']}}</a></li>
          @if($pageSubCategory != null)
          <li class="breadcrumb-item"><a href="/subcategory/{{$pageSubCategory['CategoryId']}}">{{$pageSubCategory['SubCategoryName']}}</a></li>
          @endif
        </ol>
      </div>
    </div>
  </div>
  <p><br></p>
  <div class="container" >
    <div class="row">
      <div class="col-md-3 ">
        <div >
          
          <button class="accordion">Categories</button>
          <div class="panel">
            @if(count($allCategory) > 0)
            <ul>
              @foreach($allCategory as $cat)
              
                <li><a href="/category/{{$cat['CategoryId']}}"> {{$cat['CategoryName']}} </a></li>
                <ul>
                  @if(count($subCategory) > 0)
                    
                    @foreach($subCategory as $subcat)

                      @if($subcat['CategoryId'] === $cat['CategoryId'])
                        <li>
                          <a href="/subcategory/{{$subcat['SubCategoryId']}}"> {{$subcat['SubCategoryName']}} </a>
                        </li>
                      
                      @endif

                    @endforeach

                  @endif
                </ul>  
              @endforeach
            </ul>
            @endif
            
            
          </div>
  
          <button class="accordion">Fliter by Price</button>
          <div class="panel">
            <ul>
              <li>
                <a href="?filter=Under 500">
                  Under <i class="fa fa-inr"></i> 500
                </a>
              </li>
              
              <li>
                <a href="?filter=Between 500-1000">
                  <i class="fa fa-inr"></i> 500 &nbsp;-
                  <i class="fa fa-inr"></i>&nbsp; 1,000
                </a>
              </li>
  
              <li>
                <a href="?filter=Between 1000-2000">
                  <i class="fa fa-inr"></i> 1,000 &nbsp;-
                  <i class="fa fa-inr"></i>&nbsp; 2000
                </a>  
              </li>
  
              <li>
                <a href="?filter=Between 2000-5000">
                  <i class="fa fa-inr"></i> 2000 &nbsp;-
                  <i class="fa fa-inr"></i>&nbsp; 5000
                </a>  
              </li>
  
              <li>
                <a href="?filter=Above 5000">
                  <i class="fa fa-inr"></i> 5000 above
                </a>  
              </li>
            </ul>
          </div>
  
            <button class="accordion">Filter by Customer Review</button>
          <div class="panel">
            <ul style="list-style-type:none">
              <a href="?star=Above 4">
                <li>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                  
                  & above
                </li>
              </a>

              <a href="?star=Above 3">
                <li>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  
                  & above
                </li>
              </a>
              
              <a href="?star=Above 2">
                <li>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  & above
                </li>
              </a>
              
              <a href="?star=Above 1">
                <li>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  <i class="fa fa-star-o"></i>
                  & above
                </li>
              </a>
  
             
            </ul>
          </div>
  
          <button class="accordion">Discount</button>
          <div class="panel">
            <ul>
              <a href="?discount=Above 5">   <li>5% off or More</li>  </a>
              <a href="?discount=Above 10">   <li>10% off or More</li>  </a>
              <a href="?discount=Above 20">   <li>20% off or More</li>  </a>
              <a href="?discount=Above 25">   <li>25% off or More</li>  </a>
            </ul>
          </div>
        </div>      
      </div>
  
      <div class="col-md-9 text-center" style="padding:25px; background-color: #eee ">
          <div class="row">
            
              @if(count($products)>0)
              
                @foreach($products as $product)
                
              
              <div class="col-lg-4 col-md-1 product">
                <div class="card hover-shadow">
                  <img class="card-img-top" src="{{ asset('images/'.$product->Image) }}" alt="images/{{$product['Image']}}">
                  <div class="card-block" style=" height: 100px; ">
                      <div style="height : 40px;">
                          {{$product['Name']}} 
                          
                        </div>   
                    <small class="card-text container" style="color:orange">
                      
                      
                      
                      @if($product['Review'] === 1)
                      
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                      
                      @elseif($product['Review'] === 2)
                      
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                      
                      @elseif($product['Review'] === 3)
                      
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                      
                      @elseif($product['Review'] === 4)
                      
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                      
                      @else
                      
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      
                      @endif
                      
                    </small><br>
                    <small class="card-text container">
                      @if($product['Discount'] > 0)
                      <strike><i class="fa fa-inr"></i> {{$product['Price']}}</strike> 
                      &nbsp;
                      New Price : 
                      <i class="fa fa-inr"></i> {{$product['Price']-($product['Price'] * $product['Discount']/100)}}
                      @else
                      <i class="fa fa-inr"></i> {{$product['Price']}}
                      @endif
                    </small>
                  </div>
                  
                  <div class="text-center">
                    <p>
                      <a href="#" class="btn btn-sm btn-surprise" role="button"><i class="fa fa-shopping-cart"></i></a>
        
                      <a href="/product/{{$product['ProductId']}}" class="btn btn-sm btn-surprise" role="button">View</a>
                    
                      <a href="#" class="btn btn-sm btn-surprise" role="button"><i class="fa fa-heart"></i></a>
                    </p>
                 </div>
                </div>
            </div>
            @endforeach
            @endif
        
        </div>
        <div class="row">
          <div class="col-md-5"></div>
          <div class="col-md-2"> {{$products->links()}} </div>
          <div class="col-md-5"></div>
        </div>
      </div>
     
    </div>
      
  </div>
  
  
  
  
  
  <!-- <div class="row">
    <div class="col-md-2"></div>
    
  </div>
   -->
  <br>
  <hr>
  <DIV class="container">
    <h4 style="color:orange"><strong>NEW ARRIVALS</strong></h4>
  </DIV>
      <div class="container showcase" style="background-color:#ccc" >
          <div class="autoplay slider">
        
              @if(count($new) > 0)
                @foreach($new as $foo)
                <div>
                  <img src= "{{ asset('images/'.$foo->Image) }}" >
                  
                  
                </div>
                @endforeach 
                @endif
            </div>
        
    </div>
    <hr>
    <p><br><p>
  
      <hr>
  <DIV class="container">
    <h4 style="color:orange"><strong>USERS CHOICE</strong></h4>
  </DIV>
      <div class="container showcase" style="background-color:#ccc" >
          {{--  <div class="autoplay slider">
        
              @if(count($userChoice) > 0)
                @foreach($userChoice as $user)
                <div>
                  <img src= "{{ asset('images/'.$user->Image) }}" >
                  
                  
                </div>
                @endforeach 
                @endif
            </div>  --}}
        
    </div>
    <hr>
    <p><br><p>
  
      <hr>
  <DIV class="container">
    <h4 style="color:orange"><strong>MOST VIEWED</strong></h4>
  </DIV>
      <div class="container showcase" style="background-color:#ccc" >
  
       
    </div>
    <hr>
    <p><br><p>
  
     
@endsection