<?php
require_once("vendor/autoload.php");
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<img src="images/logo.jpg" height="100" width="350">
<h1>Guest Book</h1>
<form action="insert-data.php" method="POST" enctype="multipart/form-data">
    <label>Name:</label>
    <input type="input" name="name">
    <br>
    <br>
    <label>Email:</label>
    <input type="input" name="email">
    <br>
    <br>
    <label>Website:</label>
    <input type="input" name="website">
    <br>
    <br>
    <label>Upload Image:</label>
    <input type="file" name="file">
    <br>
    <br>
    <label>Upload Resume:</label>
    <input type="file" name="resume">
    <br>
    <br>
    <label>Comments:</label>
    <textarea name="comments"></textarea>
    <br>
    <br>
    <input type="submit" value="Submit">
</form>
<hr>
<h1>Display Visitor Details</h1>
<table border="1">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Website</th>
        <th>Image</th>
        <th>Resume</th>
        <th>Comments</th>
        <th>Delete</th>
    </tr>
    <?php $results = DB::query("SELECT * FROM guest");
    foreach ($results as $row) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["website"] . "</td>";
        echo "<td><img src=" . $row["file"] . "></td>";
        echo "<td>" . $row["resume"] . "</td>";
        echo "<td>" . $row["comments"] . "</td>";
        ?>
        <td>
            <button value="Delete" id="button">Delete
        </td>
        <?php echo "</tr>";
    } ?>
    </thead>
    <tbody>
    </tbody>
</table>
</html>