<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuoteRequestMail;

class QuoteController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Mail::to('info@crystalcraftuae.com')->send(new QuoteRequestMail($validated));
        // Mail::to('safvanvk555@gmail.com')->send(new QuoteRequestMail($validated));

        return response()->json([
            'status' => true,
            'message' => 'Quote request sent successfully'
        ]);
    }
}
