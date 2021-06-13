<html>
<head><title>Random</title></head>
<body style="background-color: black;color: yellow;">
<center>
     <h1>
        Electricity Bill 
    </h1>
     
    <form method="post">
        <table border="0">
            <tr>
                <td> <input type="text" name="num1" placeholder="Enter previous reading"/>
                </td>
            </tr>
            <tr>
            <td> <input type="text" name="num2"  placeholder="Enter present reading"/>
                </td>
            </tr>
            <tr>
                <td> <input type="submit" name="submit"
                    value="Submit"/>
                </td>
            </tr>
        </table>
    </form>

 
<?php   
    if($_POST)  
    {   
        $prev = $_POST['num1']; 
        $cur = $_POST['num2'];
        $units = $cur - $prev;
        $total=0;  
        if ($units <= 100)
        {
            $total= $units * 3;
        }
        elseif ($units <= 200)
        {
            $total = (100 * 3) + ($units - 100) * 4;
        }
        elseif ($units <= 300)
        {
            $total = (100 * 3) + (100 * 4) + ($units - 200) * 5;
        }
        elseif ($units > 300)
        {
            $total = (100 * 3) + (100 * 4) + (100 * 5) + ($units - 300) * 6;
        }
        echo "The Previous Reading is $prev"; 
        echo "</br>";        
        echo "The Current Reading is $cur"; 
        echo "</br>";
        echo "The Units is $units"; 
        echo "</br>";
        echo "The payable amount is $total"; 
        echo "</br>";
    }     
?> 
</center>
</body>
</html>


