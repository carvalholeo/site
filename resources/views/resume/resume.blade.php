<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <nav id="navi">
                    <ul>
                      <li><a href="#education">Educação</a></li>
                      <li><a href="#experience">Experiência</a></li>
                      <li><a href="#skills">Habilidades</a></li>
                      <li><a href="#others">Informações adicionais</a></li>
                    </ul>
                  </nav>
                </div>
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

                            <a href="{{ $edu->institutionLink }}" target="_blank">
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

                  <div id="experience" class= "page two">
                      <h2 class="heading">Experiência</h2>
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
                  </div>
                  <div id="skills" class= "page three">
                      <h2 class="heading">Habilidades</h2>


                        <!-- Linguagens no último ano -->
                        <h3>Linguagens utilizadas no último ano</h3>
                        <figure>
                            <embed src="https://wakatime.com/share/@3d0d5dec-46a0-4f76-a0c9-5cdb5a198df0/3efee2bd-2480-4041-9c97-c2aed1b22075.svg"></embed>
                        </figure>


                        <!-- Linguagens no último mês -->
                        <h3>Linguagens utilizadas nos últimos 30 dias</h3>
                        <figure>
                            <embed src="https://wakatime.com/share/@3d0d5dec-46a0-4f76-a0c9-5cdb5a198df0/705b41e3-76ab-4085-b1f2-ac95bf7cb48a.svg"></embed>
                        </figure>


                        <!-- Linguagens na última semana -->
                        <h3>Linguagens utilizadas nos últimos 7 dias</h3>
                        <figure>
                          <embed src="https://wakatime.com/share/@3d0d5dec-46a0-4f76-a0c9-5cdb5a198df0/90eb9432-bded-4d25-a707-08b9668a8d9a.svg"></embed>
                        </figure>

                        <h3>Idiomas</h3>
                        <div class="row">
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>Português</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="100"
                                          aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                            <span>100%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>English</h3>
                                    <div class="progress">
                                         <div class="progress-bar color-2" role="progressbar" aria-valuenow="50"
                                          aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                        <span>50%</span>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="others" class= "page four">
                        <h2 class="heading">Informações Adicionais</h2>
                        <h3 class="heading-2 mb-4">Cursos, Certificações e Atividades Extra-curriculares</h3>
@foreach ($courses as $course)
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
                  </div>
                </div>
          </div>
    </div>
</section>
