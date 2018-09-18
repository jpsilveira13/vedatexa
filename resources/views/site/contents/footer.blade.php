<footer>
    <div id="footer">
        <div class="container">
            <div class="container-rodape">
                <div class="logo-rodape">
                    <a href="{{url('/')}}">
                        <img src="{{url('site/img/footer-logo.png')}}" class="img-fluid pull-left">
                    </a>
                </div>

                <ul class="list-inline nav-rodape">
                    <li class="list-inline-item">
                        <a @if(Request::is('sobre-nos')) class="active-menu-footer" @endif href="{{url('sobre-nos')}}">Empresa</a>

                    </li>
                    <li class="list-inline-item">
                        <a href="#">Porfólio</a>

                    </li>
                    <li class="list-inline-item">
                        <a href="#">Clientes</a>

                    </li>
                    <li class="list-inline-item">
                        <a href="#">Contato</a>

                    </li>
                </ul>

            </div>
        </div>
    </div>
    <div class="footer-final text-center">
        <p>Todos os direitos reservados ©  .  GCE/SA Engenharia</p>
    </div>
</footer>