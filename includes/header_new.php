<?php
if(isset($_POST['login'])){
    session_start();
    ob_start();
    require_once('logInUser.inc.php');

}
?>

<head>
  <meta charset="UTF-8">
  <meta name="wot-verification" content="afd275378407e34df6ec"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <!--paypal checkout-->
  <script src="https://www.paypalobjects.com/api/checkout.js"></script>
  <link rel="preload" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" as="style" onload="this.rel='stylesheet'" crossorigin="anonymous"> <!-- asynch css load -->
  <noscript> <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></noscript> <!-- load styles for browsers with JS disabled -->
  <!--sidebar navigation dropdown plugin -->
  <link rel="preload" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css" as="style" onload="this.rel='stylesheet'"> <!-- asynch css load -->
  <noscript><link  rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css"></noscript><!-- load styles for browsers with JS disabled -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <link rel="preload" href="css2/global_styles.css" as="style" onload="this.rel='stylesheet'"> <!-- asynch css load -->
  <noscript><link rel="stylesheet" href="css2/global_styles.css"></noscript><!-- load styles for browsers with JS disabled -->
  <!-- bootstrap file, avoid editing if possible, find the classes you need and then override them in global styles -->
  <link rel="preload" href="css2/bootstrap.css"  as="style" onload="this.rel='stylesheet'"> <!-- asynch css load -->
  <noscript><link rel="stylesheet" href="css2/bootstrap.css"></noscript><!-- load styles for browsers with JS disabled -->

  <link rel="preload" href="css2/content_styles.css" as="style" onload="this.rel='stylesheet'"> <!-- asynch css load -->
  <noscript><linkrel="stylesheet" href="css2/content_styles.css"></noscript><!-- load styles for browsers with JS disabled -->
  <!-- top navigation styles -->
  <link rel="preload" href="css2/main_nav.css" as="style" onload="this.rel='stylesheet'"> <!-- asynch css load -->
  <noscript><link rel="stylesheet" href="css2/main_nav.css"></noscript><!-- load styles for browsers with JS disabled -->




  <link rel="stylesheet" type=text/css href="includes/scratch.css">

	<!-- jQuery (required)
	**ALL OTHER CDNS LOCATED IN FOOTER, AS FOOTERS ARE ALWAYS LOCATED BEFORE BODY CLOSING TAG - the ideal spot of JS/jQuery**
	*For some reason jasny needs jquery listed in header as well to allow for sidenav dropdowns to collapse correctly ? -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--lightbox code-->
    <link href="lity/dist/lity.css" rel="stylesheet">
    <script src="lity/vendor/jquery.js"></script>
    <script src="lity/dist/lity.js"></script>

    <!--Search Bar JS-->
    <script type="text/javascript" src="js/script.js"></script>

    <!-- function for loading basic content for browser with JS disabled -->
	<script>
	/*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
	!function(a){"use strict";var b=function(b,c,d){function e(a){return h.body?a():void setTimeout(function(){e(a)})}function f(){i.addEventListener&&i.removeEventListener("load",f),i.media=d||"all"}var g,h=a.document,i=h.createElement("link");if(c)g=c;else{var j=(h.body||h.getElementsByTagName("head")[0]).childNodes;g=j[j.length-1]}var k=h.styleSheets;i.rel="stylesheet",i.href=b,i.media="only x",e(function(){g.parentNode.insertBefore(i,c?g:g.nextSibling)});var l=function(a){for(var b=i.href,c=k.length;c--;)if(k[c].href===b)return a();setTimeout(function(){l(a)})};return i.addEventListener&&i.addEventListener("load",f),i.onloadcssdefined=l,l(f),i};"undefined"!=typeof exports?exports.loadCSS=b:a.loadCSS=b}("undefined"!=typeof global?global:this);
	/*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
	!function(a){if(a.loadCSS){var b=loadCSS.relpreload={};if(b.support=function(){try{return a.document.createElement("link").relList.supports("preload")}catch(b){return!1}},b.poly=function(){for(var b=a.document.getElementsByTagName("link"),c=0;c<b.length;c++){var d=b[c];"preload"===d.rel&&"style"===d.getAttribute("as")&&(a.loadCSS(d.href,d,d.getAttribute("media")),d.rel=null)}},!b.support()){b.poly();var c=a.setInterval(b.poly,300);a.addEventListener&&a.addEventListener("load",function(){b.poly(),a.clearInterval(c)}),a.attachEvent&&a.attachEvent("onload",function(){a.clearInterval(c)})}}}(this);
	</script>

	<!--google analytics-->
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-88659906-1', 'auto');
      ga('send', 'pageview');
    </script>
    <script>
 /* activate the carousel */
$("#modal-carousel").carousel({interval:false});

/* change modal title when slide changes */
$("#modal-carousel").on("slid.bs.carousel", function () {
  $(".modal-title").html($(this).find(".active img").attr("title"));
})

/* when clicking a thumbnail */
$(".row .thumbnail").click(function(){
    var content = $(".carousel-inner");
    var title = $(".modal-title");

    content.empty();
    title.empty();

  	var id = this.id;
    var repo = $("#img-repo .item");
    var repoCopy = repo.filter("#" + id).clone();
    var active = repoCopy.first();

    active.addClass("active");
    title.html(active.find("img").attr("title"));
  	content.append(repoCopy);

    // show the modal
  	$("#modal-gallery").modal("show");
});
</script>
	<script>
		function calculateSchool(orgType) {
		        var price = 35;
		        var commission = .35;
			//elementary schools
			//var num7 = Number(document.getElementById("Enum").value);
			//var fund7 = Number(document.getElementById("Efund").value);
			var people7 = Number(document.getElementById("Epeople").value);
			var percent7 = (Number(document.getElementById("Epercent").value))/100;
			var active7 = people7 * percent7;
			active7 = Number(active7);
			//document.getElementById("Eactive").innerHTML = active7;
			var baskets7 = Number(document.getElementById("Ebaskets").value);
			var numPerYear7 = Number(document.getElementById("EnumPerYear").value);
			var total7 = baskets7 * numPerYear7 * price * commission * active7;
			var result7 =  format(total7,2);
			document.getElementById("Etotal").innerHTML = result7;
		}
		function format(num, dec) {
	        	return Math.round(num*Math.pow(10,dec))/Math.pow(10,dec);
	        }
	</script>

	<script>
		function getUrlVars() {
		    var vars = {};
		    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		        vars[key] = value;
		    });
		    return vars;
		}
		var group = getUrlVars()["group"];
	</script>

	<script src="http://app.ecwid.com/script.js?" charset="utf-8"></script>
	<script>xAffiliate('24503');</script>
	<script> xProductBrowser("categoriesPerRow=3","views=grid(5,4) list(10) table(20)","categoryView=grid","searchView=list","style="); </script>



  <!-- jequery for validation -- ensures fields at least have text -->
  <script>
    var $formLogin = $('#loginform');
    var $formLost = $('#lost-form');
    var $modalAnimateTime = 300;
    var $msgAnimateTime = 150;
    var $msgShowTime = 2000;

    $("#login_btn").submit(function () {
        switch(this.id) {
            case "loginform":
                var $username=$('#loginemail').val();
                var $password=$('#loginpassword').val();
                return false;
                break;
            default:
                return false;
        }
        return false;
    });
  </script>

   <!-- prevent side navigation from collapsing when mobile users attempt to toggle a dropdown -->
   <script>
    $(document).ready(function(){
    $('li.dropdown a').on("click", function(){
      $(this).parent().toggleClass('open');
      });
      $('body.canvas-slid').on('click', function (e) {
      if (!$('li.dropdown').is(e.target) && $('li.dropdown').has(e.target).length === 0 && $('.open').has(e.target).length === 0)  {
          $('li.dropdown').removeClass('open');
        }
        e.stopPropagation();
        e.preventDefault();
      });
        $('#accountIcon, #accountIconMobile').click(function () {
            $('login-modal').modal({
                show: true
            })
        });
            $(document).on('show.bs.modal', '.modal', function (event) {
                var zIndex = 1040 + (10 * $('.modal:visible').length);
                $(this).css('z-index', zIndex);
                setTimeout(function() {
                    $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
                }, 0);
            }); $('[data-toggle="tooltip"]').tooltip();
    });

  </script>

    <script>/* remove containers so dropdowns are consistant inside sidenavigation */
        $(function () {
        $(window).on('load, resize', function () {
            var viewportWidth = $(window).width();
            if (viewportWidth < 1183) {
                $(".dropdown-menu #dropdownrow-large").removeClass("container");
                 $(".dropdown-menu #dropdownrow").removeClass("container").removeClass("container-fluid");
            }else{
                $(".dropdown-menu #dropdownrow-large").addClass("container"),
                $(".dropdown-menu #dropdownrow").addClass("container").addClass("container-fluid");
            }
        })
        .resize();
        });
     </script>

     <script> //pause play carousel, switch active classes depedning on button clicked */
        $(function () {
            $('#carousel-presentation').carousel({
                interval:6500,
                pause: "false"
            });
            $('#playButton').click(function () {
                $('#carousel-presentation').carousel('cycle');
                $('#pauseButton').removeClass('active');
            });
            $('#pauseButton').click(function () {
                $('#carousel-presentation').carousel('pause');
                $('#pauseButton').addClass('active');
                $('#playButton').removeClass('active');
            });
        });
	</script>
     <!--search page tabs-->
     <script>
         $('ul.tabs').each(function(){
  // For each set of tabs, we want to keep track of
  // which tab is active and its associated content
  var $active, $content, $links = $(this).find('a');

  // If the location.hash matches one of the links, use that as the active tab.
  // If no match is found, use the first link as the initial active tab.
  $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
  $active.addClass('active');

  $content = $($active[0].hash);

  // Hide the remaining content
  $links.not($active).each(function () {
    $(this.hash).hide();
  });

  // Bind the click event handler
  $(this).on('click', 'a', function(e){
    // Make the old tab inactive.
    $active.removeClass('active');
    $content.hide();

    // Update the variables with the new link and content
    $active = $(this);
    $content = $(this.hash);

    // Make the tab active.
    $active.addClass('active');
    $content.show();

    // Prevent the anchor's default click action
    e.preventDefault();
  });
});
     </script>
     <script>
  $('#state').change(function () {
      $('#search1').hide();
    if ($("#state").val() !== "") {
        $('#search1').show();
    } else $("#search1").hide();
});
     </script>


     <script>
     $('#logo').addClass('animated bounceOutLeft');
     </script>


     <script>
     $(function(){
    $('.dropdown').hover(function() {
        $(this).addClass('open');
    },
    function() {
        $(this).removeClass('open');
    });
});
     </script>
</head>
<header class="font-weight-light font-italic">

<div class="container">
  <!-- START above nav elements content container -->

  <div class="row">
    <div class="col-4">
      <a href="#"
        ><img
          class="img-fluid"
          src="includes/fundatm_logo.png"
          alt="FATMlogo"
          id="logo"
      /></a>
    </div>
    <div class="col-8">
      <img
        src="includes/main_2.jpg"
        class="img-fluid"
        alt="Main Banner Image. Achieve Great Goals!"
      />
    </div>
  </div>
</div>




        <nav class="navbar navbar-expand-lg navbar-dark text-white" style="background-color: #cc0000;" >
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
      <ul class="navbar-nav  mr-auto" id="navCats"  id="mainCategoryType"> <!-- navbar list items -->
        <li class="nav-item dropdown" style="padding-top: 10px;">
              <a  class="dropdown-toggle"
                  data-toggle="dropdown disabled"
                  role="button"
                  id="navbarDropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >Mall Store
              </a>


              <ul class=" dropdown-menu" id="mainCategoryType">



                <link rel="preload" href="css2/bootstrap.css"  as="style" onload="this.rel='stylesheet'"> <!-- asynch css load -->
                <noscript><link rel="stylesheet" href="css2/bootstrap.css"></noscript><!-- load styles for browsers with JS disabled -->

                <li class="dropright dropdown" id="mainCategoryType">
                    <a href="greatmoodsMall.php?group=<?php echo $_GET['group'];
                    ?>&storeid=900#!/Womens/c/18159169/offset=0&sort=priceAsc"
                   data-toggle="dropdown disabled" role="button"
                    aria-haspopup="true" aria-expanded="false">
                    Women<span class="sr-only"></span>
                    </a>
                      <?php include 'menu/menu_women.php'; ?>
                </li><br>

                <li class="dropright dropdown" id="mainCategoryType">
                  <a  href="greatmoodsMall.php?group=<?php echo $_GET['group'];
                   ?>&storeid=900#!/Accessories/c/18195523/offset=0&sort=priceAsc"
                    data-toggle="dropdown disabled"
                    role="button" aria-haspopup="true" aria-expanded="false">
                    Accessories <span class="sr-only"></span>
                    </a>
                      <?php include 'menu/menu_accessories.php'; ?>
                </li><br>

                <li class="dropright dropdown" id="mainCategoryType">
                    <a href="greatmoodsMall.php?group=<?php echo $_GET['group'];
                     ?>&storeid=900#!/Mens/c/18159150/offset=0&sort=priceAsc"
                    data-toggle="dropdown disabled"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false">Men
                    <span class="sr-only"></span>
                   </a>
                    <?php include 'menu/menu_men.php'; ?>
                </li><br>

                <li class="dropright dropdown" id="mainCategoryType">
                  <a href="greatmoodsMall.php?group=<?php echo $_GET['group'];?>
                  &storeid=900#!/Juniors/c/18195671/offset=0&sort=priceAsc"
                  data-toggle="dropdown disabled" role="button" aria-haspopup="true"
                  aria-expanded="false">Juniors <span class="sr-only"></span>
                  </a>
                      <?php include 'menu/menu_juniors.php'; ?>
                </li><br>

                <li class="dropright dropdown" id="mainCategoryType">
                  <a  href="greatmoodsMall.php?group=<?php echo $_GET['group']; ?>
                  &storeid=900#!/Kids/c/18209039/offset=0&sort=priceAsc"
                  data-toggle="dropdown disabled" role="button" aria-haspopup="true"
                  aria-expanded="false">Kids <span class="sr-only"></span>
                  </a>
                      <?php include 'menu/menu_kids.php'; ?>
                </li><br>

                <li class="dropright dropdown" id="mainCategoryType">
                  <a href="greatmoodsMall.php?group=<?php echo $_GET['group']; ?>
                  &storeid=900#!/Fitness/c/18209624/offset=0&sort=priceAsc"
                  data-toggle="dropdown disabled" role="button" aria-haspopup="true"
                   aria-expanded="false">Fitness <span class="sr-only"></span>
                    </a>
                    <?php include 'menu/menu_fitness.php'; ?>
                </li><br>

                <li class="dropright dropdown" id="mainCategoryType">
                  <a  href="greatmoodsMall.php?group=<?php echo $_GET['group']; ?>
                  &storeid=900#!/Food/c/18209702/offset=0&sort=priceAsc"
                  data-toggle="dropdown disabled" role="button" aria-haspopup="true"
                  aria-expanded="false"  id="mainCategoryType">Gifts <span class="sr-only">
                  </span> </a>
                    <?php include 'menu/menu_food.php'; ?>
                </li><br>

                <li class="dropright dropdown" id="mainCategoryType">
                  <a  href="greatmoodsMall.php?group=<?php echo $_GET['group']; ?>
                  &storeid=900#!/Entertainment/c/18209743/offset=0&sort=priceAsc"
                  data-toggle="dropdown disabled" role="button" aria-haspopup="true"
                  aria-expanded="false">Entertainment<span class="sr-only"></span>
                  </a>
                    <?php include 'menu/menu_entertainment.php'; ?>
                </li><br>

                <li class="dropright dropdown" id="mainCategoryType">
                  <a  href="greatmoodsMall.php?group=<?php echo $_GET['group']; ?>
                  &storeid=900#!/Houseware/c/18209794/offset=0&sort=priceAsc"
                  data-toggle="dropdown disabled" role="button" aria-haspopup="true"
                  aria-expanded="false">Home <span class="sr-only"></span>
                  </a>
                    <?php include 'menu/menu_housewares.php'; ?>
                </li><br>

                <li class="dropright dropdown" id="mainCategoryType">
                  <a  href="greatmoodsMall.php?group=<?php echo $_GET['group']; ?>
                  &storeid=900#!/Health/c/18209818/offset=0&sort=priceAsc"
                  data-toggle="dropdown disabled" role="button"
                  aria-haspopup="true" aria-expanded="false">Health<span class="sr-only"></span>
                  </a>
                    <?php include 'menu/menu_health.php'; ?>
                </li><br>

                <li class="dropright dropdown" id="mainCategoryType">
                  <a  href="greatmoodsMall.php?group=<?php echo $_GET['group']; ?>
                  &storeid=900#!/Inspirational/c/18209845/offset=0&sort=priceAsc"
                  data-toggle="dropdown disabled" role="button" aria-haspopup="true">
                  Inspirational<span class="sr-only"></span>
                  </a>
                    <?php include 'menu/menu_inspirational.php'; ?>
                </li><br>

                <li class="dropright dropdown" id="mainCategoryType">
                  <a  href="greatmoodsMall.php?group=<?php echo $_GET['group']; ?>
                  &storeid=900#!/Holiday/c/18209901/offset=0&sort=priceAsc"
                   data-toggle="dropdown disabled" role="button" aria-haspopup="true">
                   Holiday<span class="sr-only"></span>
                  </a>
                    <?php include 'menu/menu_holiday.php'; ?>
                </li><br>

                <li class="dropright dropdown" id="mainCategoryType">
                  <a  href="greatmoodsMall.php?group=<?php echo $_GET['group']; ?>
                  &storeid=900#!/Business/c/18209939/offset=0&sort=priceAsc"
                  data-toggle="dropdown disabled" role="button" aria-haspopup="true">
                  Business<span class="sr-only"></span>
                 </a>
                      <?php include 'menu/menu_business.php'; ?>
                </li><br>
            </ul>
           </li>




           <li class="nav-item dropdown" style="padding-top: 10px;">
             <a
               class="dropdown-toggle"
               id="navbarDropdown"
               role="button"
               data-toggle="dropdown disabled"
               aria-haspopup="true"
               aria-expanded="false"
             >
               Fundraising Program
             <span class="sr-only"></span></a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="gm_programoverview.php">
               <span class="fa fa-desktop navicon"></span> Program Overview</a>
               <a class="dropdown-item" href="mission.php">
               <span class="fa fa-list-ul navicon"></span> Mission Statement</a>
               <a class="dropdown-item" href="onlinefundraising.php">
               <span class="fa fa-mouse-pointer navicon"></span> Online Fundraising</a>
               <a class="dropdown-item" href="program.php">
                 <span class="fa fa-star navicon"></span> Strengths of the Program</a>
               <a class="dropdown-item" href="easysetup.php"
                ><span class="fa fa-line-chart navicon"></span> 3 Steps to Fundraising Success!</a
               >
               <a class="dropdown-item" href="opportunities.php"
                ><span class="fa fa-shopping-cart navicon"></span> FundraisingATM Mall Products & Gifts</a
               >
               <a class="dropdown-item" href="deliver.php">
               <span class="fa fa-truck navicon"></span> We Deliver</a>
               <a class="dropdown-item" href="cash.php">
               <span class="fa fa-money navicon"></span> Cash Deposited Weekly</a>
               <a class="dropdown-item" href="calculator.php">
               <span class="fa fa-calculator navicon"></span> Calculate Your Success</a>
               <a class="dropdown-item" href="generatefunds.php"
                 ><span class="fa fa-calendar navicon"></span> Generate Funds 27/7/365 Days a Year</a
               >
               <a class="dropdown-item" href="gettingstarted_sendemail.php"
                 ><span class="fa fa-check navicon"></span> Get Started Today! Contact Your Rep!</a>
             </div>
           </li>
           <li class="nav-item dropdown" style="padding-top: 10px;">
             <a
               class="dropdown-toggle"
               id="navbarDropdown"
               role="button"
               data-toggle="dropdown"
               aria-haspopup="true"
               aria-expanded="false"
             >
               Fundraising Examples
             </a>
             <ul class=" dropdown-menu"  id="navCats" id="mainCategoryType">

              <li class="dropright dropdown" id="mainCategoryType">
                <a
                  data-toggle="dropdown disabled"
                  role="button" aria-haspopup="true"
                  aria-expanded="false">Schools
                  <span class="sr-only"></span></a>
                 <ul class="dropdown-menu example-list-edu" >
                  <?php include 'menu/menu_education_examples.php'; ?>
                 </ul>
            </li><br>
            <li class="dropright dropdown" id="mainCategoryType">
              <a
                data-toggle="dropdown disabled"
                role="button" aria-haspopup="true"
                aria-expanded="false">Organizations
                <span class="sr-only"></span></a>
               <ul class="dropdown-menu example-list-edu" >
                <?php include 'menu/menu_education_examples.php'; ?>
               </ul>
           </li><br>
          </ul>
        </li>


        <li class="nav-item dropdown" style="padding-left: 250px;">
        <form class="navbar-form navbar-left"  style="width: 400px;">
          <div class="input-group">
            <input type="text" class="form-control " placeholder="Search">
            <div class="input-group-btn">
            <button class="btn btn-danger" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form>
        </li>
   </ul>


   </div>
   </div>


<div>
<row>
<a data-toggle="modal" data-target="#exampleModal">
  <i class="fas fa-user-circle fa-3x"></i>
</a>
</row>

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
          >We will never share your email with anyone else.</small
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


</nav>

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

        <script src="scratch/scracth.js"></script>
</header>
<!--<li>
    <a href="#">GreatMoods<br>Mall Directory</a>
    <php include 'menu/menu_mall_directory_site.php'; ?>
</li> -->
