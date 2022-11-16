
<script src="https://kit.fontawesome.com/357827b059.js" crossorigin="anonymous"></script>
<div class="Inicio">
  <a href="http://localhost/Proyecto Git/Urban-Trade/Controllers/PublicationsController.php?action=insert">
    <i class="fa-solid fa-house"></i>
    AGREGAR PUBLICACION
  </a>
</div>

<div class="ui container">
    <h1> Listado Publicaciones</h1>
    <?php foreach ($objetoretornadopublication as $publication) { ?>
        <div class="ui card">
            <div class="image">
                <img src="<?php echo $publication->fotos_p_url; ?>">
            </div>
            <div class="content">
                <a class="header"><?php echo $publication->nombre_p;?></a>
                <div class="meta">
                    <span class=""><?php echo $publication->precios_p; ?></span>
                </div>
                <div class="description">
                    <?php echo $publication->info_p; ?>
                </div>
            </div>
            <div class="extra content">
                <span>
                    <i class="edit icon"></i>
                    <button onclick="actualizar(<?php echo $publication->id_p; ?>)">Actualizar</button>
                </span>
                <span class="right floated">
                    <i class="trash icon"></i>
                    <button onclick="borrar(<?php echo $publication->id_p; ?>,'<?php echo $publication->fotos_p ?>')">Eliminar</button>
                </span>
            </div>

        </div>
        <br>
    <?php } ?>

