<section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <nav id="navi">
                    <ul>
                      <li><a href="#page-1">Educação</a></li>
                      <li><a href="#page-2">Experiência</a></li>
                      <li><a href="#page-3">Habilidades</a></li>
                      <li><a href="#page-4">Informações adicionais</a></li>
                    </ul>
                  </nav>
                </div>
                <div class="col-md-9">
                  <div id="page-1" class= "page one">
                      <h2 class="heading">Educação</h2>
@foreach ($educations as $edu)
                    <div class="resume-wrap d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-ideas"></span>
                        </div>
                        <div class="text pl-3">
                            <span class="date">{{ \Carbon\Carbon::parse($edu->startDate)->format('M/y')}} - {{ \Carbon\Carbon::parse($edu->endDate)->format('M/y')}}</span>

                                <h2>{{ $edu->title }} - {{ $edu->isFinished ? 'Concluído' : 'Cursando' }}</h2>

                            <a href="{{ $edu->institutionLink }}" target="_blank">
                                <span class="position">{{ $edu->institution }}</span>
                            </a>
                        </div>
                    </div>
@endforeach

                  <div id="page-2" class= "page two">
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
                  <div id="page-3" class= "page three">
                      <h2 class="heading">Habilidades</h2>
                      <div class="row progress-circle mb-5">
                          <div class="col-lg-4 mb-4">
                          <div class="bg-white rounded-lg shadow p-4">
                            <h2 class="h5 font-weight-bold text-center mb-4">CSS</h2>

                            <!-- Progress bar 1 -->
                            <div class="progress mx-auto" data-value='90'>
                              <span class="progress-left">
                    <span class="progress-bar border-primary"></span>
                              </span>
                              <span class="progress-right">
                    <span class="progress-bar border-primary"></span>
                              </span>
                              <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                <div class="h2 font-weight-bold">90<sup class="small">%</sup></div>
                              </div>
                            </div>
                            <!-- END -->

                            <!-- Demo info -->
                            <div class="row text-center mt-4">
                              <div class="col-6 border-right">
                                <div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
                              </div>
                              <div class="col-6">
                                <div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
                              </div>
                            </div>
                            <!-- END -->
                          </div>
                        </div>

                        <div class="col-lg-4 mb-4">
                          <div class="bg-white rounded-lg shadow p-4">
                            <h2 class="h5 font-weight-bold text-center mb-4">HTML</h2>

                            <!-- Progress bar 1 -->
                            <div class="progress mx-auto" data-value='80'>
                              <span class="progress-left">
                    <span class="progress-bar border-primary"></span>
                              </span>
                              <span class="progress-right">
                    <span class="progress-bar border-primary"></span>
                              </span>
                              <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                <div class="h2 font-weight-bold">80<sup class="small">%</sup></div>
                              </div>
                            </div>
                            <!-- END -->

                            <!-- Demo info -->
                            <div class="row text-center mt-4">
                              <div class="col-6 border-right">
                                <div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
                              </div>
                              <div class="col-6">
                                <div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
                              </div>
                            </div>
                            <!-- END -->
                          </div>
                        </div>

                        <div class="col-lg-4 mb-4">
                          <div class="bg-white rounded-lg shadow p-4">
                            <h2 class="h5 font-weight-bold text-center mb-4">jQuery</h2>

                            <!-- Progress bar 1 -->
                            <div class="progress mx-auto" data-value='75'>
                              <span class="progress-left">
                    <span class="progress-bar border-primary"></span>
                              </span>
                              <span class="progress-right">
                    <span class="progress-bar border-primary"></span>
                              </span>
                              <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                <div class="h2 font-weight-bold">75<sup class="small">%</sup></div>
                              </div>
                            </div>
                            <!-- END -->

                            <!-- Demo info -->
                            <div class="row text-center mt-4">
                              <div class="col-6 border-right">
                                <div class="h4 font-weight-bold mb-0">28%</div><span class="small text-gray">Last week</span>
                              </div>
                              <div class="col-6">
                                <div class="h4 font-weight-bold mb-0">60%</div><span class="small text-gray">Last month</span>
                              </div>
                            </div>
                            <!-- END -->
                          </div>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>Photoshop</h3>
                                    <div class="progress">
                                         <div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
                                          aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                        <span>90%</span>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>jQuery</h3>
                                    <div class="progress">
                                         <div class="progress-bar color-2" role="progressbar" aria-valuenow="85"
                                          aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                        <span>85%</span>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>HTML5</h3>
                                    <div class="progress">
                                         <div class="progress-bar color-3" role="progressbar" aria-valuenow="95"
                                          aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                        <span>95%</span>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>CSS3</h3>
                                    <div class="progress">
                                         <div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
                                          aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                        <span>90%</span>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>WordPress</h3>
                                    <div class="progress">
                                         <div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
                                          aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                        <span>70%</span>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="progress-wrap ftco-animate">
                                    <h3>SEO</h3>
                                    <div class="progress">
                                         <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                                          aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                        <span>80%</span>
                                          </div>
                                    </div>
                                </div>
                            </div>
                      </div>
                  </div>
                  <div id="page-4" class= "page four">
                    <h2 class="heading">Informações Adicionais</h2>
                    <h3 class="heading-2 mb-4">Cursos, Certificações e Atividades Extra-curriculares</h3>
@foreach ($courses as $course)
                    <div class="resume-wrap d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-ideas"></span>
                        </div>
                        <div class="text pl-3">
                            <span class="date">{{ \Carbon\Carbon::parse($course->startDate)->format('d/M/y') }} -
                                @if ($course->endDate != 0)
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
                                <h2>{{ $course->awardName }} - {{ $course->isFinished ? 'Concluído' : 'Cursando' }}</h2>
                            </a>
                            <a href="{{ $course->institutionLink }}" target="_blank">
                                <span class="position">{{ $course->institutionName }}</span>
                            </a>
                            <p>{{ $course->description }}</p>
                        </div>
                    </div>
@endforeach
                  </div>
                </div>
          </div>
    </div>
</section>
