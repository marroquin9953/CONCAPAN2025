<?php
/* Llamamos al archivo de conexion.php */
require_once("../../config/conexion.php");

if(isset($_SESSION["usu_id"])){
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once("../html/MainHead.php"); ?>
    <title>SBRM | Posters</title>
</head>
<body>
    <?php 
    require_once("../html/MainMenu.php");
    require_once("../html/MainHeader.php"); 
    ?>

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="#">Posters</a>
            </nav>
        </div>

        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Document</h4>
            <p class="mg-b-0">SBRM posters</p>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Posters</h6>
                <p class="mg-b-30 tx-gray-600">We share with you the posters accepted for the SBRM 2024 event. To view each poster in full, click on its title.</p>

                <div class="row">
                    <div class="col-md-4 mg-t-20 mg-md-t-0">
                        <div class="card bd-0">
                            <div class="card-body rounded-top bd-0 bg-success tx-white">
                                <h6 class="mg-b-3">
                                    <a href="https://drive.google.com/file/d/1xCvnHT8ad2O62C6TGdymkRhGh-COpjq3/view?usp=drive_link" class="tx-white hover-white-8">Optimized Voltage Control and Charging for 
                                    Lithium-Ion Batteries</a>
                                </h6>
                                <span class="tx-12 tx-white-8">Tamia Samyra Zambrano</span>
                            </div>
                            <img class="card-img-bottom img-fluid" 
                                 src="https://alex-marroquin.netlify.app/images/poster1-min.jpg" 
                                 alt="Image">
                        </div>
                    </div>

                    <div class="col-md-4 mg-t-20 mg-md-t-0">
                        <div class="card bd-0">
                            <div class="card-body rounded-top bd-0 bg-success tx-white">
                                <h6 class="mg-b-3">
                                    <a href="https://drive.google.com/file/d/1v9F6oAYmvp_oLMk0qZRLGMWQHJ856T9I/view?usp=drive_link" class="tx-white hover-white-8">Advantages and Disadvantages of FPV Drones</a>
                                </h6>
                                <span class="tx-12 tx-white-8">Marco Antonio Solís</span>
                            </div>
                            <img class="card-img-bottom img-fluid" 
                                 src="https://alex-marroquin.netlify.app/images/poster2-min.jpg" 
                                 alt="Image">
                        </div>
                    </div>

                    <div class="col-md-4 mg-t-20 mg-md-t-0">
                        <div class="card bd-0">
                            <div class="card-body rounded-top bd-0 bg-success tx-white">
                                <h6 class="mg-b-3">
                                    <a href="https://drive.google.com/file/d/1MEy2Ed-f8yc86JwYYVQeLa9r4bopochD/view?usp=drive_link" class="tx-white hover-white-8">Design of Rover for Space Exploration and
                                    Navigation in Unknown Environments.</a>
                                </h6>
                                <span class="tx-12 tx-white-8">Hector Jose Puentes and Fabian Rolando Jimenez</span>
                            </div>
                            <img class="card-img-bottom img-fluid" 
                                 src="https://alex-marroquin.netlify.app/images/poster6-min.jpg" 
                                 alt="Image">
                        </div>
                    </div>

                    <div class="col-md-4 mg-t-20 mg-md-t-0">
                        <div class="card bd-0">
                            <div class="card-body rounded-top bd-0 bg-success tx-white">
                                <h6 class="mg-b-3">
                                    <a href="https://drive.google.com/file/d/1jcDvbcf-oStC6B4DD5lMMiiTzOkpWXNW/view?usp=drive_link" class="tx-white hover-white-8">Hybrid Emergency Location System: Manual and Automatic SOS 
                                    Alert with Biometric Monitoring in Local and Satellite Environments</a>
                                </h6>
                                <span class="tx-12 tx-white-8">Sebastian Ibarra, Mario Lara and Anthony Fuentes</span>
                            </div>
                            <img class="card-img-bottom img-fluid" 
                                 src="https://alex-marroquin.netlify.app/images/poster4-min.jpg" 
                                 alt="Image">
                        </div>
                    </div>

                    <div class="col-md-4 mg-t-20 mg-md-t-0">
                        <div class="card bd-0">
                            <div class="card-body rounded-top bd-0 bg-success tx-white">
                                <h6 class="mg-b-3">
                                    <a href="https://drive.google.com/file/d/1LpbYokekqbM4o0aF1n5GlaaGG7Ndh-Kv/view?usp=drive_link" class="tx-white hover-white-8">Antimicrobial Hydrogels for Wound Healing: The 
                                    Potential of Croton elegans Extract from Ecuador</a>
                                </h6>
                                <span class="tx-12 tx-white-8">Denisse Enriquez, Pamela Espinosa, Solange Criollo, Ariel Lemos</span>
                            </div>
                            <img class="card-img-bottom img-fluid" 
                                 src="https://alex-marroquin.netlify.app/images/poster5-min.jpg" 
                                 alt="Image">
                        </div>
                    </div>

                    <div class="col-md-4 mg-t-20 mg-md-t-0">
                        <div class="card bd-0">
                            <div class="card-body rounded-top bd-0 bg-success tx-white">
                                <h6 class="mg-b-3">
                                    <a href="https://drive.google.com/file/d/1iTCn9hUyaAjoyELABkPEnhuakfE6Sii6/view?usp=drive_link" class="tx-white hover-white-8">Hey Buddy!: Design and Development of an Augmentative 
                                    and Alternative Communication Device for Children with 
                                    Autism Spectrum Disorder</a>
                                </h6>
                                <span class="tx-12 tx-white-8">Ariel Miranda and Camila Usama</span>
                            </div>
                            <img class="card-img-bottom img-fluid" 
                                 src="https://alex-marroquin.netlify.app/images/poster3-min.jpg" 
                                 alt="Image">
                        </div>
                    </div>

                    <div class="col-md-4 mg-t-20 mg-md-t-0">
                        <div class="card bd-0">
                            <div class="card-body rounded-top bd-0 bg-success tx-white">
                                <h6 class="mg-b-3">
                                    <a href="https://drive.google.com/file/d/1NTrsrAp9YQ6M0GxWL2bHhXjABz8d8CVY/view?usp=drive_link" class="tx-white hover-white-8">Evolution of Specialized Hardware Architectures: 
                                    From Vacuum Tubes to Quantum Computing Paradigms</a>
                                </h6>
                                <span class="tx-12 tx-white-8">Samir Fernando Cabrera, Pamela Yareth Morataya and
                                 Luis Gerardo Urbina.</span>
                            </div>
                            <img class="card-img-bottom img-fluid" 
                                 src="https://alex-marroquin.netlify.app/images/poster7-min.jpg" 
                                 alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once("../html/MainJs.php"); ?>
    <script type="text/javascript" src="usuposter.js"></script>
</body>
</html>
<?php
}else{
    /* Si no ha iniciado sesión se redireccionada a la ventana principal */
    header("Location:".Conectar::ruta()."view/404/");
}
?>