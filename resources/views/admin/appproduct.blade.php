@extends('admin.adminheader')
@section('main-body')
<div class="content-wrapper" style="background-color:black;">
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
                        <th rowspan="1" colspan="1">Shop Name</th>
                        <th rowspan="1" colspan="1">Product Name</th>
                        <th rowspan="1" colspan="1">Prize</th>
                        <th rowspan="1" colspan="1">Qnty</th>
                        <th rowspan="1" colspan="1">Type</th>
                        <th rowspan="1" colspan="1">Status</th>
                        <th rowspan="1" colspan="1">Approve</th>
                        <th rowspan="1" colspan="1">declined</th>
                        </tr>
                  <tbody role="alert" aria-live="polite" aria-relevant="all">
                  @foreach($res as $val)
                  @if($val->status=='Available'||$val->status=='Approve'||$val->status=='Decline')
                      <tr class="odd">
                        <td class="  sorting_1">{{$val->id}}</td>
                        <td class=" ">{{$val->shop_name}}</td>
                        <td class=" ">{{$val->pname}}</td>
                        <td class=" ">{{$val->Prize}}</td>
                        <td class=" ">{{$val->avail_qnty}}</td>
                        <td class=" ">{{$val->product_type}}</td>
                        <td class=" ">{{$val->status}}</td>
                        <td class=" "><a href="approvep/{{ $val->id}}">Approve</a></td>
                        <td class=" "><a href="declinep/{{ $val->id}}">Declined</a></td>
                      </tr>
                      @endif
                      @endforeach

                    </tbody>
                </table>
                </div>
          </div>
</div>
</div>