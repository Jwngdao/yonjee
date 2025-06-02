<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="Stay in a luxurious Huts with stunning views at the Yonjee Retreat. Choose from our wide range of huts at one of the best 5 star luxury Farm stays in Shergaon.">
    <meta name="keywords" content="Shergaon, hotels,Hotels, Hotels in shergaon, Farmstay, farm stay, resort, resorts, Best Stay in Shergaon, Best Farm Stay in Shergaon,Best Farmstay in Shergaon,Farmstay in Shergaon,Farm stay in Shergaon ,Best Homestay in Shergaon,Home Stay in Shergaon,Homestay in Shergaon,Best Hotel in Shergaon,Hotel in Shergaon,Restaurant in Shergaon,Cafe in Shergaon,Massage in Shergaon, Reasonable and Affordable Stay at Shergaon, Accomodation in Shergaon,Stay in Shergaon,">
    
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/png">

    <title>@yield('title', 'Yonjee Retreat')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
        opacity: 0;
        transition: opacity 1s ease-in;
        }

        body.page-loaded {
        opacity: 1;
        } 
      
      /*  html, body {
            height: 100%;
            margin: 0;
          
        }*/
        .layout {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        .sidebar {
            width: 330px;
            background-color:rgb(245, 242, 236);
            color: black;
            padding: 20px;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;

        }

        .sidebar .nav-link {
            color: black;
            margin-bottom: 10px;
            font-family: 'Gilda Display', serif;
        }

        .sidebar .nav-link:hover {
            color:rgb(178, 155, 98);
            border-radius: 4px;
        }

        .main-content {
            margin-left: 330px; /* same as sidebar width */
            padding: 0px;
            overflow-y: auto;
            height: 100vh;
            width: 100%;
        }
    </style>
</head>
<!-- Just before </body> -->
<script>
    window.addEventListener('load', () => {
        document.body.classList.add('page-loaded');
    });
</script>

<body>
    <div class="layout">
        <!-- Fixed Sidebar -->
        <nav class="sidebar">
            <img class="text-center" src="{{asset('images/logo.png')}}" style="display: block; margin: 0 auto;" width="150" height="160" >
            <h2 class="text-center" style="font-family: 'Gilda Display', serif;">Yonjee Retreat</h2>
            <ul class="nav flex-column mt-4">
                <br>
                <br>
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/about-us') }}" class="nav-link">ABOUT US</a>
                </li>
                <li class="nav-item">
                <a href="#" class="nav-link" onclick="toggleDropdown(event)">HUTS </a>
                <ul id="customDropdown" class="custom-dropdown">
                    <li><a class="dropdown-item" href="{{ url('/huts#tree-house') }}">TREE HOUSE</a></li>
                    <li><a class="dropdown-item" href="{{ url('/huts#duplex-huts') }}">DUPLEX HUTS</a></li>
                    <li><a class="dropdown-item" href="{{ url('/huts#cottages') }}">COTTAGES</a></li>
                </ul>
                </li>
                <script>
                function toggleDropdown(event) {
                    event.preventDefault();
                    const dropdown = document.getElementById("customDropdown");
                    dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
                }
                </script>

               <li class="nav-item">
                    <a href="{{ url('/facilities') }}" class="nav-link">FACILITIES</a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/explorer') }}" class="nav-link">EXPLORER</a>
                </li>

                <li class="nav-item">
                    <a href="#gallery" class="nav-link">GALLERY</a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/contact-us') }}" class="nav-link">CONTACT US</a>
                </li>
             </ul>
             <div style="position: fixed; bottom: 0; left: 10%; transform: translateX(-50%);
             text-align: center; background: rgb(69, 145, 75); color: white; 
             padding: 10px 20px; border-radius: 10px; max-width: 250px; 
             width: calc(100% - 20px); margin: 0 10px 10px; z-index: 999;">
                <h3 style="margin: 0 0 5px; font-family: 'Gilda Display', serif;">Reservation</h3>
                <p style="margin: 0; font-family: 'Gilda Display', serif;">
                    📞 <a href="tel:+919876543210" style="color: white; text-decoration: underline;">+91 98765 43210</a>
                </p>
            </div>

        </nav>

        <!-- Scrollable Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
    </div>

    @include('partials.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    

    <!-- Floating Social Icons -->
<div id="social-popup" class="popup">
  <a href="https://wa.me/yourNumber" target="_blank"><img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp"></a>
  <a href="https://instagram.com/yourProfile" target="_blank"><img src="{{ asset('images/insta.png') }}" alt="Instagram"></a>
  <a href="https://facebook.com/yourPage" target="_blank"><img src="{{ asset('images/fb.png') }}" alt="Facebook"></a>
  <a href="https://goo.gl/maps/yourMapLink" target="_blank"><img src="{{ asset('images/googlemaps.png') }}" alt="Map"></a>
</div>

<script>
  window.onload = function() {
    setTimeout(function() {
      document.getElementById("social-popup").style.display = "flex";
    }, 1000); // Delay in milliseconds (1000ms = 1 second)
  };
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
