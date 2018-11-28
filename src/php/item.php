<!DOCTYPE html>
<html lang = "en">
<head>
  <title>IDEAS</title>
  <link rel="stylesheet" href="../css/header.css" />
  <link rel="stylesheet" href="../css/mainPage.css" />
  <link rel="stylesheet" href="../css/default.css"/>
  <link rel="stylesheet" href="../css/item.css"/>
  <link rel="stylesheet" href="../css/footer.css"/>
</head>
<body>
  <header>
    <div class = "nav">
      <!-- LOGO -->
      <div class = "logoImage">
        <a href = "frontPage.php" id = "logo">
          <img class = "logoimg" alt = "logo" src= "../images/logos/logo.png">
        </a>
      </div>

      <!-- search -->
      <div class = "navLeft">
        <input type = "text" class ="search">
        <input type = "submit" value class = "submit">
      </div>

      <!-- cart -->
      <div class = "navRight">
        <a href = "cart.php" id = "cart">cart </a>
      </div>

      <!-- account -->
      <div class = "navRight">
        <div class="dropdown">
          <button class="dropbtn">account</button>
            <div class="dropdown-content">
              <div class = "signIn">
              <a href = "signin.php" id = "sign">sign in</a>
                <ul class = "logIn">
                  <a href="account.php"><li class = "youraccount">Your Account</li></a>
                  <a href="orders.php"><li class = "yourorder">Your Orders</li></a>
                </ul>
              </div>
            </div>
        </div>

      </div>

      <!-- menu -->
      <div class = "navRight">
        <div class="dropdown">
          <button class="dropbtn">menu</button>
            <div class="dropdown-content">
              <div class = "drinkMenu">
                <p id = "beverages">beverages </a>
                  <ul class = "subMenu">
                    <!-- <li class = "beverageImg"> -->
                      <!-- <img src = "../images/logo.png" alt "beverage"> -->
                    <!-- </li> -->
                    <a href="coffee.php"><li class = "coffee">coffee</li></a>
                    <a href="tea.php"><li class = "tea">tea</li></a>
                    <a href="pop.php"><li calss = "pop">soft drinks</li></a>
                  </ul>
              </div>
              <div class = "foodMenu">
                <p id = "food">food</p>
                  <ul class = "subMenu">
                    <a href="cookie.php"><li class = "cookie">cookie</li></a>
                    <a href="muffin.php"><li class = "muffin">muffin</li></a>
                    <a href="donut.php"><li class = "donut">donut</li></a>
                  </ul>
              </div>
            </div>
        </div>
      </div>

      <!-- team members (us) -->
      <div class = "navRight">
        <a href = "aboutus.php" id = "aboutUs">about us </a>
      </div>
    </div>
  </header>

  <!-- item body -->
    <div class = "panel">
		<figure class="itemFig">
			<img src="../images/items/MariageFreres_ImperialRussiaDarjeeling.jpg" alt="ImperialRussianDarjeeling">
			<figcaption><a href="item.php">Imperial Russian Darjeeling</a></figcaption>
		</figure>
		<p class="itemDesc">The war started in the Balkans in July 1853, when Russian troops occupied the Danubian Principalities[6] (part of modern Romania), which were under Ottoman suzerainty, then began to cross the Danube. Led by Omar Pasha, the Ottomans fought a strong defensive campaign and stopped the advance at Silistra. A separate action on the fort town of Kars in eastern Anatolia led to a siege, and a Turkish attempt to reinforce the garrison was destroyed by a Russian fleet at Sinop. Fearing an Ottoman collapse, France and Britain rushed forces to Gallipoli. They then moved north to Varna in June 1854, arriving just in time for the Russians to abandon Silistra. Aside from a minor skirmish at Köstence (today Constanța), there was little for the allies to do. Karl Marx quipped, "there they are, the French doing nothing and the British helping them as fast as possible".
			<br><br>Frustrated by the wasted effort, and with demands for action from their citizens, the allied force decided to attack Russia's main naval base in the Black Sea at Sevastopol on the Crimean peninsula. After extended preparations, the forces landed on the peninsula in September 1854 and marched their way to a point south of Sevastopol after the successful Battle of the Alma. The Russians counterattacked on 25 October in what became the Battle of Balaclava and were repulsed, but at the cost of seriously depleting the British Army forces. A second counterattack, at Inkerman, ended in stalemate. The front settled into a siege and led to brutal conditions for troops on both sides. Smaller actions were carried out in the Baltic, the Caucasus, the White Sea, and in the North Pacific.
			<br><br>Sevastopol fell after eleven months, and neutral countries began to join the Allied cause. Isolated and facing a bleak prospect of invasion from the west if the war continued, Russia sued for peace in March 1856. This was welcomed by France and Britain, as their subjects were beginning to turn against their governments as the war dragged on. The war was ended by the Treaty of Paris, signed on 30 March 1856. Russia was forbidden to host warships in the Black Sea. The Ottoman vassal states of Wallachia and Moldavia became largely independent. Christians there were granted a degree of official equality, and the Orthodox Church regained control of the Christian churches in dispute.[9]:415
			<button type="button" class="addToCart"><a href="cart.php">Add to Cart</a></button>
		</p>
	</div>
	<div class="comments">
		<h2>Comments</h2>
		<div class="panel">
			<img src="../images/profilepictures/tweedledee.jpg" alt="tweedledeeProfile">
			<h3 class="username">tweedleDee</h3>
			<p class="ptext">Man this tea sucks. It tasted like roasted dog food</p>
		</div>
		<div class="panel">
			<img src="../images/profilepictures/tweedledum.jpg" alt="tweedledumProfile">
			<h3 class="username">tweedleDum</h3>
			<p class="ptext">Man this tea is delicious! It tasted like roasted dog food</p>
		</div>
		<div class="panel">
			<img src="../images/profilepictures/cinderella.jpg" alt="cinderellaProfile">
			<h3 class="username">cinderella</h3>
			<p class="ptext">Help me I can't feel my legs</p>
		</div>
		<button type="button" class="commentBtn"><a href="#">Comment</a></button>
	</div>

	<div class="similarItems">
		<h2>Similar Items</h2>
		<div class = "panel">
			<figure class="itemFig">
				<img src="../images/items/MariageFreres_ImperialRussiaDarjeeling.jpg" alt="ImperialRussianDarjeeling">
				<figcaption><a href="item.php">Imperial Russian Darjeeling</a></figcaption>
			</figure>
		</div>
		<div class = "panel">
			<figure class="itemFig">
				<img src="../images/items/StClaires_VanillaHotChocolate.jpg" alt="VanillaHotChocolate">
				<figcaption><a href="item.php">Vanilla Hot Cocoa</a></figcaption>
			</figure>
		</div>
		<div class = "panel">
			<figure class="itemFig">
				<img src="../images/items/Tokuyo_Genmaicha.jpg" alt="Genmaicha">
				<figcaption><a href="item.php">Genmaicha</a></figcaption>
			</figure>
		</div>
		<div class = "panel">
			<figure class="itemFig">
				<img src="../images/items/YorkshireGold_OrangePeeko.jpg" alt="OrangePeeko">
				<figcaption><a href="item.php">Orange Peeko</a></figcaption>
			</figure>
		</div>
	</div>

  <footer class="footer-distributed">
    <div class="footer-left">
      <h3>Caffeine<span>Holic</span></h3>
  			<p class="footer-links">
					<a href="frontPage.php">Home</a>·
					<a href="#">Blog</a>·
					<a href="#">Pricing</a>·
					<a href="#">About</a>·
					<a href="#">Faq</a>·
					<a href="#">Contact</a>
				</p>
			  <p class="footer-company-name">Caffeine Holic &copy; 2018</p>
  			</div>

  			<div class="footer-center">
  				<div>
  					<i class="mapmarker"></i>
  					<p><span>3333 University Way</span> Kelowna, BC</p>
  				</div>

  				<div>
  					<i class="phone"></i>
  					<p>+1 778 581 3502</p>
  				</div>

  				<div>
  					<i class="envelope"></i>
  					<p><a href="mailto:khyy37@hotmail.com">khyy37@hotmail.com</a></p>
  				</div>
  			</div>

  			<div class="footer-right">
  				<p class="footer-company-about">
  					<span>ABOUT THE COMPANY</span>
  					     Opened in October 2018, Kelowna BC.<br>
                 Amazing coffee, tea, snacks<br>
                 Best coffee in town.
  				</p>

  				<div class="footer-icons">
  					<a href="#"><i class="facebook"></i></a>
  					<a href="#"><i class="twitter"></i></a>
  					<a href="#"><i class="linkedin"></i></a>
            <a href="#"><i class="instagram"></i></a>
  				</div>
  			</div>
  		</footer>
  </body>
</html>
