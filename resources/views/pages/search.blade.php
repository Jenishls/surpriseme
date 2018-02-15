@extends('layout.app')
@section('content')
<div class="container py-4 px-5">
        <h2 class="">Search result for '{{$text}}'</h2>
        <h5>{{count($searchResult)}} item(s) found</h5>
        
{{--  
    @if(count($searchResult) > 0)
        @foreach($searchResult as $product)
            
        @endforeach
    @else
     <h3>No products similar</h3>
    @endif  --}}
</div>


<div class="col-md-10 text-center container my-4" style="padding:25px; background-color: #eee ">
        @if(count($searchResult)>0)
        <div class="row">
          
           
            
              @foreach($searchResult as $product)
              
            
             <div class="col-lg-3 col-md-1 product">
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
            
                        <form action="{{route('cart.store')}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value={{ $product['ProductId']}}>
                            <input type="hidden" name="name" value={{ $product['Name']}}>
                            <input type="hidden" name="price" value={{ $product['Price']}}>
                            <input type="hidden" name="image" value={{ $product['Image']}}>
                            <input type="hidden" name="qty" value="1">

                            <button class="btn btn-sm btn-surprise" >
                              
                              <i class="fa fa-shopping-cart"></i>
                            </button>
                            <a href="/product/{{$product['ProductId']}}" class="btn btn-sm btn-surprise" role="button">View</a>
                      
                        <a href="#" class="btn btn-sm btn-surprise" role="button"><i class="fa fa-heart"></i></a>
                          </form>
                        
                      </p>
                  
               </div>
              </div>
            </div>
          @endforeach
          {{--  <div class="row">
                <div class="col-md-5"></div>  
                <div class="col-12 text-center"> {{$searchResult->links()}} </div>
                 <div class="col-md-5"></div>
              </div>  --}}
          @else
            <h3>No similar products</h3>
                <br />
          
      
      </div>
     
    </div>
    <DIV class="container">
            <h4 style="color:orange"><strong>NEW ARRIVALS</strong></h4>
          </DIV>
              <div class="container showcase my-3" style="background-color:#ccc" >
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
    @endif
        </div>
        </div>
    

@endsection