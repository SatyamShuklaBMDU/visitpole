@extends('admin.layout.master')
@section('content-area')
<div class="col-sm-9 shadow">
    <div class="content">
        <div class="row">
            <div class="text-end mt-2">
                <a href="{{route('category.add')}}" class="btn btn-dark">
                    <h5 class="mt-2">
                        <i class="fa-solid fa-plus"></i>
                        Add Category
                    </h5>
                </a>
                <a href="{{route('category.post')}}" class="btn btn-dark">
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
                        <!-- Here would be your PHP-generated content -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection