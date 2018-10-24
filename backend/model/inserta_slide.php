<?php 

include ("util/conexion.php");

  $result = false;

  if(isset($_POST['btn-add'])){


      $titulo = $_POST['slide'];
      $orden = $_POST['orden'];
      $fechaFin = $_POST['fecha_fin'];
      $keywords = $_POST['keyword'];

      $img_slide = $_FILES['img_slide']['name'];
      $tmp_dir = $_FILES['img_slide']['tmp_name'];
      $imagesize = $_FILES['img_slide']['size'];

      $upload_dir = 'uploads/slides/';
      $imgExt = strtolower(pathinfo($img_slide,PATHINFO_EXTENSION));
      $valid_extensions = array('jpeg','jpg','png','gif','pdf');
      $picProfile = rand(1000,1000000).".".$imgExt;
      move_uploaded_file($tmp_dir, $upload_dir.$picProfile);

      $smt = $pdo->prepare("INSERT INTO slide(slide, img_slide, fecha_publi, fecha_fin, orden, keyword,estado)  
      VALUES (:slide, :img_slide, now(), :fecha_fin, :orden, :keyword, 1)");

      $smt -> bindParam(':slide', $titulo);
      $smt -> bindParam(':img_slide', $picProfile);
      $smt -> bindParam(':fecha_fin', $fechaFin);
      $smt -> bindParam(':orden', $orden);
      $smt -> bindParam(':keyword', $keywords);
        $result = $smt -> execute();


      
  }

?>