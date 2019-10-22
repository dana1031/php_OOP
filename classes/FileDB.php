<?php

//class FileDB {
//
//    private $file_name;
//    
//    /** @var $data array Duomenu masyvas */
//    private $data;
//
//    /**
//     * F-ija, kuri issikviecia sukurus objekta
//     * @param type $file_name Failo pavadinimas
//     */    
//    public function __construct($file_name) {
//        $this->file_name = $file_name;
//    }
//
//    public function load() {
//        $this->data = file_to_array($this->file_name);
//    }
//    public function save(){
//        return array_to_file($this->data, $this->file_name);
//    }
//}

class Person {
    //centimetrais
    public $ugis;
    public $vardas;
    private $asmens_kodas;
    
    public function __construct($vardas, $centimetrai) {
        $this->vardas = $vardas;
        $this->ugis = $centimetrai;
        $this->asmens_kodas=rand(100000,9999999);
        $this->kalbeti();
    }
    private function kalbeti() {
        print "labas, as $this->vardas, mano ugis $this->ugis!";
  
    } 
    
    public function pasakykVarda() {
        return $this->vardas;
    }
}
$zmogus_1 = new Person('Arnas',186);
print $zmogus_1->pasakykVarda();
//
//$zmogus_1 = new Person('Arnas',186);
//var_dump($zmogus_1);
//
//$zmogus_2 = new Person('Rasa', 190);
//var_dump($zmogus_2);
//
//$zmogus_1->vardas ='Rasa';
//var_dump($zmogus_1);
//labas, as Arnas, mano ugis 186!
//C:\Users\demo\Desktop\www\classes\FileDB.php:44:
//object(Person)[1]
//  public 'ugis' => int 186
//  public 'vardas' => string 'Arnas' (length=5)
//  private 'asmens_kodas' => int 7489113
//labas, as Rasa, mano ugis 190!
//C:\Users\demo\Desktop\www\classes\FileDB.php:47:
//object(Person)[2]
//  public 'ugis' => int 190
//  public 'vardas' => string 'Rasa' (length=4)
//  private 'asmens_kodas' => int 9627239
//C:\Users\demo\Desktop\www\classes\FileDB.php:50:
//object(Person)[1]
//  public 'ugis' => int 186
//  public 'vardas' => string 'Rasa' (length=4)
//  private 'asmens_kodas' => int 7489113
    
    
    
    

