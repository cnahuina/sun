<?php 
    include("includes/header.php");
    include("model/inserta_slide.php");

?>

<div class="table-title">
    <div class="row">
       
        <div class="col-sm-8"> <br>
        
            <h2>Agregar <b>Slide</b></h2></div>
        <div class="col-sm-4">
            <br>
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
    <form method="post" accept-charset="utf-8" action="add-slide.php" enctype="multipart/form-data">
        <div class="form-group">
            <label> slide:</label>
            <input type="text" name="slide" id="slide" class='form-control' maxlength="100" required >
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
            <label>Imagen:</label>
            <input type="file" accept="image/*" name="img_slide" id="img_slide" class='form-control' required>
        
        </div>
        <div class="form-group">
            <label>Keywords:</label>
            <input type="text" name="keyword" id="keyword" class='form-control' maxlength="255" required>
        
        </div>
        
        <div class="col-md-12 pull-right">
        <hr>
            <input type="submit" class="btn btn-success" id="btn-add" name="btn-add" value="Guardar datos"/>
        </div>
    </form>
    <br>
</div>

<?php include("includes/footer.php");?>