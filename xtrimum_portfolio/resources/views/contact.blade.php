@extends('layouts.app')


@section('content')

<section class="hero-wrap py-5" style="background-color: #000; color: #fff;">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-8 ftco-animate">
          <h1 class="mb-3" style="font-weight: 600; font-size: 2.5rem;">Contact Me</h1>
          <p class="breadcrumbs mb-0">
            <a href="/" style="color: #bbb;">Home <i class="ion-ios-arrow-forward"></i></a> 
            <span style="color: #bbb;"> / Contact</span>
          </p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="contact-section bg-fade">
    <div class="container">
      <div class="row no-gutters d-flex contact-info">
        <div class="col-md-4 d-flex">
            <div class="align-self-stretch box p-4 py-md-5 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-map-signs"></span>
                </div>
                <h3 class="mb-4">Address</h3>
              <p>Ayat 49, Addis Ababa, Ethiopia</p>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="align-self-stretch box p-4 py-md-5 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-phone2"></span>
                </div>
                <h3 class="mb-4">Contact Number</h3>
              <p><a href="tel://+251966351977">+ 251 966 351 977</a></p>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="align-self-stretch box p-4 py-md-5 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-paper-plane"></span>
                </div>
                <h3 class="mb-4">Email Address</h3>
              <p><a href="mailto:atekeltafework55@gmail.com">atekeltafework55@gmail.com</a></p>
            </div>
        </div>
        <!-- <div class="col-md-3 d-flex">
            <div class="align-self-stretch box p-4 py-md-5 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="icon-globe"></span>
                </div>
                <h3 class="mb-4">Website</h3>
              <p><a href="#">yoursite.com</a></p>
            </div>
        </div> -->
      </div>
    </div>
  </section>
          
      <section class="container ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="p-2 m-4">
    <!-- Google Calendar Appointment Scheduling begin -->
<iframe src="https://calendar.google.com/calendar/appointments/schedules/AcZssZ0MXjdb2VhO3dhX5FpCJmHUPVUq5F4xbjoJrxg4ZTpOhhyrBWBtgUShWQn1jNpkL1rB5sFLWoHu?gv=true" style="border: 0" width="100%" height="600" frameborder="0"></iframe>
<!-- end Google Calendar Appointment Scheduling -->
</div>
  </section>
  @endsection