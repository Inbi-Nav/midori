<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index() {
        $payments = Payment::all();
        return response() -> json ($payments);
    }

    public function show($id) {
        $payments = Payment::find($id); 
        if ($payments) {
            return response() -> json ($payments);
        } else {
            return response() -> json (['message' => 'Pago no encontrado'], 404);
        }
    }
}
