<?php
    require_once('template_header.php');
?>
<?php
    require_once('template_menu.php');
    renderMenuToHTML('projets','fr');
?>

    <!-- projets -->

    <section class="page-section" id="projets">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Mes projects</h2>
                    <h3 class="section-subheading text-muted">Voici une liste de futurs projets que je veux réaliser...</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/animationjaponaise.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Être Développeur full-stack </h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Je veux en découvrir plus sur tout types de languages pour travailler dans le front comme en back et ainsi développer mes propres sites web</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/jeux-video.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Être un streamer</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"> 
                                Centré généralement dans le dessin et les jeux videos... 
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/musique.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Visiter tout les pays du monde</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"> 
                                Notamment le Japon, le Canada et l'Australie
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/dessin-tablette-graphique.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Progresser jusqu'au sommet en dessin</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"> 
                                Je veux être capable de faire des dessins dans le genre Hyperréalisme pour développer mon dessin à un potentiel maximum pour ensuite pouvoir trouver mon style de dessin et poster mes dessins originaux dans les réseaux sociaux
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
<?php
    require_once('template_footer.php');
?>