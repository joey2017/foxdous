<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property string $name  default: (NULL), max length: 255, raw type: varchar
 * @property int $boss_user_id  default: (NULL), max length: 11, raw type: int
 * @property int $platform_id  default: (NULL), max length: 11, raw type: int
 * @property int $add_time  default: (NULL), max length: 11, raw type: int
 */
class users_employee_boss_position extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_users_employee_boss_position';
    static $primary_key = 'id';
}
