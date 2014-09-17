<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">

<link type="text/css" href="first_php_site.css" rel="stylesheet">
<head>
<div class= 'title'>
<title>My First PHP Site</title>
</div>
</head>
<body>
<?php
$first_name = 'Norcius';
$last_name = 'Noel';
$full_name = $first_name . '' . $last_name; 
$email_address = 'nnoel@fas.harvard.edu';
$address = 'Medford';
$state = 'MA'; ?> 

<div "personal_info">
<?php 
echo $first_name . ' ' . $last_name . '<br>';
echo $address . ' ' . $state . '<br>';
echo $email_address . '<br>';

?> 
</div> 

<div class="image">
 <img src="Pictures/norcius_profile.jpg" width="150" height="149" alt="norcius profile photo"></div>       
</div>

<div class="future_project">
    
    	<ul>
        <li>Project 2 Title View:[<a href="#"></a>] Github: [<a href="#"></a>]</li>
        <li>Project 3 Title View:[<a href="#"></a>] Github: [<a href="#"></a>]</li>
        <li>Project 4 Title View:[<a href="#"></a>] Github: [<a href="#"></a>]</li>
        </li>
</div>

<div class="text">
<h3>In 2+ sentences describe who you are and what you do.</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. /&gt;</p>
<h3>Why are you taking this course?</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum./&gt;</p>
<h3>What previous experience do you have with programming?</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum./&gt;</p>
<h3>Are you working on a Mac, PC, or some other platform?</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum./&gt;</p>
<h3>Anything else we should know?</h3>
</div>
</body>
</html>