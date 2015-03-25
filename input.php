<?php 

session_start();



$_SESSION[relationship] = $_POST[relationship];
$mailsto = $_POST[mailsto];
$mailsfrom = $_POST[mailsfrom]; 

$_SESSION[mailsto] = (log($mailsto))*20;

$_SESSION[mailsfrom] = (log($mailsfrom))*20;


$contactName = 'David Cameron';
$colleagueName ='Matthew Barnes';








?>
   
   
   









<form style="margin-left: 50px;" name="data"  action="emaillatest.php" method="post">
    <label for="relationship">Relationship score</label>
        <input type="number" name="relationship" value="50" min="0" max="100" /><br />
        <label for="mailsto">Mails Sent</label>
        <input type="number" name="mailsto" value="50" min="0" max="1000" /><br />
        <label for="mailsreceived">Mails Received</label>
        <input type="number" name="mailsfrom" value="50" min="0" max="1000" /><br />
       
        
        
        <input type="submit" name="submit" value="submit" />
</form>  


