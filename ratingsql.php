<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "csaddb";
    $conn = new mysqli($servername, $username, $password, $dbname);

        if (isset($_POST['save'])) {
            $uID = $conn->real_escape_string($_POST['uID']);
            $ratedIndex = $conn->real_escape_string($_POST['ratedIndex']);
            $ratedIndex++;

            if (!$uID) {
                $conn->query("INSERT INTO stars (rateIndex) VALUES ('$ratedIndex')");
                $sql = $conn->query("SELECT id FROM stars ORDER BY id DESC LIMIT 1");
                $uData = $sql->fetch_assoc();
                $uID = $uData['id'];
            } else
                $conn->query("UPDATE stars SET rateIndex='$ratedIndex' WHERE id='$uID'");

            exit(json_encode(array('id' => $uID)));
    }
?>