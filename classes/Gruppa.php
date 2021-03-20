<?php

    class Gruppa extends Table {

        public $gruppa_id = 0;
        public $name = '';
        public $special_id = 0;
        public $date_begin = getdate();
        public $date_end = getdate();


        public function validate() {
            return false;
        }
    }

?>