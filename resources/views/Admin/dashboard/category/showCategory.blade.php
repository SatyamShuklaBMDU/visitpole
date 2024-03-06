@extends('admin.layout.master')
@section('content-area')
<div class="col-sm-9 shadow">
    @if (Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif
        <div class="content">
            <div class="row">
                <div class="text-end mt-2">
                    <a href="{{ route('category.add') }}" class="btn btn-dark">
                        <h5 class="mt-2">
                            <i class="fa-solid fa-plus"></i>
                            Add Category
                        </h5>
                    </a>
                    <a href="{{ route('category.post') }}" class="btn btn-dark">
                        <h5 class="mt-2">
                            <i class="fa-solid fa-plus"></i>
                            Add Category Posts
                        </h5>
                    </a>
                </div>
                <div class="col-sm-12 mt-2 mb-3">
                    <table class="table table-responsive display table-bordered">
                        <thead class="text-light bg-dark">
                            <tr>
                                <th class="text-center">SN.</th>
                                <th class="text-center">CATEGORY</th>
                                <th class="text-center">Slug URL</th>
                                <th class="text-center">Display</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $data)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $data->name }}</td>
                                    <td class="text-center">{{ $data->slug_url }}</td>
                                    @if ($data->display_status == 1)
                                        <td class="text-center"><a class="btn btn-success">Yes</a></td>
                                    @else
                                        <td class="text-center"><a class="btn btn-danger">No</a></td>
                                    @endif
                                    <td class="text-center">
                                        <a href="{{ route('categories.edit', $data->id) }}" class="btn border-0 shadow-none">
                                            <i class="fa-solid fa-user-pen text-success fs-3"></i>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('categories.destroy', $data->id) }}" method="post">
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
            </div>
        </div>
    </div>
@endsection
