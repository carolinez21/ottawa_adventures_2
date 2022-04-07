<?php

session_start();
session_unset();
session_destory();

header("location: ../index.php");
exit();