@extends('admin.adminheader')
@section('main-body')
<div class="content-wrapper" style="background-color:black;">
        <!-- Content Header (Page header) -->
        <div class="content-header" >
          <h1 style="padding-left:40%;padding-bottom:5%;color:white;" class="content-header"><b>EDIT ABOUT</b></h1>
          <div>
            <div class="container">
              @foreach($res as $val)
              <form action="/editabt/{{$val->id}}" method="post" style="padding-right:10%">
              @csrf
                <div>
                  <h3><label for="about" style="color:white"> About</label></h3>
                <textarea name="about"  class="form-control" value="{{$val->abouts}}">{{$val->abouts}}</textarea>
              </div>
              <div style="padding-top:5%">
                <input type="submit" value="Add" class="btn btn-info btn-block" style="height:8%">
              </div>
              </form>
              @endforeach
            </div>
          </div>
        </div>
</div>
   @endsection