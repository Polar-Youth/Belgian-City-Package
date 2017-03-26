<?php

namespace PolarYouth\Cities\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Provinces
 *
 * @package PolarYouth\Cities\Models
 */
class Provinces extends Model
{
    /**
     * The database table name.
     *
     * @var string
     */
    protected $table = 'belgian_provinces';

    /**
     * The mass-assign fields.
     *
     * @var array
     */
    protected $fillable = ['name'];
}