<?php
	// add lesson code
    try {
        $conn = new PDO('mysql:host=172.31.22.43;dbname=Seahee200530585', 'Seahee200530585', 'isuvIFGUxI');
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e-getMessage();
    }
?>
