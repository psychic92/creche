<?php
    session_start();
    //require_once('actions/user/inscription.php');
    // require_once('actions/user/loginAction.php');
    require ("scripts/mailto.php")
;?>
<!DOCTYPE html>
<html lang="fr">
<?php 
    require('./includes/head.php');
?>
<body>
    <?php 
        include "./includes/bulles.php";
        include "./includes/navbar.php";
    ?>
    <img id="showMenu" src="images/menu.png" alt="Menu">
    
    
<div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="https://source.unsplash.com/random/1920x768/?nursery" style="width:100%">
                <h1 id="textTransition1"></h1>
                <div class="text">
                    <h3> Téléphone: 06.82.61.50.88 </h3>
                    <h3> Adresse: : 4 rue Marcel bouchez, 02590 ETREILLERS</h3>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="https://source.unsplash.com/random/1920x768/?kid,nursery" style="width:100%">
                <div class="text">
                    <h1> Accueil du lundi au vendredi de 7h00 à 19h00 </h1>
                    <h2> Flexibilité possible si besoin</h2>
                    <h3> La crèches Pomme d'api est composées d’une équipe pluridisciplinaire de professionnels qualifiés. </h3>
                </div>
            </div>
            
            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="https://source.unsplash.com/random/1920x768/?kid,nursery,toys" style="width:100%">
                <div class="text">
                    <h1> Nos Valeurs écologiques </h1>
                    <h2> Des repas cuisinés à base de produits Bio ou provenant de circuits courts</h2>
                    <h3> Des produits d'entretien écologiques </h3>
                    <h3>Choix des matériaux et jeux favorisant le bois, le recyclable et l'économie circulaire...      </h3>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="https://source.unsplash.com/random/1920x768/?kid,nursery,toys,school" style="width:100%">
                <div class="text">
                    <h1> 🌳 Jouer aux aventuriers dans un magnifique espace extérieur </h1>
                    <h2> 🇬🇧 Se familiariser à l’anglais avec nos professionnels bilingues français / anglais</h2>
                    <h3> 🧮 Développer son plein potentiel en toute autonomie au sein d’un espace Montessori rassurant. </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.      </p>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="https://source.unsplash.com/random/1920x768/?kid,nursery,school,toys" style="width:100%">
                <div class="text">
                    <h1> Activité snoezelen pour la détente et les sollicitations sensorielles. </h1>
                    <h2> Intervention d'un musicien pour les ateliers d’éveil musical</h2>
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  </p>
                </div>
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
</div>
    <a id="skipCarousel" href="#skipC">D</a>
    
    <audio id="skipC" style="margin-top: 1em; width:0px" autoplay="autoplay" controls>
        <source src="/audio/api.mp3" type="audio/mpeg">
    Votre navigateur ne supporte pas la balise audio
    </audio>

    <section id="presentation">
        <div id="presentationCreche">
            <h2>Présentation de la crèche</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore eius deleniti assumenda aperiam autem beatae at fugiat vel corrupti minima odit tenetur delectus debitis optio distinctio possimus qui odio dignissimos, magnam provident architecto esse perferendis eaque quod? Alias, facilis temporibus? Maxime maiores culpa consectetur, odio dicta assumenda illo et, provident qui sequi veniam, libero itaque? Consectetur nulla rem voluptatem? Corporis alias laudantium perferendis porro repudiandae quidem odio illo exercitationem labore adipisci, voluptas dicta quas rerum modi deserunt sapiente officia repellat, unde perspiciatis? Deleniti corporis id explicabo perferendis enim provident voluptatem eveniet. Odio aut delectus dignissimos consectetur. Et ipsum aspernatur soluta error exercitationem cupiditate eos non, excepturi ipsam totam voluptas sapiente quidem quae qui, ut suscipit sunt aperiam, modi delectus? Architecto neque ullam aut, dolor quo exercitationem quaerat expedita cupiditate tempora ipsam deserunt amet tenetur necessitatibus unde ad. Labore, dolore inventore porro illo explicabo repellat dolor sint accusantium iure distinctio in impedit tempora fugiat deleniti modi tempore vel dolores voluptates voluptate. Iusto neque laboriosam cumque dolorem saepe itaque adipisci provident alias ea molestiae, impedit numquam ipsum. Laudantium, facilis sint. Ullam excepturi consequatur corporis quas sapiente vero nulla, ipsam necessitatibus incidunt molestias enim ipsum totam illum tempora veniam similique est quisquam voluptatibus.</p>
        </div>
            <figure>
                <img src="images/plancreche.png" alt="planCreche">
                <figcaption>Plan de la crèche</figcaption>
            </figure>
    </section>

            <hr>

    <section>
        <div id="presentationEquipe">
            <h2>Présentation de l'équipe</h2>
            <div id="listeEquipe">
                <div class="membreEquipe">
                    <img src="images/person.png" alt="ILLUSTRATION Provisoire">
                    <h4>Lorem, ipsum.</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia eveniet porro cupiditate eum vitae in quod tenetur exercitationem animi totam.</p>
                </div>
                <div class="membreEquipe">
                    <img src="images/person.png" alt="ILLUSTRATION Provisoire">
                    <h4>Lorem, ipsum.</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia eveniet porro cupiditate eum vitae in quod tenetur exercitationem animi totam.</p>
                </div>
                <div class="membreEquipe">
                    <img src="images/person.png" alt="ILLUSTRATION Provisoire">
                    <h4>Lorem, ipsum dolor.</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia eveniet porro cupiditate eum vitae in quod tenetur exercitationem animi totam.</p>
                </div>
                <div class="membreEquipe">
                    <img src="images/person.png" alt="ILLUSTRATION Provisoire">
                    <h4>Lorem.</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia eveniet porro cupiditate eum vitae in quod tenetur exercitationem animi totam.</p>
                </div>
                <div class="membreEquipe">
                    <img src="images/person.png" alt="ILLUSTRATION Provisoire">
                    <h4>Lorem ipsum dolor sit.</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia eveniet porro cupiditate eum vitae in quod tenetur exercitationem animi totam.</p>
                </div>
                <div class="membreEquipe">
                    <img src="images/person.png" alt="ILLUSTRATION Provisoire">
                    <h4>Lorem, ipsum dolor.</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia eveniet porro cupiditate eum vitae in quod tenetur exercitationem animi totam.</p>
                </div>
        </div>
    </section>
        <hr>
    <section id="carte">
            <div id="carteG" style="text-align:center;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2215.031621237786!2d3.157400586557095!3d49.83133385945779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e81a674de98b59%3A0x83306eff3c7f7073!2s4%20Rue%20Marcel%20Bouchez%2C%2002590%20%C3%89treillers!5e1!3m2!1sfr!2sfr!4v1650442527421!5m2!1sfr!2sfr" width="200" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
    </section>  
    
        <hr>
    
    <section id="objectif">
            <h2>Les objectifs de la crèche</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima architecto necessitatibus voluptatum, unde in numquam vero, dolorum nobis ad odit tempora atque deserunt dolore a fugiat porro corporis est voluptatibus deleniti eos earum! Quae ullam facilis nihil nisi quos, ratione nam. Nulla voluptas veritatis, placeat dignissimos temporibus incidunt voluptates inventore.</p>
            <ul>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit amet.</li>
            </ul>
    </section>

    <hr>

    <section id='info'>
            <div id="horraire">
                <h2>Les horraires</h2>
                <p>La micro-crèche ouvre ses portes du lundi au vendredi de 8h00 à 19H00.
                Elle ferme ses portes les jours fériés (et également pour certains ponts qui
                fluctuent en fonction du calendrier) et 5 semaines dont, 1 semaine entre Noël
                et le jour de l’An, 1 semaine en avril pour les vacances de Pâques et 3 semaines
                entre le 1er juillet et le 31 août.<br><br>
                
                Par ailleurs, 2 journées pédagogiques seront organisées au cours de l’année
                entraînant une fermeture de la micro-crèche. Ces journées permettent
                d’assurer la mise en place et le suivi des projets et de mener une réflexion avec
                l’ensemble du personnel sur l’accueil.<br><br>
                
                Dans tous les cas, la micro-crèche tiendra informée les familles de ces
                décisions dans un délai acceptable afin qu’elles puissent s’organiser (+
                affichage sur un panneau d’informations accessible aux parents).</p>
            </div>
    </section>

    <hr>

    <section id="emploi">
        <h2>Offre d'emploi</h2>
        <div id="offre">
            <div class="poste">
                <div class="titre">comptable</div>
                <hr>
                <div class="prerequis">savoir compter</div>
                <hr>
                <a href="#contact">Postuler</a>
            </div>
            <div class="poste">
                <div class="titre">comptable</div>
                <hr>
                <div class="prerequis">savoir compter</div>
                <hr>
                <a href="#contact">Postuler</a>
            </div>
            <div class="poste">
                <div class="titre">comptable</div>
                <hr>
                <div class="prerequis">savoir compter</div>
                <hr>
                <a href="#contact">Postuler</a>
            </div>
            <div class="poste">
                <div class="titre">comptable</div>
                <hr>
                <div class="prerequis">savoir compter</div>
                <hr>
                <a href="#contact">Postuler</a>
            </div>
        </div>
    </section>
    
    <hr>
    
    <section id="contact">
        <h2>Formulaire de contact</h2>
        <form method="POST">
            <input type="email" name="emailMailto" placeholder="Email" required> <br>
            <input type="text" name="nomMailto" placeholder="Nom" required> <br>
            <input type="text" name="prenomMailto" placeholder="Prénom" required> <br>
            <input type="text" name="objetMailto" placeholder="Objet du message" autocomplete="off" required> <br>
            <textarea name="messageMailto" placeholder="Entrez votre message ici" required></textarea> <br>
            <input type="submit" name="submitMailto"> <br>
            <?php 
                if(isset($msgmailto)){echo '<p>'.$msgmailto.'</p>';};
            ?>
        </form>
    </section>

    <footer>

    <div class="contact">
        <p>Télephone: 06.82.61.50.88</p>
        <p>Adresse: : 4 rue Marcel bouchez, 02590 ETREILLERS</p>
    </div >

    <div class="social">
        <a href=""><img src="images/facebook.png" alt="fb"></a>
        <a href=""><img src="images/instagram.png" alt="tw"></a> 
    </div>
    <h4>© 2021 - Micro crèche POM D'API.</h4>
    </footer>
    <script src="scripts/scriptSidebarResponsive.js"></script>
    <script src="scripts/script.js"></script>
    <script src="scripts/slider.js"></script>
</body>
</html>