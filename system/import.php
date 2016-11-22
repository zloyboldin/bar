<?php


$databasehost = "mysql85.1gb.ru"; 
$databasename = "gb_coversion"; 
$databasetable = "maintable"; 
$databaseusername="gb_coversion"; 
$databasepassword = "92cd1bd4b90"; 
$fieldseparator = ";"; 
$lineseparator = "\n";
  $csvfile = "bd.csv";
header('Content-Type: text/html; charset=utf-8');
if(!file_exists($csvfile)) {
    die("File not found. Make sure you specified the correct path.");
}

try {
    $pdo = new PDO("mysql:host=$databasehost;dbname=$databasename", 
        $databaseusername, $databasepassword,
        array(
        	
            PDO::MYSQL_ATTR_LOCAL_INFILE => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        )
    );
} catch (PDOException $e) {
    die("database connection failed: ".$e->getMessage());
}


 $maketemp = "
    CREATE TEMPORARY TABLE temp_table_1 (
      ID BIGINT(32) ,
      STATUS TEXT CHARACTER SET utf8,
      PRIMARY KEY(ID)
    )
  "; 
$pdo->exec($maketemp);

$affectedRows = $pdo->exec("
    LOAD DATA LOCAL INFILE ".$pdo->quote($csvfile)." REPLACE INTO TABLE temp_table_1
     CHARACTER SET UTF8
      FIELDS TERMINATED BY ".$pdo->quote($fieldseparator)."
      LINES TERMINATED BY ".$pdo->quote($lineseparator)."
	  IGNORE 1 LINES (STATUS,ID)");
	  echo "<pre>";
	
	  
	foreach($pdo->query("SELECT * FROM temp_table_1" ) as $row) {

	     if($row['STATUS']=='Пришел') {$m = $row['STATUS'];echo $row['STATUS'];}
	   }
	 
echo "Loaded a total of $affectedRows records from this csv file.\n";
$changedRows = $pdo->exec("
    UPDATE $databasetable JOIN temp_table_1 AS t1 ON (maintable.ID=t1.ID)
	SET maintable.STATUS=IF(t1.STATUS='Пришел','Пришел',maintable.STATUS) where maintable.ID=t1.ID");
	
echo "<br/>$changedRows records has been updated.\n";
$changedRows = $pdo->exec("
     INSERT INTO $databasetable(ID,STATUS) SELECT ID,STATUS FROM temp_table_1 WHERE ID NOT IN (SELECT ID FROM $databasetable)");
	echo "<br/>$changedRows records has been added.\n";
	
	$pdo->exec('DROP TABLE temp_table_1');	
	$contacts=array();
	foreach($pdo->query("SELECT EMAIL,PHONE,CLIENT_ID FROM $databasetable WHERE STATUS='Пришел'") as $row) {
	if((strlen($row['EMAIL'])>0)||(strlen($row['PHONE'])>0))
	    array_push($contacts, array('EMAIL'=>$row['EMAIL'],'PHONE'=>$row['PHONE'],'CLIENT_ID'=>$row['CLIENT_ID']));
	   }
### UNISENDER UPDATE LISTS	
 include('mailresponder.php');
### END UNISENDER UPDATE LISTS

### GOOGLE ANALYTICS UPDATE 
include('analyticstracking.php');
### END GOOGLE ANALYTICS UPDATE
	

?>