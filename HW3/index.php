<?php

session_start();

require("vendor/autoload.php");

use Guilbaud\Customer;
use Guilbaud\BankAccount;

use Guilbaud\AmountNotPositiveException;
use Guilbaud\AmountNotNumericException;
use Guilbaud\InsufficientFundsException;
use Guilbaud\DepositTooLargeException;
use Guilbaud\NotCustomersAccountException;

use \Exception;

if($_SERVER["REQUEST_METHOD"] == "GET")
{
?>
        <form method="POST" action="index.php">
            <button type="submit">Create Customer Account</button>
        </form>
        
<?php
} else if($_SERVER["REQUEST_METHOD"] == "POST")
{
   $customer = new Customer();
   $bankAccount = new BankAccount();
   $customer->addAccount($bankAccount);
   $_SESSION["customer"] = $customer;

    header("Location: accountpage.php");
    
/*
$cathy = new Customer();
$checking = new BankAccount();
$checking->deposit(40);
$superChecking = new BankAccount();
$superChecking->deposit(3);
$cathy->addAccount($checking);
$cathy->addAccount($superChecking);

foreach($cathy->getAccounts() as $accountIndex=>$account)
{
    echo "Account Number: " . ($accountIndex + 1) . "<br>";
}

echo "<br>";
echo "<br>";

//$cathy->removeAccount($superChecking2);

foreach($cathy->getAccounts() as $accountIndex=>$account)
{
    echo "Account Number: " . ($accountIndex + 1) . "<br>";
}

echo "<br>";
echo "<br>";

echo "The total balance of all your accounts is: $" .$cathy->getBalanceOfAllAccounts();

$alex = new Customer();
$checking2 = new BankAccount();
$checking2->deposit(40);
$superChecking2 = new BankAccount();
$superChecking2->deposit(3);
$alex->addAccount($checking2);
$alex->addAccount($superChecking2);
*/


/*

What I have to do:

require the autoload.php

create one user that can have multiple accounts

give the accounts a unique name

add the accounts to an array that is for one particular customer.
do an array search

to add an account, push it onto the array.
to remove an account, search the array for the name of that account and then remove it/unset it from the array.

return total balance of all the user's accounts



try {
  // $cathy->removeAccount($superChecking2);
    //$checking->deposit(100000);
    $checking->deposit(-1);
    
    
    }
    
    catch (AmountNotNumericException $ex)
    {
        echo "The amount you entered was not a number. Please enter a number and try again.";
    }
    
    catch (DepositTooLargeException $ex)
    {
        echo 'The amount you are trying to deposit is too large. Amount must be less than $10000. Please try again with a smaller amount.';
    }
    
    catch (InsufficientFundsException $ex)
    {
        echo "You cannot withdraw more than what is in your account. Please try again.";    
    }
    
    catch (NotCustomersAccountException $ex)
    {
        echo "The account you are trying to access does not exist. Please try again.";    
    }
    
    catch (AmountNotPositiveException $ex)
    {
        echo 'The amount you deposit cannot be less than $0. Please try again.';    
    }
    
    catch (Exception $ex)
    {
        echo "Some error occured and your request cannot be processed. Our developers have been notified.";
    }

/*
    </body>
</html>
*/
}
?>