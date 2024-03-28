<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'acceuil</title>
    <link rel="stylesheet" href="acceuil2.css">

</head>
<body>
    <?php
            include './header.php';

    ?>

    <main>
        <section class="sectionpremier">

       <h1><pre>Je suis un <span id="cible"></span> </pre></h1>


            
        </section>

        <section>
            <div class="container">
                <div class="card" style="--clr:#fd0">
                    <div class="imgbox">
                        <img src="./images/1.jpg" alt="image d'un bus">
                    </div>
                    <div class="text">
                        <h4>Bus 1</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="#">read more</a>
                    </div>
                </div>
             
                <div class="card" style="--clr:#00f">
                    <div class="imgbox">
                        <img src="./images/4.jpg" alt="image d'un bus">
                    </div>
                    <div class="text">
                        <h4>Bus 1</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="#">read more</a>
                    </div>
                </div>
             
                <div class="card" style="--clr:#f40">
                    <div class="imgbox">
                        <img src="./images/6.jpg" alt="image d'un bus">
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
    <script src="./acceuil.js"></script>
</body>
</html>