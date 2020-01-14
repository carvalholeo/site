<div class="container">
    <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Sobre</h2>
                    <p>Desenvolvedor de sites e sistemas, estudante de Análise e Desenvolvimento de Sistemas, freelancer em suporte técnico e doutor em piadas e memes ruins.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                    <li class="ftco-animate"><a href="{{ route('social.github') }}"><span class="icon-github"></span></a></li>
                    <li class="ftco-animate"><a href="{{ route('social.twitter') }}"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="{{ route('social.whatsapp') }}"><span class="icon-whatsapp"></span></a></li>
                    <li class="ftco-animate"><a href="{{ route('social.telegram') }}"><span class="icon-telegram"></span></a></li>
                    <li class="ftco-animate"><a href="{{ route('social.instagram') }}"><span class="icon-instagram"></span></a></li>
                    <li class="ftco-animate"><a href="{{ route('social.youtube') }}"><span class="icon-youtube"></span></a></li>
                    <li class="ftco-animate"><a href="{{ route('social.blog') }}"><span class="icon-medium"></span></a></li>
                    <li class="ftco-animate"><a href="{{ route('social.wordpress') }}"><span class="icon-wordpress"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                    <li><a href="{{ route('index')}}/#home-section"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                    <li><a href="{{ route('index')}}/#about-section"><span class="icon-long-arrow-right mr-2"></span>Sobre</a></li>
                    <!--li><a href="{{ route('index')}}/#services-section"><span class="icon-long-arrow-right mr-2"></span>Serviços</a></li>
                    <li><a href="{{ route('index')}}/#projects-section"><span class="icon-long-arrow-right mr-2"></span>Projetos</a></li-->
                    <li><a href="{{ route('index')}}/#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contato</a></li>
                    </ul>
                </div>
            </div>
            <!--div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                    <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Design</a></li>
                    <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
                    <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Business Strategy</a></li>
                    <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Data Analysis</a></li>
                    <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Graphic Design</a></li>
                    </ul>
                </div>
            </div-->
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Vamos conversar?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                        <!--li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li-->
                        <li><a href="{{ route('social.whatsapp') }}"><span class="icon icon-whatsapp"></span><span class="text">(13) 99737-5760 (WhatsApp)</span></a></li>
                        <li><a href="mailto:leonardo.cscarvalho@outlook.com.br"><span class="icon icon-envelope"></span><span class="text"> leonardo.cscarvalho@outlook.com.br</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">

@php
$date = new DateTime();
@endphp

        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;{{ \Carbon\Carbon::parse($date->getTimestamp())->format('Y')}} Todos os direitos reservados | Este template é feito com <i class="icon-heart color-danger" aria-hidden="true"></i> por <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
    </div>
</div>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg>
</div>
