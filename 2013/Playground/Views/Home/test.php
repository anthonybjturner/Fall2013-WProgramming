<?php
include_once '_login.php';
$username = 'Megan';
$password = 'Griffin';

//Login::ConnectUser($username, $password);
Login::ConnectAndDelete($username);
