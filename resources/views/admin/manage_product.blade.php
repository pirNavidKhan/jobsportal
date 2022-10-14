@extends('admin/layout') @section('page_title','Manage Product') @section('product_select','active') @section('container') @if($id>0) @php $image_required=""; @endphp @else @php $image_required="required"; @endphp @endif <h1 class="mb10">Manage Product</h1> @error('attr_image.*') <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
  {{$message}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div> @enderror @error('images.*') <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
  {{$message}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div> @enderror <a href="{{url('admin/product')}}">
  <button type="button" class="btn btn-success"> Back </button>
</a>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<div class="row m-t-30">
  <div class="col-md-12">
    <form action="{{route('product.manage_product_process')}}" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body"> @csrf <div class="form-group">
                <label for="name" class="control-label mb-1"> Name</label>
                <input id="name" value="{{$name}}" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" required> @error('name') <div class="alert alert-danger" role="alert">
                  {{$message}}
                </div> @enderror
              </div>
              <div class="form-group">
                <label for="slug" class="control-label mb-1"> Slug</label>
                <input id="slug" value="{{$slug}}" name="slug" type="text" class="form-control" aria-required="true" aria-invalid="false" required> @error('slug') <div class="alert alert-danger" role="alert">
                  {{$message}}
                </div> @enderror
              </div>
              <div class="form-group">
                <label for="image" class="control-label mb-1"> Image</label>
                <input id="image" name="image" type="file" class="form-control" aria-required="true" aria-invalid="false" {{$image_required}}> @error('image') <div class="alert alert-danger" role="alert">
                  {{$message}}
                </div> @enderror @if($image!='') <a href="{{asset('storage/media/'.$image)}}" target="_blank">
                  <img width="100px" src="{{asset('storage/media/'.$image)}}" />
                </a> @endif
              </div>
              <div class="form-group">
                <div class="row">
                  <!---city-->
                 <div class="col-md-4">
                              <label for="category_id" class="control-label mb-1"> City</label>
                              <select id="city_id" name="city_id" class="form-control" required>
                                 <option value="">Select City</option>
                                 @foreach($City as $list)
                                 @if($city_id==$list->id)
                                 <option selected value="{{$list->id}}">
                                    @else
                                 <option value="{{$list->id}}">
                                    @endif
                                    {{$list->city_name}}
                                 </option>
                                 @endforeach
                              </select>
                           </div>
                  <!---Defatrement-->
      <div class="col-md-4">
        <label for="color" class="control-label mb-1"> Defatrement</label>
        <select id="department" name="department" class="form-control">
<option value="">Select defartement</option required> 
@foreach($departments as $list) 
@if($department==$list->id)
<option selected value="{{$list->id}}">
@else
 <option value="{{$list->id}}">
    @endif
    {{$list->department}}
 </option>
 @endforeach
{{$list->department}}

        </select>
      </div>

             <!---education-->
      <div class="col-md-4">
        <label for="color" class="control-label mb-1"> Education</label>
        <select id="edu_id" name="edu_id" class="form-control">
<option value="">Select Education</option required> 
@foreach($education as $list) 
@if($edu_id==$list->id)
<option selected value="{{$list->id}}">
@else
 <option value="{{$list->id}}">
    @endif
    {{$list->edu_name}}
 </option>
 @endforeach
{{$list->edu_name}}

        </select>
      </div>

        <!---category-->
      <div class="col-md-4">
        <label for="color" class="control-label mb-1"> category</label>
        <select id="cate_id" name="cate_id" class="form-control">
<option value="">Select category</option required> 
@foreach($category as $list) 
@if($cate_id==$list->id)
<option selected value="{{$list->id}}">
@else
 <option value="{{$list->id}}">
    @endif
    {{$list->cate_name}}
 </option>
 @endforeach
{{$list->cate_name}}

        </select>
      </div>

      <!---newspapaer---->
      <div class="col-md-4">
        <label for="color" class="control-label mb-1"> Newspapaer</label>
        <select id="newspaper_id" name="newspaper_id" class="form-control">
<option value="">Select Newspaper</option required> 
@foreach($newspapers as $list) 
@if($newspaper_id==$list->id)
<option selected value="{{$list->id}}">
@else
 <option value="{{$list->id}}">
    @endif
    {{$list->newsp_name}}
 </option>
 @endforeach
{{$list->newsp_name}}

        </select>
      </div>


      <div class="col-md-4">
        <label for="color" class="control-label mb-1"> Country</label>
        <select id="cuntry_id" name="cuntry_id" class="form-control">
<option value="">Select Country</option required> 
@foreach($cuntry as $list) 
@if($cuntry_id==$list->id)
<option selected value="{{$list->id}}">
@else
 <option value="{{$list->id}}">
    @endif
    {{$list->cu_name}}
 </option>
 @endforeach
{{$list->cu_name}}

        </select>
      </div>

                  <div class="col-md-4">
                    <label for="model" class="control-label mb-1"> Last Date</label>
                    <input id="model" value="{{$model}}" name="model" type="date" class="form-control" aria-required="true" aria-invalid="false" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="desc" class="control-label mb-1">Desc</label>
                <textarea id="desc" name="desc" type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$desc}}</textarea>
              </div>
              <div class="form-group">
                <label for="keywords" class="control-label mb-1"> Keywords</label>
                <textarea id="keywords" name="keywords" type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$keywords}}</textarea>
              </div>
              <div class="form-group"></div>
              <div class="form-group">
                <div class="row">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block"> Submit </button>
      </div>
      <input type="hidden" name="id" value="{{$id}}" />
    </form>
  </div>
</div>
<script>
  CKEDITOR.replace('short_desc');
  CKEDITOR.replace('desc');
</script> @endsection