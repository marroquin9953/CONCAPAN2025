var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');
var image = new Image();
var imageqr = new Image();

// Función para configurar el canvas con alta resolución
function setHighResolutionCanvas() {
    // Factor de escala para mejor resolución (aumentamos 4 veces)
    const scale = 4;
    
    // Dimensiones base del certificado
    const baseWidth = 1024;
    const baseHeight = 768;
    
    // Establecemos dimensiones internas del canvas con alta resolución
    canvas.width = baseWidth * scale;
    canvas.height = baseHeight * scale;
    
    // Mantenemos el tamaño de visualización original
    canvas.style.width = baseWidth + 'px';
    canvas.style.height = baseHeight + 'px';
    
    // Escalamos el contexto
    ctx.scale(scale, scale);
    
    // Configuramos para mejor calidad
    ctx.imageSmoothingEnabled = true;
    ctx.imageSmoothingQuality = 'high';
    
    return scale;
}

$(document).ready(function(){
    const scale = setHighResolutionCanvas();
    
    var curd_id = getUrlParameter('curd_id');

    $.post("../../controller/usuario.php?op=mostrar_curso_detalle", { curd_id : curd_id }, function (data) {
        data = JSON.parse(data);
        
        image.crossOrigin = "Anonymous";
        image.src = data.cur_img;
        
        image.onload = function() {
            // Limpiamos el canvas
            ctx.clearRect(0, 0, canvas.width/scale, canvas.height/scale);
            
            // Dibujamos la imagen con mejor calidad
            ctx.drawImage(image, 0, 0, canvas.width/scale, canvas.height/scale);
            
            // Mejoramos la calidad del texto
            ctx.textRendering = 'optimizeLegibility';
            ctx.font = `bold 25px "Arial"`;
            ctx.textAlign = "left"; // Cambio para alineación a la izquierda por si acaso
            ctx.textBaseline = 'middle';
            
            // Calculamos el texto a mostrar
            var text = data.usu_nom + ' ' + data.usu_apep + ' ' + data.usu_apem;
            
            // Calcular el ancho del texto
            var textWidth = ctx.measureText(text).width;

            // Centrar el texto horizontalmente (ajustamos la posición de 'x' en base al ancho del texto)
            var x = (canvas.width / scale - textWidth) / 2-100;
            
            // Añadimos sombra suave para mejor legibilidad
            ctx.shadowColor = 'rgba(0,0,0,0.2)';
            ctx.shadowBlur = 2;
            ctx.fillStyle = '#000000';
            ctx.fillText(text, x, 265);
            ctx.shadowColor = 'transparent';

            // ctx.font = '30px Arial';
            // ctx.fillText(data.cur_nom, x, 320);

            // ctx.font = '18px Arial';
            // ctx.fillText(data.inst_nom+' '+ data.inst_apep+' '+data.inst_apem, x, 420);
            // ctx.font = '15px Arial';
            // ctx.fillText('Instructor', x, 450);

            // ctx.font = '15px Arial';
            // ctx.fillText('Fecha de Inicio : '+data.cur_fechini+' / '+'Fecha de Finalización : '+data.cur_fechfin+'', x, 490);

            // /* Ruta de la Imagen */
            // imageqr.src = "../../public/qr/"+curd_id+".png";
            // /* Dimensionamos y seleccionamos imagen */
            // imageqr.onload = function() {
            //     ctx.drawImage(imageqr, 400, 500, 100, 100);
            // }
            $('#cur_descrip').html(data.cur_descrip);

        };  
        
    });
});

// Exportar a PNG con alta calidad
$(document).on("click", "#btnpng", function(){
    try {
        // Creamos un canvas temporal para la exportación
        const tempCanvas = document.createElement('canvas');
        const tempCtx = tempCanvas.getContext('2d');
        
        // Usamos las dimensiones reales del canvas (alta resolución)
        tempCanvas.width = canvas.width;
        tempCanvas.height = canvas.height;
        
        // Copiamos el contenido con máxima calidad
        tempCtx.drawImage(canvas, 0, 0);
        
        let lblpng = document.createElement('a');
        lblpng.download = "Certificado.png";
        // Exportamos con máxima calidad
        lblpng.href = tempCanvas.toDataURL('image/png', 1.0);
        lblpng.click();
        
    } catch (error) {
        console.error('Error al exportar PNG:', error);
    }
});

// Exportar a PDF con alta calidad
$(document).on("click", "#btnpdf", function(){
    try {
        // Obtenemos los datos de la imagen en máxima calidad
        var imgData = canvas.toDataURL('image/png', 1.0);
        
        // Creamos el PDF con opciones optimizadas
        var doc = new jsPDF({
            orientation: 'l',
            unit: 'mm',
            format: 'a4',
            compress: false,
            precision: 16
        });
        
        // Calculamos dimensiones para el PDF
        var pageWidth = doc.internal.pageSize.width;
        var pageHeight = doc.internal.pageSize.height;
        
        // Calculamos márgenes y dimensiones
        var margin = 5;
        var imageWidth = pageWidth - (margin * 2);
        var imageHeight = pageHeight - (margin * 2);
        
        // Añadimos la imagen con opciones de alta calidad
        doc.addImage(imgData, 'PNG', margin, margin, imageWidth, imageHeight, undefined, 'FAST', 0);
        
        // Guardamos con configuración optimizada
        doc.save('Certificado.pdf');
    } catch (error) {
        console.error('Error al exportar PDF:', error);
    }
});

function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
    return null;
}
