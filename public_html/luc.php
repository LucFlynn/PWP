<!DOCTYPE html>

<!-- PWp Main layout
  -- Author Luc Flynn -->

<head>
    <meta charset="utf-8"/>
    
    <title> Luc Flynn </title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

    <!-- jQuery Form, Additional Methods, Validate -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous";>

    <!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Font Awesome -->
    <link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css"/>

    <!-- jQuery v3.0 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js" type="text/javascript"></script>
    <!-- jQuery Form, Additional Methods, Validate -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.1/jquery.form.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Your JavaScript Form Validator -->
    <script src="js/form-validate.js"></script>

    <!-- Google reCAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

    <body>

    <!--Navigation-->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
                <p class="navbar-text">Welcome to my wonderful delusions</p>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a> </li>
                    <li><a href="#">About</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Destinations <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#section_one">Story</a> </li>
                            <li><a href="#">Philosophy</a> </li>
                            <li><a href="#">Other team members</a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header>
        <div class="jumbotron">
            <h1>I am Luc Flynn!</h1>
        </div>
    </header>
    


    <div class="contents" >
        <div class="section_one" >
            <p> Aug 2009: Headed to university at New Mexico state</p>
            <p> Aug 2012: Foreign exchange at Lyon 3 in Lyon, France. Learned a lot about international politics, business, and French. Oui, Je puex parle fracais.</p>
            <p> June 2013: Came home from France (sad face) and hustled taking 21 credits in a semester to graduate in Dec 2013.</p>
            <p> Dec 2013: Immidiatly realized I wanted more education, was scared of the intellectual death I percieved as working for a company. Should've known what that meant right there.</p>
            <p> Jan 2014 I walked into Central New Mexico Community College and Decided to Pursue Engineering</p>
            <p> Sept 2016: Decided that's enough university. It wasn't serving me and I realized I needed to try my hand at business ship or else my soul would die. </p>
            <p> Sept 2016: Started my first eCommerce buisiness with a buddy and $40</p>
            <p> Jan 2017: The eCommerce buisness is grossing $1,000 a month. </p>
        </div>
    </div>
    </body>
                    <div class="gallery">
                    <img src="css/emily.jpeg" alt = "girl">
                <img src="css/bikenCoffee.jpeg" alt = "bike and coffee">
            <img src="css/goal.jpeg" alt = "computer">
                    </div>



<!-- Begin contact form -->

    <form id="contact-form" action="php/mailer.php" method="post">
        <div class="form-group">
            <label for="name">Name <span class="text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email <span class="text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </div>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
            </div>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-comment" aria-hidden="true"></i>
                </div>
                <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"> </textarea>
            </div>
        </div>
        
        <!-- reCAPTCHA -->
        <div class="g-recaptcha" data-sitekey="6LfAWyIUAAAAAOFXxCMf2U-Y6KX64cVXjP_k6KJ-"></div>
        
        <button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
        <button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
    </form>

<!-- empty area for form error/success output -->
<div class="row">
    <div class="col-xs-12">
        <div id="output-area"></div>
    </div>
</div>


</html>
