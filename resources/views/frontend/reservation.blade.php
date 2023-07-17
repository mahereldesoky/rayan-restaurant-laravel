@extends('layouts.app')

@section('title','Reservation')


@section('content')


<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    
    <!-- section begin -->
    <section id="subheader" class="jarallax">
        <img class="jarallax-img" src="/frontend/images/reservation.jpg" alt="" />
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Reservation</h1>
                        <p>Welcome to Stradale Cafe</p>
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
                    <form name="contactForm" id='contact_form' method="post">
                        @method('POST')
                        @csrf
                        <div id="step-1" class="row">

                            <div class="col-md-4 mb10">
                                <h4>Select Date</h4>
                                <input type="date" id="inputdate" name="date"class="form-control"   required />
                            </div>

                            <div class="col-md-4 mb10">
                                <h4>Select Time</h4>
                                <select name="time" id="time" value="" class="form-control">
                                    <option selected disabled>Select time</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                    <option value="20:00">20:00</option>
                                    <option value="21:00">21:00</option>
                                    <option value="22:00">22:00</option>
                                </select>
                            </div>

                            <div class="col-md-4 mb10">
                                <h4>How Many Guests?</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <select name="guests" id="guests" value="" class="form-control">
                                          <option value="1-4">1 - 4</option>
                                          <option value="5-8">5 - 10</option>
                                          <option value="5-8">11 - 20</option>
                                          <option value="20+">More than 20</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>

                        </div>

                        <div id="step-2" class="row">
                            <h4>Enter your details</h4>

                            <div class="col-md-6">
                                <div id='name_error' class='error'>Please enter your name.</div>
                                <div>
                                    <input type='text' name='name' id='name' class="form-control" placeholder="Your Name" required>
                                </div>

                                <div id='name_error' class='error'>Please enter your name.</div>
                                <div>
                                    <input type='text' name='email' id='email' class="form-control" placeholder="Your Email" required>
                                </div>

                                <div id='phone_error' class='error'>Please enter your phone number.</div>
                                <div>
                                    <input type='number' name='phone' id='phone' class="form-control" placeholder="Your Phone" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id='message_error' class='error'>Please enter your message.</div>
                                <div>
                                    <textarea name='message' type='text' id='message' class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <!-- <div class="g-recaptcha" data-sitekey="6LfHDjsdAAAAANyZQJeyAUNIjTPCB-5PodXpdloe"></div> -->
                                <p id='submit' class="mt20">
                                    <input type='submit' id='send_message' value='Submit Form' class="btn btn-main">
                                </p>
                            </div>
                        </div>
                    </form>

                    
                </div>
            </div>
        </div>    
    </section>
    <!-- section close -->

</div>



@endsection

@section('scripts')
<script type="text/javascript">
    $(function(){
        var dtToday = new Date();
     
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
         day = '0' + day.toString();
        var maxDate = year + '-' + month + '-' + day;
        $('#inputdate').attr('min', maxDate);
    });
    </script>
@endsection