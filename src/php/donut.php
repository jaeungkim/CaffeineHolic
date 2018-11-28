<!DOCTYPE html>
<html lang = "en">
<head>
  <title>IDEAS</title>
  <link rel="stylesheet" href="../css/mainPage.css" />
  <link rel="stylesheet" href="../css/header.css"/>
  <link rel="stylesheet" href="../css/footer.css"/>
  <link rel="stylesheet" href="../css/menu.css"/>
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
        <a href = "cart.php" id = "cart">Cart </a>
      </div>

      <!-- account -->
      <div class = "navRight">
        <div class="dropdown">
          <button class="dropbtn">Account</button>
            <div class="dropdown-content">
              <div class = "signIn">
              <a href = "signin.php" id = "sign">Sign In</a>
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
          <button class="dropbtn">Menu</button>
            <div class="dropdown-content">
              <div class = "drinkMenu">
                <p id = "beverages">Beverages </a>
                  <ul class = "subMenu">
                    <!-- <li class = "beverageImg"> -->
                      <!-- <img src = "../images/logo.png" alt "beverage"> -->
                    <!-- </li> -->
                    <a href="coffee.php"><li class = "coffee">Coffee</li></a>
                    <a href="tea.php"><li class = "tea">Tea</li></a>
                    <a href="pop.php"><li calss = "pop">Soft Drinks</li></a>
                  </ul>
              </div>
              <div class = "foodMenu">
                <p id = "food">Food</p>
                  <ul class = "subMenu">
                    <a href="cookie.php"><li class = "cookie">Cookie</li></a>
                    <a href="muffin.php"><li class = "muffin">Muffin</li></a>
                    <a href="donut.php"><li class = "donut">Donut</li></a>
                  </ul>
              </div>
            </div>
        </div>
      </div>

      <!-- team members (us) -->
      <div class = "navRight">
        <a href = "aboutus.php" id = "aboutUs">About Us </a>
      </div>
    </div>
  </header>

  <!--menu table -->
  <div class = "menuitems">
      <table id = "listingTable">
        <tbody>
            <tr>
              <th class = "tableHead">Picture</th>
              <th class = "tableHead">Product Name</th>
              <th class = "tableHead">Price</th>
              <th class = "tableHead">Quantity</th>
              <th class = "tableHead">Rating</th>
              <th class = "tableHead">Cart</th>
            </tr>
            <!-- Chocolate glazed -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/donuts/chocolateglazeddonut.jpg" alt =""></td>
              <td> Chocolate Glazed </td>
              <td> $1.50 </td>
              <td> quantity </td>
              <td>
                <div class = "rating">
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                </div>
              </td>
              <td><a class "addCart" href = "cart.php"> Add to Cart </a> </td>
            </tr>

            <!-- Double Chocolate -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/donuts/doublechocolate.jpg" alt =""></td>
              <td> Double Chocolate </td>
              <td> $1.50 </td>
              <td> quantity </td>
              <td>
                <div class = "rating">
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                </div>
              </td>
              <td><a class "addCart" href = "cart.php"> Add to Cart </a> </td>
            </tr>

            <!-- Honey Dip -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/donuts/honeydip.jpg" alt =""></td>
              <td> Honey Dip </td>
              <td> $1.50 </td>
              <td> quantity </td>
              <td>
                <div class = "rating">
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                </div>
              </td>
              <td><a class "addCart" href = "cart.php"> Add to Cart </a> </td>
            </tr>

            <!-- Old Fashion -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/donuts/oldfashioned.jpg" alt =""></td>
              <td> Old Fashioned </td>
              <td> $1.50 </td>
              <td> quantity </td>
              <td>
                <div class = "rating">
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                </div>
              </td>
              <td><a class "addCart" href = "cart.php"> Add to Cart </a> </td>
            </tr>

            <!-- Vanilla Dip -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/donuts/vanilladip.jpg" alt =""></td>
              <td> Vanilla Dip </td>
              <td> $1.50</td>
              <td> quantity </td>
              <td>
                <div class = "rating">
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                </div>
              </td>
              <td> <a class "addCart" href = "cart.php"> Add to Cart </a> </td>
            </tr>

            <!-- Maple Dip -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/donuts/mapledip.jpg" alt =""></td>
              <td> Maple Dip </td>
              <td> $1.50</td>
              <td> quantity </td>
              <td>
                <div class = "rating">
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                </div>
              </td>
              <td><a class "addCart" href = "cart.php"> Add to Cart </a> </td>
            </tr>

            <!-- Raspberry -->
            <tr class = "menuitems">
              <td><img id = "menupic" src = "../images/donuts/raspberrydonut.jpg" alt =""></td>
              <td> Raspberry </td>
              <td> $1.50 </td>
              <td> quantity </td>
              <td>
                <div class = "rating">
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                  <span> ★ </span>
                </div>
              </td>
              <td><a class "addCart" href = "cart.php"> Add to Cart </a> </td>
            </tr>
          </div>
        </tbody>
      </table>
  </div>
  <!-- company names / copyright / info etc etc -->
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
