<x-header />

<body class="font-montserrat">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
        </div>
    </div>

    <div id="main_content">

        <!-- App Left-side-menu start -->
        @include('includes.menu.app_menu')
        <!-- App Left-side-menu end -->

        <div class="page">
            <!-- top nav start -->
            @include('includes.nav.nav_menu')
            <!-- top nav end -->

            <div class="section-body mt-3">
                <div class="container-fluid">
                    <!-- box menu start -->
                    @include('includes.menu.box_menu')
                    <!-- box menu end -->
                    <!-- sales overview start -->
                    <div class="row clearfix row-deck">
                        @foreach($stafs as $key=> $staf)
                        <div class="col-lg-4 col-md-4 mb-2">
                            <div id="staffAvatar" class="card">
                                <div class="card-header text-center">
                                    <h3 class="card-title">{{$staf->name}}</h3>

                                </div>
                                <div class="card-body text-center">
                                    <div class="col-auto d-flex justify-content-center">
                                        <img class="img-fluid img-rounded-circle" src="{{asset('')}}{{$staf->photo}}"
                                            alt="">
                                        @if(Auth::user()->user_type == 1)
                                        <div class="photo-edit-btn">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="fa-solid fa-camera"></i>
                                            </a>
                                        </div>
                                        @else
                                        @endif
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="flex-fill"><strong>{{$staf->usertype->type}}</strong></div>
                                    <div class="flex-fill">
                                        <i class="icon fa-solid fa-envelope"></i>
                                        {{$staf->email}}
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6 d-flex justify-content-start">
                                        <i class="icon fa-solid fa-star"></i>
                                        @if(!empty($staf->staffs))
                                        {{$staf->staffs->job_role}}
                                        @else
                                        {{'NA'}}
                                        @endif

                                    </div>
                                    <div class="col-md-6 d-flex justify-content-end">
                                        <i class="icon fa-solid fa-phone"></i> &nbsp;
                                        01857797647
                                    </div>
                                </div>
                                <div class="card-header d-flex justify-content-center p-0">
                                    <div class="row p-2">
                                        <div class="col text-center mt-2">
                                            <i class="icon fa-solid fa-clock"></i>
                                            8:00 AM to 4:00 PM
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- sales overview end -->

                </div>
            </div>

            <div class="section-body">
                <!-- body footer start -->
                @include('templates.footer.body_footer')
                <!-- body footer end -->
            </div>
        </div>
    </div>

    <x-footer />