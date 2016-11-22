<?php
$time_start = microtime(true);
require './Classes/PHPExcel.php';
require_once './Classes/PHPExcel/IOFactory.php';
header('Content-Type: text/html; charset=utf-8');
$objPHPExcel = PHPExcel_IOFactory::load("Список купонов.xlsx");

foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
     $worksheetTitle = $worksheet->getTitle();
     $highestRow = $worksheet->getHighestRow(); // e.g. 10
     $highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
     $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);


$nrColumns = ord($highestColumn) - 64;

   $toremove_arr=array('D','C','B');
  array_reverse($toremove_arr);
  $toremove_num = count($toremove_arr);
  for($i=0; $i < $toremove_num; $i++){
      $worksheet->removeColumn($toremove_arr[$i], 1);
  }

  for ($row = 1; $row <= $highestRow; ++ $row) {
     for ($col = 0; $col < $highestColumnIndex; ++ $col) {
         $cell = $worksheet->getCellByColumnAndRow($col, $row);
         $val = $cell->getValue();
             echo '<td>' . $val . '</td>';
     }

  }

  

for ($row = 2; $row >= $highestRow; ++ $row) {
$val=array();
for ($col = 0; $col < $highestColumnIndex; ++ $col) {
    $cell = $worksheet->getCellByColumnAndRow($col, $row);
    $val[] = $cell->getValue();
  }
  }
  
  
  }
  
  $time_end = microtime(true);
  $time = $time_end - $time_start;
  echo $time;
//$writer->save("test123.csv");
?>