<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        $user = $request->query('user');

        $statusMessage = $user
            ? "Selamat datang, {$user}!"
            : 'Selamat datang di Academic Profile ITS.';

        return view('home', [
            'title' => 'Beranda',
            'user' => $user,
            'statusMessage' => $statusMessage,
            'darkMode' => false,
        ]);
    }

    public function profile($nrp = null)
    {
        $student = [
            '5025241058' => [
                'name' => 'Addien Zafriyan Al Akhsan',
                'nrp' => '5025241058',
                'program' => 'Teknik Informatika',
                'institution' => 'Institut Teknologi Sepuluh Nopember',
                'status' => 'Mahasiswa Aktif',
                'year' => '2024',
            ],

            '5025241104' => [
                'name' => 'Raden Kurniawan Agung Fitrianto',
                'nrp' => '5025241104',
                'program' => 'Teknik Informatika',
                'institution' => 'Institut Teknologi Sepuluh Nopember',
                'status' => 'Mahasiswa Aktif',
                'year' => '2024',
            ],

            '5025241092' => [
                'name' => 'Abdullah Sultan Barizy',
                'nrp' => '5025241092',
                'program' => 'Teknik Informatika',
                'institution' => 'Institut Teknologi Sepuluh Nopember',
                'status' => 'Mahasiswa Aktif',
                'year' => '2024',
            ],

            '5025241090' => [
                'name' => 'Willy Dava Nugraha',
                'nrp' => '5025241090',
                'program' => 'Teknik Informatika',
                'institution' => 'Institut Teknologi Sepuluh Nopember',
                'status' => 'Mahasiswa Aktif',
                'year' => '2024',
            ],

            '5025241074' => [
                'name' => 'Anak Agung Putu Arda Nareswara',
                'nrp' => '5025241074',
                'program' => 'Teknik Informatika',
                'institution' => 'Institut Teknologi Sepuluh Nopember',
                'status' => 'Mahasiswa Aktif',
                'year' => '2024',
            ],

            '5025241065' => [
                'name' => 'Aji Zaenul Musthofa',
                'nrp' => '5025241065',
                'program' => 'Teknik Informatika',
                'institution' => 'Institut Teknologi Sepuluh Nopember',
                'status' => 'Mahasiswa Aktif',
                'year' => '2024',
            ],
        ];

        $student = $nrp
            ? ($student[$nrp] ?? abort(404))
            : $student['5025241058'];
        return view('mahasiswa', [
            'title' => 'Profil Mahasiswa',
            'student' => $student,
            'darkMode' => false,
        ]);
    }

    public function agent(Request $request)
    {
        $tema = $request->query('tema', 'Magentic AI');
        $darkMode = $request->query('mode') === 'dark';

        return view('agents', [
            'title' => 'Ide Agentic AI',
            'tema' => $tema,
            'darkMode' => $darkMode,
        ]);
    }

    public function submitIdea(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'idea' => ['required', 'string', 'max:1000'],
        ]);

        return redirect()
            ->route('agent')
            ->with('success', 'Ide berhasil dikirim. Terima kasih!');
    }

    public function ipk($ip1, $ip2)
    {
        $jumlah = $ip1 + $ip2;
        $rataRata = $jumlah / 2;

        return view('ipk', [
            'title' => 'Kalkulator IPK',
            'ip1' => $ip1,
            'ip2' => $ip2,
            'jumlah' => $jumlah,
            'rataRata' => $rataRata,
            'darkMode' => false,
        ]);
    }
}