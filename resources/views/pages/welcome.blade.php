@extends('layout.app')
@section('content')
<style type="text/css">
        #content
        {
           display: flex;
		   align-items: center;
		   justify-content: center;
		   height: 100%;
        }
    </style>
<main>
<div class="login-form">
<div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Login</div>
                  <div class="card-body">
  
                      <form action="#" method="POST">
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="login_email_address" class="form-control" name="email" required autofocus>
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="login_password" class="form-control" name="password" required>
                              </div>
                          </div>
  
                        
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" id='login_submit' class="btn btn-primary">
                                  Login
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class="siginin-form">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Register</div>
                  <div class="card-body">
  
                      <form action="#" method="POST">
                         
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="name" class="form-control" name="name" required autofocus>
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>
                              </div>
                          </div>


                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="confirm_password" class="form-control" name="confirmpassword" required>
                              </div>
                          </div>
  
                         
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" id='submit' class="btn btn-primary">
                                  Register
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<div id="packages">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8" >
              <div class="card">
                  <div class="card-header">Packages</div>
                  <div class="card-body" id='card-container'>
  
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</main>
@endsection