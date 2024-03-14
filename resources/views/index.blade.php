@extends('ui_layouts.master')
@section('firstRow')
    @include('ui_layouts.news')
@endsection
@section('content')
    <!-- mid column start-->
    <div class="col-md-4 border  mx-4">
        <div class="row widthinmobile">
            <div class="col-md-6">
                <a href="postsport?id=12" class="text-decoration-none text-dark"><img
                        src="{{ asset('assets/images/download (2).jpg') }}" alt="" class="photomain w-100">
                    <small class="fw-bold mobileheading" style="color:#c20017;">

                    </small>
                    <p class="mt-2 mobileheading">Punjab and Haryana HC stays WFI polls till further orders</p>
                </a>
                <small class="pt-3" style="color:#c20017;">

                </small>
                <small class="text-secondary">
                    2023-08-11 00:00:00 </small>
            </div>
            <div class="col-md-6">
                <a href="postsport?id=4" class="text-decoration-none text-dark"><img
                        src="{{ asset('assets/images/Indian_Hockey_team.jpg') }}" alt=""
                        class="photomain w-100">
                    <small class="fw-bold mobileheading" style="color:#c20017;">

                    </small>
                    <p class="mt-2 mobileheading">Indian hockey’s new style: Half-court press to leverage counter attacks
                    </p>
                </a>
                <small class="pt-3" style="color:#c20017;">

                </small>
                <small class="text-secondary">
                    2023-08-11 00:00:00 </small>
            </div>
            <div class="col-md-6">
                <a href="postsport?id=3" class="text-decoration-none text-dark"><img
                        src="{{ asset('assets/images/images.jpg') }}" alt="" class="photomain w-100">
                    <small class="fw-bold mobileheading" style="color:#c20017;">

                    </small>
                    <p class="mt-2 mobileheading">Rohit Sharma admits No. 4 slot in ODIs issue for India ahead of Asia Cup
                        and World Cup</p>
                </a>
                <small class="pt-3" style="color:#c20017;">

                </small>
                <small class="text-secondary">
                    2023-08-11 00:00:00 </small>
            </div>
            <div class="col-md-6">
                <a href="postsport?id=7" class="text-decoration-none text-dark"><img
                        src="visitpole.com/upload/../../upload/stock-photo-mississauga-on-canada-june-close-up-of-hcl-sign-on-the-building-in-mississauga-on-1990369544.jpg"
                        alt="" class="photomain w-100">
                    <small class="fw-bold mobileheading" style="color:#c20017;">
                    </small>
                    <p class="mt-2 mobileheading">HCL Tech surges 4% on inking $2.1 billion deal with Verizon Communications
                    </p>
                </a>
                <small class="pt-3" style="color:#c20017;">
                </small>
                <small class="text-secondary">
                    2023-08-11 00:00:00 </small>
            </div>
            <div class="col-md-6">
                <a href="postsport?id=16" class="text-decoration-none text-dark"><img
                        src="{{ asset('assets/images/You-must-know-these-Hidden-Facts-about-an-HDFC-Gold-Loan.png') }}"
                        alt="" class="photomain w-100">
                    <small class="fw-bold mobileheading" style="color:#c20017;">
                    </small>
                    <p class="mt-2 mobileheading">Permal</p>
                </a>
                <small class="pt-3" style="color:#c20017;">

                </small>
                <small class="text-secondary">
                    2023-09-15 00:00:00 </small>
            </div>
            <div class="col-md-6">
                <a href="postsport?id=15" class="text-decoration-none text-dark"><img
                        src="{{ asset('assets/images/download (6).jpg') }}" alt="" class="photomain w-100">
                    <small class="fw-bold mobileheading" style="color:#c20017;">

                    </small>
                    <p class="mt-2 mobileheading">Chandrayaan-3 inches closer to the Moon! India’s ambitious third Moon
                        mission’s spacecraft gears up </p>
                </a>
                <small class="pt-3" style="color:#c20017;">

                </small>
                <small class="text-secondary">
                    2023-08-16 00:00:00 </small>
            </div>
            <div class="col-md-6">
                <a href="postsport?id=13" class="text-decoration-none text-dark"><img
                        src="{{ asset('assets/images/gettyimages-1237814608-612x612.jpg') }}" alt=""
                        class="photomain w-100">
                    <small class="fw-bold mobileheading" style="color:#c20017;">
                    </small>
                    <p class="mt-2 mobileheading">Punjab CM Mann to inaugurate 76 Aam Aadmi Clinics in Sangrur on Aug 14</p>
                </a>
                <small class="pt-3" style="color:#c20017;">
                </small>
                <small class="text-secondary">
                    2023-08-12 00:00:00 </small>
            </div>
            <div class="col-md-6">
                <a href="postsport?id=8" class="text-decoration-none text-dark"><img
                        src="{{ asset('assets/images/images.png') }}" alt="" class="photomain w-100">
                    <small class="fw-bold mobileheading" style="color:#c20017;">
                    </small>
                    <p class="mt-2 mobileheading">LIC jumps 5% on 14x profit growth in Q1; stock up 21% in 3 months</p>
                </a>
                <small class="pt-3" style="color:#c20017;">
                </small>
                <small class="text-secondary">
                    2023-08-11 00:00:00 </small>
            </div>
        </div>
    </div>
@endsection
@section('lastRow')
    <div class="col-md-4 border  pt-3 wheatherclass">
        <!----------------------start weathre status------------------------------->
        <div class="border row  col-md-10 p-3 wheatherclass2 ">
            <!-- start 2nd row  -->
            <h4 class=" wh-status">
                Weather Status
            </h4>
            <h3>
                New Delhi </h3>
            <div class="row text-center border-top border-bottom bg-white py-3">
                <div class="col-md-3">
                    <div>
                        <i class="fas fa-tint " style="font-size:16px;"></i>
                        <small>
                            32%
                        </small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div> <i class="fas fa-wind"></i><small>
                            3.09km/h
                        </small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div> <i class="fas fa-cloud"></i><small>
                            40%
                        </small>
                    </div>
                </div>
            </div>
            <div class="row mt-3 bg-white pb-4">
                <div class="col-md-4">
                    <p class="my-2 text-center "> <img class="photomain" src="http://openweathermap.org/img/w/50d.png"
                            style="width: 100%;">
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="fw-normal my-2 pt-2 temp mobileheading" style="font-size: 20px;"><b>
                            21.09&deg;C
                        </b>
                    </p>
                </div>
                <h5 class="ps-5 ms-4">
                    Wednesday 4:51 pm </h5>
            </div>
            <div class="row mt-3 bg-white py-3">
                <h5 class="ps-5 ms-4">
                    6th March, 2024 </h5>
            </div>
        </div>
        <div class="row p-2 mt-3 m-1 ">

            <div class="row mt-3 ">
            </div>
        </div>
        <div class="row mt-3 ">
            <div class="col">
                <div class="prmtbsn">
                    <h3 class="p-5 pro"><a href="#" class="text-decoration-none text-capitalize text-white">promote
                            Your <br>
                            Business!</a>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row mt-3 border  m-1 bg-white">
            <div class="col">
                @if (Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif
                <div class="mt-4" id="subscribe">
                    <h5>Get the best of Soledad Modern News delivered to your inbox</h5>
                    <p>Subscribe our newsletter for latest world news. Let's stay updated!</p>
                    <form action="{{route('subscription.store')}}" method="POST" id="subscribeform">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="sname" placeholder="Name">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="email" class="form-control" name="semail" placeholder="Email">
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="submit" class="form-control btn-sub" value="SUBSCRIBE">
                        </div>
                    </form>
                    <h3></h3>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End 3rd column-->
@endsection
