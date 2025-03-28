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

function sortByNama(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if (bandingkanString($arr[$j]->nama, $arr[$j + 1]->nama) > 0) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

function sortByNilai(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j]->nilai < $arr[$j + 1]->nilai) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}

function sortByNilaiNama(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j]->nilai < $arr[$j + 1]->nilai) {
                // Tukar jika nilai lebih kecil
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            } elseif ($arr[$j]->nilai == $arr[$j + 1]->nilai) {
                // Jika nilai sama, cek nama
                if (bandingkanString($arr[$j]->nama, $arr[$j + 1]->nama) > 0) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
    }
}

function printMahasiswa($mahasiswa) {
    foreach ($mahasiswa as $mhs) {
        echo "{$mhs->nama} - {$mhs->nim} - {$mhs->nilai} - {$mhs->jurusan}\n";
    }
}

echo "Urut berdasarkan Nama:\n";
sortByNama($mahasiswa);
printMahasiswa($mahasiswa);

echo "Urut berdasarkan Nilai:\n";
sortByNilai($mahasiswa);
printMahasiswa($mahasiswa);

echo "Urut berdasarkan Nilai lalu Nama:\n";
sortByNilaiNama($mahasiswa);
printMahasiswa($mahasiswa);
?>
