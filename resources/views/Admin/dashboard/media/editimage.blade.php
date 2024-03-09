@extends('admin.layout.master')
@section('content-area')
    <div class="col-sm-9">
        <div class="card">
            <div class="card-header text-center">
                <marquee behavior="alternate" direction="right" scrollamount="1" onmouseover="stop();" onmouseout="start();">
                    <h4 class="text-success mt-3">Edit Media Image</h4>
                </marquee>
            </div>
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
                <form action="{{route('media-images.update',encrypt($mediaImage[0]->id))}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="name" value="{{$mediaImage[0]->name}}" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image">
                        <img src="{{asset($mediaImage[0]->image)}}" alt="No Image" height="100px" width="100px">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="1" {{ $mediaImage[0]->status == 1 ? 'selected' : '' }}>Enabled</option>
                            <option value="0" {{ $mediaImage[0]->status == 0 ? 'selected' : '' }}>Disabled</option>
                        </select>
                    </div>
                    <div class="text-center mt-2">
                        <a href="{{ url()->previous() }}" class="btn btn-dark text-white">Back</a>
                        <button type="submit" value="submit" class="btn btn-dark text-white" name="save">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
