<?php

use Carbon\Carbon;
use App\Models\Album;
use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Album::create([
            'name'    => 'Album personnel',
            'user_id' => 1
        ]);

        $now = Carbon::now();

        \DB::table('album_image')->insert([
            0  => [
                'album_id'   => 1,
                'image_id'   => 44,
                'created_at' => $now,
                'updated_at' => $now
            ],
            1  => [
                'album_id'   => 1,
                'image_id'   => 19,
                'created_at' => $now,
                'updated_at' => $now
            ],
            2  => [
                'album_id'   => 1,
                'image_id'   => 25,
                'created_at' => $now,
                'updated_at' => $now
            ],
        ]);

    }
}
