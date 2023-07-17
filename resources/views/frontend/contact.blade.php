@extends('layouts.app')

@section('title','Contact')

@section('content')


<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    
    <!-- section begin -->
    <section id="subheader" class="jarallax" >
        <img class="jarallax-img" src="frontend/images/contact.jpg" alt=""  />
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Contact Us</h1>
                        <p>Welcome to Rayan Lounge </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">

                    @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                    @endif
                    <form name="contactForm" action="/contact" class="form-border" method="post">
                        @method('POST')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div id='name_error' class='error'>Please enter your name.</div>
                                <div>
                                    <input type='text' name='name' id='name' class="form-control" placeholder="Your Name" required>
                                </div>

                                <div id='email_error' class='error'>Please enter your valid E-mail Address</div>
                                <div>
                                    <input type='email' name='email' id='email' class="form-control" placeholder="Your Email" required>
                                </div>

                                <div id='phone_error' class='error'>Please enter your phone number.</div>
                                <div>
                                    <input type='number' name='phone' id='phone' class="form-control" placeholder="Your Phone" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id='message_error' class='error'>Please enter your message.</div>
                                <div>
                                    <textarea name='message' type='text' rows="7" cols="30" class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">

                                <button type="submit" class="btn btn-main">Submit</button>                         
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>    
    </section>
    <!-- section close -->

    <section id="section-location" class="jarallax" aria-label="section">
        <img class="jarallax-img" src="frontend/images/background/6.jpg" alt="" />
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center text-light">
                    <i class="icon_pin_alt fontsize48 id-color mb30"></i>
                    <h3>Location</h3>
                    New Cournish,Suez, Egypt
                </div>

                <div class="col-md-4 text-center text-light">
                    <i class="icon_mug fontsize48 id-color mb30"></i>
                    <h3>We're Open</h3>
                    Always open
                </div>

                <div class="col-md-4 text-center text-light">
                    <i class="icon_mail_alt fontsize48 id-color mb30"></i>
                    <h3>Contact Us</h3>
                    P: +201010404808. E: atsh700@yahoo.com.
                </div>
            </div>
        </div>
    </section>

</div>


@endsection