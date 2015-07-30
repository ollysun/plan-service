<?php namespace Plans\Models;

use Illuminate\Database\Eloquent\Model;

class Territories extends Model {


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'territories';

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
    public function ProviderTerritory()
    {
        return $this->belongsTo('Plans\Models\ProviderTerritory');
    }

    public function TerritoryToCountries()
    {
        return $this->hasMany('Plans\Models\TerritoryToCountries','territory_id','id');
    }

}
