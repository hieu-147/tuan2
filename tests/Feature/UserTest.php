<?php

// tests/Feature/UserApiTest.php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_all_users()
    {
        // Tạo 5 người dùng
        User::factory(5)->create();

        // Gửi request GET đến endpoint
        $response = $this->getJson('/api/users');

        // Kiểm tra mã trạng thái HTTP và số lượng người dùng trả về
        $response->assertStatus(200)
                 ->assertJsonCount(5);
    }
}
