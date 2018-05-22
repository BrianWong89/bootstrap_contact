<?php
require_once("vendor/autoload.php");
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    //echo "Hi";
    $fileName = basename($_FILES["file"]["name"]);
    $target_dir = "uploads/";
    $target_file = $target_dir . $fileName;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["file"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if ($imageFileType != "jpg") {
        echo "Sorry, only JPG files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    $resumeName = basename($_FILES["resume"]["name"]);
    $target_file = $target_dir . $resumeName;
    $imageResumeType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $check = finfo_file($finfo, $_FILES['resume']['tmp_name']);
    if ($check == 'application/pdf') {
        echo "File is a PDF";
        $uploadOk = 1;
    } else {
        echo "File is not a PDF.";
        $uploadOk = 0;
    }

// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["resume"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if ($imageResumeType != "pdf") {
        echo "Sorry, only PDF files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["resume"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    if ($uploadOk > 0) {
        DB::insert('guest', array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'website' => $_POST['website'],
            'image' => $fileName,
            'resume' => $resumeName,
            'comments' => $_POST['comments']
        ));
    } else {
        echo "Submit failure. Please try again.";
    }
} ?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<img src="images/logo.jpg" height="100" width="350">
<h1>Guest Book</h1>
<form action="index.php" method="POST" enctype="multipart/form-data">
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
    <input type="submit" value="Submit" name="submit">
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
        echo "<td><img src='uploads/" . $row["image"] . "' height='100' width='100'></td>";
        echo "<td>" . $row["resume"] . "</td>";
        echo "<td>" . $row["comments"] . "</td>";
        ?>
        <td>
            <form action="delete-data.php">
                <input type="submit" value="Delete" name="delete">
            </form>
        </td>
        <?php echo "</tr>";
    } ?>
    </thead>
    <tbody>
    </tbody>
</table>
</html>