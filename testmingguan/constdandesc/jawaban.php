<?php
// 1
class orang {
    public $name;
    public $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        
        echo "nama : " . $this->name . "\n";
        echo "umur : " . $this->age . "\n";
    }
}
$Fikri = new orang("Fikri", 18);

// 2
class Book {
    public $author;
    public $title;

    function __construct($author, $title)
    {
        $this->author = $author;
        $this->title = $title;
        
        echo "Pengarang : " . $this->author . "\n";
        echo "Judul : " . $this->title . "\n";
    }
}
$book = new Book("Maou73", "Mata yang terpejam, Hati yang terbuka");

// 3
class DatabaseConnection{
    function __construct()
    {
        echo "koneksi ke databases dibuka" . "\n";
    }
    function __destruct()
    {
        echo "Koneksi ke database ditutup" . "\n";
    }
}
$data = new DatabaseConnection();
unset($data);
// 4
class apaKek{
    public $free;

    function __construct($free)
    {
        $this->free = $free;
    }
    function __destruct()
    {
        echo "objek telah dihancurkan" . "\n";
    }
}
$free = new apaKek("terserah");