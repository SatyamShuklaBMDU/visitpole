@extends('admin.layout.master')
@section('content-area')
<div class="col-sm-9  ">
    <div class="card shadow ">
        <a href="{{route('business.post')}}" class="btn btn-dark w-25">
            <h5 class="mt-2 text-center">
                <i class="fa-solid fa-plus"></i>
                Add Business Post
            </h5>
        </a>
        <br>
        <a href="{{route('carrer.post')}}" class="btn btn-dark w-25">
            <h5 class="mt-2">
                <i class="fa-solid fa-plus"></i>
                Add Career Post
            </h5>
        </a>
        <br>
        <a href="{{route('sport.post')}}" class="btn btn-dark w-25 ">
            <h5 class="mt-2 w-20 ">
                <i class="fa-solid fa-plus"></i>
                Add Sports Post
            </h5>
        </a>
        <br>
        <a href="{{route('life.post')}}" class="btn btn-dark w-25">
            <h5 class="mt-2">
                <i class="fa-solid fa-plus"></i>
                Add Life Style Post
            </h5>
        </a>
        <br>
        <a href="{{route('health.post')}}" class="btn btn-dark w-25 text-center">
            <h5 class="mt-2">
                <i class="fa-solid fa-plus"></i>
                Add Health Post
            </h5>
        </a>
        <br>
        <a href="{{route('economy.post')}}" class="btn btn-dark w-25 text-center">
            <h5 class="mt-2">
                <i class="fa-solid fa-plus"></i>
                Add economy Post
            </h5>
        </a>
        <br>
    </div>
</div>
@endsection