@extends('layout.app', ["current" => "resume"])

@section('title', 'Cursos Extra-curriculares | Léo Carvalho')

<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/timelines.css') }}" />

@section('body')

<div class="container">
    <h4>Cursos Extra-curriculares</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="main-timeline3">
                <div class="timeline">
                    <a href ="https://www.udemy.com/laravelcompleto/" class="timeline-content">
                        <span class="year">2019</span>
                        <h3 class="title">Laravel 5.6 Completo</h3>
                        <h5>Udemy - 29h</h5>
                        <p class="description">
                        O curso abordar os recursos que o Laravel oferece, para me tornar apto a agilizar o desenvolvimento de sites e sistemas.
                        </p>
                    </a>
                </div>

                <div class="timeline">
                    <a href="https://www.udemy.com/git-e-github-ninja/learn/" class="timeline-content">
                        <span class="year">2019</span>
                        <h3 class="title">Git e GitHub Ninja</h3>
                        <h5>Udemy - 9h</h5>
                        <p class="description">
                            O curso explica como o Git e o GitHub funcionam, algumas formas de trabalhar com eles para facilitar o trabalho do dia a dia e evitar ter perdas de código, para deixar organizado e documentado.
                        </p>
                    </a>
                </div>

                <div class="timeline">
                    <a href="https://estabilis.thinkific.com/courses/aws-na-pratica" class="timeline-content">
                        <span class="year">2019</span>
                        <h3 class="title">AWS na Prática</h3>
                        <h5>Estabilis Academy - 7h</h5>
                        <p class="description">
                            O curso é apresenta conceitos e prática da Amazon Web Services e de cloud, com um hands-on dos principais serviços oferecidos pela AWS.
                        </p>
                    </a>
                </div>

                <div class="timeline">
                    <a href="https://estabilis.thinkific.com/courses/devops-foundation" class="timeline-content">
                        <span class="year">2019</span>
                        <h3 class="title">DevOps Foundation</h3>
                        <h5>Estabilis Academy - 4h</h5>
                        <p class="description">
                            O curso apresenta os principais fundamentos e conceitos, cultura e ferramentas do DevOps.
                        </p>
                    </a>
                </div>

                <div class="timeline">
                    <a href="https://www.udemy.com/seguranca-da-informacao-para-e-mails/learn" class="timeline-content">
                        <span class="year">2019</span>
                        <h3 class="title">Segurança da Informação para E-mails</h3>
                        <h5>Udemy - 1h</h5>
                        <p class="description">
                            O curso tem o objetivo de passar um entendimento básico sobre o funcionamento de e-mail, bem como suas principais ameaças e formas de proteção.
                        </p>
                    </a>
                </div>

                <div class="timeline">
                    <a href="https://www.youracclaim.com/badges/6cc22d29-2b37-47dc-a44d-5c257dac9b0f/linked_in_profile" class="timeline-content">
                        <span class="year">2018</span>
                        <h3 class="title">Master the Mainframe 2018 - Part 2</h3>
                        <h5>IBM</h5>
                        <p class="description">
                            Reconhecimento por concluir a 2ª fase do desafio "Master the Mainframe", da IBM. O desafio é composto por desafios de lógica e ensina os fundamentos do sistema operacional z/OS, Assembler, C, COBOL, DB2, Java, JCL e REXX, com foco na utilização diária do mainframe na atualidade.
                        </p>
                    </a>
                </div>

                <div class="timeline">
                    <a href="https://www.youtube.com/watch?v=KlIL63MeyMY&list=PLHz_AreHm4dmGuLII3tsvryMMD7VgcT7x" class="timeline-content">
                        <span class="year">2018</span>
                        <h3 class="title">Curso de POO com PHP</h3>
                        <h5>Curso em Vídeo - 12h</h5>
                        <p class="description">
                            O curso tem o objetivo de explicar os conceitos de Programação Orientada a Objetos, com a teoria em pseudocódigo e a prática em PHP.
                        </p>
                    </a>
                </div>

                <div class="timeline">
                    <a href="https://estabilis.thinkific.com/courses/exin-agile-scrum-foundation" class="timeline-content">
                        <span class="year">2018</span>
                        <h3 class="title">Agile Scrum Foundation</h3>
                        <h5>Estabilis Academy - 5h</h5>
                        <p class="description">
                        O Agile Scrum ensina como trabalhar em conjunto para alcançar um objetivo com sucesso. As metodologias ágeis são abordagens populares no desenvolvimento de software e que estão cada vez mais sendo utilizadas em outras áreas.
                        </p>
                    </a>
                </div>

                <div class="timeline">
                    <a href="https://hackatruck.com.br/area/Home/Cursos/EAD/Cat%C3%A1logo/" class="timeline-content">
                        <span class="year">2017</span>
                        <h3 class="title">Conceitos e Fundamentos: Lógica de Programação, Orientação a Objetos, SWIFT, JavaScript e RESTful APIs</h3>
                        <h5>Instituto Eldorado (Hack a Truck IBM) - 65h</h5>
                        <p class="description">
                            O curso tem o objetivo de explicar os conceitos de Lógica de programação, Orientada a Objetos e apresentar a linguagem Swift (usada em dispositivos móveis da Apple), além de mostrar o funcionamento do JavaScript (back-end e front-end) e dar uma breve introdução à APIs RESFTful.
                        </p>
                    </a>
                </div>

                <div class="timeline">
                    <a href="https://www.sp.senac.br/jsp/default.jsp?newsID=DYNAMIC,oracle.br.dataservers.CourseDataServer,selectCourse&course=25887&testeira=1409&type=Z&template=1446.dwt&unit=NONE&busca" class="timeline-content">
                        <span class="year">2011</span>
                        <h3 class="title">Módulo básico do Programa de Aprendizagem em Serviços de Supermercados</h3>
                        <h5>Serviço Nacional de Aprendizagem Comercial (Senac)</h5>
                        <p class="description">
                            Curso oferecido pelo Senac, na unidade Santos, através da empresa Atadacão. Foi concluído o módulo básico do curso, que ensinou sobre direitos trabalhistas, segurança do trabalho, saúde e bem-estar, responsabilidade social e corporativa e desenvolvimento de projetos.
                        </p>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection