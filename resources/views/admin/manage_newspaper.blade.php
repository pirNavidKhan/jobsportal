@extends('admin/layout')
@section('page_title','Manage Newspapaer')
@section('tax_select','active')
@section('container')
<h3 class="mb10 text text-danger">add Newspapr for jobs</h3>
<a href="{{url('admin/newspaper')}}">
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
                <form action="{{route('tax.manage_tax_process')}}" method="post">
                    @csrf

                      <div class="form-group">
                        <label for="size" class="control-label mb-1">Newspaper Name </label>
                        <input id="newsp_name" value="{{$newsp_name}}" name="newsp_name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                        @error('newsp_name')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}        
                        </div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="size" class="control-label mb-1">Newspaper slug </label>
                        <input id="newsp_slug" value="{{$newsp_slug}}" name="newsp_slug" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                        @error('newsp_slug')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}		
                        </div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="size" class="control-label mb-1">Description </label>
                        <textarea id="newsp_desc" name="newsp_desc" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                         {{$newsp_desc}}</textarea>
                    </div>

                     <div class="form-group">
                        <label for="size" class="control-label mb-1">Keyword </label>
                        <textarea id="newsp_keyword" name="newsp_keyword" type="text" class="form-control" aria-required="true" aria-invalid="false" required>{{$newsp_keyword}}</textarea> 
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