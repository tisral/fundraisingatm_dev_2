<!-- June 29, 2020 , Version 1.0 -->
<?php
if(isset($_POST['login'])){
    session_start();
    ob_start();
    require_once('logInUser.inc.php');

}
?>




  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type=text/css href="scratch.css">
    <title>Document</title>

  </head>
  <header>
    <div class="container">
      <!-- START above nav elements content container -->

      <div class="row">
        <div class="col-4">
          <a href="#"
            ><img
              class="img-fluid"
              src="fundatm_logo.png"
              alt="FATMlogo"
              id="logo"
          /></a>
        </div>
        <div class="col-8">
          <img
            src="main_2.jpg"
            class="img-fluid"
            alt="Main Banner Image. Achieve Great Goals!"
          />
        </div>
      </div>
    </div>
    <!-- END above nav elements -->

    <nav class="navbar navbar-expand-lg navbar-dark text-white navbar-default" role="navigation" style="background-color: #cc0000;">
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <div class="container">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Mall Store
              </a>

              <ul class="dropdown-menu">
                <li class="dropdown" id="mainCategoryType">
                    <a href="greatmoodsMall.php?group=<?php echo $_GET['group']; ?>&storeid=900#!/Womens/c/18159169/offset=0&sort=priceAsc" data-toggle="dropdown disabled" role="button" aria-haspopup="true" aria-expanded="false">Women<span class="sr-only"></span></a>
                      <?php include 'menu/menu_women.php'; ?>
                </li><br>
              </ul>
              <!--<div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Women </a>
                <a class="dropdown-item" href="#">Men</a>
                <a class="dropdown-item" href="#">Accessories</a>
                <a class="dropdown-item" href="#">Jewelry</a>
                <a class="dropdown-item" href="#">Juniors</a>
                <a class="dropdown-item" href="#">Kids</a>
                <a class="dropdown-item" href="#">Fitness</a>
                <a class="dropdown-item" href="#">Gifts</a>
                <a class="dropdown-item" href="#">Entertainment</a>
                <a class="dropdown-item" href="#">Home</a>
                <a class="dropdown-item" href="#">Health</a>
                <a class="dropdown-item" href="#">Inspirational</a>
                <a class="dropdown-item" href="#">Holiday</a>
                <a class="dropdown-item" href="#">Business</a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>

              </div>
              -->
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Fundraising Program
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Program Overview</a>
                <a class="dropdown-item" href="#">Mission Statement</a>
                <a class="dropdown-item" href="#">Accessories</a>
                <a class="dropdown-item" href="#">Online Fundraising</a>
                <a class="dropdown-item" href="#">Strengths of the Program</a>
                <a class="dropdown-item" href="#"
                  >3 Steps to Fundraising Success!</a
                >
                <a class="dropdown-item" href="#"
                  >FundraisingATM Mall Products & Gifts</a
                >
                <a class="dropdown-item" href="#">We Deliver</a>
                <a class="dropdown-item" href="#">Cash Deposited Weekly</a>
                <a class="dropdown-item" href="#">Calculate Your Success</a>
                <a class="dropdown-item" href="#"
                  >Generate Funds 27/7/365 Days a Year</a
                >
                <a class="dropdown-item" href="#"
                  >Get Started Today! Contact Your Rep!</a
                >
              </div>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Fundraising Exemples
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Schools</a>
                <a class="dropdown-item" href="#">Organizations</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>

      <div>
        <row>
          <a data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-user-circle fa-3x"></i>
          </a>
        </row>
        <!-- <row>
          <p>Account</p>
        </row> -->
      </div>

      <!-- Modal -->

      <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input
                    type="email"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    placeholder="Enter email"
                  />
                  <small id="emailHelp" class="form-text text-muted"
                    >We'll never share your email with anyone else.</small
                  >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="exampleInputPassword1"
                    placeholder="Password"
                  />
                </div>
                <div class="form-group form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="exampleCheck1"
                  />
                  <label class="form-check-label" for="exampleCheck1"
                    >Check me out</label
                  >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            <!-- </div> -->
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
              >
                Close
              </button>
              <button type="button" class="btn btn-primary">
                Send message
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body"> -->
      <!-- <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input
                    type="email"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                  />
                  <small id="emailHelp" class="form-text text-muted"
                    >We'll never share your email with anyone else.</small
                  >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="exampleInputPassword1"
                  />
                </div>
                <div class="form-group form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="exampleCheck1"
                  />
                  <label class="form-check-label" for="exampleCheck1"
                    >Check me out</label
                  >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form> -->
      <!-- </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
              >
                Close
              </button>
              <button type="button" class="btn btn-primary">
                Save changes
              </button>
            </div>
          </div>
        </div>
      </div> -->
    </nav>

    <br />
    <br />
    <br />

    <div class="container">
      <div class="row justify-content-around">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card">
            <img
              class="card-img-top"
              src="photo-1523895665936-7bfe172b757d.jpg"
              alt="Card image cap"
            />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card">
            <img
              class="card-img-top"
              src="how to make a picture transparent in powerpoint-1.jpg"
              alt="Card image cap"
            />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://kit.fontawesome.com/02cc6eac99.js"
      crossorigin="anonymous"
    ></script>

    <script src="scracth.js"></script>
  </header>
