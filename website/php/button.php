<?php
require "../../php/get_domain.php";
echo $domain;
// MOVE THE FILE "get_domain.php" two directories 
// above where the file "button.php" is in order 
// to prevent people from being able to read your 
// credentials.
//
// DO NOT PUT THE FILE INTO '/var/www/html/'
// get_domain.php CONTAINS YOUR CREDENTIALS
// 'var/www/html' IS PUBLIC, DO NOT PUT THAT
// FILE IN THERE.
?> 
