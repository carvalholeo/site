@extends('layout.app', ["current" => "resume"])

@section('title', 'Formação Acadêmica | Léo Carvalho')

<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/timelines.css') }}" />

@section('body')

<div class="container">
    <h4>Formação Acadêmica</h4>
    <h4>Trajetória na educação formal</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="main-timeline7">
                <div class="timeline">
                    <div class="timeline-icon"><i class="fas fa-laptop-code"></i></div>
                    <span class="year"><em>2020</em></span>
                    <div class="timeline-content">
                        <h5 class="title">Análise e Desenv. de Sistemas</h5>
                        
                        <p class="description">
                            Graduação tecnológica iniciada em fevereiro/2018, estou no 4º semestre (4/5), pelo Centro Universitário Estácio de Ribeirão Preto, via EAD, no polo de Santos/SP.
                        </p>
                    </div>
                </div>
                <div class="timeline">
                    <div class="timeline-icon"><i class="fas fa-clipboard-check"></i></div>
                    <span class="year">2019</span>
                    <div class="timeline-content">
                        <h5 class="title">Fundamentos, Elaboração e Análise de Projetos</h5>
                        <p class="description">
                            Curso de Extensão na área de projetos, com duração de 2 meses, pela Faculdade de Educação São Luis, exclusivamente via EAD.
                        </p>
                    </div>
                </div>
                <div class="timeline">
                    <div class="timeline-icon"><i class="fas fa-users"></i></div>
                    <span class="year">2017</span>
                    <div class="timeline-content">
                        <h5 class="title">Gestão de Equipes de Alta Performance</h5>
                        <p class="description">
                            Curso de Extensão na área de gestão de equipes e pessoas, com duração de 1 mês, pelo Campus Virtual Cruzeiro do Sul Educacional, exclusivamente via EAD.
                        </p>
                    </div>
                </div>
                <div class="timeline">
                    <div class="timeline-icon"><i class="fas fa-school"></i></div>
                    <span class="year">2014</span>
                    <div class="timeline-content">
                        <h5 class="title">Ensino Médio</h5>
                        <p class="description">
                            Ensino Médio regular, concluído na Escola Estadual Vicente de Carvalho (Guarujá/SP). Fui líder de classe em 2013 e 2014 e orador da turma na formatura, em dezembro de 2014.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
