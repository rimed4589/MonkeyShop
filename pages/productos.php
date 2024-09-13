<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Productos</title>
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/estilos_Productos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- bootstrap-icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<header>
  <iframe class="iframe_nav" src="./nav.php" frameborder="0"></iframe>
</header>

<body>

  <?php
  require "../modelo/conexion.php";
  require "../controlador/registrar.php";
  require "../controlador/editar.php";
  require "../controlador/eliminar.php";
  $sql = $conexion->query("select * from img");
  ?>







  <!-- confirmarcion de eliminnacion -->
  <script>
    function eliminar() {
      let res = confirm("Estas seguro que deseas eliminar la imagen...?");
      return res;
    }
  </script>


  <!-- Modal Registro -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Registro</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" enctype="multipart/form-data" method="POST">
            <input type="file" class="form-control mb-2" name="imagen">
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Descripcion del Producto</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <input type="submit" value="Registrar" name="btnregistrar" class="form-control btn btn-success mt-2">
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="p-3 table-responsive">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Registrar
    </button>
    <table class="table table-hover table-stripped">
      <thead class="bg-dark text-white">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Foto</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($datos = $sql->fetch_object()) { ?>
          <tr>
            <th scope="row"><?php echo $datos->id_img; ?></th>
            <td>
              <img width="80" src="<?= $datos->foto ?>" alt="">
            </td>
            <td>
              <a data-bs-toggle="modal" data-bs-target="#exampleModalEditar<?= $datos->id_img ?>" class="btn btn-warning">Editar</a>
              <a href="./productos.php?id=<?= $datos->id_img ?> &nombre=<?= $datos->foto ?>" class="btn btn-danger" onclick="return eliminar()">Eliminar</a>
            </td>
          </tr>

          <!-- Modal Editar-->
          <div class="modal fade" id="exampleModalEditar<?= $datos->id_img ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Imagen</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="" enctype="multipart/form-data" method="POST">
                    <input type="hidden" value="<?= $datos->id_img ?>" name="id">
                    <input type="hidden" value="<?= $datos->foto ?>" name="nombre">
                    <input type="file" class="form-control mb-2" name="imagen">
                    <input type="submit" value="Modificar" name="btneditar" class="form-control btn btn-success">
                  </form>
                </div>
              </div>
            </div>
          </div>




        <?php }

        ?>


      </tbody>

    </table>

  </div>























  <footer>
    <iframe class="iframe_footer mb-0" src="./footer.php" frameborder="0"></iframe>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>


</body>

</html>