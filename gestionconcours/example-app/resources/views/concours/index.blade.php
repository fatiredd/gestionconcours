<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <h1 class="text-2xl font-bold mb-4">Liste des Concours</h1>
    <a href="{{ route('concours.create') }}" class="btn btn-primary mb-3">Créer un concours</a>
    <a href="{{ route('concours.resultats') }}" class="btn btn-primary mb-3">Afficher les résultats</a>

    @if($concours->isEmpty())
        <div class="alert alert-warning" role="alert">
            Aucun concours pour le moment.
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nom du Concours</th>
                        <th>Description</th>
                        <th>Date de Début</th>
                        <th>Date de Fin</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($concours as $concour)
                    <tr>
                        <td>{{ $concour->nom_concours }}</td>
                        <td>{{ $concour->description }}</td>
                        <td>{{ $concour->date_debut }}</td>
                        <td>{{ $concour->date_fin }}</td>
                        <td>
                            <a href="{{ route('concours.edit', $concour->id) }}" class="btn btn-sm btn-primary">Modifier</a>
                            <form action="{{ route('concours.destroy', $concour->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                            </form>
                            <a href="{{ route('concours.show', $concour->id) }}" class="btn btn-sm btn-success">Afficher les détails</a>
                            <a href="{{ route('candidature.create', ['concours_id' => $concour->id]) }}" class="btn btn-sm btn-warning">Postuler</a>
                            <a href="{{ route('concours.candidat', ['concours_id' => $concour->id]) }}" class="btn btn-sm btn-info text-white">Voir Candidat</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
