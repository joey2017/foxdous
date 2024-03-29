<?php

// THIS FILE IS AUTO GENERATED FROM DATABASE TABLES
// DO NOT EDIT THIS FILE, OR YOUR MODIFICATIONS WILL BE LOST.
 
namespace App\Common\Model\AutoGenerated;

/**
 * @property int $id  default: (NULL), max length: 11, raw type: int
 * @property string|null $type_name  default: (NULL), max length: 50, raw type: varchar
 * @property int|null $service_id  default: (NULL), max length: 11, raw type: int
 * @property int|null $payment_type  default: (NULL), max length: 11, raw type: int
 * @property int|null $template_id  default: (0), max length: 11, raw type: int
 * @property string|null $explain  default: (NULL), max length: 255, raw type: varchar
 * @property int|null $add_time  default: (NULL), max length: 11, raw type: int
 * @property int|null $edit_time  default: (NULL), max length: 11, raw type: int
 */
class payment_type extends \App\Common\Model\BaseModel {
    static $table_name  = 'yzb_payment_type';
    static $primary_key = 'id';
}
