<!-- <!DOCTYPE html> -->
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Online | Shopping</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="../dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />

    
    <style>
      body {
        font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-weight: 500;
      }
      .content-wrapper {
        padding: 0 10px;
        font-size: 14px;
      }
      .page-header {
        border: 0;        
        margin: 0 0 20px 0;
        padding: 0;
        position: relative;
        z-index: 1;
        font-size: 30px;
      }
      section[id] {
        padding: 20px 0 0 0;
      }
      #components > h3 {
        font-size: 25px;
        border-bottom: 1px solid #dedede;
        color: #000;
      }
      #components > h4 {
        font-size: 20px;
        color: #000;
      }
      .page-header span {
        z-index: 5;
        display: inline-block;
        background-color: #ecf0f5;
        padding-right: 10px;
      }
      .page-header::before {
        content: " ";
        display: block;
        background: #ccc;
        width: 100%;
        height: 1px;
        position: absolute;
        top: 50%;
        margin-top: 2px;
        z-index: -1;
      }
      .lead {
        font-size: 16px;
        font-weight: 400;
      }
      .eg{
        position: absolute;
        top: 0;
        left: 0;
        display: inline-block;
        background: #d2d6de;
        padding: 5px;
        border-bottom-right-radius: 3px;
        border-top-left-radius: 3px;
        border-bottom: 1px solid #d2d6dc;
        border-right: 1px solid #d2d6dc;
      }
      .eg + * {
        margin-top: 30px;
      }
      .content {
        padding: 10px 25px;
      }
      .hierarchy {
        background: #333;
        color: #fff;
      }
      .plugins-list li {
        width: 50%;
        float: left;
      }
      pre {
        border: none;
      }
      /* desert scheme ported from vim to google prettify */
      pre.prettyprint {display: block; background-color: #333; max-height: 300px; border: none!important; margin-bottom: 20px;}
      pre .nocode { background-color: none; color: #000 }
      pre .str { color: #ffa0a0;} /* string  - pink */
      pre .kwd { color: #f0e68c; font-weight: bold }
      pre .com { color: #87ceeb } /* comment - skyblue */
      pre .typ { color: #98fb98 } /* type    - lightgreen */
      pre .lit { color: #cd5c5c } /* literal - darkred */
      pre .pun { color: #fff }    /* punctuation */
      pre .pln { color: #fff }    /* plaintext */
      pre .tag { color: #f0e68c; font-weight: bold } /* html/xml tag    - lightyellow */
      pre .atn { color: #bdb76b; font-weight: bold } /* attribute name  - khaki */
      pre .atv { color: #ffa0a0 } /* attribute value - pink */
      pre .dec { color: #98fb98 } /* decimal         - lightgreen */

      /* Specify class=linenums on a pre to get line numbering */
      ol.linenums { margin-top: 0; margin-bottom: 0; color: #AEAEAE } /* IE indents via margin-left */
      li.L0,li.L1,li.L2,li.L3,li.L5,li.L6,li.L7,li.L8 { list-style-type: none }
      /* Alternate shading for lines */
      li.L1,li.L3,li.L5,li.L7,li.L9 { }

      @media print {
        pre.prettyprint { background-color: none }
        pre .str, code .str { color: #060 }
        pre .kwd, code .kwd { color: #006; font-weight: bold }
        pre .com, code .com { color: #600; font-style: italic }
        pre .typ, code .typ { color: #404; font-weight: bold }
        pre .lit, code .lit { color: #044 }
        pre .pun, code .pun { color: #440 }
        pre .pln, code .pln { color: #000 }
        pre .tag, code .tag { color: #006; font-weight: bold }
        pre .atn, code .atn { color: #404 }
        pre .atv, code .atv { color: #060 }
      }
      .sidebar {
        margin-top: 0;
        padding-top: 0!important;
      }
      .box .main-header {
        z-index: 1000;
        position: relative;
      }
      .treeview .nav li a:hover,
      .treeview .nav li a:active {
        background: transparent;
      }
    </style>
  </head>
  <body class="skin-blue fixed" data-spy="scroll" data-target="#scrollspy">
    <div >

      <header class="main-header">
        <!-- Logo -->
        <a href="../index2.html" class="logo"><b>Admin</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <!-- <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li><a href="http://almsaeedstudio.com">Almsaeed Studio</a></li>
            </ul>
          </div> -->
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <!-- <section class="sidebar" id="scrollspy"> -->

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="nav sidebar-menu">
            <li class="header">TABLE OF CONTENTS</li>
            <li class='active'><a href="/adminhome"><i class='fa fa-circle-o'></i> HOME</a></li>
            <li><a href="/addabout"><i class='fa fa-circle-o'></i> ADD ABOUT</a></li>
            <li><a href="/vabout"><i class='fa fa-circle-o'></i> VIEW ABOUT</a></li>
            <li><a href="/appproduct"><i class='fa fa-circle-o'></i> VIEW PRODUCTS</a></li>
            <li><a href="/addcontact"><i class='fa fa-circle-o'></i> ADD CONTACT</a></li>
            <!-- <li><a href="/addshops"><i class='fa fa-circle-o'></i> ADD SHOPS</a></li> -->
            <li><a href="/vmanagers"><i class='fa fa-circle-o'></i> VIEW MANAGERS </a></li>
            <li><a href="/viewusers"><i class='fa fa-circle-o'></i>CUSTOMERS</a></li>
            <li><a href="/logout"><i class='fa fa-circle-o'></i> LOGOUT</a></li>
            <!-- <li><a href="#license"><i class='fa fa-circle-o'></i> License</a></li> --> 
          </ul>
        <!-- </section> -->
        <!-- /.sidebar -->
      </aside>
@yield('main-body')

<!-- <footer class="main-footer container" style="padding-left:30px; padding-right:20%">
        <div class="pull-right hidden-xs">
        </div>
        <strong>Copyright &copy; 2021</strong> All rights reserved.
      </footer> -->

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    <script>
      $(function () {
        $(".sidebar-menu li a").click(function () {
          var $this = $(this);
          var target = $this.attr("href");
          if (typeof target === 'string') {
            $("body").animate({
              scrollTop: ($(target).offset().top - 32) + "px"
            }, 500);
          }
        });

      });
    </script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>


    