<html>
<body>
  <?php
    $conn = new mysqli('localhost', 'xaonan', 'xaonan','xaonan');
    if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
    $course_cd=$_POST['course_cd'];
    $dept=$_POST['dept'];
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


    $query="insert into copo (course_cd,dept,po1,po2,po3,po4,po5,po6,po7,po8,po9,po10,po11,po12,pso1,pso2,pso3,pso4) values ('$course_cd','$dept','$po1','$po2','$po3','$po4','$po5','$po6','$po7','$po8','$po9','$po10','$po11','$po12','$pso1','$pso2','$pso3','$pso4');";

    $entry=mysqli_query($conn,$query);


    
    if(!entry ) {
             die('Could not enter data: ' . mysql_error());
          }
    else{     
          echo "Entered data successfully\n";
          
        } 

    


?>
<script>location.replace("https://www.vcet.edu.in")</script>
</body>
</html>