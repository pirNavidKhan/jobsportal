@extends('admin/layout')
@section('page_title','Manage City')
@section('category_select','active')
@section('container')
<h3 class="card-header col-12 mb10 text text-light bg-dark" style="font-family: cursive;">Manage City</h3>
<a href="{{url('admin/city')}}">
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
            <form action="{{route('city.manage_city_process')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="category_name" class="control-label mb-1">City Name</label>
                            <input id="city_name" value="{{$city_name}}" name="city_name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                        </div>




      

                        <div class="col-md-12">
                            <label for="category_slug" class="control-label mb-1">City Slug</label>
                            <input id="city_slug" value="{{$city_slug}}" name="city_slug" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                            @error('city_slug')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                            @enderror

                        </div>
                    </div>
                    
                </div>

                 <div class="col-md-12">
    <label for="category_name" class="control-label mb-1">Category Description</label>
    <textarea id="c_desc" name="c_desc" type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$c_desc}}</textarea>
</div>

<div class="col-md-12">
    <label for="category_name" class="control-label mb-1">Category Keywords</label>
    <textarea id="c_keyword" name="c_keyword" type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$c_keyword}}</textarea>
</div>


  <div class="col-md-4">
            <label for="category_name" class="control-label mb-1">Parent  Category</label>
            <select id="parent_category_id" name="parent_category_id" class="form-control">
            <option value="">Select Categories</option>
            @foreach($category as $list)
            @if($parent_category_id==$list->id)
            <option selected value="{{$list->id}}">
                @else
            <option value="{{$list->id}}">
                @endif
                {{$list->city_name}}
            </option>
            @endforeach
        </select>
        </div>
                <div class="form-group">
                    <label for="image" class="control-label mb-1"> Image</label>
                    <input id="category_image" name="category_image" type="file" class="form-control" aria-required="true" aria-invalid="false">
                    @error('category_image')
                    <div class="alert alert-danger" role="alert">
                    {{$message}}		
                    </div>
                    @enderror

                    @if($category_image!='')
                            <a href="{{asset('storage/media/category/'.$category_image)}}" target="_blank"><img width="100px" src="{{asset('storage/media/category/'.$category_image)}}"/></a>
                        @endif
                </div>
                <div class="form-group">
                    <label for="image" class="control-label mb-1"> Show in Home Page</label>
                    <input id="is_home" name="is_home" type="checkbox" {{$is_home_selected}}>
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