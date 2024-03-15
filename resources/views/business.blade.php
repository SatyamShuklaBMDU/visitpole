@extends('ui_layouts.master')
<title>{{ $cate->cat_meta_title }}</title>
<meta name="description" content="{{ $cate->cat_meta_desc }}">
<meta name="keywords" content="{{ $cate->cat_meta_key }}">
@section('firstRow')
    @include('ui_layouts.news')
@endsection
@section('content')
    <div class="col-md-6 border p-4"> <!-- start 2nd column -->
        <div class="row mt-4">
            <!-- inner row1 start -->
            {{-- @dd($businesses) --}}
            @foreach ($businesses as $item)
                @if ($cate->id == $item->category_id)
                    <div class="col-md-6">
                        <a href="{{ url('show/' . $item->slug_url) }}"><img src="{{ asset($item->image) }}" alt=""
                                class="photomiddlepart"></a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ url('show/' . $item->slug_url) }}" class="text-decoration-none text-dark">
                            <h3 class="fw-bold" style="fontfont-family: Georgia, serif;">{{ $item->short_content }}</h3>
                        </a>
                        <small><a href="{{ url('show/' . $item->slug_url) }}" class="text-decoration-none text-secondary">
                                {{ $item->created_at }} </a></small>
                        <p class="pt-2 mobileheading" style="font-family: cursive;">
                            {{-- {!! $item->long_content !!} </p> --}}
                            <small style="margin-left:240px;">
                                {{ $item->author }} </small>
                    </div>
                    <hr>
                @endif
            @endforeach
        </div> <!--inner row1 end-->
    </div> <!-- end 2nd column --> <!-- end 2nd column -->
@endsection
@section('lastRow')
    @include('ui_layouts.rightSide')
@endsection
