<div class="contenedor crear">

    <?php include_once __DIR__ . '/../templates/nombre-sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Crea tu Cuenta en UpTask</p>

        <?php include_once __DIR__ . '/../templates/alertas.php'; ?>

        <form class="formulario" action="/crear" method="post">
        <div class="campo">
                <label for="nombre">Nombre</label>
                <input id="nombre" type="text" placeholder="Tu Nombre" name="nombre" value="<?php $usuario->nombre; ?>">
            </div>

            <div class="campo">
                <label for="email">Email</label>
                <input id="email" type="email" placeholder="Tu Email" name="email" value="<?php $usuario->email; ?>">
            </div>

            <div class="campo">
                <label for="password">Password</label>
                <input id="password" type="password" placeholder="Tu Password" name="password">
            </div>

            <div class="campo">
                <label for="password2">Repetir Password</label>
                <input id="password2" type="password" placeholder="Repite tu Password" name="password2">
            </div>

            <input type="submit" value="Crear Cuenta" class="boton">
        </form>

        <div class="acciones">
            <a href="/">¿Ya tienes una cuenta? Iniciar sesión</a>
            <a href="/olvide">¿Olvidaste tu password?</a>
        </div>

    </div> <!--contenedor-sm-->
</div>