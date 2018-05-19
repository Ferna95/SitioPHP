        <footer>
            <div class="footer-content">
                <div class="column-foot">
                    Cerrito y San Martin<br />
                    Tel.: +54 341-3092012<br />
                    Rosario<br />
                    Santa Fe - Argentina<br />
                </div>
                <div class="column-foot">
                    Lunes a Viernes - 7:00 to 23:00hs<br />
                    <a href="about.php" class="link-footer">Sobre nosotros</a><br />
                    <a href="clases.php" class="link-footer">Clases</a><br />
                    © Copyright – Gimnsaio Vida Fitness<br />
                </div>
                <div class="column-foot">
                    Visitanos en:<br />
                    Facebook<br />
                    Instragram<br />
                    Twitter<br />
                </div>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/functions.js"></script>
        <script src="js/jquery.smoothState.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
        <script src="js/validaciones.js"></script>
        <?php 
            if(isset($_SESSION['ErrorActual'])){
                echo $_SESSION['ErrorActual'];
                unset($_SESSION['ErrorActual']);
            }
        ?>
        <?php if(isset($_GET['m'])) 
            { 
                echo "<script type='text/javascript'>alert('".$_GET['m']."')</script>"; 
            }
        ?>
    </body>
</html>