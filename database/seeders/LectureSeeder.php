<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		  $data = array(
            array('code' => 'AA', 'name' => 'Amirul Mu’minin, S.Ds., M.Ds.'),
            array('code' => 'AD', 'name' => 'Agung Riyadi, S.Si., M.Kom'),
            array('code' => 'AI', 'name' => 'Arif Roziqin, S.Pd., M.Sc'),
            array('code' => 'AM', 'name' => 'Ahmadi Irmansyah Lubis, S.kom., M.kom.'),
            array('code' => 'AN', 'name' => 'Anis Rahmi, S.Tr. Kom., M.Sn'),
            array('code' => 'AO', 'name' => 'Antoni Haikal, S.ST.,M.T'),
            array('code' => 'AR', 'name' => 'Ardiman Firmanda, S.S.T., M.Tr.Kom.'),
            array('code' => 'AT', 'name' => 'Andy Triwinarko, ST., MT., Ph.D'),
            array('code' => 'AU', 'name' => 'Agus Fatulloh, S.T., M.T'),
            array('code' => 'AW', 'name' => 'Ari Wibowo, ST., MT'),
            array('code' => 'AZ', 'name' => 'Afdhol Dzikri, S.ST., M.T'),
            array('code' => 'BY', 'name' => 'Satriya Bayu Aji, S.S., M.Hum.'),
            array('code' => 'CA', 'name' => 'Condra Antoni, SS., M.A'),
            array('code' => 'CM', 'name' => 'Cahya Miranto, S.S.T., M.Tr.Kom.'),
            array('code' => 'CY', 'name' => 'Siti Noor Chayati, S.T., M.Sc'),
            array('code' => 'DE', 'name' => 'Dwi Ely Kurniawan, S.Pd., M.Kom'),
            array('code' => 'DP', 'name' => 'Dodi Prima Resda, S.Pd., M.Kom'),
            array('code' => 'DW', 'name' => 'Dwi Amalia Purnamasari, S.T., M.Cs'),
            array('code' => 'EV', 'name' => 'Evaliata Br. Sembiring, S.Kom., M.Cs'),
            array('code' => 'FB', 'name' => 'Feby, M.Pd'),
            array('code' => 'FD', 'name' => 'Miratul Khusna Mufida, S.ST, M.Sc'),
            array('code' => 'FS', 'name' => 'Fadli Suandi, S.T., M.Kom'),
            array('code' => 'FW', 'name' => 'Festy Winda Sari, S.Tr. Kom., M.Sc'),
            array('code' => 'GD', 'name' => 'Gendhy Dwi Harlyan, S.Sn., M.Sn'),
            array('code' => 'GS', 'name' => 'Aragani Timur Kanistren, S.Sn., M.Sn'),
            array('code' => 'HA', 'name' => 'Hamdani Arif, S.Pd., M.Sc'),
            array('code' => 'HT', 'name' => 'Ahmad Hamim Thohari, S.S.T., M.T.'),
            array('code' => 'HW', 'name' => 'Hilda Widyastuti, S.T., M.T.'),
            array('code' => 'ID', 'name' => 'Muhammad Idris S.Tr'),
            array('code' => 'LM', 'name' => 'Liony Lumombo, S.ST., M.IDes'),
            array('code' => 'LR', 'name' => 'Luthfiya Ratna Sari, S.Si., M.T.'),
            array('code' => 'MA', 'name' => 'Maria, S.ST., M.Sn'),
            array('code' => 'MC', 'name' => 'Mira Chandra Kirana, S.T., M.T'),
            array('code' => 'MD', 'name' => 'Maidel Fani, S.Pd., M.Kom.'),
            array('code' => 'MF', 'name' => 'Muchamad Fajri Amirul Nasrullah, S.ST., M.Sc'),
            array('code' => 'MI', 'name' => 'Nelmiawati, B.CS., M.Comp.Sc'),
            array('code' => 'MS', 'name' => 'Metta Santiputri, S.T., M.Sc, Ph.D'),
            array('code' => 'NA', 'name' => 'Alena Uperiati, S.T, M.Cs'),
            array('code' => 'NC', 'name' => 'Nur Cahyono Kushardianto, S.Si., M.T., M.Sc'),
            array('code' => 'NR', 'name' => 'Noper Ardi, S.Pd., M.Eng'),
            array('code' => 'NZ', 'name' => 'Nur Zahrati Janah, S.Kom., M.Sc'),
            array('code' => 'OG', 'name' => 'Oktavianto Gustin, S.T., M.T'),
            array('code' => 'RA', 'name' => 'Rini Amadia, S.Sn., M.Sn'),
            array('code' => 'RK', 'name' => 'Farouki Dinda Rassarandi, S.T., M.Eng'),
            array('code' => 'RW', 'name' => 'Riwinoto, S.T., M.Kom'),
            array('code' => 'RY', 'name' => 'Rina Yulius, S.Pd., M.Eng'),
            array('code' => 'SA', 'name' => 'Selly Artaty Zega, S.ST., M.Sc'),
            array('code' => 'SH', 'name' => 'Siskha Handayani, S.Si., M.Si'),
            array('code' => 'SI', 'name' => 'Sudra Irawan, S.Pd.Si., M.Sc'),
            array('code' => 'SN', 'name' => 'Sandi Prasetyaningsih, S.ST., M.Media'),
            array('code' => 'SP', 'name' => 'Supardianto, S.ST., M.Eng'),
            array('code' => 'SS', 'name' => 'Swono Sibagariang, S.Kom., M.Kom'),
            array('code' => 'ST', 'name' => 'Sartikha, S. ST., M.Eng'),
            array('code' => 'UB', 'name' => 'Uuf Brajawidagda, S.T., M.T., Ph.D'),
            array('code' => 'UL', 'name' => 'Arta Uly Siahaan, S.Pd., M.Pd'),
            array('code' => 'WE', 'name' => 'Wenang Anurogo, S.Si., M.Sc.'),
            array('code' => 'YG', 'name' => 'Happy Yugo Prasetiya, S.Sn., M.Sn'),
            array('code' => 'YR', 'name' => 'Yeni Rokhayati, S.Si., M.Sc'),
            array('code' => 'YS', 'name' => 'Yusuf Rizky N'),
            array('code' => 'ZL', 'name' => 'Muhammad Zainuddin Lubis, S.I.k, M.Si'),
            array('code' => 'AF', 'name' => 'Alfian, S.ST'),
            array('code' => 'AL', 'name' => 'Andri Albertha Pratama, S.Tr. Kom., M.Sn'),
            array('code' => 'AS', 'name' => 'Ahmad Saropi, S.Tr.'),
            array('code' => 'BN', 'name' => 'Banu Failasuf, S.Tr'),
            array('code' => 'DN', 'name' => 'Aldino Saputra, S.S.T'),
            array('code' => 'GL', 'name' => 'Gilang Bagus Ramadhan, A.Md.Kom'),
            array('code' => 'GR', 'name' => 'Gerson Julyfer Parulian Tambun, S.Tr. T'),
            array('code' => 'HK', 'name' => 'Hajrul Khaira, S.Tr.Kom'),
            array('code' => 'IQ', 'name' => 'Iqbal Afif, A.Md.Kom'),
            array('code' => 'KV', 'name' => 'Kevin Timoteus Sirait'),
            array('code' => 'MG', 'name' => 'Muhammad Ghazali, A.Md.T'),
            array('code' => 'NN', 'name' => 'Muhamad Sahrul Nizan, A.Md.Kom'),
            array('code' => 'NP', 'name' => 'Nanda Putra Perkasa, S.Tr.Kom'),
            array('code' => 'RI', 'name' => 'Riki, S.Tr.'),
            array('code' => 'RZ', 'name' => 'Rizki Widi Pratama, A.Md.Kom'),
            array('code' => 'WD', 'name' => 'Widya Putri Ramadhani, S.Tr.Kom'),
            array('code' => 'AH', 'name' => 'Athailah S.T.'),
            array('code' => 'AG', 'name' => 'Adhiguna S.Kom.'),
            array('code' => 'DR', 'name' => 'Muhammad Doris ST'),
            array('code' => 'SM', 'name' => 'Sumarto S.S.T'),
            array('code' => 'HL', 'name' => 'Hilda Herasmus S.Kom.,M.Kom'),
            array('code' => 'Test', 'name' => 'test'),
            
		      );

		  DB::table('lectures')->insert($data);
    }

}
