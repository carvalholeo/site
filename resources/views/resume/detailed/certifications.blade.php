@extends('layout.detail')

@section('body')
<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="certifications" class="page one">
                    <h2 class="heading">Certificações e Reconhecimentos</h2>
@foreach ($certifications as $cert)
                    <div class="resume-wrap d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-ideas"></span>
                        </div>
                        <div class="text pl-3">
                            <span class="date">{{ \Carbon\Carbon::parse($cert->startDate)->format('d/M/y') }} - {{ \Carbon\Carbon::parse($cert->endDate)->format('d/M/y') }}
                            </span>

                            <h3 class="position">{{ $cert->certType }}
                                @if($cert->workLoad != 0)
                                - {{ $cert->workLoad }}h
                                @endIf
                            </h3>

                            <a href="{{ $cert->certLink }}" target="_blank" rel="noopener noreferrer">
                                <h2>{{ $cert->certName }}</h2>
                            </a>
                            <a href="{{ $cert->issuerLink }}" target="_blank" rel="noopener noreferrer">
                                <span class="position">{{ $cert->issuerName }}</span>
                            </a>
                            <p>{{ $cert->description }}</p>

                            @if ($cert->certNumber != null)
                                <p>Número do certificado: {{ $cert->certNumber}}</p>
                            @endif

                        </div>
                    </div>
@endforeach
                    <div class="justify-content-center text-center">
                        <a role="button" type="button" class="btn btn-primary btn-lg" href="{{ route('index') }}#certifications" id="gtm-back-certifications" rel="noopener noreferrer">Voltar para o currículo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
