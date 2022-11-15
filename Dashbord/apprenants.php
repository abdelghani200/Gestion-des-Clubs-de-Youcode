


<?php
 
 include_once('index.php');

 

?>


    <div class="container"  style="margin-top: 100px";>

    
        <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong> Yess
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> -->

         
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h4>Student Add 
                        <a href="indexApp.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="indexApp.php" method="POST"> 
                        <div class="mb-3">
                            <label>Apprenant FirstName</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Apprenant SecondName</label>
                            <input type="text" name="secondname" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Apprenant Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Apprenant Photo</label>
                            <!-- <img src="/images/youcode.jpg" name="photo"  class="form-control"> -->
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Choisir un club</label>
                            <select name="selectClub" class="form-control">
                                <option value="" name="selectClub">Club Art</option>
                                <option value="" name="selectClub">Club Sport</option>
                                <option value="" name="selectClub">Club chtih</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        <button type="submit" name="save-apprenant" class="btn btn-primary">Save Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


 </div> 
 
</body>
</html>