<?php
require_once("vendor/autoload.php");

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST["submit"])) {
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    if (empty($_POST["website"])) {
        $websiteErr = "Website is required";
    } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = "Invalid URL";
        }
    }
    if (empty($_POST["comment"])) {
        $comment = "Comment is required";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    //Upload image files code
    $fileName = basename($_FILES["file"]["name"]);
    $target_dir = "uploads/";
    $target_file = $target_dir . $fileName;
    $uploadImageOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadImageOk = 1;
    } else {
        $notImage = "File is not an image.";
        $uploadImageOk = 0;
    }

// Check if file already exists
    if (file_exists($target_file)) {
        $imageExists = "Sorry, image file already exists.";
        $uploadImageOk = 0;
    }
// Check file size
    if ($_FILES["file"]["size"] > 500000) {
        $imageSize = "Sorry, your image file is too large.";
        $uploadImageOk = 0;
    }
// Allow certain file formats
    if ($imageFileType != "jpg") {
        $imageFormat = "Sorry, only JPG files are allowed.";
        $uploadImageOk = 0;
    }
// Check if $uploadImageOk is set to 0 by an error
    if ($uploadImageOk == 0) {
        $imageUpload = "Sorry, your image file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            //echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
        } else {
            $imageUploadStatus = "Sorry, there was an error uploading your image file.";
        }
    }

    //Upload PDF files code
    $resumeName = basename($_FILES["resume"]["name"]);
    $target_file = $target_dir . $resumeName;
    $imageResumeType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if PDF file is a actual PDF file or fake PDF file
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $check = finfo_file($finfo, $_FILES['resume']['tmp_name']);
    if ($check == 'application/pdf') {
        //echo "File is a PDF";
        $uploadPDFOk = 1;
    } else {
        $notPDF = "File is not a PDF.";
        $uploadPDFOk = 0;
    }

// Check if PDF file already exists
    if (file_exists($target_file)) {
        $existPDF = "Sorry, PDF file already exists.";
        $uploadPDFOk = 0;
    }
// Check file size
    if ($_FILES["resume"]["size"] > 500000) {
        $sizePDF = "Sorry, your PDF file is too large.";
        $uploadPDFOk = 0;
    }
// Allow certain file formats
    if ($imageResumeType != "pdf") {
        $typePDF = "Sorry, only PDF files are allowed.";
        $uploadPDFOk = 0;
    }
// Check if $uploadPDFOk is set to 0 by an error
    if ($uploadPDFOk == 0) {
        $uploadPDF = "Sorry, your PDF file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
            //echo "The file " . basename($_FILES["resume"]["name"]) . " has been uploaded.";
        } else {
            $uploadPDFStatus = "Sorry, there was an error uploading your PDF file.";
        }
    }
    if ($uploadImageOk > 0 && $uploadPDFOk > 0) {
        DB::insert('guest', array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'website' => $_POST['website'],
            'image' => $fileName,
            'resume' => $resumeName,
            'comments' => $_POST['comments']
        ));
    } else {
        $errorMessage = "Posting failed. Please try again.";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>
<img src="images/logo.jpg" height="100" width="350">
<div class="row">
    <?php
    if (strlen($notImage) > 0) {
        echo "<strong>Error Message:</strong> " . $notImage . "<br>";
    } else if (strlen($imageExists) > 0) {
        echo "<strong>Error Message:</strong> " . $imageExists . "<br>";
    } else if (strlen($imageSize) > 0) {
        echo "<strong>Error Message:</strong> " . $imageSize . "<br>";
    } else if (strlen($imageFormat) > 0) {
        echo "<strong>Error Message:</strong> " . $imageFormat . "<br>";
    } else if (strlen($imageUpload) > 0) {
        echo "<strong>Error Message:</strong> " . $imageUpload . "<br>";
    } else if (strlen($imageUploadStatus) > 0) {
        echo "<strong>Error Message:</strong> " . $imageUploadStatus . "<br>";
    } else if (strlen($notPDF) > 0) {
        echo "<strong>Error Message:</strong> " . $notPDF . "<br>";
    } else if (strlen($existPDF) > 0) {
        echo "<strong>Error Message:</strong> " . $existPDF . "<br>";
    } else if (strlen($sizePDF) > 0) {
        echo "<strong>Error Message:</strong> " . $sizePDF . "<br>";
    } else if (strlen($typePDF) > 0) {
        echo "<strong>Error Message:</strong> " . $typePDF . "<br>";
    } else if (strlen($uploadPDF) > 0) {
        echo "<strong>Error Message:</strong> " . $uploadPDF . "<br>";
    } else if (strlen($uploadPDFStatus) > 0) {
        echo "<strong>Error Message:</strong> " . $uploadPDFStatus . "<br>";
    } else if (strlen($errorMessage) > 0) {
        echo "<strong>Error Message:</strong> " . $errorMessage . "<br>";
    }
    ?>
</div>
<h1>Guest Book</h1>
<form action="index.php" method="POST" enctype="multipart/form-data">
    <label>Name:</label>
    <input type="input" name="name">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br>
    <br>
    <label>Email:</label>
    <input type="input" name="email">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br>
    <br>
    <label>Website:</label>
    <input type="input" name="website">
    <span class="error">* <?php echo $websiteErr; ?></span>
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
        <th>ID</th>
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
        echo "<tr style='text-align: center;'>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["website"] . "</td>";
        echo "<td><img src='uploads/" . $row["image"] . "' height='100' width='100'></td>";
        echo "<td><a target=\"_blank\" href='uploads/" . $row["resume"] . "'>" . $row["resume"] . "</a></td>";
        echo "<td>" . htmlspecialchars($row["comments"]) . "</td>";
        ?>
        <td>
            <?php if (isset($_GET['delete'])) {
                $row = DB::queryFirstRow("SELECT * from guest WHERE id = %i", $row['id']);
                unlink('uploads/' . $row["image"]);
                unlink('uploads/' . $row["resume"]);
                DB::delete('guest', "id=%i", $row["id"]);
            } ?>
            <form action="index.php" method="get">
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