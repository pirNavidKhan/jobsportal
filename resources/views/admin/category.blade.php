@extends('admin/layout')
@section('page_title','Jobs Category')
@section('size_select','active')
@section('container')
@if(session()->has('message'))
<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
{{session('message')}}  
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div> 
@endif  
<div ></div>                         
<h3 class="card-header text text-light bg-dark mb10" style="font-family: cursive;">jobs category</h3>
<a href="{{url('admin/category/manage_category')}}">
<button type="button" class="btn btn-success">
Add Category
</button>
</a>
<div class="row m-t-30">
<div class="col-md-12">
<!-- DATA TABLE-->
<div class="table-responsive m-b-40">
<table class="table table-borderless table-data3">
    <thead>
        <tr>
            <th>ID</th>
            <th>salary</th>
            <th>Name</th>
            <th>slug</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $list)
        <tr>
            <td>{{$list->id}}</td>
            <td>{{$list->salary}}</td>
            <td>{{$list->cate_name}}</td>
            <td>{{$list->cate_slug}}</td>
            <td>
                <a href="{{url('admin/category/manage_category/')}}/{{$list->id}}"><button type="button" class="btn btn-success btn-sm">Edit</button></a>

                @if($list->status==1)
                    <a href="{{url('admin/category/status/0')}}/{{$list->id}}"><button type="button" class="btn btn-primary btn-sm">Active</button></a>
                 @elseif($list->status==0)
                    <a href="{{url('admin/category/status/1')}}/{{$list->id}}"><button type="button" class="btn btn-warning btn-sm">Deactive</button></a>
                @endif

                <a href="{{url('admin/category/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-danger btn-sm ">Delete</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<!-- END DATA TABLE-->
</div>
</div>
        
@endsection