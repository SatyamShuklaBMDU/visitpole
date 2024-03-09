@extends('admin.layout.master')
@section('content-area')
    <div class="col-sm-9">
        @if (Session::has('success'))
            <p class="alert alert-success">{{ Session::get('success') }}</p>
        @endif
        <div class="text-end mt-2 mb-2">
            <a href="{{ route('business.post') }}" class="btn btn-dark text-light">
                <i class="fa-solid fa-plus"></i>
                Add Post
            </a>
        </div>
        <table class="table table-responsive display table-bordered">
            <thead class="bg-dark text-light">
                <tr>
                    <th>Title</th>
                    <th>Images1</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->heading }}</td>
                        <td><img src="{{ asset($post->image) }}" alt="No Photo" style="height: 100px;width: 100px;"></td>
                        @if ($post->status == 1)
                            <td class="text-center"><a class="btn btn-success">Yes</a></td>
                        @else
                            <td class="text-center"><a class="btn btn-danger">No</a></td>
                        @endif
                        <td class="text-center">
                            <a href="{{ route('business.edit', encrypt($post->id)) }}" class="btn border-0 shadow-none">
                                <i class="fa-solid fa-user-pen text-success fs-3"></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <form action="{{ route('business.destroy', encrypt($post->id)) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn border-0 shadow-none">
                                    <i class="fa-solid fa-trash fs-3 text-danger"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
