@extends('layout.app', ["current" => "resume"])

@section('title', 'Histórico Profissional | Léo Carvalho')

<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/professional.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Poppins:400,500,600,700" rel="stylesheet">

@section('body')
<section class="experience pt-100 pb-100" id="experience">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto text-center">
					<div class="section-title">
						<h4>Histórico profissional</h4>
						<p>Minha trajetória profissional resumida nessa linha do tempo</p>
					</div>
				</div>
			</div>
			<div class="row">
               <div class="col-xl-12">
                  <ul class="timeline-list">
                     <!-- Single Experience -->
                     <li>
                        <div class="timeline_content">
                           <span>jan de 2017 - jul de 2019</span>
                           <h5>Atento Brasil</h5>
                           <h4>Agente Multiplicador (Instrutor de Treinamento)</h4>
                           <p>Atuação na área de Seleção & Treinamento, com foco na área de treinamento de novos colaboradores vindos do mercado de trabalho, preparando-os para a atuação no atendimento ao cliente em call center, nos produtos Vivo Móvel PF, Vivo Fixa PJ Legado e Vivo Fixa New.</p>
                        </div>
                     </li>
                     <!-- Single Experience -->
                     <li>
                        <div class="timeline_content">
                        <span>2015-2017</span>
                           <h4>Junior Developer</h4>
                           <p>We gather your business and products information. We then determine the direction of the project and understand your goals and we combine your ideas with ours for an amazing website.</p>
                        </div>
                     </li>
                     <!-- Single Experience -->
                     <li>
                        <div class="timeline_content">
                        <span>2012-2015</span>
                           <h4>Senior Developer</h4>
                           <p>We gather your business and products information. We then determine the direction of the project and understand your goals and we combine your ideas with ours for an amazing website.</p>
                        </div>
                     </li>
                     <!-- Single Experience -->
                     <li>
                        <div class="timeline_content">
                        <span>2015-2018</span>
                           <h4>Project Manager</h4>
                           <p>We gather your business and products information. We then determine the direction of the project and understand your goals and we combine your ideas with ours for an amazing website.</p>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
		</div>
</section>
@endsection
