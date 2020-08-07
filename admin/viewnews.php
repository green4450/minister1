<img src="./images/imgOneNew-nwq-two.png" class="img img-fluid m-2" style="width: 10%" alt="Minister Sir">
<div class="display-4 float-right font-weight-bold m-4">
समाचार
</div>

<?php include './includes/header.inc.php' ?>


<div class="m-4">
    <?php
        include '../src/dbh.php';
        $sql = "SELECT * FROM news ORDER BY id DESC;";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="card mt-2">
                <div class="card-body">
                    <img class="img w-25" src="../src/'.$row['image'].'" />
                    <h5 class="card-title">'.$row['title'].'</h5>
                    <h6 class="card-subtitle mb-2 text-muted">'.$row['date'].'</h6>
                    <p class="card-text">
                        '.$row['description'].'
                    </p>
                    <form method="POST">
                        <input type="hidden" name="id" value="'.$row['id'].'" />
                        <button type="submit" name="delBtn" class="btn btn-outline-danger btn-sm">Delete</button>
                    </form>
                </div>

            </div>        
            
            ';
        }

        if (isset($_POST['delBtn'])) {
            $id = mysqli_real_escape_string($conn, $_POST['id']);
            $sql = "DELETE FROM news WHERE id = '$id';";
            mysqli_query($conn, $sql);
            echo '<script>window.location="./news.php?delete=success"</script>';
        }
    
    ?>

    

</div>

