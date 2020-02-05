@extends('layout.detail')

@section('body')
<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="page-1" class="page one">
                    <h1 class="heading">Experiência</h1>
@foreach ($xps as $xp)
                    <div class="resume-wrap d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-ideas"></span>
                        </div>
                        <div class="text pl-3">
                            <span class="date">{{ \Carbon\Carbon::parse($xp->startDate)->format('M/y')}} - {{ \Carbon\Carbon::parse($xp->endDate)->format('M/y')}}</span>
                            <h2>{{ $xp->role }}</h2>
                            <a href="{{ $xp->companyLink }}" target="_blank">
                                <span class="position">{{ $xp->company }}</span>
                            </a>
                        <p>{{ $xp->description }}</p>
                        </div>
                    </div>
@endforeach
                <div class="justify-content-center text-center">
                    <a role="button" type="button" class="btn btn-primary btn-lg" href="{{ route('index') }}#experience">Voltar para o currículo</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
