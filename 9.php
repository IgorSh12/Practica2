<?php
if(!isset ($_POST['submit'])){
    ?>
    <form method="post" action="9.php">
        <p>Введите данные прямоугольника.</p>
        <p>Длина:  <input type="text" name="length" size="5" />
            Ширина:  <input type="text" name="width" size="5" /></p>
        <input type="submit" name="submit" value="Готово" />
    </form>
    <?php
} else {
    $l = $_POST['length'];
    $w = $_POST['width'];
    function area($l, $w){
        $area = $l * $w;
        return $area;
    }
    echo "Площадь прямоугольника длиной $l и шириной $w равна " . area($l, $w). ".";
}
