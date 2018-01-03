

@extends('layouts.master')
@section('title', 'Contact')

@section('header')
<h1>Home</h1>
@stop
@section('content')
@include('partials/menu')
<!--Page Header-->
<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1>Contact</h1>
        <p>We offer the most complete advisory renovating services in the country</p>
        <div class="page_nav">
      <span>You are here:</span> <a href="{{url('/')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Contact</span>
      </div>
      </div>
    </div>
  </div>
</section>
<!--Page Header-->


<!--SERVICE SECTION-->
<section id="contact" class="padding">
  <div class="container">
    <div class="row padding-bottom">
      <div class="col-md-4 contact_address heading_space wow fadeInLeft animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInLeft;">
        <h2 class="heading heading_space"><span>Get</span> in Touch <span class="divider-left"></span></h2>
        <p>Standard Certification Services</p>
        <div class="address">
          <i class="icon icon-map-pin border_radius"></i>
          <h4>Visit Us</h4>
          <p>InvestmentVia Advisory Service</p>
        </div>
        <div class="address second">
          <i class="icon icon-envelope border_radius"></i>
          <h4>Email Us</h4>
          <p><a href="mailto:info@bucksgainer.com">info@researchinfotech.co.in</a></p>
        </div>
        <div class="address">
          <i class="icon icon-phone4 border_radius"></i>
          <h4>Call Us</h4>
          <p>+91-9893000XXX , 91-9753988XXX</p>
        </div>
      </div>
      <div class="col-md-8 wow fadeInRight animated" data-wow-delay="450ms" style="visibility: visible; animation-delay: 450ms; animation-name: fadeInRight;">
        <h2 class="heading heading_space"> <span>Contact</span> Form<span class="divider-left"></span></h2>
        <form class="form-inline findus" id="contact-form" onsubmit="return false">
          <div class="row">
            <div class="col-md-12">
              <div id="result"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name" id="name" required="required">
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required="required">
              </div>
            </div>
                <div class="col-md-4 col-sm-4">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Mobile number" name="mobile" id="email" required="required">
              </div>
            </div>
            <div class="col-md-12">
              <textarea placeholder="Comment" name="message" id="message"></textarea>
              <button class="btn_common yellow border_radius" id="btn_submit">Submit</button>
            </div>
            
          </div>
        </form>
       
      </div>
    </div>
    
  </div>
</section>
@stop