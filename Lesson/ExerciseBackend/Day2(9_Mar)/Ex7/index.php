<!DOCTYPE html>
<html>
   <head></head>
   <body>
	   <table cellspacing="0px" border="1px solid black">  
		    <?php  
			    for($row=1; $row <= 8; $row++){  
			        echo "<tr>";  
			        for($col=1; $col <=8; $col++){    
			            if(($row + $col)%2 == 0){  
			                echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";  
			            } else {  
			                echo "<td height=30px width=30px bgcolor=#000000></td>";  
			            }  
			        }  
			        echo "</tr>";  
			    }  
			?>  
	    </table>
    </body>
</html>