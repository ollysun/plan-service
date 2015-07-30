<?php namespace Plans\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Plans\Http\Controllers\Controller;
use Plans\Repositories\PlansRepository;

use Illuminate\Support\Facades\Input;


class PlansController extends Controller {

	public function __construct()
	{
        //@TODO call middletier
	}

	public function getPlansByPlatformProviderGeo($platform ,$iso3, $provider)
	{
        //@TODO
        //Token validation should be abstract for all API call
        // params validation for data type and required should be in each controller method
        //error codes must be abstracted
        if (!$platform || !$iso3 || !$provider) {

            return response()->json(['data'=>'Required fields incomplete'],400);

        }

        try {
           $plans = PlansRepository::getPlansByPlatformProviderGeo($platform ,$iso3, $provider);
           return response()->json(['data'=>$plans],200);
        } catch(\Exception $e){
            return json_encode($e->getCode().':: ' .$e->getTraceAsString());
        }

	}

    public function getPlans()
    {

    }

    public function createPlan()
    {

    }

    public function updatePlan()
    {

    }

    public function deletePlan()
    {

    }

    public function testApi()
    {
        $request = Input::all();

        return json_encode(array('success'=>'true'));
    }
}
