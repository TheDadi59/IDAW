<!--
        <!- Navigation ->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">

                        <li class="nav-item"><a class="nav-link" href="#welcome">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="#cv">CV</a></li>
                        <li class="nav-item"><a class="nav-link" href="#hobbies">Hobbies</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="infos-techniques.php">Infos-techniques</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>

                    </ul>
                </div>
            </div>
        </nav>
-->
    <?php
            function renderMenuToHTML($currentPageId,$currentLanguageId) {
            // un tableau qui d\'efinit la structure du site
                $mymenu = [
                    // idPage titre
                    'accueil' => ['Accueil','Welcome'],
                    'cv' => ['CV','CV' ],
                    'hobbies' => ['Hobbies','Hobbies'],
                    'projets' => ['Mes Projets','Our Projects'],
                    'infos-techniques' => ['Informations','Informations'],
                    'contact' => ['Me contacter','Contact me'],
                    'language' => ['fr','eng','esp'],
                ];
                $lang = 0;
                echo "
                    <nav class='navbar navbar-expand-lg navbar-dark fixed-top' id='mainNav'>
                    <div class='container'>
                        <a class='navbar-brand' href='#page-top'><img src='assets/img/navbar-logo.svg' alt='...' /></a>
                        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'>
                            Menu
                            <i class='fas fa-bars ms-1'></i>
                        </button>
                        <div class='collapse navbar-collapse' id='navbarResponsive'>
                            <ul class='navbar-nav text-uppercase ms-auto py-4 py-lg-0'>
                ";
                // ...

        
                foreach($mymenu as $pageId => $pageParameters) {
                    for ( $i = 0; $i < count($pageParameters);$i++)
                    {
                        if ($currentLanguageId == $pageParameters[$i])
                            $lang = $i;
                    }
                    if($currentPageId == $pageId)
                        echo "<li class='nav-item'><a class='nav-link' id='currentpage' href='http://localhost/IDAW/TP2/SitePro/v3/index.php?page={$pageId}&lang={$currentLanguageId}'>{$pageParameters[$lang]}</a></li>";
                    else
                        echo "<li class='nav-item'><a class='nav-link' href='http://localhost/IDAW/TP2/SitePro/v3/index.php?page={$pageId}&lang={$currentLanguageId}'>{$pageParameters[$lang]}</a></li>";
                }
                
                


                // ...
                echo "
                                </ul>
                            </div>
                        </div>
                    </nav>
                ";
            }
    ?>