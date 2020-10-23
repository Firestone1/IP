<?php
    $conn = new mysqli('localhost', 'xaonan', 'xaonan','xaonan');
    if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
	}
  ?>