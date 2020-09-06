@extends('layout.detail')

@section('body')

<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
<div class="container">
    <div class="row">
            <div class="col-md-9">
                <div id="education" class= "page one">
                    <h2 class="heading">Educação</h2>
@foreach ($educations as $edu)
                <div class="resume-wrap d-flex ftco-animate">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-ideas"></span>
                    </div>
                    <div class="text pl-3">
                        <span class="date">{{ \Carbon\Carbon::parse($edu->startDate)->format('M/y')}} - {{ \Carbon\Carbon::parse($edu->endDate)->format('M/y')}}</span>
                        <h3 class="position">{{ $edu->degree }}
                            @if($edu->workLoad != 0)
                                - {{ $edu->workLoad }}h
                            @endIf
                        </h3>
                        <h2>{{ $edu->title }} - {{ $edu->isFinished ? 'Concluído' : 'Cursando' }}</h2>

                        <a href="{{ $edu->institutionLink }}" target="_blank" rel="noopener noreferrer">
                            <span class="position">{{ $edu->institution }}</span>
                        </a>
                        <p>{{ $edu->description }}</p>
                        <p>Conceito médio: {{ $edu->globalGrade}}</p>
                        @if ($edu->registerNumber != null)
                            <p>Número do certificado: {{ $edu->registerNumber }}</p>
                        @endif
                    </div>
                </div>
@endforeach

                <div class="justify-content-center text-center">
                    <a role="button" type="button" class="btn btn-primary btn-lg" rel="noopener noreferrer" href="{{ route('index') }}#education" id="gtm-back-education">Voltar para o currículo</a>
                </div>
                </div>
            </div>
        </div>
</div>
</section>

@endsection
