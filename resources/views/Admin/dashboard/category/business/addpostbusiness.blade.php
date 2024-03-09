@extends('admin.layout.master')
@section('content-area')
    <div class="col-sm-9 shadow">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (Session::has('success'))
                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                @endif
                <form action="{{ route('business.store') }}" method="post" enctype="multipart/form-data" id="adbpform">
                    @csrf
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label>Heading<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="heading" required></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Post Category<span class="text-danger">*</span></label>
                                <select name="category_id" class="form-control" required>
                                    <option value="" disabled selected>----Select Category----</option>
                                    @foreach ($category as $value)
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Short Description<span class="text-danger">*</span></label>
                                <textarea rows="10" class="form-control" name="short_content" required></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Long Description<span class="text-danger">*</span></label>
                                <textarea rows="25" id="editor1" name="editor1" class="form-control" required></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Author's Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="author_name" required>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Image<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" name="image" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Image1<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" name="image1" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" class="form-control" name="date">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Status<span class="text-danger">*</span></label>
                                <select name="status" class="form-control" required>
                                    <option>----Select----</option>
                                    <option value="1">Enabled</option>
                                    <option value="0">Disabled</option>
                                </select>
                            </div>
                            <!-- meta -->
                            <div class="form-group">
                                <label>Slug URL<span class="star">*</span></label>
                                <textarea rows="2" class="form-control" name="slug_url" required></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Meta Title<span class="star">*</span></label>
                                <textarea rows="2" class="form-control" name="m_title" required></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Meta Description<span class="star">*</span></label>
                                <textarea rows="2" class="form-control" name="m_desc" required></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Meta Keyword<span class="star">*</span></label>
                                <textarea rows="2" class="form-control" name="m_key" required></textarea>
                            </div>
                            <br>
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <a href="{{ url()->previous() }}" class="btn btn-dark text-white">Back</a>
                        <button type="submit" value="submit" class="btn btn-dark text-white" name="save">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
