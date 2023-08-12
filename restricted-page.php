<?php
	// add lesson code
    require './inc/header.php';
    // check the session before we show any data
    session_start();
    if(!isset($_SESSION['user_id'])) {
        header('location:login.php');
        exit();
    } else {
        // connect to database
        require './inc/database.php';
        echo '<h2>Logged In Successfully!</h2>';
        echo '<h6>logged in users</h6>';
        // set up query
        $sql = "SELECT * FROM phpadmins";
        // run the query
        $result = $conn->query($sql);
        echo '<section class="person-row">';
        echo '<table class="table table-striped">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                <tr>';
        foreach ($result as $row) {
            echo '
                <tr>
                    <td>' . $row['first_name'] . '</td>
                    <td>' . $row['last_name'] . '</td>
                    <td>' . $row['username'] . '</td>
                </tr>
                ';
        }
        echo '</table>';
        echo '<a href="logout.php" class="btn btn-danger">Logout</a>';
        echo '</section>';
        $conn = null;
    }
?>
