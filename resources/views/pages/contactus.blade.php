@extends('layouts.front')
@section('title', 'Contact Us')
@section('class7', 'active')
@section('content')


    <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white">Contact Us</h1>
             </div>
        </div>
    </div>
 
        <!-- inner page banner -->
        <div class="page-banner contact-page section-sp2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 m-b30">
                            <div class="bg-primary text-white contact-info-bx">
                                <h2 class="m-b10 title-head">Contact <span>Information</span></h2>
                               
                                <div class="widget widget_getintuch">	
                                    <ul>
                                        <li><i class="ti-location-pin"></i>Uva Advanced Technological Institute,Green Lane Drive, Badulla</li>
                                        <li><i class="ti-mobile"></i>+94 55 2 223818</li>
                                        <li><i class="ti-email"></i>director@atibadulla.edu.lk</li>
                                    </ul>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <form class="contact-bx ajax-form" action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="ajax-message"></div>
                                <div class="heading-bx left">
                                    <h2 class="title-head">Get In <span>Touch</span></h2>
                                
                                </div>
                                <div class="row placeani">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Your Name</label>
                                                <input name="name" type="text" required class="form-control valid-character">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group"> 
                                                <label>Your Email Address</label>
                                                <input name="email" type="email" class="form-control" required >
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Type Message</label>
                                                <textarea name="msg" rows="4" class="form-control" required ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-12">
                                        <button type="submit" value="Submit" class="btn button-md"> Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1526.838589521625!2d81.06237589369685!3d6.994052522485864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae4621057022e19%3A0xca1856575fb6d79c!2sUva+Advanced+Technological+Institute!5e0!3m2!1sen!2slk!4v1521699989291" style="width: 100%; height: 395px;"frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- inner page banner END -->
@stop