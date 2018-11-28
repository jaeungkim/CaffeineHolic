<!DOCTYPE html>
<html lang = "en">
<head>
  <title>IDEAS Checkout</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/checkout.css">
  <link rel="stylesheet" href="../css/header.css"/>
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

<div class="mainbody">
  <!-- Title -->
  <div class="carttitle">
    <p>Checkout</p>
  </div>

  <!-- Product #1 -->
  <div class="item">
    <div class="col image">
      <img src="../images/coffee/americano.jpg" alt="item1" / width="80em" height="80em">
    </div>

    <div class="col description">
      Americano
    </div>

    <div class="col quantity">
      1
    </div>

    <div class="col total-price">$2.50</div>
  </div>

  <!-- Product #2 -->
  <div class="item">
    <div class="col image">
      <img src="../images/tea/chai.jpg" alt="item2" / width="80em" height="80em">
    </div>

    <div class="col description">
      chai
    </div>

    <div class="col quantity">
      1
    </div>

    <div class="col total-price">$3.75</div>
  </div>

  <!-- Product #3 -->
  <div class="item">
    <div class="col image">
      <img src="../images/coffee/cafe-latte.png" alt="item3" / width="80em" height="80em">
    </div>

    <div class="col description">
      cafe latte
    </div>

    <div class="col quantity">
      1
    </div>

    <div class="col total-price">$2.75</div>
  </div>

  <div class="subtotal">
    subtotal:
  </div>
  <div class="subvalue">
    $9.00
  </div>
  <div class="payment">
    <h1 class="po">Payment options</h1>
    <div class="card">
      <p class="label2">Add a New Payment Method</p>
      <p class="label3">Enter your credit card information:</p>
      <form class="" action="index.php" method="post">
      <table>
        <tr>
          <th>Name on card</th><th>Card number</th><th>Expiration date</th><th></th>
        </tr>
        <tr>
          <td><input type="text" name="cardname"></td>
          <td><input type="text" name="cardnumber"></td>
          <td><input type="date" name="expiredate"></td>
          <td><input type="submit" name="submit" value="Add"></td>
        </tr>
      </table>
      </form>
    </div>

  </div>
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
<img class="cartbg" src="../images/bg/checkoutbg.jpg" alt="">
</body>
</html>
