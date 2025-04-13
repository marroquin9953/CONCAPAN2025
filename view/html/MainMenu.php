<div class="br-logo"><a href="../UsuHome/"><span>[</span>IEEE<span>]</span></a></div>

<div class="br-sideleft overflow-y-auto">
  <label class="sidebar-label pd-x-15 mg-t-20">Menu</label>
  <div class="br-sideleft-menu">

    <a href="../UsuHome/" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
        <span class="menu-item-label">Home</span>
      </div>
    </a>

    <?php
      if($_SESSION["rol_id"]==1){
        ?>
          <a href="../UsuEncuesta/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">Feedback</span>
            </div>
          </a>
          <a href="../UsuCurso/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">My Certificates</span>
            </div>
          </a>
          <a href="../UsuCurso/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">Posters</span>
            </div>
          </a>
          <a href="../UsuPresentacion/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
              <span class="menu-item-label">Presentations</span>
            </div>
          </a>
        <?php
      }else{
        ?>
          <a href="../AdminMntUsuario/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">Mnt. Usuario</span>
            </div>
          </a>

          <a href="../AdminMntCurso/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">Mnt. Evento</span>
            </div>
          </a>

          <a href="../AdminMntInstructor/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">Mnt. Encargado</span>
            </div>
          </a>

          <a href="../AdminMntCategoria/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">Mnt. Categoria</span>
            </div>
          </a>

          <a href="../AdminDetalleCertificado/" class="br-menu-link">
            <div class="br-menu-item">
              <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-24"></i>
              <span class="menu-item-label">Detalle Certificado</span>
            </div>
          </a>
        <?php
      }
    ?>


    <a href="../UsuPerfil/" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-ios-gear-outline tx-20"></i>
        <span class="menu-item-label">Profile</span>
      </div>
    </a>

    <a href="../html/Logout.php" class="br-menu-link">
      <div class="br-menu-item">
        <i class="menu-item-icon icon ion-power tx-20"></i>
        <span class="menu-item-label">Logout</span>
      </div>
    </a>

  </div>
</div>