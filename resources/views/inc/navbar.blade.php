
<div class="container-fluid navv  py-2">
<div class="row py-1 " style="padding: 0px 0px 0px 0px">
  
  <div class="col-sm-2 ">
    <a href="/" class="links">
      <h2 class="navbar-brand">
        Surprise Me
      </h2>
    </a>
  </div>
  
  <div class="col-sm-7">
    
    <div class="input-group">
      <input type="text" class="form-control navbar-text " placeholder="Search for...">
        
          <button class="btn btn-success " type="button"><strong>Search</strong></button>
        
      </div>
    
    </div>
    {{--  <div class="col-sm-1"></div>  --}}
    <div class="col-sm-3 " style=" padding:0px 0px 0 0; float:right " >
      
      <div class="nav-link btn" >  
          <a href="#" class="links navbar-text" role="button">
              <i class="fa fa-question-circle"></i>Help
            </a>  
      </div>

      <div class="nav-link btn" >
          <a href="{{ route('cart.index') }}" class=" links navbar-text" role="button"  >
              <i class="fa fa-shopping-cart"></i> Cart
              @if(Cart::instance('default')->count() > 0)
                <span class="badge badge-info">
                  {{ Cart::instance('default')->count() }}
                </span>
              @endif
              
            </a>   
      </div>

      <div class="nav-link nav-pills" >
          <a href="" class=" links navbar-text" data-toggle="modal" data-target="#myModal" role="button" >
              <i class="fa fa-user"></i>
              Account
            </a>
      </div>
      </div>
  </div>
</div>

<hr style="margin:0px; background-color:#fdd700; ">

<div class="container-fluid btn-surprise py-1" >
    <div class="row text-center">
      <div class="col-1"></div>
      <div class="col-2">
        <a href="/category/1" class="links">Men</a>
      </div>
      
      <div class="col-3">
        <a href="/category/2" class="links">Women</a>
      </div>
      
      <div class="col-2">
        <a href="/category/3" class="links">Kids</a>
      </div>
      
      <div class="col-2">
        <a href="/category/4" class="links">Other</a>
      </div>
      
      <div class="col-1"></div>
    </div>
    
  </div>

 
    
      <!-- The Login Modal -->
      <div class="modal fade " id="myModal">
        <div class="modal-dialog  modal-sm modal-dialog-centered">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="text-center">LOGIN</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
              <form>
                  <label><b>Username</b></label>
                  <div class="form-group">
                    <input type="text" autofocus class="form-control" placeholder="Enter Username" name="uname" required>
                  </div>

                  <label><b>Password</b></label>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
                  </div> 
                  <div class="form-group row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a href="" tabindex="6" class="form-control btn btn-primary" data-toggle="modal" data-target="#register">Register</a>
                      </div>
                
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <input type="submit" name="login" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In"/>
                      </div>
                    </div>
                    
                  
                  <div class="form-group">

                    <input type="checkbox" checked="checked"> Remember me
                  </div>
              </form>
            </div>
            
           
            
          </div>
        </div>
      </div>


            <!-- The Register Modal -->
            <div class="modal fade " id="register">
                <div class="modal-dialog  modal-sm modal-dialog-centered">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="text-center">Register</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                      <form>
                          <label><b>Username</b></label>
                          <div class="form-group">
                            <input type="text" autofocus class="form-control" placeholder="Enter Username" name="uname" required>
                          </div>
        
                          <label><b>Password</b></label>
                          <div class="form-group">
                            <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
                          </div> 
                          <div class="form-group row">
                              
                        
                              <div class="col">
                                <input type="submit" name="register" id="register" tabindex="4" class="form-control btn btn-success" value="Register"/>
                              </div>
                            </div>
                            
                          
                          <div class="form-group">
        
                            <input type="checkbox" checked="checked"> Remember me
                          </div>
                      </form>
                    </div>
                    
                   
                    
                  </div>
                </div>
              </div>
      
    

