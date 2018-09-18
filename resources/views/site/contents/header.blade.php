<!-- Navigation -->

<nav class="navbar navbar-expand-lg fixed-top text-uppercase" id="mainNav">
    @if(empty(Session::get('locale')))
        <div  class="hide-res seleciona-idioma languageSelect" data-value="pt">
            <img class="img-fluid "  src="{{url('site/img/united-states.svg')}}" />
        </div>
    @elseif(Session::get('locale') == "en")
        <div  class="hide-res seleciona-idioma languageSelect" data-value="pt">
            <img class="img-fluid "  src="{{url('site/img/brazil.svg')}}" />
        </div>
    @elseif(Session::get('locale') == "pt")
        <div  class="hide-res seleciona-idioma languageSelect" data-value="en">
            <img class="img-fluid "  src="{{url('site/img/united-states.svg')}}" />
        </div>
    @endif
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" @if(Request::is('/'))href="#page-top" @else href="{{url('/')}}" @endif><img src="{{url('site/img/logo-header.png')}}" alt="logo" /> </a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link  px-0 px-lg-3 @if(Request::is('sobre-nos')) active-menu @endif" href="{{url('sobre-nos')}}">{{__('header.Empresa')}}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link  px-0 px-lg-3 js-scroll-trigger"   href="#portfolio">{{__('header.Portfolio')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{__('header.Clientes')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contato">{{__('header.Contato')}}</a>
                </li>
                <li>
                    @if(empty(Session::get('locale')))
                        <div  class="hide-res seleciona-idioma hide-no-res  languageSelect" data-value="pt">
                            <img class="img-fluid "  src="{{url('site/img/united-states.svg')}}" />
                        </div>
                    @elseif(Session::get('locale') == "en")
                        <div  class="hide-res seleciona-idioma hide-no-res languageSelect" data-value="pt">
                            <img class="img-fluid "  src="{{url('site/img/brazil.svg')}}" />
                        </div>
                    @elseif(Session::get('locale') == "pt")
                        <div  class="hide-res seleciona-idioma hide-no-res languageSelect" data-value="en">
                            <img class="img-fluid "  src="{{url('site/img/united-states.svg')}}" />
                        </div>
                    @endif
                </li>

            </ul>
        </div>
    </div>
</nav>
