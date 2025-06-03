@extends('layouts.app')


@section('content')

<section class="hero-wrap py-5" style="background-color: #000; color: #fff;">
    <div class="container">
      <div class="row justify-content-center text-center">
      <div class="col-md-8 ftco-animate">
        <h1 class="mb-3" style="font-weight: 600; font-size: 2.5rem;">Cyber Security Blog</h1>
        <p class="breadcrumbs mb-0">
        <a href="/" style="color: #bbb;">Home <i class="ion-ios-arrow-forward"></i></a> 
        <span style="color: #bbb;"> / Cyber Security Blog</span>
        </p>
      </div>
      </div>
    </div>
    </section>

  <section class="ftco-section">
    <div class="container pb-5">
      <h1 class="mb-4">Terminal-Style Blog for a Cybersecurity Enthusiast</h1>
  
      <div class="terminal-box">
        <h2>Project Overview</h2>
        <p>
          A blog platform designed to look like a terminal, developed using Laravel. The goal was to reflect the client’s background in cybersecurity through a raw and immersive visual experience.
        </p>
      </div>
  
      <div class="terminal-box">
        <h2>Technology Stack</h2>
        <ul>
          <li>Laravel (Backend)</li>
          <li>Blade Templating</li>
          <li>Markdown Parsing</li>
          <li>Bootstrap (Admin Dashboard)</li>
          <li>Custom CSS for terminal look and feel</li>
        </ul>
      </div>
  
      <div class="terminal-box">
        <h2>Terminal-Style Frontend</h2>
        <p>
          The site features a minimal, dark-themed UI that mimics a command-line interface using monospace fonts, green-on-black color schemes, and subtle animations to simulate typing and terminal transitions.
        </p>
      </div>
  
      <div class="terminal-box">
        <h2>Markdown Blog System</h2>
        <p>
          Blog content is created using Markdown files, which are uploaded through the admin panel. Laravel parses the files and renders them into styled HTML pages that retain the raw, readable terminal-like aesthetic.
        </p>
      </div>
  
      <div class="terminal-box">
        <h2>Screenshots</h2>
        <div class="row g-4">
          <div class="col-md-6">
            <img src="images/work-4.png" class="img-fluid p-2 m-1" alt="Screenshot 1">
          </div>
          <div class="col-md-6">
            <img src="images/work-4_2.png" class="img-fluid p-2 m-1" alt="Screenshot 2">
          </div>
          <div class="col-md-6">
            <img src="images/work-4_3.png" class="img-fluid p-2 m-1" alt="Screenshot 3">
          </div>
          <div class="col-md-6">
            <img src="images/work-4_4.png" class="img-fluid p-2 m-1" alt="Screenshot 4">
          </div>
          <div class="col-md-6">
            <img src="images/work-4_5.png" class="img-fluid p-2 m-1" alt="Screenshot 5">
          </div>
        </div>
      </div>
  
      <div class="terminal-box">
        <h2>Conclusion</h2>
        <p>
          This Laravel-powered blog breaks away from traditional designs and embraces a look that speaks directly to cybersecurity professionals. The Markdown integration makes it easy for the client to post and manage content, while the terminal-inspired design sets it apart visually.
        </p>
      </div>
    </div>
  </section> <!-- .section -->

@endsection