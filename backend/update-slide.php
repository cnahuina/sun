<?php 
    include("includes/header.php");

    include("util/conexion.php");
    
      $result = false;
    
        if(isset($_GET['editId']) && !empty($_GET['editId'])){
    
            $id = $_GET['editId'];
    
            $sql_edit = $pdo->prepare("SELECT * FROM slide WHERE id_slide=:id_slide");
            $sql_edit ->execute(array(':id_slide'=>$id));

            $editrow = $sql_edit -> fetch(PDO::FETCH_ASSOC);
            extract($editrow);
    
        }else{
            header("Location:index.php");
        }
    
        if(isset($_POST['btn-update'])){

 
            $slide = $_POST['slide'];
            $orden = $_POST['orden'];
            $fechaFin = $_POST['fecha_fin'];
            $keywords = $_POST['keyword'];
      

            $smt = $pdo->prepare('UPDATE  slide SET slide=:slide, orden=:orden, fecha_fin=:fecha_fin, keyword=:keyword  WHERE id_slide = :id_slide');

                        
            $smt -> bindParam(':slide' , $titulo);
            $smt -> bindParam(':orden' , $orden);
            $smt -> bindParam(':fecha_fin' , $fechaFin);
            $smt -> bindParam(':keyword' , $keywords);
            $smt -> bindParam(':id_slide', $id);
                
            $result = $smt -> execute();
       
            }

    ?>
    

<div class="table-title">
    <div class="row">
        <div class="col-sm-8">
        <br>    
        <h2>Actualizar <b>Slide</b></h2></div>
        <div class="col-sm-4"><br>
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
            <label> slide:</label>
            <input type="text" name="slide" id="slide" class='form-control'  required >
        </div>
        <div class="form-group">
            <label>Fecha Fin:</label>
            <input type="text" name="fecha_fin" id="fecha_fin" class='form-control' maxlength="100" required>
        </div>
        <div class="form-group">
            <label>Orden: </label>
            <textarea  name="orden" id="orden" class='form-control'  required></textarea>
        </div>

        <div class="form-group">
            <label>Keywords:</label>
            <input type="text" name="keyword" id="keyword" class='form-control' maxlength="255" required>
        
        </div>
        <div class="col-md-12 pull-right">
        <hr>
            <input type="submit" class="btn btn-success" id="btn-update" name="btn-update" value="Guardar datos"/>
        </div>
    </form>
    <br>
</div>

<?php include("includes/footer.php");?>