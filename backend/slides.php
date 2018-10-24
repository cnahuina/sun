<?php

  include("includes/header.php"); 
  include("util/conexion.php"); 
	$slides =$pdo->query("SELECT * FROM slide");

?>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h2>Slides</h2>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
        <a class="btn btn-sm btn-outline-secondary" href="add-slide.php">Agregar</a>
        <button class="btn btn-sm btn-outline-secondary">Exportar</button>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
        </button>
    </div>
</div>
<div class="table-responsive">
<table class="table table-striped table-sm">
    <thead class="thead-dark">
      <tr>
        <td>ID</td>
        <td>Imagen</td>
        <td>Slides</td>
        <td>Fecha Fin</td>
        <td>Orden</td>
        <td>Acciones</td>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($slides as $slide):?>
      <tr>
        <td style="vertical-align:middle;"><?php echo $slide['id_slide'];?></td>
        <td style="vertical-align:middle;"><img width="80" src="uploads/slides/<?php echo $slide['img_slide'];?>"/></td>
        <td style="vertical-align:middle;"><?php echo $slide['slide'];?></td>
        <td style="vertical-align:middle;"><?php echo $slide['fecha_fin'];?></td>
        <td style="vertical-align:middle;"><?php echo $slide['orden'];?></td>

        <td style="vertical-align:middle;"><a href="update-slide.php?editId=<?php echo $slide['id_slide'];?>">Edit </a> | 
        <a href="delete-slide.php?editId=<?php echo $slide['id_slide'];?>">Delete </a> </td>
      </tr>
    <?php endforeach?>
    </tbody>
</table>
</div>


<?php include("includes/footer.php")?>