<?php namespace Plans\Mapper;
/**
 * Created by PhpStorm.
 * User: irokopartners
 * Date: 7/29/15
 * Time: 9:15 AM
 */


class PlansMapper implements IPlansMapper
{

    public static function map($plans){

        $mapPlans = array();

        foreach($plans as $key=>$plan){
            $mapPlans[$key]['plan_id']=$plan->id;
            $mapPlans[$key]['plan_name']=$plan->plan_name;
            $mapPlans[$key]['product_id']=$plan->product_id;
            $mapPlans[$key]['platform']=$plan->platform;
            $mapPlans[$key]['is_recurring']=$plan->is_recurring;
            $mapPlans[$key]['is_data']=$plan->is_data;
            if($plan->is_trial) {
                $mapPlans[$key]['is_trial'] = $plan->is_trial;
                $mapPlans[$key]['trial_duration']=$plan->trial_duration;
            }
            $mapPlans[$key]['price']=$plan->price;
            $mapPlans[$key]['is_coupon']=$plan->is_coupon;
            $mapPlans[$key]['iso3']=$plan->iso3;
            $mapPlans[$key]['provider']=$plan->provider->name;
            $mapPlans[$key]['currency']=$plan->currency;
            $mapPlans[$key]['currency_symbol']=$plan->currency_symbol;

        }

        return $mapPlans;
    }

}