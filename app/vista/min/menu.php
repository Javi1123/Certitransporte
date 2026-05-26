<!-- Menú -->
<header class="col-xl-auto" id="navegacion">
  <nav class="navbar fixed-top navbar-expand-lg black">
    <div class="container-fluid">
      
      <div class="navbar-brand ps-2 me-2" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="tooltip" data-bs-html="true" title="<b>¡ Llámenos !</b><br />Responderemos sus dudas"><small><i class="fa-solid fa-phone red"></i></small><span class="orange negrita numeroTelefono"> 671 355 000</span></div>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#barratop" aria-controls="barratop" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars orange"></i>
      </button>
      
      <div class="offcanvas offcanvas-end black w-75 ps-3 ps-lg-2" tabindex="-1" id="barratop" aria-labelledby="logoCertitransporte">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="logoCertitransporte">
            <a href="<?= BASE_PATH ?>" class="me-auto"><img class="zoom" src="<?= LINKS_PATH . "/imagenes/favicon-blanco.png" ?>" alt="Logo certitransporte" width="100px"></a>
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="filter: invert(100%);"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="text-white nav-link" href="<?= BASE_PATH . "/cursos"?>">
                <i class="fa-solid fa-graduation-cap red"></i> Cursos transportistas
              </a>
            </li>
            <li class="nav-item">
              <a class="text-white nav-link" href=".#requisitos">
                <i class="far fa-file-alt red"></i> Requisitos
              </a>
            </li>
            <li class="nav-item">
              <a class="text-white nav-link" href=".#preguntas">
                <i class="fas fa-question-circle red"></i> FAQ
              </a>
            </li>
            <li class="nav-item dropdown ">
              <button id="nosotros" class="text-white nav-link dropdown-toggle" href="#" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-users red"></i> Nosotros
              </button>
              <ul class="dropdown-menu bg-dark bg-opacity-75" style="border: 1px solid var(--color-n-principal);" id="listaNosotros">
                <li><a class="dropdown-link ps-2 text-white text-decoration-none" href="<?= BASE_PATH . "/sugerencias"?>">Sugerencias</a></li>
                <hr class="dropdown-divider">
                <li><a class="dropdown-link ps-2 text-white text-decoration-none" href="<?= BASE_PATH . "/quienes_somos"?>">Quiénes somos</a></li>
                <hr class="dropdown-divider">
                <li><a class="dropdown-link ps-2 text-white text-decoration-none" href="<?= BASE_PATH . "/donde_estamos"?>">Dónde estamos</a></li>
              </ul>
            </li>
          </ul>
          <a href="<?= BASE_PATH ?>" class="me-auto"><img class="zoom d-none d-lg-block" src="<?= LINKS_PATH . "/imagenes/favicon-blanco.png" ?>" alt="Logo certitransporte" width="100px"></a>

          <a href="https://plataforma.trainingtic.es/" class="pe-3 text-white align-self-center numeroTelefono negrita text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="tooltip" data-bs-html="true" title="<b>Plataforma</b> de formación" id="linkAlumno" target="_blank">Alumnos</a>
          
          <a href="https://www.instagram.com/certitransporte/" class="py-1 pe-2 align-self-center text-decoration-none" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="tooltip" data-bs-html="true" title="S&iacute;guenos en <b>Instagram</b>" target="_blank">
            <i class="fab fa-instagram orange"></i><span class="sr-only"></span>
          </a>
          
          <a href="https://www.linkedin.com/in/certitransporte-certitransporte-376bb2312?miniProfileUrn=urn%3Ali%3Afs_miniProfile%3AACoAAE-OLooB6ECAgJ11phOU4zppv8N89JnSPFY&lipi=urn%3Ali%3Apage%3Ad_flagship3_search_srp_all%3BNBrrijlARQKiTx4EzAfLMQ%3D%3D" class="align-self-center text-decoration-none me-4" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="tooltip" data-bs-html="true" title="S&iacute;guenos en <b>Linkedin</b>" target="_blank">
            <i class="fab fa-linkedin orange"></i><span class="sr-only"></span>
          </a>
        </div>
      </div>
    </div>
  </nav>
</header>
