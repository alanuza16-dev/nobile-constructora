<?php global $site; $theme_url = get_template_directory_uri(); ?>
<section class="projects-section bg-black" id="projects">
    <div class="container px-4 px-lg-5">
        <div class="text-center mb-5">
            <p class="section-kicker">Capacidades</p>
            <h2 class="contact-title">Una firma que inspira respaldo</h2>
            <p class="contact-subtitle">El objetivo del prototipo es posicionar a la constructora como una opcion de mayor categoria, confianza y ticket promedio.</p>
        </div>
        <section class="catalogo">
            <div class="grid">
                <div class="item" onclick="abrirModal('modal1')"><img src="<?php echo $theme_url; ?>/assets/img/bg1.jpg" alt="Proyecto residencial premium" loading="lazy"><div class="overlay"><span>+</span></div><h3 class="contact-subtitle"><?php echo $site['project_one_title']; ?></h3></div>
                <div class="item" onclick="abrirModal('modal2')"><img src="<?php echo $theme_url; ?>/assets/img/bg2.jpg" alt="Sitio de obra corporativa" loading="lazy"><div class="overlay"><span>+</span></div><h3 class="contact-subtitle"><?php echo $site['project_two_title']; ?></h3></div>
                <div class="item" onclick="abrirModal('modal3')"><img src="<?php echo $theme_url; ?>/assets/img/bg3.jpg" alt="Equipo revisando planos de construccion" loading="lazy"><div class="overlay"><span>+</span></div><h3 class="contact-subtitle"><?php echo $site['project_three_title']; ?></h3></div>
            </div>
        </section>
        <div class="text-center mt-5"><p class="contact-subtitle">Cada seccion busca transmitir que aqui hay metodo, liderazgo y una promesa de ejecucion seria.</p></div>
        <div class="modal" id="modal1"><div class="modal-content"><span class="close" onclick="cerrarModal('modal1')">&times;</span><h2><?php echo $site['project_one_title']; ?></h2><img src="<?php echo $theme_url; ?>/assets/img/bg1.jpg" alt="Residencial premium" loading="lazy"><p><?php echo $site['project_one_text']; ?></p></div></div>
        <div class="modal" id="modal2"><div class="modal-content"><span class="close" onclick="cerrarModal('modal2')">&times;</span><h2><?php echo $site['project_two_title']; ?></h2><img src="<?php echo $theme_url; ?>/assets/img/bg2.jpg" alt="Obra corporativa" loading="lazy"><p><?php echo $site['project_two_text']; ?></p></div></div>
        <div class="modal" id="modal3"><div class="modal-content"><span class="close" onclick="cerrarModal('modal3')">&times;</span><h2><?php echo $site['project_three_title']; ?></h2><img src="<?php echo $theme_url; ?>/assets/img/bg3.jpg" alt="Gestion integral de proyectos" loading="lazy"><p><?php echo $site['project_three_text']; ?></p></div></div>
    </div>
</section>
