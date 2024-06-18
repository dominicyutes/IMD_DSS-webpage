<?php
/**
* Displays the pre-formatted array 
* @param mix $mix_arr
* @param int $i_then_exit
* @return void
*/
function pr($mix_arr = array(), $i_then_exit = 0)
{
	try
    {
     	echo '<pre>';
		print_r($mix_arr);
		echo '</pre>';
		unset($mix_arr);
		if($i_then_exit)
		{
			exit();
		}
    }
    catch(Exception $err_obj)
    {
        show_error($err_obj->getMessage());
    }
}
/**
* Displays the pre-formatted array with array element type
* @param mix $mix_arr
* @param int $i_then_exit
* @return void
*/
function vr($mix_arr = array(), $i_then_exit = 0)
{
	try
    {
     	echo '<pre>';
		var_dump($mix_arr);
		echo '</pre>';
		unset($mix_arr);
		if($i_then_exit)
		{
			exit();
		}
    }
    catch(Exception $err_obj)
    {
        show_error($err_obj->getMessage());
    }
}

if ( ! function_exists('getOptionParameter')){
	function getOptionParameter($mix_where = '', $s_id = ''){
		$CI = &get_instance();
		$cond = (trim($mix_where)) ? "WHERE id!=0 AND ".$mix_where : ' WHERE id!=0';
		$res = $CI->db->query("SELECT id, parameter_name FROM parameter_list {$cond} GROUP BY id,parameter_name");	
		$mix_value = $res->result_array();
		$s_option = '';
		if($mix_value)
		{
			foreach ($mix_value as $val)
			{
				$s_select = '';
				if($val["id"] == $s_id)
					$s_select = " selected ";
				$s_option .= "<option $s_select value='".$val["id"]."' >".ucfirst($val["parameter_name"])."</option>";
			}
		}
		unset($res, $mix_value, $s_select, $mix_where, $s_id);
		return $s_option;
		
	}
}