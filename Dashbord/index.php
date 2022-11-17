

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">


</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span>YouCode</h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php" class="active"><span class="las la-igloo"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="acceuil.php"><span class="las la-users"></span>
                    <span>Accueil</span></a>
                </li>
                <li>
                    <a href="insertClub.php"><span class="las la-clipboard-list"></span>
                    <span>Clubs</span></a>
                </li>
                <li class="dash-nav-dropdown-menu">
                    <a href="apprenants.php"><span class="las la-users"></span>
                    <span>Apprenants</span>
                    </a>
                </li>
                
            </ul>
            
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for=""><span class="las la-bars"></span></label> Dashboard
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" name="" placeholder="Search here">
            </div>

            <div class="user-wrapper">
                <img src="images/gallery-03.jpg" width="40px" height="40px">
                <div>
                    <h4>Jelouani Abd</h4>
                    <small>Super admin</small>
                </div>
            </div>
        </header>

        

       
           