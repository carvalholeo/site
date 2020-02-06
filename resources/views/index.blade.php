@extends('layout.app')

@section('body')

@include('resume.about')
@include('resume.resume')
<!--include('resume.services')
include('resume.projects')
include('resume.counter')-->
@include('resume.blog')
@include('contact.contact')

@endsection
