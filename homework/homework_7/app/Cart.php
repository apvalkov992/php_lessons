<?php

class Cart
{
    public  $inCart;
    function addCart($shopingId, $user, $product, $amount)
    {
        $this->inCart[$shopingId] = [
            'user'=> $user,
            'product' => $product,
            'amount' => $amount,
        ];
    }
    function shopingPrice ($shopingId)
    {
        $sum =0;
        foreach ($this->inCart as $value){
            $sum += $value['amount'] * $value['product']['price'] . '<br>';
        }
        return $sum;
    }
}
