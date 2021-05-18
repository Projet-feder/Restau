<?php
session_start();
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Css -->
     <link rel="stylesheet" href="style.css">
     <!-- Bootstrap -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="top">
           
        </div>
        <div class="content-holder">
                <div class="content-holder col-md-12 col-lg-12 col-sm-12">
                    <button type="button" class="btn btn-primary" id="btn" data-bs-toggle="modal" data-bs-target="#TableReservation">
                        Reservate a Table  
                    </button>
                </div>    
            
           
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="TableReservation" style="top:10% ; " data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Table Reservation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                                <div class="modal-body">
                                    <form action="../Database/table_reservation.php" method="post" role="form">
                                            <label for="date">Date</label>
                                            <input type="date" name="date" class="form-item" id="date" placeholder="Date">
                                            <label for="time">Comming Time</label>
                                            <input type="time" class="form-item" name="time" id="time"  placeholder="Coming Time">
                                            <label for="hours">Leaving Time</label>
                                            <input type="time" class="form-item" name="hours" id="Hours"  placeholder="leaving Time">
                                            <label for="people">People</label>
                                            <input type="number" class="form-item" name="people" id="people" placeholder="No. of people">
                                            
                                        <button type="submit" class="btn btn-success float-right mt-3" >Book a Table</button>
                                    </form>
                                
                            
                                </div>
                        </div>
                    </div>
    </div>
                
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>