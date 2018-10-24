<?php 
    include("includes/header.php");

    include("util/conexion.php");
    
      $result = false;
    
        if(isset($_GET['editId']) && !empty($_GET['editId'])){
    
            $id = $_GET['editId'];
    
            $sql_edit = $pdo->prepare("SELECT * FROM post WHERE id_post=:id_post");
            $sql_edit ->execute(array(':id_post'=>$id));

            $editrow = $sql_edit -> fetch(PDO::FETCH_ASSOC);
            extract($editrow);
    
        }else{
            header("Location:index.php");
        }
    
        if(isset($_POST['btn-update'])){

            $titulo = $_POST['titulo'];
            $subtitulo = $_POST['subtitulo'];
            $desc_corta = $_POST['desc_corta'];
            $desc_larga = $_POST['desc_larga'];
            $keywords = $_POST['keywords'];
            $id_usuario = $_POST['id_usuario'];
            $id_cat = $_POST['id_cat'];

                $smt = $pdo->prepare('UPDATE  post SET titulo=:titulo, subtitulo=:subtitulo, desc_corta=:desc_corta, desc_larga=:desc_larga, keywords=:keywords , id_usuario=:id_usuario, id_cat=:id_cat  WHERE id_post = :id_post');
             
                $smt -> bindParam(':titulo' , $titulo);
                $smt -> bindParam(':subtitulo' , $subtitulo);
                $smt -> bindParam(':desc_corta' , $desc_corta);
                $smt -> bindParam(':desc_larga' , $desc_larga);
                $smt -> bindParam(':keywords' , $keywords);
                $smt -> bindParam(':id_usuario', $id_usuario);
                $smt -> bindParam(':id_cat', $id_cat);
                $smt -> bindParam(':id_post', $id);
                    
                $result = $smt -> execute();
       
            }
           


    
    ?>
    

<div class="table-title">
    <div class="row">
        <div class="col-sm-8"><h2>Agregar <b>Publicación</b></h2></div>
        <div class="col-sm-4">
            <a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
            <?php 
            if($result){
                echo "<div class='alert alert-success'> Registros agregados exitosamente";
            }?>
        </div>
        
    </div>
</div>
<br><br>
<div class="table-responsive">
    <form method="POST" enctype="">
        <div class="form-group">
            <label> Titulo:</label>
            <input type="text" name="titulo" id="titulo" value="<?php echo $titulo;?>" class='form-control' maxlength="100" required >
        </div>
        <div class="form-group">
            <label>SubTitulo:</label>
            <input type="text" name="subtitulo" id="subtitulo" value="<?php echo $subtitulo;?>" class='form-control' maxlength="100" required>
        </div>
        <div class="form-group">
            <label>Descripción Larga:</label>
            <textarea  name="desc_larga" id="desc_larga" class='form-control'  maxlength="255" required><?php echo $desc_larga;?></textarea>
        </div>
        <div class="form-group">
            <label>Descripción Corta:</label>
            <input type="text" name="desc_corta" id="desc_corta"  value="<?php echo $desc_corta;?>"  class='form-control' maxlength="15" required >
        </div>

        <div class="form-group">
            <label>Keywords:</label>
            <input type="text" name="keywords" id="keywords" class='form-control' maxlength="64" required value="<?php echo $keywords;?>"/>
        
        </div>
        <div class="form-group">
            <label>Autor:</label>
            <input type="text" name="id_usuario" id="id_usuario" class='form-control' maxlength="64" required value="<?php echo $id_usuario ?>" />
        
        </div>
        <div class="form-group">
            <label>Categoria:</label>
            <input type="text" name="id_cat" id="id_cat" class='form-control' maxlength="64" required value="<?php echo $id_cat ?>" />
        
        </div>
        <div class="col-md-12 pull-right">
        <hr>
            <input type="submit" class="btn btn-success" id="btn-update" name="btn-update" value="Guardar datos"/>
        </div>
    </form>
    <br>
</div>

<?php include("includes/footer.php");?>