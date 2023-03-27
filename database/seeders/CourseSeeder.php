<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
        // Prodi IF Sem 1 Ganjil 
        array('code' => 'IF110', 'name' => 'DASAR PEMROGRAMAN', 'prodi' => 'IF'),
        array('code' => 'IF111', 'name' => 'ORGANISASI KOMPUTER', 'prodi' => 'IF'),
        array('code' => 'IF112', 'name' => 'MATEMATIKA', 'prodi' => 'IF'),
        array('code' => 'IF113', 'name' => 'PENGANTAR TEKNOLOGI INFORMASI', 'prodi' => 'IF'),
        array('code' => 'IF114', 'name' => 'KESELAMATAN DAN KESEHATAN KERJA', 'prodi' => 'IF'),
        array('code' => 'MKU001IF', 'name' => 'PENDIDIKAN OLAHRAGA', 'prodi' => 'IF'),
        array('code' => 'MPK001IF', 'name' => 'PENDIDIKAN AGAMA', 'prodi' => 'IF'),
        // Prodi IF Sem 2 Genap 
        array('code' => 'IF215', 'name' => 'REKAYASA PERANGKAT LUNAK I', 'prodi' => 'IF'),
        array('code' => 'IF216', 'name' => 'STRUKTUR DATA', 'prodi' => 'IF'),
        array('code' => 'IF217', 'name' => 'DASAR PEMROGRAMAN WEB', 'prodi' => 'IF'),
        array('code' => 'IF218', 'name' => 'PENGANTAR BASIS DATA', 'prodi' => 'IF'),
        array('code' => 'IF219', 'name' => 'SISTEM OPERASI', 'prodi' => 'IF'),
        array('code' => 'IF220', 'name' => 'PEMROGRAMAN BERORIENTASI OBJEK', 'prodi' => 'IF'),
        array('code' => 'IF221', 'name' => 'STATISTIKA', 'prodi' => 'IF'),
        // Prodi IF Sem 3 Ganjil 
        array('code' => 'IF322', 'name' => 'PEMROGRAMAN BASIS DATA', 'prodi' => 'IF'),
        array('code' => 'IF323', 'name' => 'REKAYASA PERANGKAT LUNAK II', 'prodi' => 'IF'),
        array('code' => 'IF324', 'name' => 'PEMROGRAMAN PERANGKAT BERGERAK', 'prodi' => 'IF'),
        array('code' => 'IF325', 'name' => 'JARINGAN KOMPUTER I', 'prodi' => 'IF'),
        array('code' => 'IF326', 'name' => 'INTERAKSI MANUSIA KOMPUTER', 'prodi' => 'IF'),
        array('code' => 'IF327', 'name' => 'PEMROGRAMAN WEB', 'prodi' => 'IF'),
        array('code' => 'MKU002IF', 'name' => 'BAHASA INGGRIS UMUM', 'prodi' => 'IF'),
        // Prodi IF Sem 4 Genap 
        array('code' => 'IF428', 'name' => 'DATA MINING', 'prodi' => 'IF'),
        array('code' => 'IF429', 'name' => 'PEMROGRAMAN BERBASIS PERANGKAT KERAS', 'prodi' => 'IF'),
        array('code' => 'IF430', 'name' => 'KEWIRAUSAHAAN', 'prodi' => 'IF'),
        array('code' => 'IF431', 'name' => 'JARINGAN KOMPUTER II', 'prodi' => 'IF'),
        array('code' => 'IF433', 'name' => 'ADIMINISTRASI SISTEM KOMPUTER', 'prodi' => 'IF'),
        array('code' => 'IF326', 'name' => 'SISTEM INFORMASI', 'prodi' => 'IF'),
        // Prodi IF Sem 5 Ganjil
        array('code' => 'MKU003IF', 'name' => 'BAHASA INGGRIS DUNIA KERJA', 'prodi' => 'IF'),
        array('code' => 'MPK004IF', 'name' => 'PENDIDIKAN BAHASA INDONESIA', 'prodi' => 'IF'),
        array('code' => 'MPK002IF', 'name' => 'PENDIDIKAN PANCASILA', 'prodi' => 'IF'),
        array('code' => 'MPK003IF', 'name' => 'PENDIDIKAN KEWARGANEGARAAN', 'prodi' => 'IF'),
        array('code' => 'IF541', 'name' => 'MAGANG MERDEKA BELAJAR', 'prodi' => 'IF'),
        // Prodi IF Sem 6 Genap
        array('code' => 'IF634', 'name' => 'ETIKA PROFESI DUNIA KERJA', 'prodi' => 'IF'),
        array('code' => 'IF635', 'name' => 'MAGANG INDUSTRI', 'prodi' => 'IF'),
        array('code' => 'IF636', 'name' => 'PELAPORAN KERJA', 'prodi' => 'IF'),
        array('code' => 'IF637', 'name' => 'PROYEK INDUSTRI ', 'prodi' => 'IF'),

        // Prodi MJ Sem 1 Ganjil 
        array('code' => 'MJ101', 'name' => 'Pengantar Teknologi Informasi', 'prodi' => 'MJ'),
        array('code' => 'MJ102', 'name' => 'Sistem Komputer', 'prodi' => 'MJ'),
        array('code' => 'MJ103', 'name' => 'Algoritma dan Pemrograman ', 'prodi' => 'MJ'),
        array('code' => 'MJ104', 'name' => 'Basis Data', 'prodi' => 'MJ'),
        array('code' => 'MJ105', 'name' => 'Matematika Diskrit', 'prodi' => 'MJ'),
        array('code' => 'MJ106', 'name' => 'Konsep Multimedia', 'prodi' => 'MJ'),
        array('code' => 'MKU001MJ', 'name' => 'Pendidikan Olahraga', 'prodi' => 'MJ'),
        array('code' => 'MPK004MJ', 'name' => 'Pendidikan Bahasa Indonesia', 'prodi' => 'MJ'),
        // Prodi MJ Sem 2 Genap 
        array('code' => 'MJ209', 'name' => 'Desain Grafis', 'prodi' => 'MJ'),
        array('code' => 'MJ316', 'name' => 'Pemrograman Web', 'prodi' => 'MJ'),
        array('code' => 'MJ211', 'name' => 'Jaringan Komputer ', 'prodi' => 'MJ'),
        array('code' => 'MJ212', 'name' => 'Struktur Data', 'prodi' => 'MJ'),
        array('code' => 'MJ210', 'name' => 'Desain Web Responsif', 'prodi' => 'MJ'),
        array('code' => 'MPK001MJ', 'name' => 'Pendidikan Agama', 'prodi' => 'MJ'),
        array('code' => 'MJ524', 'name' => 'Kapita Selekta', 'prodi' => 'MJ'),
        // Prodi MJ Sem 3 Ganjil 
        array('code' => 'MJ209', 'name' => 'Desain Grafis', 'prodi' => 'MJ'),
        array('code' => 'MJ316', 'name' => 'Pemrograman Web', 'prodi' => 'MJ'),
        array('code' => 'MJ211', 'name' => 'Jaringan Komputer ', 'prodi' => 'MJ'),
        array('code' => 'MJ212', 'name' => 'Struktur Data', 'prodi' => 'MJ'),
        array('code' => 'MJ210', 'name' => 'Desain Web Responsif', 'prodi' => 'MJ'),
        array('code' => 'MPK001MJ', 'name' => 'Pendidikan Agama', 'prodi' => 'MJ'),
        array('code' => 'MJ524', 'name' => 'Kapita Selekta', 'prodi' => 'MJ'),
        // Prodi MJ Sem 4 Genap 
        array('code' => 'MJ418', 'name' => 'Animasi 3D', 'prodi' => 'MJ'),
        array('code' => 'MJ420', 'name' => 'Pemrograman Obyek', 'prodi' => 'MJ'),
        array('code' => 'MJ421', 'name' => 'Pemrograman Perangkat Keras', 'prodi' => 'MJ'),
        array('code' => 'MJ422', 'name' => 'Kecerdasan Buatan', 'prodi' => 'MJ'),
        array('code' => 'MJ525', 'name' => 'Pemrograman Game', 'prodi' => 'MJ'),
        array('code' => 'MKU004MJ', 'name' => 'Komunikasi Bahasa Inggris', 'prodi' => 'MJ'),
        array('code' => 'MPK002MJ', 'name' => 'Pendidikan Pancasila', 'prodi' => 'MJ'),
        // Prodi MJ Sem 5 Ganjil
        array('code' => 'MJ316', 'name' => 'Pemrograman Web', 'prodi' => 'MJ'),
        array('code' => 'MJ317', 'name' => 'Administrasi Sistem Komputer', 'prodi' => 'MJ'),
        array('code' => 'MJ526', 'name' => 'Pemrograman Perangkat Bergerak', 'prodi' => 'MJ'),
        array('code' => 'MJ527', 'name' => 'Sistem IoT Multimedia ', 'prodi' => 'MJ'),
        array('code' => 'MJ529', 'name' => 'Statistik', 'prodi' => 'MJ'),
        array('code' => 'MKU002MJ', 'name' => 'Bahasa Inggris Umum', 'prodi' => 'MJ'),
        array('code' => 'MPK003MJ', 'name' => 'Pendidikan Kewarganegaraan', 'prodi' => 'MJ'),
        // Prodi MJ Sem 6 Genap
        array('code' => 'MJ630', 'name' => 'Proyek Internal', 'prodi' => 'MJ'),
        array('code' => 'MJ631', 'name' => 'Prototipe Digital', 'prodi' => 'MJ'),
        array('code' => 'MJ632', 'name' => 'Metodologi Penelitian', 'prodi' => 'MJ'),
        array('code' => 'MJ633', 'name' => 'Kewirausahaan ', 'prodi' => 'MJ'),
        array('code' => 'MJ634', 'name' => 'Kesehatan, Keselamatan dan Komunikasi Kerja', 'prodi' => 'MJ'),
        array('code' => 'MKU003MJ', 'name' => 'Bahasa Inggris Dunia Kerja', 'prodi' => 'MJ'),
        // Prodi MJ Sem 7 Ganjil
        array('code' => 'MJ544', 'name' => 'Etika Profesi', 'prodi' => 'MJ'),
        array('code' => 'MJ545', 'name' => 'Magang', 'prodi' => 'MJ'),
        array('code' => 'MJ546', 'name' => 'Pelaporan Kerja', 'prodi' => 'MJ'),
        array('code' => 'MJ535', 'name' => 'Proyek Industri', 'prodi' => 'MJ'),
        // Prodi MJ Sem 8 Genap
        array('code' => 'MJ541', 'name' => 'Tugas Akhir', 'prodi' => 'MJ'),
        array('code' => 'MJ542', 'name' => 'Penulisan Karya Ilmiah (Paper)', 'prodi' => 'MJ'),
        array('code' => 'MJ525', 'name' => 'Menulis Bahasa Inggris', 'prodi' => 'MJ'),
        array('code' => 'MJ544', 'name' => 'Etika Profesi', 'prodi' => 'MJ'),
        array('code' => 'MJ545', 'name' => 'Magang', 'prodi' => 'MJ'),
        array('code' => 'MJ546', 'name' => 'Pelaporan Kerja', 'prodi' => 'MJ'),
        array('code' => 'MJ535', 'name' => 'Proyek Industri', 'prodi' => 'MJ'),

        // Prodi GM Sem 1 Ganjil 
        array('code' => 'GM101', 'name' => 'Pengantar Teknologi Informasi', 'prodi' => 'GM'),
        array('code' => 'GM102', 'name' => 'Pengantar Teknologi Informasi', 'prodi' => 'GM'),
        array('code' => 'GM103', 'name' => 'Pengantar Teknologi Informasi', 'prodi' => 'GM'),
        array('code' => 'GM104', 'name' => 'Pengantar Teknologi Informasi', 'prodi' => 'GM'),
        array('code' => 'GM105', 'name' => 'Pengantar Teknologi Informasi', 'prodi' => 'GM'),
        array('code' => 'GM106', 'name' => 'Pengantar Teknologi Informasi', 'prodi' => 'GM'),
        array('code' => 'MPK001GM', 'name' => 'Pengantar Teknologi Informasi', 'prodi' => 'GM'),
        //Prodi GM Sem 2 Genap
        array('code' => 'GM207', 'name' => 'Pengantar Teknologi Informasi', 'prodi' => 'GM'),
        array('code' => 'GM208', 'name' => 'Pengantar Teknologi Informasi', 'prodi' => 'GM'),
        array('code' => 'GM209', 'name' => 'Pengantar Teknologi Informasi', 'prodi' => 'GM'),
        array('code' => 'GM210', 'name' => 'Pengantar Teknologi Informasi', 'prodi' => 'GM'),
        array('code' => 'GM211', 'name' => 'Pengantar Teknologi Informasi', 'prodi' => 'GM'),
        array('code' => 'GM212', 'name' => 'Pengantar Teknologi Informasi', 'prodi' => 'GM'),
        array('code' => 'MKU001GM', 'name' => 'Pengantar Teknologi Informasi', 'prodi' => 'GM'),
        // Prodi GM Sem 3 Ganjil 
        array('code' => 'GM313', 'name' => 'Survei Hidrografi Dasar', 'prodi' => 'GM'),
        array('code' => 'GM314', 'name' => 'Fotogrametri', 'prodi' => 'GM'),
        array('code' => 'GM315', 'name' => 'Sistem Informasi Geografis', 'prodi' => 'GM'),
        array('code' => 'GM316', 'name' => 'Penginderaan Jauh', 'prodi' => 'GM'),
        array('code' => 'GM317', 'name' => 'Survei GNSS', 'prodi' => 'GM'),
        array('code' => 'GM318', 'name' => 'Pemrograman Web', 'prodi' => 'GM'),
        array('code' => 'MKU002GM', 'name' => 'Bahasa Inggris Umum', 'prodi' => 'GM'),
        //Prodi GM Sem 4 Genap
        array('code' => 'GM419', 'name' => 'Oseanografi', 'prodi' => 'GM'),
        array('code' => 'GM420', 'name' => 'Survei Hidrografi Lanjut', 'prodi' => 'GM'),
        array('code' => 'GM421', 'name' => 'Survei Rekayasa', 'prodi' => 'GM'),
        array('code' => 'GM422', 'name' => 'Geomatika Lingkungan', 'prodi' => 'GM'),
        array('code' => 'GM423', 'name' => 'Pengelolaan Wilayah Pesisir Praktikum', 'prodi' => 'GM'),
        array('code' => 'GM424', 'name' => 'Manajemen Proyek ', 'prodi' => 'GM'),
        array('code' => 'MKU003GM', 'name' => 'Bahasa Inggris Dunia Kerja', 'prodi' => 'GM'),
        //Prodi GM Sem 5 Ganjil
        array('code' => 'GM525', 'name' => 'Kewirausahaan', 'prodi' => 'GM'),
        array('code' => 'MPK002GM', 'name' => 'Pendidikan Pancasila', 'prodi' => 'GM'),
        array('code' => 'MPK003GM', 'name' => 'Pendidikan Kewarganegaraan', 'prodi' => 'GM'),
        array('code' => 'MPK004GM', 'name' => 'Pendidikan Bahasa Indonesia', 'prodi' => 'GM'),
        array('code' => 'GM526', 'name' => 'Proyek Akhir', 'prodi' => 'GM'),
        array('code' => 'GM527', 'name' => 'Praktek Industri', 'prodi' => 'GM'),
        //Prodi GM Sem 6 Genap
        array('code' => 'GM627', 'name' => 'Magang', 'prodi' => 'GM'),
        array('code' => 'GM628', 'name' => 'Etika Profesi Dunia Kerja', 'prodi' => 'GM'),
        array('code' => 'GM629', 'name' => 'Pelaporan Kerja', 'prodi' => 'GM'),

        // Prodi AN Sem 1 Ganjil 
        array('code' => 'AN101', 'name' => 'Naskah Produksi Dasar', 'prodi' => 'AN'),
        array('code' => 'AN102', 'name' => 'Menggambar Dasar', 'prodi' => 'AN'),
        array('code' => 'AN103', 'name' => 'Desain Elementer', 'prodi' => 'AN'),
        array('code' => 'AN104', 'name' => 'Pengantar Teknologi Informasi', 'prodi' => 'AN'),
        array('code' => 'AN105', 'name' => 'Pengantar Animasi', 'prodi' => 'AN'),
        array('code' => 'AN106', 'name' => 'Ide Kreatif', 'prodi' => 'AN'),
        array('code' => 'MPK101AN', 'name' => 'Pendidikan Agama', 'prodi' => 'AN'),
        array('code' => 'MPK102AN', 'name' => 'Olahraga', 'prodi' => 'AN'),
        // Prodi AN Sem 2 Genap 
        array('code' => 'AN207', 'name' => 'Naskah Produksi Lanjut', 'prodi' => 'AN'),
        array('code' => 'AN208', 'name' => 'Menggambar Lanjut', 'prodi' => 'AN'),
        array('code' => 'AN209', 'name' => 'Desain Grafis', 'prodi' => 'AN'),
        array('code' => 'AN210', 'name' => 'Fotografi', 'prodi' => 'AN'),
        array('code' => 'AN211', 'name' => 'Fisika', 'prodi' => 'AN'),
        array('code' => 'AN212', 'name' => 'Animasi 2D', 'prodi' => 'AN'),
        array('code' => 'AN213', 'name' => 'Budaya Visual', 'prodi' => 'AN'),
        array('code' => 'MPK204AN', 'name' => 'Bahasa Indonesia', 'prodi' => 'AN'),
        // Prodi AN Sem 3 Ganjil 
        array('code' => 'AN315', 'name' => 'Pemodelan 3D Dasar', 'prodi' => 'AN'),
        array('code' => 'AN316', 'name' => 'Mekanika Gerak Digital', 'prodi' => 'AN'),
        array('code' => 'AN317', 'name' => 'Desain Karakter', 'prodi' => 'AN'),
        array('code' => 'AN318', 'name' => 'Matematika Diskrit', 'prodi' => 'AN'),
        array('code' => 'AN319', 'name' => 'KONSEP SENI', 'prodi' => 'AN'),
        array('code' => 'AN320', 'name' => 'Pemodelan Tanah Liat', 'prodi' => 'AN'),
        array('code' => 'AN425', 'name' => 'Penyuntingan Suara', 'prodi' => 'AN'),
        array('code' => 'MPK203AN', 'name' => 'Bahasa Inggris', 'prodi' => 'AN'),
        // Prodi AN Sem 4 Genap
        array('code' => 'AN422', 'name' => 'Pemodelan 3D Lanjut', 'prodi' => 'AN'),
        array('code' => 'AN423', 'name' => 'Tekstur dan Bayangan', 'prodi' => 'AN'),
        array('code' => 'AN424', 'name' => 'Animasi 3D Dasar', 'prodi' => 'AN'),
        array('code' => 'AN321', 'name' => 'Sinematografi', 'prodi' => 'AN'),
        array('code' => 'AN426', 'name' => 'Kapita Selekta', 'prodi' => 'AN'),
        array('code' => 'AN427', 'name' => 'Kewirausahaan', 'prodi' => 'AN'),
        // Prodi AN Sem 5 Ganjil 
        array('code' => 'AN528', 'name' => 'Efek Visual', 'prodi' => 'AN'),
        array('code' => 'AN529', 'name' => 'Digital Compositing', 'prodi' => 'AN'),
        array('code' => 'AN530', 'name' => 'Animasi 3D Lanjut', 'prodi' => 'AN'),
        array('code' => 'AN531', 'name' => 'Manajemen Produksi Animasi', 'prodi' => 'AN'),
        array('code' => 'AN532', 'name' => 'Proyek Internal', 'prodi' => 'AN'),
        // Prodi AN Sem 6 Genap
        array('code' => 'AN633', 'name' => 'Kesehatan & Keselamatan Kerja', 'prodi' => 'AN'),
        array('code' => 'MPK006AN', 'name' => 'Kewarganegaraan', 'prodi' => 'AN'),
        array('code' => 'MPK007AN', 'name' => 'Pancasila', 'prodi' => 'AN'),
        array('code' => 'AN839', 'name' => 'Penulisan Karya Ilmiah', 'prodi' => 'AN'),
        array('code' => 'AN634', 'name' => 'Magang Proyek Industri', 'prodi' => 'AN'),
        // Prodi AN Sem 7 Ganjil 
        array('code' => 'AN734', 'name' => 'Pelaporan Kerja', 'prodi' => 'AN'),
        array('code' => 'AN735', 'name' => 'Magang Industri', 'prodi' => 'AN'),
        array('code' => 'AN736', 'name' => 'Etika Profesi Dunia Kerja', 'prodi' => 'AN'),
        // Prodi AN Sem 8 Genap
        array('code' => 'AN837', 'name' => 'Matematika Statistik', 'prodi' => 'AN'),
        array('code' => 'AN838', 'name' => 'Tugas Akhir', 'prodi' => 'AN'),
        array('code' => 'MPK008AN', 'name' => 'Menulis Bahasa Inggris', 'prodi' => 'AN'),

        // Prodi RKS Sem 1 Ganjil 
        array('code' => 'RKS111', 'name' => 'Algoritma dan Pemrograman', 'prodi' => 'RKS'),
        array('code' => 'RKS112', 'name' => 'Dasar Keamanan Siber', 'prodi' => 'RKS'),
        array('code' => 'RKS113', 'name' => 'Fisika Dasar', 'prodi' => 'RKS'),
        array('code' => 'RKS114', 'name' => 'Kalkulus', 'prodi' => 'RKS'),
        array('code' => 'RKS115', 'name' => 'Literasi Data', 'prodi' => 'RKS'),
        array('code' => 'RKS116', 'name' => 'Organisasi dan Arsitektur Komputer ', 'prodi' => 'RKS'),
        array('code' => 'MPK004RKS', 'name' => 'Pendidikan Bahasa Indonesia', 'prodi' => 'RKS'),
        // Prodi RKS Sem 2 Genap
        array('code' => 'RKS211', 'name' => 'Jaringan Komputer', 'prodi' => 'RKS'),
        array('code' => 'RKS212', 'name' => 'Manajemen Risiko Keamanan Siber', 'prodi' => 'RKS'),
        array('code' => 'RKS213', 'name' => 'Matematika Diskrit', 'prodi' => 'RKS'),
        array('code' => 'RKS214', 'name' => 'Sistem Operasi', 'prodi' => 'RKS'),
        array('code' => 'RKS215', 'name' => 'Struktur Data', 'prodi' => 'RKS'),
        array('code' => 'MPK002RKS', 'name' => 'Pendidikan Pancasila', 'prodi' => 'RKS'),
        array('code' => 'MPK003RKS', 'name' => 'Pendidikan Kewarganegaraan', 'prodi' => 'RKS'),
        // Prodi RKS Sem 3 Ganjil 
        array('code' => 'RKS321', 'name' => 'Administrasi Sistem Komputer', 'prodi' => 'RKS'),
        array('code' => 'RKS322', 'name' => 'Hukum dan Etika Keamanan Siber', 'prodi' => 'RKS'),
        array('code' => 'RKS323', 'name' => 'Interkoneksi Jaringan', 'prodi' => 'RKS'),
        array('code' => 'RKS324', 'name' => 'Keamanan Basis Data', 'prodi' => 'RKS'),
        array('code' => 'RKS325', 'name' => 'Kriptografi Terapan', 'prodi' => 'RKS'),
        array('code' => 'RKS326', 'name' => 'Pemrograman Berorientasi Objek', 'prodi' => 'RKS'),
        array('code' => 'MKU001RKS', 'name' => 'Pendidikan Olahraga', 'prodi' => 'RKS'),
        // Prodi RKS Sem 4 Genap
        array('code' => 'RKS421', 'name' => 'Arsitektur Keamanan ', 'prodi' => 'RKS'),
        array('code' => 'RKS422', 'name' => 'Keamanan Jaringan', 'prodi' => 'RKS'),
        array('code' => 'RKS423', 'name' => 'Keamanan Komputasi Awan', 'prodi' => 'RKS'),
        array('code' => 'RKS424', 'name' => 'Manajemen Proyek', 'prodi' => 'RKS'),
        array('code' => 'RKS425', 'name' => 'Pemrograman dan Penilaian Keamanan', 'prodi' => 'RKS'),
        array('code' => 'RKS426', 'name' => 'Komunikasi Bahasa Inggris ', 'prodi' => 'RKS'),
        array('code' => 'MPK001RKS', 'name' => 'Pendidikan Agama', 'prodi' => 'RKS'),
        // Prodi RKS Sem 5 Ganjil 
        array('code' => 'RKS531', 'name' => 'Keamanan Perangkat Bergerak', 'prodi' => 'RKS'),
        array('code' => 'RKS532', 'name' => 'Keamanan Pengembangan Perangkat Lunak', 'prodi' => 'RKS'),
        array('code' => 'RKS533', 'name' => 'Metodologi Penelitian', 'prodi' => 'RKS'),
        array('code' => 'MKU002RKS', 'name' => 'Bahasa Inggris Umum', 'prodi' => 'RKS'),
        array('code' => 'RKS843', 'name' => 'Forensik Siber', 'prodi' => 'RKS'),
        array('code' => 'RKS537', 'name' => 'Kewirausahaan ', 'prodi' => 'RKS'),
        // Prodi RKS Sem 6 Genap
        array('code' => 'RKS631', 'name' => 'Kapita Selekta', 'prodi' => 'RKS'),
        array('code' => 'RKS631', 'name' => 'Audit dan Kebijakan Keamanan Siber', 'prodi' => 'RKS'),
        array('code' => 'RKS631', 'name' => 'Kesehatan dan Keselamatan Kerja', 'prodi' => 'RKS'),
        array('code' => 'RKS631', 'name' => 'Keamanan Sistem Siber-Fisik', 'prodi' => 'RKS'),
        array('code' => 'RKS631', 'name' => 'Manajemen Keberlanjutan Bisnis', 'prodi' => 'RKS'),
        array('code' => 'RKS631', 'name' => 'Probabilitas dan Statistika', 'prodi' => 'RKS'),
        array('code' => 'RKS631', 'name' => 'Proyek Keamanan Siber', 'prodi' => 'RKS'),
        // Prodi RKS Sem 7 Ganjil 
        array('code' => 'RKS633', 'name' => 'Etika Profesi Dunia Kerja', 'prodi' => 'RKS'),
        array('code' => 'RKS633', 'name' => 'Magang Industri', 'prodi' => 'RKS'),
        array('code' => 'RKS634', 'name' => 'Pelaporan Kerja', 'prodi' => 'RKS'),
        // Prodi RKS Sem 8 Genap
        array('code' => 'RKS741', 'name' => 'Proyek Akhir I', 'prodi' => 'RKS'),
        array('code' => 'RKS742', 'name' => 'Proyek Akhir II', 'prodi' => 'RKS'),
        array('code' => 'RKS743', 'name' => 'Penulisan Karya Ilmiah', 'prodi' => 'RKS'),
        array('code' => 'MKU004', 'name' => 'Bahasa Inggris Dunia Kerja', 'prodi' => 'RKS'),

        // Prodi TRPL Sem 1 Ganjil
        array('code' => 'RPL101', 'name' => 'Pengantar Rekayasa Perangkat Lunak', 'prodi' => 'TRPL'),
        array('code' => 'RPL102', 'name' => 'Algoritma dan Pemrograman', 'prodi' => 'TRPL'),
        array('code' => 'RPL103', 'name' => 'Matematika Diskrit', 'prodi' => 'TRPL'),
        array('code' => 'RPL104', 'name' => 'Analisis dan spesifikasi kebutuhan perangkat lunak Praktikum', 'prodi' => 'TRPL'),
        array('code' => 'RPL105', 'name' => 'Pemrograman Berbasis Web', 'prodi' => 'TRPL'),
        array('code' => 'RPL106', 'name' => 'Pengantar Basis Data', 'prodi' => 'TRPL'),
        array('code' => 'MPK001RPL', 'name' => 'Pendidikan Agama', 'prodi' => 'TRPL'),
        // Prodi TRPL Sem 2 Genap
        array('code' => 'RPL207', 'name' => 'Statistika', 'prodi' => 'TRPL'),
        array('code' => 'RPL208', 'name' => 'Struktur Data', 'prodi' => 'TRPL'),
        array('code' => 'RPL209', 'name' => 'Pengantar Manajemen Proyek', 'prodi' => 'TRPL'),
        array('code' => 'RPL210', 'name' => 'Perancangan Perangkat Lunak', 'prodi' => 'TRPL'),
        array('code' => 'RPL211', 'name' => 'Pemrograman Berorientasi Objek', 'prodi' => 'TRPL'),
        array('code' => 'RPL212', 'name' => 'Pemrograman Basis Data', 'prodi' => 'TRPL'),
        array('code' => 'MPK002RPL', 'name' => 'Pendidikan Bahasa Indonesia', 'prodi' => 'TRPL'),
        // Prodi RKS Sem 3 Ganjil 
        array('code' => 'RPL313', 'name' => 'ADMINISTRASI SISTEM KOMPUTER', 'prodi' => 'TRPL'),
        array('code' => 'RPL314', 'name' => 'FISIKA DASAR', 'prodi' => 'TRPL'),
        array('code' => 'RPL315', 'name' => 'INTERAKSI MANUSIA DAN KOMPUTER', 'prodi' => 'TRPL'),
        array('code' => 'RPL316', 'name' => 'PENGUJIAN PERANGKAT LUNAK', 'prodi' => 'TRPL'),
        array('code' => 'RPL317', 'name' => 'PEMROGRAMAN PERANGKAT BERGERAK', 'prodi' => 'TRPL'),
        array('code' => 'RPL318', 'name' => 'KEAMANAN BASIS DATA', 'prodi' => 'TRPL'),
        // Prodi RKS Sem 4 Genap
        array('code' => 'RPL419', 'name' => 'KALKULUS', 'prodi' => 'TRPL'),
        array('code' => 'RPL420', 'name' => 'KECERDASAN BUATAN', 'prodi' => 'TRPL'),
        array('code' => 'RPL421', 'name' => 'PEMELIHARAAN PERANGKAT LUNAK', 'prodi' => 'TRPL'),
        array('code' => 'RPL422', 'name' => 'KEAMANAN PERANGKAT LUNAK', 'prodi' => 'TRPL'),
        array('code' => 'RPL423', 'name' => 'PEMROGRAMAN PERANGKAT KERAS', 'prodi' => 'TRPL'),
        array('code' => 'MKU003RPL', 'name' => 'BAHASA INGGRIS UMUM', 'prodi' => 'TRPL'),
        // Prodi RKS Sem 5 Ganjil 
        array('code' => 'RPL524', 'name' => 'KECERDASAN BISNIS	', 'prodi' => 'TRPL'),
        array('code' => 'MKU004RPL', 'name' => 'BAHASA INGGRIS DUNIA KERJA', 'prodi' => 'TRPL'),
        array('code' => 'RPL525', 'name' => 'PENGEMBANGAN STARTUP DIGITAL', 'prodi' => 'TRPL'),
        array('code' => 'RPL526', 'name' => 'MANAJEMEN PROYEK PERANGKAT LUNAK', 'prodi' => 'TRPL'),
        array('code' => 'RPL527', 'name' => 'KESELAMATAN DAN KESEHATAN KERJA', 'prodi' => 'TRPL'),
        array('code' => 'MKU005RPL', 'name' => 'PENDIDIKAN KEWARGANEGARAAN', 'prodi' => 'TRPL'),
        // Prodi RKS Sem 6 Genap
        array('code' => 'MKU006RPL', 'name' => 'MENULIS BAHASA INGGRIS', 'prodi' => 'TRPL'),
        array('code' => 'RPL628', 'name' => 'METODOLOGI PENELITIAN', 'prodi' => 'TRPL'),
        array('code' => 'RPL629', 'name' => 'KAPITA SELEKTA', 'prodi' => 'TRPL'),
        array('code' => 'RPL630', 'name' => 'KEWIRAUSAHAAN', 'prodi' => 'TRPL'),
        // Prodi RKS Sem 7 Ganjil 
        array('code' => 'MPK007RPL', 'name' => 'PENDIDIKAN PANCASILA', 'prodi' => 'TRPL'),
        array('code' => 'RPL731', 'name' => 'STUDI INDEPENDEN', 'prodi' => 'TRPL'),
        array('code' => 'RPL732', 'name' => 'PROYEK KEMANUSIAAN', 'prodi' => 'TRPL'),
        array('code' => 'RPL733', 'name' => 'ASISTENSI MENGAJAR', 'prodi' => 'TRPL'),
        array('code' => 'RPL734', 'name' => 'MAGANG MERDEKA BELAJAR', 'prodi' => 'TRPL'),
        // Prodi RKS Sem 8 Genap
        array('code' => 'RPL835', 'name' => 'ETIKA PROFESI DUNIA KERJA', 'prodi' => 'TRPL'),
        array('code' => 'RPL835', 'name' => 'MAGANG INDUSTRI', 'prodi' => 'TRPL'),
        array('code' => 'RPL835', 'name' => 'PELAPORAN KERJA', 'prodi' => 'TRPL'),
        array('code' => 'RPL835', 'name' => 'PENULISAN KARYA ILMIAH', 'prodi' => 'TRPL'),
        array('code' => 'RPL835', 'name' => 'TUGAS AKHIR', 'prodi' => 'TRPL'),

        );
        DB::table('courses')->insert($data);
    }
}
