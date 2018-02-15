@extends('layout.app')
@section('content')

  @if(count($jumbotron)>0)
    @foreach($jumbotron as $key)
      <div class="container-fluid"
          style="background-image: url(../../images/{{$key->Image}});
          background-position: 0% 50%;
          background-size: cover;
         
          background-repeat: no-repeat;">
        
          <!-- Main component for a primary marketing message or call to action -->

          <div class="jumbotron container-fluid">
            <div >
            <h1>{{$key->Heading}}</h1>
            <div class="row">
              <div class="col-lg-6 col-12" >
                <h4> {{$key->Body}} </h4>
              </div>
            </div>
          </div>
            <p>
              <a class="btn btn-lg btn-surprise" href="#trending" role="button">{{$key->Button}} &raquo;</a>
            </p>
          </div>
          
        </div>
    @endforeach
  @endif



    <DIV class="container">
  <h4  style="color:orange"><strong>NEW ARRIVALS</strong></h4>
</DIV>
    <div class="container showcase" style="background-color:#ccc" >


      {{--  @include('inc.slider',$products)  --}}

      <div class="autoplay slider">
        @if(count($new) > 0)
          @foreach($new as $foo)
          <div>
            <img src="images/{{$foo['Image']}}" >
          </div>
          @endforeach 
          @endif
      </div>

  </div>

<div class="container-fluid">

<div class="container" style="margin-top:50px; ">

  <div class="row">
      
  	<div class="col-md-6 ">
      
        <a href="/category/2">
          
            <img src="images/{{$cat1['Image']}}" class="img-responsive" style="height:100%; width:100%">
        
        </a>
       
  	</div>
    

  	<div class="col-md-6 ">
      <a href="/category/1">
  		<img src="images/{{$cat2['Image']}}" class="img-responsive" style="height:100%; width:100%">
      </a>
  		</div>
  </div>	

    <br/>

  	<div class="row">
      <div class="col-md-8  ">
          <a href="/category/3">
            <img src="images/{{$cat3['Image']}}" style="width:100%; height:100%">
          </a>
      </div>
      <div class="col-md-4"  >
        <a href="/category/4">
          <img src="images/{{$cat4['Image']}}" class="img-responsive" style="width:100%; height:100%"> 
        </a>  
      </div>

  	</div>
	
</div>

<p><br></p>
<hr>

<div class="container alert alert-secondary" style="margin-top: 50px;"> 
  <h2 style=" font-size: 44px; color: #ff6600; margin: 25px;" id="trending">
    <strong>Trending Products</strong>
    
  </h2>
 
    <div class="row text-center">
        @if(count($products)>0)
              
        @foreach($products as $product)
        
      
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
          
            <p>
              
              <form action="{{route('cart.store')}}" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name="id" value={{ $product['ProductId']}}>
                  <input type="hidden" name="name" value={{ $product['Name']}}>
                  <input type="hidden" name="price" value={{ $product['Price']}}>
                  <input type="hidden" value="1" name="qty">
                  <input type="hidden" name="image" value={{ $product['Image']}}>
    
                  <button class="btn btn-sm btn-surprise" >
                    
                    <i class="fa fa-shopping-cart"></i>
                  </button>
                  <a href="/product/{{$product['ProductId']}}" class="btn btn-sm btn-surprise" role="button">View</a>
            
              <a href="#" class="btn btn-sm btn-surprise" role="button"><i class="fa fa-heart"></i></a>
                </form>
              
            </p>
         
          
         
        </div>
    </div>
    @endforeach
    @endif

</div>

</div>
</div> <!-- /container -->
    @endsection