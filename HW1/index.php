<?php

require_once("User.php");
require_once("Profile.php");

$user1 = new User();
$user2 = new User();


$user1->setUsername("Andrew Besmer");
$user1->setProfile()->setFirstName("Andrew");
$user1->setProfile()->setLastName("Besmer");
$user1->setProfile()->setEmailAddress("besmera2@winthrop.edu");
//$user1->setProfile($profile1);


$user2->setUsername("Gerry Derksen");
$user2->setProfile()->setFirstName("Gerry");
$user2->setProfile()->setLastName("Derksen");
$user2->setProfile()->setEmailAddress("derkseng@winthrop.edu");
//$user2->getProfile()->setProfile($profile2);

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