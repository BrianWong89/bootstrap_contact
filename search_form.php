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
    <script src="brian2.js"></script>
    <script src="../bootstrap_contact/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<div class="container">
    <form class="form-inline">
        <div class="form-group">
            <label for="dateFrom">Date From:</label>
            <input name="dateFrom" id="dateFrom" type="text" value="25/12/2017" class="form-control" placeholder="Select Date">
        </div>
        <div class="form-group">
            <label for="dateTo">Date To:</label>
            <input name="dateTo" id="dateTo" type="text" value="26/12/2017" class="form-control" placeholder="Select Date">
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-danger btn-block" id="searchBtn">Search</button>
        </div>
    </form>
</div>

<br><br>

<div class="container">
    <h4>Search Results</h4>
<table id="myTable" class="table table-bordered">
    <thead>
        <tr>
            <th><strong>Name</strong></th>
            <th><strong>Enrolment</strong></th>
        </tr>
    </thead>

    <tbody>

    </tbody>
</table>
</div>