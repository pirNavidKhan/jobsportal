@extends('admin/layout')
@section('page_title','Manage Defatrment')
@section('color_select','active')
@section('container')
<h3 class="card-header col-12 mb10 text text-light bg-dark" style="font-family: cursive;">Manage Defatrment</h3>
<a href="{{url('admin/Department')}}">
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
            <form action="{{route('Department.manage_Department_process')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="color" class="control-label mb-1">department </label>
                    <input id="department" value="{{$department}}" name="department" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                    @error('department')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}		
                    </div>
                    @enderror
                </div>

                 <div class="form-group">
                    <label for="color" class="control-label mb-1">department Url</label>
                    <input id="def_url" value="{{$def_url}}" name="def_url" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                   
                </div>
                
                 <div class="form-group">
                    <label for="def_slug" class="control-label mb-1">slug </label>
                    <input id="def_slug" value="{{$def_slug}}" name="def_slug" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                    @error('def_slug')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}        
                    </div>
                    @enderror
                </div>

                 <div class="form-group">
                    <label for="def_slug" class="control-label mb-1">description </label>
                    <textarea id="def_desc" value="{{$def_desc}}" name="def_desc"  class="form-control" aria-required="true" aria-invalid="false" required >{{$def_desc}}</textarea> 
                </div>

                 <div class="form-group">
                    <label for="def_slug" class="control-label mb-1">Keywords </label>
                    <textarea id="def_key" name="def_key"  class="form-control" aria-required="true" aria-invalid="false" required >{{$def_key}}</textarea> 
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