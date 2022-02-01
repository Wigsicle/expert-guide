<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "csaddb";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if (mysqli_connect_error())  {
    die("Database connection failed: " . mysqli_connect_error());
    } 

    $txtName = $txtEmail = $txtPhone = $txtMsg = "";
    $nameErr = $emailErr = $phoneErr = $msgErr = "";
    $error = FALSE;

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {   
        if (empty($_POST["txtName"])) {
            $nameErr = "Name is required";
            $error = TRUE;
          } else {
            $txtName = test_input($_POST["txtName"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$txtName)) {
              $nameErr = "Only letters and white space allowed";
              $error = TRUE;
            } 
          }

        if (empty($_POST["txtEmail"])) {
            $emailErr = "Email is required";
            $error = TRUE;
          } else {
            $txtEmail = test_input($_POST["txtEmail"]);
            if (!filter_var($txtEmail, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format";
              $error = TRUE;
            }  
          }
          
        if (empty($_POST["txtPhone"])) {
            $phoneErr = "Phone is required";
            $error = TRUE;
          } else {
            $txtPhone = test_input($_POST["txtPhone"]);
            if (!preg_match ("/^[0-9]*$/", $txtPhone)) {
              $phoneErr = "Only numeric value is allowed.";
              $error = TRUE;
            } 
          }
        
        if (empty($_POST["txtMsg"])) {
            $msgErr = "Message is required";
            $error = TRUE;
          } else {
            $txtMsg = test_input($_POST["txtMsg"]);
          } 
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($error == FALSE)
    {
        if (isset($_POST['btnSubmit'])) {
            $txtName = $_POST['txtName'];
            $txtEmail = $_POST['txtEmail'];
            $txtPhone = $_POST['txtPhone'];
            $txtMsg = $_POST['txtMsg'];
            $sql = "INSERT INTO userfeedback (NAME, EMAIL, NUMBER, MESSAGE) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMsg')";
            if (mysqli_query($conn, $sql)) {
                $_SESSION['message'] = "Saved";
            } else {
                $_SESSION['message'] = "Failed";
            }
        }
    }
    ?>