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
        DB::table('costs')->insert([
            'user_id' => '2',
            'cost_name' => 'Kos Azis',
            'total_kamar' => '5',
            'cost_type' => 'pria',
            'available_room' => '2',
            'photo' => '',
            'cost_location' => 'Iskandar muda',
            'cost_address' => 'Jalan Iskandar Muda No. 24C',
            'description' => 'Kos Pak Azis yang berlokasi di Iskandar muda dengan kamar seluas 12 meter persegi atau 4 x 3 meter.',
            'contact_person' => '081223146587',
            'night_limit' => '2',
            'long_add' => '',
            'lat_add' => '',
        ]);

        DB::table('costs')->insert([
            'user_id' => '2',
            'cost_name' => 'Kos Ariyo',
            'total_kamar' => '9',
            'cost_type' => 'wanita',
            'available_room' => '5',
            'photo' => '',
            'cost_location' => 'Dr. Mansur',
            'cost_address' => 'Jalan Dr. Mansur No. 65B',
            'description' => 'Kos Pak Azis yang berlokasi di Iskandar muda dengan kamar seluas 12 meter persegi atau 4 x 3 meter.',
            'contact_person' => '083265458195',
            'night_limit' => '2',
            'long_add' => '',
            'lat_add' => '',
        ]);

        DB::table('costs')->insert([
            'user_id' => '2',
            'cost_name' => 'Kos Susan',
            'total_kamar' => '9',
            'cost_type' => 'wanita',
            'available_room' => '5',
            'photo' => '',
            'cost_location' => 'Dr. Mansur',
            'cost_address' => 'Jalan Dr. Mansur No. 62E',
            'description' => 'Kos Bu Susan yang berlokasi di Dr. Mansur dengan kamar seluas 16 meter persegi atau 4 x 4 meter.',
            'contact_person' => '083265458195',
            'night_limit' => '2',
            'long_add' => '',
            'lat_add' => '',
        ]);

        DB::table('costs')->insert([
            'user_id' => '2',
            'cost_name' => 'Kos Budi',
            'total_kamar' => '5',
            'cost_type' => 'wanita',
            'available_room' => '4',
            'photo' => '',
            'cost_location' => 'Dr. Mansur',
            'cost_address' => 'Jalan Dr. Mansur No. 1A',
            'description' => 'Kos Pak Budi yang berlokasi di Dr. Mansur dengan kamar seluas 20 meter persegi atau 5 x 4 meter.',
            'contact_person' => '084658973121',
            'night_limit' => '1',
            'long_add' => '',
            'lat_add' => '',
        ]);

        DB::table('costs')->insert([
            'user_id' => '2',
            'cost_name' => 'Kos Santi',
            'total_kamar' => '6',
            'cost_type' => 'campuran',
            'available_room' => '3',
            'photo' => '',
            'cost_location' => 'Setia Budi',
            'cost_address' => 'Jalan Setia Budi No. 4C',
            'description' => 'Kos Bu Santi yang berlokasi di Dr. Mansur dengan kamar seluas 20 meter persegi atau 5 x 4 meter.',
            'contact_person' => '082345646545',
            'night_limit' => '4',
            'long_add' => '',
            'lat_add' => '',
        ]);

        DB::table('costs')->insert([
            'user_id' => '2',
            'cost_name' => 'Kos Sandi',
            'total_kamar' => '10',
            'cost_type' => 'pria',
            'available_room' => '1',
            'photo' => '',
            'cost_location' => 'Iskandar Muda',
            'cost_address' => 'Jalan Iskandar muda No. 8E',
            'description' => 'Kos Pak Sandi yang berlokasi di Iskandar Muda dengan kamar seluas 12 meter persegi atau 3 x 4 meter.',
            'contact_person' => '082346531291',
            'night_limit' => '1',
            'long_add' => '',
            'lat_add' => '',
        ]);

        DB::table('costs')->insert([
            'user_id' => '5',
            'cost_name' => 'Kos Rossy',
            'total_kamar' => '8',
            'cost_type' => 'wanita',
            'available_room' => '3',
            'photo' => '',
            'cost_location' => 'Iskandar Muda',
            'cost_address' => 'Jalan Iskandar muda No. 108U',
            'description' => 'Kos Bu Rossy yang berlokasi di Iskandar Muda dengan kamar seluas 12 meter persegi atau 3 x 4 meter.',
            'contact_person' => '081398624299',
            'night_limit' => '1',
            'long_add' => '',
            'lat_add' => '',
        ]);

        DB::table('costs')->insert([
            'user_id' => '5',
            'cost_name' => 'Kos Harry',
            'total_kamar' => '4',
            'cost_type' => 'pria',
            'available_room' => '1',
            'photo' => '',
            'cost_location' => 'Setia Budi',
            'cost_address' => 'Jalan Setia Budi No. 12A',
            'description' => 'Kos Pak Harry yang berlokasi di Setia Budi dengan kamar seluas 9 meter persegi atau 3 x 3 meter.',
            'contact_person' => '083149134751',
            'night_limit' => '1',
            'long_add' => '',
            'lat_add' => '',
        ]);

        DB::table('costs')->insert([
            'user_id' => '5',
            'cost_name' => 'Kos Sani',
            'total_kamar' => '6',
            'cost_type' => 'pria',
            'available_room' => '2',
            'photo' => '',
            'cost_location' => 'Iskandar Muda',
            'cost_address' => 'Jalan Iskandar Muda No. 21C',
            'description' => 'Kos Bu Sani yang berlokasi di Iskandar Muda dengan kamar seluas 9 meter persegi atau 3 x 3 meter.',
            'contact_person' => '083149134751',
            'night_limit' => '3',
            'long_add' => '',
            'lat_add' => '',
        ]);

        DB::table('costs')->insert([
            'user_id' => '5',
            'cost_name' => 'Kos Kelly',
            'total_kamar' => '7',
            'cost_type' => 'campuran',
            'available_room' => '2',
            'photo' => '',
            'cost_location' => 'Setia Budi',
            'cost_address' => 'Jalan Setia Budi No. 40B',
            'description' => 'Kos Bu Kelly yang berlokasi di Iskandar Muda dengan kamar seluas 9 meter persegi atau 3 x 3 meter.',
            'contact_person' => '083149134751',
            'night_limit' => '1',
            'long_add' => '',
            'lat_add' => '',
        ]);

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
                'photo' => $faker->imageUrl(),
                'cost_location' => $faker->randomElement(['Dr. Mansur', 'Jamin Ginting', 'Setia Budi', 'Iskandar Muda']),
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
