<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Notification;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Notification::create([
            'company' => 'MejaKita',
            'job_title' => 'UI/UX Designer',
            'name' => 'Pekerja',
            'email' => 'pekerja@example.com',
            'contact_user' => '088213100722',
            'cv' => 'jobfinder-cv/cv.pdf',
            'status' => 'Accepted',
        ]);

        Notification::create([
            'company' => 'Critasena Cafe',
            'job_title' => 'Cashier',
            'name' => 'User',
            'email' => 'user@example.com',
            'contact_user' => '08822172230',
            'cv' => 'jobfinder-cv/cv.pdf',
            'status' => 'Rejected',
        ]);
    }
}
