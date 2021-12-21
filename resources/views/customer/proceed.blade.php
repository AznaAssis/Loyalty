@extends('customer.cheader')
@section('main-body')
<section class=" ftco-cart" style="background-color:lightblue">
			<div class="">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="container">
						<form action="/bookp" method="post">
							@csrf
<table class="table" id="tableid">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product name</th>
						        <th>Quantity</th>
						        <th>Sub Total</th>
						      </tr>
						    </thead>
						    <tbody id="tbody"> 
							@foreach($res as $val)
						      <tr class="text-center">
						        <td class="product-remove"><a href="/delete/{{$val->id}}"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url({{asset('pimage/'.$val->pimg)}});"></div></td>
						        <td >{{$val->pname}}
								<input type="hidden" name="cartid" id="cartid" value="{{$val->id}}"> 
								</td>
</div>
						        <td class="quantity">
					             	{{$val->qnty}}
					          </td>
                              <input type="hidden" name="qnty" id="qnty" class="qnty form-control input-number" value="{{$val->qnty}}" min="1" >
                              <input type="hidden" name="total" id="total" class="quantity form-control input-number" value="{{$val->prize}}">
						        <td class="total">
					             	{{$val->prize}}
							</td>
							<td><input type="hidden" name="pid" id="pid" value="{{$val->p_id}}"></td>
							<!-- <td ><a href="/bookproduct/{{$val->id}}"><input type="submit" class="btn btn-primary"  value="Book product"></a></td> -->
								
						      </tr>
							   
							  @endforeach
							  </tbody>
								<tr>
								<td>&nbsp;</td>
						        <td>&nbsp;</td>
								<td><b></b></td>
								<td >Total</td>
								@foreach($sum as $v)
								<td >  {{$v->psum}}</td>
								<input type="hidden" name="ttotal" id="ttotal" value="{{$v->psum}}">
								@endforeach
</tr>
<tr>
<td>&nbsp;</td>
						        <td>&nbsp;</td>
								<td>&nbsp;</td>
						        <td>&nbsp;</td>
	<td><input type="submit" value="Book now" class="btn btn-primary"></td>
</tr>

</table>

</form> 
    
	
@endsection