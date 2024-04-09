<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MacrosModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }


    public function saveMacroData($macroname, $modelname, $parametername, $subparametername, $user_id) 
    {
        $data = array(
            'macroname' => $macroname,
            'modelname' => $modelname,
            'parametername' => $parametername,
            'subparametername' => $subparametername,
            'user_id' => $user_id
        );

        $this->db->insert('macros', $data);
    }

    // filtering macroName from user_id
    public function getMacrosByUserId($user_id) { 
    $this->db->where('user_id', $user_id);
    $query = $this->db->get('macros');
    
    return $query->result();
    }


    public function getAllMacros() {
    $query = $this->db->get('macros');
    return $query->result_array();
    }


    public function getMacroById($macro_id) {
        return $this->db->get_where('macros', array('id' => $macro_id))->row_array();
    }


    public function getMacroDetailsByMacroname($macroname) {
    $this->db->where('macroname', $macroname);
    $query = $this->db->get('macros');

    if ($query->num_rows() > 0) {
        return $query->result_array();
    } else {
        return null;
    }
    }


    public function updateMacroValues($id, $macroName, $modelName, $parameterName, $subParameterName) {
    $data = array(
        'macroname' => $macroName,
        'modelname' => $modelName,
        'parametername' => $parameterName,
        'subparametername' => $subParameterName
    );
    //
    $this->db->where('id', $id);
    $this->db->update('macros', $data);
    // 
    return $this->db->affected_rows() > 0;
    }
    


    public function deleteMacroByMacroname($macroname) {
    $this->db->where('macroname', $macroname);
    $this->db->delete('macros');
    }


    public function getMacroByMacroname($macroname) {
    $this->db->where('macroname', $macroname);
    $query = $this->db->get('macros');
    return $query->result_array();
    }


    public function deleteMacroById($macroId) {
    $this->db->where('id', $macroId);
    $this->db->delete('macros');
    }
    

    public function logDeletedMacro($macroname, $userName, $deleteReason) {
    $data = array(
        'macroname' => $macroname,
        'deleted_by' => $userName,
        'delete_reason' => $deleteReason
    );

    $this->db->insert('deleted_macros', $data);
    }


    // Showing the deleted MacroGroup reason to superadmin
    public function getDeletedMacros() {
    $this->db->select('macroname, deleted_by, delete_reason, deleted_at AS deleted_At');
    $query = $this->db->get('deleted_macros');
    return $query->result_array(); 
    }

    // SuperAdmin User Filteration
    public function getUserNames() {
    $query = $this->db->select('name')->get('users');
    return $query->result_array();
    }

    public function getMacronamesByUserId($userId) {
    $this->db->where('user_id', $userId);
    $query = $this->db->select('macroname')->get('macros');
    return $query->result_array();
    }



}
?>