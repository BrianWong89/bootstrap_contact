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
    <link href="../bootstrap_contact/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css"
          rel="stylesheet">
    <script src="../bootstrap_contact/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bootstrap_contact/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script src="../bootstrap_contact/bower_components/vue/dist/vue.js"></script>
    <script src="../bootstrap_contact/bower_components/vue-resource/dist/vue-resource.js"></script>
    <script src="../bootstrap_contact/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body>

<div id="app" class="container">
    <select class="selectpicker" title="Race" id="race">
        <option>Any Race</option>
        <option>Chinese</option>
        <option>Malay</option>
        <option>Indian</option>
        <option>Others</option>
    </select>
    <br>
    <br>
    <select class="selectpicker" title="Minimum Age" id="minAge">
        <option>Any Age</option>
        <option>10</option>
        <option>20</option>
        <option>30</option>
        <option>40</option>
        <option>50</option>
        <option>60</option>
        <option>70</option>
        <option>80</option>
        <option>90</option>
        <option>100</option>
    </select>
    <br>
    <br>
    <select class="selectpicker" title="Maximum Age" id="maxAge">
        <option>Any Age</option>
        <option>10</option>
        <option>20</option>
        <option>30</option>
        <option>40</option>
        <option>50</option>
        <option>60</option>
        <option>70</option>
        <option>80</option>
        <option>90</option>
        <option>100</option>
    </select>
    <br>
    <br>
    <div class="form-group">
        <button type="button" class="btn btn-info" v-on:click="pressSearchBtn()">Search
    </div>
</div>

</body>

<script src="../bootstrap_contact/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="hospital_vue.js"></script>
</html>