<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LifeStyleSeeder::class,
            TrainingLocationSeeder::class,
            MenuCalorySeeder::class,
            MenuTypeSeeder::class,
            PersonalAccountSeeder::class,
            MenuSeeder::class,
            UserMenuSeeder::class,
            FoodCalendarSeeder::class,
            TrainingSeeder::class,
            TrainingUserSeeder::class,
            ActivityCalendarSeeder::class,
            NotificationSeeder::class,
            QuestionSeeder::class,
            PhysicsParametersSeeder::class,
            TopicSeeder::class,
            DaysSeeder::class,
            MainPageSeeder::class,
            MenuDaysSeeder::class,
            PricingSeeder::class,
            MarathonAndProgramSeeder::class,
            AccessHistorySeeder::class,
        ]);
    }
}
