@extends('admin.adminheader')
@section('main-body')
<div class="content-wrapper" style="background-color:black;">
        <div class="content-header" >
          <h1 style="padding-left:40%;padding-bottom:5%;color:white;" class="content-header"><b> VIEW MANAGERS</b></h1>
          <div>
    <div class="box-body">
                  <div id="example2_wrapper" class="dataTables_wrapper form-inline" role="grid">
                      <div class="row">
                          <div class="col-xs-6"></div>
                          <div class="col-xs-6"></div>
                        </div>
                        <table id="example2" style="background-color:darkblue;color:white;" class="table table-bordered  dataTable" aria-describedby="example2_info">

                      <tr>
                          <th rowspan="1" colspan="1">ID</th>
                        <th rowspan="1" colspan="1">Name</th>
                        <th rowspan="1" colspan="1">Email</th>
                        <th rowspan="1" colspan="1">Phone Number</th>
                        <th rowspan="1" colspan="1">City</th>
                        <th rowspan="1" colspan="1">Pincode</th>
                        <th rowspan="1" colspan="1">Status</th>
                        <th rowspan="1" colspan="1">Shop Name</th>
                        <th rowspan="1" colspan="1">Approve</th>
                        <th rowspan="1" colspan="1">declined</th>
                        </tr>
                  <tbody role="alert" aria-live="polite" aria-relevant="all">
                  @foreach($result as $val)
                      <tr class="odd">
                        <td class="  sorting_1">{{$val->id}}</td>
                        <td class=" ">{{$val->name}}</td>
                        <td class=" ">{{$val->email}}</td>
                        <td class=" ">{{$val->phno}}</td>
                        <td class=" ">{{$val->city}}</td>
                        <td class=" ">{{$val->pincode}}</td>
                        <td class=" ">{{$val->status}}</td>
                        <td class=" ">{{$val->sname}}</td>
                        <td class=" "><a href="approvem/{{ $val->id}}">Approve</a></td>
                        <td class=" "><a href="declinem/{{ $val->id}}">Declined</a></td>
                      </tr>
                      @endforeach

                    </tbody>
                </table>
                </div>
          </div>
        </div>
</div>