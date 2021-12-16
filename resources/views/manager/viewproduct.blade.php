@extends('manager.mheader')
@section('main-body')
<div >
    <center><h1 style="color:green;text-align:centre"><b>View Managers</b></h1></center>
</div>  
    <div class="row">
    	<div class="col-md-12">
    		<div class="">
	    		<table class="table">
					<thead class="thead-primary">
						<tr class="text-center">
                            <th rowspan="1" colspan="1">ID</th>
                            <th rowspan="1" colspan="1">Shop Name</th>
                            <th rowspan="1" colspan="1">Product Name</th>
                            <th rowspan="1" colspan="1">Prize</th>
                            <th rowspan="1" colspan="1">Qnty</th>
                            <th rowspan="1" colspan="1">Type</th>
                            <th rowspan="1" colspan="1">Status</th>
                            <th rowspan="1" colspan="1">Edit Product</th>
                        </tr>
                    </thead>
                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                        @foreach($res as $val)
                      <tr class="odd text-center">
                        <td class="  sorting_1">{{$val->id}}</td>
                        <td class=" ">{{$val->shop_name}}</td>
                        <td class=" ">{{$val->pname}}</td>
                        <td class=" ">{{$val->Prize}}</td>
                        <td class=" ">{{$val->avail_qnty}}</td>
                        <td class=" ">{{$val->product_type}}</td>
                        <td class=" ">{{$val->status}}</td>
                        <td class=" "><a href="/editp/{{ $val->id}}">Edit {{$val->pname}}</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
   @endsection