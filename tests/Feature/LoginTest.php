<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function memvalidasi_field_username_dan_password(): void
    {
        // Uji tanpa mengisi field
        $response = $this->post('/login', []);

        $response->assertSessionHasErrors(['email', 'password']);

        // Uji dengan email tidak valid
        $response = $this->post('/login', [
            'email' => 'email-tidak-valid',
            'password' => 'password123',
        ]);

        $response->assertSessionHasErrors('email');
    }

    /** @test */
    public function memastikan_password_terenkripsi_di_database(): void
    {
        $password = 'password123';

        // Buat pengguna dengan password yang sudah dienkripsi
        $user = User::factory()->create([
            'password' => Hash::make($password),
        ]);

        // Pastikan password yang tersimpan adalah hash, bukan plaintext
        $this->assertTrue(Hash::check($password, $user->password));
        $this->assertNotEquals($password, $user->password);
    }

    /** @test */
    public function menangani_kegagalan_login_dengan_benar(): void
    {
        $user = User::factory()->create([
            'password' => Hash::make('password123'),
        ]);

        // Login dengan password yang salah
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password-salah',
        ]);

        // Pastikan pengguna tetap sebagai guest dan terdapat error pada session
        $this->assertGuest();
        $response->assertSessionHasErrors('email'); // Laravel menampilkan error pada field email saat login gagal
    }

    /** @test */
    public function mengelola_session_dengan_benar_saat_login_dan_logout(): void
    {
        // Buat pengguna untuk pengujian
        $user = User::factory()->create([
            'password' => Hash::make('password123'),
        ]);

        // Login dengan kredensial yang benar
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password123',
        ]);

        // Pastikan pengguna terautentikasi dan diarahkan ke halaman dashboard
        $this->assertAuthenticated();
        $response->assertRedirect(route('dashboard'));

        // Logout
        $this->post('/logout');

        // Pastikan pengguna sudah logout
        $this->assertGuest(); // Cek bahwa user sekarang adalah guest
    }
}
