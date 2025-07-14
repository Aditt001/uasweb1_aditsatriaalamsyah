<?php

class About {
    public function index($nama = 'ADIT', $pekerjaan = 'MAHASISWA')
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}