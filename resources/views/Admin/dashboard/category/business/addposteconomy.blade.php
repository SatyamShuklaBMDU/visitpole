@extends('admin.layout.master')
@section('content-area')
<div class="col-sm-9 shadow">
    <div class="card">
       <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data" id="adcpform">
             <div class="row">
                <div class="col-sm-7">
                   <div class="form-group">
                      <label>Heading<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="heading" minlength="5" maxlength="150" required>
                   </div>
                   <br>
                   <div class="form-group">
                      <label>Post Category<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="post_number" required></input>
                   </div>
                   <br>
                   <div class="form-group">
                      <label>Short Description<span class="text-danger">*</span></label>
                      <textarea class="form-control" rows="10" name="contentshort" required></textarea>
                   </div>
                   <br>
                   <div class="form-group">
                      <label>Long Description<span class="text-danger">*</span></label>
                      <textarea rows="25" id="editor1" name="contentlong" class="form-control"></textarea>
                   </div>
                   <br>
                   <div class="form-group">
                      <label>Author's Name<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="author" required>
                   </div>
                </div>
                <div class="col-sm-5">
                   <div class="form-group">
                      <label>Image<span class="text-danger">*</span></label>
                      <input type="file" class="form-control" name="image" required>
                   </div>
                   <br>
                   <div class="form-group">
                      <label>Date</label>
                      <input type="date" class="form-control" name="date">
                   </div>
                   <br>
                   <div class="form-group">
                      <label>Status<span class="text-danger">*</span></label>
                      <select name="status" class="form-control">
                         <option>----Select----</option>
                         <option value="1">Enabled</option>
                         <option value="0">Disabled</option>
                      </select>
                   </div>
                   <!-- meta -->
                   <div class="form-group">
                      <label>Meta Title<span class="star">*</span></label>
                      <textarea rows="2" class="form-control" name="m_title"></textarea>
                   </div>
                   <br>
                   <div class="form-group">
                      <label>Meta Description<span class="star">*</span></label>
                      <textarea rows="2" class="form-control" name="m_desc"></textarea>
                   </div>
                   <br>
                   <div class="form-group">
                      <label>Meta Keyword<span class="star">*</span></label>
                      <textarea rows="2" class="form-control" name="m_key"></textarea>
                   </div>
                   <br>
                </div>
             </div>
             <br>
             <div class="text-center">
                <a href="{{url()->previous()}}" class="btn btn-dark text-white">Back</a>
                <button type="submit" value="submit" class="btn btn-dark text-white" name="save">Save</button>
             </div>
          </form>
       </div>
    </div>
 </div>
 </div> 
@endsection