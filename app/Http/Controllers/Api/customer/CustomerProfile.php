<?php

namespace App\Http\Controllers\Api\customer;

use App\Http\Controllers\apiController;
use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerResource;
use App\Models\Customar;
use Illuminate\Http\Request;

class CustomerProfile extends apiController
{
    public function getProfile()
    {
        $id = auth('customer')->user()->id;
        $profile = Customar::findOrFail($id);
        return $this->apiResponse(new CustomerResource($profile), self::STATUS_OK, 'select profile successfully');

    }
}
