@extends('admin.layout.master')
@section('content-area')
    <div class="col-sm-9 shadow">
        <div class="card">
            <div class="card-body">
                {{-- <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data" id="adcpform">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Heading<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="description">Long Description<span class="text-danger">*</span></label>
                                <textarea rows="5" id="editor1" name="description" class="form-control" required>{{ old('description') }}</textarea>
                                @error('editor1')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="image">Image<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="image" name="image" required>
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                    <div class="text-center">
                        <a href="{{url()->previous()}}" class="btn btn-dark text-white">Back</a>
                        <button type="submit" value="submit" class="btn btn-dark text-white" name="save">Save</button>
                    </div>
                </form> --}}
                <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data" id="adcpform">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="title">Heading<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="description">Long Description<span class="text-danger">*</span></label>
                                <textarea rows="5" id="editor1" name="description" class="form-control" required>{{ old('description') }}</textarea>
                                @error('editor1')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="image">Image<span class="text-danger">*</span></label>
                                <input type="file" class="form-control" id="image" name="image" required>
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ url()->previous() }}" class="btn btn-dark text-white">Back</a>
                        <button type="submit" class="btn btn-dark text-white">Save</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
@endsection
