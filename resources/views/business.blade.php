@extends('ui_layouts.master')
@section('firstRow')
    @include('ui_layouts.news')
@endsection
@section('content')
    {{-- <div class="col-md-6 border p-4">
    <div class="row mt-4 newscontent">
        <div class="col-md-6 mainnewsphoto">
            <div class="photo-container" style="margin-left:0px; width:210%">
                <h2 class="description mobileheading"
                    style="color:black; font-family: Georgia, serif;">
                    Punjab and Haryana HC stays WFI polls till further orders</h2>

                <img src="visitpole.com/upload/../../upload/download (2).jpg" alt="Photo"
                    class="photomainnews photo w-100 my-2">
                <i class="mainewsphoto" style="color:black; font-family: Georgia, serif;">
                    <hr>
                    The order came following a petition filed by the HWA, challenging the move to allow
                    Haryana Amateur Wrestling Association to cast votes in the WFI polls.
                </i>
                <hr>
                <img src="visitpole.com/upload/../../upload/download (3).jpg" alt="Photo"
                    class="photomainnews photo w-100 my-2">
                <h6 class=" mainewsphoto description mobileheading"
                    style="font-family: cursive; line-height: 2;">
                    The Punjab and Haryana High Court on Friday stayed the much-anticipated Wrestling
                    Federation of India (WFI) elections slated for Saturday till further orders
                    following a petition filed by the Haryana Wrestling Association (HWA).

                    The order came following a petition filed by the HWA, challenging the move to allow
                    Haryana Amateur Wrestling Association to cast votes in the WFI polls.
                    Advocate Ravinder Malik, representing Haryana Wrestling Association which is headed
                    by Member of Parliament Deepinder Hooda, said the HWA is a registered society in the
                    state and is affiliated to the WFI. </h6>
            </div>
        </div>
        <hr>
    </div>
</div> --}}
    <div class="col-md-6 border p-4"> <!-- start 2nd column -->

        <div class="row mt-4">
            <!-- inner row1 start -->
            @foreach ($businesses as $item )
            <div class="col-md-6">
                <a href="postsport?id=16"><img
                        src="{{ asset($item->image) }}"
                        alt="" class="photomiddlepart"></a>
            </div>
            <div class="col-md-6">
                <a href="postsport?id=16" class="text-decoration-none text-dark">
                    <h3 class="fw-bold" style="fontfont-family: Georgia, serif;">{{$item->short_content}}</h3>
                </a>
                <small><a href="#" class="text-decoration-none text-secondary">
                        {{ $item->created_at }} </a></small>
                <p class="pt-2 mobileheading" style="font-family: cursive;">
                    {{$item->long_content}} </p>
                <small style="margin-left:240px;">
                    {{ $item->author }} </small>
            </div>
            <hr>
            @endforeach
            {{-- <div class="col-md-6">
                <a href="postsport?id=15"><img src="visitpole.com/upload/../../upload/download (6).jpg" alt=""
                        class="photomiddlepart"></a>
            </div>
            <div class="col-md-6">

                <a href="postsport?id=15" class="text-decoration-none text-dark">
                    <h3 class="fw-bold" style="fontfont-family: Georgia, serif;">
                        Chandrayaan-3 inches closer to the Moon! India’s ambitious third Moon mission’s spacecraft gears up
                    </h3>
                </a>
                <small><a href="#" class="text-decoration-none text-secondary">
                        2023-08-16 00:00:00 </a></small>
                <p class="pt-2 mobileheading" style="font-family: cursive;">
                    Next, the separation of the Propulsion Module and the Lander Module has been planned for Thursday,
                    August 17. </p>
                <small style="margin-left:240px;">
                    vivek </small>
            </div>
            <hr>
            <div class="col-md-6">
                <a href="postsport?id=13"><img src="visitpole.com/upload/../../upload/gettyimages-1237814608-612x612.jpg"
                        alt="" class="photomiddlepart"></a>
            </div>
            <div class="col-md-6">

                <a href="postsport?id=13" class="text-decoration-none text-dark">
                    <h3 class="fw-bold" style="fontfont-family: Georgia, serif;">
                        Punjab CM Mann to inaugurate 76 Aam Aadmi Clinics in Sangrur on Aug 14 </h3>
                </a>
                <small><a href="#" class="text-decoration-none text-secondary">
                        2023-08-12 00:00:00 </a></small>
                <p class="pt-2 mobileheading" style="font-family: cursive;">
                    At present, 583 Aam Aadmi Clinics, including 403 in villages and 180 in cities, are operational in the
                    state, he said </p>
                <small style="margin-left:240px;">
                    vivek </small>
            </div>
            <hr>
            <div class="col-md-6">
                <a href="postsport?id=8"><img src="visitpole.com/upload/../../upload/images.png" alt=""
                        class="photomiddlepart"></a>
            </div>
            <div class="col-md-6">

                <a href="postsport?id=8" class="text-decoration-none text-dark">
                    <h3 class="fw-bold" style="fontfont-family: Georgia, serif;">
                        LIC jumps 5% on 14x profit growth in Q1; stock up 21% in 3 months </h3>
                </a>
                <small><a href="#" class="text-decoration-none text-secondary">
                        2023-08-11 00:00:00 </a></small>
                <p class="pt-2 mobileheading" style="font-family: cursive;">
                    LIC jumps 5% on 14x profit growth in Q1; stock up 21% in 3 months </p>
                <small style="margin-left:240px;">
                    vivek </small>
            </div>
            <hr> --}}
        </div> <!--inner row1 end-->
    </div> <!-- end 2nd column --> <!-- end 2nd column -->
@endsection
@section('lastRow')
    @include('ui_layouts.rightSide')
@endsection
