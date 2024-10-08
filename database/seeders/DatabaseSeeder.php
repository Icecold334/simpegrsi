<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

          $golongans = [
            ['nama' => 'Ia'],
            ['nama' => 'Ib'],
            ['nama' => 'Ic'],
            ['nama' => 'Id'],
            ['nama' => 'IIa'],
            ['nama' => 'IIb'],
            ['nama' => 'IIc'],
            ['nama' => 'IId'],
            ['nama' => 'IIIa'],
            ['nama' => 'IIIb'],
            ['nama' => 'IIIc'],
            ['nama' => 'IIId'],
            ['nama' => 'IVa'],
            ['nama' => 'IVb'],
            ['nama' => 'IVc'],
            ['nama' => 'IVd'],
            ['nama' => 'IVe'],
        ];

        foreach ($golongans as $golongan) {
            DB::table('master_golongan')->insert([
                'nama' => $golongan['nama'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        $pendidikans = [
            ['nama' => 'SD', 'deskripsi' => 'Sekolah Dasar', 'minim_gol' => 1, 'maxim_gol' => 5],
            ['nama' => 'SLTP', 'deskripsi' => 'Sekolah Lanjutan Tingkat Pertama', 'minim_gol' => 3, 'maxim_gol' => 7],
            ['nama' => 'SLTA', 'deskripsi' => 'Sekolah Lanjutan Tingkat Atas', 'minim_gol' => 5, 'maxim_gol' => 9],
            ['nama' => 'Kejuruan', 'deskripsi' => 'Pendidikan Kejuruan', 'minim_gol' => 6, 'maxim_gol' => 10],
            ['nama' => 'DIII', 'deskripsi' => 'Diploma III', 'minim_gol' => 7, 'maxim_gol' => 11],
            ['nama' => 'DIV', 'deskripsi' => 'Diploma IV', 'minim_gol' => 8, 'maxim_gol' => 12],
            ['nama' => 'S1 - Umum', 'deskripsi' => 'Sarjana S1 Umum', 'minim_gol' => 9, 'maxim_gol' => 12],
            ['nama' => 'S1 - Apoteker', 'deskripsi' => 'Sarjana S1 Apoteker', 'minim_gol' => 10, 'maxim_gol' => 13],
            ['nama' => 'S1 - Nurse', 'deskripsi' => 'Sarjana S1 Perawat', 'minim_gol' => 10, 'maxim_gol' => 13],
            ['nama' => 'S1 - Dokter', 'deskripsi' => 'Sarjana S1 Dokter', 'minim_gol' => 10, 'maxim_gol' => 13],
            ['nama' => 'S2 - Umum', 'deskripsi' => 'Magister S2 Umum', 'minim_gol' => 11, 'maxim_gol' => 15],
            ['nama' => 'S2 - Spesialis', 'deskripsi' => 'Magister S2 Spesialis', 'minim_gol' => 12, 'maxim_gol' => 16],
            ['nama' => 'S2 - Direktur', 'deskripsi' => 'Magister S2 Direktur', 'minim_gol' => 13, 'maxim_gol' => 17],
        ];

        foreach ($pendidikans as $pendidikan) {
            DB::table('master_pendidikan')->insert([
                'nama' => $pendidikan['nama'],
                'deskripsi' => $pendidikan['deskripsi'],
                'minim_gol' => $pendidikan['minim_gol'],
                'maxim_gol' => $pendidikan['maxim_gol'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        $jabatans = [
            ['nama' => 'Wadir', 'kualifikasi' => 'Strata 1', 'nominal' => 4000000, 'deskripsi' => 'Tunjangan untuk Wadir'],
            ['nama' => 'Manajer', 'kualifikasi' => 'Strata I', 'nominal' => 3000000, 'deskripsi' => 'Tunjangan untuk Manajer'],
            ['nama' => 'Kepala Seksi', 'kualifikasi' => 'Minimal DIII', 'nominal' => 2500000, 'deskripsi' => 'Tunjangan untuk Kepala Seksi'],
            ['nama' => 'Koordinator Case Manajer', 'kualifikasi' => 'Min DIII', 'nominal' => 2300000, 'deskripsi' => 'Tunjangan untuk Koordinator Case Manajer'],
            ['nama' => 'Ka. Instalasi', 'kualifikasi' => 'Min DIII', 'nominal' => 2200000, 'deskripsi' => 'Tunjangan untuk Ka. Instalasi'],
            ['nama' => 'Supervisor', 'kualifikasi' => 'Min DIII', 'nominal' => 2100000, 'deskripsi' => 'Tunjangan untuk Supervisor'],
            ['nama' => 'Ka. Unit/ Ka. Ru', 'kualifikasi' => 'Min DIII', 'nominal' => 2000000, 'deskripsi' => 'Tunjangan untuk Ka. Unit/ Ka. Ru'],
            ['nama' => 'Ka. Unit Rintisan', 'kualifikasi' => 'Min DIII', 'nominal' => 1200000, 'deskripsi' => 'Tunjangan untuk Ka. Unit Rintisan'],
            ['nama' => 'Ketua SPI', 'kualifikasi' => 'Min DIII', 'nominal' => 2000000, 'deskripsi' => 'Tunjangan untuk Ketua SPI'],
            ['nama' => 'Anggota SPI', 'kualifikasi' => 'Min DIII', 'nominal' => 1000000, 'deskripsi' => 'Tunjangan untuk Anggota SPI'],
            ['nama' => 'Sekretaris Direksi', 'kualifikasi' => 'Min DIII', 'nominal' => 1000000, 'deskripsi' => 'Tunjangan untuk Sekretaris Direksi'],
        ];

        foreach ($jabatans as $jabatan) {
            DB::table('master_jabatan')->insert([
                'nama' => $jabatan['nama'],
                'kualifikasi' => $jabatan['kualifikasi'],
                'nominal' => $jabatan['nominal'],
                'deskripsi' => $jabatan['deskripsi'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        $fungsionals = [
            ['nama' => 'Dokter Spesialis', 'nominal' => 2000000, 'deskripsi' => 'Tunjangan untuk Dokter Spesialis'],
            ['nama' => 'Dokter Umum', 'nominal' => 1500000, 'deskripsi' => 'Tunjangan untuk Dokter Umum'],
            ['nama' => 'Dokter Gigi', 'nominal' => 1300000, 'deskripsi' => 'Tunjangan untuk Dokter Gigi'],
            ['nama' => 'Case Manajer', 'nominal' => 1700000, 'deskripsi' => 'Tunjangan untuk Case Manajer'],
            ['nama' => 'Apoteker', 'nominal' => 1500000, 'deskripsi' => 'Tunjangan untuk Apoteker'],
            ['nama' => 'IPCN', 'nominal' => 2000000, 'deskripsi' => 'Tunjangan untuk IPCN'],
            ['nama' => 'Ners', 'nominal' => 1000000, 'deskripsi' => 'Tunjangan untuk Ners'],
            ['nama' => 'Psikologi Klinik', 'nominal' => 1000000, 'deskripsi' => 'Tunjangan untuk Psikologi Klinik'],
            ['nama' => 'Penata Anastes', 'nominal' => 900000, 'deskripsi' => 'Tunjangan untuk Penata Anastes'],
            ['nama' => 'Perawat Diploma', 'nominal' => 700000, 'deskripsi' => 'Tunjangan untuk Perawat Diploma'],
            ['nama' => 'Bidan', 'nominal' => 700000, 'deskripsi' => 'Tunjangan untuk Bidan'],
            ['nama' => 'Analis Kesehatan', 'nominal' => 700000, 'deskripsi' => 'Tunjangan untuk Analis Kesehatan'],
            ['nama' => 'Radiografer', 'nominal' => 700000, 'deskripsi' => 'Tunjangan untuk Radiografer'],
            ['nama' => 'Fisioterapi', 'nominal' => 700000, 'deskripsi' => 'Tunjangan untuk Fisioterapi'],
            ['nama' => 'Tenaga Informasi Teknologi/ IT', 'nominal' => 700000, 'deskripsi' => 'Tunjangan untuk Tenaga Informasi Teknologi/ IT'],
            ['nama' => 'Ahli Gizi/ Dietisien', 'nominal' => 500000, 'deskripsi' => 'Tunjangan untuk Ahli Gizi/ Dietisien'],
            ['nama' => 'Tenaga Teknis Kefarmasian (TTK)', 'nominal' => 600000, 'deskripsi' => 'Tunjangan untuk Tenaga Teknis Kefarmasian (TTK)'],
            ['nama' => 'Kesehatan Lingkungan/ Sanitarian', 'nominal' => 600000, 'deskripsi' => 'Tunjangan untuk Kesehatan Lingkungan/ Sanitarian'],
            ['nama' => 'Perekam Medik', 'nominal' => 500000, 'deskripsi' => 'Tunjangan untuk Perekam Medik'],
            ['nama' => 'Elektromedik', 'nominal' => 600000, 'deskripsi' => 'Tunjangan untuk Elektromedik'],
            ['nama' => 'Terapi Wicara, Okupasi Terapi', 'nominal' => 700000, 'deskripsi' => 'Tunjangan untuk Terapi Wicara, Okupasi Terapi'],
        ];

        foreach ($fungsionals as $fungsional) {
            DB::table('master_fungsi')->insert([
                'nama' => $fungsional['nama'],
                'nominal' => $fungsional['nominal'],
                'deskripsi' => $fungsional['deskripsi'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        $penyesuaians = [
            ['pendidikan_awal' => 1, 'pendidikan_penyesuaian' => 2, 'masa_kerja' => 2], // SD -> SLTP
            ['pendidikan_awal' => 2, 'pendidikan_penyesuaian' => 3, 'masa_kerja' => 2], // SLTP -> SLTA
            ['pendidikan_awal' => 3, 'pendidikan_penyesuaian' => 5, 'masa_kerja' => 3], // SLTA -> DIII
            ['pendidikan_awal' => 3, 'pendidikan_penyesuaian' => 6, 'masa_kerja' => 4], // SLTA -> DIV
            ['pendidikan_awal' => 3, 'pendidikan_penyesuaian' => 7, 'masa_kerja' => 4], // SLTA -> S1 - Umum
            ['pendidikan_awal' => 3, 'pendidikan_penyesuaian' => 8, 'masa_kerja' => 5], // SLTA -> S1 - Apoteker
            ['pendidikan_awal' => 3, 'pendidikan_penyesuaian' => 9, 'masa_kerja' => 5], // SLTA -> S1 - Nurse
            ['pendidikan_awal' => 3, 'pendidikan_penyesuaian' => 10, 'masa_kerja' => 5], // SLTA -> S1 - Dokter
            ['pendidikan_awal' => 4, 'pendidikan_penyesuaian' => 5, 'masa_kerja' => 3], // Kejuruan -> DIII
            ['pendidikan_awal' => 4, 'pendidikan_penyesuaian' => 6, 'masa_kerja' => 4], // Kejuruan -> DIV
            ['pendidikan_awal' => 4, 'pendidikan_penyesuaian' => 7, 'masa_kerja' => 4], // Kejuruan -> S1 - Umum
            ['pendidikan_awal' => 4, 'pendidikan_penyesuaian' => 8, 'masa_kerja' => 5], // Kejuruan -> S1 - Apoteker
            ['pendidikan_awal' => 4, 'pendidikan_penyesuaian' => 9, 'masa_kerja' => 5], // Kejuruan -> S1 - Nurse
            ['pendidikan_awal' => 4, 'pendidikan_penyesuaian' => 10, 'masa_kerja' => 5], // Kejuruan -> S1 - Dokter
            ['pendidikan_awal' => 5, 'pendidikan_penyesuaian' => 6, 'masa_kerja' => 1], // DIII -> DIV
            ['pendidikan_awal' => 5, 'pendidikan_penyesuaian' => 7, 'masa_kerja' => 2], // DIII -> S1 - Umum
            ['pendidikan_awal' => 5, 'pendidikan_penyesuaian' => 8, 'masa_kerja' => 3], // DIII -> S1 - Apoteker
            ['pendidikan_awal' => 5, 'pendidikan_penyesuaian' => 9, 'masa_kerja' => 3], // DIII -> S1 - Nurse
            ['pendidikan_awal' => 5, 'pendidikan_penyesuaian' => 10, 'masa_kerja' => 3], // DIII -> S1 - Dokter
            ['pendidikan_awal' => 6, 'pendidikan_penyesuaian' => 8, 'masa_kerja' => 1], // DIV -> S1 - Apoteker
            ['pendidikan_awal' => 6, 'pendidikan_penyesuaian' => 9, 'masa_kerja' => 1], // DIV -> S1 - Nurse
            ['pendidikan_awal' => 6, 'pendidikan_penyesuaian' => 10, 'masa_kerja' => 1], // DIV -> S1 - Dokter
            ['pendidikan_awal' => 7, 'pendidikan_penyesuaian' => 8, 'masa_kerja' => 1], // S1 - Umum -> S1 - Apoteker
            ['pendidikan_awal' => 7, 'pendidikan_penyesuaian' => 9, 'masa_kerja' => 1], // S1 - Umum -> S1 - Nurse
            ['pendidikan_awal' => 7, 'pendidikan_penyesuaian' => 10, 'masa_kerja' => 1], // S1 - Umum -> S1 - Dokter
            ['pendidikan_awal' => 7, 'pendidikan_penyesuaian' => 11, 'masa_kerja' => 2], // S1 - Umum -> S2 - Umum
            ['pendidikan_awal' => 7, 'pendidikan_penyesuaian' => 12, 'masa_kerja' => 2], // S1 - Umum -> S2 - Spesialis
            ['pendidikan_awal' => 7, 'pendidikan_penyesuaian' => 13, 'masa_kerja' => 2], // S1 - Umum -> S2 - Direktur
            ['pendidikan_awal' => 8, 'pendidikan_penyesuaian' => 11, 'masa_kerja' => 2], // S1 - Apoteker -> S2 - Umum
            ['pendidikan_awal' => 8, 'pendidikan_penyesuaian' => 12, 'masa_kerja' => 2], // S1 - Apoteker -> S2 - Spesialis
            ['pendidikan_awal' => 8, 'pendidikan_penyesuaian' => 13, 'masa_kerja' => 2], // S1 - Apoteker -> S2 - Direktur
            ['pendidikan_awal' => 9, 'pendidikan_penyesuaian' => 11, 'masa_kerja' => 2], // S1 - Nurse -> S2 - Umum
            ['pendidikan_awal' => 9, 'pendidikan_penyesuaian' => 12, 'masa_kerja' => 2], // S1 - Nurse -> S2 - Spesialis
            ['pendidikan_awal' => 9, 'pendidikan_penyesuaian' => 13, 'masa_kerja' => 2], // S1 - Nurse -> S2 - Direktur
            ['pendidikan_awal' => 10, 'pendidikan_penyesuaian' => 11, 'masa_kerja' => 2], // S1 - Dokter -> S2 - Umum
            ['pendidikan_awal' => 10, 'pendidikan_penyesuaian' => 12, 'masa_kerja' => 2], // S1 - Dokter -> S2 - Spesialis
            ['pendidikan_awal' => 10, 'pendidikan_penyesuaian' => 13, 'masa_kerja' => 2], // S1 - Dokter -> S2 - Direktur
        ];

        foreach ($penyesuaians as $penyesuaian) {
            DB::table('master_penyesuaian')->insert([
                'pendidikan_awal' => $penyesuaian['pendidikan_awal'],
                'pendidikan_penyesuaian' => $penyesuaian['pendidikan_penyesuaian'],
                'masa_kerja' => $penyesuaian['masa_kerja'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        $umums = [
            [
                'nama' => 'Staff Administrasi / Komite Full Time',
                'nominal' => 350000,
                'deskripsi' => 'Gaji untuk Staff Administrasi / Komite Full Time',
            ],
            [
                'nama' => 'Staff Pelayanan',
                'nominal' => 250000,
                'deskripsi' => 'Gaji untuk Staff Pelayanan',
            ]
        ];

        foreach ($umums as $umum) {
            DB::table('master_umum')->insert([
                'nama' => $umum['nama'],
                'nominal' => $umum['nominal'],
                'deskripsi' => $umum['deskripsi'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        DB::table('master_trans')->insert([
            [
                'nama' => 'Tetap',
                'nom_makan' => 200000,
                'nom_transport' => 500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        $tunjanganKhusus = [
            [
                'nama' => 'Dokter Spesialis dengan Surat Pengangkatan Karyawan tetap sebelum tahun 2019',
                'nominal' => 20000000,
                'deskripsi' => '',
            ],
            [
                'nama' => 'Dokter Spesialis dengan Surat Pengangkatan Karyawan tetap periode tahun 2019 - 2023',
                'nominal' => 10000000,
                'deskripsi' => '',
            ],
            [
                'nama' => 'Dokter Umum dengan Surat Pengangkatan Karyawan tetap sebelum tahun 2016',
                'nominal' => 15000000,
                'deskripsi' => '',
            ],
            [
                'nama' => 'Dokter Umum dengan Surat Pengangkatan Karyawan tetap periode tahun 2016 - 2018',
                'nominal' => 10000000,
                'deskripsi' => '',
            ],
            [
                'nama' => 'Dokter Umum dengan Surat Pengangkatan Karyawan tetap periode tahun 2019 - 2022',
                'nominal' => 2500000,
                'deskripsi' => '',
            ],
            [
                'nama' => 'Dokter Gigi dengan Surat Pengangkatan Karyawan tetap sebelum tahun 2023',
                'nominal' => 2000000,
                'deskripsi' => '',
            ],
            [
                'nama' => 'Dokter penanggungjawab klaim asuransi rumah sakit',
                'nominal' => 2200000,
                'deskripsi' => '',
            ],
            [
                'nama' => 'Dokter yang mempunyai keahlian dibidang Advokat',
                'nominal' => 10000000,
                'deskripsi' => '',
            ],
            [
                'nama' => 'Tenaga Kesehatan yang memberikan lebih dari 1 (satu) STR untuk kepentingan Rumah Sakit',
                'nominal' => 500000,
                'deskripsi' => '',
            ],
            [
                'nama' => 'Perawat Penanggung jawab shift',
                'nominal' => 200000,
                'deskripsi' => '',
            ],
            [
                'nama' => 'Koordinator Poliklinik',
                'nominal' => 200000,
                'deskripsi' => '',
            ],
            [
                'nama' => 'Koordinator Penata Anestasi',
                'nominal' => 200000,
                'deskripsi' => '',
            ],
            [
                'nama' => 'Koordinator Asisten Kamar Bedah',
                'nominal' => 200000,
                'deskripsi' => '',
            ],
        ];

        foreach ($tunjanganKhusus as $tunjangan) {
            DB::table('master_khusus')->insert([
                'nama' => $tunjangan['nama'],
                'nominal' => $tunjangan['nominal'],
                'deskripsi' => $tunjangan['deskripsi'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        $gapoks = [
            // gol_id = Ia
            ['gol_id' => 1, 'masa_kerja' => 0, 'nominal_gapok' => 1170600],
            ['gol_id' => 1, 'masa_kerja' => 1, 'nominal_gapok' => 1170600],
            ['gol_id' => 1, 'masa_kerja' => 2, 'nominal_gapok' => 1207500],
            ['gol_id' => 1, 'masa_kerja' => 3, 'nominal_gapok' => 1207500],
            ['gol_id' => 1, 'masa_kerja' => 4, 'nominal_gapok' => 1245525],
            ['gol_id' => 1, 'masa_kerja' => 5, 'nominal_gapok' => 1245525],
            ['gol_id' => 1, 'masa_kerja' => 6, 'nominal_gapok' => 1284750],
            ['gol_id' => 1, 'masa_kerja' => 7, 'nominal_gapok' => 1284750],
            ['gol_id' => 1, 'masa_kerja' => 8, 'nominal_gapok' => 1325175],
            ['gol_id' => 1, 'masa_kerja' => 9, 'nominal_gapok' => 1325175],
            ['gol_id' => 1, 'masa_kerja' => 10, 'nominal_gapok' => 1366950],
            ['gol_id' => 1, 'masa_kerja' => 11, 'nominal_gapok' => 1366950],
            ['gol_id' => 1, 'masa_kerja' => 12, 'nominal_gapok' => 1410000],
            ['gol_id' => 1, 'masa_kerja' => 13, 'nominal_gapok' => 1410000],
            ['gol_id' => 1, 'masa_kerja' => 14, 'nominal_gapok' => 1454400],
            ['gol_id' => 1, 'masa_kerja' => 15, 'nominal_gapok' => 1454400],
            ['gol_id' => 1, 'masa_kerja' => 16, 'nominal_gapok' => 1500225],
            ['gol_id' => 1, 'masa_kerja' => 17, 'nominal_gapok' => 1500225],
            ['gol_id' => 1, 'masa_kerja' => 18, 'nominal_gapok' => 1547475],
            ['gol_id' => 1, 'masa_kerja' => 19, 'nominal_gapok' => 1547475],
            ['gol_id' => 1, 'masa_kerja' => 20, 'nominal_gapok' => 1596225],
            ['gol_id' => 1, 'masa_kerja' => 21, 'nominal_gapok' => 1596225],
            ['gol_id' => 1, 'masa_kerja' => 22, 'nominal_gapok' => 1646475],
            ['gol_id' => 1, 'masa_kerja' => 23, 'nominal_gapok' => 1646475],
            ['gol_id' => 1, 'masa_kerja' => 24, 'nominal_gapok' => 1698300],
            ['gol_id' => 1, 'masa_kerja' => 25, 'nominal_gapok' => 1698300],
            ['gol_id' => 1, 'masa_kerja' => 26, 'nominal_gapok' => 1751850],
            ['gol_id' => 1, 'masa_kerja' => 27, 'nominal_gapok' => 1751850],
            //gol_id = Ib
            ['gol_id' => 2, 'masa_kerja' => 0, 'nominal_gapok' => 1170600],
            ['gol_id' => 2, 'masa_kerja' => 1, 'nominal_gapok' => 1170600],
            ['gol_id' => 2, 'masa_kerja' => 2, 'nominal_gapok' => 1278375],
            ['gol_id' => 2, 'masa_kerja' => 3, 'nominal_gapok' => 1278375],
            ['gol_id' => 2, 'masa_kerja' => 4, 'nominal_gapok' => 1318650],
            ['gol_id' => 2, 'masa_kerja' => 5, 'nominal_gapok' => 1318650],
            ['gol_id' => 2, 'masa_kerja' => 6, 'nominal_gapok' => 1222125],
            ['gol_id' => 2, 'masa_kerja' => 7, 'nominal_gapok' => 1222125],
            ['gol_id' => 2, 'masa_kerja' => 8, 'nominal_gapok' => 1403025],
            ['gol_id' => 2, 'masa_kerja' => 9, 'nominal_gapok' => 1403025],
            ['gol_id' => 2, 'masa_kerja' => 10, 'nominal_gapok' => 1447200],
            ['gol_id' => 2, 'masa_kerja' => 11, 'nominal_gapok' => 1447200],
            ['gol_id' => 2, 'masa_kerja' => 12, 'nominal_gapok' => 1492800],
            ['gol_id' => 2, 'masa_kerja' => 13, 'nominal_gapok' => 1492800],
            ['gol_id' => 2, 'masa_kerja' => 14, 'nominal_gapok' => 1539825],
            ['gol_id' => 2, 'masa_kerja' => 15, 'nominal_gapok' => 1539825],
            ['gol_id' => 2, 'masa_kerja' => 16, 'nominal_gapok' => 1588275],
            ['gol_id' => 2, 'masa_kerja' => 17, 'nominal_gapok' => 1588275],
            ['gol_id' => 2, 'masa_kerja' => 18, 'nominal_gapok' => 1638300],
            ['gol_id' => 2, 'masa_kerja' => 19, 'nominal_gapok' => 1638300],
            ['gol_id' => 2, 'masa_kerja' => 20, 'nominal_gapok' => 1689900],
            ['gol_id' => 2, 'masa_kerja' => 21, 'nominal_gapok' => 1689900],
            ['gol_id' => 2, 'masa_kerja' => 22, 'nominal_gapok' => 1743150],
            ['gol_id' => 2, 'masa_kerja' => 23, 'nominal_gapok' => 1743150],
            ['gol_id' => 2, 'masa_kerja' => 24, 'nominal_gapok' => 1798050],
            ['gol_id' => 2, 'masa_kerja' => 25, 'nominal_gapok' => 1798050],
            ['gol_id' => 2, 'masa_kerja' => 26, 'nominal_gapok' => 1854675],
            ['gol_id' => 2, 'masa_kerja' => 27, 'nominal_gapok' => 1854675],
            // gol_id = Ic
            ['gol_id' => 3, 'masa_kerja' => 0, 'nominal_gapok' => 1170600],
            ['gol_id' => 3, 'masa_kerja' => 1, 'nominal_gapok' => 1170600],
            ['gol_id' => 3, 'masa_kerja' => 2, 'nominal_gapok' => 1332450],
            ['gol_id' => 3, 'masa_kerja' => 3, 'nominal_gapok' => 1332450],
            ['gol_id' => 3, 'masa_kerja' => 4, 'nominal_gapok' => 1374450],
            ['gol_id' => 3, 'masa_kerja' => 5, 'nominal_gapok' => 1374450],
            ['gol_id' => 3, 'masa_kerja' => 6, 'nominal_gapok' => 1417725],
            ['gol_id' => 3, 'masa_kerja' => 7, 'nominal_gapok' => 1417725],
            ['gol_id' => 3, 'masa_kerja' => 8, 'nominal_gapok' => 1462350],
            ['gol_id' => 3, 'masa_kerja' => 9, 'nominal_gapok' => 1462350],
            ['gol_id' => 3, 'masa_kerja' => 10, 'nominal_gapok' => 1508400],
            ['gol_id' => 3, 'masa_kerja' => 11, 'nominal_gapok' => 1508400],
            ['gol_id' => 3, 'masa_kerja' => 12, 'nominal_gapok' => 1555950],
            ['gol_id' => 3, 'masa_kerja' => 13, 'nominal_gapok' => 1555950],
            ['gol_id' => 3, 'masa_kerja' => 14, 'nominal_gapok' => 1604925],
            ['gol_id' => 3, 'masa_kerja' => 15, 'nominal_gapok' => 1604925],
            ['gol_id' => 3, 'masa_kerja' => 16, 'nominal_gapok' => 1655475],
            ['gol_id' => 3, 'masa_kerja' => 17, 'nominal_gapok' => 1655475],
            ['gol_id' => 3, 'masa_kerja' => 18, 'nominal_gapok' => 1707600],
            ['gol_id' => 3, 'masa_kerja' => 19, 'nominal_gapok' => 1707600],
            ['gol_id' => 3, 'masa_kerja' => 20, 'nominal_gapok' => 1761375],
            ['gol_id' => 3, 'masa_kerja' => 21, 'nominal_gapok' => 1761375],
            ['gol_id' => 3, 'masa_kerja' => 22, 'nominal_gapok' => 1816875],
            ['gol_id' => 3, 'masa_kerja' => 23, 'nominal_gapok' => 1816875],
            ['gol_id' => 3, 'masa_kerja' => 24, 'nominal_gapok' => 1874100],
            ['gol_id' => 3, 'masa_kerja' => 25, 'nominal_gapok' => 1874100],
            ['gol_id' => 3, 'masa_kerja' => 26, 'nominal_gapok' => 1933125],
            ['gol_id' => 3, 'masa_kerja' => 27, 'nominal_gapok' => 1933125],
            // gol_id = Id
            ['gol_id' => 4, 'masa_kerja' => 0, 'nominal_gapok' => 1170600],
            ['gol_id' => 4, 'masa_kerja' => 1, 'nominal_gapok' => 1170600],
            ['gol_id' => 4, 'masa_kerja' => 2, 'nominal_gapok' => 1388850],
            ['gol_id' => 4, 'masa_kerja' => 3, 'nominal_gapok' => 1388850],
            ['gol_id' => 4, 'masa_kerja' => 4, 'nominal_gapok' => 1432575],
            ['gol_id' => 4, 'masa_kerja' => 5, 'nominal_gapok' => 1432575],
            ['gol_id' => 4, 'masa_kerja' => 6, 'nominal_gapok' => 1477650],
            ['gol_id' => 4, 'masa_kerja' => 7, 'nominal_gapok' => 1477650],
            ['gol_id' => 4, 'masa_kerja' => 8, 'nominal_gapok' => 1524225],
            ['gol_id' => 4, 'masa_kerja' => 9, 'nominal_gapok' => 1524225],
            ['gol_id' => 4, 'masa_kerja' => 10, 'nominal_gapok' => 1572225],
            ['gol_id' => 4, 'masa_kerja' => 11, 'nominal_gapok' => 1572225],
            ['gol_id' => 4, 'masa_kerja' => 12, 'nominal_gapok' => 1621725],
            ['gol_id' => 4, 'masa_kerja' => 13, 'nominal_gapok' => 1621725],
            ['gol_id' => 4, 'masa_kerja' => 14, 'nominal_gapok' => 1672800],
            ['gol_id' => 4, 'masa_kerja' => 15, 'nominal_gapok' => 1672800],
            ['gol_id' => 4, 'masa_kerja' => 16, 'nominal_gapok' => 1725525],
            ['gol_id' => 4, 'masa_kerja' => 17, 'nominal_gapok' => 1725525],
            ['gol_id' => 4, 'masa_kerja' => 18, 'nominal_gapok' => 1779825],
            ['gol_id' => 4, 'masa_kerja' => 19, 'nominal_gapok' => 1779825],
            ['gol_id' => 4, 'masa_kerja' => 20, 'nominal_gapok' => 1835925],
            ['gol_id' => 4, 'masa_kerja' => 21, 'nominal_gapok' => 1835925],
            ['gol_id' => 4, 'masa_kerja' => 22, 'nominal_gapok' => 1893750],
            ['gol_id' => 4, 'masa_kerja' => 23, 'nominal_gapok' => 1893750],
            ['gol_id' => 4, 'masa_kerja' => 24, 'nominal_gapok' => 1953375],
            ['gol_id' => 4, 'masa_kerja' => 25, 'nominal_gapok' => 1953375],
            ['gol_id' => 4, 'masa_kerja' => 26, 'nominal_gapok' => 2014875],
            ['gol_id' => 4, 'masa_kerja' => 27, 'nominal_gapok' => 2014875],
            // gol_id = IIa
            ['gol_id' => 5, 'masa_kerja' => 0, 'nominal_gapok' => 1516650],
            ['gol_id' => 5, 'masa_kerja' => 1, 'nominal_gapok' => 1540575],
            ['gol_id' => 5, 'masa_kerja' => 2, 'nominal_gapok' => 1540575],
            ['gol_id' => 5, 'masa_kerja' => 3, 'nominal_gapok' => 1540575],
            ['gol_id' => 5, 'masa_kerja' => 4, 'nominal_gapok' => 1589100],
            ['gol_id' => 5, 'masa_kerja' => 5, 'nominal_gapok' => 1589100],
            ['gol_id' => 5, 'masa_kerja' => 6, 'nominal_gapok' => 1639125],
            ['gol_id' => 5, 'masa_kerja' => 7, 'nominal_gapok' => 1639125],
            ['gol_id' => 5, 'masa_kerja' => 8, 'nominal_gapok' => 1690725],
            ['gol_id' => 5, 'masa_kerja' => 9, 'nominal_gapok' => 1690725],
            ['gol_id' => 5, 'masa_kerja' => 10, 'nominal_gapok' => 1743975],
            ['gol_id' => 5, 'masa_kerja' => 11, 'nominal_gapok' => 1743975],
            ['gol_id' => 5, 'masa_kerja' => 12, 'nominal_gapok' => 1797450],
            ['gol_id' => 5, 'masa_kerja' => 13, 'nominal_gapok' => 1797450],
            ['gol_id' => 5, 'masa_kerja' => 14, 'nominal_gapok' => 1855575],
            ['gol_id' => 5, 'masa_kerja' => 15, 'nominal_gapok' => 1855575],
            ['gol_id' => 5, 'masa_kerja' => 16, 'nominal_gapok' => 1914000],
            ['gol_id' => 5, 'masa_kerja' => 17, 'nominal_gapok' => 1914000],
            ['gol_id' => 5, 'masa_kerja' => 18, 'nominal_gapok' => 1974300],
            ['gol_id' => 5, 'masa_kerja' => 19, 'nominal_gapok' => 1974300],
            ['gol_id' => 5, 'masa_kerja' => 20, 'nominal_gapok' => 2036475],
            ['gol_id' => 5, 'masa_kerja' => 21, 'nominal_gapok' => 2036475],
            ['gol_id' => 5, 'masa_kerja' => 22, 'nominal_gapok' => 2100600],
            ['gol_id' => 5, 'masa_kerja' => 23, 'nominal_gapok' => 2100600],
            ['gol_id' => 5, 'masa_kerja' => 24, 'nominal_gapok' => 2166825],
            ['gol_id' => 5, 'masa_kerja' => 25, 'nominal_gapok' => 2166825],
            ['gol_id' => 5, 'masa_kerja' => 26, 'nominal_gapok' => 2235000],
            ['gol_id' => 5, 'masa_kerja' => 27, 'nominal_gapok' => 2235000],
            ['gol_id' => 5, 'masa_kerja' => 28, 'nominal_gapok' => 2305425],
            ['gol_id' => 5, 'masa_kerja' => 29, 'nominal_gapok' => 2305425],
            ['gol_id' => 5, 'masa_kerja' => 30, 'nominal_gapok' => 2378025],
            ['gol_id' => 5, 'masa_kerja' => 31, 'nominal_gapok' => 2378025],
            ['gol_id' => 5, 'masa_kerja' => 32, 'nominal_gapok' => 2452950],
            ['gol_id' => 5, 'masa_kerja' => 33, 'nominal_gapok' => 2452950],
            ['gol_id' => 5, 'masa_kerja' => 34, 'nominal_gapok' => 2530200],
            // gol_id = IIb
            ['gol_id' => 6, 'masa_kerja' => 0, 'nominal_gapok' => 1516650],
            ['gol_id' => 6, 'masa_kerja' => 1, 'nominal_gapok' => 1540575],
            ['gol_id' => 6, 'masa_kerja' => 2, 'nominal_gapok' => 1540575],
            ['gol_id' => 6, 'masa_kerja' => 3, 'nominal_gapok' => 1540575],
            ['gol_id' => 6, 'masa_kerja' => 4, 'nominal_gapok' => 1656300],
            ['gol_id' => 6, 'masa_kerja' => 5, 'nominal_gapok' => 1656300],
            ['gol_id' => 6, 'masa_kerja' => 6, 'nominal_gapok' => 1708425],
            ['gol_id' => 6, 'masa_kerja' => 7, 'nominal_gapok' => 1708425],
            ['gol_id' => 6, 'masa_kerja' => 8, 'nominal_gapok' => 1762275],
            ['gol_id' => 6, 'masa_kerja' => 9, 'nominal_gapok' => 1762275],
            ['gol_id' => 6, 'masa_kerja' => 10, 'nominal_gapok' => 1817775],
            ['gol_id' => 6, 'masa_kerja' => 11, 'nominal_gapok' => 1817775],
            ['gol_id' => 6, 'masa_kerja' => 12, 'nominal_gapok' => 1875000],
            ['gol_id' => 6, 'masa_kerja' => 13, 'nominal_gapok' => 1875000],
            ['gol_id' => 6, 'masa_kerja' => 14, 'nominal_gapok' => 1934100],
            ['gol_id' => 6, 'masa_kerja' => 15, 'nominal_gapok' => 1934100],
            ['gol_id' => 6, 'masa_kerja' => 16, 'nominal_gapok' => 1995000],
            ['gol_id' => 6, 'masa_kerja' => 17, 'nominal_gapok' => 1995000],
            ['gol_id' => 6, 'masa_kerja' => 18, 'nominal_gapok' => 2057850],
            ['gol_id' => 6, 'masa_kerja' => 19, 'nominal_gapok' => 2057850],
            ['gol_id' => 6, 'masa_kerja' => 20, 'nominal_gapok' => 2122650],
            ['gol_id' => 6, 'masa_kerja' => 21, 'nominal_gapok' => 2122650],
            ['gol_id' => 6, 'masa_kerja' => 22, 'nominal_gapok' => 2189475],
            ['gol_id' => 6, 'masa_kerja' => 23, 'nominal_gapok' => 2189475],
            ['gol_id' => 6, 'masa_kerja' => 24, 'nominal_gapok' => 2258475],
            ['gol_id' => 6, 'masa_kerja' => 25, 'nominal_gapok' => 2258475],
            ['gol_id' => 6, 'masa_kerja' => 26, 'nominal_gapok' => 2329575],
            ['gol_id' => 6, 'masa_kerja' => 27, 'nominal_gapok' => 2329575],
            ['gol_id' => 6, 'masa_kerja' => 28, 'nominal_gapok' => 2402925],
            ['gol_id' => 6, 'masa_kerja' => 29, 'nominal_gapok' => 2402925],
            ['gol_id' => 6, 'masa_kerja' => 30, 'nominal_gapok' => 2478600],
            ['gol_id' => 6, 'masa_kerja' => 31, 'nominal_gapok' => 2478600],
            ['gol_id' => 6, 'masa_kerja' => 32, 'nominal_gapok' => 2556675],
            ['gol_id' => 6, 'masa_kerja' => 33, 'nominal_gapok' => 2556675],
            ['gol_id' => 6, 'masa_kerja' => 34, 'nominal_gapok' => 2637225],
            // gol_id = IIc
            ['gol_id' => 7, 'masa_kerja' => 0, 'nominal_gapok' => 1516650],
            ['gol_id' => 7, 'masa_kerja' => 1, 'nominal_gapok' => 1540575],
            ['gol_id' => 7, 'masa_kerja' => 2, 'nominal_gapok' => 1540575],
            ['gol_id' => 7, 'masa_kerja' => 3, 'nominal_gapok' => 1540575],
            ['gol_id' => 7, 'masa_kerja' => 4, 'nominal_gapok' => 1726350],
            ['gol_id' => 7, 'masa_kerja' => 5, 'nominal_gapok' => 1726350],
            ['gol_id' => 7, 'masa_kerja' => 6, 'nominal_gapok' => 1780725],
            ['gol_id' => 7, 'masa_kerja' => 7, 'nominal_gapok' => 1780725],
            ['gol_id' => 7, 'masa_kerja' => 8, 'nominal_gapok' => 1836825],
            ['gol_id' => 7, 'masa_kerja' => 9, 'nominal_gapok' => 1836825],
            ['gol_id' => 7, 'masa_kerja' => 10, 'nominal_gapok' => 1894650],
            ['gol_id' => 7, 'masa_kerja' => 11, 'nominal_gapok' => 1894650],
            ['gol_id' => 7, 'masa_kerja' => 12, 'nominal_gapok' => 1954350],
            ['gol_id' => 7, 'masa_kerja' => 13, 'nominal_gapok' => 1954350],
            ['gol_id' => 7, 'masa_kerja' => 14, 'nominal_gapok' => 2015850],
            ['gol_id' => 7, 'masa_kerja' => 15, 'nominal_gapok' => 2015850],
            ['gol_id' => 7, 'masa_kerja' => 16, 'nominal_gapok' => 2079375],
            ['gol_id' => 7, 'masa_kerja' => 17, 'nominal_gapok' => 2079375],
            ['gol_id' => 7, 'masa_kerja' => 18, 'nominal_gapok' => 2144850],
            ['gol_id' => 7, 'masa_kerja' => 19, 'nominal_gapok' => 2144850],
            ['gol_id' => 7, 'masa_kerja' => 20, 'nominal_gapok' => 2212425],
            ['gol_id' => 7, 'masa_kerja' => 21, 'nominal_gapok' => 2212425],
            ['gol_id' => 7, 'masa_kerja' => 22, 'nominal_gapok' => 2282100],
            ['gol_id' => 7, 'masa_kerja' => 23, 'nominal_gapok' => 2282100],
            ['gol_id' => 7, 'masa_kerja' => 24, 'nominal_gapok' => 2353950],
            ['gol_id' => 7, 'masa_kerja' => 25, 'nominal_gapok' => 2353950],
            ['gol_id' => 7, 'masa_kerja' => 26, 'nominal_gapok' => 2428125],
            ['gol_id' => 7, 'masa_kerja' => 27, 'nominal_gapok' => 2428125],
            ['gol_id' => 7, 'masa_kerja' => 28, 'nominal_gapok' => 2512050],
            ['gol_id' => 7, 'masa_kerja' => 29, 'nominal_gapok' => 2512050],
            ['gol_id' => 7, 'masa_kerja' => 30, 'nominal_gapok' => 2583450],
            ['gol_id' => 7, 'masa_kerja' => 31, 'nominal_gapok' => 2583450],
            ['gol_id' => 7, 'masa_kerja' => 32, 'nominal_gapok' => 2664825],
            ['gol_id' => 7, 'masa_kerja' => 33, 'nominal_gapok' => 2664825],
            ['gol_id' => 7, 'masa_kerja' => 34, 'nominal_gapok' => 2748750],
            // gol_id = IId
            ['gol_id' => 8, 'masa_kerja' => 0, 'nominal_gapok' => 1516650],
            ['gol_id' => 8, 'masa_kerja' => 1, 'nominal_gapok' => 1540575],
            ['gol_id' => 8, 'masa_kerja' => 2, 'nominal_gapok' => 1540575],
            ['gol_id' => 8, 'masa_kerja' => 3, 'nominal_gapok' => 1540575],
            ['gol_id' => 8, 'masa_kerja' => 4, 'nominal_gapok' => 1799400],
            ['gol_id' => 8, 'masa_kerja' => 5, 'nominal_gapok' => 1799400],
            ['gol_id' => 8, 'masa_kerja' => 6, 'nominal_gapok' => 1856025],
            ['gol_id' => 8, 'masa_kerja' => 7, 'nominal_gapok' => 1856025],
            ['gol_id' => 8, 'masa_kerja' => 8, 'nominal_gapok' => 1914525],
            ['gol_id' => 8, 'masa_kerja' => 9, 'nominal_gapok' => 1914525],
            ['gol_id' => 8, 'masa_kerja' => 10, 'nominal_gapok' => 1974825],
            ['gol_id' => 8, 'masa_kerja' => 11, 'nominal_gapok' => 1974825],
            ['gol_id' => 8, 'masa_kerja' => 12, 'nominal_gapok' => 2037000],
            ['gol_id' => 8, 'masa_kerja' => 13, 'nominal_gapok' => 2037000],
            ['gol_id' => 8, 'masa_kerja' => 14, 'nominal_gapok' => 2101125],
            ['gol_id' => 8, 'masa_kerja' => 15, 'nominal_gapok' => 2101125],
            ['gol_id' => 8, 'masa_kerja' => 16, 'nominal_gapok' => 2167350],
            ['gol_id' => 8, 'masa_kerja' => 17, 'nominal_gapok' => 2167350],
            ['gol_id' => 8, 'masa_kerja' => 18, 'nominal_gapok' => 2235600],
            ['gol_id' => 8, 'masa_kerja' => 19, 'nominal_gapok' => 2235600],
            ['gol_id' => 8, 'masa_kerja' => 20, 'nominal_gapok' => 2306025],
            ['gol_id' => 8, 'masa_kerja' => 21, 'nominal_gapok' => 2306025],
            ['gol_id' => 8, 'masa_kerja' => 22, 'nominal_gapok' => 2378625],
            ['gol_id' => 8, 'masa_kerja' => 23, 'nominal_gapok' => 2378625],
            ['gol_id' => 8, 'masa_kerja' => 24, 'nominal_gapok' => 2453550],
            ['gol_id' => 8, 'masa_kerja' => 25, 'nominal_gapok' => 2453550],
            ['gol_id' => 8, 'masa_kerja' => 26, 'nominal_gapok' => 2530800],
            ['gol_id' => 8, 'masa_kerja' => 27, 'nominal_gapok' => 2530800],
            ['gol_id' => 8, 'masa_kerja' => 28, 'nominal_gapok' => 2610525],
            ['gol_id' => 8, 'masa_kerja' => 29, 'nominal_gapok' => 2610525],
            ['gol_id' => 8, 'masa_kerja' => 30, 'nominal_gapok' => 2692725],
            ['gol_id' => 8, 'masa_kerja' => 31, 'nominal_gapok' => 2692725],
            ['gol_id' => 8, 'masa_kerja' => 32, 'nominal_gapok' => 2777550],
            ['gol_id' => 8, 'masa_kerja' => 33, 'nominal_gapok' => 2777550],
            ['gol_id' => 8, 'masa_kerja' => 34, 'nominal_gapok' => 2865000],
            // gol_id = IIIa
            ['gol_id' => 9, 'masa_kerja' => 0, 'nominal_gapok' => 1934550],
            ['gol_id' => 9, 'masa_kerja' => 1, 'nominal_gapok' => 1934550],
            ['gol_id' => 9, 'masa_kerja' => 2, 'nominal_gapok' => 1995525],
            ['gol_id' => 9, 'masa_kerja' => 3, 'nominal_gapok' => 1995525],
            ['gol_id' => 9, 'masa_kerja' => 4, 'nominal_gapok' => 2058375],
            ['gol_id' => 9, 'masa_kerja' => 5, 'nominal_gapok' => 2058375],
            ['gol_id' => 9, 'masa_kerja' => 6, 'nominal_gapok' => 2123175],
            ['gol_id' => 9, 'masa_kerja' => 7, 'nominal_gapok' => 2123175],
            ['gol_id' => 9, 'masa_kerja' => 8, 'nominal_gapok' => 2190075],
            ['gol_id' => 9, 'masa_kerja' => 9, 'nominal_gapok' => 2190075],
            ['gol_id' => 9, 'masa_kerja' => 10, 'nominal_gapok' => 2259000],
            ['gol_id' => 9, 'masa_kerja' => 11, 'nominal_gapok' => 2259000],
            ['gol_id' => 9, 'masa_kerja' => 12, 'nominal_gapok' => 2330175],
            ['gol_id' => 9, 'masa_kerja' => 13, 'nominal_gapok' => 2330175],
            ['gol_id' => 9, 'masa_kerja' => 14, 'nominal_gapok' => 2403525],
            ['gol_id' => 9, 'masa_kerja' => 15, 'nominal_gapok' => 2403525],
            ['gol_id' => 9, 'masa_kerja' => 16, 'nominal_gapok' => 2479275],
            ['gol_id' => 9, 'masa_kerja' => 17, 'nominal_gapok' => 2479275],
            ['gol_id' => 9, 'masa_kerja' => 18, 'nominal_gapok' => 2557350],
            ['gol_id' => 9, 'masa_kerja' => 19, 'nominal_gapok' => 2557350],
            ['gol_id' => 9, 'masa_kerja' => 20, 'nominal_gapok' => 2637900],
            ['gol_id' => 9, 'masa_kerja' => 21, 'nominal_gapok' => 2637900],
            ['gol_id' => 9, 'masa_kerja' => 22, 'nominal_gapok' => 2720925],
            ['gol_id' => 9, 'masa_kerja' => 23, 'nominal_gapok' => 2720925],
            ['gol_id' => 9, 'masa_kerja' => 24, 'nominal_gapok' => 2806650],
            ['gol_id' => 9, 'masa_kerja' => 25, 'nominal_gapok' => 2806650],
            ['gol_id' => 9, 'masa_kerja' => 26, 'nominal_gapok' => 2895075],
            ['gol_id' => 9, 'masa_kerja' => 27, 'nominal_gapok' => 2895075],
            ['gol_id' => 9, 'masa_kerja' => 28, 'nominal_gapok' => 2986200],
            ['gol_id' => 9, 'masa_kerja' => 29, 'nominal_gapok' => 2986200],
            ['gol_id' => 9, 'masa_kerja' => 30, 'nominal_gapok' => 3080250],
            ['gol_id' => 9, 'masa_kerja' => 31, 'nominal_gapok' => 3080250],
            ['gol_id' => 9, 'masa_kerja' => 32, 'nominal_gapok' => 3177300],
            // gol_id = IIIb
            ['gol_id' => 10, 'masa_kerja' => 0, 'nominal_gapok' => 2016375],
            ['gol_id' => 10, 'masa_kerja' => 1, 'nominal_gapok' => 2016375],
            ['gol_id' => 10, 'masa_kerja' => 2, 'nominal_gapok' => 2079900],
            ['gol_id' => 10, 'masa_kerja' => 3, 'nominal_gapok' => 2079900],
            ['gol_id' => 10, 'masa_kerja' => 4, 'nominal_gapok' => 2145375],
            ['gol_id' => 10, 'masa_kerja' => 5, 'nominal_gapok' => 2145375],
            ['gol_id' => 10, 'masa_kerja' => 6, 'nominal_gapok' => 2212950],
            ['gol_id' => 10, 'masa_kerja' => 7, 'nominal_gapok' => 2212950],
            ['gol_id' => 10, 'masa_kerja' => 8, 'nominal_gapok' => 2282700],
            ['gol_id' => 10, 'masa_kerja' => 9, 'nominal_gapok' => 2282700],
            ['gol_id' => 10, 'masa_kerja' => 10, 'nominal_gapok' => 2354550],
            ['gol_id' => 10, 'masa_kerja' => 11, 'nominal_gapok' => 2354550],
            ['gol_id' => 10, 'masa_kerja' => 12, 'nominal_gapok' => 2428725],
            ['gol_id' => 10, 'masa_kerja' => 13, 'nominal_gapok' => 2428725],
            ['gol_id' => 10, 'masa_kerja' => 14, 'nominal_gapok' => 2505225],
            ['gol_id' => 10, 'masa_kerja' => 15, 'nominal_gapok' => 2505225],
            ['gol_id' => 10, 'masa_kerja' => 16, 'nominal_gapok' => 2584125],
            ['gol_id' => 10, 'masa_kerja' => 17, 'nominal_gapok' => 2584125],
            ['gol_id' => 10, 'masa_kerja' => 18, 'nominal_gapok' => 2665500],
            ['gol_id' => 10, 'masa_kerja' => 19, 'nominal_gapok' => 2665500],
            ['gol_id' => 10, 'masa_kerja' => 20, 'nominal_gapok' => 2749425],
            ['gol_id' => 10, 'masa_kerja' => 21, 'nominal_gapok' => 2749425],
            ['gol_id' => 10, 'masa_kerja' => 22, 'nominal_gapok' => 2836050],
            ['gol_id' => 10, 'masa_kerja' => 23, 'nominal_gapok' => 2836050],
            ['gol_id' => 10, 'masa_kerja' => 24, 'nominal_gapok' => 2925375],
            ['gol_id' => 10, 'masa_kerja' => 25, 'nominal_gapok' => 2925375],
            ['gol_id' => 10, 'masa_kerja' => 26, 'nominal_gapok' => 3017475],
            ['gol_id' => 10, 'masa_kerja' => 27, 'nominal_gapok' => 3017475],
            ['gol_id' => 10, 'masa_kerja' => 28, 'nominal_gapok' => 3112575],
            ['gol_id' => 10, 'masa_kerja' => 29, 'nominal_gapok' => 3112575],
            ['gol_id' => 10, 'masa_kerja' => 30, 'nominal_gapok' => 3210600],
            ['gol_id' => 10, 'masa_kerja' => 31, 'nominal_gapok' => 3210600],
            ['gol_id' => 10, 'masa_kerja' => 32, 'nominal_gapok' => 3311700],
            // gol_id = IIIc
            ['gol_id' => 11, 'masa_kerja' => 0, 'nominal_gapok' => 2101725],
            ['gol_id' => 11, 'masa_kerja' => 1, 'nominal_gapok' => 2101725],
            ['gol_id' => 11, 'masa_kerja' => 2, 'nominal_gapok' => 2167875],
            ['gol_id' => 11, 'masa_kerja' => 3, 'nominal_gapok' => 2167875],
            ['gol_id' => 11, 'masa_kerja' => 4, 'nominal_gapok' => 2236125],
            ['gol_id' => 11, 'masa_kerja' => 5, 'nominal_gapok' => 2236125],
            ['gol_id' => 11, 'masa_kerja' => 6, 'nominal_gapok' => 2306625],
            ['gol_id' => 11, 'masa_kerja' => 7, 'nominal_gapok' => 2306625],
            ['gol_id' => 11, 'masa_kerja' => 8, 'nominal_gapok' => 2379225],
            ['gol_id' => 11, 'masa_kerja' => 9, 'nominal_gapok' => 2379225],
            ['gol_id' => 11, 'masa_kerja' => 10, 'nominal_gapok' => 2454150],
            ['gol_id' => 11, 'masa_kerja' => 11, 'nominal_gapok' => 2454150],
            ['gol_id' => 11, 'masa_kerja' => 12, 'nominal_gapok' => 2531475],
            ['gol_id' => 11, 'masa_kerja' => 13, 'nominal_gapok' => 2531475],
            ['gol_id' => 11, 'masa_kerja' => 14, 'nominal_gapok' => 2611200],
            ['gol_id' => 11, 'masa_kerja' => 15, 'nominal_gapok' => 2611200],
            ['gol_id' => 11, 'masa_kerja' => 16, 'nominal_gapok' => 2693400],
            ['gol_id' => 11, 'masa_kerja' => 17, 'nominal_gapok' => 2693400],
            ['gol_id' => 11, 'masa_kerja' => 18, 'nominal_gapok' => 2778225],
            ['gol_id' => 11, 'masa_kerja' => 19, 'nominal_gapok' => 2778225],
            ['gol_id' => 11, 'masa_kerja' => 20, 'nominal_gapok' => 2865750],
            ['gol_id' => 11, 'masa_kerja' => 21, 'nominal_gapok' => 2865750],
            ['gol_id' => 11, 'masa_kerja' => 22, 'nominal_gapok' => 2956050],
            ['gol_id' => 11, 'masa_kerja' => 23, 'nominal_gapok' => 2956050],
            ['gol_id' => 11, 'masa_kerja' => 24, 'nominal_gapok' => 3049125],
            ['gol_id' => 11, 'masa_kerja' => 25, 'nominal_gapok' => 3049125],
            ['gol_id' => 11, 'masa_kerja' => 26, 'nominal_gapok' => 3145125],
            ['gol_id' => 11, 'masa_kerja' => 27, 'nominal_gapok' => 3145125],
            ['gol_id' => 11, 'masa_kerja' => 28, 'nominal_gapok' => 3244200],
            ['gol_id' => 11, 'masa_kerja' => 29, 'nominal_gapok' => 3244200],
            ['gol_id' => 11, 'masa_kerja' => 30, 'nominal_gapok' => 3346350],
            ['gol_id' => 11, 'masa_kerja' => 31, 'nominal_gapok' => 3346350],
            ['gol_id' => 11, 'masa_kerja' => 32, 'nominal_gapok' => 3451800],
            // gol_id = IIId
            ['gol_id' => 12, 'masa_kerja' => 0, 'nominal_gapok' => 2190600],
            ['gol_id' => 12, 'masa_kerja' => 1, 'nominal_gapok' => 2190600],
            ['gol_id' => 12, 'masa_kerja' => 2, 'nominal_gapok' => 2259600],
            ['gol_id' => 12, 'masa_kerja' => 3, 'nominal_gapok' => 2259600],
            ['gol_id' => 12, 'masa_kerja' => 4, 'nominal_gapok' => 2330775],
            ['gol_id' => 12, 'masa_kerja' => 5, 'nominal_gapok' => 2330775],
            ['gol_id' => 12, 'masa_kerja' => 6, 'nominal_gapok' => 2404125],
            ['gol_id' => 12, 'masa_kerja' => 7, 'nominal_gapok' => 2404125],
            ['gol_id' => 12, 'masa_kerja' => 8, 'nominal_gapok' => 2479875],
            ['gol_id' => 12, 'masa_kerja' => 9, 'nominal_gapok' => 2479875],
            ['gol_id' => 12, 'masa_kerja' => 10, 'nominal_gapok' => 2557950],
            ['gol_id' => 12, 'masa_kerja' => 11, 'nominal_gapok' => 2557950],
            ['gol_id' => 12, 'masa_kerja' => 12, 'nominal_gapok' => 2638575],
            ['gol_id' => 12, 'masa_kerja' => 13, 'nominal_gapok' => 2638575],
            ['gol_id' => 12, 'masa_kerja' => 14, 'nominal_gapok' => 2721675],
            ['gol_id' => 12, 'masa_kerja' => 15, 'nominal_gapok' => 2721675],
            ['gol_id' => 12, 'masa_kerja' => 16, 'nominal_gapok' => 2807325],
            ['gol_id' => 12, 'masa_kerja' => 17, 'nominal_gapok' => 2807325],
            ['gol_id' => 12, 'masa_kerja' => 18, 'nominal_gapok' => 2895750],
            ['gol_id' => 12, 'masa_kerja' => 19, 'nominal_gapok' => 2895750],
            ['gol_id' => 12, 'masa_kerja' => 20, 'nominal_gapok' => 2986950],
            ['gol_id' => 12, 'masa_kerja' => 21, 'nominal_gapok' => 2986950],
            ['gol_id' => 12, 'masa_kerja' => 22, 'nominal_gapok' => 3081075],
            ['gol_id' => 12, 'masa_kerja' => 23, 'nominal_gapok' => 3081075],
            ['gol_id' => 12, 'masa_kerja' => 24, 'nominal_gapok' => 3178125],
            ['gol_id' => 12, 'masa_kerja' => 25, 'nominal_gapok' => 3178125],
            ['gol_id' => 12, 'masa_kerja' => 26, 'nominal_gapok' => 3278175],
            ['gol_id' => 12, 'masa_kerja' => 27, 'nominal_gapok' => 3278175],
            ['gol_id' => 12, 'masa_kerja' => 28, 'nominal_gapok' => 3381450],
            ['gol_id' => 12, 'masa_kerja' => 29, 'nominal_gapok' => 3381450],
            ['gol_id' => 12, 'masa_kerja' => 30, 'nominal_gapok' => 3487950],
            ['gol_id' => 12, 'masa_kerja' => 31, 'nominal_gapok' => 3487950],
            ['gol_id' => 12, 'masa_kerja' => 32, 'nominal_gapok' => 3487950],
            // gol_id = IVa
            ['gol_id' => 13, 'masa_kerja' => 0, 'nominal_gapok' => 2283225],
            ['gol_id' => 13, 'masa_kerja' => 1, 'nominal_gapok' => 2283225],
            ['gol_id' => 13, 'masa_kerja' => 2, 'nominal_gapok' => 2355150],
            ['gol_id' => 13, 'masa_kerja' => 3, 'nominal_gapok' => 2355150],
            ['gol_id' => 13, 'masa_kerja' => 4, 'nominal_gapok' => 2429325],
            ['gol_id' => 13, 'masa_kerja' => 5, 'nominal_gapok' => 2429325],
            ['gol_id' => 13, 'masa_kerja' => 6, 'nominal_gapok' => 2505825],
            ['gol_id' => 13, 'masa_kerja' => 7, 'nominal_gapok' => 2505825],
            ['gol_id' => 13, 'masa_kerja' => 8, 'nominal_gapok' => 2584800],
            ['gol_id' => 13, 'masa_kerja' => 9, 'nominal_gapok' => 2584800],
            ['gol_id' => 13, 'masa_kerja' => 10, 'nominal_gapok' => 2666175],
            ['gol_id' => 13, 'masa_kerja' => 11, 'nominal_gapok' => 2666175],
            ['gol_id' => 13, 'masa_kerja' => 12, 'nominal_gapok' => 2750175],
            ['gol_id' => 13, 'masa_kerja' => 13, 'nominal_gapok' => 2750175],
            ['gol_id' => 13, 'masa_kerja' => 14, 'nominal_gapok' => 2836800],
            ['gol_id' => 13, 'masa_kerja' => 15, 'nominal_gapok' => 2836800],
            ['gol_id' => 13, 'masa_kerja' => 16, 'nominal_gapok' => 2926125],
            ['gol_id' => 13, 'masa_kerja' => 17, 'nominal_gapok' => 2926125],
            ['gol_id' => 13, 'masa_kerja' => 18, 'nominal_gapok' => 3018300],
            ['gol_id' => 13, 'masa_kerja' => 19, 'nominal_gapok' => 3018300],
            ['gol_id' => 13, 'masa_kerja' => 20, 'nominal_gapok' => 3113325],
            ['gol_id' => 13, 'masa_kerja' => 21, 'nominal_gapok' => 3113325],
            ['gol_id' => 13, 'masa_kerja' => 22, 'nominal_gapok' => 3211350],
            ['gol_id' => 13, 'masa_kerja' => 23, 'nominal_gapok' => 3211350],
            ['gol_id' => 13, 'masa_kerja' => 24, 'nominal_gapok' => 3312525],
            ['gol_id' => 13, 'masa_kerja' => 25, 'nominal_gapok' => 3312525],
            ['gol_id' => 13, 'masa_kerja' => 26, 'nominal_gapok' => 3416850],
            ['gol_id' => 13, 'masa_kerja' => 27, 'nominal_gapok' => 3416850],
            ['gol_id' => 13, 'masa_kerja' => 28, 'nominal_gapok' => 3524475],
            ['gol_id' => 13, 'masa_kerja' => 29, 'nominal_gapok' => 3524475],
            ['gol_id' => 13, 'masa_kerja' => 30, 'nominal_gapok' => 3665475],
            ['gol_id' => 13, 'masa_kerja' => 31, 'nominal_gapok' => 3665475],
            ['gol_id' => 13, 'masa_kerja' => 32, 'nominal_gapok' => 3750000],
            // gol_id = IVb
            ['gol_id' => 14, 'masa_kerja' => 0, 'nominal_gapok' => 2379825],
            ['gol_id' => 14, 'masa_kerja' => 1, 'nominal_gapok' => 2379825],
            ['gol_id' => 14, 'masa_kerja' => 2, 'nominal_gapok' => 2454825],
            ['gol_id' => 14, 'masa_kerja' => 3, 'nominal_gapok' => 2454825],
            ['gol_id' => 14, 'masa_kerja' => 4, 'nominal_gapok' => 2532075],
            ['gol_id' => 14, 'masa_kerja' => 5, 'nominal_gapok' => 2532075],
            ['gol_id' => 14, 'masa_kerja' => 6, 'nominal_gapok' => 2611875],
            ['gol_id' => 14, 'masa_kerja' => 7, 'nominal_gapok' => 2611875],
            ['gol_id' => 14, 'masa_kerja' => 8, 'nominal_gapok' => 2694075],
            ['gol_id' => 14, 'masa_kerja' => 9, 'nominal_gapok' => 2694075],
            ['gol_id' => 14, 'masa_kerja' => 10, 'nominal_gapok' => 2778975],
            ['gol_id' => 14, 'masa_kerja' => 11, 'nominal_gapok' => 2778975],
            ['gol_id' => 14, 'masa_kerja' => 12, 'nominal_gapok' => 2866500],
            ['gol_id' => 14, 'masa_kerja' => 13, 'nominal_gapok' => 2866500],
            ['gol_id' => 14, 'masa_kerja' => 14, 'nominal_gapok' => 2956800],
            ['gol_id' => 14, 'masa_kerja' => 15, 'nominal_gapok' => 2956800],
            ['gol_id' => 14, 'masa_kerja' => 16, 'nominal_gapok' => 3049875],
            ['gol_id' => 14, 'masa_kerja' => 17, 'nominal_gapok' => 3049875],
            ['gol_id' => 14, 'masa_kerja' => 18, 'nominal_gapok' => 3145950],
            ['gol_id' => 14, 'masa_kerja' => 19, 'nominal_gapok' => 3145950],
            ['gol_id' => 14, 'masa_kerja' => 20, 'nominal_gapok' => 3245025],
            ['gol_id' => 14, 'masa_kerja' => 21, 'nominal_gapok' => 3245025],
            ['gol_id' => 14, 'masa_kerja' => 22, 'nominal_gapok' => 3347250],
            ['gol_id' => 14, 'masa_kerja' => 23, 'nominal_gapok' => 3347250],
            ['gol_id' => 14, 'masa_kerja' => 24, 'nominal_gapok' => 3452625],
            ['gol_id' => 14, 'masa_kerja' => 25, 'nominal_gapok' => 3452625],
            ['gol_id' => 14, 'masa_kerja' => 26, 'nominal_gapok' => 3561375],
            ['gol_id' => 14, 'masa_kerja' => 27, 'nominal_gapok' => 3561375],
            ['gol_id' => 14, 'masa_kerja' => 28, 'nominal_gapok' => 3673575],
            ['gol_id' => 14, 'masa_kerja' => 29, 'nominal_gapok' => 3673575],
            ['gol_id' => 14, 'masa_kerja' => 30, 'nominal_gapok' => 3949575],
            ['gol_id' => 14, 'masa_kerja' => 31, 'nominal_gapok' => 3949575],
            ['gol_id' => 14, 'masa_kerja' => 32, 'nominal_gapok' => 4073925],
            // gol_id = IVc
            ['gol_id' => 15, 'masa_kerja' => 0, 'nominal_gapok' => 2480475],
            ['gol_id' => 15, 'masa_kerja' => 1, 'nominal_gapok' => 2480475],
            ['gol_id' => 15, 'masa_kerja' => 2, 'nominal_gapok' => 2558625],
            ['gol_id' => 15, 'masa_kerja' => 3, 'nominal_gapok' => 2558625],
            ['gol_id' => 15, 'masa_kerja' => 4, 'nominal_gapok' => 2639175],
            ['gol_id' => 15, 'masa_kerja' => 5, 'nominal_gapok' => 2639175],
            ['gol_id' => 15, 'masa_kerja' => 6, 'nominal_gapok' => 2722350],
            ['gol_id' => 15, 'masa_kerja' => 7, 'nominal_gapok' => 2722350],
            ['gol_id' => 15, 'masa_kerja' => 8, 'nominal_gapok' => 2808075],
            ['gol_id' => 15, 'masa_kerja' => 9, 'nominal_gapok' => 2808075],
            ['gol_id' => 15, 'masa_kerja' => 10, 'nominal_gapok' => 2896500],
            ['gol_id' => 15, 'masa_kerja' => 11, 'nominal_gapok' => 2896500],
            ['gol_id' => 15, 'masa_kerja' => 12, 'nominal_gapok' => 2987700],
            ['gol_id' => 15, 'masa_kerja' => 13, 'nominal_gapok' => 2987700],
            ['gol_id' => 15, 'masa_kerja' => 14, 'nominal_gapok' => 3081825],
            ['gol_id' => 15, 'masa_kerja' => 15, 'nominal_gapok' => 3081825],
            ['gol_id' => 15, 'masa_kerja' => 16, 'nominal_gapok' => 3178875],
            ['gol_id' => 15, 'masa_kerja' => 17, 'nominal_gapok' => 3178875],
            ['gol_id' => 15, 'masa_kerja' => 18, 'nominal_gapok' => 3279000],
            ['gol_id' => 15, 'masa_kerja' => 19, 'nominal_gapok' => 3279000],
            ['gol_id' => 15, 'masa_kerja' => 20, 'nominal_gapok' => 3382275],
            ['gol_id' => 15, 'masa_kerja' => 21, 'nominal_gapok' => 3382275],
            ['gol_id' => 15, 'masa_kerja' => 22, 'nominal_gapok' => 3488850],
            ['gol_id' => 15, 'masa_kerja' => 23, 'nominal_gapok' => 3488850],
            ['gol_id' => 15, 'masa_kerja' => 24, 'nominal_gapok' => 3598725],
            ['gol_id' => 15, 'masa_kerja' => 25, 'nominal_gapok' => 3598725],
            ['gol_id' => 15, 'masa_kerja' => 26, 'nominal_gapok' => 3712050],
            ['gol_id' => 15, 'masa_kerja' => 27, 'nominal_gapok' => 3712050],
            ['gol_id' => 15, 'masa_kerja' => 28, 'nominal_gapok' => 3828975],
            ['gol_id' => 15, 'masa_kerja' => 29, 'nominal_gapok' => 3828975],
            ['gol_id' => 15, 'masa_kerja' => 30, 'nominal_gapok' => 3949575],
            ['gol_id' => 15, 'masa_kerja' => 31, 'nominal_gapok' => 3949575],
            ['gol_id' => 15, 'masa_kerja' => 32, 'nominal_gapok' => 4073925],
            // gol_id = IVd
            ['gol_id' => 16, 'masa_kerja' => 0, 'nominal_gapok' => 2585400],
            ['gol_id' => 16, 'masa_kerja' => 1, 'nominal_gapok' => 2585400],
            ['gol_id' => 16, 'masa_kerja' => 2, 'nominal_gapok' => 2666850],
            ['gol_id' => 16, 'masa_kerja' => 3, 'nominal_gapok' => 2666850],
            ['gol_id' => 16, 'masa_kerja' => 4, 'nominal_gapok' => 2750850],
            ['gol_id' => 16, 'masa_kerja' => 5, 'nominal_gapok' => 2750850],
            ['gol_id' => 16, 'masa_kerja' => 6, 'nominal_gapok' => 2837475],
            ['gol_id' => 16, 'masa_kerja' => 7, 'nominal_gapok' => 2837475],
            ['gol_id' => 16, 'masa_kerja' => 8, 'nominal_gapok' => 2926875],
            ['gol_id' => 16, 'masa_kerja' => 9, 'nominal_gapok' => 2926875],
            ['gol_id' => 16, 'masa_kerja' => 10, 'nominal_gapok' => 3019050],
            ['gol_id' => 16, 'masa_kerja' => 11, 'nominal_gapok' => 3019050],
            ['gol_id' => 16, 'masa_kerja' => 12, 'nominal_gapok' => 3114150],
            ['gol_id' => 16, 'masa_kerja' => 13, 'nominal_gapok' => 3114150],
            ['gol_id' => 16, 'masa_kerja' => 14, 'nominal_gapok' => 3212175],
            ['gol_id' => 16, 'masa_kerja' => 15, 'nominal_gapok' => 3212175],
            ['gol_id' => 16, 'masa_kerja' => 16, 'nominal_gapok' => 3313350],
            ['gol_id' => 16, 'masa_kerja' => 17, 'nominal_gapok' => 3313350],
            ['gol_id' => 16, 'masa_kerja' => 18, 'nominal_gapok' => 3417750],
            ['gol_id' => 16, 'masa_kerja' => 19, 'nominal_gapok' => 3417750],
            ['gol_id' => 16, 'masa_kerja' => 20, 'nominal_gapok' => 3525375],
            ['gol_id' => 16, 'masa_kerja' => 21, 'nominal_gapok' => 3525375],
            ['gol_id' => 16, 'masa_kerja' => 22, 'nominal_gapok' => 3636375],
            ['gol_id' => 16, 'masa_kerja' => 23, 'nominal_gapok' => 3636375],
            ['gol_id' => 16, 'masa_kerja' => 24, 'nominal_gapok' => 3750900],
            ['gol_id' => 16, 'masa_kerja' => 25, 'nominal_gapok' => 3750900],
            ['gol_id' => 16, 'masa_kerja' => 26, 'nominal_gapok' => 3869025],
            ['gol_id' => 16, 'masa_kerja' => 27, 'nominal_gapok' => 3869025],
            ['gol_id' => 16, 'masa_kerja' => 28, 'nominal_gapok' => 3990900],
            ['gol_id' => 16, 'masa_kerja' => 29, 'nominal_gapok' => 3990900],
            ['gol_id' => 16, 'masa_kerja' => 30, 'nominal_gapok' => 4116600],
            ['gol_id' => 16, 'masa_kerja' => 31, 'nominal_gapok' => 4116600],
            ['gol_id' => 16, 'masa_kerja' => 32, 'nominal_gapok' => 4246275],
            // gol_id = IVe
            ['gol_id' => 17, 'masa_kerja' => 0, 'nominal_gapok' => 2694825],
            ['gol_id' => 17, 'masa_kerja' => 1, 'nominal_gapok' => 2694825],
            ['gol_id' => 17, 'masa_kerja' => 2, 'nominal_gapok' => 2779650],
            ['gol_id' => 17, 'masa_kerja' => 3, 'nominal_gapok' => 2779650],
            ['gol_id' => 17, 'masa_kerja' => 4, 'nominal_gapok' => 2867175],
            ['gol_id' => 17, 'masa_kerja' => 5, 'nominal_gapok' => 2867175],
            ['gol_id' => 17, 'masa_kerja' => 6, 'nominal_gapok' => 2957475],
            ['gol_id' => 17, 'masa_kerja' => 7, 'nominal_gapok' => 2957475],
            ['gol_id' => 17, 'masa_kerja' => 8, 'nominal_gapok' => 3050625],
            ['gol_id' => 17, 'masa_kerja' => 9, 'nominal_gapok' => 3050625],
            ['gol_id' => 17, 'masa_kerja' => 10, 'nominal_gapok' => 3146775],
            ['gol_id' => 17, 'masa_kerja' => 11, 'nominal_gapok' => 3146775],
            ['gol_id' => 17, 'masa_kerja' => 12, 'nominal_gapok' => 3245850],
            ['gol_id' => 17, 'masa_kerja' => 13, 'nominal_gapok' => 3245850],
            ['gol_id' => 17, 'masa_kerja' => 14, 'nominal_gapok' => 3348075],
            ['gol_id' => 17, 'masa_kerja' => 15, 'nominal_gapok' => 3348075],
            ['gol_id' => 17, 'masa_kerja' => 16, 'nominal_gapok' => 3453525],
            ['gol_id' => 17, 'masa_kerja' => 17, 'nominal_gapok' => 3453525],
            ['gol_id' => 17, 'masa_kerja' => 18, 'nominal_gapok' => 3562275],
            ['gol_id' => 17, 'masa_kerja' => 19, 'nominal_gapok' => 3562275],
            ['gol_id' => 17, 'masa_kerja' => 20, 'nominal_gapok' => 3674475],
            ['gol_id' => 17, 'masa_kerja' => 21, 'nominal_gapok' => 3674475],
            ['gol_id' => 17, 'masa_kerja' => 22, 'nominal_gapok' => 3790200],
            ['gol_id' => 17, 'masa_kerja' => 23, 'nominal_gapok' => 3790200],
            ['gol_id' => 17, 'masa_kerja' => 24, 'nominal_gapok' => 3909600],
            ['gol_id' => 17, 'masa_kerja' => 25, 'nominal_gapok' => 3909600],
            ['gol_id' => 17, 'masa_kerja' => 26, 'nominal_gapok' => 4032750],
            ['gol_id' => 17, 'masa_kerja' => 27, 'nominal_gapok' => 4032750],
            ['gol_id' => 17, 'masa_kerja' => 28, 'nominal_gapok' => 4159725],
            ['gol_id' => 17, 'masa_kerja' => 29, 'nominal_gapok' => 4159725],
            ['gol_id' => 17, 'masa_kerja' => 30, 'nominal_gapok' => 4290750],
            ['gol_id' => 17, 'masa_kerja' => 31, 'nominal_gapok' => 4290750],
            ['gol_id' => 17, 'masa_kerja' => 32, 'nominal_gapok' => 4425900],
        ];

        foreach ($gapoks as $gapok) {
            DB::table('master_gapok')->insert([
                'gol_id' => $gapok['gol_id'], // Reference from master_golongan
                'masa_kerja' => $gapok['masa_kerja'],
                'nominal_gapok' => $gapok['nominal_gapok'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
        DB::table('roles')->insert(['name' => 'admin']);
        DB::table('roles')->insert(['name' => 'keuangan']);
        DB::table('roles')->insert(['name' => 'kepegawaian']);
        DB::table('roles')->insert(['name' => 'staff']);

        $users = [
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'), // Hash the password
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id'=>1,
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'), // Hash the password
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id'=>2,
            ],
            [
                'name' => 'Michael Johnson', // New user
                'email' => 'michael.johnson@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'), // Hash the password
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id'=>3,
            ],
        ];

        DB::table('users')->insert($users);

        $employee = [
            [
                'jabatan_id' => 1,
                'fungsi_id' => 1,
                'trans_id' => 1,
                'khusus_id' => 1,
                'user_id' => 1,
                'gol_id' => 8,
                'nama' => 'John Doe',
                'nip' => '123456789',
                'email' => 'john.doe@example.com',
                'no_hp' => '081234567890',
                'tmt' => '2020-01-01',
                'jk' => 'L',
                'pensiun' => null,
                'tanggal_lahir' => '1985-05-15',
                'alamat' => 'Jl. Contoh Alamat No. 1',
                'pend_awal' => 7,
                'pend_penyesuaian' => null,
                'pendidikan' => 'S1',
                'tgl_penyesuaian' => null,
                'masa_kerja' => '4',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more employees as needed
            [
                'jabatan_id' => 2,
                'fungsi_id' => 2,
                'trans_id' => 1,
                'khusus_id' => 2,
                'user_id' => 2,
                'gol_id' => 10,
                'nama' => 'Jane Smith',
                'nip' => '987654321',
                'email' => 'jane.smith@example.com',
                'no_hp' => '089876543210',
                'tmt' => '2023-01-01',
                'jk' => 'P',
                'pensiun' => null,
                'tanggal_lahir' => '1990-10-20',
                'alamat' => 'Jl. Contoh Alamat No. 2',
                'pend_awal' => 11,
                'pend_penyesuaian' => null,
                'pendidikan' => 'S2',
                'tgl_penyesuaian' => null,
                'masa_kerja' => '1',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jabatan_id' => 3, // New employee
                'fungsi_id' => 3,
                'trans_id' => 1,
                'khusus_id' => 3,
                'user_id' => 3,
                'gol_id' => 7,
                'nama' => 'Michael Johnson',
                'nip' => '456789123',
                'email' => 'michael.johnson@example.com',
                'no_hp' => '081234512345',
                'tmt' => '2024-01-01',
                'jk' => 'L',
                'pensiun' => null,
                'tanggal_lahir' => '1988-08-08',
                'alamat' => 'Jl. Contoh Alamat No. 3',
                'pend_awal' => 8,
                'pend_penyesuaian' => null,
                'pendidikan' => 'S1',
                'tgl_penyesuaian' => null,
                'masa_kerja' => 0,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($employee as $employees) {
            DB::table('employees')->insert($employees);
        }

        
        $t_umum = [
            [
                'employee_id' => 1,
                'umum_id' => 1, // Assuming umum_id exists
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => 1,
                'umum_id' => 2, // Assuming umum_id exists
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => 2,
                'umum_id' => 2, // Assuming umum_id exists
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more user records as needed
        ];

        DB::table('t_umum')->insert($t_umum);

        $t_gapok = [
            [
                'employee_id' => 1,
                'gol_id' => 8,
                'gapok_id' => 222, // Assuming gapok_id exists
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => 2,
                'gol_id' => 7,
                'gapok_id' => 287, // Assuming gapok_id exists
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => 3,
                'gol_id' => 10,
                'gapok_id' => 183, // Assuming gapok_id exists
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more user records as needed
        ];

        DB::table('t_gapok')->insert($t_gapok);

        $t_penyesuaian = [
            [
                'employee_id' => 1,
                'penyesuaian_id' => 25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'employee_id' => 3,
                'penyesuaian_id' => 29,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more user records as needed
        ];

        DB::table('t_penyesuaian')->insert($t_penyesuaian);

        $master_potongan = [
            ['fungsi_id' => 1, 'nama' => 'Dokter Spesialis', 'nominal' => 25000, 'deskripsi' => 'Potongan untuk Dokter Spesialis'],
            ['fungsi_id' => 2, 'nama' => 'Dokter Umum', 'nominal' => 20000, 'deskripsi' => 'Potongan untuk Dokter Umum'],
            ['fungsi_id' => 3, 'nama' => 'Dokter Gigi', 'nominal' => 10000, 'deskripsi' => 'Potongan untuk Dokter Gigi'],
            ['fungsi_id' => 6, 'nama' => 'IPCN', 'nominal' => 20000, 'deskripsi' => 'Potongan untuk IPCN'],
            ['fungsi_id' => 7, 'nama' => 'Ners', 'nominal' => 10000, 'deskripsi' => 'Potongan untuk Ners'],
            ['fungsi_id' => 10, 'nama' => 'Perawat Diploma', 'nominal' => 12500, 'deskripsi' => 'Potongan untuk Perawat Diploma'],
            ['fungsi_id' => 9, 'nama' => 'Penata Anestesi', 'nominal' => 8500, 'deskripsi' => 'Potongan untuk Penata Anestesi'],
            ['fungsi_id' => 10, 'nama' => 'Perawat Medik', 'nominal' => 8000, 'deskripsi' => 'Potongan untuk Perawat Medik'],
            ['fungsi_id' => 11, 'nama' => 'Bidan', 'nominal' => 5000, 'deskripsi' => 'Potongan untuk Bidan'],
        ];

        foreach ($master_potongan as $mstr_pot) {
            DB::table('master_potongan')->insert([
                'fungsi_id' => $mstr_pot['fungsi_id'],
                'nama' => $mstr_pot['nama'],
                'nominal' => $mstr_pot['nominal'],
                'deskripsi' => $mstr_pot['deskripsi'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
