<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\SettingModel;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->CreateSetting("nama_masjid", "Al Muhajirin", "Nama masjid");
        $this->CreateSetting("alamat", "Dusun Cemara, Desa Adolina, Kec. Perbaungan", "Alamat masjid");
        $this->CreateSetting("website", "https://masjid-al-muhajirin.com", "Alamat website masjid");
        $this->CreateSetting("nomor_telepon", "087889221100", "Nomor telepon masjid");
    }

    function CreateSetting(string $key, string $value, string $desc) : bool
    {
        $newSetting = new SettingModel();
        $newSetting->kd_setting = Str::uuid();
        $newSetting->nama = $key;
        $newSetting->keterangan = $desc;
        $newSetting->nilai = $value;
        $newSetting->save();
        return true;
    }
}
