<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            ['gol_id' => 1, 'masa_kerja' => 0, 'nominal_gapok' => 1170600],
            ['gol_id' => 1, 'masa_kerja' => 1, 'nominal_gapok' => 1170600],
            ['gol_id' => 1, 'masa_kerja' => 2, 'nominal_gapok' => 1207500],
            // Add more gapoks for Ia
            ['gol_id' => 2, 'masa_kerja' => 0, 'nominal_gapok' => 1170600],
            ['gol_id' => 2, 'masa_kerja' => 1, 'nominal_gapok' => 1170600],
            ['gol_id' => 2, 'masa_kerja' => 2, 'nominal_gapok' => 1278375],
            // Add more gapoks for Ib
            ['gol_id' => 3, 'masa_kerja' => 0, 'nominal_gapok' => 1170600],
            ['gol_id' => 3, 'masa_kerja' => 1, 'nominal_gapok' => 1170600],
            // Add more gapoks for Ic
            ['gol_id' => 4, 'masa_kerja' => 0, 'nominal_gapok' => 1170600],
            ['gol_id' => 4, 'masa_kerja' => 1, 'nominal_gapok' => 1170600],
            // Add more gapoks for Id
            // Continue adding gapoks for IIa to IVe as per your structure
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
    }
}
