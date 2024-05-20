
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique des paiements</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <h1 class="mb-4">Historique des paiements</h1>
    
    <!-- Filtrage par date -->
    <div class="row mb-4">
        <div class="col-md-6">
            <form action="{{ route('payment-history.index') }}" method="GET">
                <div class="input-group">
                    <input type="date" class="form-control" name="start_date" placeholder="Date de début">
                    <input type="date" class="form-control" name="end_date" placeholder="Date de fin">
                    <button type="submit" class="btn btn-primary">Filtrer</button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Tableau des paiements -->
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Montant</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <!-- Afficher les transactions ici -->
                <tr>
                    <td>2024-05-13</td>
                    <td>50.00 €</td>
                    <td>Paiement pour TVM</td>
                </tr>
                <!-- Ajoutez d'autres lignes ici pour chaque transaction -->
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

