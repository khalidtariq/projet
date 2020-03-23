<?php
//connection to database 

  session_start();
 
  $connect = mysqli_connect('localhost','root','','cart');

    if(isset($_POST["add_to_cart"]))
    {
      if(isset($_SESSION["shopping_cart"]))
      {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
          $count = count($_SESSION["shopping_cart"]);
    //get all item detail
            $item_array = array(
                      'item_id'       =>   $_GET["id"],
                      'product_img'     =>   $_POST["hidden_image"],
                      'item_name'     =>   $_POST["hidden_name"],
                      'item_price'    =>   $_POST['hidden_price'],
                      'item_quantity' =>   $_POST["quantity"]

            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
          //product added then this block 
          echo '<script>alert("Item allready added ")</script>';
          echo '<script>window.location = "index.php"</script>';
        }
      }
      else
      {
        //cart is empty excute this block
         $item_array = array(
                      'item_id'       =>   $_GET["id"],
                      'product_img'     =>   $_POST["hidden_image"],
                      'item_name'     =>   $_POST["hidden_name"],
                      'item_price'    =>   $_POST['hidden_price'],
                      'item_quantity' =>   $_POST["quantity"]

            );
           $_SESSION["shopping_cart"][0] = $item_array;
      }
    }
//Remove item in cart 
    if(isset($_GET["action"]))
    {
      if($_GET["action"] == "delete")
      {
        foreach($_SESSION["shopping_cart"] as $key=>$value)
            {
              if($value["item_id"] == $_GET["id"])
              {
                unset($_SESSION["shopping_cart"][$key]);
                echo '<script>alert("Item removed")</script>';
                echo '<script>window.location="indax.php</script>';
              }
            }
      }
    }





?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  

        <link rel="stylesheet" href="styleMen.css" />
        <title>ropachic</title>
    </head>
    
    <body style="background-color: #F8F8FF; position:absolute">


            <header id="bloc_page" >
                <div id="titre_principal">
                    <div id="logo">
                        <img src="images/zozor_logo.png" alt="Logo de Zozor" />
                        <h1>Zoropa</h1>    
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
                    <ul >
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="men.php">Homme</a></li>
                        <li><a href="#">Femme</a></li>
                        <li><a href="contact.php">Conntact</a></li>
                    </ul>
                </nav>

			
            </header>  &nbsp;&nbsp; &nbsp;&nbsp;
			            	<div style="background-color: #F8F8FF;position:" >                   	
			
                <aside  class="vet" style="height: 1090px;width:300px;">
                    <h1>Vêtements</h1>
                    <img src="images/bulle.png" alt="" id="fleche_bulle" />
                    <p id="photo_zozor">    <img src="images/zozor_logo.png" alt="Logo de Zozor" /></p>
                    <p style="line-height: 520%"><b><i>Découvrez les collections des plus grands créateurs et couturiers de mode . Robes, chemises, jupes, maillots de bain, tuniques, pantalons, débardeurs ou vestes, notre large sélection de vêtements designés, créés et fabriqués à la main en Afrique, vous séduira pour toutes vos occasions. En quelques clics, accédez à l'univers des meilleures marques du continent et à une sélection de choix sur Made-in.africa !</p>
                   
                    <p ><a href="https://www.facebook.com" target="_blank" ><img src="images/facebook.png" alt="Facebook"  /></a>
                        
                     <a href="https://twitter.com/login?lang=ar" target="_blank"><img src="images/twitter.png" alt="Twitter" /></a> 
                     <a href="https://www.flickr.com/" target="_blank">  <img src="images/flickr.png" alt="Flickr" /></a>  
                     <a href="https://rss.com/" target="_blank"><img src="images/rss.png" alt="RSS" /></a>
                     </p>
                
                </aside></div>
      <a href="panier.php" target="_blank"><img style=" width: 170px ; height: 170px ; margin-left:55%;position:fixed"src="icons/cart.svg" >
           <div  style="width:700px;">  
                  <?php
                    $qury = "SELECT * FROM tbl_product1 ORDER BY id ASC ";
                    $result = mysqli_query($connect,$qury);
                    if(mysqli_num_rows($result) >0)
                    {
                      while($row = mysqli_fetch_array($result))
                      {

                  ?>
				  	  
			 
                <div class="col-md-4">  
				
                     <form method="post" action="femme.php?action=add&id=<?php echo $row["id"];?>">  
				
                          <div style="border:2px solid #333; background-color:#f1f1f1; border-radius:5px; padding:10px;" align="center"> 
		
                               <img src="images/<?php echo $row['image'];?>" class="img-responsive" style="height:480px ;width: 380px;" /><br /> 							   
                               <h4 class="text-info"><?php echo $row['name'];?></h4>  
                               <h4 class="text-danger"><?php echo $row['price'];?>$</h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />
                            <input type="hidden" name="hidden_name" value="<?php echo $row['name'] ?>" />
                           <input type="hidden" name="hidden_image" value="<?php echo $row['image'];?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>">


                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn-info button1" value="Add to Cart" />  
							   
                          </div>  
                     </form>  
                </div>  

                  <?php } } ?>
  
			  


          
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

