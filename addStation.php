<?php
include 'database/init.php';
protect_page();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <<div class="col-lg-2 d-flex"></div>
            <div class="col-lg-7">
            <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Add a Station!</h1>
                </div>
                <form class="user" id="form" action="Manage_Station/addStationQuery.php" method="POST">


                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="StationID" placeholder="Station Id">
                  </div>
                  
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="StationName" placeholder="Station Name">
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="StationCity" placeholder="Station City">
                  </div>

                  <!-- For image  

                  <div class="form-group">
                    <input type="image" class="form-control form-control-user" id="StationPicture" placeholder="Station City">
                  </div>

                  -->



                  <a href="#" class="btn btn-primary btn-user btn-block" onclick="document.getElementById('form').submit();">
                    Add New Station
                  </a>
                </form>
              </div>
            </div>
        </div>
      </div>
    </div>

  </div>


  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>