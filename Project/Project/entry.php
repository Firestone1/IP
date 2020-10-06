<html>
<head>
    <link rel="stylesheet" href="./form1.css">
</head>
<body>
  <?php
    include 'conn.php';






    $course_cd=htmlspecialchars($_POST['course_cd']);
    $course_nm=htmlspecialchars($_POST['course_nm']);
    $dept=htmlspecialchars($_POST['dept']);
    $sem=htmlspecialchars($_POST['sem']);
    $staff_nm=htmlspecialchars($_POST['staff_nm']);
    $cay=htmlspecialchars($_POST['cay']);
    $po1=serialize($_POST['po1']);
    $po2=serialize($_POST['po2']);
    $po3=serialize($_POST['po3']);
    $po4=serialize($_POST['po4']);
    $po5=serialize($_POST['po5']);
    $po6=serialize($_POST['po6']);
    $po7=serialize($_POST['po7']);
    $po8=serialize($_POST['po8']);
    $po9=serialize($_POST['po9']);
    $po10=serialize($_POST['po10']);
    $po11=serialize($_POST['po11']);
    $po12=serialize($_POST['po12']);
    $pso1=serialize($_POST['pso1']);
    $pso2=serialize($_POST['pso2']);
    $pso3=serialize($_POST['pso3']);
    $pso4=serialize($_POST['pso4']);
    $uid=$course_cd.$cay;


    $query="insert into copo (uid,course_cd,course_nm,staff_nm,dept,sem,cay,po1,po2,po3,po4,po5,po6,po7,po8,po9,po10,po11,po12,pso1,pso2,pso3,pso4) values ('$uid','$course_cd','$course_nm','$staff_nm','$dept','$sem','$cay','$po1','$po2','$po3','$po4','$po5','$po6','$po7','$po8','$po9','$po10','$po11','$po12','$pso1','$pso2','$pso3','$pso4');";

    $entry=mysqli_query($conn,$query);


  


    
   if(!entry){
             echo 'Could not enter data: ';
         }
    else{ 

       
          header("Location: http://localhost/Project/form.php");
          
       } 

    


?>
'<div class="wrapper"> 
        <div class="title">Successful!</div>
        <p>co-po mapping entries were successfully stored</p>
    </div>'; 
  
</body>
</html>