<?php
    $connect = mysqli_connect("localhost", "root", "", "onlinevoting") or die("Connection Error");
    if ($connect) {
        echo "Connected";
    } else {
        echo "Not Connected";
    }
?>
