<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap 5  css link  -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- font awesome link.... -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Student Mangement System</title>
</head>

<body>

  <!-- Navbar using bootstrap 5 -->

  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SMS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdownimg.png" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>

        </ul>

      </div>
    </div>
  </nav>
  <div class="py-5 shadow" style="background:linear-gradient(-55deg, #8678ce 50%, transparent 50%)">
    <div class="container-fluid ">
      <div class="row">
        <div class="col-lg-6 my-auto">
          <h1 class="display-3 fw-bold">Student Management System</h1>
          <p>Here we will manage Students informations, their attendence, grade and assessment,their timetable and everything related to students.
            And there I will add pages related to their parents and teachers by that they can also view and disscussed
            students needs and problems.
          </p>
          <button Class="btn  btn-primary">Call to Action</button>
        </div>
        <div class="col-lg-6">
          <div class="w-50 mx-auto card shadow-lg ">
            <div class="card-body ">
              <h3 class="text-center">Admission Form</h3>
              <form action="" method="post" class="">

                <div class="md-form">
                  <label for="form1">Your Name</label>
                  <input type="text" id="form1" class="form-control outline-0">

                </div>

                <div class="md-form my-2">
                  <label for="email">Your Email</label>
                  <input type="email" id="email" class="form-control">

                </div>
                <div class="md-form">
                  <label for="mobile">Your Mobile</label>
                  <input type="text" id="mobile" class="form-control">

                </div>

                <div class="md-form">
                  <label for="message">Your Query</label>
                  <textarea name="" id="message" class="form-control md-textarea" rows="3"></textarea>

                </div>
                <div class="d-grid gap-2">


                  <button class="btn btn-block btn-primary mt-3 ">Submit Form</button>

                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About us.... -->
  <section class="py-5">
   <div class="container">
   <div class="row">
      <div class="col-lg-6 col-md-12">
        <h2>About<br> School Management System</h2>
        <div>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam accusamus porro ducimus ea culpa dolore soluta necessitatibus accusantium 
            perferendis, totam perspiciatis officia omnis laudantium minus ipsum fugiat esse distinctio libero reprehenderit consequuntur quos. Ullam, temporibus,
             mollitia voluptas necessitatibus sapiente voluptate accusamus cumque corrupti vel quam molestias totam aperiam vero provident.</p>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam accusamus porro ducimus ea culpa dolore soluta necessitatibus accusantium 
            perferendis, totam perspiciatis officia omnis laudantium minus ipsum fugiat esse distinctio libero reprehenderit consequuntur quos. Ullam, temporibus,
             mollitia voluptas necessitatibus sapiente voluptate accusamus cumque corrupti vel quam molestias totam aperiam vero provident.</p>
             
        </div>
        <div>
      </div>
      </div>
      <!-- <div class="col-lg-6 col-md-12 " style="background-image: url(Images/img_lights.jpg); background-repeat:no-repeat">dghj</div> -->
      <div class="col-lg-6 p-5">
        <img src="Images/img_lights.jpg" alt="">
      </div>
    </div>
   </div>
  </section>
  <!-- Making a section related to our course -->
  <section>
    <div class="py-5">
      <div>
        <h2 class="text-center mb-5">Our Cources</h2>
      </div>
      <div class="container ">
        <div class="row ">
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <img src="img.png" alt="" class="rounded-top">
              <div class="card-body">
                <b>Java Programming</b>
                <p class="card-text">
                  <b>Duration:</b>30 hours </br>
                  <b>Price:</b> 4000/. Rs
                </p>
                <div class="d-grid ">
                  <button class="btn btn-primary btn-sm">Enroll Now</button>
                </div>
              </div>
            </div>


          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <img src="img.png" alt="" class="rounded-top">
              <div class="card-body">
                <b>C++ Programing</b>
                <p class="card-text">
                  <b>Duration:</b>35 hours </br>
                  <b>Price:</b> 3500/. Rs
                </p>
                <div class="d-grid ">
                  <button class="btn btn-primary btn-sm">Enroll Now</button>
                </div>
              </div>
            </div>


          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <img src="img.png" alt="" class="rounded-top">
              <div class="card-body">
                <b>Machine Learning</b>
                <p class="card-text">
                  <b>Duration:</b>40 hours </br>
                  <b>Price:</b> 4800/. Rs
                </p>
                <div class="d-grid ">
                  <button class="btn btn-primary btn-sm">Enroll Now</button>
                </div>
              </div>
            </div>


          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <img src="img.png" alt="" class="rounded-top">
              <div class="card-body">
                <b>Web Development</b>
                <p class="card-text">
                  <b>Duration:</b>50 hours </br>
                  <b>Price:</b> 4500/. Rs
                </p>
                <div class="d-grid ">
                  <button class="btn btn-primary btn-sm">Enroll Now</button>
                </div>
              </div>
            </div>


          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <img src="img.png" alt="" class="rounded-top">
              <div class="card-body">
                <b>Java Programming</b>
                <p class="card-text">
                  <b>Duration:</b>30 hours </br>
                  <b>Price:</b> 4000/. Rs
                </p>
                <div class="d-grid ">
                  <button class="btn btn-primary btn-sm">Enroll Now</button>
                </div>
              </div>
            </div>


          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <img src="img.png" alt="" class="rounded-top">
              <div class="card-body">
                <b>C++ Programing</b>
                <p class="card-text">
                  <b>Duration:</b>35 hours </br>
                  <b>Price:</b> 3500/. Rs
                </p>
                <div class="d-grid ">
                  <button class="btn btn-primary btn-sm">Enroll Now</button>
                </div>
              </div>
            </div>


          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <img src="img.png" alt="" class="rounded-top">
              <div class="card-body">
                <b>Machine Learning</b>
                <p class="card-text">
                  <b>Duration:</b>40 hours </br>
                  <b>Price:</b> 4800/. Rs
                </p>
                <div class="d-grid ">
                  <button class="btn btn-primary btn-sm">Enroll Now</button>
                </div>
              </div>
            </div>


          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <img src="img.png" alt="" class="rounded-top">
              <div class="card-body">
                <b>Web Development</b>
                <p class="card-text">
                  <b>Duration:</b>50 hours </br>
                  <b>Price:</b> 4500/. Rs
                </p>
                <div class="d-grid ">
                  <button class="btn btn-primary btn-sm">Enroll Now</button>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Teachers Section.... -->
  <section class="py-5 bg-light">
    <div>
      <h2 class="text-center mb-5 ">Teachers</h2>

    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-3">
          <div class="card mt-5">
            <div class="col-7 position-absolute" style="top:-50px">
              <img src="Images\aaysha.jpg" alt="" class="mw-100 border rounded-circle" style="height:100px;">
            </div>

            <div class="card-body pt-5 mt-3">
              <div class="card-title">
                <h4>Aaysha Shukla</h4>
                <p class="card-text">

                  <b>ratings: </b><i class=" fa fa-star text-warning"></i>
                  <i class=" fa fa-star text-warning"></i><i class=" fa fa-star text-warning"></i>
                  <i class=" fa fa-star text-warning"></i><i class=" fa fa-star text-warning"></i></br>
                  <b>Courses: </b>5
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card mt-5">
            <div class="col-7 position-absolute" style="top:-50px">
              <img src="Images\aaysha.jpg" alt="" class="mw-100 border rounded-circle" style="height:100px;">
            </div>

            <div class="card-body pt-5 mt-3">
              <div class="card-title">
                <h4>Aaysha Shukla</h4>
                <p class="card-text">

                  <b>ratings: </b><i class=" fa fa-star text-warning"></i>
                  <i class=" fa fa-star text-warning"></i><i class=" fa fa-star text-warning"></i>
                  <i class=" fa fa-star text-warning"></i><i class=" fa fa-star text-warning"></i></br>
                  <b>Courses: </b>5
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card mt-5">
            <div class="col-7 position-absolute" style="top:-50px">
              <img src="Images\aaysha.jpg" alt="" class="mw-100 border rounded-circle" style="height:100px;">
            </div>

            <div class="card-body pt-5 mt-3">
              <div class="card-title">
                <h4>Aaysha Shukla</h4>
                <p class="card-text">

                  <b>ratings: </b><i class=" fa fa-star text-warning"></i>
                  <i class=" fa fa-star text-warning"></i><i class=" fa fa-star text-warning"></i>
                  <i class=" fa fa-star text-warning"></i><i class=" fa fa-star text-warning"></i></br>
                  <b>Courses: </b>5
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="card mt-5">
            <div class="col-7 position-absolute" style="top:-50px">
              <img src="Images\aaysha.jpg" alt="" class="mw-100 border rounded-circle" style="height:100px;">
            </div>

            <div class="card-body pt-5 mt-3">
              <div class="card-title">
                <h4>Aaysha Shukla</h4>
                <p class="card-text">

                  <b>ratings: </b><i class=" fa fa-star text-warning"></i>
                  <i class=" fa fa-star text-warning"></i><i class=" fa fa-star text-warning"></i>
                  <i class=" fa fa-star text-warning"></i><i class=" fa fa-star text-warning"></i></br>
                  <b>Courses: </b>5
                </p>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </section>


  </div>
  <!-- bootstrap 5 js link..... -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>