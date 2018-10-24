<?php 

include ("util/conexion.php");

  $result = false;

  if(isset($_POST['btn-add'])){
      $titulo = $_POST['titulo'];
      $subtitulo = $_POST['subtitulo'];
      $desc_larga = $_POST['desc_larga'];
      $desc_corta = $_POST['desc_corta'];

      $keywords = $_POST['keywords'];
      $autor = $_POST['cbAutor'];
      $categoria = $_POST['cbCategoria'];

      $img_post = $_FILES['img_post']['name'];
      $tmp_dir = $_FILES['img_post']['tmp_name'];
      $imagesize = $_FILES['img_post']['size'];

      $upload_dir = 'uploads/';
      $imgExt = strtolower(pathinfo($img_post,PATHINFO_EXTENSION));
      $valid_extensions = array('jpeg','jpg','png','gif','pdf');
      $picProfile = rand(1000,1000000).".".$imgExt;
      move_uploaded_file($tmp_dir, $upload_dir.$picProfile);

      $smt = $pdo->prepare("INSERT INTO post (titulo, subtitulo, desc_corta, desc_larga, img_post,keywords,id_usuario,id_cat,fecha_publi,estado)  
      VALUES (:titulo, :subtitulo, :desc_corta, :desc_larga, :img_post, :keywords , :autor, :categoria,now(),1)");

      $smt -> bindParam(':titulo', $titulo);
      $smt -> bindParam(':subtitulo', $subtitulo);
      $smt -> bindParam(':desc_larga', $desc_larga);
      $smt -> bindParam(':desc_corta', $desc_corta);
      $smt -> bindParam(':keywords', $keywords);
      $smt -> bindParam(':autor', $autor);
      $smt -> bindParam(':categoria', $categoria);
      $smt -> bindParam(':img_post', $picProfile);

        $result = $smt -> execute();


      
  }

?>