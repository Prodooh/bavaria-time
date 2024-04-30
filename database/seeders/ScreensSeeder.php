<?php

namespace Database\Seeders;

use App\Models\Screen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScreensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $indoorData = [
            ['name' => 'I-CR-016', 'size' => '800x464', 'type' => 'HORARIO'],
            ['name' => 'I-CR-017', 'size' => '1024x640', 'type' => 'HORARIO'],
            ['name' => 'I-CR-022', 'size' => '512x384', 'type' => 'HORARIO'],
            ['name' => 'I-CR-026', 'size' => '1080x1920', 'type' => 'HORARIO'],
            ['name' => 'I-CR-028', 'size' => '1080x1920', 'type' => 'HORARIO'],
            ['name' => 'I-CR-003', 'size' => '1056x864', 'type' => 'TEMPERATURA'],
            ['name' => 'I-CR-005', 'size' => '512x384', 'type' => 'TEMPERATURA'],
            ['name' => 'I-CR-006', 'size' => '512x384', 'type' => 'TEMPERATURA'],
            ['name' => 'I-CR-008', 'size' => '448x576', 'type' => 'TEMPERATURA'],
            ['name' => 'I-CR-013', 'size' => '512x384', 'type' => 'TEMPERATURA'],
        ];
        foreach ($indoorData as $data) {
            Screen::create([
                'name' => $data['name'],
                'size' => $data['size'],
                'type' => $data['type'],
            ]);
        }

    }
}
