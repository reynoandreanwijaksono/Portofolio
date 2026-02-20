<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validasi form
        $validated = $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'subject' => 'required|max:100',
            'message' => 'required|min:10|max:1000',
        ]);
        
        // Data untuk email
        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ];
        
        try {
            // Kirim email ke diri sendiri (email Anda)
            Mail::to('reynoww12@gmail.com') // GANTI DENGAN EMAIL ANDA
                ->send(new ContactMail($data));
            
            // Opsional: Kirim auto-reply ke pengirim
            // Mail::to($data['email'])->send(new AutoReplyMail($data));
            
            return back()->with('success', 'Terima kasih! Pesan Anda sudah terkirim. Saya akan segera merespon.');
            
        } catch (\Exception $e) {
            // Log error untuk debugging
            Log::error('Email gagal dikirim: ' . $e->getMessage());
            
            return back()->with('error', 'Maaf, pesan gagal dikirim. Silakan coba lagi atau hubungi via kontak langsung.')
                         ->withInput();
        }
    }
}