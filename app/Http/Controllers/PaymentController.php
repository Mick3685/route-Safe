<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Amende;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function handleCallback(Request $request)
    {
        // Log pour debug
        Log::info('Callback reçu', $request->all());

        // Exemple de traitement du callback Kkiapay
        $transactionId = $request->input('transactionId');
        $status = $request->input('status');
        $amount = $request->input('amount');

        // Rechercher l'amende correspondante et mettre à jour son statut
        $amende = Amende::where('transaction_id', $transactionId)->first();
        if ($amende) {
            $amende->status = $status == 'success' ? 'paid' : 'failed';
            $amende->save();
        }

        // Définir un message de succès
        $message = $status == 'success' ? 'Votre paiement a été effectué. Vous recevrez un message sur votre mail.' : 'Le paiement a échoué. Veuillez réessayer.';

        // Rediriger vers la page des amendes avec le message de succès
        return redirect()->route('routesafe.amendes.index')->with('success', $message);
    }
}
