<?php
    require_once('template_header.php');
?>
<?php
    require_once('template_menu.php');
    renderMenuToHTML('projets','eng');
?>
    <!-- projets -->

    <section class="page-section" id="projets">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">My projects</h2>
                    <h3 class="section-subheading text-muted">Here is a list of what I want to do...</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/animationjaponaise.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Being full-stack developper</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">I want to discover every kind of langages, work in front and back , and develop my own website</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/jeux-video.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Being a streamer</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"> 
                                mostly drawing and video games... 
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/musique.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Visit every countries in the world</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"> 
                                Especially Japan, Canada and Australia
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/dessin-tablette-graphique.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Increase my drawing skills</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"> 
                                I want to be able to draw Hyperrealism types of drawing and start posting my drawing on social medias
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