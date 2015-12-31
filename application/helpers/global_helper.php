<?php
/*
 * Validating the input values
 */
function checkValidInput()
{

}

/*
 * Check If value already exists in db
 */
function checkIfExists($array, $table_name)
{
    $ci =& get_instance();
    $ci->db->where($array);
    $query = $ci->db->get($table_name);
    if ($query->num_rows() > 0) {
        return true;
    }
    else{
        return false;
    }
}

