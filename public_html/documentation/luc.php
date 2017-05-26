<!DOCTYPE html>

<!-- PWp Main layout
  -- Author Luc Flynn -->

<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8"/>
    <link type="text/css" href="css/style.css" rel="stylesheet" />
    <title> Luc Flynn </title>
    <link type="js" href="../javascript/validator.js" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

    <!-- jQuery Form, Additional Methods, Validate -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

    <!-- Your JavaScript Form Validator -->
    <script src="js/form-validate.js"></script>

    <!-- Google reCAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<main>
    <h1>Luc Flynn</h1>
</main>

    <body>

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

<!-- Begin contact form -->

    <form id="contact-form" action="mailer.php" method="post">
        <div class="form-group">
            <label for="name">Name <span class="text-danger">*</span></label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name";
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
                <textarea type="text" class="form-control" rows="5 id="message" name="message" placeholder="Message (2000 characters max)"> </textarea>
            </div>
        </div>
        
        <!-- reCAPTCHA -->
        <div class="g-recapthca" data-sitekey="6LfAWyIUAAAAAOFXxCMf2U-Y6KX64cVXjP_k6KJ-"></div>
        
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
