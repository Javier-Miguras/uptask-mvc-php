<div class="contenedor olvide">

    <?php include_once __DIR__ . '/../templates/nombre-sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Recupera tu Acceso a UpTask</p>

        <?php include_once __DIR__ . '/../templates/alertas.php'; ?>

        <form class="formulario" action="/olvide" method="post">

            <div class="campo">
                <label for="email">Email</label>
                <input id="email" type="email" placeholder="Tu Email" name="email">
            </div>

            <input type="submit" value="Enviar Instrucciones" class="boton">
        </form>

        <div class="acciones">
            <a href="/">¿Ya tienes una cuenta? Iniciar sesión</a>
            <a href="/crear">¿Aún no tienes una cuenta? Crear una</a>
        </div>

    </div> <!--contenedor-sm-->
</div>