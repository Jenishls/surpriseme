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
            <div style="text-shadow: black 0.5em 0.3em 0.3em;">
            <h1>{{$key->Heading}}</h1>
            <div class="row">
              <div class="col-lg-6 col-12" >
                <h4> {{$key->Body}} </h4>
              </div>
            </div>
          </div>
            <p>
              <a class="btn btn-lg btn-surprise" href="#" role="button">{{$key->Button}} &raquo;</a>
            </p>
          </div>
          
        </div>
    @endforeach
  @endif



    <DIV class="container">
  <h4 style="color:orange"><strong>NEW ARRIVALS</strong></h4>
</DIV>
    <div class="container showcase" style="background-color:#ccc" >


      {{--  @include('inc.slider',$products)  --}}

      <div class="autoplay slider">
        @if(count($products) > 0)
          @foreach($products as $foo)
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
      
        <a href="/category/Women">
          
            <img src="images/{{$cat1['Image']}}" class="img-responsive" style="height:100%; width:100%">
        
        </a>
       
  	</div>
    

  	<div class="col-md-6 ">
      <a href="/category/Men">
  		<img src="images/{{$cat2['Image']}}" class="img-responsive" style="height:100%; width:100%">
      </a>
  		</div>
  </div>	

    <br/>

  	<div class="row">
      <div class="col-md-8  ">
          <a href="/category/Kids">
            <img src="images/{{$cat3['Image']}}" style="width:100%; height:100%">
          </a>
      </div>
      <div class="col-md-4"  >
        <a href="/category/Others">
          <img src="images/{{$cat4['Image']}}" class="img-responsive" style="width:100%; height:100%"> 
        </a>  
      </div>

  	</div>
	
</div>

<p><br></p>
<hr>

<div class="container alert alert-secondary" style="margin-top: 50px;"> 
  <h2 style=" font-size: 44px; color: #ff6600; margin: 25px;">
    <strong>Trending Products</strong>
    
  </h2>
 
    <div class="row">
      @if(count($products)>0)
      
        @foreach($products as $product)
        
      
      <div class="col-lg-3 col-md-1 product">
        <div class="card">
          <img class="card-img-top" src="images/{{$product['Image']}}" alt="images/{{$product['Image']}}">
          <div class="card-block" style=" height: 80px; ">
            <p class="card-text container">{{$product['Description']}}</p>
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

</div>
</div> <!-- /container -->
    @endsection