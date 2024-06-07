<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <h1 class="text-2xl font-bold mb-4">Détails du Concours</h1>
    
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">{{ $concours->nom_concours }}</h2>
            <p class="card-text"><strong>Description:</strong> {{ $concours->description }}</p>
            <p class="card-text"><strong>Date de Début:</strong> {{ $concours->date_debut }}</p>
            <p class="card-text"><strong>Date de Fin:</strong> {{ $concours->date_fin }}</p>
            <a href="{{ route('concours.index') }}" class="btn btn-primary">Retour à la liste des concours</a>
        </div>
    </div>
</div>