@extends('ui_layouts.master')
<title>{{ $bus->meta_title }}</title>
<meta name="description" content="{{ $bus->meta_desc }}">
<meta name="keywords" content="{{ $bus->meta_key }}">
@section('firstRow')
    @include('ui_layouts.news')
@endsection
@section('content')
    <div class="col-md-6 border p-4">
        <div class="row mt-4 newscontent">
            <!-- inner row1 start -->
            <div class="col-md-6 mainnewsphoto">
                <div class="photo-container" style="margin-left:0px; width:210%">
                    <h2 class="description mobileheading" style="color:black; font-family: Georgia, serif;">
                        {{ $bus->heading }} </h2>

                    <img src="{{ asset($bus->image) }}" alt="Photo"
                        alt="Photo" class="photomainnews photo w-100 my-2">
                    <i class="mainewsphoto" style="color:black; font-family: Georgia, serif;">
                        <hr>
                        {{ $bus->short_content }}
                    </i>
                    <hr>
                    <img src="{{ asset($bus->image1) }}" alt="Photo"
                        class="photomainnews photo w-100 my-2">
                    <h6 class=" mainewsphoto description mobileheading" style="font-family: cursive; line-height: 2;">
                        {!! $bus->long_content !!} </h6>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('lastRow')
    @include('ui_layouts.rightSide')
@endsection
