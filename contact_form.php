<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Alphis</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap_contact/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../bootstrap_contact/bower_components/bootstrap/dist/css/navbar.css" rel="stylesheet">
    <link href="../bootstrap_contact/bower_components/jquery-ui/themes/base/jquery-ui.min.css" rel="stylesheet">
    <script src="../bootstrap_contact/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bootstrap_contact/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script src="brian.js"></script>
    <script src="../bootstrap_contact/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<div class="container">
    <div id="warningDiv" class="alert alert-danger"></div>
    <div id="successDiv" class="alert alert-success">
        <strong>Success!</strong> Your message has been sent. We will get back to you ASAP!
    </div>
    <form action="process_contact_form.php" class="form-horizontal" method="post" id="contact">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="well well-sm">
                    <fieldset>
                        <legend class="text-center">Contact us</legend>

                        <!-- Name input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Name:</label>
                            <div class="col-md-9">
                                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                            </div>
                        </div>

                        <!-- DOB input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="dateofbirth">Date of Birth:</label>
                            <div class="col-md-9">
                                <input name="dateofbirth" id="dateofbirth" type="text" placeholder="Your date of birth"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email">Email:</label>
                            <div class="col-md-9">
                                <input name="email" id="email" type="text" placeholder="Your email address"
                                       class="form-control">
                            </div>
                        </div>

                        <!-- Message body -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="message">Message:</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="message" name="message"
                                          placeholder="Please enter your message here" rows="5"></textarea>
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </form>
</div>

</html>