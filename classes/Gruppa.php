<?php

    class Gruppa extends Table {

        public $gruppa_id = 0;
        public $name = '';
        public $special_id = 0;
        public $date_begin = '2021-09-01';
        public $date_end = '2025-07-01';


        public function validate() {
            return false;
        }
    }

?>