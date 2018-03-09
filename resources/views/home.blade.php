<meta charset="utf-8">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

@extends('layouts.app')
@section('content')


    <div class="jumbotron text-center">
    <div class="container">
    <div class="container-fluid">
        <nav id="navbar-top" class="navbar fixed-top navbar-expand-md navbar-dark bg-danger"><nav>

                <!-- Company name shown on mobile -->
                <a  class="navbar-brand" href="#"><span>Company</span>Name</a>
                    <!-- Mobile menu toggle -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler2 navbar-toggler-icon"></span>
                </button>

                <!-- Main navigation items -->
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav mr-auto">
                        <li data-toggle="collapse" data-target=".navbar-collapse.show" class="nav-item">
                            <a style="color:#fff3cd;" href="home">Home</a>
                            &nbsp;
                        </li>
                        <li data-toggle="collapse" data-target=".navbar-collapse.show" class="nav-item">
                            <a style="color:#fff3cd;" href="welcome">Welcome</a>

                        </li>
                        <li data-toggle="collapse" data-target=".navbar-collapse.show" class="nav-item">
                            <a style="color:#fff3cd;" href="test">Test</a>
                            &nbsp;
                        </li>
                        <li data-toggle="collapse" data-target=".navbar-collapse.show" class="nav-item">
                            <a style="color:#fff3cd;" href="boot">Profile</a>
                            &nbsp;
                        </li>



                        <li data-toggle="collapse" data-target=".navbar-collapse.show" class="nav-item">
                            <a style="color:#fff3cd;" href="contact">Contact</a>
                            &nbsp;
                        </li>


                        <li data-toggle="collapse" data-target=".navbar-collapse.show" class="nav-item">

                            <a style="color:#fff3cd;" href="about">About</a>
                            &nbsp;
                        </li>
                        <nav class="navbar navbar-light ">
                            <form class=" form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-primary btnpos" style="text-transform:uppercase;color:white;background-color:#3C4858;" type="button">Go</button>
                            </form>
                        </nav>

                    </ul>

                </div>

            </div>

    </div>
 <div class="panel-body"> @if (session('status'))
            <div class="alert alert-success">{{session('status')}}</div>@endif </div>
    </div>
    <div class="container">

        <div class=" col-lg-6 col-md-3 col-sm-3 col-12" >
            <h2><b>Column 1</b></h2>
            <p class="maintext">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
            </p></div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class=" item active">
                    <img src="images/bgimage.jpg" alt="Los Angeles"> </div>
                <div class="item">
                    <img src="images/bgimage1.png" alt="Chicago"> </div>
                <div class="item">
                    <img src="images/bgimages2.jpg" alt="3"> </div>
                <div class="item">
                    <img src="images/bgimages3.jpg" alt="4"> </div>
                <div class="item">
                    <img src="images/bgimages4.jpg" alt="5"> </div>
                <div class="item">
                    <img src="images/bgimages5.jpg" alt="6"> </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>@endsection

<script>
    function myFunction(){document.getElementById("myDropdown").classList.toggle("show")}window.onclick=function(t){if(!t.target.matches(".dropbtn")){var n,o=document.getElementsByClassName("dropdown-content");for(n=0;n<o.length;n++){var s=o[n];s.classList.contains("show")&&s.classList.remove("show")}}};
</script>
<style>

    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 70%;
        margin: auto;
    }
    @media(max-width:768px) {


        .btnpos
        {
            margin-left: 50%!important;
        }

        #myCarousel
        {
            display:none;
        }


        .maintext
        {
            font-size: 20px;

        }
    }
    .maintext
    {
        font-size:30px;
    }
    #input_img {

        bottom:2px;
        right:5px;
        width:20px;
        height:20px;
        background-color:#761c19;
    }
    input[type=text] {
        margin-left:75%;

        width: 30px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        background-image: url(images/searchicon.png);
        background-position: 10px 10px;
        background-repeat: no-repeat;

        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
    }

    input[type=text]:focus {
        width: 15%;
        color:red
    }
    .carousel {
        margin-left:58%;
        width: 35%;
        padding: 5px;
        overflow: hidden;
        border: 1px solid #ccc;
        border-radius: 3px;
        text-align: center;
    }

    .carousel-control {
        margin-right: -21px;
        margin-left: -21px;
        width:1px;
    }
    .carousel-list {
        white-space: nowrap;
        padding: 0;
        margin: 0;
        transition: transform .3s;
    }
    .carousel-list li {
        white-space: normal;
        display: inline-block;
        width: 100%}
    .carousel-list img {
        width: 100%;
        vertical-align: bottom;
    }
    ul {
        margin-right: 764px;
    }
    .dropbtn {
        background-color: #3498DB;
        color: #fff;
        font-size: 16px;
        border: none;
        cursor: pointer;
        margin-top:-30px;
    }
    .dropbtn:focus, .dropbtn:hover {
        background-color: #2980B9;
    }
    .dropdown {
        position: relative;
        display: inline-block;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        min-width: 160px;
        overflow: auto;
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, .2);
        z-index: 1;
    }
    .dropdown-content a {
        color:#954120;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
    button {
        border-radius: 15px 50px 30px 5px;
        margin-top:30px;
    }
    a{

        border-radius: 15px 50px;
        margin-left: 25%;


  }
    .dropdown a:hover {
        background-color: #ddd;
    }
    .show {
        display: block;
    }
    a:link
    {
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    }
    @media only screen and (max-width:500px) {
        /* For mobile phones: */
        a{

            /*background-position: center;*/
            background-repeat: no-repeat;
            background-size: contain !important;
            background-position:center;
        }
        .btn-new{
            font-size:10px;
            margin-top: 12%!important;
            margin-left:-66%!important;
        }


    }

</style>
