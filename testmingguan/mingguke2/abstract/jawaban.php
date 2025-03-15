<?php
// 1
abstract class MakhlukHidup{
    abstract function bernapas();
}

class Manusia extends MakhlukHidup{
    function bernapas()
    {
        echo "Manusia bernapas dengan paru-paru" . "\n";
    }
}

$ningen = new Manusia();
$ningen->bernapas();

// 2
abstract class AlatMusik{
    abstract function mainkan();
}

class Gitar extends AlatMusik{
    function mainkan()
    {
        echo "Memainkan gitar: jreng jreng!" . "\n";
    }
}

class Piano extends AlatMusik{
    function mainkan()
    {
        echo "Memainkan Piano: ting ting!" . "\n";
    }
}

$gitar = new Gitar();
$piano = new Piano();
$gitar->mainkan();
$piano->mainkan();