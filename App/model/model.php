<?php
namespace App\model;
/*
* @File: model.php
* @Author: Nathan Wright
* @Created 04-05-17
* @Last modified: 04-05-17
*
* Copyright (C) Nathan Wright  - All Rights Reserved - https://nathanwright.me/
* Unauthorized copying of this file, via any medium is strictly prohibited
* without the express permission of Nathan "ArrogantBread" Wright
*/


class model {

  protected $db = nil;

  public function __construct($db) {
    try {
      $this->db = $db;
    } catch (PDOException $e) {
      exit('Database connection could not be established.');
    };
  }
}