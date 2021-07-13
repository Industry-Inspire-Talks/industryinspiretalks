@extends('layouts.main')

@section('bodyClass', 'nav-nofixed')

@section('style')
    <style>
        .content {
            background: #f7f7f7;
        }

        .map {
            border: 2px solid #1e1e1e;
            box-shadow: 0 0 5px #aaa;
        }

        .contact-details {
            font-size: 14px;
        }

        .contact-details i.fa,
        .contact-details i.fab {
            color: #1bb1dc;

        }

    </style>
@endsection

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <p class="h1 font-weight-light text-center"><b>Contact Us</b></p>
        </div>
    </div>
    <section class="container dummy">

        <div class="row">
            <div class="col-md-4 aos-init aos-animate" data-aos="fade-down-right">
                <iframe class="map" frameborder="0" width="100%" height="300px" allowfullscreen="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.3147061286104!2d72.84734795063662!3d19.093845056309224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9ad626484f5%3A0x6102ad267abeb9d7!2s9%2C%202%2C%20Nanda%20Patkar%20Rd%20Ext%2C%20Navpada%2C%20Vile%20Parle%20East%2C%20Vile%20Parle%2C%20Mumbai%2C%20Maharashtra%20400057!5e0!3m2!1sen!2sin!4v1609412793976!5m2!1sen!2sin"></iframe>

            </div>
            <div class="col-md-8 py-3 contact-details aos-init aos-animate" data-aos="fade-down-left">
                <p class="h6 font-weight-light mb-3 text-justify"><i class="fa fa-location-arrow"></i> <b class="font-weight-bold">Address :</b> 9/2 Dhanashri CHS, Nanda Patkar Road, Vile Parle(E), Mumbai 400057, India</p>
                <p class="h6 font-weight-light mb-3 "><i class="fa fa-phone"></i> <b class="font-weight-bold">Phone :</b>+91 885 081 0515</p>
                <p class="h6 font-weight-light mb-3 "><i class="fa fa-envelope"></i> <b class="font-weight-bold">Email :</b> industryinspiretalks2020@gmail.com</p>
                <p class="h6 font-weight-light mb-3 "><i class="fab fa-linkedin"></i> <b class="font-weight-bold">LinkedIn :</b> <a href="https://www.linkedin.com/company/industry-inspire-talks/" target="blank">IndustryInspireTalks</a></p>
            </div>


        </div>

        </div>
    </section>
@endsection
