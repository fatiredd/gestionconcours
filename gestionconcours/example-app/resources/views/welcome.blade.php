<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MesConcours - Bienvenue</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f8f9fa, #e0e0e0);
            color: #343a40;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .welcome-section {
            text-align: center;
            padding: 100px 0;
        }
        .welcome-section h1 {
            font-size: 3em;
            margin-bottom: 20px;
            color: #007bff;
        }
        .welcome-section p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }
        .welcome-section .btn-primary, .welcome-section .btn-secondary {
            font-size: 1em;
            padding: 10px 20px;
            margin: 10px;
        }
        .animated-text {
            color: #007bff;
            animation: colorChange 3s infinite;
        }
        @keyframes colorChange {
            0% { color: #007bff; }
            50% { color: #28a745; }
            100% { color: #007bff; }
        }
        @media (max-width: 768px) {
            .welcome-section {
                padding: 50px 0;
            }
            .welcome-section h1 {
                font-size: 2.5em;
            }
            .welcome-section p {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
    <div class="container welcome-section">
        <h1 class="animated-text">Bienvenue sur MesConcours</h1>
        <p>Votre plateforme dédiée à la gestion des concours.</p>
        <p>Découvrez tous les concours disponibles, postulez facilement en ligne et consultez les résultats en temps réel.</p>
   
        <a href="{{ route('concours.index') }}" class="btn btn-primary">voire les concours</a>
    </div> 
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('mouseover', function() {
                    this.style.backgroundColor = '#0056b3';
                    this.style.color = '#fff';
                });
                button.addEventListener('mouseout', function() {
                    if (this.classList.contains('btn-primary')) {
                        this.style.backgroundColor = '#007bff';
                    } else {
                        this.style.backgroundColor = '#6c757d';
                    }
                    this.style.color = '#fff';
                });
            });
        });
    </script>
</body>
</html>
