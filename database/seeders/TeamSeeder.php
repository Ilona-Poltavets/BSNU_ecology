<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'image'=>'images/team/1.jpg',
            'nameUkr'=>'Олена Мітрясова',
            'nameEng'=>'Olena Mitryasova',
            'rankUkr'=>'професорка кафедри екології ЧНУ імені Петра Могили',
            'rankEng'=>'professor of the Ecology Department of Petro Mohyla National University',
            'aboutUkr'=>'Україна, координаторка',
            'aboutEng'=>'Ukraine, project manager',
        ]);
        DB::table('teams')->insert([
            'image'=>'images/team/2.jpg',
            'nameUkr'=>'Чад Стеддан',
            'nameEng'=>'Chad Staddon',
            'rankUkr'=>'професор Університету Західної Англії',
            'rankEng'=>'professor of the University of the West England (UWE)',
            'aboutUkr'=>'Велика Британія, головний радник',
            'aboutEng'=>'United Kingdom, Bristol, senior advisor',
        ]);
        DB::table('teams')->insert([
            'image'=>'images/team/3.jpg',
            'nameUkr'=>'Руслан Марійчук',
            'nameEng'=>'Ruslan Mariychuk',
            'rankUkr'=>'завідувач кафедри екології Університету Прешова',
            'rankEng'=>'head of the Ecology Department of the University of Presov',
            'aboutUkr'=>'Словаччина, провідний експерт',
            'aboutEng'=>'Slovakia, senior expert',
        ]);
        DB::table('teams')->insert([
            'image'=>'images/team/4.jpg',
            'nameUkr'=>'Віктор Смирнов',
            'nameEng'=>'Victor Smyrnov',
            'rankUkr'=>'доцент кафедри екології ЧНУ імені Петра Могили',
            'rankEng'=>'associate professor of the Ecology Department of Petro Mohyla National University',
            'aboutUkr'=>'Україна, провідний дослідник',
            'aboutEng'=>'Ukraine, senior researcher',
        ]);
        DB::table('teams')->insert([
            'image'=>'images/team/5.jpg',
            'nameUkr'=>'Вадим Чвир',
            'nameEng'=>'Vadym Chvyr',
            'rankUkr'=>'аспірант кафедри екології ЧНУ імені Петра Могили',
            'rankEng'=>'PhD student of the Ecology Department of Petro Mohyla National University',
            'aboutUkr'=>'Україна, молодий викладач',
            'aboutEng'=>'Ukraine, junior teacher',
        ]);
    }
}
