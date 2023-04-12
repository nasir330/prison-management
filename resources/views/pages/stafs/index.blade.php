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
                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">{{$staf->name}}</h3>
                                </div>
                                <div class="card-body text-center">
                                    <div style="width:100px; border-radius:50%; border:1px solid #222; margin:auto 25%;">
                                    <img class="p-2" src="{{asset('Assets/img/male.png')}}" alt="">                                   
                                    </div>
                                    <span>Admin</span>
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