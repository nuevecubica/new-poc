<?php
$serverType = 'd';

if ($serverType == 'p') {
    $servername = '127.0.0.1';
    $username = 'alexobo1_mydiabetesdaily';
    $password = '@admin_mydiabetesdaily_2017@';
    $dbname = 'alexobo1_mydiabetesdaily';
    $conn = new mysqli($servernameP, $usernameP, $passwordP, $dbnameP);
} else {
    $servername = '127.0.0.1';
    $username = 'root';
    $password = '';
    $dbname = 'mydiabetesdaily';
    $conn = new mysqli($servername, $username, $password, $dbname);
}

if (!$conn) {
    print_r('NOT Connected');
    die("Connection failed: " . mysqli_connect_error());
}