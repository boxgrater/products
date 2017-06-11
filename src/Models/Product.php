<?php

namespace BoxGrater\Products\Models;

use BoxGrater\Merchants\Models\Merchant;
use BoxGrater\Products\Traits\Costable;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use Costable;

    public function merchant()
    {
      return $this->belongsTo('BoxGrater\Merchants\Models\Merchant');
    }

    public function getEachPriceAttribute()
    {
      //return $this->eachPrice();
      
      $price = $this->purchase_price;
      $each = $this->pack_qty;
      return $price/$each;
      
    }

    public function uoms()
    {
      return [
        'oz' => 'oz',
        'lb' => 'lb',
        'ea' => 'ea',
        'gal' => 'gal',
        'dz' => 'dz',
      ];
    }

    public function getConversionTypeAttribute()
    {
      return $this->conversionType($this->pack_uom);
    }
}
