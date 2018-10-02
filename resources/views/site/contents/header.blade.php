<!-- Navigation -->
<header id="headerJs">
    <nav class="navbar-vedatexa navbar navbar-expand-lg  fixed-top text-uppercase" data-toggle="affix" id="mainNav">


            <a class="navbar-brand js-scroll-trigger" @if(Request::is('/'))href="#page-top" @else href="{{url('/')}}" @endif>
                <img src="{{url('site/img/logo-veda-normal.png')}}" alt="logo" id="logo-header" class="hide-logo"/>
                <img src="{{url('site/img/veda-logo-res.png')}}" alt="logo" id="logo-header" class="show-logo-res"/>
            </a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link  px-0 px-lg-3" href="#">Empresa</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link  px-0 px-lg-3 js-scroll-trigger"   href="#portfolio">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contato">Portfólio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contato">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contato">Contato</a>
                    </li>

                </ul>
            </div>
            <div class="social-area">
                <div class="facebook-header social-interno">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </div>
                <div class="instagram-header social-interno">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>

    </nav>
</header>
<div class="arrow">
    <i class="fa fa-angle-down" aria-hidden="true"></i>
</div>
<div class="clearfix"></div>