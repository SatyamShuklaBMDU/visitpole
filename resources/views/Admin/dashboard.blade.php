@extends('admin.layout.master')
@section('content-area')
    <div class="col-sm-9 shadow">
        @if (Session::has('message'))
            <p class="alert alert-success">{{ Session::get('message') }}</p>
        @endif
        <div class="row">
            <div class="col-sm-4 box bg-primary p-5 rounded-3 shadow">
                <a href="category.php" class="text-decoration-none">
                    <h1 class="text-center text-light">
                        {{ $catCount }}
                    </h1>
                    <p class="text-light text-center">
                        <b>Total Categories</b>
                    </p>
                </a>
            </div>
            <div class="col-sm-4 box bg-secondary p-5 rounded-3 shadow">
                <a href="posts/postbusiness.php" class="text-decoration-none text-center">
                    <h1 class="text-center text-light">
                        {{ $bussCount }}
                    </h1>
                    <p class="text-light text-center">
                        <b>Total  Posts</b>
                    </p>
                </a>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-sm-4 box bg-success p-5 rounded-3 shadow">
                <a href="po" class="text-decoration-none text-center">
                    <h1 class="text-center text-light">
                       {{ $mediaCount }}
                    </h1>
                    <p class="text-light text-center">
                        <b>Total Media</b>
                    </p>
                </a>
            </div>
            <div class="col-sm-4 box bg-danger p-5 rounded-3 shadow">
                <a href="posts/posthealth&fitness.php" class="text-decoration-none text-center">
                    <h1 class="text-center text-light">
                        {{ $subCount }}
                    </h1>
                    <p class="text-light text-center">
                        <b>Subscribed Users</b>
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection
