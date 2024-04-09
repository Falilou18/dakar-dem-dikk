<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page d'acceuil</title>
    <link rel="stylesheet" href="../css/acceuil2.css" />
    <style>
      h4 {
        color: rgb(16, 52, 196);
        margin-top: 60px;
        text-transform: uppercase;
        padding: 16px 20px;
        text-align: center;
      }
      .sectionpremier {
        background: url(../images/hero.png) no-repeat 50% 50%; 
        background-size: cover;
        padding: 300px;
        /* margin-top: 10px; */
        max-height: 200px;
      }
    </style>
  </head>
  <body>
    <?php
            include './header.php';

    ?>

    <main>
      <section class="sectionpremier">
        <h1><span id="cible"></span></h1>
       
      </section>

      <section>
        <div class="container">
          <div class="card" style="--clr: #fd0">
            <div class="imgbox">
              <img src="../images/1.jpg" alt="image d'un bus" />
            </div>
            <div class="text">
              <h4>Bus 1</h4>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
              <a href="#">read more</a>
            </div>
          </div>

          <div class="card" style="--clr: #00f">
            <div class="imgbox">
              <img src="../images/4.jpg" alt="image d'un bus" />
            </div>
            <div class="text">
              <h4>Bus 1</h4>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
              <a href="#">read more</a>
            </div>
          </div>

          <div class="card" style="--clr: #f40">
            <div class="imgbox">
              <img src="../images/6.jpg" alt="image d'un bus" />
            </div>
            <div class="text">
              <h4>Bus 1</h4>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
              <a href="#">read more</a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php
        include_once './footer.php'

    ?>
    <script src="../Js/acceuil.js"></script>
  </body>
</html>
