<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use App\Models\Cost;
use App\Models\User;
use App\Models\Room;
use App\Models\CostFacility;



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

        // Menjalankan seeder cost facility
        $this->call(CostFacilitySeeder::class);
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
        $faker = Faker::create();

        $ownerIds = User::whereIn('id', [2, 5])->pluck('id')->toArray();

        foreach (range(1, 30) as $index) {
            $costName = $faker->word;
            $uniqueCostName = $costName;
            $count = 1;

            while (Cost::where('cost_name', $uniqueCostName)->exists()) {
                $uniqueCostName = $costName . '-' . $count;
                $count++;
            }

            $cost = Cost::create([
                'user_id' => $faker->randomElement($ownerIds),
                'cost_name' => $uniqueCostName,
                'total_kamar' => $faker->numberBetween(1, 10),
                'cost_type' => $faker->randomElement(['pria', 'wanita', 'campuran']),
                'available_room' => $faker->numberBetween(0, 10),
                'cost_location' => $faker->randomElement(['Dr. Mansur', 'Jamin Ginting', 'Setia Budi', 'Iskandar muda']),
                'cost_address' => $faker->address,
                'description' => $faker->paragraph,
                'contact_person' => $faker->unique(true)->numberBetween(100000000000, 999999999999),
                'night_limit' => $faker->numberBetween(1, 10),
                'long_add' => $faker->longitude,
                'lat_add' => $faker->latitude,
            ]);

            $cost->slug = Str::slug($cost->cost_name);
            $cost->save();
        }
    }
}


class CostFacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $costIds = Cost::pluck('id')->toArray();

        foreach ($costIds as $costId) {
            CostFacility::create([
                'cost_id' => $costId,
                'car_park' => $faker->randomElement(['yes', 'no']),
                'bike_park' => $faker->randomElement(['yes', 'no']),
                'wifi' => $faker->randomElement(['yes', 'no']),
                'kitchen' => $faker->randomElement(['yes', 'no']),
                'security' => $faker->randomElement(['yes', 'no']),
                'electric' => $faker->randomElement(['yes', 'no']),
                'pam' => $faker->randomElement(['yes', 'no']),
                'bathroom' => $faker->randomElement(['inside', 'outside']),
            ]);
        }
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
        $faker = Faker::create();

        $costIds = Cost::pluck('id')->toArray();

        foreach ($costIds as $costId) {
            $roomCount = $faker->numberBetween(1, 5);
            for ($i = 1; $i <= $roomCount; $i++) {
                Room::create([
                    'cost_id' => $costId,
                    'room_name' => $faker->word,
                    'roomsize' => $faker->numberBetween(10, 50),
                    'tableset' => $faker->randomElement(['yes', 'no']),
                    'wardrobe' => $faker->randomElement(['yes', 'no']),
                    'closet' => $faker->randomElement(['duduk', 'jongkok']),
                    'bed' => $faker->randomElement(['yes', 'no']),
                    'fan' => $faker->randomElement(['yes', 'no']),
                    'ac' => $faker->randomElement(['yes', 'no']),
                    'electric' => $faker->randomElement(['yes', 'no']),
                    'pam' => $faker->randomElement(['yes', 'no']),
                    'price' => $faker->numberBetween(500000, 1200000),
                    'photo' => $faker->imageUrl(),
                ]);
            }
        }
    }
}