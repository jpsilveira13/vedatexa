<footer>
    <div id="footer">
        <div class="container">
            <div class="container-rodape">
                <ul class="list-inline nav-rodape">
                    <li class="list-inline-item">
                        <a @if(Request::is('sobre-nos')) class="active-menu-footer" @endif href="{{url('sobre-nos')}}">Empresa</a>

                    </li>
                    <li class="list-inline-item">
                        <a href="#">Produtos</a>

                    </li>
                    <li class="list-inline-item">
                        <a href="#">Serviços</a>

                    </li>
                    <li class="list-inline-item">
                        <a href="#">Portfólio</a>

                    </li>
                    <li class="list-inline-item">
                        <a href="#">Blog</a>

                    </li>
                    <li class="list-inline-item">
                        <a href="#">Contato</a>

                    </li>

                </ul>

            </div>
        </div>
    </div>
    <section>
        <div class="container text-center">
            <a href="{{url('/')}}">
                <img src="{{url('site/img/logo-rodape.png')}}" class="img-fluid" />
            </a>
        </div>
    </section>
    <div class="footer-final text-center bg-cinza-rodape">
        <p>Todos os direitos reservados ©</p>
    </div>
</footer>