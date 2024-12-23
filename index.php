<!-- http://localhost/Tugas-Blog-pribadi/index.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rick Mantara : FYI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-primary bg-primary-subtle p-4">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>Krishna Richad</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blogpost.html">Blog Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="profile-section text-center p-5">
        <div class="container">
            <img src="pp.jpg" alt="Profile Picture" class="img-fluid rounded-circle profile-picture" id="profilePicture">
            <h2 class="mt-3">Krishna Richad (istriku Ruan Mei, Arlecchino juga)</h2>
            <p class="lead">Web Developer | Blogger | Gamer</p>
        </div>
    </section>
    
    <section class="hero-section text-center p-5">
        <div class="container">
            <h1>Welcome to My Personal Blog!</h1>
            <a href="blogpost.html" class="btn btn-primary">Read Latest Posts</a>
        </div>
    </section>    

    <!-- About Section -->
    <section class="about bg-white p-5 text-center fade-in" id="about">
        <div class="container">
            
        </div>
    </section>
    <!-- Kenalin Lagu Kesukaan -->
    <section class="about bg-white text-center">
        <div class="container">
            <section id="post" class="blog-posts bg-dark">
                <h2 class="text-center text-white mb-5">Here's My Playlists</h2>
                <div class="song">
                    <div class="song-container" id="songContainer">
                        <script>
                            // Mendapatkan elemen kontainer
                            const songContainer = document.getElementById('songContainer');

                            // Menambahkan event listener untuk scroll mouse
                            songContainer.addEventListener('wheel', (event) => {
                                event.preventDefault(); // Mencegah scroll vertikal default
                            
                                // Menggulung kontainer ke kiri atau kanan
                                songContainer.scrollLeft += event.deltaY; // deltaY digunakan untuk menentukan arah scroll
                            });
                        </script>
                        <!-- Lagu 1 -->
                        <div class="box-wrap">
                            <div clapss="box">
                              <p>more >>>></p>
                            </div>
                          </div>
                    
                        <!-- Lagu 2 -->
                        <div class="lagu col-md-4">
                            <div class="card h-100 song-card">
                                <img src="spotify.png" class="card-img-top" alt="Post Image">
                                <div class="card-body">
                                    <h5 class="card-title">Bohemian Rhapsody</h5>
                                    <p class="card-textSong">Yep, back in to 1990's when Queen was in its peak era.</p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="https://open.spotify.com/track/3z8h0TU7ReDPLIbEnYhWZb?si=w-HkKFyIT_elRRxWMN-LMQ" class="btn btn-primary">Listen!</a>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Lagu 3 -->
                        <div class="lagu col-md-4">
                            <div class="card h-100 song-card">
                                <img src="spotify.png" class="card-img-top" alt="Post Image">
                                <div class="card-body">
                                    <h5 class="card-title">Hotel California</h5>
                                    <p class="card-textSong">The Eagles' classic song that never gets old.</p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="https://open.spotify.com/track/4VqposULvDIj7VeqNetMessage?si=JQPGhiW2QZ2iSJN-2M5_yw" class="btn btn-primary">Listen!</a>
                                </div>
                            </div>
                        </div>
                        <!-- Lagu 4 -->
                        <div class="lagu col-md-4">
                            <div class="card h-100 song-card">
                                <img src="spotify.png" class="card-img-top" alt="Post Image">
                                <div class="card-body">
                                    <h5 class="card-title">Someday in rainbow</h5>
                                    <p class="card-textSong">The Eagles' classic song that never gets old.</p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="https://open.spotify.com/track/4VqposULvDIj7VeqNetMessage?si=JQPGhiW2QZ2iSJN-2M5_yw" class="btn btn-primary">Listen!</a>
                                </div>
                            </div>
                        </div>
                        <!-- Lagu 5 -->
                        <div class="lagu col-md-4">
                            <div class="card h-100 song-card">
                                <img src="spotify.png" class="card-img-top" alt="Post Image">
                                <div class="card-body">
                                    <h5 class="card-title">What</h5>
                                    <p class="card-textSong">The Eagles' classic song that never gets old.</p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="https://open.spotify.com/track/4VqposULvDIj7VeqNetMessage?si=JQPGhiW2QZ2iSJN-2M5_yw" class="btn btn-primary">Listen!</a>
                                </div>
                            </div>
                        </div>
                        <!-- Lagu 6 -->
                        <div class="lagu col-md-4">
                            <div class="card h-100 song-card">
                                <img src="spotify.png" class="card-img-top" alt="Post Image">
                                <div class="card-body">
                                    <h5 class="card-title">Hotel California</h5>
                                    <p class="card-textSong">The Eagles' classic song that never gets old.</p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="https://open.spotify.com/track/4VqposULvDIj7VeqNetMessage?si=JQPGhiW2QZ2iSJN-2M5_yw" class="btn btn-primary">Listen!</a>
                                </div>
                            </div>
                        </div>
                        <!-- Lagu 7 -->
                        <div class="lagu col-md-4">
                            <div class="card h-100 song-card">
                                <img src="spotify.png" class="card-img-top" alt="Post Image">
                                <div class="card-body">
                                    <h5 class="card-title">Hotel California</h5>
                                    <p class="card-textSong">The Eagles' classic song that never gets old.</p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="https://open.spotify.com/track/4VqposULvDIj7VeqNetMessage?si=JQPGhiW2QZ2iSJN-2M5_yw" class="btn btn-primary">Listen!</a>
                                </div>
                            </div>
                        </div>
                        <!-- Lagu 8 -->
                        <div class="lagu col-md-4">
                            <div class="card h-100 song-card">
                                <img src="spotify.png" class="card-img-top" alt="Post Image">
                                <div class="card-body">
                                    <h5 class="card-title">Hotel California</h5>
                                    <p class="card-textSong">The Eagles' classic song that never gets old.</p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="https://open.spotify.com/track/4VqposULvDIj7VeqNetMessage?si=JQPGhiW2QZ2iSJN-2M5_yw" class="btn btn-primary">Listen!</a>
                                </div>
                            </div>
                        </div>
                        <!-- Lagu 9 -->
                        <div class="lagu col-md-4">
                            <div class="card h-100 song-card">
                                <img src="spotify.png" class="card-img-top" alt="Post Image">
                                <div class="card-body">
                                    <h5 class="card-title">Hotel California</h5>
                                    <p class="card-textSong">The Eagles' classic song that never gets old.</p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="https://open.spotify.com/track/4VqposULvDIj7VeqNetMessage?si=JQPGhiW2QZ2iSJN-2M5_yw" class="btn btn-primary">Listen!</a>
                                </div>
                            </div>
                        </div>
                        <!-- Lagu 10 -->
                        <div class="lagu col-md-4">
                            <div class="card h-100 song-card">
                                <img src="spotify.png" class="card-img-top" alt="Post Image">
                                <div class="card-body">
                                    <h5 class="card-title">Hotel California</h5>
                                    <p class="card-textSong">The Eagles' classic song that never gets old.</p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="https://open.spotify.com/track/4VqposULvDIj7VeqNetMessage?si=JQPGhiW2QZ2iSJN-2M5_yw" class="btn btn-primary">Listen!</a>
                                </div>
                            </div>
                        </div>
                        <!-- Lagu 11 -->
                        <div class="lagu col-md-4">
                            <div class="card h-100 song-card">
                                <img src="spotify.png" class="card-img-top" alt="Post Image">
                                <div class="card-body">
                                    <h5 class="card-title">Hotel California</h5>
                                    <p class="card-textSong">The Eagles' classic song that never gets old.</p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="https://open.spotify.com/track/4VqposULvDIj7VeqNetMessage?si=JQPGhiW2QZ2iSJN-2M5_yw" class="btn btn-primary">Listen!</a>
                                </div>
                            </div>
                        </div>
                        <!-- Lagu 12 -->
                        <div class="lagu col-md-4">
                            <div class="card h-100 song-card">
                                <img src="spotify.png" class="card-img-top" alt="Post Image">
                                <div class="card-body">
                                    <h5 class="card-title">Hotel California</h5>
                                    <p class="card-textSong">The Eagles' classic song that never gets old.</p>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="https://open.spotify.com/track/4VqposULvDIj7VeqNetMessage?si=JQPGhiW2QZ2iSJN-2M5_yw" class="btn btn-primary">Listen!</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    
    <!-- Ngajak Mabar -->
    <section class="about bg-primary-subtle p-5 text-center mb-5">
        <section id="posts1" class="blog-posts p-5 bg-primary-subtle">
            <div class="container">
                <h2 class="text-center mb-5">Games That I Currently Playing Right Now</h2>
                <div class="row g-4">
                    
                    <!-- Game 1 -->
                    <div class="game col-md-4">
                        <div class="card h-100">
                            <img src="genshin.jpeg" class="card-img-top" alt="Post Image">
                            <div class="card-body">
                                <h5 class="card-title">Kikir Impact</h5>
                                <p class="card-text">This is a game of despair, where you always grinding then grinding more to only getting Qiqi.</p>
                            </div>
                            <div class="card-footer">
                                <a href="https://play.google.com/store/apps/details?id=com.miHoYo.GenshinImpact" class="btn btn-primary">Play!</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Game 2 -->
                    <div class="game col-md-4">
                        <div class="card h-100">
                            <img src="hsr.jpeg" class="card-img-top" alt="Post Image">
                            <div class="card-body">
                                <h5 class="card-title">Honkai : Star Rail</h5>
                                <p class="card-text">You can add my uid here : 831220712. I'm just a new player, anyways Ruan Mei best waifu!</p>
                            </div>
                            <div class="card-footer">
                                <a href="https://play.google.com/store/apps/details?id=com.HoYoverse.hkrpgoversea" class="btn btn-primary">Play!</a>
                            </div>
                        </div>
                    </div>
                
                    <!-- Game 3 -->
                    <div class="game col-md-4">
                        <div class="card h-100">
                            <img src="clash royale.jpeg" class="card-img-top" alt="Post Image">
                            <div class="card-body">
                                <h5 class="card-title">Clash Royale</h5>
                                <p class="card-text">Hee hee hee ha, now it's time to spam my mega knight!</p>
                            </div>
                            <div class="card-footer">
                                <a href="https://play.google.com/store/apps/details?id=com.supercell.clashroyale" class="btn btn-primary">Play!</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    
<!-- Footer -->
<section id="contact" class="contact bg-dark p-5 text-center">
<footer class="bg-dark text-white text-center p-4 w-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card text-dark">
                    <div class="card-body">
                        <i class="bi bi-envelope-fill display-4 mb-3"></i>
                        <h5>Email</h5>
                        <p><a href="mailto:krishnarichad@gmail.com" class="text-black">krishnarichad@gmail.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-dark">
                    <div class="card-body">
                        <i class="bi bi-phone-fill display-4 mb-3"></i>
                        <h5>Phone</h5>
                        <p><a href="tel:177013" class="text-black">+177 013 789</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-dark">
                    <div class="card-body">
                        <i class="bi bi-geo-alt-fill display-4 mb-3"></i>
                        <h5>Location</h5>
                        <p>Jalan Raya Kampus Udayana, Jimbaran</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="social mt-3">
            <h5>Follow Me</h5>
            <a href="https://facebook.com/richadkrishna" class="me-3" target="_blank">
                <i class="bi bi-facebook display-5"></i>
            </a>
            <a href="https://instagram.com/richadkrishna" class="me-3" target="_blank">
                <i class="bi bi-instagram display-5"></i>
            </a>
            <a href="https://tiktok.com/@rich_kz96" class="me-3" target="_blank">
                <i class="bi bi-tiktok display-5"></i>
            </a>
        </div>
        <p class="mt-4">© 2024 Simple Personal Blog | Designed by Krishna Richad</p>
    </div>
</footer>
</section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
