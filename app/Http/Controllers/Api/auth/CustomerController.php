<?php

namespace App\Http\Controllers\Api\auth;

use App\Http\Controllers\apiController;
use Illuminate\Http\Request;




use App\Http\Resources\CustomerResource;

use App\Models\Customar;
use App\Traits\RestfulTrait;
use Illuminate\Support\Facades\Hash;
use App\Traits\rulesReturnTrait;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;



class CustomerController extends apiController
{
    use RestfulTrait, rulesReturnTrait;

    protected $model = Customar::class;


    public function register(Request $request)
    {
        $validate = $this->apiValidation($request, $this->customerRegisterRules());
        if($validate instanceof Response) return $validate;
        $request_data = $request->except('password', 'password_confirmation','image');
        $request_data['password'] = bcrypt($request->password);

        if ($request->image) {
            $request_data['image'] = $request->image->hashName();
            Storage::disk('my_files')->put('/upload/user_images/',$request->image);
        }

        
        $customer = $this->model::create($request_data);
        $token = $customer->createToken('key')->plainTextToken; 
        return $this->apiResponse(['user' => new CustomerResource($customer), 'token' =>  $token], self::STATUS_CREATED,__('auth.success'));
    }

    public function login(Request $request)
    {
        $validate = $this->apiValidation($request, $this->customerLoginRules());
        if($validate instanceof Response) return $validate;

        $customer = $this->model::where('email', $request->email)->first();

        if (!$customer || !Hash::check($request->password, $customer->password)) {

            return $this->apiResponse([], self::STATUS_NOT_AUTHENTICATED, __('auth.password_error'));
        }

        $token = $customer->createToken('key')->plainTextToken;

        return $this->apiResponse(['user' => new CustomerResource($customer), 'token' => $token], self::STATUS_OK,__('auth.success'));
    }

    public function logout()
    {
        auth('customer')->user()->tokens()->delete();
        return $this->apiResponse([], self::STATUS_OK,__('auth.success'));
    }
}
