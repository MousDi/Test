<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Registration;
use App\Http\Resources\PackageResource;

class PackageApiController extends ResponseApiController
{
   
    public function getAll()
    {
        $packages = Package::all();
        foreach( $packages as  $package ) {
            $available = 'Available';
            if($package->subscriptions >= $package->limit){
            $available = 'Unavailable';
            }
            $package->status = $available;
        }
        return $this->sendResponse(PackageResource::collection($packages), 'Packages retrieved');
    }



    public function subscribe(Request $request)
    {   
        $packageid = $request['packageid'];
        $userid = $request['userid'];

        $registration = Registration::where('package_id',$packageid)
        ->where('user_id',$userid)->first();
        if(!$registration)
        {
        Registration::create([
                'user_id' => $userid,
                'package_id' => $packageid,
        ]);
        $package = Package::find($packageid);
        $package->subscriptions++;
        $package->save();
        return  $this->getAll();
        }

        else{
        return $this->sendError('Already subscribed');
        }
    }
 
}
