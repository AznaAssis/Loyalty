@extends('admin.adminheader')
@section('main-body')
<div class="content-wrapper" style="background-color:black;">
        <div class="content-header" >
          <h1 style="padding-left:40%;padding-bottom:5%;color:white;" class="content-header"><b> VIEW ABOUT</b></h1>
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
                        <th rowspan="1" colspan="1">About</th>
                        <th rowspan="1" colspan="1">Update</th>
                        </tr>
                  <tbody role="alert" aria-live="polite" aria-relevant="all">
                  @foreach($res as $val)
                      <tr class="odd">
                        <td class="  sorting_1">{{$val->id}}</td>
                        <td class=" ">{{$val->abouts}}</td>
                        <td class=" "><a href="editabout/{{ $val->id}}">Edit About</a></td>
                      </tr>
                      @endforeach

                    </tbody>
                </table>
                </div>
          </div>
        </div>
</div>