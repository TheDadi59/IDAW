<?php
require_once('template_header.php');
?>
<?php
    require_once('template_menu.php');
    renderMenuToHTML('hobbies','eng');
?>

        <!-- hobbies -->

        <section class="page-section" id="hobbies">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">My Hobbies</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/animationjaponaise.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Japonese animation</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><a href="https://myanimelist.net/profile/TheDadi">Voici la liste de tout mes animes</a></p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/jeux-video.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Video games</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"> 
                                <ul>
                                    <li>League of Legend</li> 
                                    <li>Dofus</li>
                                    <li>Osu!</li>
                                    <li>Super Smash bros Ultimate</li>
                                    <li>Genshin impact</li>
                                    <li>And more...</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/musique.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Musiques</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"> 
                                <ul>
                                    <li>10 ans de guitares</li> 
                                    <li>2 ans de batteris</li>
                                    <li>1 ans de batteris</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/dessin-tablette-graphique.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Dessins papier</h4>
                            </div>
                            <div class="timeline-body">
                                <ul>
                                    <li><a>Sur papier</a></li> 
                                    <li><a>Sur tableau</a></li> 
                                    <li><a>Sur tablette graphique</a></li> 
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
 

<?php
    require_once('template_footer.php');
?>