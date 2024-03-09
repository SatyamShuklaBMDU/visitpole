@extends('admin.layout.master')
@section('content-area')
    <div class="col-sm-9 shadow">
        @if (Session::has('success'))
            <p class="alert alert-success">{{ Session::get('success') }}</p>
        @endif
        <div class="bg-light">
            <!-- <marquee behavior="alternate" direction="right" scrollamount="1" onmouseover="stop();" onmouseout="start();">
                <h4 class="text-success mt-3">Media Details</h4>
            </marquee> -->
        </div>
        <div class="text-end mt-2 mb-2">
            <a href="{{route('add.image')}}" class="btn btn-dark text-light">
                <i class="fa-solid fa-plus"></i>
                Add Image
            </a>
        </div>
        <table class="table table-responsive display table-ordered">
            <thead class="bg-dark text-light">
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Images</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($medias as $media)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$media->name}}</td>
                    <td><img src="{{asset($media->image)}}" height="100px" width="100px" alt="No Image"></td>
                    @if ($media->status == 1)
                            <td class="text-center"><a class="btn btn-success">Yes</a></td>
                        @else
                            <td class="text-center"><a class="btn btn-danger">No</a></td>
                        @endif
                    <td><a href="{{ route('media-images.edit', encrypt($media->id)) }}" class="btn btn-warning">Update</a></td>
                    <td>
                        <form action="{{route('media-images.destroy',encrypt($media->id))}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" name="delete" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
