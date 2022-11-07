<?php
require_once __DIR__ . '../../mongo/vendor/autoload.php';
  $con = new MongoDB\Client("mongodb://localhost:27017");
  $db = $con->profile;
  $coll = $db->datas;
  $getdb = $con->profile;
  $getcoll = $db->datas;
  $get = $getcoll->find()->toArray();
  if($get){
      $tabel=[];
      foreach ( $get as $data )
      {
       $tabel[]=$data;
      }
      echo json_encode($tabel);
  }

