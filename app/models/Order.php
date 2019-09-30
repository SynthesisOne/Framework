<?php

namespace app\models;

class Order extends AppModel {

    public  $attributes = [];

    public  function saveOrder($data){
       $this->attributes['user_id'] = $data['user_id'];
        $this->attributes['currency'] = $_SESSION['cart.currency']['code'];
        $this->attributes['note'] = $data['note'];
      $this->save('order');
    }

    public static function saveOrderProduct($order_id){

    }

    public static function mailOrder($order_id, $user_email){

    }

}