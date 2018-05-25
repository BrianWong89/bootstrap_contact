<?php
require_once("vendor/autoload.php");

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
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = "Invalid URL";
        }
    }
    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $errorMessage1 = "";
    $errorMessage2 = "";
    $errorMessage3 = "";
    $errorMessage4 = "";
    $errorMessage5 = "";
    $errorMessage6 = "";
    $errorMessage7 = "";
    $errorMessage8 = "";
    $errorMessage9 = "";
    $errorMessage10 = "";
    $errorMessage11 = "";
    $errorMessage12 = "";
    $errorMessage13 = "";
    //print_r($_POST);
    //echo "Hi";
    $fileName = basename($_FILES["file"]["name"]);
    $target_dir = "uploads/";
    $target_file = $target_dir . $fileName;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $errorMessage1 = "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
    if (file_exists($target_file)) {
        $errorMessage2 = "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["file"]["size"] > 500000) {
        $errorMessage3 = "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if ($imageFileType != "jpg") {
        $errorMessage4 = "Sorry, only JPG files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $errorMessage5 = "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            //echo "The file " . basename($_FILES["file"]["name"]) . " has been uploaded.";
        } else {
            $errorMessage6 = "Sorry, there was an error uploading your file.";
        }
    }

    $resumeName = basename($_FILES["resume"]["name"]);
    $target_file = $target_dir . $resumeName;
    $imageResumeType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $check = finfo_file($finfo, $_FILES['resume']['tmp_name']);
    if ($check == 'application/pdf') {
        //echo "File is a PDF";
        $uploadOk = 1;
    } else {
        $errorMessage7 = "File is not a PDF.";
        $uploadOk = 0;
    }

// Check if file already exists
    if (file_exists($target_file)) {
        $errorMessage8 = "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["resume"]["size"] > 500000) {
        $errorMessage9 = "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if ($imageResumeType != "pdf") {
        $errorMessage10 = "Sorry, only PDF files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $errorMessage11 = "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
            //echo "The file " . basename($_FILES["resume"]["name"]) . " has been uploaded.";
        } else {
            $errorMessage12 = "Sorry, there was an error uploading your file.";
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
        $errorMessage13 = "Posting failed. Please try again.";
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
<?php echo $errorMessage1 . $errorMessage2 . $errorMessage3 . $errorMessage4 . $errorMessage5 . $errorMessage6 . $errorMessage7 . $errorMessage8 . $errorMessage9 . $errorMessage10 . $errorMessage11 . $errorMessage12 . $errorMessage13; ?>
<img src="images/logo.jpg" height="100" width="350">
<h1>Guest Book</h1>
<form action="index.php" method="POST" enctype="multipart/form-data">
    <label>Name:</label>
    <input type="input" name="name">
    <span class="error">* <?php echo $nameErr; ?></span>
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
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["website"] . "</td>";
        echo "<td><img src='uploads/" . $row["image"] . "' height='100' width='100'></td>";
        echo "<td><a target=\"_blank\" href='uploads/" . $row["resume"] . "'>" . $row["resume"] . "</a></td>";
        echo "<td>" . $row["comments"] . "</td>";
        ?>
        <td>
            <?php if (!isset($_POST['delete'])) {
                DB::delete('guest', "id=%i", $row['id']);
            } ?>
            <form action="index.php" method="post">
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