
<?php
    
    session_start();

    require  'connection.php';
    
 
    include_once('index.php');


?>
                        
                <table class="table text-center clubhowa">
                    <thead class="thead-dark">
                    
                        <th scope="col">Club Logo</th>
                        <th scope="col">Club Name</th>
                        <th scope="col">Date de Création</th>
                        <th scope="col">Description</th>
                        <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        
                        $query ="SELECT * FROM club";
                        $query_run = mysqli_query($connection,$query);

                        if(mysqli_num_rows($query_run) > 0){
                        
                        
                        
                        
                      
                            foreach($query_run as $row){ ?>
                                
                                
                                <tr>
                                <td><?php echo $row['logo']  ?></td>
                                <td><?php echo $row['nom']  ?></td>
                                <td><?php echo $row['dateCreation']  ?></td>
                                <td><?php echo $row['description']  ?></td>
                                <td>
                                                    
                                     <a href="editClub.php?id=<?= $row['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                     <form action="indexClub.php" method="POST" class="d-inline">
                                     <button type="submit" name="delete_club" value="<?=$row['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                     </form>
                                </td>
                                

                                </tr>
                                
                                <?php
                                }
                        } 
                        ?>



                    </tbody>
                </table>
        







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


