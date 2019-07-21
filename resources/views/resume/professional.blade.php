@extends('layout.app', ["current" => "resume"])

@section('title', 'Histórico Profissional | Léo Carvalho')

<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/professional.css') }}" />


@section('body')
<div class="timeline-v">
    <div class="timelinecontainer approved timeline-left">
        <div class="timelinecontent">
            <h3 class="company"><a href="http://atento.com/pt/" target="_blank">Atento Brasil</a></h3>
            <h5 class="role">Instrutor de Treinamento</h5>
            <p class="date">jan de 2017 - jul de 2019</p>
            <p>Atuação na área de Seleção & Treinamento, com foco na área de treinamento de novos colaboradores vindos do mercado de trabalho, preparando-os para a atuação no atendimento ao cliente em call center, nos produtos Vivo Móvel e Vivo Fixa PJ.</p>
            <hr />
            <h5 class="role">Técnico de Suporte I</h5>
            <p class="date">out de 2015 - jan de 2017</p>
            <p>Prestação de suporte técnico aos clientes de telefonia e internet fixa da operadora Vivo, para clientes empresariais do estado de São Paulo.</p>
        </div>
    </div>

    <div class="timelinecontainer timeline-right">
        <div class="timelinecontent">
            <h3 class="company"><a href="http://capacitamais.com.br/" target="_blank">C+ Capacita Mais Brasil</a></h3>
            <h5 class="role">Instrutor de Informática</h5>
            <p class="date">jan de 2015 - jul de 2015</p>
            <p>Auxílio e tira-dúvidas de cursos profissionalizantes por vídeo-aula, nas áreas de informática, inglês e administração.</p>
        </div>
    </div>

    <div class="timelinecontainer timeline-left">
        <div class="timelinecontent">
            <h3 class="company"><a href="https://pt.wikipedia.org/wiki/Funda%C3%A7%C3%A3o_do_Desenvolvimento_Administrativo" target="_blank">Fundação do Desenv. Adm. - Fundap*</a></h3>
            <h5 class="role">Estagiário do Ensino Médio</h5>
            <p class="date">ago de 2012 - ago de 2014</p>
            <p>Auxílio na secretaria da escola E. E. Vicente de Carvalho, arquivando documentos nos prontuários, preenchendo documentos escolares, solucionando dúvidas dos alunos e do público em geral e atendendo ligações telefônicas.</p>
            <p class="disclaimer">* A Fundap era um órgao estadual paulista, extinta em 2015 pelo então governador Geraldo Alckimin</p>
        </div>
    </div>

    <div class="timelinecontainer timeline-right">
        <div class="timelinecontent">
            <h3 class="company"><a href="https://www.atacadao.com.br/" target="_blank">Atacadão</a></h3>
            <h5 class="role">Menor Aprendiz</h5>
            <p class="date">set de 2010 - jul de 2011</p>
            <p>Passagem em diversos setores dentro da empresa, para auxílio dos mesmos e aprendizagem do que faz e a importância de cada departamento.</p>
        </div>
    </div>
</div>
@endsection
