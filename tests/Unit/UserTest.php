<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_creation()
    {
        // Tạo người dùng bằng Factory
        $user = User::factory()->create([
            'name'  => 'Nguyễn Văn A',
            'email' => 'test@example.com',
        ]);

        // Kiểm tra dữ liệu trong database
        $this->assertDatabaseHas('users', [
            'email' => 'test@example.com'
        ]);
    }
}
