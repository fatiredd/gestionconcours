<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <h1 class="text-2xl font-bold mb-4">Modifier le Concours</h1>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ route('concours.update', $concours->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nom_concours" class="form-label">Nom du Concours</label>
                    <input type="text" class="form-control" id="nom_concours" name="nom_concours" value="{{ $concours->nom_concours }}" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ $concours->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="date_debut" class="form-label">Date de Début</label>
                    <input type="date" class="form-control" id="date_debut" name="date_debut" value="{{ $concours->date_debut }}" required>
                </div>
                <div class="mb-3">
                    <label for="date_fin" class="form-label">Date de Fin</label>
                    <input type="date" class="form-control" id="date_fin" name="date_fin" value="{{ $concours->date_fin }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>
</div>
