<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Stay in a luxurious Huts with stunning views at the Yonjee Retreat...">
    <meta name="keywords" content="Shergaon, hotels, Hotels, Hotels in shergaon...">

    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <title>@yield('title', 'Yonjee Retreat')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            opacity: 0;
            transition: opacity 1s ease-in;
        }
        body.page-loaded {
            opacity: 1;
        }

        .layout {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        .sidebar {
            width: 300px;
            background-color: rgb(245, 242, 236);
            color: black;
            padding: 20px 15px;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 9999;
            overflow-y: auto;
            transition: transform 0.3s ease;
        }

        .sidebar .nav-link {
            color: black;
            font-family: 'Gilda Display', serif;
            padding: 8px 10px;
            font-size: 15px;
        }

        .sidebar .nav-link:hover {
            color: rgb(20, 89, 27);
            border-radius: 4px;
        }

        .main-content {
            margin-left: 300px;
            padding: 0;
            overflow-y: auto;
            height: 100vh;
            width: 100%;
        }

        #sidebarToggle {
            display: none;
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 10000;
            background-color: #444;
            color: #fff;
            border: none;
            padding: 10px 15px;
            font-size: 20px;
            border-radius: 4px;
        }

        /* Custom Dropdown */
        .custom-dropdown {
            list-style: none;
            padding-left: 20px;
            margin-top: 5px;
            display: none;
        }

        .custom-dropdown.show {
            display: block;
        }

        .custom-dropdown li a {
            color: #444;
            text-decoration: none;
            display: block;
            padding: 5px 0;
            font-size: 14px;
        }

        .custom-dropdown li a:hover {
            color:rgb(20, 89, 27);
            border-radius: 4px;
        }

        /* Mobile responsive */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar.active {
                transform: translateX(0);
            }
            .main-content {
                margin-left: 0;
            }
            #sidebarToggle {
                display: block;
            }
        }

        /* Social Popup */
        #social-popup {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            flex-direction: column;
            gap: 10px;
            z-index: 10000;
        }

        #social-popup img {
            width: 40px;
            height: 40px;
        }
    </style>
</head>

<body>
    <button id="sidebarToggle">☰</button>

    <div class="layout">
        <nav class="sidebar" id="sidebar">
            <img class="text-center" src="{{ asset('images/logo.png') }}" style="display: block; margin: 0 auto;" width="150" height="160">
            <h2 class="text-center" style="font-family: 'Gilda Display', serif;">Yonjee Retreat</h2>

            <ul class="nav flex-column mt-4">
                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">HOME</a></li>
                <li class="nav-item"><a href="{{ url('/about-us') }}" class="nav-link">ABOUT US</a></li>

                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="toggleDropdown(event)">HUTS</a>
                    <ul id="customDropdown" class="custom-dropdown">
                        <li><a class="dropdown-item" href="{{ url('/tree-house') }}">TREE HOUSE</a></li>
                        <li><a class="dropdown-item" href="{{ url('/duplex-huts') }}">DUPLEX HUTS</a></li>
                        <li><a class="dropdown-item" href="{{ url('/cottages') }}">COTTAGES</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a href="{{ url('/facilities') }}" class="nav-link">FACILITIES</a></li>
                <li class="nav-item"><a href="{{ url('/explorer') }}" class="nav-link">EXPLORER</a></li>
                <li class="nav-item"><a href="http://127.0.0.1:8000/#gallery" class="nav-link">GALLERY</a></li>
                <li class="nav-item"><a href="{{ url('/contact-us') }}" class="nav-link">CONTACT US</a></li>

                <li class="nav-item mt-4">
                    <div class="bg-success text-white text-center p-3 rounded-3">
                        <h5 class="mb-1" style="font-family: 'Gilda Display', serif;">Reservation</h5>
                        <p class="mb-0" style="font-family: 'Gilda Display', serif;">
                            📞 <a href="tel:+919876543210" class="text-white text-decoration-underline">+91 98765 43210</a>
                        </p>
                    </div>
                </li>
            </ul>
        </nav>

        <div class="main-content">
            @yield('content')
        </div>
    </div>

    @include('partials.footer')

    <div id="social-popup" class="popup">
        <a href="https://wa.me/8132803304" target="_blank"><img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp"></a>
        <a href="https://www.instagram.com/yonjeeretreat..." target="_blank"><img src="{{ asset('images/insta.png') }}" alt="Instagram"></a>
        <a href="https://www.facebook.com/yonjeeretreat..." target="_blank"><img src="{{ asset('images/fb.png') }}" alt="Facebook"></a>
        <a href="https://maps.app.goo.gl/A4WTeRXgPjMyaCMc6" target="_blank"><img src="{{ asset('images/googlemaps.png') }}" alt="Map"></a>
    </div>

    <script>
        window.addEventListener('load', () => {
            document.body.classList.add('page-loaded');
        });

        document.getElementById("sidebarToggle").addEventListener("click", function () {
            document.getElementById("sidebar").classList.toggle("active");
        });

        function toggleDropdown(event) {
            event.preventDefault();
            document.getElementById("customDropdown").classList.toggle("show");
        }

        // Social popup delay
        window.onload = function () {
            setTimeout(function () {
                document.getElementById("social-popup").style.display = "flex";
            }, 1000);
        };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
