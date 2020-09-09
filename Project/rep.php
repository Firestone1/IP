<!DOCTYPE html>
<html charset="UTF-8">
<head>
  <link rel="stylesheet" type="text/css" href="stylesheet.css"> 
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
	
	
</head>
<body>
<?php
    include "conn.php";
    $dept=$_GET["dept"];
    

    $query="select * from copo where dept='$dept';";
    $result=mysqli_query($conn,$query);
    if(!$result){
     echo "failed";
    }
   
    
    while($row = mysqli_fetch_array($result)){
       $po1=unserialize($row[2]);
       $po2=unserialize($row[3]);
       $po3=unserialize($row[4]);
       $po4=unserialize($row[5]);
       $po5=unserialize($row[6]);
       $po6=unserialize($row[7]);
       $po7=unserialize($row[8]);
       $po8=unserialize($row[9]);
       $po9=unserialize($row[10]);
       $po10=unserialize($row[11]);
       $po11=unserialize($row[12]);
       $po12=unserialize($row[13]);
       $pso1=unserialize($row[14]);
       $pso2=unserialize($row[15]);
       $pso3=unserialize($row[16]);
       $pso4=unserialize($row[17]);
       $course=$row[0];
       $a1=array_sum($po1)/4;
       $a2=array_sum($po2)/4;
       $a3=array_sum($po3)/4;
       $a4=array_sum($po4)/4;
       $a5=array_sum($po5)/4;
       $a6=array_sum($po6)/4;
       $a7=array_sum($po7)/4;
       $a8=array_sum($po8)/4;
       $a9=array_sum($po9)/4;
       $a10=array_sum($po10)/4;
       $a11=array_sum($po11)/4;
       $a12=array_sum($po12)/4;
       $a13=array_sum($pso1)/4;
       $a14=array_sum($pso2)/4;
       $a15=array_sum($pso3)/4;
       $a16=array_sum($pso4)/4;
      echo '
      <h2>'.$course.'</h2>
      <table border="1">
        <tr>
          <th></th>
          <th>po1</th>
          <th>po2</th>
          <th>po3</th>
          <th>po4</th>
          <th>po5</th>
          <th>po6</th>
          <th>po7</th>
          <th>po8</th>
          <th>po9</th>
          <th>po10</th>
          <th>po11</th>
          <th>po12</th>
          <th>pso1</th>
          <th>pso2</th>
          <th>pso3</th>
          <th>pso4</th>
        </tr>
        
        <tr>
            <th>co1</th>
            <td>'.$po1[0].'</td>
            <td>'.$po2[0].'</td>
            <td>'.$po3[0].'</td>
            <td>'.$po4[0].'</td>
            <td>'.$po5[0].'</td>
            <td>'.$po6[0].'</td>
            <td>'.$po7[0].'</td>
            <td>'.$po8[0].'</td>
            <td>'.$po9[0].'</td>
            <td>'.$po10[0].'</td>
            <td>'.$po11[0].'</td>
            <td>'.$po12[0].'</td>
            <td>'.$pso1[0].'</td>
            <td>'.$pso2[0].'</td>
            <td>'.$pso3[0].'</td>
            <td>'.$pso4[0].'</td>

          
            
        </tr>
        <tr>
            <th>co2</th>
           <td>'.$po1[1].'</td>
            <td>'.$po2[1].'</td>
            <td>'.$po3[1].'</td>
            <td>'.$po4[1].'</td>
            <td>'.$po5[1].'</td>
            <td>'.$po6[1].'</td>
            <td>'.$po7[1].'</td>
            <td>'.$po8[1].'</td>
            <td>'.$po9[1].'</td>
            <td>'.$po10[1].'</td>
            <td>'.$po11[1].'</td>
            <td>'.$po12[1].'</td>
            <td>'.$pso1[1].'</td>
            <td>'.$pso2[1].'</td>
            <td>'.$pso3[1].'</td>
            <td>'.$pso4[1].'</td>
        </tr>
        <tr>
            <th id="co3">co3</th>
            <td>'.$po1[2].'</td>
            <td>'.$po2[2].'</td>
            <td>'.$po3[2].'</td>
            <td>'.$po4[2].'</td>
            <td>'.$po5[2].'</td>
            <td>'.$po6[2].'</td>
            <td>'.$po7[2].'</td>
            <td>'.$po8[2].'</td>
            <td>'.$po9[2].'</td>
            <td>'.$po10[2].'</td>
            <td>'.$po11[2].'</td>
            <td>'.$po12[2].'</td>
            <td>'.$pso1[2].'</td>
            <td>'.$pso2[2].'</td>
            <td>'.$pso3[2].'</td>
            <td>'.$pso4[2].'</td>
        </tr>
        <tr>
            <th id="co4" value="co4">co4</th>
            <td>'.$po1[3].'</td>
            <td>'.$po2[3].'</td>
            <td>'.$po3[3].'</td>
            <td>'.$po4[3].'</td>
            <td>'.$po5[3].'</td>
            <td>'.$po6[3].'</td>
            <td>'.$po7[3].'</td>
            <td>'.$po8[3].'</td>
            <td>'.$po9[3].'</td>
            <td>'.$po10[3].'</td>
            <td>'.$po11[3].'</td>
            <td>'.$po12[3].'</td>
            <td>'.$pso1[3].'</td>
            <td>'.$pso2[3].'</td>
            <td>'.$pso3[3].'</td>
            <td>'.$pso4[3].'</td>
        </tr>
        <tr>
          <th id="avg" value="avg">avg</th>
          <td>'.$a1.'</td>
            <td>'.$a2.'</td>
            <td>'.$a3.'</td>
            <td>'.$a4.'</td>
            <td>'.$a5.'</td>
            <td>'.$a6.'</td>
            <td>'.$a7.'</td>
            <td>'.$a8.'</td>
            <td>'.$a9.'</td>
            <td>'.$a10.'</td>
            <td>'.$a11.'</td>
            <td>'.$a12.'</td>
            <td>'.$a13.'</td>
            <td>'.$a14.'</td>
            <td>'.$a15.'</td>
            <td>'.$a16.'</td>

        </tr>
      </table><br><br>
      ';
     }

    

  
  
    
  ?>
</body>
	

</html>