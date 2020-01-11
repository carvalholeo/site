<!--nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark rounded">
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
                </a>
            </li>
            <li class="nav-item @if($current=='portfolio') active @endif">
                <a class="nav-link  disabled" href="{{ route('portfolio') }}" aria-disabled="true">
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
                    <a class="dropdown-item" href="{{ route('resume.professional') }}" aria-disabled="true">Histórico Profissional</a>
                    <a class="dropdown-item" href="{{ route('resume.academic') }}">Formação Acadêmica</a>
                    <a class="dropdown-item disabled" href="{{ route('resume.hobbies') }}" aria-disabled="true">Projetos e hobbies</a>
                    <a class="dropdown-item disabled" href="{{ route('resume.skills') }}" aria-disabled="true">Conhecimentos e habilidades</a>
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
</nav-->

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index') }}"><span>L</span>éo</a>
      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav ml-auto">
          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
          <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
          <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
          <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
          <li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li>
          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
