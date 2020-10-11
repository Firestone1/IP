<html>
			<?php

		include conn.php;

        $jc1=serialize($_POST['jc1']);
        $jc2=serialize($_POST['jc2']);
        $jc3=serialize($_POST['jc3']);
        $jc4=serialize($_POST['jc4']);


        $q="insert into copo (jc1,jc2,jc3,jc4) values ('$jc1','$jc2','$jc3','$jc4');";
        $entry=mysqli_query($conn,$q);

if(is_null($entry)){
             echo 'Could not enter data: ';
         }
    else{ 

      
          header("Location: http://localhost/Project/form.php");
          
       } 


 ?> 



</html>