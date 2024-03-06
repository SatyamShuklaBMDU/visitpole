@extends('admin.layout.master')
@section('content-area')
<div class="col-sm-9">
    <div class="card">
       <div class="card-header text-center">
          <marquee behavior="alternate" direction="right" scrollamount="1" onmouseover="stop();" onmouseout="start();">
             <h4 class="text-success mt-3">Add Media Image</h4>
          </marquee>
       </div>
       <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data" id="admiform">
             <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="name" required>
             </div>
             <br>
             <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image" required>
             </div>
             <br>
             <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                   <option value="1">Enabled</option>
                   <option value="0">Disabled</option>
                </select>
             </div>
             <div class="text-center mt-2">
                <a href="{{url()->previous()}}" class="btn btn-dark text-white">Back</a>
                <button type="submit" value="submit" class="btn btn-dark text-white" name="save">Save</button>
             </div>
          </form>
       </div>
    </div>
 </div>
@endsection