<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentPrice() {
        return money_format('€%i', $this->price / 100);
    }
}