<?php 
    include("includes/header.php");
    include("model/inserta_post.php");
    include("util/consultas.php");
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
    <form method="post" accept-charset="utf-8" action="add-post.php" enctype="multipart/form-data">
        <div class="form-group">
            <label> Titulo:</label>
            <input type="text" name="titulo" id="titulo" class='form-control' maxlength="100" required >
        </div>
        <div class="form-group">
            <label>SubTitulo:</label>
            <input type="text" name="subtitulo" id="subtitulo" class='form-control' maxlength="100" required>
        </div>
        <div class="form-group">
            <label>Descripción Larga:</label>
            <textarea  name="desc_larga" id="desc_larga" class='form-control'  required></textarea>
        </div>
        <div class="form-group">
            <label>Descripción Corta:</label>
            <input type="text" name="desc_corta" id="desc_corta" class='form-control' required >
        </div>
        <div class="form-group">
            <label>Imagen:</label>
            <input type="file" accept="image/*" name="img_post" id="img_post" class='form-control' maxlength="64" required>
        
        </div>
        <div class="form-group">
            <label>Keywords:</label>
            <input type="text" name="keywords" id="keywords" class='form-control' maxlength="64" required>
        
        </div>
        <div class="form-group">
            <label for="cbAutor">Autor</label>
            <select name="cbAutor" id="cbAutor">
                <?php foreach ($rowsAutor as $rowAu) {
                    echo '<option value="'.$rowAu['id_usuario'].'">'.$rowAu['usuario'].'</option>';
                }?>
              
            </select>
           <!-- <input type="text" name="autor" id="autor" class='form-control' maxlength="64" required> -->
        
        </div>
        <div class="form-group">
            <label for="cbCategoria">Categoria</label>
            <select name="cbCategoria" id="cbCategoria">
                <?php foreach ($rowsCat as $rowCat) {
                    echo '<option value="'.$rowCat['id_cat'].'">'.$rowCat['categoria'].'</option>';
                }?>
            </select>
            <!-- <input type="text" name="categoria" id="categoria" class='form-control' maxlength="64" required>-->
        
        </div>
        <div class="col-md-12 pull-right">
        <hr>
            <input type="submit" class="btn btn-success" id="btn-add" name="btn-add" value="Guardar datos"/>
        </div>
    </form>
    <br>
</div>

<?php include("includes/footer.php");?>