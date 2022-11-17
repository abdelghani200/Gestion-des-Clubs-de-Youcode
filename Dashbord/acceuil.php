
<?php
    
    session_start();

    require  'connection.php';
    
 
    include_once('index.php');


?>
             <center><h1 class="title-acceuil">You<span id="code">Code</span> Clubs</h1></center>
    <div class="howa">
             
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

                                <button type="button" class="btn btn-outline-primary">Decouvrire Les membres</button>
                            </div>
                        <?php
                    }    
                }
                else{
                    echo "hhhhhhhhhhhhhhhhhhhhhhhhh";
                }  
                 

            ?>  
        </div>           
                  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


