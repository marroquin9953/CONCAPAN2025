<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once("../html/MainHead.php"); ?>
    <title>Certificado</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container-canvas {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            gap: 20px;
        }

        .canvas-wrapper {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        canvas {
            max-width: 100%;
            height: auto !important; /* Forzar altura automática */
            width: auto !important; /* Permitir que el ancho se ajuste naturalmente */
            max-height: 80vh; /* Altura máxima relativa al viewport */
            display: block;
        }

        .certificate-description {
            width: 100%;
            max-width: 800px;
            text-align: center;
        }

        .button-container {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .action-button {
            padding: 10px 20px;
            transition: transform 0.2s;
        }

        .action-button:hover {
            transform: translateY(-2px);
        }

        /* Ajustes para móviles */
        @media (max-width: 768px) {
            .container-canvas {
                padding: 10px;
            }

            canvas {
                width: 100% !important; /* Forzar ancho completo en móviles */
                max-height: none; /* Eliminar restricción de altura máxima */
            }

            .button-container {
                flex-direction: column;
                width: 100%;
                padding: 0 20px;
            }

            .action-button {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container-canvas">
        <div class="canvas-wrapper">
            <canvas id="canvas" aria-label="Certificado digital"></canvas>
        </div>

        <div class="certificate-description">
            <p class="tx-16 text-justify" id="cur_descrip"></p>
        </div>
        <div class="button-container">
            <button class="btn btn-outline-info action-button" id="btnpng">
                <i class="fa fa-download mg-r-10"></i> Download PNG
            </button>
            <button class="btn btn-outline-success action-button" id="btnpdf">
                <i class="fa fa-file-pdf-o mg-r-10"></i> Download PDF
            </button>
        </div>
    </div>

    <?php require_once("../html/MainJs.php"); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
    <script type="text/javascript" src="certificado.js"></script>

    <script>
    // Agregar este script para asegurar que el canvas se redimensione correctamente
    function resizeCanvas() {
        const canvas = document.getElementById('canvas');
        const wrapper = document.querySelector('.canvas-wrapper');
        const container = document.querySelector('.container-canvas');
        
        // Obtener el ancho disponible
        const availableWidth = wrapper.clientWidth;
        
        // Si tienes las dimensiones originales del certificado, puedes mantener la proporción
        const aspectRatio = canvas.height / canvas.width;
        
        // Ajustar el canvas al ancho disponible
        canvas.style.width = Math.min(availableWidth, window.innerWidth - 40) + 'px';
        canvas.style.height = 'auto';
    }

    // Ejecutar al cargar y cuando cambie el tamaño de la ventana
    window.addEventListener('load', resizeCanvas);
    window.addEventListener('resize', resizeCanvas);
    </script>
</body>
</html>