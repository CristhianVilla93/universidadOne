<?php

try {
    $conn = new mysqli("localhost", "root", "", "uni");
} catch (mysqli_sql_exception $e) {
    echo "Error: ". $e->getMessage();
}