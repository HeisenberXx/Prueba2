<?php include('./db.php')?>
<?php include('./includes/header.php')?>

<div class="container p-5">
    <div class="row">
        <div class="col-4">
            <?php if(isset($_SESSION['mensaje'])){?>
                <div class="alert alert-warning" role="alert"><?php echo $_SESSION['mensaje'] ?></div>
            <?php }?>
            <div class="card card-body">
                <form action="guardar.php" method="post">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="nombre alumno">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" name="apellido" class="form-control" placeholder="apellido alumno">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="number" name="nota" class="form-control" placeholder="nota alumno">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" name="enviado" class="form-control" value="enviar">
                    </div>
                </form>
            </div>
        </div>

        <div class="col-8">

        </div>
    </div>
</div>
<?php include('./includes/footer.php')?>