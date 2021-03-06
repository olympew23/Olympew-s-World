<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
    <link rel="stylesheet" type="text/css" href="myworld.css">
    <title>Olympew's World</title>
    <style>
        .bg-1 {
            background-color: pink;
            color: #ffffff;
        }
        .container-fluid {
            padding-top: 70px;
            padding-bottom: 70px;
        }
        .bg-2 {
            background-color: #474e5d; /* Dark Blue */
            color: #ffffff;
        }

        h3{
            font-size: large;
            font-style: italic;
            font-family: Arial;
            text-align: center;
        }
        .navbar {
            padding-top: 15px;
            padding-bottom: 15px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 12px;
            letter-spacing: 5px;
        }

        .navbar-nav li a:hover {
            color: #1abc9c !important;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Me</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="home.php">Home</a></li>
                <li><a href="project.php">Project</a> </li>
                <li><a href="contact.php">Contact</a> </li>
                <li><a href="http://potomaclocal.com/2017/04/30/transitioning-military-members-graduate-uncommon-coders-boot-camp-woodbridge">Discussion of our App!</a></li>
                <li><a href="http://whatsupwoodbridge.com/10-veterans-celebrate-graduation-novas-uncommon-coders-program">Graduation</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid bg-1 text-center">
    <h3>
        <?php
       echo "Who Am I?</h3>";
       ?>
    <img src="IMG_1199.jpg" class="img-circle" alt="Img" width="350" height="350">
    <h3>
        <?php
        echo "I am passionate!!";
        ?>
        </h3>
</div>

<div class="container-fluid bg-2 text-center">
    <h3>
        <?php
      echo  "Bio";
      ?>
        </h3>
    <p> 
        <?php
       echo "Olympew Jordan has a true passion for innovative technology, and the inner workings of how things operate. As a veteran spouse, she has spent time managing her household as well as pursuing her undergraduate degree in Information Technology. During that time, she has obtained her CompTia A+, CompTia Security+ certifications. She is currently scheduled for her Certified Ethical Hacker Exam, while being a student in a Java Back-end Programing Bootcamp through NOVA Workforce & The Iron Yard.
         
        During Olympew’s employment in various customer service positions, she realized how much team cohesiveness and cooperation make goals clear to tackle and see unforeseen risk, and threats. She also knows that communication is a key way to leverage the teams experience and knowledge to overcome challenges and obstacles to get the job done.
         
        Olympew has adopted many military values, and the values that resonate with Olympew the most are honor and commitment.";
        ?>
         
    </p>
</div>
<div class="container-fluid bg-3 text-center">
    <h3>
        <?php

       echo "Veteran Graduation"
           ?>
           </h3>
    <div class="row">
        <div class="col-sm-4">

            <img src="IMG_1178.jpg" class="img-responsive" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-4">

            <img src="IMG_11892.jpg" class="img-responsive" style="width:100%" alt="Image" >
        </div>
        <div class="col-sm-4">

            <img src="IMG_1212.jpg" class="img-responsive" style="width:100%" alt="Image">
        </div>
    </div>
</div>
</body>
</html>