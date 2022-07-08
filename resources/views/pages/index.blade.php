@extends('layouts.mainLayout')
@section('title', 'JujaroadHospital')
@section('hero')
<section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>JUJA ROAD HOSPITAL</h1>
      <h2>We are committed to providing you with quality, affordable,<br> world-class healthcare that exceeds your expectations</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->
@endsection

@section('content')

    {{-- Why Us --}}
    @include('pages.why-us')

    {{-- About us --}}
    @include('pages.about-us')

    {{-- Services --}}
    @include('pages.services')
    
    {{-- Team --}}
    @include('pages.team')
    
    {{-- Contact --}}
    @include('pages.contact')
    
    {{-- Footer --}}

@endsection