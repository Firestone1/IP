<html>
<body>
  <?php
    include 'conn.php';
    $course_cd=$_POST['course_cd'];
    $dept=$_POST['dept'];
    $sem=$_POST['sem'];
    $staff_nm=$_POST['staff_nm'];
    $cay=$_POST['cay'];
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


    $query="insert into copo (uid,course_cd,staff_nm,dept,sem,cay,po1,po2,po3,po4,po5,po6,po7,po8,po9,po10,po11,po12,pso1,pso2,pso3,pso4) values ('$uid','$course_cd','$staff_nm','$dept','$sem','$cay','$po1','$po2','$po3','$po4','$po5','$po6','$po7','$po8','$po9','$po10','$po11','$po12','$pso1','$pso2','$pso3','$pso4');";

    $entry=mysqli_query($conn,$query);


    
    if(!entry){
             echo 'Could not enter data: ';
          }
    else{     
          echo "Entered data successfully\n";
          
        } 

    


?>

</body>
</html>