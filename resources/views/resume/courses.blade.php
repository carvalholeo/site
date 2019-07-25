@extends('layout.app', ["current" => "resume"])

@section('title', 'Cursos Extra-curriculares | Léo Carvalho')

<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/timelines.css') }}" />

@section('body')

<div class="container">
            <h4>Cursos Extra-curriculares</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline3">
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <span class="year">2018</span>
                                <h3 class="title">Web Designer</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <span class="year">2017</span>
                                <h3 class="title">Web Developer</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <span class="year">2016</span>
                                <h3 class="title">Web Designer</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.
                                </p>
                            </a>
                        </div>
                        <div class="timeline">
                            <a href="#" class="timeline-content">
                                <span class="year">2015</span>
                                <h3 class="title">Web Developer</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada tellus lorem, et condimentum neque commodo quis.
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection