@extends('layout.app')
@section('content')

<div class="container-fluid ">
    <div class="row" style="background-color: #e9ecef" >
      <div class="col-sm-3 " >
       <h2 style="line-height: 2em"> Mens</h2>
      </div>
      <div class="col-sm-2" >
        
      </div>
      <div class="col-sm-2" >
      
        
      </div>
      <div class="col-sm-2  "  >
        
      </div>
      <div class="col-sm-3  " style=" ">
        <ol class="breadcrumb" style="margin-top: 10px; " >
          <li class="breadcrumb-item"><a href="surpriseme.html">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Mens</a></li>
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
            <ul>
              @if(count($category) > 1)

                @foreach($category as $category_name)
                  <li>
                    {{$category_name->CategoryName}}
                  </li>  
                @endforeach  
              
              @else
                <p> Not found</p>
              @endif
            </ul>
            
            <ul>
              <li>Men</li>
              <ul>
                <li>Accessories</li>
                <li>Shirts</li>
                <li>Jeans</li>
                <li>Jackets</li>
                <li>Blazers</li>
                <li>Hoodies</li>
                <li>Shoes</li>
              </ul>
              <li>Women</li>
              <ul>
                <li>Accessories</li>
                <li>Basics</li>
                <li>Skirts</li>
                <li>Shoes</li>
                <li>Coats</li>
              </ul>
              <li>Kids</li>
              <ul>
                <li>Below a year</li>
                <li>Basics</li>
                <li>Toys</li>
                <li>Shirts</li>
                <li>Shoes</li>
              </ul>
              <li>Other</li>
              <ul>
                <li>Movie</li>
                <li>Food</li>
                <li>Tour</li>
                <li>Services</li>
              </ul>
  
            </ul>
          </div>
  
          <button class="accordion">Fliter by Price</button>
          <div class="panel">
            <ul>
              <li>
                Under <i class="fa fa-inr"></i> 100
              </li>
              
              <li>
                <i class="fa fa-inr"></i> 100 &nbsp;-
                <i class="fa fa-inr"></i>&nbsp; 500
              </li>
  
              <li>
                <i class="fa fa-inr"></i> 500 &nbsp;-
                <i class="fa fa-inr"></i>&nbsp; 1000
              </li>
  
              <li>
                <i class="fa fa-inr"></i> 1000 &nbsp;-
                <i class="fa fa-inr"></i>&nbsp; 2000
              </li>
  
              <li>
                <i class="fa fa-inr"></i> 2000 above
              </li>
            </ul>
          </div>
  
            <button class="accordion">Filter by Customer Review</button>
          <div class="panel">
            <ul style="list-style-type:none">
              <li>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                
                 & above
              </li>
              
              <li>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                
                 & above
              </li>
              
              <li>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                & above
              </li>
  
              <li>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                & above
              </li>
  
             
            </ul>
          </div>
  
          <button class="accordion">Discount</button>
          <div class="panel">
            <ul>
              <li>5% off or More</li>
              <li>10% off or More</li>
              <li>20% off or More</li>
              <li>25% off or More</li>
            </ul>
          </div>
        </div>      
      </div>
  
      <div class="col-md-9 text-center" style="padding:25px; background-color: #eee ">
        <div class="row">
          <div class="col-lg-4 col-12  product">
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
  
          <div class="col-lg-4 col-12  product">
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
  
          <div class="col-lg-4 col-12  product">
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
          <div class="col-lg-4 col-12  product">
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
  
          <div class="col-lg-4 col-12  product">
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
  
          <div class="col-lg-4 col-12  product">
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
          <div class="col-lg-4 col-12  product">
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
  
          <div class="col-lg-4 col-12  product">
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
  
          <div class="col-lg-4 col-12  product">
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
          <div class="col-lg-4 col-12  product">
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
  
          <div class="col-lg-4 col-12  product">
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
  
          <div class="col-lg-4 col-12  product">
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
  
        @include('inc.slider')
    </div>
    <hr>
    <p><br><p>
  
      <hr>
  <DIV class="container">
    <h4 style="color:orange"><strong>USERS CHOICE</strong></h4>
  </DIV>
      <div class="container showcase" style="background-color:#ccc" >
  
        @include('inc.slider')
    </div>
    <hr>
    <p><br><p>
  
      <hr>
  <DIV class="container">
    <h4 style="color:orange"><strong>MOST VIEWED</strong></h4>
  </DIV>
      <div class="container showcase" style="background-color:#ccc" >
  
        @include('inc.slider')
    </div>
    <hr>
    <p><br><p>
  

@endsection