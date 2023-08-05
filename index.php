<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jefe Drive</title>
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="Asset/style/style5.css">
    <link  rel="icon" href="Asset/image/voiture ICON.png">

</head>
<body>
    
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>Jefe</span>Drive</a>

    <nav class="navbar">
      
        <a href="#vehicles">Véhicules</a>
        <a href="#services">Services</a>
        <a href="#featured">En vedette</a>
        <a href="#contact">Contact</a>
    </nav>

    <div id="login-btn">
    <a href="VUE/identification.php" class="btn">Connection</a>
        <i class="far fa-user"></i>
    </div>

</header> 
    
<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

</div>

<section class="home" id="home">

    <h3 data-speed="-2" class="home-parallax">Votre destination pour l'achat de voitures fiables</h3>

    <img data-speed="5" class="home-parallax" src="Asset/image/home-img.png" alt="">

    <a data-speed="7" href="#" class="btn home-parallax">Voir plus</a>

</section>



<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-car"></i>
            <h3>Vente de Voitures</h3>
            <p>Nous vous présentons une gamme variée de voitures de qualité pour répondre à vos besoins et préférences. Que vous recherchiez une voiture neuve ou d'occasion, notre équipe de professionnels est là pour vous guider tout au long du processus d'achat et vous assurer une expérience agréable et sans tracas.</p>
            
        </div>

        <div class="box">
            <i class="fas fa-tools"></i>
            <h3>Réparations de piéces</h3>
            <p> Nos mécaniciens hautement qualifiés et expérimentés sont prêts à diagnostiquer et résoudre tout problème mécanique, garantissant que votre voiture reste en parfait état de fonctionnement.</p>
      
        </div>

        <div class="box">
            <i class="fas fa-car-crash"></i>
            <h3>Assurance Voiture</h3>
            <p>Nous vous proposons des options d'assurance adaptées à vos besoins et à votre budget. La tranquillité d'esprit est primordiale, et c'est pourquoi nous collaborons avec des compagnies d'assurance réputées pour vous offrir une couverture complète et fiable.</p>
         
        </div>

        <div class="box">
            <i class="fas fa-car-battery"></i>
            <h3>Changement de Batterie</h3>
            <p>Que ce soit à domicile, sur la route ou au travail, notre équipe se déplace rapidement pour remplacer votre batterie déchargée, vous permettant de reprendre la route en toute confiance.</p>
        </div>

        <div class="box">
            <i class="fas fa-gas-pump"></i>
            <h3>Vidange</h3>
            <p>La Vidange est une étape essentielle pour maintenir la performance et la longévité de votre véhicule. Nos techniciens compétents effectuent une vidange d'huile professionnelle, veillant ainsi à ce que votre moteur fonctionne de manière optimale.</p>
        </div>

        <div class="box">
            <i class="fas fa-headset"></i>
            <h3>Assistance 24h/24 & 7j/7</h3>
            <p>Nous comprenons que les problèmes de voiture ne correspondent pas toujours à des heures convenables. C'est pourquoi nous vous proposons une Assistance 24h/24 et 7j/7. Peu importe l'heure du jour ou de la nuit, vous pouvez compter sur notre équipe d'assistance pour vous aider en cas d'urgence routière.</p>
           
        </div>

    </div>

</section>

<section class="featured" id="featured">

    <h1 class="heading"> <span>Voitures</span> en Vedette  </h1>

    <div class="swiper featured-slider">

       <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="Asset/image/car-1.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">35.000.000 FCFA</div>
                    <a href="#" class="btn"></a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="Asset/image/car-2.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">20.000.000 FCFA</div>
                    <a href="#" class="btn"></a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="Asset/image/car-3.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">7.000.000 FCFA</div>
                    
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="Asset/image/car-4.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">17.000.000.FCFA</div>
                    <a href="#" class="btn"></a>
                </div>
            </div>

       </div>

       <div class="swiper-pagination"></div>

    </div>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">
 
             <div class="swiper-slide box">
                 <img src="Asset/image/car-5.png" alt="">
                 <div class="content">
                     <h3>new model</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">10.500.000 FCFA</div>
                     <a href="#" class="btn"></a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="Asset/image/car-6.png" alt="">
                 <div class="content">
                     <h3>new model</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">8.000.000 FCFA</div>
                     <a href="#" class="btn"></a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="Asset/image/car-7.png" alt="">
                 <div class="content">
                     <h3>new model</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">16.000.000 FCFA</div>
                     <a href="#" class="btn"></a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="Asset/image/car-8.png" alt="">
                 <div class="content">
                     <h3>new model</h3>
                     <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star-half-alt"></i>
                     </div>
                     <div class="price">12.000.000 FCFA</div>
                     <a href="#" class="btn"></a>
                 </div>
             </div>
 
        </div>
 
        <div class="swiper-pagination"></div>
 
     </div>

</section>





<section class="contact" id="contact">

    <h1 class="heading"><span>Vos </span> Suggestions</h1>

    <div class="row">

        

        <form action="">
            <h3></h3>
            <input type="text" placeholder="Prénom et Nom" class="box">
            <input type="email" placeholder="Adresse email" class="box">
            <input type="tel" placeholder="Numéro de télèphone" class="box">
            <textarea placeholder="Votre message" class="box" cols="30" rows="10"></textarea>
            <input type="submit" value="Envoyer" class="btn">
        </form>

    </div>

</section>

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>Nos Showrooms</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Dakar </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Saint-Louis </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Mbour/Saly </a>
        </div>

       
        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 33 232 00 21 </a>
            <a href="#"> <i class="fas fa-phone"></i> 33 256 06 06 </a>
            <a href="#"> <i class="fas fa-envelope"></i> jefedrivesn@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Emplacement Dakar >>> Malika</a>
        </div>

        <div class="box">
            <h3>Réseaux Sociaux</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> Pinterest </a>
        </div>

    </div>

    <div class="credit"> Tous les droits sont réservés @2023</div>

</section>










<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="../Asset/style/script.js"></script>
</body>
</html>