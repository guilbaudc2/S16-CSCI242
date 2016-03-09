<?php

session_start();

if(!isset($_SESSION["account"]))
{
	header("Location: index.php");
	
}

require("vendor/autoload.php");

use Guilbaud\Customer;
use Guilbaud\BankAccount;

use Guilbaud\AmountNotPositiveException;
use Guilbaud\AmountNotNumericException;
use Guilbaud\InsufficientFundsException;
use Guilbaud\DepositTooLargeException;
use Guilbaud\NotCustomersAccountException;

use \Exception;


 $customer = $_SESSION["account"];

if($_SERVER["REQUEST_METHOD"] == "GET")
{
?>
        <form method="POST" action="accountpage.php">
            <button type="submit" name="bankAccount">Create Bank Account</button>
        </form>
        
<?php
} else if($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    $bankAccount1 = $_POST["bankAccount"];
    $bankAccount1 = new BankAccount();
    
    $customer->addAccount($bankAccount1);
    $_SESSION["account"] = $customer;
    
    //$bankAccount
/*try {
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