@extends('admin/layout')
@section('page_title','manage JObs Education')
@section('home_banner_select','active')
@section('container')
<h1 class="mb10">Manage jobs education</h1>
<a href="{{url('admin/jobs_education')}}">
<button type="button" class="btn btn-success">
Back
</button>
</a>
<div class="row m-t-30">
<div class="col-md-12">
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-body">
<form action="{{route('jobs_education.manage_education_process')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <div class="row">
             <div class="col-md-6">
                <label for="category_name" class="control-label mb-1">name</label>
                <input id="edu_name" value="{{$edu_name}}" name="edu_name" type="text" class="form-control" aria-required="true" aria-invalid="false">
            </div>

            <div class="col-md-6">
                <label for="category_name" class="control-label mb-1">Keyword</label>
                <input id="edu_keyword" value="{{$edu_keyword}}" name="edu_keyword" type="text" class="form-control" aria-required="true" aria-invalid="false">
            </div>
             <div class="col-md-6">
                <label for="category_name" class="control-label mb-1">Slug</label>
                <input id="edu_slug" value="{{$edu_slug}}" name="edu_slug" type="text" class="form-control" aria-required="true" aria-invalid="false">
            </div>

            <div class="col-md-6">
                <label for="category_name" class="control-label mb-1">Description</label>
                <textarea id="edu_desc" value="{{$edu_desc}}" name="edu_desc" type="text" class="form-control"aria-required="true" aria-invalid="false">{{$edu_desc}}</textarea> 
            </div>

        </div>
        
    </div>
        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
            Submit
        </button>
    </div>
    <input type="hidden" name="id" value="{{$id}}"/>
</form>
</div>
</div>
</div>
</div>        
</div>
</div>

@endsection