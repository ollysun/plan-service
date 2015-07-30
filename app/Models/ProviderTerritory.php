<?php namespace Plans\Models;

use Illuminate\Database\Eloquent\Model;

class ProviderTerritory extends Model {


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'provider_territory';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    protected $primaryKey = 'id';//@TODO change
    protected $guarded = [''];



    /**
     * Get the provider record associated with the plan.
     */
    public function Plans()
    {
        return $this->belongsTo('Plans\Models\Plans');
    }

    public function Territories()
    {
        return $this->hasOne('Plans\Models\Territories','id','territory_id');
    }

    public function scopeOfProvider($query)
    {
        return $query->where('name', 'stripe');
    }

}
