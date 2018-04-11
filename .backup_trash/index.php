<?php
    //$arr_in = array("cm_cd"=>"D20", "cm_nm"=>"의사");
    //$arr_in = array("cm_cd"=>"D21", "cm_nm"=>"의사2222");

    $arr1 = array("o_ret_cd" => "0000", "o_ret_msg" => "Tcm Select Success", "o_ret_data" => array("cm_cd" => "D20"));
    //print_r(json_encode($arr1));

    //$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
    $a = array ('o_ret_cd' => '0000', 'o_ret_msg' => 'Select', 'o_ret_data' => array ('cm_cd' => '"D20"', 'cm_nm' => '"의사"'));
    print_r ($a);
    echo "<br><br><br>";
    print_r (json_encode($a, JSON_UNESCAPED_UNICODE));

    
    //var_dump(json_encode($arr1));
    //echo "";
    //print_r(json_encode($arr1, JSON_UNESCAPED_UNICODE));
?>