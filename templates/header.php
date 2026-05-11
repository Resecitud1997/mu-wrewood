<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SERVER_NAME; ?> - <?php echo SERVER_VERSION; ?></title>
    
    <!-- Google Fonts: Un toque moderno para los títulos -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome: Para iconos de espadas, usuarios, etc. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --mu-gold: #ffc107;
            --mu-dark: #0a0a0a;
            --mu-card: #161616;
        }

        body {
            background-color: var(--mu-dark);
            color: #e0e0e0;
            font-family: 'Roboto', sans-serif;
            background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('assets/img/background.jpg');
            background-attachment: fixed;
            background-size: cover;
        }

        .navbar-brand {
            font-family: 'Cinzel', serif;
            letter-spacing: 2px;
            color: var(--mu-gold) !important;
        }

        .nav-link {
            text-transform: uppercase;
            font-weight: 700;
            font-size: 0.9rem;
            margin: 0 10px;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: var(--mu-gold) !important;
            text-shadow: 0 0 10px rgba(255, 193, 7, 0.5);
        }

        .btn-download {
            background-color: var(--mu-gold);
            color: #000;
            font-weight: bold;
            border: none;
        }

        .btn-download:hover {
            background-color: #e5ad06;
            transform: scale(1.05);
        }

        /* Clase para títulos estilo Mu */
        .mu-title {
            font-family: 'Cinzel', serif;
            color: var(--mu-gold);
            text-shadow: 2px 2px 4px #000;
        }
    </style>
</head>
<body>

<!-- Navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black border-bottom border-warning border-opacity-25 sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <i class="fa-solid fa-scroll me-2"></i><?php echo SERVER_NAME; ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link active" href="index.php"><i class="fa-solid fa-house me-1"></i> Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="register.php"><i class="fa-solid fa-user-plus me-1"></i> Registro</a></li>
                <li class="nav-item"><a class="nav-link" href="downloads.php"><i class="fa-solid fa-download me-1"></i> Descargas</a></li>
                <li class="nav-item"><a class="nav-link" href="ranking.php"><i class="fa-solid fa-trophy me-1"></i> Ranking</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa-solid fa-shop me-1"></i> WebShop</a></li>
            </ul>
            <div class="d-flex">
                <a href="downloads.php" class="btn btn-download px-4">JUGAR AHORA</a>
            </div>
        </div>
    </div>
</nav>