<link rel="stylesheet" href="{{ asset('css/footer.css') }}">

<div class="card text-center" id="footerMain">
    <div class="card-footer" id="footerText">
        <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item" id="linkedin"><a href="https://www.linkedin.com/in/carvalholeo/"
                    target="_blank"><i class="fab fa-linkedin"></i></a></li>
            <li class="list-inline-item"  id="github"><a href="https://github.com/carvalholeo/" target="_blank"><i
                        class="fab fa-github"></i></a></li>
            <li class="list-inline-item" id="twitter"><a href="https://twitter.com/_carvalho_leo"
                    target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item" id="instagram"><a href="https://instagram.com/carvalho_leo"
                    target="_blank"><i class="fab fa-instagram" id="footerInstagram"></i></a></li>
            <li class="list-inline-item" id="mail"><a href="{{ route('contact.index') }}" target="_blank"><i
                        class="fa fa-envelope"></i></a></li>
        </ul>
        <div class="text-muted">
            <p><u><a href="{{ route('resume.index') }}">Léo Carvalho</a></u> é desenvolvedor de sites e sistemas, com maior conhecimento em
                PHP. Profissionalmente, trabalha como Instrutor de Treinamento.<a class="text-green ml-2"
                    href="https://github.com/carvalholeo/site" target="_blank">Acesse o código fonte no GitHub</a></p>
            </p>
            <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Licença Creative Commons"
                    style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br />Este
            obra está licenciado com uma Licença <a rel="license"
                href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Atribuição-CompartilhaIgual 4.0
                Internacional</a>.
        </div>
    </div>
</div>

@env('developing')

@else
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139872605-1"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'UA-139872605-1');
</script>
@endenv