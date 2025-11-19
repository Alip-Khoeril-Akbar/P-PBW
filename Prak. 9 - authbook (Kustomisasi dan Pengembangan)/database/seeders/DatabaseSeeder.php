<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Admin Filament default
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'role' => 'admin', // tambahkan role agar konsisten
        ]);

        // Panggil seeder role-based users
        $this->call(UserRoleSeeder::class);

        // Generate authors
        $authors = Author::factory(10)->create();

        // Generate books
        Book::factory(50)->create([
            'author_id' => fn() => $authors->random()->id,
        ]);
    }
}
