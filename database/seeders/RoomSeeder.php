<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            array('code' => 'GU.601', 'name' => 'Workspace Virtual Reality', 'building' => 'Gedung Utama', 'capacity' => 0,),
            array('code' => 'GU.604', 'name' => 'Workspace Multimedia', 'building' => 'Gedung Utama', 'capacity' => 0,),
            array('code' => 'GU.606', 'name' => 'Workspace Rendering', 'building' => 'Gedung Utama', 'capacity' => 0,),
            array('code' => 'GU.607', 'name' => 'Lab Motion Capture', 'building' => 'Gedung Utama', 'capacity' => 0,),
            array('code' => 'GU.608', 'name' => 'Workspace Rendering', 'building' => 'Gedung Utama', 'capacity' => 0,),
            array('code' => 'GU.702', 'name' => 'Lab Komputer/Praktikum', 'building' => 'Gedung Utama', 'capacity' => 0,),
            array('code' => 'GU.704', 'name' => 'Workspace Software Development', 'building' => 'Gedung Utama', 'capacity' => 0,),
            array('code' => 'GU.705', 'name' => 'Workspace Animation Production', 'building' => 'Gedung Utama', 'capacity' => 0,),
            array('code' => 'GU.706', 'name' => 'Workspace Software Development', 'building' => 'Gedung Utama', 'capacity' => 0,),
            array('code' => 'GU.707', 'name' => 'Workspace Creative Art Studio', 'building' => 'Gedung Utama', 'capacity' => 0,),
            array('code' => 'GU.707', 'name' => 'Workspace Creative Art Studio', 'building' => 'Gedung Utama', 'capacity' => 0,),
            array('code' => 'GU.805', 'name' => 'Workspace Data Science', 'building' => 'Gedung Utama', 'capacity' => 0,),
            array('code' => 'RTF.III.1', 'name' => 'Studio Fotografi', 'building' => 'Teaching Factory', 'capacity' => 0,),
            array('code' => 'RTF.III.3', 'name' => 'Studio Broadcasting', 'building' => 'Teaching Factory', 'capacity' => 0,),
            array('code' => 'RTF.III.6', 'name' => 'Workspace Editting', 'building' => 'Teaching Factory', 'capacity' => 0,),
            array('code' => 'RTF.IV.1', 'name' => 'Lab Clay Modelling', 'building' => 'Teaching Factory', 'capacity' => 0,),
            array('code' => 'RTF.IV.2', 'name' => 'Lab Animasi', 'building' => 'Teaching Factory', 'capacity' => 0,),
            array('code' => 'RTF.IV.4', 'name' => 'Lab Audio', 'building' => 'Teaching Factory', 'capacity' => 0,),
            array('code' => 'RTF.V.1', 'name' => 'Workspace Photogrammetry', 'building' => 'Teaching Factory', 'capacity' => 0,),
            array('code' => 'RTF.V.2', 'name' => 'Workspace GIS', 'building' => 'Teaching Factory', 'capacity' => 0,),
            array('code' => 'RTF.V.4', 'name' => 'Workspace Remote Sensing', 'building' => 'Teaching Factory', 'capacity' => 0,),
            array('code' => 'TA.X.3', 'name' => 'Cyber Physical System Security Lab', 'building' => 'Tower A', 'capacity' => 0,),
            array('code' => 'TA.X.4', 'name' => 'Workspace Attack and Defense', 'building' => 'Tower A', 'capacity' => 0,),
            array('code' => 'TA.XI.3', 'name' => 'Ruang Kelas', 'building' => 'Tower A', 'capacity' => 0,),
            array('code' => 'TA.XI.4a', 'name' => 'Workspace Data Security and Privacy', 'building' => 'Tower A', 'capacity' => 0,),
            array('code' => 'TA.XI.5', 'name' => 'Workspace Cyber Forensic', 'building' => 'Tower A', 'capacity' => 0,),
            array('code' => 'TA.XII.3A', 'name' => 'Ruang Kelas', 'building' => 'Tower A', 'capacity' => 0,),
            array('code' => 'TA.XII.4', 'name' => 'Ruang Kelas', 'building' => 'Tower A', 'capacity' => 0,),
            array('code' => 'TECNO.3.1', 'name' => 'Workspace Animasi (Jauh dari Lift)', 'building' => 'Technopreneur', 'capacity' => 0,),
            array('code' => 'TECNO.3.2', 'name' => 'Workspace Game Development dan VR', 'building' => 'Technopreneur', 'capacity' => 0,),
            array('code' => 'TECNO.3.3', 'name' => 'Workspace Multimedia (Dekat dengan Lift)', 'building' => 'Technopreneur', 'capacity' => 0,),
            array('code' => 'TECNO.3.4', 'name' => 'Mini Theater', 'building' => 'Technopreneur', 'capacity' => 0,),
		);

		DB::table('rooms')->insert($data);
    }
}
