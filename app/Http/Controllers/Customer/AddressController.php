<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Address;

class AddressController extends Controller
{
    public function changeAddress($id)
    {
        $user = auth()->user()->id;
        Address::where('user_id',$user)->update(['is_default'=>0]);
        $data = Address::find($id);
        $data->is_default = 1;
        $data->update();

        return response()->json(['result'=>$data],200);
    }
}
