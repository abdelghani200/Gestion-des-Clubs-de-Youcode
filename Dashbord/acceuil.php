
<?php
    
    session_start();

    require  'connection.php';
    
 
    include_once('index.php');


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student CRUD</title>
</head>
<body>
        <div class="container cont-clb">

            <div class="card-group">
                   
                <?php

                    $query ="SELECT * FROM club";
                    $query_run = mysqli_query($connection,$query);

                    if(mysqli_num_rows($query_run) > 0){

                        foreach($query_run as $club){

                            ?>
                                <div class="card">
                                    <img src="<?= $club['logo']; ?>" class="card-img-top">
                                    <div class="card-body">
                                    <h5 class="card-title"><?= $club['nom']; ?></h5>
                                    <p class="card-text"><?= $club['description']; ?></p>
                                    </div>
                                    <div class="card-footer">
                                    <small class="text-muted"><?= $club['dateCreation']; ?></small>
                                    </div>
                                </div>
                            <?php
                        }    
                    }
                    else{
                        echo "hhhhhhhhhhhhhhhhhhhhhhhhh";
                    }    

                ?>

            </div>
            
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

