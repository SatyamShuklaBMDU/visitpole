@extends('ui_layouts.master')
@section('content')
<div class="container-fluid">
    <div class="col-md-1 m-auto mb-2 ">
        <img src="{{ asset('assets/images/support.png')}} " class="text-center m-auto photomain mx-auto " alt="">
    </div>
        <div class="text-center fs-4">
            <h3 class="fs-1 fw-bold">
                Contact Us
            </h3>
        </div>

        <div class="row ">
            <div class="col-md-6 mt-5">
                <img src="{{ asset('assets/images/contact.jpg') }}" alt="" class="photomain">
            </div>
            <div class="col-md-6 mt-3">
                <h3>Send Us A Message</h3>
                <p>Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.
                    Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc</p>
                <ul class="list-unstyled">
                    <small class="p-2 text-secondary"><i class="fas fa-phone-alt"
                            style="color:#003366;"></i>+917599490885</small>

                    <li><i class="fas fa-envelope-open-text" style="color:#003366;"></i><small
                            class="p-2 text-secondary"> info@digitalutilization.com</small></li>

                </ul>
                <div class="row justify-content-center mt-4">
                    <div class="col-md-8">
                        <form action="{{ route('contact.store') }}" method="post" class="needs-validation" novalidate>
                            @csrf <!-- CSRF protection -->
                            <div class="mb-3">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name*" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email*" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control @error('subject') is-invalid @enderror " placeholder="Subject" name="subject" value="{{ old('subject') }}">
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control @error('message') is-invalid @enderror " placeholder="Your Message" name="message">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 text-center">
                                <input type="submit" name="submit" value="Submit" class="btn btn-lg text-white" style="background-color:#003366;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 mb-4">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.3530629057773!2d77.37910231414419!3d28.619178691437998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce59606fbdccd%3A0x1ad78a9dde2deff4!2sBM%20Digital%20Utilization%20-%20Digital%20Marketing%20Services!5e0!3m2!1sen!2sin!4v1641626852330!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>
    </div>
    </div> 
{{-- <div class="col-md-6 border p-4">
    <div class="row mt-4 newscontent">
        <div class="col-md-6 mainnewsphoto">
            <div class="photo-container" style="margin-left:0px; width:210%">
                <h2 class="description mobileheading"
                    style="color:black; font-family: Georgia, serif;">
                    Punjab and Haryana HC stays WFI polls till further orders </h2>

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
@endsection
{{-- @section('lastRow') --}}
{{-- @include('ui_layouts.rightSide') --}}
{{-- @endsection --}}