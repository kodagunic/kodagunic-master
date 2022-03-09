<?php
    include "conn.php";
    class District {
        protected $conn;
        protected $data = array();
        function __construct() {

                        $db = new distdbObj();
                        $connString =  $db->getConnstring();
                        $this->conn = $connString;
        }
    
        public function getDistricts() {
                        $sql = "select * from public.district_karnataka ORDER BY sno ASC";
                        $queryRecords = pg_query($this->conn, $sql) or die("error to fetch district data");
                        $data = pg_fetch_all($queryRecords);
                        return $data;
        }
    }
?>