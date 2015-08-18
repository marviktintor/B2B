<?php

//Demo class for testing

$_POST ['client'] = "android";
$_POST ['action'] = "insert";

include 'includes/php/buyers.class.php';
$buyer = new Buyers ( "", "" );

$columns = array ("buyer_id", "user_id");
$records = array (1,1);
$buyer->insert_records_to_buyers ( $columns, $records );
echo "<br />";

var_dump($buyer->fetch_assoc_in_buyers(array(), array(),true));
echo "<br />";

$columns = array ("buyer_id", "user_id");
$records= array (2,2);
$where_columns = array ("buyer_id", "user_id");
$where_records = array (1,1);

$buyer->update_record_in_buyers($columns, $records, $where_columns, $where_records,true);
echo "<br />";

var_dump($buyer->fetch_assoc_in_buyers(array(), array(),true));
echo "<br />";

$buyer->delete_record_from_buyers($columns, $records,true);
var_dump($buyer->fetch_assoc_in_buyers(array(), array(),true));
echo "<br />";
?>