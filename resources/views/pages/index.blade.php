@extends('layout.app')
@section('content')
	
    <div class="container-fluid main">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron container-fluid">
        <h1>Surprise ME</h1>
        <h5 >Easy way to get out of the hassle of picking gifts.<br>Easy way to get out of the hassle of picking gifts.</h5>
        
          <a class="btn btn-lg btn-surprise" href="#" role="button">Grab a gift &raquo;</a>
        </p>
      </div>
    </div>

<DIV class="container">
  <h4 style="color:orange"><strong>NEW ARRIVALS</strong></h4>
</DIV>
    <div class="container showcase" style="background-color:#ccc" >
@include('inc.slider')
  </div>



<div class="container-fluid">

<div class="container" style="margin-top:50px; ">
  <div class="row">
  	<div class="col-md-6 ">
        <a href="/category">
          <img src="images/women.jpeg" class="img-responsive" style="height:100%; width:100%">
        </a>
  	</div>

  	<div class="col-md-6 ">
      <a href="/category">
  		<img src="images/men.jpeg" class="img-responsive" style="height:100%; width:100%">
      </a>
  		</div>
  </div>	

    <br/>

  	<div class="row">
      <div class="col-md-8  ">
          <a href="/category">
            <img src="images/children-06.jpg" style="width:100%; height:100%">
          </a>
      </div>
      <div class="col-md-4"  >
        <a href="/category">
          <img src="images/more.jpg" class="img-responsive" style="width:100%; height:100%"> 
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

      <div class="col-lg-3 col-md-1 product">
        <div class="card">
          <img class="card-img-top" src="images/men.jpeg" alt="Card image cap">
          <div class="card-block" style=" height: 80px; ">
            <p class="card-text container">Some quick example text to </p>
          </div>
          <div class="text-center">
            <p>
              <a href="#" class="btn btn-sm btn-surprise" role="button"><i class="fa fa-shopping-cart"></i></a>

              <a href="/product" class="btn btn-sm btn-surprise" role="button">View</a>
            
              <a href="#" class="btn btn-sm btn-surprise" role="button"><i class="fa fa-heart"></i></a>
            </p>
         </div>
        </div>
    </div>

      
      <div class="col-lg-3 col-md-1  product">
        <div class="card ">
          <img class="card-img-top" src="images/men.jpeg" alt="Card image cap">
          <div class="card-block" style=" height: 80px; ">
            <p class="card-text container">Some quick example text to </p>
          </div>
          <div class="text-center">
            <p>
              <a href="#" class="btn btn-sm btn-surprise" role="button"><i class="fa fa-shopping-cart"></i></a>
    
              <a href="/product" class="btn btn-sm btn-surprise" role="button">View</a>
               
              <a href="#" class="btn btn-sm btn-surprise" role="button"><i class="fa fa-heart"></i></a>
            </p>
         </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-1  product">
         <div class="card">
          <img class="card-img-top" src="images/women.jpeg" alt="Card image cap">
          <div class="card-block " style=" height: 80px; ">
            <p class="card-text container">Some quick example text to build </p>
          </div>

         <div class="text-center">
            <p>
                <a href="#" class="btn btn-sm btn-surprise" role="button"><i class="fa fa-shopping-cart"></i></a>
  
                <a href="/product" class="btn btn-sm btn-surprise" role="button">View</a>
              
                <a href="#" class="btn btn-sm btn-surprise" role="button"><i class="fa fa-heart"></i></a>
              </p>
         </div>
          
        </div>
       
    </div>

  <div class="col-lg-3 col-md-1  product">
         <div class="card">
          <img class="card-img-top" src="images/women.jpeg" alt="Card image cap">
          <div class="card-block " style=" height: 80px; ">
            <p class="card-text container">Some quick example text </p>
          </div>

         <div class="text-center">
            <p>
                <a href="#" class="btn btn-sm btn-surprise" role="button"><i class="fa fa-shopping-cart"></i></a>
  
                <a href="/product" class="btn btn-sm btn-surprise" role="button">View</a>
              
                <a href="#" class="btn btn-sm btn-surprise" role="button"><i class="fa fa-heart"></i></a>
              </p>
         </div>
          
        </div>
       
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-1  product">
        <div class="card">
          <img class="card-img-top" src="images/men.jpeg" alt="Card image cap">
          <div class="card-block" style=" height: 80px; ">
            <p class="card-text container">Some quick example text to </p>
          </div>
          <div class="text-center">
           <p> <a href="#" class="btn btn-sm btn-surprise" role="button">View</a></p>
         </div>
        </div>
    </div>

      <div class="col-lg-3 col-md-1  product">
        <div class="card">
          <img class="card-img-top" src="images/men.jpeg" alt="Card image cap">
          <div class="card-block" style=" height: 80px; ">
            <p class="card-text container">Some quick example text to </p>
          </div>
          <div class="text-center">
           <p> <a href="#" class="btn btn-sm btn-surprise" role="button">View</a></p>
         </div>
        </div>
    </div>

   <div class="col-lg-3 col-md-1  product">
        <div class="card">
          <img class="card-img-top" src="images/men.jpeg" alt="Card image cap">
          <div class="card-block" style=" height: 80px; ">
            <p class="card-text container">Some quick example text to </p>
          </div>
          <div class="text-center">
           <p> <a href="#" class="btn btn-sm btn-surprise" role="button">View</a></p>
         </div>
        </div>
    </div>

  <div class="col-lg-3 col-md-1  product">
        <div class="card">
          <img class="card-img-top" src="images/men.jpeg" alt="Card image cap">
          <div class="card-block" style=" height: 80px; ">
            <p class="card-text container">Some quick example text to </p>
          </div>
          <div class="text-center">
           <p> <a href="#" class="btn btn-sm btn-surprise" role="button">View</a></p>
         </div>
        </div>
    </div>
  </div>
  <div class="row">
  <div class="col-lg-3 col-md-1  product">
        <div class="card">
          <img class="card-img-top" src="images/men.jpeg" alt="Card image cap">
          <div class="card-block" style=" height: 80px; ">
            <p class="card-text container">Some quick example text to </p>
          </div>
          <div class="text-center">
           <p> <a href="#" class="btn btn-sm btn-surprise" role="button">View</a></p>
         </div>
        </div>
    </div>

 <div class="col-lg-3 col-md-1   product">
        <div class="card">
          <img class="card-img-top" src="images/men.jpeg" alt="Card image cap">
          <div class="card-block" style=" height: 80px; ">
            <p class="card-text container">Some quick example text to </p>
          </div>
          <div class="text-center">
           <p> <a href="#" class="btn btn-sm btn-surprise" role="button">View</a></p>
         </div>
        </div>
    </div>

   <div class="col-lg-3 col-md-1   product">
        <div class="card">
          <img class="card-img-top" src="images/men.jpeg" alt="Card image cap">
          <div class="card-block" style=" height: 80px; ">
            <p class="card-text container">Some quick example text to </p>
          </div>
          <div class="text-center">
           <p> <a href="#" class="btn btn-sm btn-surprise" role="button">View</a></p>
         </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-1   product">
        <div class="card">
          <img class="card-img-top" src="images/men.jpeg" alt="Card image cap">
          <div class="card-block" style=" height: 80px; ">
            <p class="card-text container">Some quick example text to </p>
          </div>
          <div class="text-center">
           <p> <a href="#" class="btn btn-sm btn-surprise" role="button">View</a></p>
         </div>
        </div>
    </div>
  </div>
  
</div>



    </div> <!-- /container -->
    @endsection