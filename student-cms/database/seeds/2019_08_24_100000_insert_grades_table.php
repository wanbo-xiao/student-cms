<?php
use Illuminate\Database\Seeder;
use App\Grade;
class InsertGradesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->delete();
        Grade::create([
            'user_id' => 1000000001,
            'math'    => 99,
            'english'    => 80,
            'c'    => 96,
            'sport'    => 95,
            'think'    => 99,
            'soft'    => 98,
            ]);
        Grade::create([
            'user_id' => 1000000002,
            ]);
    }
}