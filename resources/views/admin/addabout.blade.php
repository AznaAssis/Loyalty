@extends('admin.adminheader')
@section('main-body')
<div class="content-wrapper" style="background-color:black;">
        <!-- Content Header (Page header) -->
        <div class="content-header" >
          <h1 style="padding-left:50%;padding-bottom:5%;color:white;" class="content-header"><b>ABOUT</b></h1>
          <div>
            <div class="container">
              <form action="/addabt" method="post" style="padding-right:10%">
              @csrf
                <div>
                  <h3><label for="about" style="color:white">Add About</label></h3>
                <textarea name="about"  class="form-control"></textarea>
              </div>
              <div style="padding-top:5%">
                <input type="submit" value="Add" class="btn btn-info btn-block" style="height:8%">
                <a href="/vabout">View About?</a>
              </div>
              </form>
            </div>
          </div>
        </div>
</div>
   @endsection