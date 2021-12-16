@extends('user.mainheader')
@section('main-body')
<form action="/clogaction" class="login" style="padding-bottom:5%;" method="post">
@csrf
							<center><h3 >Customer Login</h3></center>
	          	<div >
	          		<div class="container">
	                <div class="form-group">
	                	<label for="username">Username</label>
	                  <input type="text" name="uname"class="form-control" >
	                </div>
	              </div>
	              <div class="container"> 
	                <div class="form-group">
	                	<label for="password">Password</label>
	                  <input type="password" name="password" class="form-control" >
	                </div>
                </div>
                @if (session('error')) 
          <p style="color:green"> 
          {{ session('error') }} 
        </p> @endif
                <div class="w-100"></div>
                <div class="container" >
                	<div class="form-group ">
										  <input type="submit" name="submit" value="Login" class="btn btn-success btn-block"> 
										  <input type="reset" value="clear" class="btn btn-success btn-block" > 
										  Don't Have an Account?<a href="/creg">SignUp</a>
										</div>
									</div>
                </div>
	            </div>
	          </form>
					</div>
@endsection