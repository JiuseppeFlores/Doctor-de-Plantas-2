<div class="container d-flex justify-content-center align-items-center" style="width:100vw;height:100vh;">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header bg-success text-center">
                    <label class="titulo-card text-light">Doctor de Plantas</label><br/>
                </div>
                <div class="card-img-top text-center text-success" style="padding:10px;">
                    <img src="./images/icons/icon_app.png" class="img-fluid" alt="logo aplicacion doctor de plantas" style="width:150px;height:150px;margin-top:20px;"/>
                </div>
                <div class="card-body text-center" style="z-index:">
                    <h5 class="card-title text-success"><strong>INICIAR SESIÓN</strong></h5>
                    <label class="form-label" for="form1">Ingrese su cédula de identidad para ingresar.</label>
                    <div class="form-outline mt-1">
                        <!--<i class="fas fa-exclamation-circle trailing"></i>-->
                        <input type="number" id="ci_user" class="form-control form-control-lg form-icon-trailing" autofocus/>
                        <label class="form-label" for="form1">C.I.</label>
                    </div>
                    <div id="input_validation" class="form-text text-danger text-start" style="display:none;">
                        
                    </div>
                    <div class="row ps-3 pe-3">
                        <button type="button" id="btn_iniciar_sesion" class="btn btn-success btn-rounded mt-3">INICIAR SESIÓN</button>
                        <button type="button" id="btn_registrar_usuario" class="btn btn-warning btn-rounded mt-2">REGISTRARSE</button>
                    </div>
                </div>
                <div class="card-footer text-center text-success">
                    <label>Versión 8.1.1</label>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./js/login.js"></script>