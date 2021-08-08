
<?php 

    class Mod_home extends CI_model {

        public function getfak()
        {
            return $this->db->get('ref_fakultas')->result_array();
        }

    }