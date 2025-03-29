<?php
class Mahasiswa {
    public $nama;
    public $nim;
    public $nilai;
    public $jurusan;

    public function __construct($nama, $nim, $nilai, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->nilai = $nilai;
        $this->jurusan = $jurusan;
    }
}

$mahasiswa = [
    new Mahasiswa("Fikri", "2201", 100, "Teknik Informatika"),
    new Mahasiswa("Ella", "2202", 90, "Seni Musik"),
    new Mahasiswa("Zahra", "2203", 90, "Teknik Komputer"),
    new Mahasiswa("Budi", "2204", 75, "Manajemen"),
    new Mahasiswa("Adi", "2205", 85, "Akuntansi"),
];

function panjangString($str) {
    $i = 0;
    while (isset($str[$i])) {
        $i++;
    }
    return $i;
}

function bandingkanString($a, $b) {
    $lenA = panjangString($a);
    $lenB = panjangString($b);
    $minLen = ($lenA < $lenB) ? $lenA : $lenB;

    for ($i = 0; $i < $minLen; $i++) {
        if ($a[$i] != $b[$i]) {
            return ($a[$i] < $b[$i]) ? -1 : 1;
        }
    }

    return ($lenA < $lenB) ? -1 : ($lenA > $lenB ? 1 : 0);
}

// Sort by Nama (Ascending)
usort($mahasiswa, function ($a, $b) {
    return bandingkanString($a->nama, $b->nama);
});

echo "Urut berdasarkan Nama:\n";
foreach ($mahasiswa as $mhs) {
    echo "{$mhs->nama} - {$mhs->nim} - {$mhs->nilai} - {$mhs->jurusan}\n";
}

// Sort by Nilai (Descending)
usort($mahasiswa, function ($a, $b) {
    return ($a->nilai > $b->nilai) ? -1 : (($a->nilai < $b->nilai) ? 1 : 0);
});

echo "Urut berdasarkan Nilai:\n";
foreach ($mahasiswa as $mhs) {
    echo "{$mhs->nama} - {$mhs->nim} - {$mhs->nilai} - {$mhs->jurusan}\n";
}

// Sort by Nilai (Descending), lalu Nama (Ascending)
usort($mahasiswa, function ($a, $b) {
    if ($a->nilai > $b->nilai) {
        return -1;
    } elseif ($a->nilai < $b->nilai) {
        return 1;
    }
    return bandingkanString($a->nama, $b->nama);
});

echo "Urut berdasarkan Nilai lalu Nama:\n";
foreach ($mahasiswa as $mhs) {
    echo "{$mhs->nama} - {$mhs->nim} - {$mhs->nilai} - {$mhs->jurusan}\n";
}
?>
