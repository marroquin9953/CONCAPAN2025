<?php
// Llamamos al archivo de conexión
require_once("../../config/conexion.php");

// Verificamos si el usuario ha iniciado sesión
if (isset($_SESSION["usu_id"])) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php require_once("../html/MainHead.php"); ?>
  <title>SBRM | Presentaciones</title>
  <style>
    .accordion {
      margin: 20px 0;
    }
    .accordion-item {
      border: 1px solid #ddd;
      border-radius: 5px;
      margin-bottom: 10px;
      overflow: hidden;
    }
    .accordion-header {
      background-color: #f7f7f7;
      padding: 15px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
    }
    .accordion-content {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-out;
    }
    .accordion-content iframe {
      width: 100%;
      height: 300px;
      border: none;
    }
    .alert-custom {
      margin: 20px auto;
      max-width: 800px; /* Ajusta este ancho según sea necesario */
    }
  </style>
</head>
<body>
  <!-- Menú principal -->
  <?php require_once("../html/MainMenu.php"); ?>

  <!-- Cabecera principal -->
  <?php require_once("../html/MainHeader.php"); ?>

  <main class="br-mainpanel">
    <!-- Encabezado de página -->
    <header class="br-pageheader pd-y-15 pd-l-20">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="#">Home</a>
      </nav>
    </header>

    <!-- Título y descripción -->
    <section class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
      <h4 class="tx-gray-800 mg-b-5">Presentations</h4>
      <p class="mg-b-0">Select the day to view the presentations.</p>
      <p class="mg-b-0">These are the presentations during the SBRM 2024 event.</p>
    </section>

    <!-- Contenido principal -->
    <section class="br-pagebody mg-t-5 pd-x-30">
      <div class="accordion">
        <!-- Día 1 -->
        <div class="accordion-item">
          <div class="accordion-header" onclick="toggleAccordion(this)">
            Day 1: October 29, 2024
          </div>
          <div class="accordion-content">
            <iframe 
              src="https://drive.google.com/embeddedfolderview?id=1SYEbU3hUg-wHA758naoEEOD-DXmnhed2#list" 
              aria-label="Presentaciones Día 1">
            </iframe>
          </div>
        </div>

        <!-- Día 2 -->
        <div class="accordion-item">
          <div class="accordion-header" onclick="toggleAccordion(this)">
            Day 2: October 30, 2024
          </div>
          <div class="accordion-content">
            <iframe 
              src="https://drive.google.com/embeddedfolderview?id=1x5SUp89_h4DLCd1Z_QxW2OlIOrHmQ1kI#list" 
              aria-label="Presentaciones Día 2">
            </iframe>
          </div>
        </div>

        <!-- Día 3 -->
        <div class="accordion-item">
          <div class="accordion-header" onclick="toggleAccordion(this)">
            Day 3: October 31, 2024
          </div>
          <div class="accordion-content">
            <iframe 
              src="https://drive.google.com/embeddedfolderview?id=1cxkdjHzu8-qKm7csKeQW5iIm_oDARrKL#list" 
              aria-label="Presentaciones Día 3">
            </iframe>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Scripts principales -->
  <?php require_once("../html/MainJs.php"); ?>
  <script type="text/javascript" src="usupresentacion.js"></script>
</body>
</html>
<?php
} else {
  // Redirección en caso de no iniciar sesión
  header("Location:" . Conectar::ruta() . "view/404/");
  exit();
}
?>
