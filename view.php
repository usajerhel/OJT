<?php include "update.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card text-bg-dark mb-3">
                <div class="card-header bg-transparent border-light">
                    <h2 class="text-white">Details
                        <a href="read.php" class="btn btn-danger float-end">BACK</a>
                    </h2>
                </div>
                <div class="card-body">
                    <div class="row mb-5">
                        <label class="col-sm-2 col-form-label text-white">Name</label>
                        <div class="col-sm-10">
                            <p class="form-control">
                                <?=$row['name'];?>
                            </p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label text-white">Email Address</label>
                        <div class="col-sm-10">
                            <p class="form-control">
                                <?=$row['email'];?>
                            </p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label text-white">Message</label>
                        <div class="col-sm-10">
                        <p class="form-control">
                            <?=$row['comment'];?>
                        </p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                
        

</body>
</html>