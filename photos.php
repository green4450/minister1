<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Photos</title>
     <link rel="stylesheet" href="photo-include/css/bootstrap.min.css">
    <link rel="stylesheet" href="photo-include/css/magnific-popup.css">
    <link rel="stylesheet" href="photo-include/css/aos.css">
    <link rel="stylesheet" href="photo-include/css/jquery.scrollbar.css">
    <link rel="stylesheet" href="photo-include/css/fancybox.min.css">
    <link rel="stylesheet" href="photo-include/css/style.css">
  </head>
  <body>

    <!-- Image and text -->
    <nav class="photoNavDiv">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                Dr. Ramesh Pokhriyal 'Nishank'
            </a>
            <span class="navbar-text">
                <a href="index.php">Back</a>
            </span>
        </div>
        
    </nav>

<main class="main-content">
    <div class="container-fluid photos">
      <div class="row align-items-stretch">
      <?php
            include './src/dbh.php';
            $sql = "SELECT * FROM photos ORDER BY id DESC;";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
                <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
                  <a href="./src/'.$row['photo'].'" class="d-block photo-item" data-fancybox="gallery">
                    <img src="./src/'.$row['photo'].'" alt="Image" class="img-fluid">
                    <div class="photo-text-more">
                      <span class="icon icon-search">'.$row['title'].'</span>
                    </div>
                  </a>
                </div>
                ';                          
            }
        ?>
        

        

      </div>
    </div>
  </main>
 <script src="photo-include/js/jquery-3.3.1.min.js"></script>
 <script src="photo-include/js/jquery.magnific-popup.min.js"></script>
 <script src="photo-include/js/aos.js"></script>
 <script src="photo-include/js/jquery.fancybox.min.js"></script>
  <script src="photo-include/js/jquery.scrollbar.js"></script>
  <script src="photo-include/js/main.js"></script>
  </body>
</html>