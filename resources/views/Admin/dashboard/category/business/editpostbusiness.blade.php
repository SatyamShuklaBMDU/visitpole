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
                <form action="{{ route('business.update', encrypt($post[0]->id)) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label>Heading<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="heading" required>{{ $post[0]->heading }}</textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Post Category<span class="text-danger">*</span></label>
                                <select name="category_id" class="form-control">
                                    <option value="" disabled>---Select Category---</option>
                                    @foreach ($category as $cat)
                                        <option value="{{ $cat->id }}"
                                            {{ $cat->id == $post[0]->category_id ? 'selected' : '' }}>
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Short Description<span class="text-danger">*</span></label>
                                <textarea rows="10" class="form-control" name="short_content">{{ $post[0]->short_content }}</textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Long Description<span class="text-danger">*</span></label>
                                <textarea rows="25" class="form-control" id="editor1" name="editor1">{{ $post[0]->long_content }}</textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Author's Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="{{ $post[0]->author_name }}"
                                    name="author_name" required>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="">
                                <label>Image</label>
                                <input type="file" name="image" id="image">
                                <img src="{{ asset($post[0]->image) }}" width="100px" height="100px" alt="No image">
                            </div>
                            <br>
                            <div class="">
                                <label>Image1</label>
                                <input type="file" name="image1" id="image1">
                                <img src="{{ asset($post[0]->image1) }}" width="100px" height="100px" alt="No image">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" class="form-control"
                                    value="{{ date('Y-m-d', strtotime($post[0]->date)) }}" name="date" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Status<span class="text-danger">*</span></label>
                                <select name="status" class="form-control">
                                    <option value="1" {{ $post[0]->status == 1 ? 'selected' : '' }}>Enabled</option>
                                    <option value="0" {{ $post[0]->status == 0 ? 'selected' : '' }}>Disabled</option>
                                </select>
                            </div>
                            <!-- Meta Tags -->
                            <div class="form-group">
                                <label>Slug URL<span class="text-danger">*</span></label>
                                <textarea rows="2" class="form-control" name="slug_url" required>{{ $post[0]->slug_url }}</textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Meta Title<span class="text-danger">*</span></label>
                                <textarea rows="2" class="form-control" name="m_title" required>{{ $post[0]->meta_title }}</textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Meta Description<span class="text-danger">*</span></label>
                                <textarea rows="2" class="form-control" name="m_desc" required>{{ $post[0]->meta_desc }}</textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Meta Keyword<span class="text-danger">*</span></label>
                                <textarea rows="2" class="form-control" name="m_key" required>{{ $post[0]->meta_key }}</textarea>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ url()->previous() }}" class="btn btn-dark text-white">Back</a>
                        <button type="submit" value="submit" class="btn btn-dark text-white" name="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
