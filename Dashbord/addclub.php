<?php
 
 include('index.php');
include('connection.php');
 

?>

<div class="container card-add">
 
    <div class="row">
            <div class="col-md-12">
                <div class="card-header text-h4">
                    <h4>Club Add 
                    </h4>
                </div>
                <div class="card-body">
                    <form action="indexClub.php" method="POST" enctype="multipart/form-data"> 
                    
                            <div class="mb-3">
                                <label class="text-label">Club Name</label>
                                <input type="text" name="ClubName" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="text-label">Club Description</label>
                                <textarea type="text" name="ClubDescription" class="form-control">
                                </textarea>
                            </div>
                            <div class="mb-3">
                                <label class="text-label">Date du creation</label>
                                <input type="date" name="date" class="form-control">
                            </div>

                            
                            <div class="mb-3">
                                <label class="text-label">Club Cover</label>
                                <!-- <img src="/images/youcode.jpg" name="photo"  class="form-control"> -->
                                <input type="file" name="clubcover" class="form-control">
                            </div>
                            <div class="mb-3">
                                 <button type="submit" name="club-add" class="btn btn-primary">Add Club</button>
                            </div>
                         
                    </form>
                </div>
            </div>
        </div>

                  
</div>



<?php
    include('footer.php');
?>
  