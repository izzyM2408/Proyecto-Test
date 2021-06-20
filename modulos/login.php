<div class="card" style="width: 18rem; margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added *">
    <div class="card-body">
        <!--begin::Login Sign in form-->
        <div class="login-signin">
            <div class="mb-20">
                <h3 class="opacity-40 font-weight-normal">Login</h3>

            </div>
            <form method="post">
                <div class="form-group">
                    <input class="form-control " type="email" placeholder="Usuario" name="ingUsuario" autocomplete="off"/>
                </div>
                <br>
                <div class="form-group">
                    <input class="form-control " type="password" placeholder="Contraseña" name="ingPassword"/>
                </div>
                <br>
                <div class="form-group text-center mt-10">
                    <!--<button type="submit" id="" class="btn btn-pill btn-primary opacity-90 px-15 py-3">Ingresar</button>-->
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                </div>

                <?php
                $login = new ControladorUsuarios();
                $login -> ctrIngresoUsuario();
                ?>

            </form>
            <a href="registrarse.php">Registrarse</a>

        </div>
        <!--end::Login Sign in form-->

    </div>
</div>
