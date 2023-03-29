<?php include "sidebar2.php"
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consultation</title>
</head>

<body>
    <div class="section1">
        <div id="salut"><span style="margin-top: 5px; font-size:25px">
                <div><a href="#"><img src="images/f.png" class="img" alt=""></a></div>Dr ILEANA
            </span></div>
    </div>
    <!-- <div class="section4">
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
    </div> -->

    <div class="container d-flex justify-content-center" style="background-color: #34e452; border-radius:20px;">
        <div class="card mt-5 p-3" style="background-color: #34e452;">
            <div class="media">
                <img src="images/f.png" class="mr-3">
                <div class="media-body">
                    <h3 class="mt-2 mb-0">hello! this is Dr ileana how can i help you?</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center" style="background-color: white; border-radius:20px;">
        <div class="card mt-5 p-3" style="background-color: white;">
            <div class="media">
                <img src="images/pic.png" class="mr-3">
                <div class="media-body">
                    <h3 class="mt-2 mb-0">Hello Dr. I have some issues with my skin it is itching</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center" style="background-color: #34e452; border-radius:20px;">
        <div class="card mt-5 p-3" style="background-color: #34e452;">
            <div class="media">
                <img src="images/f.png" class="mr-3">
                <div class="media-body">
                    <h3 class="mt-2 mb-0">It’s a severe form of rash take hydrocortisone cream 1%</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center" style="background-color: white; border-radius:20px;">
        <div class="card mt-5 p-3" style="background-color: white;">
            <div class="media">
                <img src="images/pic.png" class="mr-3">
                <div class="media-body">
                    <h3 class="mt-2 mb-0">Ok thanks Dr !!</h3>
                </div>
            </div>
        </div>
    </div>
    <form>
        <div class="form-group container d-flex justify-content-around">
            <input type="text" class="form-control" id="nom" placeholder="entrer votre message" required style="width: 500px; height:100px">
        </div>

        <!-- <button class="btn " type="submit">Send</button> -->
    </form>
    <div class="container d-flex justify-content-center">

        <button type="submit" class="btn btn-info btn-rounded col-2  text-nowrap blue">Send</button>

    </div>
    <div class="container d-flex justify-content-center">

        <button type="button" class="btn btn-info btn-rounded col-2  text-nowrap blue"><a href="home.php" style="color: white;">BACK</a></button>

    </div>
</body>
<?php include "footer.php" ?>

</html>