<?php
require_once __DIR__ . "/data.php";
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>

  <header class="bg-card container-fluid">
    <img src="img/spotify-logo.png" alt="logo">
  </header>

  <main class="bg-main py-5">
    <div class="container">
      <div class="row row-cols-5 g-4">
        <?php
        foreach ($cdList as $cd) {

          $poster = $cd["poster"];
          $title = $cd["title"];
          $author = $cd["author"];
          $year = $cd["year"];

          echo "<div class='col'>
                  <div class='my-card bg-card card border-0 p-3 rounded-0'>
                    <img src='$poster' class='card-img-top rounded-0' alt='$title'/>
                    <div class='card-body text-center'>
                      <h5 class='text-white m-0 pb-3'>$title</h5>
                      <h6 class='text-secondary m-0'>$author</h6>
                      <p class='text-secondary m-0'>$year</p>
                    </div>
                  </div>
                </div>";
        }
        ?>
      </div>
    </div>
  </main>
</body>

</html>