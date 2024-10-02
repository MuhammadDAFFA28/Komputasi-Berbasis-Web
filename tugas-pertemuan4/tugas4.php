<?php

?>

<!DOCTYPE html>
<html lang="em">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Document</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="fontawesome-free-6.6.0-web/css/all.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark justify-content">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>
        </nav>
        <nav class="navbar navbar-expand-sm bg-light justify-content-center">
            <h2>Biodata</h2>
        </nav>

        <div class="container">
            <div class="card mt-2">
                <div class="card-header">
                    <h3>PERSONAL DATA FORM</h3>
                </div>

                <form action="hasil.php" method="POST">
                    <div class="card-body"> 
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-5">
                                <input type="text" id="nama" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-5">
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Hobi" class="col-sm-2 col-form-label">Hobby</label>
                            <div class="col-sm-5">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Hobi" id="Hobi1" value="Sepak Bola" required>
                                    <label class="form-check-label" for="Hobi1">Football</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Hobi" id="Hobi2" value="Badminton">
                                    <label class="form-check-label" for="Hobi2">Badminton</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Hobi" id="Hobi3" value="Basket">
                                    <label class="form-check-label" for="Hobi3">Basketball</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="JenisKelamin" class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-5">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="JenisKelamin" id="Male" value="Male" required>
                                    <label class="form-check-label" for="Male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="JenisKelamin" id="Female" value="Female">
                                    <label class="form-check-label" for="Female">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dob" class="col-sm-2 col-form-label">Date Of Birth</label>
                            <div class="col-sm-5">
                                <input type="date" class="form-control" name="dob" id="dob" required>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer text-muted">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-warning float-right">Cancel</button>
                    </div>
                </form>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

        <script>
            $(function(){
                $("#dob").datepicker();
            });
        </script>
    </body>
</html>
