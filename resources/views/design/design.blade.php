<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME', 'My Application') }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">{{ env('APP_NAME', 'Kupoval') }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Galerie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Évènements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="btn btn-primary me-2" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-secondary" href="#">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="row justify-content-center hero">
            <div class="col-md-8 text-center">
                <h1 class="display-4">Welcome to {{ env('APP_NAME', 'My Application') }}</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            </div>
        </section>
        <section class="container my-5">
            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/mario.jpg" class="d-block w-100" alt="Slide 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Mario</h5>
                            <p>The iconic video game character.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/screen.jpg" class="d-block w-100" alt="Slide 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Screen</h5>
                            <p>A beautiful screen display.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/spaceman.jpg" class="d-block w-100" alt="Slide 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Spaceman</h5>
                            <p>An astronaut exploring the universe.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/warrior.jpg" class="d-block w-100" alt="Slide 4">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Warrior</h5>
                            <p>A brave warrior ready for battle.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/warrior2.jpg" class="d-block w-100" alt="Slide 5">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Warrior 2</h5>
                            <p>Another warrior in action.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <h2 class="display-5">Upcoming Events</h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <article class="card event-card">
                        <div class="card-body">
                            <h5 class="card-title event-title">Event 1</h5>
                            <p class="card-text event-description">Description for event 1.</p>
                            <a href="#" class="btn btn-general">Learn More</a>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="card event-card">
                        <div class="card-body">
                            <h5 class="card-title event-title">Event 2</h5>
                            <p class="card-text event-description">Description for event 2.</p>
                            <a href="#" class="btn btn-general">Learn More</a>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="card event-card">
                        <div class="card-body">
                            <h5 class="card-title event-title">Event 3</h5>
                            <p class="card-text event-description">Description for event 3.</p>
                            <a href="#" class="btn btn-general">Learn More</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>
    <footer class="text-center py-4">
        <p>&copy; {{ date('Y') }} {{ env('APP_NAME', 'My Application') }}. All rights reserved.</p>
    </footer>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @vite('resources/js/app.js')
    @livewireScripts
</body>
</html>
