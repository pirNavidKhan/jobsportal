

<!---jobs-----------------------category------------->
@extends('admin/layout')
@section('page_title','Manage Size')
@section('size_select','active')
@section('container')
<h3 class="card-header col-12 mb10 text text-light bg-dark" style="font-family: cursive;">Manage Category</h3>
<a href="{{url('admin/category')}}">
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
    <form action="{{route('category.manage_category_process')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="size" class="control-label mb-1">Category Name </label>
            <input id="cate_name" value="{{$cate_name}}" name="cate_name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
            @error('cate_slug')
            <div class="alert alert-danger" role="alert">
                {{$message}}		
            </div>
            @enderror
        </div>
        
        <div>

              <div class="form-group">
            <label for="size" class="control-label mb-1">Category Slug </label>
            <input id="cate_slug" value="{{$cate_slug}}" name="cate_slug" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
            @error('cate_slug')
            <div class="alert alert-danger" role="alert">
                {{$message}}        
            </div>
            @enderror
        </div>
        
        <div>
 <div class="form-group">
                <label for="desc" class="control-label mb-1">Desc</label>
                <textarea id="cate_desc" name="cate_desc" type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$cate_desc}}</textarea>
              </div>

              <div class="form-group">
                <label for="desc" class="control-label mb-1">Keywords</label>
                <textarea id="cate_key" name="cate_key" type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$cate_key}}</textarea>
              </div>

              <div class="form-group col-4">
                <label for="desc" class="control-label mb-1">Salary</label>
                <input value="{{$salary}}" id="salary" name="salary" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                @error('salary')
            <div class="alert alert-danger" role="alert">
                {{$message}}        
            </div>
            @enderror
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