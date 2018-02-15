@extends('layout.app')
@section('content')
<div class="container">

    

    <div class="row my-5">
        
        <div class=" col-md-8" style="background-color:#fee">
            <h2 class="py-3 px-4">Cart</h2>
            @include('inc.messages')
            @if(Cart::count() > 0)
            
            {{ Cart::count() }} item(s) in the cart
            @else
                <h5 >No items in the cart</h5>
                <hr/>
                <h4>Products You May Like</h4>
                <div class="autoplay slider">
                    @if(count($products) > 0)
                    @foreach($products as $foo)
                    <div>
                        <img src="images/{{$foo['Image']}}" >
                    </div>
                    @endforeach 
                    @endif
                </div>
                
            @endif
            <div class="container">
                @foreach(Cart::content() as $item)
                <hr>
                <div class="row" >
                                
                    <div class="col-md-3 col-xs-12 card straight">
                        <a href="/product/{{$item->id}}">
                            <img class="card-img-top " src="{{ asset('images/'.$item->options->image)}}" alt="Card image cap" >
                        </a>    
                    </div>
                            
                    <div class="col-md-5 col-xs-12 py-3 straight" >
                                
                        <a href="/product/{{$item->id}}">
                            <h3> {{$item->name}}</h3>
                        </a>
                        <p>
                            <small class="text-muted">
                                Short Description
                            </small>
                        </p>
                    <div class="row" style="bacground-color:red">
                        
                        <div class="col-4 ">
                            <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE')}}
                                <button class="btn straight btn-sm btn-danger">Remove</button><br><br>
                            </form>       
                        </div>
                        
                        <div class="col-6 ">
                            <button class="btn btn-sm btn-primary">Add to Wishlist</button>
                        </div>

                    </div>
                        
                            
                    </div>
                            
                    <div class="col-md-2 col-xs-6 col-sm-6 straight" >
                                  <h4>  Qty:</h4>
                                  <h5> {{$item->qty}}</h5>
                        {{--  <input type="number" class="form-control" value="{{$item->qty}}">  --}}
                    </div>
                    <div class="col-md-2 col-xs-6 col-sm-6 straight" >
                        <h4> Price:</h4>
                        <h5>
                            <i class="fa fa-inr"> </i>{{$item->price}}
                        </h5>
                    </div>
                </div>
                    <br>

                @endforeach
                 
            </div>
        </div>
        
        <div class=" col-md-3 mx-3" >
                <div class="py-3">
                    <button class="btn btn-primary form-control">CONTINUE SHOPPING &raquo;</button>
                </div>
            
                
            <table class="table table-hover ">
                    <tr>
                        <th>Sub Total </th>
                        <td>
                            <i class="fa fa-inr"> {{ Cart::subtotal() }}</i>
                        </td>
                    </tr>
                    <tr>
                        <th> Tax </th>
                        <td>
                            <i class="fa fa-inr"> {{ Cart::tax() }} </i>
                        </td>
                    </tr> 
                    <tr>
                        <th>
                            <h4> Net Total </h4>
                        </th>
                        
                        <th><h4>
                            <i class="fa fa-inr"> {{ Cart::total() }} </i>
                        </h4>
                        </th>
                    </tr>
                    
                </table>
                <hr>
                <div>
                    <button class=" form-control btn btn-lg btn-success"> CHECK OUT </button>
                </div>
                
            
            
        </div>
    </div>
    

</div>
<hr>
<p><br></p>


    
@endsection