<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <h1 class="text-2xl font-bold mb-4">Résultats des Concours</h1>
    
    <!-- Bouton pour insérer un PDF -->
    <form action="{{ route('resultats.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="document_resultat" class="form-label">Insérer un PDF</label>
            <input type="file" class="form-control" id="document_resultat" name="document_resultat" accept=".pdf" required>
        </div>
        <button type="submit" class="btn btn-primary">Insérer</button>
    </form>

    <!-- Affichage des documents insérés -->
    <div class="mt-4">
        <h2 class="text-xl font-bold mb-2">Documents insérés</h2>
        @if($resultats->isEmpty())
            <div class="alert alert-warning" role="alert">
                Aucun document inséré pour le moment.
            </div>
        @else
            <ul>
                @foreach($resultats as $resultat)
                    <li><a href="{{ route('resultats.show', $resultat->id) }}">{{ $resultat->document_resultat }}</a></li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
