<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_view_login_page()
    {
        $response = $this->get('/login');
        
        // Pastikan halaman login bisa diakses
        $response->assertStatus(200);
    }

    /** @test */
    public function user_can_login_with_correct_credentials()
    {
        // Buat pengguna untuk pengujian
        $user = User::factory()->create([
            'email' => 'user@example.com',
            'password' => Hash::make('password123') // gunakan Hash::make untuk hashing password
        ]);

        // Kirim permintaan login dengan kredensial yang benar
        $response = $this->post('/login', [
            'email' => 'user@example.com',
            'password' => 'password123'
        ]);

        // Cek apakah pengguna berhasil login dan diarahkan ke halaman yang benar
        $response->assertRedirect('/profile/edit'); // sesuaikan '/home' dengan halaman tujuan setelah login di aplikasi
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function user_cannot_login_with_incorrect_password()
    {
        // Buat pengguna untuk pengujian
        $user = User::factory()->create([
            'email' => 'user@example.com',
            'password' => Hash::make('password123')
        ]);

        // Kirim permintaan login dengan password yang salah
        $response = $this->post('/login', [
            'email' => 'user@example.com',
            'password' => 'wrongpassword'
        ]);

        // Pastikan login gagal dan tidak dialihkan
        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    /** @test */
    public function user_can_logout_successfully()
    {
        // Buat dan autentikasi pengguna
        $user = User::factory()->create();
        $this->actingAs($user);

        // Lakukan logout
        $response = $this->post('/logout');

        // Pastikan pengguna telah logout dan dialihkan
        $response->assertRedirect('/');
        $this->assertGuest();
    }
}
