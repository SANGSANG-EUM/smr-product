<?php
$sub_menu = "300900";
require_once './_common.php';

if($w == "" || $w == "u") {

  check_demo();
  
  auth_check_menu($auth, $sub_menu, 'w');
  
  check_admin_token();
}

$error_msg = '';

$dir = "/file/pdf/";

if($w == "d") {
  if(isset($_GET['sf_idx']) && !empty($_GET['sf_idx'])) {
    $del_where = " WHERE sf_idx = '{$_GET['sf_idx']}' ";
    $del_subtitle = $_GET['sf_title'];
    $del_sql = "SELECT * FROM system_file {$del_where} ";
    $del_res = sql_fetch($del_sql);
    
    $del_subtitle = $del_res['sf_subtitle'];
    $del_file = $del_res['sf_file'];
    $del_path = G5_DATA_PATH.$dir.$del_file;
  
    if(file_exists($del_path)) {
      unlink($del_path);
    }
    IUD_Model::delete("system_file", $del_where);
  
    alert("파일이 삭제되었습니다", `./system_pdf_form.php?w=u&sf_title={$del_subtitle}`);
  } else {

    if($_GET['sf_subtitle']) {
      $del_opt = " AND sf_subtitle = '{$_GET['sf_subtitle']}' ";
      $msg = "중점분야가 삭제되었습니다."; 
    } else {
      $del_opt = "";
      $msg = "내역사업이 삭제되었습니다."; 
    }
    $del_where = " WHERE sf_title = '{$_GET['sf_title']}' ".$del_opt;
    $del_sql = " SELECT * FROM system_file {$del_where} ";
    $del_res = sql_query($del_sql);

    for($del=0; $del_row=sql_fetch_array($del_res); $del++) {
      $del_file = $del_row['sf_file'];
      $del_path = G5_DATA_PATH.$dir.$del_file;

      if(file_exists($del_path)) {
        unlink($del_path);
      }

    }
    IUD_Model::delete("system_file", $del_where);

    alert($msg, `./system_pdf.php?`);
  }
}

$file_total = count($_FILES) / 4 ; 


for($i=0; $i<$file_total; $i++) {

  $db_input['sf_title']    = preg_replace("/\s+/", "", $sf_title);
  $db_input['sf_subtitle'] = preg_replace("/\s+/", "", $_POST["sf_subtitle_{$i}"]);
  $db_input['sf_order'] = preg_replace("/\s+/", "", $sf_order);
  $db_input['sf_suborder'] = preg_replace("/\s+/", "", $_POST["sf_suborder_{$i}"]);
  
  for($j=1; $j<=4; $j++) {
    
    $db_input['sf_no'] = $j-1;
    
    $files = $_FILES["file_{$i}_{$j}"];
    $uploaddir = G5_DATA_PATH.$dir;

    if (!empty($files)){
      $file_name = array();
          $tmp_name = $files["tmp_name"];
          $filename = substr(shuffle2(), 0, 8) . '_' . replace_filename($tmp_name);
          $uploadfile = $uploaddir . basename($filename);
     
          move_uploaded_file($tmp_name, $uploadfile);
     
          $db_input['sf_source']   = $files['name'];
          $db_input['sf_file']     = $filename;
          $db_input['sf_filesize'] = $files['size'];
          $db_input['sf_datetime'] = date('Y-m-d H:i:s');

          if($files['name']) {
            IUD_Model::insert('system_file', $db_input);
          }
     
    }
  }

}


goto_url('./system_pdf.php');






// $sub_menu = "300900";
// require_once './_common.php';
// print_r2($_POST);
// print_r2($_FILES);

// $dir = G5_DATA_PATH."/file/pdf/";

// $file_total = count($_FILES) / 4 ; 


// for($i=0; $i<$file_total; $i++) {

//   $db_input['sf_title']    = preg_replace("/\s+/", "", $sf_title);
//   $db_input['sf_subtitle'] = preg_replace("/\s+/", "", $_POST["sf_subtitle_{$i}"]);
  
//   for($j=1; $j<=4; $j++) {
    
//     $db_input['sf_no']       = $j-1;
    
//     $files = $_FILES["file_{$i}_{$j}"];
//     $filename = $files['name'];
//     $filesize = @getimagesize($files['size']);

//     $pattern = "/[#\&\+\-%@=\/\\:;,'\"\^`~\|\!\?\*\$#<>\(\)\[\]\{\}]/";

//     $filename = preg_replace("/\s+/", "", $filename);
//     $filename = preg_replace( $pattern, "", $filename);

//     $filename = preg_replace_callback("/[가-힣]+/", '_callback_img_upload', $filename);

//     $filename = preg_replace( $pattern, "", $filename);
//     $prepend = '';


//     $filename = $prepend.$filename;

//     if (!is_dir($dir)) {
//       mkdir($dir, 0777, true);
//     }

//     @move_uploaded_file($filename, $dir);
//     if (move_uploaded_file($filename, $dir)) {
//       echo "File was successfully uploaded.\n";
//   } else {
//       echo "FileUpload was failed.\n";
//   }

//     $db_input['sf_source']   = $files['name'];
//     $db_input['sf_file']     = $filename;
//     $db_input['sf_filesize'] = $filesize;
//     $db_input['sf_datetime'] = date('Y-m-d H:i:s');

//     if(!empty($files['name'])) {
//       IUD_Model::insert('system_file', $db_input);
//     }


//     echo "<br>";
//   }

// }