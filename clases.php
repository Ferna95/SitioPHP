<?php include "head.php" ?>
<?php include "clase-adapter.php" ?>

<?php $clases = getClases()?>
    
    <div class="clases-container">
        <?php foreach ($clases as $clave => $c) { ?>
            <?php if($clave % 2 == 0){ ?>
                <div class="div-clase clase-p">
            <?php } else { ?>
                <div class="div-clase clase-i">
            <?php } ?>
                    <div class="clase">
                        <img class="img-clase clase-field" src="https://westwight.org.uk/wp-content/uploads/2018/01/12208762_995467120517853_7018141057947368028_n.jpg" />
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