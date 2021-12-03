<div class="bg-primary">
    <div class="display-1 text-center text-light">
        CONTROL DE ALUMNOS
    </div>
    <?php 
        //Verificar que el usuario esté logueado
        if (array_key_exists("nombre_usuario", $_SESSION)) {
            echo 
                '<div class="text-right">
                    <form action="../controllers/loginController.php" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" value="Cerrar sesión" class="btn btn-primary">
                    </form>
                </div>';
        }
    ?>
</div>