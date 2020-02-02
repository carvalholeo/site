@extends('layout.app')

@section('body')

@include('components.flash-messages')


@include('resume.introduction')
@include('resume.about')
@include('resume.resume')
<!--include('resume.services')
include('resume.projects')
include('resume.counter')-->
@include('resume.blog')
@include('resume.hire')
@include('contact.contact')

@endsection
