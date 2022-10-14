@extends('admin/layout')
@section('page_title','Manage Brand')
@section('brand_select','active')
@section('container')


@error('image')
<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
{{$message}}  
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div> 
@enderror
<h1 class="mb10">Manage cuntry</h1>
<a href="{{url('admin/cuntry')}}">
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
<form action="{{route('cuntry.manage_cuntry_process')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <div class="row">
            <div class="col-lg-8">
                <label for="color" class="control-label mb-1">Cuntry Name </label>
                <input id="cu_name" value="{{$cu_name}}" name="cu_name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                @error('name')
                <div class="alert alert-danger" role="alert">
                    {{$message}}		
                </div>
                @enderror 
            </div>

              <div class="col-lg-8">
                <label for="color" class="control-label mb-1">Cuntry Slug </label>
                <input id="cu_slug" value="{{$cu_slug}}" name="cu_slug" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                @error('name')
                <div class="alert alert-danger" role="alert">
                    {{$message}}        
                </div>
                @enderror 
            </div>
            
              <div class="col-lg-8">
                <label for="color" class="control-label mb-1">Cuntry Desc </label>
                <textarea id="cu_desc"  name="cu_desc" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                    {{$cu_desc}}
               </textarea> 
               
            </div>


              <div class="col-lg-8">
                <label for="color" class="control-label mb-1">Cuntry Keyword </label>
                <textarea id="cu_key"  name="cu_key" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                    {{$cu_key}}
               </textarea> 
               
            </div>

             <div class="col-lg-4">
                <label for="color" class="control-label mb-1">Cuntry curncy </label>
                <input id="curncy" value="{{$curncy}}" name="curncy" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                @error('name')
                <div class="alert alert-danger" role="alert">
                    {{$message}}        
                </div>
                @enderror 
            </div>

        </div>
    </div>
  
    <div>
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