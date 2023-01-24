<?php
session_start();

//destroy the session
session_destroy();
header('Location: /sp404/phpdemo/13_sessions.php');