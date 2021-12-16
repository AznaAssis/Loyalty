@extends('manager.mheader')
@section('main-body')
<section id="home-section" class="hero">
	      <div  style="padding-left:0%;background-image: url(/images/1.png);">
          <section class="ftco-section">
      <div >
        <div class="container">
            @foreach($res as $val)
          <div class="col-xl-7 ftco-animate">
				<h1 style="padding-left:70%"class="mb-4 billing-heading"><b>EDIT PRODUCT</b></h1>
			</div >
			<form action="/edpaction/{{$val->id}}"  method="post" enctype="multipart/form-data" classs="billing-form">
                @csrf
	          	<div>
	                <div class="form-group">
	                  	<input type="hidden" name="sname" class="form-control" value="{{$val->shop_name}}">
	                </div>
	            </div>
                <div>
	                <div class="form-group">
	                	<label for="name">Product  Name</label>
	                  	<input type="text" name="pname" value="{{$val->pname}}" class="form-control" >
	                </div>
	            </div>
				<div >
		            <div class="form-group">
	                	<label for="qnty">Quantity</label>
	                  	<input type="number" name="qnty" class="form-control"value="{{$val->avail_qnty}}" placeholder="">
	                </div>
		        </div>
		        <div >
		            <div class="form-group">
		            	<label for="prize">Product Prize</label>
	                  	<input type="text" name="prize" class="form-control"value="{{$val->Prize}}" placeholder="">
	                </div>
		        </div>
		        <div >
	                <div class="form-group">
	                	<label for="date">Product Date</label>
	                  	<input type="date" name="pdate" class="form-control"value="{{$val->pdate}}" placeholder="">
	                </div>
	            </div>
	            <div class="form-group">
	                <label for="uname">Product Type</label>
                        <select name="ptype" class="form-control" >
                                <option value="{{$val->product_type}}">{{$val->product_type}}</option>
                                <option value="Gifts">Gifts</option>
                                <option value="Toys">Toys</option>
                                <option value="Grocery">Grocery</option>
                                <option value="Vegetables">Vegetables</option>
                                <option value="Fruits">Fruits</option>
                                <option value="Fancy">Fancy</option>
                                <option value="Others">Others</option>
                        </select>
                </div>
	            <div class="form-group">
	                <label for="status">Status</label>
                    <select name="status" class="form-control" >
                        <option value="{{$val->status}}">{{$val->status}}</option>
                        <option value="Available">Available</option>
                        <option value="Not Available">Not Available</option>
                    </select>
	            </div>
                </div>
				<div class="container">
				<div style="padding-bottom:5%" class="row">
				<div class="col-sm-6"><input type="submit" name="submit" value="Edit Product" class="btn btn-success btn-block" ></div>
				<div class="col-sm-6"> <input type="reset" value="Clear" class="btn btn-success btn-block"></div>
                </div>
				</div>
	        </form><!-- END -->
            @endforeach
					</div>
	    </div>
	 </div>
</section>
@endsection