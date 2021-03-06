<div class="container">
    <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Sobre</h2>
                    <p>Desenvolvedor PHP e C#, estudante de Análise e Desenvolvimento de Sistemas e doutor em piadas e memes ruins.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                    <li class="ftco-animate"><a href="{{ route('social.github') }}" id="gtm-social-github" target="_blank" rel="noreferrer noopener"><span class="icon-github"></span></a></li>
                    <li class="ftco-animate"><a href="{{ route('social.twitter') }}" id="gtm-social-twitter" target="_blank" rel="noreferrer noopener"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="{{ route('social.whatsapp') }}" id="gtm-social-whatsapp" target="_blank" rel="noreferrer noopener"><span class="icon-whatsapp"></span></a></li>
                    <li class="ftco-animate"><a href="{{ route('social.telegram') }}" id="gtm-social-telegram" target="_blank" rel="noreferrer noopener"><span class="icon-telegram"></span></a></li>
                    <li class="ftco-animate"><a href="{{ route('social.instagram') }}" id="gtm-social-instagram" target="_blank" rel="noreferrer noopener"><span class="icon-instagram"></span></a></li>
                    <li class="ftco-animate"><a href="{{ route('social.youtube') }}" id="gtm-social-youtube" target="_blank" rel="noreferrer noopener"><span class="icon-youtube"></span></a></li>
                    <li class="ftco-animate"><a href="{{ route('social.wordpress') }}" id="gtm-social-wordpress" target="_blank" rel="noreferrer noopener"><span class="icon-wordpress"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                    <li><a href="{{ route('index')}}#home-section" id="gtm-navbar-home"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                    <li><a href="{{ route('index')}}#about-section" id="gtm-navbar-about"><span class="icon-long-arrow-right mr-2"></span>Sobre</a></li>
                    <!--li><a href="{{ route('index')}}#services-section" id="gtm-navbar-services"><span class="icon-long-arrow-right mr-2"></span>Serviços</a></li>
                    <li><a href="{{ route('index')}}#projects-section" id="gtm-navbar-projects"><span class="icon-long-arrow-right mr-2"></span>Projetos</a></li-->
                    <li><a href="{{ route('index')}}#contact-section" id="gtm-navbar-contact"><span class="icon-long-arrow-right mr-2"></span>Contato</a></li>
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
                        <li><a href="{{ route('social.whatsapp') }}" id="gtm-telephone-link" target="_blank" rel="noreferrer noopener"><span class="icon icon-whatsapp"></span><span class="text">(13) 99737-5760 (WhatsApp)</span></a></li>
                        <li><a href="mailto:leo@leocarvalho.dev" id="gtm-email-link" target="_blank" rel="noreferrer noopener"><span class="icon icon-envelope"></span><span class="text"> leo@leocarvalho.dev</span></a></li>
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

        <p>
    Copyright &copy;{{ \Carbon\Carbon::parse($date->getTimestamp())->format('Y')}} Todos os direitos reservados |
    <a role="link" href="https://blog.leocarvalho.dev/termos.html" id="gtm-footer-tos" target="_blank" rel="noreferrer noopener">Termos de uso</a> | <a role="link" href="https://blog.leocarvalho.dev/privacy-policy.html" id="gtm-footer-tos" target="_blank" rel="noreferrer noopener">Política de Privacidade</a>
    </p>
        </div>
    </div>
</div>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg>
</div>
