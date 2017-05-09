<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Olympew's World</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
    <link rel="stylesheet" type="text/css" href="myworld.css">
    <style>
        .bg-1 {
            background-color: #474e5d; /* Dark Blue */
            color: #ffffff;
        }
        .container-fluid {
            padding-top: 70px;
            padding-bottom: 70px;
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
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
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
                <li><a href="project.php">Project</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="http://potomaclocal.com/2017/04/30/transitioning-military-members-graduate-uncommon-coders-boot-camp-woodbridge">Discussion of our App!</a></li>
                <li><a href="http://whatsupwoodbridge.com/10-veterans-celebrate-graduation-novas-uncommon-coders-program">Graduation</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid bg-1 text-center">
    <h3>
        <?php
       echo "Projects";
           ?>
           </h3>
    <video width="500" height="400" controls>
        <source src="IMG_1176.mov" type="video/mp4">

        Your browser does not support the video tag.
    </video>
</div>

</body>
</html>