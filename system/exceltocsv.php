<?php
require_once './Classes/PHPExcel/IOFactory.php';
$excel = PHPExcel_IOFactory::load("Список купонов.xlsx");
foreach ($excel->getWorksheetIterator() as $worksheet) {
     $worksheetTitle = $worksheet->getTitle();
     $highestRow = $worksheet->getHighestRow(); // e.g. 10
     $highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
     $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);


$nrColumns = ord($highestColumn) - 64;

   $toremove_arr=array('O','N','L','K','J','I','H','G','E','D','C','B','A');
  $sql = "";
  array_reverse($toremove_arr);
  $toremove_num = count($toremove_arr);
  for($i=0; $i < $toremove_num; $i++){
      $worksheet->removeColumn($toremove_arr[$i], 1);
  }
  }

$writer = PHPExcel_IOFactory::createWriter($excel, 'CSV');
$writer->setDelimiter(";");
$writer->setEnclosure("");
$writer->save("bd.csv");
?>