<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Hotel Management System</title>

    <style>
  body {
    font-family: "Times New Roman", Times, serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0; /* Added a background color */
  }

  .navbar {
    background-color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100px;
    padding: 0 50px; /* Added padding to the navbar */
  }

  .navbar img {
    height: 90px;
    border-radius: 5px; /* Rounded corners for the image */
  }

  .navbar-brand h4 {
    margin: 0; /* Removed line break */
    font-weight: bold;
    font-size: 1.2rem;
  }

  .sidebar {
    width: 230px;
    height:75%;
    background-color: #c3cbdc;
    background-image: linear-gradient(147deg, #c3cbdc 0%, #edf1f4 74%);
    position: fixed;
    top: 125px; /* Adjusted top position to account for navbar height */
    bottom: 0;
    overflow-y: auto; /* Changed overflow to y-axis only */
  }

  .sidebar a {
    display: block;
    padding: 30px;
    color: black;
    text-decoration: none;
    transition: font-size 0.3s;
  }

  .sidebar a:hover {
    font-size: 20px;
  }

  .sidebar a.active {
    background-color:  #555;
    color: white;
  }

  .sidebar a:hover:not(.active) {
    background-color: #555;
    color: white;
  }

  .content {
    margin-left: 250px; /* Adjusted margin-left to accommodate sidebar width */
    padding: 20px; /* Added padding to content */
  }

  /* Adjustments for smaller screens */
  @media screen and (max-width: 992px) {
    .sidebar {
      width: 100%;
      position: relative;
      top: 0;
      bottom: auto;
      height: auto;
    }
    .content {
      margin-left: 0;
    }
  }

  @media screen and (max-width: 768px) {
    .navbar-brand h4 {
      font-size: 1rem;
    }
  }

  footer {
    font-size: 15px;
    background-color: black;
    color: white;
    text-align: center;
    padding: 5px;
    position: fixed;
    width: 100%;
    bottom: 0;
  }

    </style>

</head>
<body>
        <div style="background-color:#f8f8ff;">
            <nav class="fixed-top">
                <nav  class= "navbar navbar-light" style="background-color: white; justify-content-between; height:100px;">
                    <img src="{{ URL('images/team.png') }}" alt="..." class="rounded" style="height:100px";>
                    <a class="navbar-brand"><h1 class="font-weight-bold">Hotel Management System</h1></a><br>

                </nav>
            </nav>
            <br><br><br><br>

            <div class="row">

                <div class="col-lg-2">
                    @yield('side');

                </div>

                <div class="col-lg-10" style="margin-top:30px;">
                   <!-- <div class="content"> -->

                    @yield('content')
                       <br><br>

                    <!-- </div> -->
                </div>
            </div>
            <div class="row">

                <div class="fixed-bottom">
                    <footer>
                        <p class="copyright">All Rights Reserved.</p>
                    </footer>
                </div>
            </div>
        </div>
</body>
</html>
