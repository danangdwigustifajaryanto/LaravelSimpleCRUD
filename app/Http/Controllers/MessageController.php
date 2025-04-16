<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Daftarin Message yang ada di Model agar classnya bisa dipakai di sini.
use App\Models\Message;

class MessageController extends Controller
{
    // READ!!------
    //Untuk membaca data dari database
    public function index()
    {
        $messages = Message::all(); // Ambil semua data dari tabel messages
        return view('messages', ['messages' => $messages]); // maksudnya apa?
    }

    // CREATE!!------
    //Untuk mengirim data ke database dari form yang ada di view
    public function store(Request $request)
    {
        //Validasi data dari form yang dikirim.
        $request->validate([
            'text' => 'required|string|max:255'
        ]);

        //Bikin data baru di database table messages
        Message::create([
            'text' => $request->text // Data akan dikirim ke kolom 'text' di tabel 'messages'
        ]);

        return redirect('/messages'); // Balikin ke halaman messages setelah input
    }

    //UPDATE!!----
    //Menampilkan form Edit dan mencari data untuk di edit
    public function edit($id)
    {
        $message = Message::findOrFail($id); // Cari data berdasarkan ID
        return view('edit', compact('message')); // Menampilkan view edit dengan data
    }

    public function update(Request $request, $id)
    {
        $request->validate([ //Validasi seperti biasa
            'text' => 'required|string|max:255'
        ]);
    
        //Cari data kalau tidak ada maka menampilkan 404
        $message = Message::findOrFail($id); 
        $message->update([
            'text' => $request->text
        ]);
    
        return redirect('/messages');
    }

    //DELETE!!!-----
    public function destroy($id)
    {
        $message = Message::findOrFail($id);
        $message->delete();
    
        return redirect('/messages');
    }

}
