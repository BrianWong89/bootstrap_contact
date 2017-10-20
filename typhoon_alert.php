<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../bootstrap_contact/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bootstrap_contact/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <script src="../bootstrap_contact/bower_components/vue/dist/vue.js"></script>
    <script src="../bootstrap_contact/bower_components/vue-resource/dist/vue-resource.js"></script>
    <script src="../bootstrap_contact/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<div id="app" class="container">
    <div class="row">Temperature:
        <span id="temp">{{currentTemperature}}</span>C
        <br>
        Typhoon Status Alert:
        <span>{{currentAlert}}</span>
    </div>
    <img src="images/typhoon.png" width="800" height="400" v-show="showTyphoonImage">
</div>

<script src="typhoon_vue.js"></script>
</html>