<?php
session_start();
session_destroy();
header("location: /baguette/Index.html");
?>