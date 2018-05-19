<?php session_start()?>
<?php include "head.php" ?>
<?php include "clase-adapter.php" ?>

<?php $clases = getClases()?>
    
    <div class="clases-container">
        <?php foreach ($clases as $clave => $c) { ?>
            <?php if($clave % 2 == 0){ ?>
                <div class="div-clase clase-p">
                    <div class="clase">
                        <img class="img-clase clase-field" src="images/slider2.jpg" />
            <?php } else { ?>
                <div class="div-clase clase-i">
                    <div class="clase">
                        <img class="img-clase clase-field" src="images/block2.jpg" />
            <?php } ?>
                        <div class="info-clase">
                            <h2 class="title-clase clase-field"><?php echo $c['nombre'] ?></h2>
                            <p class="p-clase clase-field"><?php echo $c['descripcion'] ?></p>
                            <?php if($_SESSION['TipoUsuario']==1){ ?>
                                <a class="a-calendario" href="calendario.php">Inscribite</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
        <?php } ?>    
    </div>
    
<?php include("foot.php") ?>