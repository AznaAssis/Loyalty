@extends('admin.adminheader')
@section('main-body')
div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header" style="padding-bottom:40%;color:white;background-color:black">
          <h1>
            Admin 
          </h1>
          <h1 style="padding-left:50%;padding-bottom:5%;" class="content-header"><b>CONTACT</b></h1>
        <!-- </div> -->

        <section>
          <div style="padding-left:15%" class="container">
            <div>
              <form action="/addcntct" method="post" >
                @csrf
                <!-- <div>
                  <h3><label for="contact" style="color:white">Add Contact</label></h3>
              </div> -->
              <div>
                  <h3><label for="address" style="color:white">Location</label></h3>
                <textarea name="address"  class="form-control"></textarea>
              </div>
              <div>
                <h3><label for="Email" style="color:white">Email</label></h3>
                <input type="email" name="email" class="form-control">
              </div>
              <div>
                <h3><label for="Phno" style="color:white">Phone Number</label></h3>
                <input type="text" name="phno" class="form-control">
              </div>
              <div style="padding-top:5%">
                <input type="submit" value="Add" class="btn btn-info btn-block" style="height:8%">
              </div>
              </form>
            </div>
          </div>
        </section>
        </div>
   @endsection