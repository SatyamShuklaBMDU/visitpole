@extends('ui_layouts.master')
@section('firstRow')
    @include('ui_layouts.news')
@endsection
@section('content')
<div class="col-md-6 border p-4">
    <div class="row mt-4 newscontent">
        <div class="col-md-6 mainnewsphoto">
            <div class="photo-container" style="margin-left:0px; width:210%">
                <h2 class="description mobileheading"
                    style="color:black; font-family: Georgia, serif;">
                    Punjab and Haryana HC stays WFI polls till further orders </h2>

                <img src="{{ asset('assets/images/download (2).jpg') }}" alt="Photo"
                    class="photomainnews photo w-100 my-2">
                <i class="mainewsphoto" style="color:black; font-family: Georgia, serif;">
                    <hr>
                    The order came following a petition filed by the HWA, challenging the move to allow
                    Haryana Amateur Wrestling Association to cast votes in the WFI polls.
                </i>
                <hr>
                <img src="{{ asset('assets/images/download (3).jpg') }}" alt="Photo"
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
</div>
@endsection
@section('lastRow')
@include('ui_layouts.rightSide')
@endsection
