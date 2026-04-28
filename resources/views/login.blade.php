<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Fraud Awareness</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
 
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<header>
    <nav class="d-flex justify-content-between bg-navy">
       <label for="toggle">
              <i class="fa-solid fa-bars pt-1"></i>
        </label> 
        <!-- Left Text -->
        <div class="txt-left txt-navy ">
            <h2>CYBER FRAUD AWARENESS</h2>
        </div>

        <!-- Right Menu -->
        <div class="txt-right">
            <ul class="d-flex list-unstyled gap-3 mb-0">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div>

    </nav>
</header>

<!-- Hero Section -->
<section id="hero">
    <div class="container-fluid">
        <div class="col-12 text-center">
            <img src="{{ asset('images/hero.jpg') }}" alt="Cyber Awareness" class="img-fluid">
        </div>
    </div>
</section>

</body>
</html>