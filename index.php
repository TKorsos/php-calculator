<?php

session_start();

if (!isset($_SESSION['results'])){
  $_SESSION["results"] = "";
}

?><!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <title>PHP gyakorlás</title>
</head>

<body>
  <main class="container py-5">
    <section class="row row-cols-1">
      <article class="col">
        <?php

        // Számológép

        print '<form method="post" class="container py-5">
          <div class="row row-cols-4">
            <button type="submit" class="btn btn-secondary border-dark"></button>
            <button type="submit" class="btn btn-secondary border-dark" name="(">(</button>
            <button type="submit" class="btn btn-secondary border-dark" name=")">)</button>
            <button type="submit" class="btn btn-secondary border-dark"></button>
          </div>
          <div class="row row-cols-4">
            <button type="submit" class="btn btn-secondary border-dark" name="7">7</button>
            <button type="submit" class="btn btn-secondary border-dark" name="8">8</button>
            <button type="submit" class="btn btn-secondary border-dark" name="9">9</button>
            <button type="submit" class="btn btn-secondary border-dark" name="/">/</button>
          </div>
          <div class="row row-cols-4">
            <button type="submit" class="btn btn-secondary border-dark" name="4">4</button>
            <button type="submit" class="btn btn-secondary border-dark" name="5">5</button>
            <button type="submit" class="btn btn-secondary border-dark" name="6">6</button>
            <button type="submit" class="btn btn-secondary border-dark" name="*">*</button>
          </div>
          <div class="row row-cols-4">
            <button type="submit" class="btn btn-secondary border-dark" name="1">1</button>
            <button type="submit" class="btn btn-secondary border-dark" name="2">2</button>
            <button type="submit" class="btn btn-secondary border-dark" name="3">3</button>
            <button type="submit" class="btn btn-secondary border-dark" name="-">-</button>
          </div>
          <div class="row row-cols-4">
            <button type="submit" class="btn btn-secondary border-dark" name="C">C</button>
            <button type="submit" class="btn btn-secondary border-dark" name="0">0</button>
            <button type="submit" class="btn btn-secondary border-dark" name="=">=</button>
            <button type="submit" class="btn btn-secondary border-dark" name="+">+</button>
          </div>
        </form>';

        $display = $_SESSION["results"];

        if(isset($_POST["C"])) {
          $_SESSION["results"] = "";
          header("location: index.php");
        }

        if(isset($_POST["1"])) {
          $_SESSION["results"].="1";
          header("location: index.php");
        }

        if(isset($_POST["2"])) {
          $_SESSION["results"].="2";
          header("location: index.php");
        }

        if(isset($_POST["3"])) {
          $_SESSION["results"].="3";
          header("location: index.php");
        }

        if(isset($_POST["4"])) {
          $_SESSION["results"].="4";
          header("location: index.php");
        }

        if(isset($_POST["5"])) {
          $_SESSION["results"].="5";
          header("location: index.php");
        }

        if(isset($_POST["6"])) {
          $_SESSION["results"].="6";
          header("location: index.php");
        }

        if(isset($_POST["7"])) {
          $_SESSION["results"].="7";
          header("location: index.php");
        }

        if(isset($_POST["8"])) {
          $_SESSION["results"].="8";
          header("location: index.php");
        }

        if(isset($_POST["9"])) {
          $_SESSION["results"].="9";
          header("location: index.php");
        }

        if(isset($_POST["0"])) {
          $_SESSION["results"].="0";
          header("location: index.php");
        }

        if(isset($_POST["+"])) {
          $_SESSION["results"].="+";
          header("location: index.php");
        }

        if(isset($_POST["-"])) {
          $_SESSION["results"].="-";
          header("location: index.php");
        }

        if(isset($_POST["*"])) {
          $_SESSION["results"].="*";
          header("location: index.php");
        }

        if(isset($_POST["/"])) {
          $_SESSION["results"].="/";
          header("location: index.php");
        }

        if(isset($_POST["("])) {
          $_SESSION["results"].="(";
          header("location: index.php");
        }

        if(isset($_POST[")"])) {
          $_SESSION["results"].=")";
          header("location: index.php");
        }

        if(isset($_POST["="])) {
          $eredmeny = eval('return '.$display.';');
          $display = $eredmeny;
        }
        
        print $display;

        ?>
      </article>
    </section>
  </main>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js" integrity="sha512-9GacT4119eY3AcosfWtHMsT5JyZudrexyEVzTBWV3viP/YfB9e2pEy3N7WXL3SV6ASXpTU0vzzSxsbfsuUH4sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>