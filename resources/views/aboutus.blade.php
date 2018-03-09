

<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Responsive About us page- by Badrrehman</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

<section>

    <div class="container-fluid">

        <div class="row about-bg">
            <div class="col-md-6">

            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 about-bg-layer">


                <div class="">
                    <div class="about-content-box">
                        <div class="about-heading">

                            <h3>ABOUT US</h3>
                            <h4>Company Name</h4>

                        </div>
                        <div class="about-txt">
                            <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
                                Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>

                    <div style="float:right; color:#fff;">
                        Author:: <a href="https://twitter.com/BadrRehman">Abc XYZ</a>
                    </div>

                </div>
            </div>
        </div>

    </div>

</section>

</body>
</html>
<style>
    a
    {

        color:rgb(255, 243, 205);
    }
    h3
    {
        color:rgb(60, 72, 88);
    }

    .about-bg{
        background-image:url(images/abc.jpg);
        /*background-size:cover;*/
        /*background-size: contain;*/
        background-repeat:no-repeat;
        background-attachment:fixed;
    }

    .about-heading > p{
        font-size:24px;
        font-weight:bold;
    }

    .about-txt > p{
        font-size:18px;
        text-align:justify;

    }

    .about-content-box{
        padding-top:100px;
        padding-bottom:100px;
        padding-left:70px;
        padding-right:70px;
        color:#fff;
    }

    .about-bg-layer{
        background-color:rgb(224,56,71);
        height:200%;
        margin:0px;
    }

    @media(max-width:768px) {
        .about-txt>p
     {
         font-size: 30px !important;
     }

    }
</style>