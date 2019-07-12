<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark rounded">
    <a class="navbar-brand" href="{{ route('index') }}">
        <i class="fa fa-terminal">
        </i>
        Léo Carvalho
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item @if($current=='home') active @endif ">
                <a class="nav-link" href="{{ route('index') }}">
                    <i class="fa fa-home"></i>
                    Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item @if($current=='portfolio') active @endif ">
                <a class="nav-link" href="{{ route('portfolio') }}">
                    <i class="fa fa-atlas">
                    </i>
                    Portifólio
                </a>
            </li>
            <li class="nav-item dropdown @if($current=='resume') active @endif ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-file">
                    </i>
                    Currículo
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('resume.bio') }}">Mini-bio</a>
                    <a class="dropdown-item" href="{{ route('resume.professional') }}">Histórico Profissional</a>
                    <a class="dropdown-item" href="{{ route('resume.academic') }}">Formação Acadêmica</a>
                    <a class="dropdown-item" href="{{ route('resume.hobbies') }}">Projetos e hobbies</a>
                    <a class="dropdown-item" href="{{ route('resume.skills') }}">Conhecimentos e habilidades</a>
                    <a class="dropdown-item" href="{{ route('resume.courses') }}">Cursos</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item @if($current=='contact') active @endif ">
                <a class="nav-link" href="{{ route('contact.index') }}">
                    <i class="fa fa-envelope">
                    </i>
                    Contato
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('social.blog') }}" target="_blank">
                    <i class="fa fa-blog">
                    </i>
                    Blog
                </a>
            </li>
        </ul>
    </div>
</nav>