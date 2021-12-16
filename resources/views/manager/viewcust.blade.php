@extends('manager.mheader')
@section('main-body')
<div  style="background-image: url(/images/1.png);">
    <center><h1 style="color:green;"><b>Viewcustomers</b></h1></center> 
    <div class="row">
    	<div class="col-md-12">
    		<div class="">
	    		<table class="table">
					<thead class="thead-primary">
						<tr class="text-center">
                            <th rowspan="1" colspan="1">ID</th>
                            <th rowspan="1" colspan="1"> Name</th>
                            <th rowspan="1" colspan="1">email</th>
                            <th rowspan="1" colspan="1">Phone Number</th>
                            <th rowspan="1" colspan="1">Address</th>
                            <th rowspan="1" colspan="1">City</th>
                            <th rowspan="1" colspan="1">Pincode</th>
                            <th rowspan="1" colspan="1">Credit points</th>
                        </tr>
                    </thead>
                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                        @foreach($res as $val)
                      <tr class="odd text-center">
                        <td class="  sorting_1">{{$val->id}}</td>
                        <td class=" ">{{$val->name}}</td>
                        <td class=" ">{{$val->email}}</td>
                        <td class=" ">{{$val->phno}}</td>
                        <td class=" ">{{$val->address}}</td>
                        <td class=" ">{{$val->city}}</td>
                        <td class=" ">{{$val->pincode}}</td>
                        <td class=" ">{{$val->creditpoints}}</td>
                        <!-- <td class=" "><a href="editp/{{ $val->id}}">Edit {{$val->pname}}</a></td> -->
                      </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div> 
   @endsection