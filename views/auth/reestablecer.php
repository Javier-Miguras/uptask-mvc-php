<div class="contenedor reestablecer">
    
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Ingresa tu nuevo Password</p>

        <?php include_once __DIR__ . '/../templates/alertas.php'; ?>

        <?php if($mostrar): ?>

        <form class="formulario" method="post">
            <div class="campo">
                <label for="password">Password</label>
                <input id="password" type="password" placeholder="Tu Password" name="password">
            </div>

            <input type="submit" value="Reestablecer Password" class="boton">
        </form>

        <?php endif; ?>

        <div class="acciones">
            <a href="/crear">¿Aún no tienes una cuenta? Crear una</a>
            <a href="/olvide">¿Olvidaste tu password?</a>
        </div>

    </div> <!--contenedor-sm-->
</div>