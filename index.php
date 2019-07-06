<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form Validation</title>



    <section class="form-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-5">
                    <form action="view.php" method="post">
                        <div class="form-group">
                            <input type="text" name="fname" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="error-msg text-danger py-2">
                            <?php
                                if(!empty($_GET['nam_err'])){
                                    echo $_GET['nam_err'];
                                }
                             ?>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="error-msg text-danger py-2">
                            <?php
                                if(!empty($_GET['eml_err'])){
                                    echo $_GET['eml_err'];
                                }
                             ?>
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass" class="form-control" placeholder="Enter pass">
                        </div>
                        <div class="error-msg text-danger py-2">
                            <?php
                                if(!empty($_GET['pass_err'])){
                                    echo $_GET['pass_err'];
                                }
                             ?>
                        </div>
                        <div class="form-group">
                            <input type="password" name="repass" class="form-control" placeholder="Enter repass">
                        </div>
                        <div class="error-msg text-danger py-2">
                            <?php
                                if(!empty($_GET['repass_err'])){
                                    echo $_GET['repass_err'];
                                }
                             ?>
                        </div>
                        <!-- <div class="form-group py-2">
                            <input type="email" name="email"  class="form-control" placeholder="Email">
                        </div> -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    </body>

</html>