<<<<<<< HEAD
<?php include './crud/update.php';?>
=======
>>>>>>> f038fd7066f5aae4de8d5aa7d3f6989629e8fe68
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="./styles/style.css">
   <script src="./scripts/scripts.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
<<<<<<< HEAD
<div class="container-fluid text-black">
      <div class= "text-center"><h1>UPDATE</h1></div> 
=======
<div class="container-fluid text-white">
      <h1>Contact Me</h1>
>>>>>>> f038fd7066f5aae4de8d5aa7d3f6989629e8fe68
      <form action="./crud/update.php" method="POST">
         <div class="modal-body">
            <div class="form-group">
               <label> Email address </label>
               <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="<?=$row['email']?>">
               <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</div>
            </div>
            <div class="form-group mb-3">
               <label> Name </label>
<<<<<<< HEAD
               <input type="form-text" name="name" class="form-control" id="name" value="<?=$row['name']?>">
            </div>
         </div>
         <button type="submit" name="update" class="btn btn-primary my-1">Update</button>
=======
               <input type="form-text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group mb-3">
               <label> Comment</label>
               <textarea type="form-text" name="comment" class="form-control" id="comment"> </textarea>
            </div>
         </div>
         <button type="submit" class="btn btn-primary my-1">Submit</button>
>>>>>>> f038fd7066f5aae4de8d5aa7d3f6989629e8fe68
      </form>
   </div>
   