<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property string $name  default: (NULL), max length: 64, raw type: varchar
 * @property string|null $data  default: (NULL), raw type: blob
 * @property int|null $created_at  default: (NULL), max length: 11, raw type: int
 * @property int|null $updated_at  default: (NULL), max length: 11, raw type: int
 */
class auth_rule extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_auth_rule';
    static $primary_key = 'name';
}
