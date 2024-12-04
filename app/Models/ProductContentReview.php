<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductContentReview extends Model
{
  use \Illuminate\Database\Eloquent\Factories\HasFactory;
  use \Illuminate\Database\Eloquent\Concerns\HasUuids;
  use \App\Helpers\BootModel\Traits\WithMasterBootModel;

  protected $keyType = 'string';
  public $incrementing = false;

  protected $fillable = [
    'name',
    'rating',
    'comment',
    'ordinal',
    'is_activated',
  ];
}
