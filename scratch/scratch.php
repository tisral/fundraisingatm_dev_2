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
    <link rel="stylesheet" type=text/css href="bootstrap.css">

    <title>scratch</title>

    <!-- Optional JavaScript -->

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

    <!-- Allows to render different pages on a hmtl page -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->


  </head>
  <body>
    
    <?php include 'header.php'; ?>

    <br />
    <br />

    <div class="container">
      <div class="row justify-content-around">
        <div class="col-lg-5 col-md-6 col-sm-6">
          <div class="card">
            <h3 style="text-align: center; padding: 2mm;">Start Fundraiser!</h3>

            <img
              class="card-img-top"
              src="../images/Team-Pic.jpg"
              alt="Card image cap"
            />
            <div class="card-body">
              <h5 style="text-align: center;">
                Contact a Rep and get started today!
              </h5>

              <p class="card-text">
                FundraisingATM is here to help you reach your fundraising goals!
                Let us set up your free fundraiser and personalized websites for
                each member.
                <br /><br />
                Everyone is welcome to set up fundraisers for schools,
                faith-based groups, and various organizations. Fundraising has
                never been this fun and convenient! FundraisingATM is excited to
                help you reach your goals and dreams! Success is just a click
                away!
              </p>

              <a
                href="#"
                class="btn btn-info"
                style="text-align: center; display: block;"
              >
                Learn More!</a
              >
            </div>
          </div>
        </div>

        <div class="col-lg-5 col-md-6 col-sm-6">
          <div class="card">
            <h3 style="text-align: center; padding: 2mm;">
              Fundraiser Search!
            </h3>
            <img
              class="card-img-top"
              src="../images/Fundraiser-HP.jpg"
              alt="Card image cap"
            />

            <div class="card-body">
              <h5 style="text-align: center;">Find a Fundraiser to Support!</h5>
              <p class="card-text">
                Show your support by shopping at the FundraisingATM which
                contains over 100 different stores with a variety of over 20,000
                different products. This means that there is something for
                everyone!
                <br /><br />
                There are even name-brand products, in-style and seasonal goods,
                and new items being added regularly. A total of 35% of each
                purchase you make goes directly to the fundraiser you are
                supporting!
              </p>
              <a
                href="#"
                class="btn btn-info"
                style="text-align: center; display: block;"
              >
                Support a Fundraiser</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <br /><br />
    <?php include 'footer.php'; ?>

    <br /><br />
  </body>
</html>

<?php
ob_end_flush();
?>
