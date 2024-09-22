<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // Display the registration form
    public function showRegistrationForm()
    {
        return view('users.register');
    }

    // Handle the registration request
    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'Nama' => 'required|string|max:255',
            'NIM' => [
                'required',
                'regex:/^(\d{9}|\d{12})$/',
            ],
            'No_Telp' => [
                'required',
                'digits_between:9,13',
                'regex:/^\d+$/',
            ],
            'Email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users,Email',
                'regex:/^[a-zA-Z0-9._%+-]+@ftmm\.unair\.ac\.id$/',
            ],
            'Password' => 'required|string|min:8|confirmed',
        ],  [
            // Custom error messages
            'NIM.required' => 'Kolom NIM wajib diisi.',
            'NIM.regex' => 'NIM harus terdiri dari tepat 9 atau 12 digit angka.',
            'Email.required' => 'Kolom Email wajib diisi.',
            'Email.email' => 'Format Email tidak valid.',
            'Email.regex' => 'Email harus menggunakan domain ftmm.unair.ac.id.',
            'Email.unique' => 'Email sudah terdaftar.',
            'Password.required' => 'Kolom Kata Sandi wajib diisi.',
            'Password.min' => 'Kata Sandi harus minimal :min karakter.',
            'Password.confirmed' => 'Konfirmasi Kata Sandi tidak cocok.',
            'No_Telp.required' => 'Kolom Nomor Telepon wajib diisi.',
            'No_Telp.digits_between' => 'Nomor Telepon harus terdiri dari 9 hingga 13 digit.',
            'No_Telp.regex' => 'Nomor Telepon hanya boleh berisi angka.',
        ]);

        // Extract Angkatan from Email
        $email = $request->input('Email');
        $emailPrefix = explode('@', $email)[0];
        $angkatan = substr($emailPrefix, strrpos($emailPrefix, '-') + 1, 4);

        // Extract Program Studi from NIM
        $nim = $request->input('NIM');
        $programStudi = $this->getProgramStudi($nim);

        // Create the user
        $user = User::create([
            'Role' => 'mahasiswa',
            'Email' => $email,
            'Password' => Hash::make($request->input('Password')),
            'NIM' => $nim,
            'Nama' => $request->input('Nama'),
            'No_Telp' => $request->input('No_Telp'),
            'Program_Studi' => $programStudi,
            'Angkatan' => $angkatan,
        ]);

        // Log the user in (optional)
        // Auth::login($user);

        // Redirect to a desired page after registration
        return redirect()->route('login')->with('success', 'Registrasi berhasil!');
    }

    // Helper function to determine Program Studi
    private function getProgramStudi($nim)
    {
        $nimLength = strlen($nim);

        if ($nimLength == 9) {
            // For NIMs with 9 digits
            $programCode = substr($nim, 0, 3);
            switch ($programCode) {
                case '162':
                    return 'Rekayasa Nanoteknologi';
                case '163':
                    return 'Teknik Robotika dan Kecerdasan Buatan';
                case '164':
                    return 'Teknologi Sains Data';
                case '165':
                    return 'Teknik Industri';
                case '166':
                    return 'Teknik Elektro';
                // Add more cases if needed
                default:
                    return 'Unknown';
            }
        } elseif ($nimLength == 12) {
            // For NIMs with 12 digits
            $digit7 = substr($nim, 6, 1);
            switch ($digit7) {
                case '1':
                    return 'Teknologi Sains Data';
                case '2':
                    return 'Teknik Robotika dan Kecerdasan Buatan';
                case '3':
                    return 'Rekayasa Nanoteknologi';
                case '4':
                    return 'Teknik Elektro';
                case '5':
                    return 'Teknik Industri';
                // Add more cases based on the 7th digit if needed
                default:
                    return 'Unknown';
            }
        } else {
            return 'Unknown';
        }
    }
}
