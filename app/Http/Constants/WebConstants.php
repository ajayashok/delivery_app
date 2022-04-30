<?php
/**
 * Created By : AJAY
 * Date : 28-04-2022
 */
namespace App\Http\Constants;

class WebConstants
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    const ORDER_STATUS = [
            ['id' => 1,'name' => 'OPEN'],
            ['id' => 2,'name' => 'PICKED'],
            ['id' => 3,'name' => 'DELIVERED'],
            ['id' => 4,'name' => 'CANCLEED']
        ];
    const STATUS_OPEN = 1;
    const STATUS_PICKED = 2;
    const STATUS_DELIVERED = 3;
    const STATUS_CANCELLED = 4;

    const TYPE_CUSTOMER = 1;
    const TYPE_DELIVERY = 2;

}
