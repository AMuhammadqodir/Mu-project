<?php
class jam 
{
    public $n1;
    public $n2;
    public function methodJam()
    {
       echo $this->n1 + $this->n2."<br>";
    }
}

class tarh extends jam 
{
    public $n3;
    public function methodTarh()
    {
        echo $this->n1 - $this->n2 - $this->n3."<br><br>";
    } 
}

$objectjam = new jam();
$objectjam->n1 = 5;
$objectjam->n2 = 15;
$objectjam->methodJam();

$objecttarh = new tarh();
$objecttarh->n1 = 25;
$objecttarh->n2 = 15;
$objecttarh->n3 = 5;
$objecttarh->methodJam();
$objecttarh->methodTarh();
?>

<?php
echo "<h3>Kassir</h3>";
class Korgar
{
    public $nom;
    public $vazifa;
    public $maosh;
    public function MethodBonus()
    {
        echo "Nomi korgar = ".$this->nom."<br>Vazifa = ".$this->vazifa."
        <br>Maosh = ".$this->maosh."<br>Bonus = ".$this->maosh * 0.1."<br><br>";
    }
}
$korgar = new Korgar();
$korgar->nom = 'Ali';
$korgar->vazifa = 'Kassir';
$korgar->maosh = 1200;
$korgar->MethodBonus();

echo "<h3>Barnomasoz</h3>";
class barnomasoz extends Korgar
{
    public function MethodBonus()
    {
        echo "Nomi korgar = ".$this->nom."<br>Vazifa = ".$this->vazifa."
        <br>Maosh = ".$this->maosh."<br>Bonus = ".$this->maosh * 0.2."<br><br>";
    }
}
$barnomasoz = new barnomasoz();
$barnomasoz->nom = 'Anvar';
$barnomasoz->vazifa = 'barnomasoz';
$barnomasoz->maosh = 2000;
$barnomasoz->MethodBonus();

echo "<h3>Administrator</h3>";
class Administrator extends Korgar
{
    public function MethodBonus()
    {
        echo "Nomi korgar = ".$this->nom."<br>Vazifa = ".$this->vazifa."
        <br>Maosh = ".$this->maosh."<br>Bonus = ".$this->maosh * 0.3."<br><br>";
    }
}
$administrator = new Administrator();
$administrator->nom = 'Nozim';
$administrator->vazifa = 'Administrator';
$administrator->maosh = 3500;
$administrator->MethodBonus();
?>

<?php
echo "<h3>Donishju</h3>";
class donishju
{
    public $nasab;
    public $nom;
    public $guruh;
    public $telefon;
    public function printMethod()
    {
        echo "<br>Nasab = ".$this->nasab."<br>Nom = ".$this->nom."<br>Guruh = ".$this->guruh."<br>Telefon = ".$this->telefon."<br><br>";
    }
}
$donishju = new donishju();
$donishju->nasab = 'Aliqulov';
$donishju->nom = 'Salohiddin';
$donishju->guruh = '303a';
$donishju->telefon = 550550057;
$donishju->printMethod();

echo "<h3>Omuzgor</h3>";
class omuzgor extends donishju
{
    public $kafedra;
    public $staj;
    public function printMethod()
    {
        echo "<br>Nasab = ".$this->nasab."<br>Nom = ".$this->nom."<br>Kafedra = ".$this->kafedra."
        <br>Telefon = ".$this->telefon."<br>Staj = ".$this->staj.' sol'."<br><br>";
    }
}
$omuzgor = new omuzgor();
$omuzgor->nasab = 'Abdurahimov';
$omuzgor->nom = 'Obidjon';
$omuzgor->kafedra = 'Barnomasozi';
$omuzgor->telefon = 921001001;
$omuzgor->staj = 15;
$omuzgor->printMethod();

echo "<h3>Dekan</h3>";
class dekan extends omuzgor
{
    public $soliTainshuda;
    public function printMethod()
    {
        echo "<br>Nasab = ".$this->nasab."<br>Nom = ".$this->nom."<br>Kafedra = ".$this->kafedra."
        <br>Telefon = ".$this->telefon."<br>Staj = ".$this->staj.' sol'."<br>Soli tainshuda = ".$this->soliTainshuda;    
    }
}
$dekan = new dekan();
$dekan->nasab = 'Nurillozoda';
$dekan->nom = 'Khushbakht';
$dekan->kafedra = 'Barnomasozi';
$dekan->telefon = 921001001;
$dekan->staj = 30;
$dekan->soliTainshuda = '20.04.2023';
$dekan->printMethod();

?>
