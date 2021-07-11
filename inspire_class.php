<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php require_once('components/head.php') ?>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;900&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: white;
        }

        .nav-back {
            background: #fff;
            background: -webkit-linear-gradient(to right, #ffffff, #ffffff, #F2F2F2, #cac8bf);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #ffffff, #ffffff, #F2F2F2, #ADA996);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            overflow: hidden;
            color: #fff;
            top: -10px;
            width: 1900px;
            height: 80px;
        }

        .navbar-brand {
            color: rgb(64, 158, 196);

            left: -300px;
            padding-top: 19px;
            text-align: center;
            float: left;
            margin-left: -140px;
        }

        .nav-back .navbar-brand .img-fluid {
            float: left;
            width: 50px;
            height: 50px;
            margin-top: -3px;
            margin-left: -230px;
        }

        .nav-link {
            color: #000;

            float: right;
            font-size: 16px;

            text-align: center;
            padding-top: 17px;
            text-decoration: none;
        }

        .navbar-toggler {
            outline: none;
        }

        ul {
            float: right;
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        li {
            float: right;
        }

        li a {

            padding: 8px;

        }

        .dropdown {
            float: right;
            overflow: hidden;

        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: black;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .dropdown-content {
            display: block;
            position: absolute;

            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: black;
            color: black;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        @media screen and (max-width: 600px) {

            .nav-back a:not(:first-child),
            .dropdown .dropbtn {
                display: none;
            }

            .nav-back a.icon {
                float: right;
                display: block;
            }
        }

        #hero {
            height: 76vh;
            width: 100%;
            display: flex;
            align-items: center;
            position: relative;
            margin-top: 64px;

        }

        #hero .card {
            position: absolute;
            max-width: 100%;
            height: 76vh;
        }

        #hero .card .cont {
            max-width: 309px;
            /* width: 100%; */
            flex: 0 0 150px;

            margin-top: -460px;
            margin-left: 80px;
            background: #205A96;
            border-radius: 16px;
        }

        #hero .card .cont img {
            max-width: 94%;
            border-radius: 10px;
            margin-left: 9px;
        }

        #hero .card .content {
            margin-left: 680px;
            margin-top: -310px;
        }

        @media (max-width:991px) {
            #hero {
                flex-direction: column;
            }

            #hero .card {
                max-width: 750px;
            }

            #hero .card .cont {
                max-width: 200px;
                margin-top: -480px;
                margin-left: 244px;
            }

            #hero .card .content {
                margin-left: 90px;
                margin-top: 18px;
            }

            #hero .image1 {
                width: 100%;
                height: 100%;
            }

            #services .section-title h2 {
                max-width: 200px;
                margin-left: 90px;

            }
        }

        #hero .image1 {
            width: 100%;
            height: 76vh;
            /* position: absolute; */
            background-size: cover;
            background-repeat: no-repeat;
        }

        #hero .container {
            padding: 80px;
        }

        #hero .card .content a {
            margin-top: 17px;
            max-width: 313px;
            min-width: 70px;
            width: 100%;
            height: 70px;
            background: linear-gradient(58.59deg, #19ACD6 32.99%, #026F8F 85.82%);
            border-radius: 64px;
            font-family: Poppins;
            font-style: normal;
            font-weight: 200;
            font-size: 24px;
            line-height: 55px;
            color: #FFFFFF;
            text-align: center;
        }

        #hero .card .content a:hover {
            transform: scale(0.9, 0.9);
            -webkit-transform: scale(0.9, 0.9);
            -moz-transform: scale(0.9, 0.9);
        }

        #hero .card .content h1 {
            width: 865px;
            height: 98px;
            font-family: Poppins;
            font-style: normal;
            font-weight: bold;
            font-size: 56px;
            line-height: 87px;

            color: #FFFFFF;
        }

        #hero .card .content p {
            width: 865px;
            height: 126px;
            font-family: Poppins;
            font-style: normal;
            font-weight: 500;
            font-size: 27px;
            line-height: 42px;
            color: #FFFFFF;
        }

        #services {
            text-align: center;

            background: #ffff;
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            padding: 1px;
            justify-content: flex-start;

            background: rgba(243, 243, 243, 0.22);
            box-sizing: border-box;
            box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.15);
        }

        #services .fig {
            font-family: Poppins;
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 45px;
            text-align: center;
            margin-left: 137px;
            color: #000000;
        }

        #services .item {
            margin-top: 64px;
            margin-left: 145px;
            width: 200px;
            height: 200px;
        }


        .service .icon i {
            font-size: 32px;
            line-height: 1;
            position: relative;
            color: #47aeff;

        }


        #services .section-title h2 {
            position: absolute;
            margin-top: -32px;
            float: none;
            left: 622px;
            text-align: center;
            font-size: 3em;
            line-height: 1.333333333;

            font-family: Poppins;
            font-style: normal;
            font-weight: 600;

            line-height: 78px;
            color: #413E66;
        }

        #services .container h4 {


            display: flex;
            flex-wrap: wrap;
            position: absolute;
            width: 272px;
            height: 68px;
            font-family: Poppins;
            font-style: normal;
            font-weight: 600;
            font-size: 30px;
            line-height: 45px;
            text-align: center;

            color: #000000;


        }

        #uclasses {


            width: 100%;
            background: #fff;
            border-radius: 10px;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            min-height: 100vh;
        }

        #uclasses h2 {
            position: absolute;
            width: 516px;
            height: 61px;
            left: 75vh;


            font-family: Poppins;
            font-style: normal;
            font-weight: 600;
            font-size: 52px;
            line-height: 78px;
            text-align: center;

            color: #413E66;

        }

        #uclasses .flex-child {
            flex: 1;
            justify-content: space-around;
            background: linear-gradient(117.38deg, #F8F8F8 -11.91%, rgba(248, 248, 248, 0) 101.34%);
            box-shadow: inset 0px px px rgba(0, 0, 0, 0.25);
            top: 108px;
            margin-left: 10px;
            box-sizing: border-box;
            border-radius: 10px;
            border: 4px;
            margin-top: 135px;
        }

        #uclasses .flex-child {
            margin-left: 40px;
        }

        #uclasses .flex-child img {
            width: 300px;
            background: linear-gradient(180deg, #F3F3F3 0%, #FFFFFF 100%);

        }

        #uclasses .image {
            position: absolute;
            left: 0%;
            right: 19.21%;
            top: 33vh;
            bottom: 10.89%
        }

        #uclasses .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            border-radius: .25rem;

        }

        #uclasses .card:hover .do {
            display: block;
        }


        #uclasses .main-btn {
            position: relative;
            max-width: 370px;
            width: 100%;
            min-width: 70px;
            text-align: center;
            height: 55px;
            left: 77vh;
            top: -5vh;
            background: linear-gradient(58.59deg, #19ACD6 32.99%, #026F8F 85.82%);
            border-radius: 64px;
            font-family: Poppins;
            font-style: normal;
            font-weight: 500;
            font-size: 22px;
            line-height: 49px;
            padding-top: 2px;
            color: #F7F7F7;
            transform: matrix(1, 0, -0.01, 1, 0, 0);
        }

        #uclasses .im1 {
            position: absolute;
            left: 97.4%;
            right: 19.21%;
            top: 173vh;
            bottom: 10.89%
        }

        .do {
            position: absolute;
            width: 486px;
            height: 567px;
            left: 340px;
            top: 0px;
            background: #FFFFFF;
            border: 6px solid #FFFFFF;
            box-sizing: border-box;
            box-shadow: 0px 4px 18px rgb(0 0 0 / 15%);
            border-radius: 8px;
            display: none;
        }

        .do p {
            position: absolute;
            width: 393px;
            height: 87px;
            left: 59px;
            top: 26px;

            font-family: Poppins;
            font-style: normal;
            font-weight: bold;
            font-size: 20px;
            line-height: 30px;
            letter-spacing: 0.07em;

            color: #000000;

        }

        .do .d {
            position: absolute;
            width: 393px;
            height: 18px;
            left: 59px;
            top: 95px;

            font-family: Poppins;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 18px;
            /* identical to box height */


            color: #19ACD6;


        }

        .do .g {
            position: absolute;
            width: 392px;
            height: 23px;
            left: 59px;
            top: 113px;

            font-family: Poppins;
            font-style: normal;
            font-weight: 500;
            font-size: 12px;
            line-height: 18px;
            text-align: justify;

            color: #000000;

            opacity: 0.6;

        }

        .do .l {
            position: absolute;
            width: 392px;
            height: 102px;
            left: 59px;
            top: 143px;

            font-family: Poppins;
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 21px;
            text-align: justify;

            color: #000000;
        }

        .do .f {
            position: absolute;
            width: 355px;
            height: 50px;
            left: 96px;
            top: 266px;

            font-family: Poppins;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 18px;
            text-align: justify;

            color: #000000;
        }

        .do .v {
            position: absolute;
            width: 355px;
            height: 50px;
            left: 96px;
            top: 338px;

            font-family: Poppins;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 18px;
            text-align: justify;

            color: #000000;
        }

        .do .r {
            position: absolute;
            width: 355px;
            height: 50px;
            left: 96px;
            top: 410px;

            font-family: Poppins;
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            line-height: 18px;
            text-align: justify;

            color: #000000;
        }

        .do .bo {
            position: absolute;
            width: 231px;
            height: 55px;
            left: 59px;
            top: 499px;

            background: linear-gradient(58.59deg, #19ACD6 32.99%, #026F8F 85.82%);
            border-radius: 64px;
            font-family: Poppins;
            font-style: normal;
            font-weight: 500;
            font-size: 24px;
            line-height: 36px;
            text-align: center;

            color: #F7F7F7;

            transform: matrix(1, 0.01, 0, 1, 0, 0);
        }

        .do .i {
            position: absolute;
            left: 7.95%;
            right: 14.24%;
            top: 75.03%;
            bottom: 22.57%;
            width: 7%;
            height: 7%;
        }

        .do .i1 {
            position: absolute;
            left: 7.95%;
            right: 14.24%;
            top: 62.5%;
            bottom: 22.57%;
            width: 7%;
            height: 7%;
        }

        .do .i2 {
            position: absolute;
            left: 7.95%;
            right: 14.24%;
            top: 49.03%;
            bottom: 22.57%;
            width: 7%;
            height: 7%;
        }

        #uclasses h2:hover .do {
            display: block;
        }

        @media only screen and (max-width: 600px) {
            #uclasses .im1 {
                overflow: hidden;
            }
        }

        @media only screen and (max-width: 600px) {
            #uclasses .image {
                overflow: hidden;
            }
        }

        @media only screen and (max-width: 600px) {
            #pclasses .img {
                overflow: hidden;
            }
        }

        @media only screen and (max-width: 600px) {
            #pclasses .image {
                overflow: hidden;
            }
        }

        #pclasses {

            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-wrap: wrap;

        }

        #pclasses .flex-child {
            flex: 1;
            justify-content: space-around;
            background: linear-gradient(117.38deg, #F8F8F8 -11.91%, rgba(248, 248, 248, 0) 101.34%);
            box-shadow: inset 0px px px rgba(0, 0, 0, 0.25);
            margin-top: 98px;

            box-sizing: border-box;
            border-radius: 10px;
        }

        #pclasses .flex-child img {
            width: 320px;
            height: 440px;
        }

        #pclasses h2 {
            position: absolute;
            max-width: 516px;
            height: 61px;
            left: 75vh;

            font-family: Poppins;
            font-style: normal;
            font-weight: 600;
            font-size: 2.9em;
            line-height: 78px;
            text-align: center;

            color: #413E66;
        }

        #pclasses .image {
            position: absolute;
            left: 0%;
            right: 29.21%;
            top: 280vh;
            bottom: 10.89%;
        }

        #pclasses .im1 {
            position: absolute;
            left: 97.5%;
            right: 29.21%;
            top: 280vh;
            bottom: 10.89%;
        }


        #pclasses .main-btn {
            position: relative;
            max-width: 320px;
            width: 100%;
            text-align: center;
            height: 55px;
            left: 77vh;
            top: -3vh;
            background: linear-gradient(58.59deg, #19ACD6 32.99%, #026F8F 85.82%);
            border-radius: 64px;
            font-family: Poppins;
            font-style: normal;
            font-weight: 500;
            padding-top: 3px;
            font-size: 1.8em;
            line-height: 49px;
            color: #F7F7F7;
            transform: matrix(1, 0, -0.01, 1, 0, 0);

        }

        .why {
            width: 90%;
            min-height: 100vh;
            margin-left: 80px;
            background: #EAF2FF;
            border-radius: 16px
        }

        .why h2 {

            max-width: 1420.73px;
            height: 74px;
            left: auto;
            padding-top: 32px;
            text-align: center;
            font-family: Poppins;
            font-style: normal;
            font-weight: bold;
            font-size: 3em;
            line-height: 64px;
            text-align: center;

            color: #413E66;
        }

        .why .row {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
            justify-content: space-around;
        }

        .why .column {
            display: flex;
            flex-direction: column;
            flex-basis: 100%;
            flex: 1;
            margin-top: 14vh;

            margin-right: 105px;
            margin-left: 130px;
            font-family: Poppins;
            font-style: normal;
            font-weight: normal;
            font-size: 23px;
            line-height: 30px;
            text-align: left;
            background: #FFFFFF;
            border-radius: 256px;
        }

        .why img {
            width: 30px;
            padding-top: 16px;
            object-fit: contain;
            align-self: flex-start;
            float: left;
        }

        .why p {
            margin-left: 45px;
        }

        .time {
            display: flex;


            margin-left: 32px;
            flex-direction: row;
            flex-wrap: wrap;
            min-height: 100vh;
        }

        .time img {
            width: 140px;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0));
        }

        .time .flex-child {
            flex: 1;
            justify-content: space-around;
            margin-top: 110px;

            background: #F9F9F9;
            border: 4px solid #FFFFFF;
            box-sizing: border-box;
            padding-left: 35px;
            margin-left: -15px;
            box-shadow: 0px 4px 10px rgb(0 0 0 / 10%), inset 0px 0px 19px rgb(0 0 0 / 5%);
            border-radius: 10px;
        }


        .time .vector {
            width: 60px;
            height: 70px;
            margin-top: 225px;
        }

        @media only screen and (max-width: 600px) {
            .time .vector {
                transform: rotate(90deg);
            }
        }

        .time h4 {
            font-family: Poppins;
            font-style: normal;
            font-weight: bold;
            font-size: 48px;
            line-height: 56px;
            text-align: left;
            color: #000000;
            opacity: 0.3;

        }

        .time h2 {
            position: absolute;
            max-width: 1420.73px;
            height: 74px;
            left: 80vh;

            text-align: center;
            font-family: Poppins;
            font-style: normal;
            font-weight: bold;
            font-size: 2.6em;
            line-height: 64px;
            text-align: center;

            color: #413E66;
        }

        .time p {
            font-family: Poppins;
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 36px;
            text-align: center;
            margin-left: -5px;
            color: #000000;
        }

        .mb {

            width: 100%;
            min-height: 100vh;
            display: flex;
            background: linear-gradient(117.38deg, #F8F8F8 -11.91%, rgba(248, 248, 248, 0) 101.34%);
            box-shadow: inset 0px 10px 40px rgba(0, 0, 0, 0.25);
            justify-content: space-around;
        }

        .mb .imagebox {
            width: 50%;
            float: left;
            height: 300px;
            position: relative;
        }

        .mb .imagebox img {
            position: absolute;
            top: 120%;
            width: 100%;
            transform: translateY(-50%);
            overflow: hidden;
            border-radius: 63px;
        }

        .mb .xo {
            width: 50%;
            height: 600px;
            float: right;
            position: relative;
            overflow: hidden;


        }

        .mb h2 {
            font-family: Poppins;
            font-style: normal;
            font-weight: bold;
            font-size: 3em;
            line-height: 64px;

            color: #413E66;
        }

        .mb .textbox {
            position: absolute;
            text-align: left;
            width: 100%;
            padding: 20px;
            top: 50%;
            transform: translateY(-50%);
            margin-left: 65px;
            ;
        }

        .mb p {
            font-family: Poppins;
            font-style: normal;
            font-weight: normal;
            font-size: 23px;
            line-height: 34px;
            color: #000000;
            text-align: left;

        }

        @media only screen and (max-width: 700px) {

            .imagebox,
            .textbox-cont {
                width: 100%;
                height: 200px;
            }
        }

        .mb a {
            position: absolute;
            font-family: Poppins;
            font-style: normal;
            font-weight: 500;
            font-size: 24px;
            line-height: 45px;
            text-align: center;
            color: #FFFFFF;
            width: 280px;
            height: 57px;
            margin-left: -50px;
            margin-top: 645px;
            transform: rotate(0.28deg);
            background: linear-gradient(58.59deg, #19ACD6 32.99%, #026F8F 85.82%);
            border-radius: 64px;
        }

        .freq {
            margin: 0;
            padding: 0;
            font-family: 'Hind', sans-serif;
            background: #fff;
            color: #4d5974;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            min-height: 100vh;
            background: #fcfafa;
            width: 100%;
        }

        .freq .accordion {
            margin-top: 105px;
        }

        .freq .accordion-item {
            padding-top: 29px;
        }

        .freq .container {
            margin: 0 auto;
            padding: 4rem;
            width: 85rem;
        }

        .freq h2 {
            position: absolute;
            max-width: 778px;
            height: 61px;
            left: 60vh;

            font-family: Poppins;
            font-style: normal;
            font-weight: 600;
            font-size: 3em;
            line-height: 78px;
            text-align: center;

            color: #413E66;
        }

        .freq .accordion a {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            padding: 1rem 3rem 1rem 1rem;
            font-family: Poppins;
            font-style: normal;
            font-weight: 500;
            font-size: 25px;
            line-height: 54px;
            color: #000000;
            background: #EAF2FF;
            border: 3px solid #FFFFFF;
            box-sizing: border-box;
            box-shadow: 4px 6px 10px rgba(0, 0, 0, 0.05);
            border-radius: 10px;

        }

        .freq .accordion a:hover,
        .accordion a:hover::after {
            cursor: pointer;
            color: black;
        }

        .freq .accordion a:hover::after {
            border: 1px solid black;
        }

        .freq .accordion a.active {
            color: black;
            border-bottom: 1px solid black;
        }

        .freq .accordion a::after {
            font-family: 'Ionicons';
            content: '\f2c7';
            position: absolute;
            float: right;
            right: 1rem;
            font-size: 2rem;
            color: black;
            padding: 5px;
            width: 60px;
            height: 60px;

            text-align: center;
        }

        .freq .accordion a.active::after {
            font-family: 'Ionicons';
            content: '\f2d7';
            color: black;

        }

        .freq .accordion .content {
            opacity: 0;
            padding: 0 1rem;
            max-height: 0;
            border-bottom: 1px solid #e5e5e5;
            overflow: hidden;
            clear: both;
            -webkit-transition: all 0.2s ease 0.15s;
            -o-transition: all 0.2s ease 0.15s;
            transition: all 0.2s ease 0.15s;
            font-family: Poppins;


        }

        .freq .accordion .content p {
            font-style: normal;
            font-weight: normal;
            font-size: 24px;
            line-height: 36px;
            text-align: justify;
            color: #000000;
            background: #EAF2FF;
        }

        .freq .accordion .content.active {
            opacity: 1;
            padding: 1rem;
            max-height: 100%;
            -webkit-transition: all 0.35s ease 0.15s;
            -o-transition: all 0.35s ease 0.15s;
            transition: all 0.35s ease 0.15s;
        }

        .footer {
            background: rgb(83, 154, 247);
            height: 300px;
            width: 100%;
            color: white;
        }

        .footer .footer-bottom {

            background: rgb(19, 64, 90);
            height: 50px;
            color: white;
            text-align: center;
            position: absolute;
            left: 0px;
            margin-top: 50px;
            padding-top: 10px;
            width: 100%;
        }

        .footer .footer-content {
            border: 1px;
            height: 250px;

        }

        .footer .footer-content .footer-info h3 {
            font-size: 34px;
            color: white;
            margin: 0 0 20px 0;
            padding-top: 17px;
            padding-left: 30px;
            line-height: 1;
            font-family: sans-serif;
        }

        .footer .footer-content .footer-info p {
            font-size: 17px;
            line-height: 28px;
            margin-bottom: 0;
            padding-left: 30px;
            font-family: sans-serif;
            color: white;
        }

        .footer .footer-content .footer-links h4 {
            font-size: 28px;
            font-weight: bold;
            position: relative;
            padding-top: 10px;
            padding-left: -20px;
        }


        .footer .footer-content .footer-newsletter {
            margin-bottom: 30px;
            background-color: rgb(4, 70, 109);

            border-radius: 15px;
            width: 15px;
            height: 180px;
            margin-left: -30px;
            margin-top: 41px;
        }

        .footer .footer-content .footer-newsletter h4 {
            font-size: 28px;
            font-weight: bold;
            position: relative;
            padding-top: 5px;
            margin-left: 47px;
            padding-left: 30px;
        }

        .footer .footer-content .footer-newsletter p {
            font-size: 17px;
            line-height: 28px;
            margin-left: 47px;
            margin-bottom: 0;
            padding-left: 30px;
            font-family: sans-serif;
            color: white;
        }

        .footer .footer-content form {
            margin-top: -20px;

        }

        .footer .footer-content .footer-newsletter input[type="email"] {
            border: 0;
            margin-left: 17px;
            margin-top: 37px;
            padding: 12px 12px;
            width: 70%;
            border-radius: 5px;
        }

        .footer .footer-content .footer-newsletter input[type="submit"] {
            border: 0;
            padding: 12px 12px;
            width: 19%;
            text-align: center;
            transition: 0.3s;
            cursor: pointer;
            background-color: black;
            color: white;
        }
    </style>

</head>

<body class="nav-nofixed">
    <?php require_once('components/preloader.php') ?>

    <main>
        <?php require_once('components/navbar.php') ?>

        <section id="hero">
            <div class="card">
                <img class="image1" src="C:\Users\shree\Downloads\Rectangle 30.png">
                <div class="cont">
                    <img src="C:\Users\shree\Downloads\bg.jpg">
                </div>

                <div class="content">
                    <h1>What is Inspire Class?</h1>
                    <p>Inspire Class is an Interactive and Experiential Learning<br> concept led by Industry Experts to
                        enhance
                        your<br> Foundational Knowledge. </p>
                    <a href="#uclasses" class="btn">APPLY NOW</a>
                </div>

        </section>
        <section id="services" class="services mt-5 mb-3 py-3">

            <div class="section-title">
                <h2 class="text-center">Focus Areas</h2>

            </div>

            <figure>
                <img class="item" src="C:\Users\shree\Downloads\Ellipse 1.png" />
                <figcaption class="fig">Technology</figcaption>
            </figure>

            <figure><img class="item" src="C:\Users\shree\Downloads\Ellipse 2.png" />
                <figcaption class="fig">Management</figcaption>
            </figure>

            <figure> <img class="item" src="C:\Users\shree\Downloads\Ellipse 3.png" />
                <figcaption class="fig">Finance</figcaption>
            </figure>

            <figure><img class="item" src="C:\Users\shree\Downloads\Ellipse 4.png" />
                <figcaption class="fig">Entrepreneurship</figcaption>
            </figure>

        </section>

        <section id="uclasses" class="services mt-5 mb-3 py-3">

            <div class="section-title">
                <h2 class="text-center">Upcoming Classes</h2>

            </div>

            <div class="card">
                <a href="#"><img class="image" src="C:\Users\shree\Downloads\Vector.png"></a>
                <div class="flex-child 1" id="foo">

                    <img src="C:\Users\shree\Downloads\Rectangle 19.png">
                </div>
                <div class="do">
                    <p>NodeJS - The Complete Guide (MVC, REST APIs, GraphQL, Deno)</p>
                    <p class="d">26th April, 2021 16:00 IST</p>
                    <p class="g">8 Total Hours . All Level . Subtitles </p>
                    <p class="l">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip ex
                        ea commodo consequat.</p>
                    <img class="i2" src="C:\Users\shree\Downloads\Vector (4).png">
                    <p class="f">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore
                        et dolore magna aliqua.</p>
                    <img class="i1" src="C:\Users\shree\Downloads\Vector (4).png">
                    <p class="v">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore
                        et dolore magna aliqua.</p>
                    <img class="i" src="C:\Users\shree\Downloads\Vector (4).png">
                    <p class="r">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore
                        et dolore magna aliqua.</p>
                    <button class="bo">Enroll Now</button>
                </div>


            </div>
            <div class="flex-child 2">
                <img src="C:\Users\shree\Downloads\Rectangle 21 (6).png">
            </div>


            <div class="flex-child 3">
                <img src="C:\Users\shree\Downloads\Rectangle 21 (6).png">
            </div>


            <div class="flex-child 4">
                <img src="C:\Users\shree\Downloads\Rectangle 21 (7).png">
            </div>
            <a href="#"><img class="im1" src="C:\Users\shree\Downloads\Vector (3).png"></a>
            <a href="" class="main-btn">View All Upcoming Classes</a>
        </section>


        <section id="pclasses" class="services mt-5 mb-3 py-3">

            <div class="section-title">
                <h2 class="text-center">Past Classes</h2>

            </div>
            <a href="#"><img class="image" src="C:\Users\shree\Downloads\Vector.png"></a>

            <div class="k" style="position: relative;
        max-width: 250px;
        width: 100%;
        height: 186px;
       top:-317vh;
       margin-left: -102px;
        background: linear-gradient(180deg, #FFFFFF -14.68%, #FFFFFF 186.69%);
        border-radius: 10px; display: flex;
flex-wrap:wrap;
 ">
                <img class="i" style="position: absolute;
        position: absolute;
    width: 280px;
    height: 123.93px;
    left: 187px;
    top: 2488.13px;
    border-radius: 8px" src="C:\Users\shree\Downloads\Rectangle 20.png">
                <p style=" position: absolute;
          width: 272px;
          height: 47px;
          left: 187px;
          top: 2608px;
          
          font-family: Poppins;
          font-style: normal;
          font-weight: bold;
          font-size: 20px;
          line-height: 30px;
          letter-spacing: 0.07em;
          
          color: #000000;">NodeJS - The Complete Guide (MVC, REST APIs, GraphQL, Deno)</p>
                <p style="position: absolute;
          width: 280px;
          height: 10.81px;
          left: 187px;
          top: 2691.79px;
          
          font-family: Poppins;
          font-style: normal;
          font-weight: 600;
          font-size: 18px;
          line-height: 27px;
          
          color: rgba(0, 0, 0, 0.75);" class="d">Omkar Sindhe(Founder & CEO)</p>
                <p style="   position: absolute;
          width: 280px;
          height: 13px;
          left: 187px;
          top: 2715px;
          
          font-family: Poppins;
          font-style: normal;
          font-weight: 500;
          font-size: 12px;
          line-height: 18px;
          text-align: justify;
          
          color: #19ACD6;
          
          opacity: 0.6;
              " class="g">8 Total Hours . All Level . Subtitles </p>
                <p style=" position: absolute;
          width: 280px;
          height: 117px;
          left: 187px;
          top: 2732px;
          
          font-family: Poppins;
          font-style: normal;
          font-weight: normal;
          font-size: 12px;
          line-height: 18px;
          text-align: justify;
          
          color: #000000;" class="l">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <button style="position: absolute;
          width: 245px;
          height: 47px;
          left: 202px;
          top: 2855px;
          
          background: linear-gradient(58.59deg, #19ACD6 32.99%, #026F8F 85.82%);
          border-radius: 10px;
          
          font-family: Poppins;
          font-style: normal;
          font-weight: 500;
          font-size: 18px;
          line-height: 27px;
          
          color: #F7F7F7;
          
          transform: matrix(1, 0, -0.01, 1, 0, 0);
          " class="bo">View Class Recording</button>

            </div>

            <div class="flex-child 1">
                <img style="margin-left: 260px;" src="C:\Users\shree\Downloads\Rectangle 21 (2).png">
            </div>

            <div class="flex-child 3">
                <img style="margin-left: 39px;" src="C:\Users\shree\Downloads\Rectangle 21 (2).png">
            </div>

            <div class="flex-child 4">
                <img src="C:\Users\shree\Downloads\Rectangle 21 (2).png">
            </div>

            <a href="#"><img class="im1" src="C:\Users\shree\Downloads\Vector (3).png"></a>
            <a href="" class="main-btn">View All</a>
        </section>

        <section class="why">
            <h2>Why should you attend?</h2>
            <div class="row">
                <div class="column">
                    <div class="flex-child para1">
                        <img class="i1" src="C:\Users\shree\Downloads\Vector (1).png">

                        <p class="p1">Learn and Network with Industry Experts</p>
                    </div>
                </div>
                <div class="column">
                    <div class="flex-child para2">
                        <img class="i2" src="C:\Users\shree\Downloads\Vector (1).png">
                        <p class="p2">Develop your foundational knowledge in your focus area</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <div class="flex-child para3">
                        <img class="i3" src="C:\Users\shree\Downloads\Vector (1).png">
                        <p class="p3">Grow yourself <br>professionally</p>
                    </div>
                </div>
                <div class="column">
                    <div class="flex-child para4">
                        <img class="i3" src="C:\Users\shree\Downloads\Vector (1).png">
                        <p class="p4">Ace your industry<br> careers in style</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <div class="flex-child para5">
                        <img class="i3" src="C:\Users\shree\Downloads\Vector (1).png">
                        <p class="p5">Seek mentorship from industry Leaders</p>
                    </div>
                </div>
                <div class="column">
                    <div class="flex-child para6">
                        <img class="i3" src="C:\Users\shree\Downloads\Vector (1).png">
                        <p class="p6">Become industry Ready in your focus Area</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="time">
            <h2>Class Timeline</h2>
            <div class="flex-child 1">
                <img src="C:\Users\shree\Downloads\5221913 1.png">
                <p class="p1">Kickoff & Basic<br>
                    Idea Development<br>
                    Phase ( 3hrs )</p>
                <h4 class="w">week 0</h4>
            </div>
            <img class="vector" src="C:\Users\shree\Downloads\Vector (2).png">
            <div class="flex-child 2">
                <img src="C:\Users\shree\Downloads\5221913 1 (1).png">
                <p class="p2">Ideation and<br>
                    Conecept Building<br>
                    Phase ( 3hrs )</p>
                <h4 class="w">week 1</h4>
            </div>
            <img class="vector" src="C:\Users\shree\Downloads\Vector (2).png">
            <div class="flex-child 3">
                <img src="C:\Users\shree\Downloads\5221913 1 (2).png">
                <p class="p3">Problem <br>Statement<br>
                    Allotments Phase<br>
                    ( 3hrs )</p>
                <h4 class="w">week 2</h4>
            </div>
            <img class="vector" src="C:\Users\shree\Downloads\Vector (2).png">
            <div class="flex-child 4">
                <img src="C:\Users\shree\Downloads\5221913 1 (3).png">
                <p class="p4">Problem/Doubt<br> Solving Phase
                    <br>( 3hrs )
                </p>
                <h4 class="w">week 3</h4>
            </div>
            <img class="vector" src="C:\Users\shree\Downloads\Vector (2).png">
            <div class="flex-child 5">
                <img src="C:\Users\shree\Downloads\5221913 1 (4).png">
                <p class="p5">Idea<br> Presentation<br> Phase ( 3hrs )</p>
                <h4 class="w">week 4</h4>
            </div>
            <img class="vector" src="C:\Users\shree\Downloads\Vector (2).png">
            <div class="flex-child 6">
                <img src="C:\Users\shree\Downloads\5221913 1 (5).png">
                <p class="p6">Graduation<br> Day<br> ( 3hrs )</p>
                <h4 class="w">week 5</h4>
            </div>

        </section>
        <section class="mb">
            <div class="imagebox">
                <img src="C:\Users\shree\Downloads\WhatsApp Image 2021-04-09 at 1.11 1.png">
            </div>
            <div class="xo">
                <div class="textbox">
                    <h2>Certificate of Graduation</h2>
                    <p>After you complete the class, you’ll get your<br> verified Certificate of Graduation to Showcase
                        <br>the
                        things you learntout of Inspire Class.
                    </p>

                </div>

            </div>
            <a href="#">Apply Now</a>
        </section>

        <section class="freq">
            <div class="container">

                <h2>Frequently Asked Questions</h2>

                <div class="accordion">
                    <div class="accordion-item">
                        <a>1.Who is Eligible to Apply?</a>
                        <div class="content">
                            <p>All undergraduate students and young professionals with a<br> maximum of 2 years of
                                experience who are
                                looking to build <br>foundational knowledge or to explore a particular domain are<br>
                                eligible to apply
                                for our programs. The final decision of enrolment
                                would be taken by our team after evaluating all the candidates.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <a> 2.Who is going to take the class?</a>
                        <div class="content">
                            <p>The classes would be taken by Industry experts from respective domains. In addition to
                                educating the
                                selected students, Industry experts would also provide mentorship wherever required.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <a>3.What is the format of the class and cohort?</a>
                        <div class="content">
                            <p>All the classes would be virtual-only. Each cohort will consist of 60 students from diverse
                                backgrounds.
                            </p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <a>4.what is the duration of the program?</a>
                        <div class="content">
                            <p>The duration of the program is 5 weeks. One is required to attend 3 hours of class every
                                weekend for the
                                entire duration of the program.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <a> 5.Is the program paid?</a>
                        <div class="content">
                            <p>No. Our programs are not paid.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <a>6.What are the additional perks?</a>
                        <div class="content">
                            <p>As our organisation requires interns, program managers and other employees,
                                we will consider all of you as our first preference to work with. In Addition to this,
                                you will get lifetime access to our community and network.</p>
                        </div>
                    </div>
                </div>

            </div>

            <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
            <script>
                const items = document.querySelectorAll(".accordion a");

                function toggleAccordion() {
                    this.classList.toggle('active');
                    this.nextElementSibling.classList.toggle('active');
                }

                items.forEach(item => item.addEventListener('click', toggleAccordion));
            </script>
        </section>




        <!-- Footer Section  -->
        <?php require_once('components/footer.php') ?>

        <?php require_once('components/foot.php') ?>
    </main>

</body>


</html>