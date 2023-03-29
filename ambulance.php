<?php include 'sidebar.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ambulance</title>
</head>

<body style="background: url('images/ambulant.png'); background-size: cover; margin:0;padding:0;">
   <style>
       .milieu{
        position: absolute;
        left: 50%;
            top:150px;
            transform: translate(-50%);
       }
       .form-control{
        margin-bottom: 30px;
        height: 50PX;
        
       }
       h2{
         position: absolute;
        left: 50%;
            top:20px;
            transform: translate(-50%);
            color: #fff;
       }
    
    .form-control{
        margin-top: 10px;
        padding: 10px;
        padding-left: 25px;
    }
    .col{
        transform: translateY(-100px);
    }
    .btn14{
        margin-top: 15px;
        min-width: 300px;
    }
    .fas{
        transform: translateY(50px);
        z-index: -10;
    }
     input{
        min-width: 300px;
    }
    .form2{
        position: absolute;
        top: -50px;
       left: 50%;
        transform: translate(-50%,100px);
    }
</style>
   </style>
             <h2>DEMANDE <BR> AMBULANCE</h2>

              <div class="milieu">

            <div class="">
                  
                <form action="#" method="">
                    

                    <div class="row g-3 align-items-center">
                       
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="form-inline">
                            <div class="row">
                                <i class="fas fa-user-alt"></i>
                                <input type="text" id="formTextExample2" class="form-control" aria-describedby="textExample2" placeholder="FIND Location" name="med" />
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="form-inline">
                            <div class="row">
                                <i class="fas fa-user-alt"></i>
                                <input type="text" id="formTextExample2" class="form-control" aria-describedby="textExample2" placeholder="Phone Number"  name="num"/>
                            </div>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="form-inline">
                            <div class="row">
                                <i class="fas fa-user-alt"></i>
                                <input type="text" id="formTextExample2" class="form-control" aria-describedby="textExample2" placeholder="Pattern" / name="local">
                            </div>
                        </div>
                    </div>
                    
                    <button class="btn btn-primary button11 btn14" type="submit" name="ajout">SEND</button>
                </form>
                

               
        </div>
</div>
<div class="container d-flex justify-content-center">

        <button type="button" class="btn btn-info btn-rounded col-2  text-nowrap blue"><a href="home.php" style="color: white;">BACK</a></button>

    </div>
</body>
<?php include "footer.php" ?>

</html>