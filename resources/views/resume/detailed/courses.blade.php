@extends('layout.detail')

@section('body')
<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="courses" class="page one">
                    <h1 class="heading">Cursos, Bootcamps e Workshops</h1>
@foreach($courses as $course)
                    <div class="resume-wrap d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-ideas"></span>
                        </div>
                        <div class="text pl-3">
                            <span class="date">{{ \Carbon\Carbon::parse($course->startDate)->format('d/M/y') }} -
                                @if ($course->isFinished != 0)
                                    {{ \Carbon\Carbon::parse($course->endDate)->format('d/M/y') }}
                                @else
                                    Atualmente
                                @endif
                            </span>

                            <h3 class="position">{{ $course->typeOfAward }}
                                @if($course->workLoad != 0)
                                - {{ $course->workLoad }}h
                                @endIf
                            </h3>

                            <a href="{{ $course->awardLink }}" target="_blank">
                                <h2>{{ $course->awardName }}</h2>
                            </a>
                            <a href="{{ $course->institutionLink }}" target="_blank">
                                <span class="position">{{ $course->institutionName }}</span>
                            </a>
                            <p>{{ $course->description }}</p>

                            @if ($course->awardNumber != null)
                                <p>Número do certificado: {{ $course->awardNumber}}</p>
                            @endif

                        </div>
                    </div>
@endforeach
                <div class="justify-content-center text-center">
                    <a role="button" type="button" class="btn btn-primary btn-lg" href="{{ route('index') }}#courses">Voltar para o currículo</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
