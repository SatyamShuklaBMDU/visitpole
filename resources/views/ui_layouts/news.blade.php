 <div class="showmobile col-md-3 p-4">
     <h4 class="fw-bold text-center">Recent news</h4>
     <div class="row mt-4">
        {{-- @dd($businesses) --}}
             @foreach ($businesses as $data)
             <div class="col-md-6">
                 <a href="{{ url('show/'.$data->slug_url) }}" class="text-decoration-none text-dark"><img src="{{ asset($data->image) }}"
                         alt="" class="photomain img-consistent-size">
                     <p class="mt-2 mobileheading">{{ $data->short_content }} </p>
                 </a>
                 <small class="text-secondary">{{ $data->created_at}}</small>
             </div>
         @endforeach
     </div>
     <div class="row mt-3">
         <div class="col-md-12">
             <div class="leftsidefullimg text-center pt-3">
                 <p class="text-uppercase"><i style="color:#c20017; font-weight:bold;">SOLEDAD <sup
                             style="color:#c20017; ">8</sup></i></p>
                 <h3 class="text-white">220+</h3>
                 <p class="text-uppercase text-white">pre-build website</p>
                 <h5 class="text-white">6885+</h5>
                 <p class="text-capitalize text-white">home page demos</p>
                 <small style="font-size:10px; color:white; font-weight:bold;">300X250 ADS SPACE</small>
             </div>
         </div>
     </div>
     <div class="row mt-3">
         {{-- <h4 class="mb-3 fw-bold">Entertainment</h4> --}}
         <div class="col-md-12">
             <div class="row">
                 <div class="col-md-12">
                     <div class="mt-3">
                         <h3 class="mb-3">Categories</h3>
                         @if (isset($category) && count($category) > 0)
                             @foreach ($category as $cat)
                                 <p>
                                     <i class="fas fa-chevron-right"></i>
                                     <a href="{{ url('business/'.$cat->slug_url)}}"
                                         class="ms-2 text-decoration-none text-dark">
                                         {{ $cat->name }}
                                     </a>
                                 </p>
                                 <hr class="text-secondary">
                             @endforeach
                         @else
                             {{-- <p>No categories found.</p> --}}
                         @endif
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div> <!-- end first column -->
