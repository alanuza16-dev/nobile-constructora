<?php global $site; ?>
<nav class="navbar fixed-top" id="mainNav">
    <div class="container nav-pill-container">
        <a class="navbar-brand" href="#page-top" aria-label="<?php echo esc_attr($site['brand'] ?? 'Nobile Constructora'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-nobile.svg" alt="Logo Nobile Constructora" class="nav-logo">
        </a>
        <div class="nav-menu-wrap" aria-label="Navegacion principal">
            <ul class="navbar-nav nav-links-row">
                <li class="nav-item"><a class="nav-link" href="#about">Firma</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Capacidades</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>
