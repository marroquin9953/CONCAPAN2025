<?php
  /* Llamamos al archivo de conexion.php */
  require_once("../../config/conexion.php");
  if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once("../html/MainHead.php"); ?>

    <title>SBRM | Encuesta</title>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
  </head>

  <body>

    <?php require_once("../html/MainMenu.php"); ?>

    <?php require_once("../html/MainHeader.php"); ?>

    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="#">Feedback Survey</a>
        </nav>
      </div>
      <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Satisfaction Survey</h4>
      </div>
    
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <p class="mg-b-30 tx-gray-600">Complete the following information (*)</p>

          <section class="row">
            <section class="col-md-12">
                <h3>Participant's information</h3>
                <p></p>
            </section>
        </section>
        <section class="row">
            <section class="col-md-12">
                <section class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nombreCompleto">Full name</label>
                            <input type="text" class="form-control" name="usu_nom" id="usu_nom" readonly>
                        </div>
                    </div>
                </section>               
                <section class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombreCompleto">Email</label>
                            <input type="text" class="form-control" name="usu_correo" id="usu_correo" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombreCompleto">Phone number</label>
                            <input type="text" class="form-control" name="usu_telf" id="usu_telf" readonly>
                        </div>
                    </div>
            </section>
        </section>
        <hr />

        <section class="row">
                <div class="col-md-12">
                    <h3></h3>
                    <p></p>
                </div>
            </section>
    <!-- Contenedor Principal -->
    <div id="main-container">
        <!-- Formulario de Encuesta -->
        <div id="form-encuesta" style="display: none;">
            <form id="encuesta-form">
            <div id="panel1">
            <section class="row">
                <div class="col-md-12">
                <p class="mg-b-30 tx-gray-600">We really appreciate you filling out this survey.</p>
                    <p></p>
                </div>
            </section>

            <section class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="comment">1. What do you think about  the logistics management prior to the event?:</label>
                        <div class="col-md-12 text-center">
                            <input id="p_1_c" name="p_1_c" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="0">
                        </div>
                    </div>
                </div>
            </section>

            <section class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="comment">2. How would you rate the communication prior to the event?:</label>
                        <div class="col-md-12 text-center">
                            <input id="p_2_c" name="p_2_c" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="0">
                        </div>
                    </div>
                </div>
            </section>

            <section class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="comment">3. How would you rate the information provided for reaching the event venue?:</label>
                        <div class="col-md-12 text-center">
                            <input id="p_3_c" name="p_3_c" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="0">
                        </div>
                    </div>
                </div>
            </section>

            <section class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="comment">4. What aspects do you believe we should improve?:</label>
                        <textarea id="p_4_t" name="p_4_t" class="form-control" rows="6" id="comentarios"></textarea>
                    </div>
                </div>
            </section>

            <section class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="comment">5. What do you think about the event opening, where it started in English?:</label>
                        <div class="col-md-12 text-center">
                            <input id="p_5_c" name="p_5_c" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="0">
                        </div>
                    </div>
                </div>
            </section>

            <section class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="comment">6. What do you think of the poster fair?:</label>
                        <div class="col-md-12 text-center">
                            <input id="p_6_c" name="p_6_c" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="0">
                        </div>
                    </div>
                </div>
            </section>

            <section class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="comment">7. What do you think of the branch fair?:</label>
                        <div class="col-md-12 text-center">
                            <input id="p_7_c" name="p_7_c" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="0">
                        </div>
                    </div>
                </div>
            </section>

            <section class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="comment">8. What kind of features do you think could improve your experience with our accommodation?:</label>
                        <textarea id="p_8_t" name="p_8_t" class="form-control" rows="6" id="comentarios"></textarea>
                    </div>
                </div>
            </section>

            <section class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="comment">09. What do you think of the spaces offered by the societies on the second day? (Technical talks and society fair):</label>
                        <div class="col-md-12 text-center">
                            <input id="p_9_c" name="p_9_c" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="0">
                        </div>
                    </div>
                </div>
            </section>

            <section class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="comment">10. What do you think about the gala dinner?:</label>
                        <div class="col-md-12 text-center">
                            <input id="p_10_c" name="p_10_c" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="0">
                        </div>
                    </div>
                </div>
            </section>

            <section class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="comment">11. What could we improve to make your experience more memorable and encourage you to visit the country again for future IEEE events?:</label>
                        <textarea id="p_11_t" name="p_11_t" class="form-control" rows="6" id="comentarios"></textarea>
                    </div>
                </div>
            </section>

            <section class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="comment">12. What do you think of the spaces and different talks we had throughout the day?:</label>
                        <div class="col-md-12 text-center">
                            <input id="p_12_c" name="p_12_c" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="0">
                        </div>
                    </div>
                </div>
            </section>

            <section class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="comment">13. What do you think of the Nations Fair?:</label>
                        <div class="col-md-12 text-center">
                            <input id="p_13_c" name="p_13_c" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="0">
                        </div>
                    </div>
                </div>
            </section>

            <section class="row d-flex justify-content-center align-items-center" style="height: 10vh;">
               <div class="col-md-12 text-center">
                  <h5>Thank you in advance for your help!</h5>
                    </div>
            </section>


          <div class="form-layout-footer">
              <button class="btn btn-info" id="btnactualizar">Send Survey</button>
            </div>
          </div>

        </div>
      </div>
    </div>
   <!-- Mensaje de Agradecimiento -->
    <div id="mensaje-agradecimiento" style="display: none; text-align: center; display: flex; justify-content: center; align-items: center; height: 10vh;">
    <label for="comment">Thank you very much for completing the survey! 🏆</label>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>

    <?php require_once("../html/MainJs.php"); ?>
    <script type="text/javascript" src="encuesta.js"></script>
  </body>
</html>
<?php
  }else{
    /* Si no a iniciado sesion se redireccionada a la ventana principal */
    header("Location:".Conectar::ruta()."view/404/");
  }
?>