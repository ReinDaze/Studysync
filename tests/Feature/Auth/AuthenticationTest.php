<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get('/login');

        // Pastikan halaman login bisa diakses
        $response->assertStatus(200);
    }

    public function test_users_can_authenticate_using_the_login_screen(): void
    {
        // Buat pengguna untuk pengujian
        $user = User::factory()->create([
            'password' => Hash::make('password') // Hash password agar sesuai
        ]);

        // Kirim permintaan login
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        // Pastikan pengguna terautentikasi dan diarahkan ke halaman yang benar
        $this->assertAuthenticatedAs($user);
        $response->assertRedirect('/profile/edit'); // Sesuaikan '/profile/edit' sesuai dengan rute aplikasi
    }

    public function test_users_can_not_authenticate_with_invalid_password(): void
    {
        $user = User::factory()->create([
            'password' => Hash::make('password') // pastikan password di-hash
        ]);

        // Kirim permintaan login dengan password yang salah
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        // Pastikan pengguna tetap sebagai guest
        $this->assertGuest();
    }

    public function test_users_can_logout(): void
    {
        $user = User::factory()->create([
            'password' => Hash::make('password') // pastikan password di-hash
        ]);

        // Autentikasi pengguna dan logout
        $response = $this->actingAs($user)->post('/logout');

        // Pastikan pengguna telah logout dan diarahkan ke halaman yang benar
        $this->assertGuest();
        $response->assertRedirect('/');
    }
}
