<?php  class Order {  private $dbutils;  private $action;  private $client;  public function __construct($action, $client) {  require_once 'includes/dbapi/db_actions.php'; 	include 'includes/dbapi/db_utils.php';$this->dbutils = new db_utils(); } public function init($execute = false) { 	$this->client = $_POST [POST_CLIENT]; $this->action = $_POST [POST_ACTION]; if ($execute) { if ($this->get_action == ACTION_INSERT) { } if ($this->get_action == ACTION_UPDATE) { } if ($this->get_action == ACTION_QUERY) { } if ($this->get_action == ACTION_DELETE) { } } }public function get_order_id($order_id,$product_id,$supplier_id,$buyer_id,$time_added,$quantity,$price){$columns = array('order_id','product_id','supplier_id','buyer_id','time_added','quantity','price');$records = array($order_id,$product_id,$supplier_id,$buyer_id,$time_added,$quantity,$price);$orders = $this->query_from_tbl_order($columns, $records);return $orders[0]['order_id'];}public function get_product_id($order_id){$columns = array('order_id');$records = array($order_id);$product_ids = $this->query_from_tbl_order($columns, $records);return $orders[0]['product_id'];}public function get_supplier_id($order_id){$columns = array('order_id');$records = array($order_id);$supplier_ids = $this->query_from_tbl_order($columns, $records);return $orders[0]['supplier_id'];}public function get_buyer_id($order_id){$columns = array('order_id');$records = array($order_id);$buyer_ids = $this->query_from_tbl_order($columns, $records);return $orders[0]['buyer_id'];}public function get_time_added($order_id){$columns = array('order_id');$records = array($order_id);$time_addeds = $this->query_from_tbl_order($columns, $records);return $orders[0]['time_added'];}public function get_quantity($order_id){$columns = array('order_id');$records = array($order_id);$quantitys = $this->query_from_tbl_order($columns, $records);return $orders[0]['quantity'];}public function get_price($order_id){$columns = array('order_id');$records = array($order_id);$prices = $this->query_from_tbl_order($columns, $records);return $orders[0]['price'];} private function get_table() { return 'tbl_order'; } private function get_action() { return $this->action; } private function get_client() { return $this->client; } public function is_exists(Array $columns, Array $records, $printSQL = false) { return $this->is_exists ( $this->get_table (), $columns, $records, $printSQL ); } public function insert_records_to_order(Array $columns, Array $records, $printSQL = false) { return $this->insert_records ( $this->get_table (), $columns, $records, $printSQL ); } public function delete_record_from_order(Array $columns, Array $records, $printSQL = false) { return $this->delete_record ( $this->get_table (), $columns, $records, $printSQL ); } public function update_record_in_order(Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) { return $this->update_record ( $this->get_table (), $columns, $records, $where_columns, $where_records, $printSQL ); }  public function fetch_assoc_in_order(Array $columns, Array $records, $printSQL = false) { return $this->fetch_assoc ( $this->get_table (), $columns, $records, $printSQL ); }  public function query_from_order(Array $columns, Array $records, $printSQL = false) { return $this->query ( $this->get_table (), $columns, $records, $printSQL ); }  public function search_in_order(Array $columns, Array $records, $printSQL = false) {return $this->search ( $this->get_table (), $columns, $records, $printSQL ); } private function delete_record($table,Array $columns,Array  $records,$printSQL = false){return $this->dbutils->delete_record($table, $columns,  $records,$printSQL );	} private function insert_records($table,Array $columns,Array  $records,$printSQL = false){return $this->dbutils->insert_records($table, $columns,  $records,$printSQL );} private function update_record($table,Array $columns, Array $records, Array $where_columns,Array $where_records,$printSQL = false){return $this->dbutils->update_record($table, $columns,  $records,  $where_columns, $where_records,$printSQL);} private function fetch_assoc($table,Array $columns,Array  $records,$printSQL = false){return $this->dbutils->fetch_assoc($table, $columns,  $records,$printSQL);	}public function query($table,Array $columns,Array $records,$printSQL = false){$this->dbutils->query($table,$columns, $records,$printSQL);} private function search($table,Array $columns,Array $records,$printSQL = false){return $this->dbutils->search($table,$columns,$records,$printSQL);} }  ?>