<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property string|null $idcard  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $name  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $msg  default: (NULL), raw type: text
 * @property int|null $add_time  default: (NULL), max length: 11, raw type: int
 */
class idcard_insert_error_log extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_idcard_insert_error_log';
    static $primary_key = 'id';
}
