@extends('site.index')
@section('header')
    @include('site.contents.header')
@endsection
@section('site-css')
    <link href="{{secure_asset('site/css/sobre.css')}}" rel="stylesheet" />
@endsection
@section('content')
    <div class="area-bg-sobre">
        <div class="container">
            <div class="texto-box-sobre">
                <h1 class="fontTitulo">Sobre Nós</h1>
                <p>
                    A GCE atua no ramo da construção civil há mais de 40 anos. Com uma expertise incontestável na construção de obras privadas, obras públicas e obras de TI(Tecnologia da Informação), além
                    de uma vasta experiência em construção de empreendimentos habitacionais e residenciais de alto padrão, somos uma empresa ética, sólida, experiente
                    competente e totalmente comprometida com qualidade e melhoria contínua.
                </p>
            </div>
        </div>

    </div>
    <section class="area-bg-footer bg-cinza">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="box-sobre-all">
                        <div class="box-sobre-img">
                            <img src="{{url('site/img/sobre1.png')}}" class="img-fluid" />
                        </div>
                        <div class="box-sobre-texto">
                            <p>
                                A GCE  é uma empresa com mais de quatro décadas de experiência e acumula mais de 2 milhões de metros quadrados de construções em diversos estados do Brasil
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="box-sobre-all">
                        <div class="box-sobre-img">
                            <img src="{{url('site/img/sobre3.png')}}" class="img-fluid" />
                        </div>
                        <div class="box-sobre-texto">
                            <p>
                                Somos uma empresa que busca a qualidade de nossas obras com um rigoroso planejamento e treinamento de nossas equipes formadas por profissionais altamente capacitados.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="box-sobre-all">
                        <div class="box-sobre-img">
                            <img src="{{url('site/img/sobre2.png')}}" class="img-fluid" />
                        </div>
                        <div class="box-sobre-texto">
                            <p>
                                Assim, seguramos um produto final sustentável e de qualidade, atestado pelas principais certificações do setor, como ISO 9001:2008, PBQP-h Nível A, e PBQP-h SIAC Nível A
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-valores-sobre">
        <div class="container">
            <div class="box-valores-all">
                <div class="box-valores">
                    <h1 class="fontTitulo">Missão</h1>
                    <p>Atuar na indústria da construção civil de forma sustentável, gerando valor para nossos clientes, acionistas, colaboradores, parceiros e a sociedade</p>
                </div>
                <div class="box-valores">
                    <h1 class="fontTitulo">Visão</h1>
                    <p>Ser uma empresa referência em qualidade e inovação na indústria da construção civil</p>
                </div>
                <div class="box-valores">
                    <h1 class="fontTitulo">Valores</h1>
                    <ul>
                        <li>Qualidade, transparência e honestidade</li>
                        <li>Responsabilidade e compromisso com a condução sustentável dos negócios</li>
                        <li>Respeito mútuo entre a empresa, clientes, colaboradores, parceiros e a comunidade</li>
                        <li>Atenção à Saúde e Segurança no ambiente de trabalho </li>
                        <li>Inovação como fator de diferenciação na busca pela melhoria contínua de processos e produtos</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-cinza box-politica-qualidade">
        <div class="container bg-branco box-shadow-port box-qualidade">
            <h1 class="fontTitulo text-center">Política de Qualidade</h1>
            <p class="text-center">
                A GCE S/A desenvolve as suas atividades no segmento da construção civil. Se compromete a realizar seus serviços com competência, qualidade, atendendo os requisitos
                aplicáveis ao serviços e foco na melhoria contínua.
            </p>
        </div>
    </section>
    <section class="box-certificados">
        <div class="container">
            <div class="box-certificados-interno">
                <div class="box-certi-images">
                    <img src="{{url('site/img/sobre/iso-9001.jpg')}}" class="img-fluid" />

                </div>
                <div class="box-certi-images">
                    <img src="{{url('site/img/sobre/pbpq.jpg')}}" class="img-fluid" />
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="container-normal" class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <a href="javascript:history.go(-1)">
                        <img src="{{url('site/img/sobre/voltar.png')}}" class="img-fluid" />
                        <span class="voltar text-uppercase">Voltar</span>
                    </a>
                </div>
            </div>
        </div>


    </section>

    <!-- include footer -->
    @include('site.contents.footer')

@endsection