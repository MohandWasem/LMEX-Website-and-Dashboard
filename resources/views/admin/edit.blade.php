@extends("style.index")

@section("content")
<div class="col-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<h4 class="card-title">Edit Services</h4>
<br>

<form class="forms-sample" action="{{route('Services.update',$Services->id)}}" method="post" enctype="multipart/form-data">
@csrf

<div class="form-group">
<label for="exampleInputName1"> Name</label>
<input type="text" name="services_name" class="form-control" id="exampleInputName1" value="{{$Services->services_name}}" placeholder=" Name" required>
</div>

<div class="form-group">
<label for="exampleInputEmail3">Description</label>
<input type="text" name="Description" class="form-control" id="exampleInputEmail3" value="{{$Services->Description}}" placeholder="Description" required>
</div>

<div class="form-group">
    <label>Image</label>
    <input type="file" name="image" class="file-upload-default" multiple>
    <div class="input-group col-xs-12">
    <input type="text" class="form-control file-upload-info"  placeholder="Upload File">
    <span class="input-group-append">
    <button class="file-upload-browse btn btn-gradient-secondary" type="button">Upload</button>
    </span>
    </div>
    </div>



<button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
<a href="{{route('Services')}}" class="btn btn-light">Cancel</a>
</form>
</div>
</div>
</div>
@endsection