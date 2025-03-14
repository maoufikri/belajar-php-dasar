<?php
namespace Html{
    class paragraph{
    static function paragraph(){
        echo "<p></p>";
    }
}

class lorem{
    function lorem()
    {
        echo "Lorem ipsum dolor sit amet constecteour adipiscing elit";
    }
    }
}

namespace matematika{
    class persegiPanjang{
        protected $panjang;
        protected $lebar;

        function __construct($panjang,$lebar)
        {
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }

        function keliling(){
            return 2*($this->panjang + $this->lebar);
        }
    }
}
