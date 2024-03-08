@extends('admin.layout.master')
@section('content-area')
    <div class="col-sm-9 shadow">
        <div class="card">
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data" id="adcpform">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Heading<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="heading" minlength="5" maxlength="150"
                                    required>
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
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Image<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" name="image" required>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label>Status<span class="text-danger">*</span></label>
                                <select name="status" class="form-control">
                                    <option>----Select----</option>
                                    <option value="1">Enabled</option>
                                    <option value="0">Disabled</option>
                                </select>
                            </div>
                    <div class="text-center">
                        <a href="{{url()->previous()}}" class="btn btn-dark text-white">Back</a>
                        <button type="submit" value="submit" class="btn btn-dark text-white" name="save">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection