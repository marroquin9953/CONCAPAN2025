<?php
  /* Llamamos al archivo de conexion.php */
  require_once("../../config/conexion.php");
  if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once("../html/MainHead.php"); ?>

    <title>SBRM | Mi perfil</title>
  </head>

  <body>

    <?php require_once("../html/MainMenu.php"); ?>

    <?php require_once("../html/MainHeader.php"); ?>

    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="#">Profile</a>
        </nav>
      </div>
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Profile</h4>
        <p class="mg-b-0">Profile Screen</p>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Profile</h6>
          <p class="mg-b-30 tx-gray-600">Update your information</p>

          <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="usu_nom" id="usu_nom" placeholder="Nombre" required>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Paternal Last Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="usu_apep" id="usu_apep" placeholder="Paternal Last Name">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Maternal Last Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="usu_apem" id="usu_apem" placeholder="Maternal Last Name">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Email Address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="usu_correo" id="usu_correo" readonly>
                </div>
              </div>
              <div class="col-lg-6">
              <div class="form-group">
              <label class="form-control-label">Password: <span class="tx-danger">*</span></label>
              <input class="form-control" type="password" name="usu_pass" id="usu_pass" placeholder="Enter Password">
              </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Gender: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" name="usu_sex" id="usu_sex" data-placeholder="Select">
                    <option label="Seleccione"></option>
                    <option value="F">Female</option>
                    <option value="M">Male</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Phone Number: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" name="usu_telf" id="usu_telf" placeholder="Enter Phone Number">
                </div>
              </div>
            </div>

            <div class="form-layout-footer">
              <button class="btn btn-info" id="btnactualizar">Update</button>
            </div>
          </div>

        </div>
      </div>
    </div>

    <?php require_once("../html/MainJs.php"); ?>
    <script type="text/javascript" src="usuperfil.js"></script>
  </body>
</html>
<?php
  }else{
    /* Si no a iniciado sesion se redireccionada a la ventana principal */
    header("Location:".Conectar::ruta()."view/404/");
  }
?>