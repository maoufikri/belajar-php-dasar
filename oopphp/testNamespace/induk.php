<?php

namespace Html{

    class paragraph
    {
        static function paragraph()
        {
            echo "<p>halo ini adalah paragraph yang dibuat melalui PHP lho...</p> \n";
        }
    }

    class lorem
    {
        function lorem()
        {
            echo "Lorem ipsum dolor sit amet constecteour adipiscing elit \n";
        }
    }

    class kembar
    {
        function __construct(){
            echo "Ini dari namespace Html \n";
        }
    }
}

namespace matematika {
    class persegiPanjang
    {
        protected $panjang;
        protected $lebar;

        function __construct($panjang, $lebar)
        {
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }

        function keliling()
        {
            return 2 * ($this->panjang + $this->lebar);
        }
    }

    class kembar
    {
        function __construct()
        {
            echo "ini dari namespace matematika \n";
        }
    }
}

namespace matematika\segitiga{
    class segitiga{
        public $alas;
        public $tinggi;

        function __construct($alas,$tinggi){
            $this->alas = $alas;
            $this->tinggi = $tinggi;
        }
    }
}
