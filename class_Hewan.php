<?php
// class_Hewan
class Hewan {
// Properties
public $suara="meow";
public $warna="hitam";
// Methods
public function bersuara(){
    return "Kucing bersuara: " . $this->suara;
}
}

//membuat objek dari class Hewan
$kucing = new Hewan();
echo $kucing->suara; // Output: meow
?>