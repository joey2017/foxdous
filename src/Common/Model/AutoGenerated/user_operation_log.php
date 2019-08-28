<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property int $user_id  default: (NULL), max length: 11, raw type: int
 * @property string|null $log_type  default: (NULL), max length: 20, raw type: varchar
 * @property int $platform_id  default: (0), max length: 4, raw type: int
 * @property string|null $info  default: (NULL), max length: 255, raw type: varchar
 * @property string|null $ip  default: (NULL), max length: 255, raw type: varchar
 * @property int|null $client  default: (0), max length: 1, raw type: tinyint
 * @property int|null $add_time  default: (NULL), max length: 11, raw type: int
 */
class user_operation_log extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_user_operation_log';
    static $primary_key = 'id';
}
