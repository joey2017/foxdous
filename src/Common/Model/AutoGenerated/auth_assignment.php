<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property string $item_name  default: (NULL), max length: 64, raw type: varchar
 * @property string $user_id  default: (NULL), max length: 64, raw type: varchar
 * @property int|null $created_at  default: (NULL), max length: 11, raw type: int
 */
class auth_assignment extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_auth_assignment';
    static $primary_key = 'user_id';
}