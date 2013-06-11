<?php

  class orang {
  
  var $nama="";
  var $jk="";
  var $tptlahir="";
  var $tgllahir="";
  
  function tampilkan (){
  
  echo $this->nama;
  echo $this->jk;
  echo $this->tptlahir;
  echo $this->tgllahir;
  
        }
  
  }


?>


<?php

$orang1 = new orang ();

$orang1->tampilkan();


?>
