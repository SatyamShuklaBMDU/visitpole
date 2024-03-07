@extends('admin.layout.master')
@section('content-area')
<div class="col-sm-9 shadow">
    <div class="card">
       <div class="card-header text-center">
          <marquee behavior="alternate" direction="right" scrollamount="1" onmouseover="stop();" onmouseout="start();">
             <h4 class="text-success mt-3">Edit Category</h4>
          </marquee>
       </div>
       <div class="card-body">
          <form action="{{route('categories.update',$category[0]->id)}}" method="post" enctype="multipart/form-data" id="adcform">
            @csrf
            @method('put')
             <div class="form-group">
                <label>Category Name<span class="text-danger fs-3">*</span></label>
                <input type="text" class="form-control" name="cat_name" value="{{$category[0]->name}}">
             </div>
             <br>
             <div class="form-group">
                <label>Page Name<span class="text-danger fs-3">*</span></label>
                <input type="text" class="form-control" name="slug_url" placeholder="Category URL" value="{{$category[0]->slug_url}}">
             </div>
             <br>
             <div class="form-group">
                <label>Meta Title</label>
                <textarea class="form-control" name="cat_meta_title" id="meta" placeholder="Type meta title here" rows="2">{{$category[0]->cat_meta_title}}</textarea>
             </div>
             <br>
             <div class="form-group">
                <label>Meta Description</label>
                <textarea class="form-control" name="cat_meta_desc" id="meta" placeholder="Type meta title here" rows="2">{{$category[0]->cat_meta_desc}}</textarea>
             </div>
             <br>
             <div class="form-group">
                <label>Meta Keyword</label>
                <textarea class="form-control" name="cat_meta_key" id="meta" placeholder="Type meta title here" rows="2">{{$category[0]->cat_meta_key}}</textarea>
             </div>
             <br>
             <div class="form-group">
                <label>Display Category<span class="text-danger fs-3">*</span></label>
                <select class="form-control" id="display" name="display">
                   <option value="" selected>----Select----</option>
                   <option value="1" {{ $category[0]->display_status == '1' ? 'selected' : '' }}>Yes</option>
                   <option value="0" {{ $category[0]->display_status == '0' ? 'selected' : '' }}>No</option>
                </select>
             </div>
             <br>
             <div class="text-center">
                <a href="{{url()->previous()}}" class="btn btn-dark text-light">Back</a>
                <input type="hidden" name="id" value="{{$category[0]->id}}">
                <button type="submit" value="submit" class="btn btn-dark text-white" name="update">Update</button>
             </div>
          </form>
       </div>
    </div>
 </div>
@endsection