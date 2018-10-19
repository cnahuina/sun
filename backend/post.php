<?php

include("includes/header.php"); 
include("util/conexion.php"); 

	$blogPosts =$pdo->query("SELECT p.* ,c.categoria ,u.usuario
  FROM post p,categ_post c, usuario u
  WHERE p.id_cat=c.id_cat and u.id_usuario=p.id_usuario;");

?>

<h2>Principal</h2>

<div class="table-responsive">
<table class="table table-striped table-sm">
    <thead>
      <tr>
        <td>ID</td>
        <td>Titulo</td>
        <td>Categoria</td>
        <td>Autor</td>
        <td>Acciones</td>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($blogPosts as $blogPost):?>
      <tr>
        <td style="vertical-align:middle;"><?php echo $blogPost['id_post'];?></td>
        <td style="vertical-align:middle;"><?php echo $blogPost['titulo'];?></td>
        <td style="vertical-align:middle;"><?php echo $blogPost['categoria'];?></td>
        <td style="vertical-align:middle;"><?php echo $blogPost['usuario'];?></td>
        <td style="vertical-align:middle;"><img width="80" src="uploads/<?php echo $blogPost['img_post'];?>"/></td>
        <td style="vertical-align:middle;"><a href="update-post.php?editId=<?php echo $blogPost['id_post'];?>">Edit </a> | 
        <a href="delete-post.php?id_post=<?php echo $blogPost['id_post'];?>">Delete </a> </td>
      </tr>
    <?php endforeach?>
    </tbody>
</table>
</div>


<?php include("includes/footer.php")?>