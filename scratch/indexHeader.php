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
    <link rel="stylesheet" type=text/css href="scratch.css">
    <title>Header</title>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

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
    <!-- Dropdown Item Selection Color -->

    <style>
      .container .dropdown .dropdown-menu a:hover {
        /* color: #fff; */
        background-color: #bcbcbc;
        /* border-color: #fff; */
      }
    </style>
  </head>
  <body>
    <div class="container">
      <!-- Logos-->

      <div class="row">
        <div class="col-4">
          <a href="#"
            ><img
              class="img-fluid"
              src="../newdeal/images/fundatm_logo.png"
              alt="FATMlogo"
              id="logo"
          /></a>
        </div>
        <div class="col-8">
          <img
            src="../images/main_2.jpg"
            class="img-fluid"
            alt="Main Banner Image. Achieve Great Goals!"
          />
        </div>
      </div>
    </div>

    <!-- START of nav elements -->
    <nav
      class="navbar navbar-expand-lg navbar-dark"
      style="background-color: #cc0000;"
    >
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
                class="nav-link dropdown-toggle text-light"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Mall Store
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Women</a>
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
              </div>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-light"
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
                class="nav-link dropdown-toggle text-light"
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

          <div style="padding-left: 10mm;"></div>

          <!-- Account icon button -->
          <a data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-user-circle fa-3x" style="color: #ffff;"></i>
          </a>
        </div>
      </div>

      <!-- Account icon popup dialog box -->

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
              <!-- <h5 class="modal-title" id="exampleModalLabel">New message</h5> -->
              <img
                class="img-fluid"
                style="width: 50mm;"
                src="../newdeal/images/fundatm_logo.png"
                alt="FATMlogo"
                id="logo"
              />
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
                  <button type="button" class="btn btn-primary">
                    Login
                  </button>

                  <a style="margin-left: 30mm;" href="#">Forgot Password </a>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
              >
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
