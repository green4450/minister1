<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Awards</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>

    <!-- Image and text -->
    <nav class="photoNavDiv">
        <div class="container-fluid">
          <div class="navBks">
          <div class="col-md-6 col-xs-8 hdrNm">
            <a class="navbar-brand" href="#">
                Dr. Ramesh Pokhriyal 'Nishank'
            </a>
            </div>
            <div class="col-md-6 col-xs-4 hdrNmBck">
            <span class="navbar-text">
                <a href="index.php">Back</a>
            </span>
          </div>
          </div>
        </div>
        
    </nav>
<main class="main-content">
  <div class="container-fluid">
    <div class="_mainBooksDiv">
      
    <?php
            include './src/dbh.php';
            $sql = "SELECT * FROM awards ORDER BY date(date)DESC;";
                $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $description = substr($row['description'],0,50);
                echo '
                <div class="col-md-4 col-sm-6 col-xs-12 bookDv">
                  <div class="booksDvIn">
                    <a href="'.$row['link'].'">
                    <div class="_bksImg"><img src="./src/'.$row['picture'].'"></div>
                    <div class="_bksCntDiv">
                      <h2>'.$row['title'].'</h2>
                      <p>'.$description.'</p>
                    </div>
                    </a>
                  </div>
                </div>
                ';                          
            }
        ?>
    
      
    </div>
  </div>
</main>
  </body>
</html>