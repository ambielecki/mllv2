<?php

use Illuminate\Database\Seeder;
use maldenll\League;

class LeagueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $league = new League();
        $league->name = "Majors";
        $league->address = "majors";
        $league->level = 1;
        $league->ages = "10-12";
        $league->standings = TRUE;
        $league->save();

        $league = new League();
        $league->name = "Minors";
        $league->address = "minors";
        $league->level = 2;
        $league->ages = "9-11";
        $league->standings = TRUE;
        $league->save();


        $league = new League();
        $league->name = "Farm";
        $league->address = "farm";
        $league->level = 3;
        $league->ages = "7-8";
        $league->standings = FALSE;
        $league->save();


        $league = new League();
        $league->name = "Tee Ball";
        $league->address = "tball";
        $league->level = 4;
        $league->ages = "4-6";
        $league->standings = FALSE;
        $league->save();

    }
}
