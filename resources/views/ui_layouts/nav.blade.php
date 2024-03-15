<div class="topnav topnav1 navbars laptopnavbar" id="myTopnav">
    <div class="container-fluid  navbars">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <a href="{{ url('/') }}" class="active align-item-center home">Home</a>
                @if (isset($category) && count($category) > 0)
                    @foreach ($category as $cat)
                        <a href="{{ url('business/'.$cat->slug_url)}}" class="active">{{ $cat->name }}</a>
                    @endforeach
                @else
                    {{-- <p>No categories found.</p> --}}
                @endif
                <a href="{{ url('about') }}" class="active">About Us</a>
                <a href="{{ url('contact') }}" class="active">Contact Us</a>
            </div>
        </div>
        <div class="icn"><a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i></div>
        </a>
    </div>
    <!-- End navbar -->
</div>