<?php
/**
 * Created By: AJAY
 * Date:30-04-2022
 */
namespace App\Http\Controllers\Auth;

use App\Http\Constants\WebConstants;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Login Page
     * @return Application|Factory|View|RedirectResponse|Redirector
     */
    public function showLoginForm()
    {
        if(auth()->check()){
            if(auth()->user()->role_id == WebConstants::TYPE_CUSTOMER){
                return redirect(route('customer.dashboard'));
            }else{
                return redirect(route('delivery.delivery_dashboard'));
            }
        }
        return view('auth.login');
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     * Do login
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if($request['user_type']=='1') {
            if ($validator->passes()) {

                if (auth()->attempt($request->except('_token', 'user_type'))) {
                    return redirect(route('customer.dashboard'));
                } else {
                    return back()->with('error', 'Invalid Login Credentials');
                }
                return back()->with('success', 'You Are Logged In');
            }
        }elseif($request['user_type']=='2'){
            if ($validator->passes()) {
                if (auth()->attempt($request->except('_token', 'user_type'))) {
                    return redirect(route('delivery.delivery_dashboard'));
                } else {
                    return back()->with('error', 'Invalid Login Credentials');
                }
                return back()->with('success', 'You Are Logged In');
            }
        }else {
            return back()->withErrors($validator)->withInput(request()->all());
        }
    }

    /**
     * @return Application|RedirectResponse|Redirector
     * Logout
     */
    public  function logout()
    {
        auth()->logout();
        return redirect(route('auth.login'));
    }
}
