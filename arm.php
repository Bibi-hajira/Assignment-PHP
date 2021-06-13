<html>
<head><title>Random</title></head>
<body style="background-color: black;color: yellow;">
<center>
    <form method="post">        
Enter a Number: <input type="text" name="num"/><br>  <br>
<button type="submit">Check</button>  
</form> 

 
<?php   
    if($_POST)  
    {   
        $num = $_POST['num']; 
        $total=0;  
        $x=$num;  
        while($x!=0)  
        {  
        $rem=$x%10;  
        $total=$total+$rem*$rem*$rem;  
        $x=$x/10;  
        }  
        echo "The given number is $num"; 
        echo "</br>";
        echo "The sum of the digits is $total"; 
        echo "</br>";
        if($num==$total)  
        {  
        echo "Yes it is an Armstrong number";  
        }  
        else  
        {  
        echo "No it is not an armstrong number";  
        }  
    }     
?> 
</center>
</body>
</html>


