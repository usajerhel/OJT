<?php
 include "insert.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Website ni Ramos</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="./styles/style.css">

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
   <div class="bg-custom text-center py-2" id="bg-custom">
      <span class="text-light text-uppercase fw-bold">Personal Website for DOST Presentation</span>
   </div>
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
         <div class="collapse navbar-collapse">
            <div class="d-flex align-items-center mx-auto">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link fw-bold fs-4 text-center" aria-current="page" href="#">HOME</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link fw-bold fs-4 text-center" aria-current="page" href="./read.php">FORM</a> 
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </nav>
   <div id="about" class="bg-custom text-light">
    <div class="row py-3" style="height: 200px">
       <div class="col">
          <img src="./img/PROFILE.gif" class="mt-1 rounded-circle" alt="" height="365" width="450">
       </div>
       <div class="col text-start">
          <div class="fs-2 fw-bold mb-1">About Me!</div>
          <p class="fs-5">Hi Guys, welcome to my portfolio website. My name is Jerhel Ramos, I am 22 years old, I am currently living in Cagbang, Oton, Iloilo. I am a currently a student of University of San Agustin taking a degree of Bachelor of Science in Information Technology.  </p>
          <div class="fs-4 fw-bold ">My Motto</div>
          <p class="fs-5 fw-semibold"><i>It always seems impossible until it is done.</i></p>
       </div>
       <div class="col text-start fw-semibold">
          <p class="fs-4 fw-bold mb-1">My Assets</p>
          <p class="fs-5">No.1 Singing Voice HAHAHA</p>
          <img src="img/hi-hair-flip.gif" alt="a small singer hair flipping" height="120" width="120">
          <p class="fs-5">No.2 Eyes</p>
          <img src="img/flirty-eyes.gif" alt="a boy playing with his Eyes" height="120" width="120">
       </div>
    </div>
 </div>
   <div class="text-center" id="schools">
      <span class="text-custom fs-4 fw-bold px-3">EDUCATIONAL BACKGROUND</span>
      <div class="mt-4">
         <div class="container">
            <div id="icons" class="row text-brown">
               <div class="col">
                  <img src="./img/ICES.png" alt="">
                  <div class="text-start text-center">
                     <div class="fw-bold mt-2">Iloilo Central Elementary School</div>
                     <span class="text-uppercase fw-semibold">Primary</span>
                     <p><i>2007 - 2013</i></p>
                  </div>
               </div>
               <div class="col">
                  <img src="./img/MANDU.png" alt="">
                  <div class="text-start text-center">
                     <div class="fw-bold mt-2">Mandurriao National High School</div>
                     <span class="text-uppercase fw-semibold">Secondary</span>
                     <p><i>2012 - 2016</i></p>
                  </div>
               </div>
               <div class="col">
                  <img src="./img/MANDU.png" alt="">
                  <div class="text-start text-center">
                     <div class="fw-bold mt-2">Mandurriao National High School</div>
                     <span= class="fw-semibold text-uppercase">SENIOR HIGH</span=>
                     <div>Academic Track – General Academic Strand (GAS)</div>
                     <p><i>2016 - 2018</i></p>
                  </div>
               </div>
               <div class="col">
                  <img src="./img/UniversityofSanAgustin-150px.png" alt="">
                  <div class="text-start text-center">
                     <div class="fw-bold mt-2">University of San Agustin</div>
                    <span class="fw-semibold text-uppercase">Tertiary</span>
                    <div>Bachelor of Science in Information Technology</div>
                    <p><i>2019 - PRESENT</i></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="african-superfoods" class="bg-custom text-light">
         <div class="row py-5" style="height:400px">
            <div class="col-3">
               <img src="./img/valorant.gif" class= alt="" height="300" width="300" "padding-left -5">
            </div>
            <div class="col-3 text-start">
               <div class="fs-4 fw-bold mb-3">Playing Games</div>
               <p>I like to play games to because I can relieve stress from studies and stress around you. 
                  It gives me comfort and also give me some random friend that you can talk and play with.</p>
               <!--img src ="img/rage.gif" alt="a man playing computer" height="150" width="300"-->
            </div>
            <div class="col-3 text-start">
               <img src="./img/tybw-yamamoto.gif" class= alt="" height="300" width="300" "padding-left -5">
            </div>
            <div class="col-3 text-start">
               <div class="fs-4 fw-bold mb-3">Watching Anime</div>
               <p>I like to watch anime because I love Japan. Anime give you different plot everytime and it has a cool cgi for every anime that could get your attention. 
                  It is also my stress reliever because it give my mind peace and clear my thoughts about bad things that happened today, tomorrow or yesterday.</p>
               <img src="img/watching anime.gif" alt="watching anime on tv" width="250" height="110">
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid text-white" id="coloring">
      <h1>Contact Me uwu</h1>
      <form action="insert.php" method ="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label> Email address </label>  
                                    <input type="email" class="form-control" name = "email" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="form-group mb-3">
                                    <label> Name </label>
                                    <input type="form-text" name = "name" class="form-control" id="name">
                                </div>
                                <div class="form-group mb-3">
                                    <label> Comment</label>
                                    <textarea type="form-text" name = "comment" class="form-control" id="comment"> </textarea>
                                </div>
                            </div>
            <!--<button type="button" name="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#feedback"  style= "margin-bottom: 10px">
               Submit
            </button> -->
                    <button type="submit" name="submit" class="btn btn-primary my-1">Submit</button>
            </form>
    </div>
  </div>
</div>
            <!--<div class = "card-body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#commentaddmodal"> COMMENT</button>
            </div> -->
</div>
<div class="modal fade" id="feedback" tabindex="-1" aria-labelledby="feedbackLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title fs-5" id="feedbackLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  ...
               </div>
               <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
         </div>
    </div>
   </div>
   <script src="./scripts/script.js"></script>
</body>
</html>
