<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('logo.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Student Management System</title>
    <style>
         /* Active/current link */
        .nav-item a.active {
        background-color: #198754 !important;
        color: white !important;
        }
        /* Nav Link Styling */
        .nav-item {
            border: 1px solid #f8f9fa;
        }
        .nav-item:hover {
            border: 1px solid #198754; 
            border-radius: 8px;
        }
        /* Sidebar and Main Content Styling */
        @media screen and (max-width: 991px) {

            /* Admin Dashboard */
            #dashboard_menu {
                height: auto;
                width: 100%;
            }

            #sidebar_menu {
                height: auto !important;
                width: 100%;
            }   

            #main_content {
                margin-top: 60px;
            }

        }
    </style>
</head>
<body>
    <!-- Navigation -->

    <div class="container-fluid bg-light text-dark p-3 d-flex align-items-center justify-content-between sticky-top">
        <h3 class="mb-0 h-font">Student Management System</h3>
    </div>
    

    <div class="col-lg-2 bg-light border-top border-3 border-light position-fixed" style="height: 100%; position: fixed; z-index: 2;" id="sidebar_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid flex-lg-column align-items-stretch">
                <h4 class="mt-2 text-light"></h4>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#admin_dropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="admin_dropdown">
                    <ul class="nav nav-pills flex-column" id="menu">
                        <li class="nav-item mb-1">
                            <a class="nav-link text-dark" id="home" href="#"><i class="bi bi-house-fill me-1"></i> Home</a>
                            <!-- The link should be href="{{ url('/home') }}" but right now it doesnt exists. Pls fix. -->
                        </li>
                        <li class="nav-item mb-1">   
                            <a class="nav-link text-dark" id="students" href="{{ url('/students') }}"><i class="bi bi-backpack-fill me-1"></i>Students</a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link text-dark" id="teachers" href="{{ url('/teachers') }}"><i class="bi bi-person-check me-1"></i> Teacher</a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link text-dark" id="courses" href="{{ url('/courses') }}"><i class="bi bi-book-fill me-1"></i> Courses</a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link text-dark" id="batches" href="{{ url('/batches') }}"><i class="bi bi-people-fill me-1"></i>Batches</a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link text-dark" id="enrollments" href="{{ url('/enrollments') }}"><i class="bi bi-file-earmark-person-fill me-1"></i> Enrollment</a>
                        </li>
                        <li class="nav-item mb-1">
                            <a class="nav-link text-dark" id="payments" href="{{ url('/payments') }}"><i class="bi bi-credit-card me-1"></i> Payment</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid" id="main_content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                @yield('content')
            </div>
        </div>
    </div>

</body>
<script>
    // Get the current page's URL
    var currentURL = window.location.href;                            
    var menuItems = document.getElementById("menu").getElementsByTagName("a");

    for (var i = 0; i < menuItems.length; i++) {
        var menuItemID = menuItems[i].getAttribute("id");

        // Check if the current page URL contains the link's ID
        if (currentURL.includes(menuItemID)) {
            menuItems[i].classList.add("active");
        }

    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>