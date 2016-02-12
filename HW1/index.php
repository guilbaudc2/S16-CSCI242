<?php

require_once("User.php");
require_once("Profile.php");

$user1 = new User();
$profile1 = new Profile();
$user2 = new User();
$profile2 = new Profile();


$user1->setUsername("Andrew Besmer");
$profile1->setFirstName("Andrew");
$profile1->setLastName("Besmer");
$profile1->setEmailAddress("besmera2@winthrop.edu");
$user1->setProfile($profile1);


$user2->setUsername("Gerry Derksen");
$profile2->setFirstName("Gerry");
$profile2->setLastName("Derksen");
$profile2->setEmailAddress("derkseng@winthrop.edu");
$user2->setProfile($profile2);

$users = array($user1, $user2);
?>

<h1>Professors</h1>
<?php
        foreach($users as $userIndex => $user)
    {
?>
        <h2><?php echo $user->getUsername() ?></h2>
        <ul>
            <li><b>First: </b><?php echo $user->getProfile()->getFirstName() ?></li>
            <li><b>Last: </b><?php echo $user->getProfile()->getLastName() ?></li>
            <li><b>Email: </b><?php echo $user->getProfile()->getEmailAddress() ?></li>
        </ul>
<?php   
    }