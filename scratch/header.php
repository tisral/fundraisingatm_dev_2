<!-- July 9, 2020 , Version 1.0 -->
<?php
	session_start();
	ob_start();
	error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" type=text/css href="bootstrap.css"> -->
    <!-- <link rel="stylesheet" type=text/css href="scratch.css"> -->
    <title>Header</title>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/02cc6eac99.js" crossorigin="anonymous"></script> -->

    <!-- Dropdown Item Selection Color -->

    <style>
      .dropdown-submenu:hover > ul.dropdown-menu {
        display: block;
      }
      .dropdown-submenu {
        position: relative;
      }

      .dropdown-submenu > .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
      }

      /* rotate caret on hover */
      .dropdown-submenu > a:hover:after {
        text-decoration: underline;
        transform: rotate(-90deg);
      }

      .dropdown-submenu > .dropdown-toggle-split:hover:after {
        text-decoration: underline;
        transform: rotate(-90deg);
      }
    </style>
  </head>
  <body>
    <!-- START of nav elements -->

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #cc0000;">
      <!-- Logos-->

      <a href="#"><img class="img-fluid" style="width: 50mm;" src="../newdeal/images/FundraisingATM120519white.png" alt="FATMlogo" id="logo" /></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Mall Store
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li class="dropdown-submenu">
                <!-- <div class="btn-group">
                  <a class="dropdown-item" href=" https://www.google.com/">Women</a>
                  <a class="dropdown-item dropdown-toggle dropdown-toggle-split"> </a>
                </div> -->

                <a class="dropdown-item dropdown-toggle">Women</a>

                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle"> Activewear Depot </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item"> Active Tops</a></li>
                      <li><a class="dropdown-item"> Active Bottoms</a></li>
                      <li><a class="dropdown-item"> Sports Bras</a></li>
                      <li><a class="dropdown-item"> Active Sweatshirts</a></li>
                      <li><a class="dropdown-item"> Active Outerwear</a></li>
                      <li><a class="dropdown-item"> Jackets</a></li>
                      <li><a class="dropdown-item"> Lounge Wear</a></li>
                      <li><a class="dropdown-item"> Caps & Hats</a></li>
                      <li><a class="dropdown-item"> Bags & Accessories</a></li>
                      <li><a class="dropdown-item"> Extended Sizes</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle"> Athleisure </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item"> Performance Tops</a></li>
                      <li><a class="dropdown-item"> Performance Bottoms</a></li>
                      <li><a class="dropdown-item"> Sports Bras</a></li>
                      <li><a class="dropdown-item"> Sweatshirts</a></li>
                      <li><a class="dropdown-item"> Jackets</a></li>
                      <li><a class="dropdown-item"> Hats & Headbands</a></li>
                      <li><a class="dropdown-item"> Bags & Accessories</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle">Fun Fashion Boutique</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">Short Sleeves</a></li>
                      <li><a class="dropdown-item">Long Sleeves</a></li>
                      <li><a class="dropdown-item">Tank Tops</a></li>
                      <li><a class="dropdown-item">Blouses</a></li>
                      <li><a class="dropdown-item">Flowy Tops</a></li>
                      <li><a class="dropdown-item">Pants & Shorts</a></li>
                      <li><a class="dropdown-item">Dresses & Skirts</a></li>
                      <li><a class="dropdown-item">Sweaters</a></li>
                      <li><a class="dropdown-item">Lounge Wear</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle">Full Figure Boutique</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">Short Sleeves</a></li>
                      <li><a class="dropdown-item">Long Sleeves</a></li>
                      <li><a class="dropdown-item">Tank Tops</a></li>
                      <li><a class="dropdown-item">Blouses</a></li>
                      <li><a class="dropdown-item">Flowy Tops</a></li>
                      <li><a class="dropdown-item">Dresses & Skirts</a></li>
                      <li><a class="dropdown-item">Sweaters</a></li>
                      <li><a class="dropdown-item">Lounge Wear</a></li>
                      <li><a class="dropdown-item">Activewear</a></li>
                      <li><a class="dropdown-item">Sleepwear</a></li>
                      <li><a class="dropdown-item">Romantic, Loving Gifts</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle">Scarves, Scarves, Scarves</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">All Scarves</a></li>
                      <li><a class="dropdown-item">Infinity</a></li>
                      <li><a class="dropdown-item">Shawl & Dress Wraps</a></li>
                      <li><a class="dropdown-item">Cashmere</a></li>
                      <li><a class="dropdown-item">Cold Weather Comfort</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle">Its a Wrap!</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">All Wraps</a></li>
                      <li><a class="dropdown-item">Cardigans & Sweaters</a></li>
                      <li><a class="dropdown-item">Cashmere Collection</a></li>
                      <li><a class="dropdown-item">Ponchos & Shawls</a></li>
                      <li><a class="dropdown-item">Dress Wraps</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle">Top Hats: Emporium & Haberdashery</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">Beach & Sun</a></li>
                      <li><a class="dropdown-item">Gardening</a></li>
                      <li><a class="dropdown-item">Visors & Caps</a></li>
                      <li><a class="dropdown-item">Hat, Glove & Scarf Sets</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle">Wild West</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">Women's Tops</a></li>
                      <li><a class="dropdown-item">Dresses & Skirts</a></li>
                      <li><a class="dropdown-item">Ponchos & Wraps</a></li>
                      <li><a class="dropdown-item">Jewelry</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle">Pretty In Pink</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">Passionately Pink Apparel</a></li>
                      <li><a class="dropdown-item">Pink Pajamas & More</a></li>
                      <li><a class="dropdown-item">A Touch of Pink Scarves</a></li>
                      <li><a class="dropdown-item">Pink Bags & Accessories</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle">Camo Store</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">Apparel</a></li>
                      <li><a class="dropdown-item">Sweatshirts</a></li>
                      <li><a class="dropdown-item">Accessories</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle">Sparkle</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">Apparel with Sparkle</a></li>
                      <li><a class="dropdown-item">Dazzling Jewelry</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle">Going Bananas for Pajamas</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">Pajama Sets</a></li>
                      <li><a class="dropdown-item">PJ Tops</a></li>
                      <li><a class="dropdown-item">PJ Bottoms</a></li>
                      <li><a class="dropdown-item">Nightgowns & Nightshirts</a></li>
                      <li><a class="dropdown-item">Cozy Robes</a></li>
                      <li><a class="dropdown-item">Lounge Wear</a></li>
                      <li><a class="dropdown-item">Socks & Slippers</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle">Sole Mates: Socks and Slippers</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">Lifestyle Socks</a></li>
                      <li><a class="dropdown-item">Leggings & Tights</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle">Romantically Sweet Boutique</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">Sleepwear</a></li>
                      <li><a class="dropdown-item">Jewelry</a></li>
                      <li><a class="dropdown-item">Romantic, Loving Gifts</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle">Top Shop</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">T-Shirts</a></li>
                      <li><a class="dropdown-item">Short Sleeves</a></li>
                      <li><a class="dropdown-item">Long Sleeves</a></li>
                      <li><a class="dropdown-item">Flowy Tops</a></li>
                      <li><a class="dropdown-item">Tank Tops</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle">Grab a Sweatshirt</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">Hoodie & Crew Neck</a></li>
                      <li><a class="dropdown-item">Front Zip</a></li>
                      <li><a class="dropdown-item">Performance Sweatshirts</a></li>
                      <li><a class="dropdown-item">Blanket Chest</a></li>
                      <li><a class="dropdown-item">Blankets & Throws</a></li>
                      <li><a class="dropdown-item">Baby Blankets</a></li>
                      <li><a class="dropdown-item">Kid's Blankets</a></li>
                      <li><a class="dropdown-item">Kid's Sleeping Bags</a></li>
                      <li><a class="dropdown-item">Stadium Blankets</a></li>
                      <li><a class="dropdown-item">Shawls & Wraps</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle">Game Day</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">Shirts</a></li>
                      <li><a class="dropdown-item">Sweatshirts</a></li>
                      <li><a class="dropdown-item">Caps & Hats</a></li>
                      <li><a class="dropdown-item">Scarves & Gloves</a></li>
                      <li><a class="dropdown-item">Accessories</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle">The Campus Store</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">Trendy Tops</a></li>
                      <li><a class="dropdown-item">Sweatshirts</a></li>
                      <li><a class="dropdown-item">Dresses & Skirts</a></li>
                      <li><a class="dropdown-item">Jackets, Vests & Fleece</a></li>
                      <li><a class="dropdown-item">Backpacks & Bags</a></li>
                      <li><a class="dropdown-item">Caps & Hats</a></li>
                      <li><a class="dropdown-item">Scarves & Gloves</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle">Sun, Sand & Surf</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">Towels for the Beach</a></li>
                      <li><a class="dropdown-item">Beach Bags & Backpacks</a></li>
                      <li><a class="dropdown-item">Beach Accessories</a></li>
                      <li><a class="dropdown-item">Hats & Caps</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle">The Great Outdoors</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">Sweaters</a></li>
                      <li><a class="dropdown-item">Outerwear</a></li>
                      <li><a class="dropdown-item">Headwear</a></li>
                      <li><a class="dropdown-item">Gloves & Scarves</a></li>
                      <li><a class="dropdown-item">Accessories</a></li>
                      <li><a class="dropdown-item">Blankets</a></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-item dropdown-toggle">Backpacks & Bags: For On-the-Go</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item">Backpacks</a></li>
                      <li><a class="dropdown-item">Drawstring Backpacks</a></li>
                      <li><a class="dropdown-item">Kids Backpacks</a></li>
                      <li><a class="dropdown-item">School Bags</a></li>
                      <li><a class="dropdown-item">Gym Bags</a></li>
                      <li><a class="dropdown-item">Beach & Totes</a></li>
                      <li><a class="dropdown-item">Leather</a></li>
                      <li><a class="dropdown-item">Crossbody & Shoulder</a></li>
                      <li><a class="dropdown-item">Canvas</a></li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li><a class="dropdown-item" href="#">Men</a> </li>
              <li><a class="dropdown-item" href="#">Accessories</a></li>
              <li><a class="dropdown-item" href="#">Jewelry</a></li>
              <li><a class="dropdown-item" href="#">Juniors</a></li>
              <li><a class="dropdown-item" href="#">Kids</a></li>
              <li><a class="dropdown-item" href="#">Fitness</a></li>
              <li><a class="dropdown-item" href="#">Gifts</a></li>
              <li><a class="dropdown-item" href="#">Entertainment</a></li>
              <li><a class="dropdown-item" href="#">Home</a></li>
              <li><a class="dropdown-item" href="#">Health</a></li>
              <li><a class="dropdown-item" href="#">Inspirational</a></li>
              <li><a class="dropdown-item" href="#">Holiday</a></li>
              <li><a class="dropdown-item" href="#">Business</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Fundraising Program
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Program Overview</a>
              <a class="dropdown-item" href="#">Mission Statement</a>
              <a class="dropdown-item" href="#">Accessories</a>
              <a class="dropdown-item" href="#">Online Fundraising</a>
              <a class="dropdown-item" href="#">Strengths of the Program</a>
              <a class="dropdown-item" href="#">3 Steps to Fundraising Success!</a>
              <a class="dropdown-item" href="#">FundraisingATM Mall Products & Gifts</a>
              <a class="dropdown-item" href="#">We Deliver</a>
              <a class="dropdown-item" href="#">Cash Deposited Weekly</a>
              <a class="dropdown-item" href="#">Calculate Your Success</a>
              <a class="dropdown-item" href="#">Generate Funds 27/7/365 Days a Year</a>
              <a class="dropdown-item" href="#">Get Started Today! Contact Your Rep!</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Fundraising Exemples
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Schools</a>
              <a class="dropdown-item" href="#">Organizations</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
            Search
          </button>
        </form>

        <div style="padding-left: 10mm;"></div>

        <!-- Account icon button -->
        <a data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-user-circle fa-3x" style="color: #ffff;"></i>
        </a>
      </div>

      <!-- Account icon popup dialog box -->

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <img class="img-fluid" style="width: 50mm;" src="../newdeal/images/fundatm_logo.png" alt="FATMlogo" id="logo" />
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" />
                </div>
                <div class="form-group form-check">
                  <button type="button" class="btn btn-primary">
                    Login
                  </button>

                  <a style="margin-left: 30mm;" href="#">Forgot Password </a>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </body>
</html>

<?php
ob_end_flush();
?>
