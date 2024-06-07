<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <h1 class="text-2xl font-bold mb-4">Postuler au Concours</h1>
    <form action="{{ route('candidature.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="mb-3">
            <label for="cin" class="form-label">CIN</label>
            <input type="text" class="form-control" id="cin" name="cin" required>
        </div>
        <div class="mb-3">
            <label for="mail" class="form-label">Adresse Email</label>
            <input type="email" class="form-control" id="mail" name="mail" required>
        </div>
        <div class="mb-3">
            <label for="niveau_scolaire" class="form-label">Niveau Scolaire</label>
            <input type="text" class="form-control" id="niveau_scolaire" name="niveau_scolaire" required>
        </div>
        <div class="mb-3">
            <label for="filiere" class="form-label">Filière</label>
            <input type="text" class="form-control" id="filiere" name="filiere" required>
        </div>
        
        <input type="hidden" name="concours_id" value="{{ $concours_id }}">
        <button type="submit" class="btn btn-primary">Postuler</button>
    </form>
</div>
