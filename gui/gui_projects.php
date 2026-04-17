<?php global $site; $theme_url = get_template_directory_uri(); ?>
<section class="projects-section bg-black nobile-projects-section" id="projects">
    <div class="container px-4 px-lg-5">
        <div class="nobile-section-heading">
            <div>
                <p class="section-kicker">Portafolio conceptual</p>
                <h2 class="contact-title">Tres frentes para vender precision, orden y alto nivel</h2>
            </div>
            <p class="contact-subtitle">La pagina ahora presenta cada frente como una ficha de valor. El usuario entiende el tipo de proyecto, la promesa y el nivel de ejecucion antes de abrir el detalle.</p>
        </div>
        <div class="nobile-case-grid">
            <article class="nobile-case-card" onclick="abrirModal('modal1')">
                <div class="nobile-case-media">
                    <img src="<?php echo $theme_url; ?>/assets/img/bg1.jpg" alt="Residencial premium" loading="lazy">
                    <span class="nobile-case-badge">Residencial</span>
                </div>
                <div class="nobile-case-copy">
                    <div class="nobile-case-topline">
                        <span>01</span>
                        <span>Patrimonio + presencia</span>
                    </div>
                    <h3><?php echo $site['project_one_title']; ?></h3>
                    <p><?php echo $site['project_one_text']; ?></p>
                    <button class="nobile-case-trigger" type="button">Ver enfoque del proyecto</button>
                </div>
            </article>
            <article class="nobile-case-card" onclick="abrirModal('modal2')">
                <div class="nobile-case-media">
                    <img src="<?php echo $theme_url; ?>/assets/img/bg2.jpg" alt="Obra corporativa" loading="lazy">
                    <span class="nobile-case-badge">Corporativo</span>
                </div>
                <div class="nobile-case-copy">
                    <div class="nobile-case-topline">
                        <span>02</span>
                        <span>Orden + operacion</span>
                    </div>
                    <h3><?php echo $site['project_two_title']; ?></h3>
                    <p><?php echo $site['project_two_text']; ?></p>
                    <button class="nobile-case-trigger" type="button">Explorar detalle ejecutivo</button>
                </div>
            </article>
            <article class="nobile-case-card" onclick="abrirModal('modal3')">
                <div class="nobile-case-media">
                    <img src="<?php echo $theme_url; ?>/assets/img/bg3.jpg" alt="Gestion integral" loading="lazy">
                    <span class="nobile-case-badge">Direccion</span>
                </div>
                <div class="nobile-case-copy">
                    <div class="nobile-case-topline">
                        <span>03</span>
                        <span>Vision + control</span>
                    </div>
                    <h3><?php echo $site['project_three_title']; ?></h3>
                    <p><?php echo $site['project_three_text']; ?></p>
                    <button class="nobile-case-trigger" type="button">Abrir ficha integral</button>
                </div>
            </article>
        </div>

        <div class="modal nobile-modal" id="modal1">
            <div class="modal-content nobile-modal-content">
                <button class="close" type="button" onclick="cerrarModal('modal1')" aria-label="Cerrar">&times;</button>
                <div class="nobile-modal-frame">
                    <div class="nobile-modal-media">
                        <img src="<?php echo $theme_url; ?>/assets/img/bg1.jpg" alt="Proyecto residencial premium" loading="lazy">
                    </div>
                    <div class="nobile-modal-copy">
                        <span class="nobile-modal-label">Residencial de alto valor</span>
                        <h2><?php echo $site['project_one_title']; ?></h2>
                        <p><?php echo $site['project_one_text']; ?></p>
                        <ul class="nobile-modal-list">
                            <li>Lectura premium desde fachada, accesos y acabados.</li>
                            <li>Control de especificaciones y decisiones tecnicas visibles.</li>
                            <li>Comunicacion ideal para clientes que valoran patrimonio y detalle.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal nobile-modal" id="modal2">
            <div class="modal-content nobile-modal-content">
                <button class="close" type="button" onclick="cerrarModal('modal2')" aria-label="Cerrar">&times;</button>
                <div class="nobile-modal-frame">
                    <div class="nobile-modal-media">
                        <img src="<?php echo $theme_url; ?>/assets/img/bg2.jpg" alt="Obra corporativa" loading="lazy">
                    </div>
                    <div class="nobile-modal-copy">
                        <span class="nobile-modal-label">Obra corporativa</span>
                        <h2><?php echo $site['project_two_title']; ?></h2>
                        <p><?php echo $site['project_two_text']; ?></p>
                        <ul class="nobile-modal-list">
                            <li>Procesos claros para clientes que exigen orden y tiempos definidos.</li>
                            <li>Imagen sobria, madura y lista para inspirar confianza comercial.</li>
                            <li>Presentacion ideal para oficinas, retail y espacios institucionales.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal nobile-modal" id="modal3">
            <div class="modal-content nobile-modal-content">
                <button class="close" type="button" onclick="cerrarModal('modal3')" aria-label="Cerrar">&times;</button>
                <div class="nobile-modal-frame">
                    <div class="nobile-modal-media">
                        <img src="<?php echo $theme_url; ?>/assets/img/bg3.jpg" alt="Gestion integral de proyectos" loading="lazy">
                    </div>
                    <div class="nobile-modal-copy">
                        <span class="nobile-modal-label">Direccion integral</span>
                        <h2><?php echo $site['project_three_title']; ?></h2>
                        <p><?php echo $site['project_three_text']; ?></p>
                        <ul class="nobile-modal-list">
                            <li>Seguimiento de presupuesto, supervisiones y coordinacion tecnica.</li>
                            <li>Una sola narrativa de control para presentar el proyecto con autoridad.</li>
                            <li>Soporte perfecto para inversionistas y clientes que comparan firmas.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
