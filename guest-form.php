<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/JavaScript">
        function showInput() {
            var name = document.getElementById('name').value;
            display_name.innerHTML = name;
            document.getElementById('name').value = '';
            var email = document.getElementById("email").value;
            display_email.innerHTML = email;
            document.getElementById('email').value = '';
            var website = document.getElementById("website").value;
            display_website.innerHTML = website;
            document.getElementById('website').value = '';
            var comments = document.getElementById("comments").value;
            display_comments.innerHTML = comments;
            document.getElementById('comments').value = '';
        }
    </script>
    <script>
        $(document).ready(function () {
            $("button").click(function () {
                $("#display_name").remove();
                $("#display_email").remove();
                $("#display_website").remove();
                $("#display_image").remove();
                $("#display_comments").remove();
            });
        });
    </script>
</head>
<h1>Guest Book</h1>
<form action="" method="POST" enctype="multipart/form-data">
    <label>Name:</label>
    <input type="input" name="name" value="" id="name">
    <br>
    <br>
    <label>Email:</label>
    <input type="input" name="email" value="" id="email">
    <br>
    <br>
    <label>Website:</label>
    <input type="input" name="website" value="" id="website">
    <br>
    <br>
    <label>Upload Image:</label>
    <input type="file" name="file">
    <br>
    <br>
    <label>Comments:</label>
    <textarea name="comments" id="comments"></textarea>
    <br>
    <br>
    <input type="button" value="Submit" onclick="showInput()">

</form>
<hr>
<h1>Display Visitor Details</h1>
<table border="1">
    <thead>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Website</td>
        <td>Image</td>
        <td>Comments</td>
        <td>Delete</td>
    </tr>
    <tr>
        <td>1</td>
        <td><span id="display_name"></span><br></td>
        <td><span id="display_email"></span><br></td>
        <td><span id="display_website"></span><br></td>
        <td><span id="display_image"></span></td>
        <td><span id="display_comments"></span></td>
        <td>
            <button value="Delete" id="button">Delete
        </td>
    </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</html>