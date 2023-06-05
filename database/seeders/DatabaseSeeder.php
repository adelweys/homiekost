<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menjalankan seeder User
        $this->call(UserSeeder::class);

        // Menjalankan seeder Cost
        $this->call(CostSeeder::class);

        // Menjalankan seeder Room
        $this->call(RoomSeeder::class);
    }
}

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed data user admin
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'level' => 'admin',
            'photo' => 'admin.jpg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed data user owner
        DB::table('users')->insert([
            'name' => 'Owner',
            'email' => 'owner@example.com',
            'password' => Hash::make('password'),
            'level' => 'owner',
            'photo' => 'owner.jpg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed data user user
        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
            'level' => 'user',
            'photo' => 'user.jpg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed data user admin2
        DB::table('users')->insert([
            'name' => 'Admin2',
            'email' => 'admin2@example.com',
            'password' => Hash::make('password'),
            'level' => 'admin',
            'photo' => 'admin2.jpg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed data user owner2
        DB::table('users')->insert([
            'name' => 'Owner2',
            'email' => 'owner2@example.com',
            'password' => Hash::make('password'),
            'level' => 'owner',
            'photo' => 'owner2.jpg',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Tambahkan data user lainnya jika diperlukan
    }
}


class CostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed data cost 1
        DB::table('costs')->insert([
            'user_id' => 1,
            'cost_name' => 'Kos 1',
            'total_kamar' => 10,
            'cost_type' => 'pria',
            'available_room' => 5,
            'cost_address' => 'Jl. Contoh No. 1',
            'description' => 'Kos dengan fasilitas lengkap',
            'contact_person' => '081234567890',
            'night_limit' => '22:00',
            'long_add' => '123.456',
            'lat_add' => '987.654',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed data cost 2
        DB::table('costs')->insert([
            'user_id' => 2,
            'cost_name' => 'Kos 2',
            'total_kamar' => 15,
            'cost_type' => 'wanita',
            'available_room' => 8,
            'cost_address' => 'Jl. Contoh No. 2',
            'description' => 'Kos nyaman dengan harga terjangkau',
            'contact_person' => '081234567891',
            'night_limit' => '23:00',
            'long_add' => '654.321',
            'lat_add' => '123.789',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed data cost 3
        DB::table('costs')->insert([
            'user_id' => 3,
            'cost_name' => 'Kos 3',
            'total_kamar' => 12,
            'cost_type' => 'campuran',
            'available_room' => 6,
            'cost_address' => 'Jl. Contoh No. 3',
            'description' => 'Kos strategis dekat pusat kota',
            'contact_person' => '081234567892',
            'night_limit' => '24:00',
            'long_add' => '987.123',
            'lat_add' => '456.789',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed data cost 4
        DB::table('costs')->insert([
            'user_id' => 4,
            'cost_name' => 'Kos 4',
            'total_kamar' => 8,
            'cost_type' => 'pria',
            'available_room' => 3,
            'cost_address' => 'Jl. Contoh No. 4',
            'description' => 'Kos dengan fasilitas lengkap',
            'contact_person' => '081234567893',
            'night_limit' => '21:00',
            'long_add' => '789.456',
            'lat_add' => '321.987',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed data cost 5
        DB::table('costs')->insert([
            'user_id' => 5,
            'cost_name' => 'Kos 5',
            'total_kamar' => 20,
            'cost_type' => 'wanita',
            'available_room' => 10,
            'cost_address' => 'Jl. Contoh No. 5',
            'description' => 'Kos nyaman dengan harga terjangkau',
            'contact_person' => '081234567894',
            'night_limit' => '20:00',
            'long_add' => '456.123',
            'lat_add' => '789.321',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Tambahkan data cost lainnya jika diperlukan
    }
}

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed data room 1
        DB::table('rooms')->insert([
            'cost_id' => 1,
            'roomsize' => 3,
            'tableset' => 'yes',
            'wardrobe' => 'yes',
            'bed' => 'yes',
            'fan' => 'yes',
            'ac' => 'no',
            'electric' => 'yes',
            'wifi' => 'yes',
            'pam' => 'no',
            'price' => 500000,
            'photo' => 'room1.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed data room 2
        DB::table('rooms')->insert([
            'cost_id' => 2,
            'roomsize' => 2,
            'tableset' => 'no',
            'wardrobe' => 'yes',
            'bed' => 'yes',
            'fan' => 'no',
            'ac' => 'yes',
            'electric' => 'yes',
            'wifi' => 'yes',
            'pam' => 'yes',
            'price' => 700000,
            'photo' => 'room2.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed data room 3
        DB::table('rooms')->insert([
            'cost_id' => 3,
            'roomsize' => 4,
            'tableset' => 'yes',
            'wardrobe' => 'no',
            'bed' => 'yes',
            'fan' => 'yes',
            'ac' => 'yes',
            'electric' => 'yes',
            'wifi' => 'no',
            'pam' => 'no',
            'price' => 600000,
            'photo' => 'room3.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed data room 4
        DB::table('rooms')->insert([
            'cost_id' => 4,
            'roomsize' => 1,
            'tableset' => 'no',
            'wardrobe' => 'no',
            'bed' => 'yes',
            'fan' => 'no',
            'ac' => 'no',
            'electric' => 'yes',
            'wifi' => 'yes',
            'pam' => 'yes',
            'price' => 400000,
            'photo' => 'room4.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed data room 5
        DB::table('rooms')->insert([
            'cost_id' => 5,
            'roomsize' => 2,
            'tableset' => 'yes',
            'wardrobe' => 'yes',
            'bed' => 'yes',
            'fan' => 'yes',
            'ac' => 'yes',
            'electric' => 'yes',
            'wifi' => 'yes',
            'pam' => 'yes',
            'price' => 800000,
            'photo' => 'room5.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Tambahkan data room lainnya jika diperlukan
    }
}
