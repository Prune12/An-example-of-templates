<?php include 'sidebar.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>

<body style="background: url('images/hospital.png'); background-size: cover;">
    <div class="section1">
        <div id="salut"><span>Hi Prunelle ! <br> how are you today ?</span></div>
    </div>
    <div class="section2">
        <form class="d-flex mt-3 " role="search">
            <input class="form-control me-2" type="search" placeholder="RECHERCHER" id="search" name="search" aria-label="Search">
            <button class="btn btn-outline-primary bleu" type="submit">Search</button>

        </form>
        <!-- <div class="ic"><i class="fas fa-search"></i></div>
        <input type="search" placeholder="RECHERCHER" id="search" name="search"> -->
    </div>
    <div class="section3">
        <h2>Options</h2>
        <a href="consultation.php" class="padding"><img src="images/consulation.png" class="img" alt=""></a>
        <a href="ambulance.php" class="padding"><img src="images/ambulant.png" class="img" alt=""></a>
        <a href="prendreRDV.php" class="padding"><img src="images/prendrerdv.png" class="img" alt=""></a>
        <span class="namespan ecrit1">CONSULTATION</span>
        <span class="namespan ecrit2">DEMANDER UNE AMBULANCE</span>
        <span class="namespan ecrit3">PRENDRE RENDEZ-VOUS</span>
    </div>
    <div class="section4">
        <h2>Tops Doctors</h2>
        <div class="subsection1">
            <div class="imdiv "><a href="#"><img src="images/h.png" class="img" alt=""></a></div>
            <div class="subdiv">
                <h1 style="color: white;" class="ecrit">Dr JEAN LUIS BENAE</h1>
                <div class="chirurgien">
                    <span style="color: #FE66CA;">Neurochirurgien</span>
                </div>
            </div>

        </div>
        <div class="subsection2">
            <div class="imdiv "><a href="#"><img src="images/f.png" class="img" alt=""></a></div>
            <div class="subdiv">
                <h1 style="color: white;">Dr ILEANA</h1>
                <div class="chirurgien">
                    <span style="color: #FE66CA;">Orthopediste</span>
                </div>
            </div>

        </div>
    </div>
    <div class="container d-flex justify-content-center">

        <button type="button" class="btn btn-info btn-rounded col-2  text-nowrap blue"><a href="index.php" style="color: white;">BACK</a></button>

    </div>
</body>
<?php include "footer.php" ?>

</html>