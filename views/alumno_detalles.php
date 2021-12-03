<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fundamentos2122.github.io/framework-css-JosueSO/css/framework.css">
    <title>Document</title>
    <style>
        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .card {
            border-radius: 0.5em;
        }
    </style>
</head>
<body class="container">
    <?php include("banner.php"); ?>

    <h4 class="border-bottom py-2">Editar alumno</h4>
    <form id="form_put" action="../controllers/alumnosController.php" method="post" class="row" autocomplete="off" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        <div class="col-6 form-group">
            <label for="cve_unica">Clave única</label>
            <input type="text" name="cve_unica" class="form-control" id="cve_unica">
        </div>
        <div class="col-6 form-group">
            <label for="nombre_completo">Nombre Completo</label>
            <input type="text" name="nombre_completo" class="form-control" id="nombre_completo">
        </div>
        <div class="col-6 form-group">
            <label for="fecha_nacimiento">Fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" id="fecha_nacimiento">
        </div>
        <div class="col-6 form-group">
            <label for="foto">Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <div class="col-12 form-group text-center">
            <input type="submit" value="Guardar" class="btn btn-success">
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>

    <form id="form_delete" action="../controllers/alumnosController.php" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Eliminar" class="btn btn-danger">
    </form>

    <script>
        const formPut = document.getElementById("form_put");
        const formDelete = document.getElementById("form_delete");
        const input_cveUnica = document.getElementById("cve_unica");
        const input_nombreCompleto = document.getElementById("nombre_completo");
        const input_fechaNacimiento = document.getElementById("fecha_nacimiento");

        const id_alumno = "" + <?php echo $_GET["id"] ?> + "";

        getAlumno();

        function getAlumno() {
            var xhttp = new XMLHttpRequest();

            xhttp.open("GET", "../controllers/alumnosController.php?id=" + id_alumno, false);

            xhttp.onreadystatechange = function() {
                if(this.readyState == 4) {
                    var alumno = JSON.parse(this.responseText);

                    formPut.action += "?id=" + alumno.id;
                    formDelete.action += "?id=" + alumno.id;

                    input_cveUnica.value = alumno.cve_unica;
                    input_nombreCompleto.value = alumno.nombre_completo;
                    input_fechaNacimiento.value = alumno.fecha_nacimiento;
                }
            };

            xhttp.send();
        }
    </script>
</body>
</html>