<?php
class Kalkulator
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function tambah(){
        $hasil = $this->x + $this->y;
        return $hasil;
    }
    public function kurang(){
        $hasil = $this->x - $this->y;
        return $hasil;
    }
    public function kali(){
        $hasil = $this->x * $this->y;
        return $hasil;   
    }
    public function bagi(){
        $hasil = $this->x / $this->y;
        return $hasil;
    }
}
class tampilKalkulator
{
    public function tampil()
    {
        echo '<link rel="stylesheet" href="bootstrap/css/bootstrap.css">';
        echo '<title>Kalkulator</title>';
        echo '<span class="d-block p-2 bg-dark text-white">Developers by Andika</span>';
        echo '<div class="jumbotron"';
        echo '<div class="container">';
        echo '<h1 align="center">KALKULATOR SEDERHANA</h1>';
        echo '<div class="row">';
        echo '<form class="col-sm"method="POST">';
        echo '<input class="col-sm" type="text" name="x">';
        echo '<input class="col-sm" type="text" name="y">';
        echo '<select name="operasi">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="kali">*</option>
        <option value="bagi">/</option>
        </select> &nbsp;';
        echo '<label>=</label> &nbsp;';
        echo '<input class="btn btn-outline-success btn-sm" type="submit" value="Hitung">';
        echo '</div>';
        echo '</form>';
        echo '</div>';
        echo '</div>';
    }
}
if($_POST){
    $x = $_POST['x'];
    $y = $_POST['y'];
    $data = new Kalkulator($x,$y);
    $data1 = new tampilKalkulator();
    $data1->tampil($data);
    if ($_POST['operasi']=="tambah") {
        echo '<div class="container">';
        echo "Hasil ".$x." + ".$y."=".$data->tambah()."<br/><br/>";
        echo '</div>';
    } else if($_POST['operasi']=="kurang"){
        echo '<div class="container">';
        echo "Hasil ".$x." - ".$y."=".$data->kurang()."<br/><br/>";
        echo '</div>';
    } else if($_POST['operasi']=="kali"){
        echo '<div class="container">';
        echo "Hasil ".$x." * ".$y."=".$data->kali()."<br/><br/>";
        echo '</div>';


    } else if($_POST['operasi']=="bagi"){
        echo '<div class="container">';
        echo "Hasil ".$x." / ".$y."=".$data->bagi()."<br/><br/>";
        echo '</div>';
    }
}