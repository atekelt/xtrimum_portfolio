@extends('layouts.app')


@section('content')

<section class="hero-wrap py-5" style="background-color: #000; color: #fff;">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-8 ftco-animate">
          <h1 class="mb-3" style="font-weight: 600; font-size: 2.5rem;">Our Work</h1>
          <p class="breadcrumbs mb-0">
            <a href="/" style="color: #bbb;">Home <i class="ion-ios-arrow-forward"></i></a> 
            <span style="color: #bbb;"> / About Us</span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="about-section py-5 bg-light text-dark">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-8">
          <h2 class="fw-bold">About Me</h2>
          <p class="lead text-muted">"Turning ideas into secure, scalable, and user-friendly applications — one line of code at a time."</p>
        </div>
      </div>
  
      <div class="row mb-5">
        <div class="col-md-6">
          <h4 class="fw-semibold">Who I Am</h4>
          <p>I’m <strong>Atekelt Afework</strong>, a full-stack developer with 5+ years of experience building everything from fintech systems and e-learning platforms to interactive games and blog engines. Whether you need a freelancer, a long-term collaborator, or a dedicated remote developer — I'm equipped to contribute value immediately.</p>
          <p>I'm passionate about innovation, performance, and security, and I love helping individuals and organizations bring their digital ideas to life using the right technologies and clean, maintainable code.</p>
        </div>
  
        <div class="col-md-6">
          <h4 class="fw-semibold">Mission</h4>
          <p>To build high-quality software that empowers people and businesses. I believe in accessible design, secure development, and continuous improvement. Every project is an opportunity to solve real problems, drive innovation, and make technology more human.</p>
        </div>
      </div>
  
      <div class="row mb-5">
        <div class="col-md-4">
          <h5 class="text-uppercase text-muted">Skills & Stack</h5>
          <ul class="list-unstyled">
            <li>• JavaScript, PHP, Dart, C++, Java</li>
            <li>• React, Vue, Laravel, Flutter, Node.js</li>
            <li>• MySQL, MongoDB, PostgreSQL</li>
            <li>• Git, Docker, CI/CD pipelines</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5 class="text-uppercase text-muted">Recent Projects</h5>
          <ul class="list-unstyled">
            <li>• Fintech transaction system for banks</li>
            <li>• Cybersecurity blog platform with Markdown support</li>
            <li>• E-learning portal for startups</li>
            <li>• Multilingual site for livestock quarantine center</li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5 class="text-uppercase text-muted">Awards & Recognition</h5>
          <ul class="list-unstyled">
            <li>• Google Developer Group (GDG) Hackathon Award</li>
            <li>• ICPC Regional Finalist</li>
          </ul>
          <h5 class="text-uppercase text-muted mt-4">Languages</h5>
          <p>🇬🇧 English – Full Professional Proficiency</p>
          <p>🇪🇹 Amharic – Native Speaker</p>
        </div>
      </div>
  
      <div class="text-center">
        <a href="files/Atekelt Afework CV 2025.pdf" download target="_blank"  class="btn btn-dark btn-lg me-2" download>
          📄 Download CV
        </a>
        <a href="{{ route('contact') }}" class="btn btn-outline-dark btn-lg">
          📬 Get in Touch
        </a>
      </div>
    </div>
  </section>
  
@endsection