<div class="row">
    <!--<div class="carousel carousel-slider center carrusel">
        <div class="carousel-fixed-item center">
            <a class="btn waves-effect white grey-text darken-text-2">button</a>
        </div>
        <div class="carousel-item white-text carrusel-item" href="#one!" style="background:linear-gradient(rgba(26, 56, 4, 0.4), rgba(165, 214, 167, 0)), url(images/carrusel/1.jpg);">
            <h2>Doctor de Plantas</h2>
            <p class="white-text">Bienvenid@!</p>
        </div>
        <div class="carousel-item white-text carrusel-item" href="#two!" style="background:linear-gradient(rgba(26, 56, 4, 0.7), rgba(165, 214, 167, 0)), url(images/carrusel/2.jpg);">
            <h2>Frutales</h2>
            <p class="white-text">Diagnosticos frutales</p>
        </div>
        <div class="carousel-item white-text carrusel-item" href="#three!" style="background:linear-gradient(rgba(26, 56, 4, 0.7), rgba(165, 214, 167, 0)), url(images/carrusel/3.jpg);">
            <h2>Cultivos</h2>
            <p class="white-text">¡Muy pronto!, diagnóstico en cultivos.</p>
        </div>
    </div>-->
        <div class="bg bg1"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>
        <div class="capa"></div>
</div>
<div class="container">
    <div class="section">
        <h4>¿Cómo funciona?</h4>
        <div class="row text-center center">
            <div class="col s12 m4 l4 xl2 offset-m2 offset-l2 offset-xl2 center">
                <img src="images/icons/icon_app.png" style="width:150px;padding-top:30px;">
            </div>
            <div class="col s12 m4">
                <div class="row">
                        <p>Es un buscador inteligente que proporciona las buenas prácticas y posibles diagnósticos para los problemas de sus cultivos. El orden de los diagnósticos no es una indicación de la probabilidad clínica, sino que coincide entre los síntomas consultados y nuestra base de datos.</p>
                </div>
                <!--<div class="row center">
                    <a class="waves-effect waves-light btn green"><i class="material-icons left">person</i>INICIAR SESIÓN</a>
                </div>-->
            </div>
        </div>
    </div>
    

    <div class="divider"></div>

    <div class="section">
        <h4>Asistencia Técnica</h4>
        <div class="row">
            <div class="col s12 m4">
                <!-- Promo Content 1 goes here -->
                <div>
                    <div class="center" style="padding-top:20px;">
                        <img src="./images/logo_suiza.png" style="width:100px;"/>
                    </div>
                    <div class="card-content center">
                        <h5 class="card-title">Cooperación Suiza en Bolivia</h5>
                    </div>
                    <div class="card-action center">
                        <a href="http://www.swisscontact.org/es/country/bolivia/home/mercados-rurales.html" target="_blank">Visitar</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <!-- Promo Content 2 goes here -->
                <div>
                    <div class="center" style="padding-top:20px;">
                        <img src="./images/logo_sweden.png" style="width:100px;"/>
                    </div>
                    <div class="card-content center">
                        <h5 class="card-title">Suecia Sverige</h5>
                        <p></p>
                    </div>
                    <div class="card-action center">
                        <!--<a href="#" target="_blank">Visitar</a>-->
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <!-- Promo Content 3 goes here -->
                <div>
                    <div class="center"  style="padding-top:20px;">
                        <img src="./images/logo_fautapo.png"  style="width:100px;"/>
                    </div>
                    <div class="card-content center">
                        <h5 class="card-title">FAUTAPO</h5>
                    </div>
                    <div class="card-action center">
                        <a href="http://www.fundacionautapo.org/" target="_blank">Visitar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.carousel').carousel();

        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });
        setTimeout(autoplay, 4500);
        function autoplay() {
            $('.carousel').carousel('next');
            setTimeout(autoplay, 4500);
        }
    });
</script>