<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Laras Agustin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border: 5px solid white;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            transition: 0.3s;
        }
        .nav-brand {
            font-weight: bold;
            font-size: 1.5em;
        }
    </style>
</head>
<body class="gradient-bg">
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand nav-brand" href="#">💻 Laras Portfolio</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <img src="https://ui-avatars.com/api/?name=Laras+Agustin&background=764ba2&color=fff&size=150" alt="Laras" class="profile-img rounded-circle">
            </div>
            <div class="col-md-8 text-white">
                <h1 class="display-4 fw-bold">👋 Hi, I'm Laras!</h1>
                <p class="lead">Laravel Developer from Indonesia</p>
                <p>Building amazing web applications with PHP & Laravel</p>
                
                <!-- Tech Stack Badges -->
                <div class="mt-3">
                    <span class="badge bg-light text-dark me-2">PHP</span>
                    <span class="badge bg-light text-dark me-2">Laravel</span>
                    <span class="badge bg-light text-dark me-2">HTML/CSS</span>
                    <span class="badge bg-light text-dark me-2">JavaScript</span>
                    <span class="badge bg-light text-dark">MySQL</span>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg card-hover">
                    <div class="card-body p-4">
                        <h3 class="card-title text-primary">🎯 About Me</h3>
                        <p class="card-text">Halo! Aku Laras, seorang Laravel enthusiast dari Indonesia yang passionate banget sama web development!</p>
                        
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li>💻 <strong>Tech Stack:</strong> PHP, Laravel, HTML, CSS, JavaScript</li>
                                    <li>🎵 <strong>Coding Vibe:</strong> Lagu chill + kopi</li>
                                    <li>🚀 <strong>Currently:</strong> Tugas Akhir + Magang</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li>✨ <strong>Goal:</strong> Full-Stack Developer</li>
                                    <li>📚 <strong>Learning:</strong> React.js & Advanced Laravel</li>
                                    <li>🎯 <strong>Quote:</strong> "Progress, not perfection!"</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="container py-4">
        <div class="row">
            <div class="col-12">
                <h3 class="text-white text-center mb-4">🚀 My Projects</h3>
            </div>
            
            <!-- Project 1 -->
            <div class="col-md-4 mb-4">
                <div class="card card-hover h-100">
                    <div class="card-body">
                        <h5 class="card-title">Personal Blog</h5>
                        <p class="card-text">Blog pribadi dengan Laravel, fitur CRUD articles dan comments.</p>
                        <div class="mb-2">
                            <span class="badge bg-primary">Laravel</span>
                            <span class="badge bg-success">PHP</span>
                            <span class="badge bg-info">MySQL</span>
                        </div>
                        <small class="text-muted">In Progress...</small>
                    </div>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="col-md-4 mb-4">
                <div class="card card-hover h-100">
                    <div class="card-body">
                        <h5 class="card-title">Task Manager</h5>
                        <p class="card-text">Aplikasi manajemen tugas dengan drag & drop functionality.</p>
                        <div class="mb-2">
                            <span class="badge bg-primary">Laravel</span>
                            <span class="badge bg-warning">JavaScript</span>
                        </div>
                        <small class="text-muted">Planning Stage</small>
                    </div>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="col-md-4 mb-4">
                <div class="card card-hover h-100">
                    <div class="card-body">
                        <h5 class="card-title">Portfolio Website</h5>
                        <p class="card-text">Website portfolio ini yang sedang kamu lihat! ✨</p>
                        <div class="mb-2">
                            <span class="badge bg-primary">Laravel</span>
                            <span class="badge bg-danger">Bootstrap</span>
                        </div>
                        <small class="text-success">✅ Live!</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-body text-center p-4">
                        <h3 class="text-primary">📫 Let's Connect!</h3>
                        <p class="card-text">Tertarik kolaborasi atau sekedar ngobrol tentang coding?</p>
                        
                        <div class="mt-3">
                            <a href="https://instagram.com/0lag8_" class="btn btn-outline-danger me-2">Instagram</a>
                            <a href="mailto:agstinin0128@gmail.com" class="btn btn-outline-primary me-2">Email</a>
                            <a href="https://github.com/larasagustin" class="btn btn-outline-dark">GitHub</a>
                            <a href="/contact" class="btn btn-outline-primary me-2">📧 Contact Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center text-white py-4 mt-4">
        <p>Made with 💖 by Laras Agustin | "Progress, not perfection!" ✨</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>