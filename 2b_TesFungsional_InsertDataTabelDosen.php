<?php

namespace Tests\Feature\Auth;

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DatabaseDosenTest extends TestCase
{
    use DatabaseTransactions;

    public function test_insert_into_tabel_dosen()
    {
        $dosen = Dosen::create([
            'nipy' => '060150841',
            'nidn' => '0524118801',
            'nama' => 'Drs. Wahyu Pujiono, M.Kom',
            'jabfung' => 'LK',
            'email_dosen' => '008@tif.uad.ac.id',
            'avatar' => 'wahyupujiono.jpg'
        ]);

        $this->assertEquals('060150841', $dosen->nipy);
        $this->assertEquals('0524118801', $dosen->nidn);
        $this->assertEquals('Drs. Wahyu Pujiono, M.Kom', $dosen->nama);
        $this->assertEquals('LK', $dosen->jabfung);
        $this->assertEquals('008@tif.uad.ac.id', $dosen->email_dosen);
        $this->assertEquals('wahyupujiono.jpg', $dosen->avatar);
    }
}
