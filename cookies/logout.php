<?php


setcookie("username","",time() - 86400);

header('LOCATION:index.html');