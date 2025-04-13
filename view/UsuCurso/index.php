<?php
  /* Llamamos al archivo de conexion.php */
  require_once("../../config/conexion.php");
  if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once("../html/MainHead.php"); ?>
    <title>SBRM | Certificado</title>
  </head>

  <body>

    <?php require_once("../html/MainMenu.php"); ?>
    <?php require_once("../html/MainHeader.php"); ?>

    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="#">My Certificates</a>
        </nav>
      </div>
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">My Certificates</h4>
        <p class="mg-b-0">List of Certificates</p>
      </div>

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">List of Certificates</h6>
          <p class="mg-b-25 mg-lg-b-50">In order to view your certificate, you must first complete the feedback.</p>

          <div class="table-wrapper">
            <table id="cursos_data" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Certificate</th>
                  <th class="wd-15p">Start Date</th>
                  <th class="wd-20p">End Date</th>
                  <th class="wd-15p">Technical support</th>
                  <th class="wd-10p"></th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
    <?php require_once("../html/MainJs.php");?>
    <script type="text/javascript" src="usucurso.js"></script>
  </body>
</html>
<?php
  }else{
    /* Si no a iniciado sesion se redireccionada a la ventana principal */
    header("Location:".Conectar::ruta()."view/404/");
  }
?>