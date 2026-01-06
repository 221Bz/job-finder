<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobFinder;

class JobFinderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobFinder::create([
            'logo' => 'jobfinder-images/mejakita.png',
            'company' => 'MejaKita',
            'job_title' => 'UI/UX Designer',
            'notes' => 'We are looking for a creative and detail-oriented UI/UX Designer to help us craft seamless and engaging user experiences across our digital platforms. You will work closely with product managers and developers to turn complex problems into simple and elegant design solutions.',
            'location' => 'Jl. Simpang Janti Bar., Bandungrejosari, Kec. Sukun, Kota Malang, Jawa Timur 65147',
            'age' => '17',
            'salary' => 'Rp 10.000.000 - Rp 12.000.000',
            'job_type' => 'Full time',
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.9898755742447!2d112.61894819999999!3d-7.9999801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7883d00821a135%3A0xa731053b3fa2cac7!2sMejaKita%20Office!5e0!3m2!1sen!2sid!4v1747034532122!5m2!1sen!2sid',
            'contact' => 'https://instagram.com/mejakita',
        ]);

        JobFinder::create([
            'logo' => 'jobfinder-images/critasena.png',
            'company' => 'Critasena Cafe',
            'job_title' => 'Cashier',
            'notes' => 'We’re looking for a friendly and detail-oriented Cashier to join our front-of-house team. In this role, you will handle transactions, assist customers, and maintain a clean and organized checkout area. You’ll be the first and last interaction many customers have, so a positive attitude is a must!',
            'location' => 'Jl. Kahuripan No.1, Klojen, Kec. Klojen, Kota Malang, Jawa Timur 65119',
            'age' => '19',
            'salary' => 'Rp 2.000.000 - Rp 3.000.000',
            'job_type' => 'Part time',
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.2237864100075!2d112.6316331!3d-7.975807800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629b758cab76d%3A0x75b892128321c6a8!2sCritasena%20Cafe%20Malang!5e0!3m2!1sen!2sid!4v1747035369445!5m2!1sen!2sid',
            'contact' => 'https://instagram.com/critasena',
        ]);

        JobFinder::create([
            'logo' => 'jobfinder-images/jnt.png',
            'company' => 'J&T',
            'job_title' => 'Courier',
            'notes' => 'We are hiring a reliable Courier to ensure timely and safe delivery of packages. You’ll represent our company on the road and interact directly with customers. This role requires strong time management and a commitment to getting things done right.',
            'location' => 'Jl. S. Supriadi No.34b, Sukun, Kec. Sukun, Kota Malang, Jawa Timur 65147',
            'age' => '22',
            'salary' => 'Rp 2.000.000 - Rp 3.000.000',
            'job_type' => 'Full time',
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126425.45959658404!2d112.4750556433594!3d-8.020000199999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e789d5f59abf207%3A0xe7e045f2944e8b80!2sJ%26T%20EXPRESS%20JNT%20MALANG!5e0!3m2!1sen!2sid!4v1747035523046!5m2!1sen!2sid',
            'contact' => 'http://wa.me/6281999770666',
        ]);

        JobFinder::create([
            'logo' => 'jobfinder-images/bankbri.png',
            'company' => 'Bank BRI',
            'job_title' => 'Security',
            'notes' => 'We are seeking a responsible Security Guard to maintain safety and order within our premises. You will monitor activity, control building access, and respond to emergencies when needed. Your presence ensures peace of mind for staff and visitors alike.',
            'location' => 'Jl. Surabaya No.6, Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65115',
            'age' => '25',
            'salary' => 'Rp 4.000.000 - Rp 6.000.000',
            'job_type' => 'Full time',
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63221.16771837158!2d112.54577852167968!3d-7.9655348999999935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788281ba8c9f3d%3A0x676b037ce1d30b87!2sBANK%20BRI%20KK%20UM!5e0!3m2!1sen!2sid!4v1747035579865!5m2!1sen!2sid',
            'contact' => 'http://wa.me/0341555933',
        ]);
    }
}