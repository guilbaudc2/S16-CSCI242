<?php

require("vendor/autoload.php");

session_start();

if(!isset($_SESSION["customer"]))
{
	header("Location: index.php");
	
}

$customer = $_SESSION["customer"];

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
    var_dump($customer);
?>
        <form method="POST" action="accountpage.php">
            <table>
                <tr>
                <th>Bank Account:</th>
                <td><select name="bankAccount">
<?php        
            foreach($customer->getAccounts() as $key => $account)
            {
                $depositKey = "deposit" . $key;
                echo "<option value=" . $key .">Bank Account #". ($key+1)." Amount: $" . $account->getBalance() ."</option>";
            }
?>
            </select></td>
            <td><select name="optionType">  
                <option value="deposit" name="deposit">Deposit</option>
                <option value="withdraw" name="withdraw">Withdraw</option>
                <option value="getBalance" name="getBalance">Get Balance</option>
            </select></td>
            </tr>
<?php        
                
            	  echo "<tr>";
				  echo "<td>Balance of all Accounts:</td>";
				  echo "<td>$". $customer->getBalanceOfAllAccounts()."</td>";
				  echo "<td><input type='text' name='amount'</td>";
				  echo "</tr>";
            
?>		    
		    </table>
            <input type="submit" value="submit">
        </form>
<?php	
		} else if($_SERVER["REQUEST_METHOD"] == "POST")
		{
	$amount = $_POST["amount"];
	$optionType = $_POST["optionType"];
	
	var_dump($key);
	
    //$bankAccount = $customer->getAccount($key);
    var_dump($customer->getAccount($key));
    /*
    if($optionType == "deposit")
    {
    
        try {
           $bankAccount->deposit($amount);
            
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
    }else if($optionType == "withdraw")
    {
    
        try {
           $bankAccount->withdraw($amount);
            
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
    }
    
   header("Location: accountpage.php");
	
?>

    </body>
</html>

<?php*/
}
