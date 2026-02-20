<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;
use App\Models\Experience;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Hapus data lama dulu (optional)
        Skill::truncate();
        Experience::truncate();
        
        // Seed Skills - PASTIKAN TIDAK DOBEL
        $skills = [
            // Frontend - UNIK, TIDAK ADA YANG SAMA
            ['name' => 'HTML', 'category' => 'frontend', 'percentage' => 90, 'icon' => 'fab fa-html5'],
            ['name' => 'CSS', 'category' => 'frontend', 'percentage' => 85, 'icon' => 'fab fa-css3'],
            ['name' => 'JavaScript', 'category' => 'frontend', 'percentage' => 75, 'icon' => 'fab fa-js'],
            ['name' => 'PHP', 'category' => 'frontend', 'percentage' => 70, 'icon' => 'fab fa-php'],
            ['name' => 'Laravel', 'category' => 'frontend', 'percentage' => 65, 'icon' => 'fab fa-laravel'],
            
            // Design - TERPISAH
            ['name' => 'Figma', 'category' => 'design', 'percentage' => 85, 'icon' => 'fab fa-figma'],
            ['name' => 'Canva', 'category' => 'design', 'percentage' => 90, 'icon' => 'fas fa-palette'],
            ['name' => 'UI Design', 'category' => 'design', 'percentage' => 80, 'icon' => 'fas fa-mouse-pointer'],
            ['name' => 'Responsive Design', 'category' => 'design', 'percentage' => 85, 'icon' => 'fas fa-mobile-alt'],
        ];

        // Gunakan firstOrCreate untuk menghindari duplikat
        foreach ($skills as $skill) {
            Skill::firstOrCreate(
                ['name' => $skill['name'], 'category' => $skill['category']], // kondisi cek
                $skill // data yang diisi jika belum ada
            );
        }

        // Seed Experiences (sama seperti sebelumnya)
        // ...
    }
}