<?php global $site; ?>
<nav class="navbar fixed-top nobile-navbar" id="mainNav">
    <div class="container nobile-nav-shell">
        <div class="nobile-nav-brand">
            <a class="navbar-brand" href="#page-top" aria-label="<?php echo esc_attr($site['brand'] ?? 'Nobile Constructora'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-nobile.svg" alt="Logo Nobile Constructora" class="nav-logo">
            </a>
            <div class="nobile-nav-copy d-none d-lg-block">
                <span class="nobile-nav-label">Constructora boutique</span>
                <span class="nobile-nav-caption">Direccion tecnica, ejecucion y control integral</span>
            </div>
        </div>
        <button class="navbar-toggler nobile-nav-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#nobileNavLinks" aria-controls="nobileNavLinks" aria-expanded="false" aria-label="Alternar navegacion">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nobile-nav-collapse" id="nobileNavLinks">
            <ul class="navbar-nav nobile-nav-links ms-auto">
                <li class="nav-item"><a class="nav-link" href="#about">Enfoque</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Proyectos</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
            </ul>
            <a class="nobile-nav-cta" href="#contact">Agendar reunion</a>
        </div>
    </div>
</nav>
