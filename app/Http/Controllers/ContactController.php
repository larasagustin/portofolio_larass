<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function sendMessage(Request $request)
    {
        // Validasi form
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required|max:255',
            'message' => 'required'
        ]);

        // Simpan ke database
        ContactMessage::create($request->all());

        // Kasih success message
        return back()->with('success', 'Pesan kamu berhasil dikirim! Aku akan balas secepatnya 💖');
    }
}