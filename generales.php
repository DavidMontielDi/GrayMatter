<?php

    function menuGeneral()

    {
?>
        <header class="header-section">

            <a href="index.php" class="site-logo">

                <img src="img/logo.png" alt="">

            </a>

            <nav class="header-nav">

                <ul class="main-menu">

                    <li><a href="index.php" >Inicio</a></li>

                    <li><a href="acercaDe.php">Acerca de</a></li>

                    <li><a href="contacto.php">Contacto</a></li>

                </ul>

                <div class="header-right">

                    <div class="user-panel">

                        <a href="" class="login"></a>

                        <a href="login.php" class="register">Iniciar Sesion</a>

                    </div>

                </div>

            </nav>

	    </header>
<?php
    }
    function pie(){?>
    <footer class="footer-section">

        <div class="container">

            <div class="row text-white">

                <div class="col-lg-4">

                    <div class="footer-widger">

                        <div class="about-widget">

                            <div class="aw-text">

                                <img src="img/footer-logo.png" alt="">

                                <p>Gray Matter es una empresa en desarrollo para la mejora del consumo de la energia, ofreciendo su servicio en todo tipo de mercado, adaptandose a sus necesidades.</p>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-2 col-md-2 col-sm-6">

                    <div class="footer-widger">

                        <h2>Miembros</h2>
                        <p>Sandra Coronado</p>
                        <p>Yaritza Sicre</p>
                        

                    </div>

                </div>
                <div class="col-lg-2 col-md-2 col-sm-6">

                    <div class="footer-widger">

                        <h2></h2>
                        <p>Ricardo Ascencio</p>
                        <p>David Montiel</p>
                        <p>Luis Flores</p>
                        

                    </div>

                </div>

            </div>

            <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>

        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>

        </div>

</footer>
  <?php  }




function menuSesion()

{
?>
    <header class="header-section">

        <a href="index.php" class="site-logo">

            <img src="img/logo.png" alt="">

        </a>

        <nav class="header-nav">

            <ul class="main-menu">

                <li><a href="index.php" >Inicio</a></li>

                <li><a href="acercaDe.php">Acerca de</a></li>

                <li><a href="contacto.php">Contacto</a></li>

            </ul>

            <div class="header-right">

                <div class="user-panel">

                    <a href="" class="login"></a>

                    <a href="index.php" class="register">Cerrar Sesion</a>

                </div>

            </div>

        </nav>

    </header>
<?php
}




?>