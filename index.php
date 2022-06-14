<!DOCTYPE html>
<html>
<head>
  <title>Simple pay</title>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body class="container">
                  <form method="post" action="stk_initiate.php">
                              
                  <div class="alert alert-success" role="alert">
                      <h1>Simple Pay System</h1>
                      <h4>Note: Any amount sent goes to Safaricom's Safaricom sandbox Paybill number and is subject to reversal after 24hours</h4>
                  </div>  


                    <?php $message=""; ?>
                    <?php 
                        if(isset($_SESSION['flash_message'])) {
                          $message = $_SESSION['flash_message'];
                          unset($_SESSION['flash_message']);
                          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Message: </strong>'. $message .' <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>';
                        }
                    ?>
                <div class="form-group">
                  <label for="amount">Amount</label>
                  <input type="number" name="amount" class="form-control" id="amount" required="">
                  
                </div>
                <div class="form-group">
                  <label for="MobileNumber">Mobile Number</label>
                   <small id="mobilenumber" class="form-text text-muted">Enter mobile number in the format: 254XXXXXXXXX</small>
                  <input type="text" name="mobilenumber" class="form-control" id="mobilenumber" required="">
                 
                </div>
                <input type="submit" class="btn btn-success btn-block" name="submit" value="Pay">
              </form>

               <small id="amount" class="form-text text-muted">Developed by _s0s</small>


 <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->

</body>
</html>