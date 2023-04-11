<div id="left-sidebar" class="sidebar">
    <div class="row">
        <div class="col">
            <img class="img-fluid" src="{{asset('Assets/img/logo2.png')}}" alt="User Image">
        </div>
        <div class="col d-flex justify-content-end">
            <a href="javascript:void(0)" class="menu_option float-right">
                <i style="font-size:22px;" class="fa-solid fa-bars" data-toggle="tooltip" data-placement="left"
                    title="Grid & List Toggle"></i>
            </a>
        </div>
    </div>
    <nav id="left-sidebar-nav" class="sidebar-nav">
        <ul class="metismenu">
            <li class="g_heading">Manage</li>
            <li class="active">
                <a href="{{route('dashboard')}}">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-users"></i>
                    <span>Customers</span>
                </a>
            </li>

            <li class="g_heading">Services</li>
            <li>
            <a href="#">
                    <i class="fas fa-quote-left"></i>
                    <span>Quotations</span>
                </a>
            </li>
            <li>
            <a href="#">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <span>Invoices</span>
                </a>
            </li>
            <li>
            <a href="#">
                    <i class="fas fa-certificate"></i>
                    <span>Certificates</span>
                </a>
            </li>
            <li>
            <a href="#">
                <i class="fa-brands fa-servicestack"></i>
                    <span>Maintenance/Service</span>
                </a>
            </li>
            <li>
            <a href="#">
                    <i class="fas fa-tools"></i>
                    <span>Boiler Service</span>
                </a>
            </li>
            <li>
            <a href="#">          
                    <i class="fa fa-envelope-open-text"></i>
                    <span>Letterhead</span>
                </a>
            </li>
            <li>
            <a href="#">
                    <i class="fa fa-file"></i>
                    <span>Statement</span>
                </a>
            </li>

            <li class="g_heading">Maintenance</li>
            <li>
                <a href="javascript:void(0)" class="has-arrow arrow-c">
                    <i class="fa fa-trash"></i>
                    <span>Trash</span>
                </a>
                <ul>
                    <li><a href="login.html">Quotations</a></li>
                    <li><a href="register.html">Invoices</a></li>
                    <li><a href="forgot-password.html">Certificates</a></li>
                    <li><a href="404.html">Boiler Service</a></li>
                    <li><a href="500.html">Letterhead</a></li>
                    <li><a href="500.html">Statement</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>