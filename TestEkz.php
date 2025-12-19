<?php 
$numbFormat = '';
function numberFormat($number){
    $n = (string) $number;
    return $n;
}
if(isset($_GET['number'])){
    $numbFormat = numberFormat($_GET['number']);
}
?>
<?php if(!$numbFormat): ?>
<form>
    <input type="text" name="number">
    <input type="submit">
</form>
<?php  else: ?>
    <P><?= $numbFormat ?></P>
    <?php endif ?>