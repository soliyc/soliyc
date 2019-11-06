<?php

use App\Http\Model\GroupDescription;
use Illuminate\Database\Seeder;

class GroupDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(GroupDescription::class)->create();
    }
}
