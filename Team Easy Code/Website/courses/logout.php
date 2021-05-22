<?php
session_start();
session_destroy();
header('location:loginform.php');
