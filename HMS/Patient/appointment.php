<!DOCTYPE html>
<html lang="en">
<head>
      <title>Book appointment</title>
</head>
<body>
      <?php
         include("../include/header.php");
         include("../include/connection.php");
      ?>

      <div class="container-fluid">
            <div class="col-md-12">
                  <div class="row">
                        <div class="col-md-2" style="margin-left: -30px;">
                        <?php
                          include("sidenav.php");
                        ?>
                        </div>
                        <div class= "col-md-10">
                              <h5 class="text-center my-2"> Book appointment</h5>

                              <div class ="col-md-12">
                                    <div class="row">
                                          <div class="col-md-3">
                                          </div>
                                          <div class="col-md-6 jumbotron">
                                                <form method="post">
                                                      <label>Appointment date</label>
                                                      <input type="date" name="date" class="form-control">

                                                      <label>Symptoms</label>
                                                      <input type="text" name="sym" class="form-control" placeholder=" Write symptoms">
                                                      <input type="submit" name="book" class="btn btn-info my-2" value="Book appointment">
                                                </form>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</body>
</html>