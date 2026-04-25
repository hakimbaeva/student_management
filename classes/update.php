<?php
//include '../config/db.php';
//$id = $_POST['id'];
//$class_name = $_POST['class_name'];
//$teachers_id = $_POST['teachers_id'];


//$sql = "UPDATE classes
    //  SET class_name =?,
     // teachers_id =?
     
  //  WHERE id = ?" ;


    // $data = $conn->prepare($sql);
   // $data->execute([
      //  $class_name,
      //  $teachers_id
    
   /// ]);

//header("Location: index.php");
   // exit()
   


include '../config/db.php';

$id = $_POST['id'];
$class_name = $_POST['class_name'];
$teachers_id = $_POST['teachers_id'];

$sql = "UPDATE classes
        SET class_name = ?,
            teachers_id = ?
        WHERE id = ?";

$data = $conn->prepare($sql);
$data->execute([
    $class_name,
    $teachers_id,
    $id
]);

header("Location: index.php");
exit();

?> 