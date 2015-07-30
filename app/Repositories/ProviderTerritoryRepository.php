<?php namespace Plans\Repositories;

use Plans\Mapper\ProviderTerritoryMapper;
use Plans\Models\ProviderTerritories;


class ProviderTerritoryRepository implements IPlansRepository
{

    public static function getPlansByPlatformProviderGeo($platform ,$iso3, $provider)
    {
        $getPlans =  Plans::where('plans.is_active', '=', 1)
            ->where('plans.platform', '=', $platform)
            ->join('provider_territory','plans.provider_id','=','provider_territory.id')
            ->join('territories','provider_territory.territory_id','=','territories.id')
            ->where('provider_territory.name', '=', $provider)
            ->join('territory_countries','territories.id','=','territory_countries.territory_id')
            ->where('territory_countries.iso3', '=', $iso3)
            ->get();

        return ProviderTerritoryMapper::map($getPlans);
    }

    public function getProviderById($id)
    {
        return Plans::find($id);
    }

    public function createOrUpdate($id = null)
    {
        if(is_null($id)) {


        }
        else {

        }
        return Plans::save();
    }



}