@extends('layout.detail')

@section('body')
<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="volunteer" class="page one">
                    <h2 class="heading">Trabalhos voluntários</h2>
@foreach($volunteers as $volunteer)
                    <div class="resume-wrap d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-ideas"></span>
                        </div>
                        <div class="text pl-3">
                            <span class="date">{{ \Carbon\Carbon::parse($volunteer->startDate)->format('d/M/y') }} -
                                @if ($volunteer->isFinished != 0)
                                    {{ \Carbon\Carbon::parse($volunteer->endDate)->format('d/M/y') }}
                                @else
                                    Atualmente
                                @endif
                            </span>

                            <h2>{{ $volunteer->position }}</h2>
                            <a href="{{ $volunteer->institutionLink }}" target="_blank" rel="noreferrer">
                                <span class="position">{{ $volunteer->institutionName }}</span>
                            </a>
                            <p>{{ $volunteer->description }}</p>
                        </div>
                    </div>
@endforeach
                    <div class="justify-content-center text-center">
                        <a role="button" type="button" class="btn btn-primary btn-lg" href="{{ route('index') }}#volunteer">Voltar para o currículo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
