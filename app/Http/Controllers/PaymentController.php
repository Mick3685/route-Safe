<?php

namespace App\Http\Controllers;

use App\Models\Amende;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Handle the Kkiapay payment callback.
     */
    public function handleCallback(Request $request)
    {
        // Validez la réponse de Kkiapay et mettez à jour le statut de l'amende
        $transactionId = $request->input('transactionId');
        // Recherchez l'amende correspondante en utilisant les informations de la réponse

        // Exemple de mise à jour de l'amende
        $amende = Amende::where('transaction_id', $transactionId)->first();
        if ($amende) {
            $amende->status = 'paid'; // Assurez-vous d'avoir une colonne status dans votre table amendes
            $amende->save();
        }

        // Rediriger vers la page des factures
        return redirect()->route('routesafe.factures.index');
    }
}
