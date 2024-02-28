<?php
class Srock
{
    public $name_mahsulot;
    public $srock_mahsulot;

    public function Mahsulot()
    {
        echo $this->name_mahsulot . "<br />";
        echo $this->srock_mahsulot . "<br />";
    }   

    public function filtrMahsulot()
    {
        // Корректируем формат даты из строки
        $srock_date = date_create_from_format("d:m:Y", $this->srock_mahsulot);

        // Получаем текущую дату
        $current_date = new DateTime();

        // Разница между текущей датой и датой окончания срока годности
        $interval = $current_date->diff($srock_date);

        // Определяем, просрочен ли срок годности
        if ($interval->invert == 1) {
            echo $this->name_mahsulot . " просрочен на : ";
        } else {
            echo $this->name_mahsulot . " истекает через : ";
        }

        // Выводим оставшееся время, только если оно больше нуля
        $output = [];
        if ($interval->y != 0) {
            $output[] = abs($interval->y) . " года";
        }
        if ($interval->m != 0) {
            $output[] = abs($interval->m) . " месяца";
        }
        if ($interval->d != 0) {
            $output[] = abs($interval->d) . " дней";
        }
        
        echo implode(", ", $output);
        echo "<br>";
    }    
}

$obeckt = new Srock();
$obeckt->name_mahsulot = "Fanta";
$obeckt->srock_mahsulot = "25:03:2024";
$obeckt->Mahsulot();

$obeckt2 = new Srock();
$obeckt2->name_mahsulot = "Cola";
$obeckt2->srock_mahsulot = "10:02:2024";
$obeckt2->Mahsulot();

echo ("<hr />");
echo "Санаи ҷори : " . date("d:m:Y") . "<br />";
$obeckt->filtrMahsulot();
$obeckt2->filtrMahsulot();
?>

