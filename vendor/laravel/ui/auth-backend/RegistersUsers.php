<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Application;
use Session;
trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Application $app,Request $request)
    {
        $langugae = Session::get('locale');
        $app->setLocale($langugae);


        $request->validate([
            'idphoto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'healthidphoto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
   
                ]);

      
        if ($request->hasFile('idphoto') && $request->hasFile('healthidphoto')) {
           

            $image = $request->file('idphoto');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $request->request->add(['idphotoname' => $name ]);
            $image->move($destinationPath, $name);

            $imageHealth = $request->file('healthidphoto');
            $nameHealth = time().'.'.$imageHealth->getClientOriginalExtension();
            $request->request->add(['healthidphotoname' => $nameHealth ]);
            $imageHealth->move($destinationPath, $nameHealth);


        }else{
           var_dump($request->file('idphoto'));
            die;
        }

        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
                    ? new Response('', 201)
                    : redirect($this->redirectPath());
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //

        return response()->json(["Message" => "Success"]);
    }
}
