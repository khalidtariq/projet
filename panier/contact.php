<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styleMen.css" />
        <title>ropachic</title>
    </head>
    
    <body style="background-color: #F8F8FF; position:absolute">


            <header id="bloc_page" >
                <div id="titre_principal">
                    <div id="logo">
                        <img src="images/zozor_logo.png" alt="Logo de Zozor" />
                        <h1 >Zoropa</h1>    
                    </div>
                    &nbsp;&nbsp; &nbsp;&nbsp;<br/><h1><b><i>Milleur Shopping</i></b></h1>
                </div>
                
                <nav >
								 <div class="w3-content w3-section" >
  <img class="mySlides" src="images/1.jpg" >
  <img class="mySlides" src="images/5.jpg">
  <img class="mySlides" src="images/3.jpg" >
  
  <img class="mySlides" src="images/16.jpg" >
  <img class="mySlides" src="images/24.png">
  <img class="mySlides" src="images/17.jpg" >
</div>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="men.php">Homme</a></li>
                        <li><a href="femme.php">Femme</a></li>
                        <li><a href="#">Conntact</a></li>
                    </ul>
                </nav>
            </header>  &nbsp;&nbsp; &nbsp;&nbsp;
       <form method="post" ACTION="#" >
            <table border="3" align="left" bgcolor="aqua" cellpadding="50px" >
                <tr>
                    <td>
                        <h1 align="center" style="font-family:segoe print;font-size:95px"> <u> Contactez Nous </u> </h1><br> <br><br> <br>
                          <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label style="font-size:20px">Nom (obligatoire)</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" class="form-control" placeholder="Votre nom" size="35px" id="name" required data-validation-required-message="Please enter your name.">
                             
                            </div>
                        </div><br> <br>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label style="font-size:20px">Adresse email (obligatoire)</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" class="form-control" size="35px" placeholder="Exemple@email.com" id="email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        </div>
                        <br> <br>
                         <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label style="font-size:20px">Numéro de téléphone</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="tel" class="form-control" placeholder="Entrez votre numéro de téléphone" size="35px" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div><br> <br>
                         <br>
                        <label style="font-size:20px"> Ecrivez ci-dessous votre message : </label> <br> <br>
       <textarea  rows="5%" cols="50%" class="form-control" placeholder="Entrez votre message" id="message" required data-validation-required-message="Please enter a message."></textarea> </div> <br> <br> 
                        <table border="2" align="center" cellpadding="15px">
                            <tr>
                                <td align="center"> <b> Envoyer </b> ces informations <br>
                                    <input type="submit" value="Enregistrer">
                                </td>
                                <td align="center"> <strong> Recommencer </strong> la saisie <br>
                                     <input type="reset" value="Effacer">
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </form>

        <section >
                <aside  style="width:250px;height:900px"  >
                    <h1 >Vêtements</h1>
                    <img src="images/bulle.png" alt="" id="fleche_bulle" />
                    <p id="photo_zozor">    <img src="images/zozor_logo.png" alt="Logo de Zozor" /></p>
                    <p style="line-height: 320%"><b><i>Découvrez les collections des plus grands créateurs et couturiers de mode . Robes, chemises, jupes, maillots de bain, tuniques, pantalons, débardeurs ou vestes, notre large sélection de vêtements designés, créés et fabriqués à la main en Afrique, vous séduira pour toutes vos occasions. En quelques clics, accédez à l'univers des meilleures marques du continent et à une sélection de choix sur Made-in.africa !</p>
                   
                    <p ><a href="https://www.facebook.com" target="_blank" ><img src="images/facebook.png" alt="Facebook"  /></a>
                        
                     <a href="https://twitter.com/login?lang=ar" target="_blank"><img src="images/twitter.png" alt="Twitter" /></a> 
                     <a href="https://www.flickr.com/" target="_blank">  <img src="images/flickr.png" alt="Flickr" /></a>  
                     <a href="https://rss.com/" target="_blank"><img src="images/rss.png" alt="RSS" /></a>
                     </p>
                
                </aside></section>

          
 <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>



        </body>
        </html>