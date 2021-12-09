<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Könyvek</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body class="bg-secondary">
<div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Főoldal</a></li>
                <li class="nav-item"><a href="index.php?program=kiadok.php" class="nav-link">Kiadók</a></li>
                <li class="nav-item"><a href="index.php?program=konyvek.php" class="nav-link">Könyv leírás</a></li>
                <li class="nav-item"><a href="index.php?program=filter.php" class="nav-link">Szűrés</a></li>
                <li class="nav-item"><a href="index.php?program=delete.php" class="nav-link">Delete</a></li>
                <li class="nav-item"><a href="index.php?program=update.php" class="nav-link">Update</a></li>
                <li class="nav-item"><a href="index.php?program=insert.php" class="nav-link">Insert</a></li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <?php 
            if(isset($_GET["program"]))
                include $_GET["program"];
            else
                include "fooldal.php";    
        
        ?>
    </div>
    <script>
        for(let obj of document.links)
            if(obj.href== document.URL)
                obj.style.color = "lightblue"

    </script>
</body>
</html>