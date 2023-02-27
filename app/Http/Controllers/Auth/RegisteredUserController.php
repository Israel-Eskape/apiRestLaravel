<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\hotelPeople;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Symfony\Component\HttpFoundation\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string','min:3', 'max:50'],
            'firstName'=>['required','string','min:3','max:50'],
            'lastName'=>['required','string','min:3','max:50'],
            'birthday'=>['required'],
            'address'=>['required','string','min:5','max:255'],
            'phone'=>['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.hotelPeople::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        
            'hotelRole_id'=>['required'],
            'hotelStatusEntity_id'=>['required'],
            
        ]);

        $user = hotelPeople::create([
            'name' => $request->name,
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'birthday'=>$request->birthday,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            
            'hotelRole_id'=>$request->hotelRole_id,
            'hotelStatusEntity_id'=>$request->hotelStatusEntity_id,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return response()->json(["message"=>"alta exitosa"]);//response($user,Response::HTTP_CREATED );//redirect(RouteServiceProvider::HOME);
    }
}
