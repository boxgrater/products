<?php

namespace BoxGrater\Products\Traits;

use PhpUnitsOfMeasure\PhysicalQuantity\Mass;
use PhpUnitsOfMeasure\PhysicalQuantity\Volume;

trait Costable
{
  public function conversionType($unit)
  {
    $unit = strtolower($unit);
 
    $massTypes    = ['ozm','lbm','lb','lbs','kg','g'];
    $volumeTypes  = ['gal','qt','pt','cup','tsp','tbsp','l'];
    $countTypes   = ['ea','dz','cn'];
 
    if (in_array($unit, $massTypes)) {
      $type = 'mass';
    } elseif (in_array($unit, $volumeTypes)) {
      $type = 'volume';
    } elseif (in_array($unit, $countTypes)) {
      $type = 'count';
    } else {
      $type = null;
    }
    return $type;
  }
 
  public function grossUnit($unit)
  {
    return $unit;
  }
 
  public function grossSize($size)
  {
    return $size;
  }
 
  public function grossQty($qty, $size)
  {
    $calc = $qty*$size;
    return $calc;
  }
 
  public function breakPack($purchase_unit, $pack_qty)
  {
    if ($purchase_unit = 'EA') {
      $qty = 1;
      return $qty;
    }
 
    if ($purchase_unit = 'CS') {
      $qty = $pack_qty;
      return $qty;
    }
  }
 
  public function eachUnit($unit)
  {
    return $each_unit = $unit;
  }
 
  public function eachSize($size)
  {
    return $each_size = $size;
  }
 
  public function eachQty($purchase_unit, $pack_qty)
  {
    $each_qty = self::breakPack($purchase_unit, $pack_qty);
    return $each_qty;
  }
 
  public function unitUnit($unit)
  {
    return $unit;
  }
 
  public function unitSize($size)
  {
    return $size;
  }
 
  public function unitQty($size, $conversion, $qty = 1)
  {
    $calc = ($size/$conversion)*$qty;
    return $calc;
  }
 
  public function conversionRate($type,$to,$from,$qty = 1)
  {
    if ($type == 'mass') {
      $measure = new Mass($qty, $from);
      $converted = $measure->toUnit($to);
      return $converted;
 
    } elseif ($type == 'volume') {
      $measure = new Volume($qty, $from);
      $converted = $measure->toUnit($to);
      return $converted;
 
    } elseif ('count') {
      //
      return 1;
    }
  }
 
  public function rawEachPrice($price, $qty)
  {
    $calc = $price/$qty;
    return $calc;
  }
 
  public function eachPrice($price, $qty)
  {
    $value = $this->rawEachPrice($price, $qty);
    $money = Bistro::money($value, "$%i / Ea");
    return $money;
  }
}