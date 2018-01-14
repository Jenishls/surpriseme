@extends('layout.app')
@section('content')

<div class="container" style="margin-top: 25px; background-color: #dee">
    <div class="row">
      <div class=" card col-lg-6 col-md-1">
       
        <img class="card-img" src="images/men.jpeg" alt="Card image cap">
      </div>
      
      <div class="col-lg-6 col-md-1" style="padding: 25px;">
  
        <h4 >Product Name</h4>
        <table>
          <tr>
  
            <td><h6 style="color: #aaa">Product code:</h6></td>
            <td><h6 style="color: #f60"><strong>w232</strong></h6></td>
  
          </tr>
  
          <tr>
            
            <td><h6 style="color: #aaa">Supplier:</h6></td>
            <td><h6 style="color: #f60"><strong>Traders</strong></h6></td>
  
  
          </tr>
  
           <tr>
            
            <td><h6 style="color: #aaa">Availablity:</h6></td>
            <td><h6 style="color: #f60"><strong>Yes</strong></h6></td>
  
  
          </tr>
  
          <tr>
          
            <td><h6 style="color: #aaa">Price: </h6></td>
            <td><h6 style="color: #f60"><i class="fa fa-inr"></i>&nbsp;<strong>500</strong></h6></td>
  
          
          </tr>
        </table>
        <p>
        Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.
  
  
      </p>
  
        <div class="row text-center">
          
          <div class="col-lg-4 col-sm-4" >
          
            Quantity
            <input type="number" value="1" name="quantity" min="1" max="99" class="form-control">
  
          </div>
          
          <div class="col-lg-4 col-sm-4" >
            Size<br>
            <input type="number" name="quantity" min="36" max="45" value="36" class="form-control">
          </div>
          
          <!-- <div class="col-lg-4 col-sm-4" style="background-color: green">
            Color
          </div> -->
      
        </div>
  
        <div class="row" style="margin-top: 20px">
          <div class="col-sm-12 text-center">
            <button class="btn-lg" style="background-color: #f60; color: white">Add to Cart &nbsp;<i class="fa fa-shopping-cart"></i></button>
          </div>    
        </div>
  
      </div>
    </div>
  
   
  
  </div>
  
  
  
  <div class="container showcase" style="background-color:#dee; padding-top: 5px; margin-top: 25px;" >
    <div class="container" style="margin: 10px; color: #f60">
      <h3><strong>Related Products</strong></h3>
    </div>  
       @include('inc.slider')
    </div>
  
  <p><br></p>
  <div class="tab text-center container">
    <button class="tablinks col-sm-6 col-md-6" onclick="openTab(event, 'description')" > Description</button>
    <button class="tablinks col-sm-6 col-md-6" onclick="openTab(event, 'reviews')">Reviews</button>
   
  </div>
  
  <div id="description" class="tabcontent container" >
    <h3 style="padding: 20px;">Description</h3>
    <p style="padding: 20px;">Video provides a powerful way to help you prove your point. When you click Online Video, you can paste in the embed code for the video you want to add. You can also type a keyword to search online for the video that best fits your document.
  To make your document look professionally produced, Word provides header, footer, cover page, and text box designs that complement each other. For example, you can add a matching cover page, header, and sidebar. Click Insert and then choose the elements you want from the different galleries.
  Themes and styles also help keep your document coordinated. When you click Design and choose a new Theme, the pictures, charts, and SmartArt graphics change to match your new theme. When you apply styles, your headings change to match the new theme.
  Save time in Word with new buttons that show up where you need them. To change the way a picture fits in your document, click it and a button for layout options appears next to it. When you work on a table, click where you want to add a row or a column, and then click the plus sign.
  Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.
  </p>
  </div>
  
  <div id="reviews" class="tabcontent container">
    <h3>Reviews</h3>
    <p>Reading is easier, too, in the new Reading view. You can collapse parts of the document and focus on the text you want. If you need to stop reading before you reach the end, Word remembers where you left off - even on another device.</p> 
  </div>
  <p><br/></p>

@endsection