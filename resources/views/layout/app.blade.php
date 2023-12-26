<!DOCTYPE html>

<head>
    <title>Sidebar 02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('asset/style.css') }}">
    <meta name="robots" content="noindex, follow">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4 pt-5">
                <h1 style="color: #fafafa">TIKI</h1>
                <ul class="list-unstyled components mb-5">

                    <li>
                        <a href="{{route('dashboard')}}">Dashboard</a>
                    </li>

                    <li>
                        <a href="{{route('profile')}}">Profile</a>
                    </li>
                    <li>
                        <a href="{{route('search_trip')}}">Booking a Trip</a>
                    </li>
                    <li>
                        <a href="{{route('trip.index')}}">Created a Trip</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">Contact</a>
                    </li>
                    <li>
                        <a href="{{route('about')}}">About</a>
                    </li>



                </ul><br><br>


            </div>


        </nav>

        <div id="content" class="p-4 p-md-5 pt-5">
            @yield('content')

        </div>
    </div>




    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script defer=""
        src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon="{&quot;rayId&quot;:&quot;83a6e427caad4e9d&quot;,&quot;version&quot;:&quot;2023.10.0&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;}"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
