<!DOCTYPE html>
<html>
<head>
  <!--External Resources-->
  <script src="lib/jquery-3.1.1.min.js"></script>
  <script src="lib/materialize.min.js"></script>
  <link rel="stylesheet" href="lib/materialize.min.css">


  <!--Custom Resources-->
  <script src="assets/js/functions.js"></script>
  <link rel="stylesheet" href="assets/css/global.css">

</head>
<body>
  <div class="container">
    <?php
      //to redirect to a page, use href="index.php?page=NAME_OF_PAGE_WITHOUT_EXTENSION"
      if (isset($_GET["page"])) {
        $page = $_GET['page'];
      }
      if (!empty($page)) {
        $location = "pages/".$page.".html";
        include($location);
      }
      else {
        include("pages/home.html");
      }
    ?>
  </div>
</body>
</html>