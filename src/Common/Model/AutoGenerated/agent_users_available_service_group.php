<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property string $service_name  default: (), max length: 50, raw type: varchar
 * @property string $note  default: (), max length: 255, raw type: varchar
 * @property int $user_amount  default: (0), max length: 11, raw type: int
 * @property string $is_default  default: (N), raw type: enum
 * @property int $add_time  default: (0), max length: 11, raw type: int
 * @property int $edit_time  default: (0), max length: 11, raw type: int
 */
class agent_users_available_service_group extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_agent_users_available_service_group';
    static $primary_key = 'id';
}
