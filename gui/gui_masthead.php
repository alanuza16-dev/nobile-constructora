<?php global $site; ?>
<header class="masthead nobile-hero" id="page-top">
    <div class="container px-4 px-lg-5">
        <div class="row align-items-end g-4 g-xl-5">
            <div class="col-lg-7">
                <div class="nobile-hero-copy">
                    <p class="hero-eyebrow">Infraestructura con presencia</p>
                    <h1 class="hero-title"><?php echo $site['hero_title'] ?? 'Nobile Constructora'; ?></h1>
                    <p class="hero-subtitle"><?php echo $site['hero_subtitle'] ?? ''; ?></p>
                    <div class="nobile-hero-actions">
                        <a class="btn btn-primary" href="#projects">Explorar proyectos</a>
                        <a class="nobile-text-link" href="#about">Conocer la firma</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="nobile-hero-panel">
                    <div class="nobile-panel-image nobile-panel-main">
                        <span class="nobile-panel-tag">Residencial de alto valor</span>
                        <h2>Obras que elevan la percepcion del activo desde el primer render hasta la entrega.</h2>
                    </div>
                    <div class="nobile-panel-grid">
                        <article class="nobile-panel-card">
                            <span class="nobile-panel-number">01</span>
                            <h3>Planeacion ejecutiva</h3>
                            <p>Costos, tiempos y decisiones tecnicas bajo una misma direccion.</p>
                        </article>
                        <article class="nobile-panel-card">
                            <span class="nobile-panel-number">02</span>
                            <h3>Entrega con criterio</h3>
                            <p>Espacios que comunican orden, status y control en cada detalle.</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="nobile-hero-ribbon">
            <span>Residencial premium</span>
            <span>Obra corporativa</span>
            <span>Desarrollo comercial</span>
            <span>Direccion integral</span>
        </div>
    </div>
</header>
