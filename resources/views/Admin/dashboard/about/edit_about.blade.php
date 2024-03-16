@extends('admin.layout.master')
@section('content-area')
    <div class="col-sm-9 shadow">
        <div class="card">
            <div class="card-body">
                {{-- @dd($about->image) --}}
                <form action="{{ route('about.update', $about->id) }}" method="post" enctype="multipart/form-data" id="adcpform">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="title">Heading<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $about->title }}" required>
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="description">Long Description<span class="text-danger">*</span></label>
                                <textarea rows="5" id="editor1" name="description" class="form-control" required>{{ $about->description }}</textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="current_image">Current Image:</label><br>
                                <input type="hidden" name="current_image" value="{{ $about->image }}">
                                <img src="{{ asset('images/' . $about->image) }}" height="100px" width="100px">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">New Image</label>
                                <input type="file" class="form-control"  name="image">
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ url()->previous() }}" class="btn btn-dark text-white">Back</a>
                        <button type="submit" class="btn btn-dark text-white">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
