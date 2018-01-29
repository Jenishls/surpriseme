
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
  
   <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">



    <title>Surprise Me</title>
     <style type="text/css">
    
  </style>
  </head>

  <body>

    
    @include('inc.navbar')
    <div class="container">

    </div>
	@yield('content')
 
   
    @include('inc.footer')
 
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

 <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
 <script src="https://use.fontawesome.com/85bd2382ad.js"></script>
 <script src="{{ asset('js/style.js') }}"></script>
 
  </body>
</html>