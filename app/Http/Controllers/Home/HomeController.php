<?php

namespace Rxak\App\Http\Controllers\Home;

use Rxak\Framework\Helpers\Authorization;
use Rxak\App\Http\Controllers\BaseController;
use Rxak\App\Models\Project;
use Rxak\App\Models\User;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Rxak\Framework\Http\Request;
use Rxak\Framework\Http\Response;
use Rxak\App\Templating\Pages\HomePage;
use Rxak\App\Templating\Pages\LoginPage;
use Rxak\Framework\Session\MessageBag;

class HomeController extends BaseController
{
    public function home(Request $request)
    {
        return new Response(
            new HomePage(Project::where('highlighted', 1)->get()->toArray()),
            200
        );
    }

    public function login(Request $request)
    {
        return new Response(
            new LoginPage(),
            200
        );
    }

    public function loginSubmit(Request $request)
    {
        /**
         * @var \Rxak\App\Models\User
         */
        $user = User::where('username', $request->get('username'))->get()->first();

        if ($user === null || !password_verify($request->get('password'), $user->password)) {
            MessageBag::getInstance()->set('landviz.login_error', 'Incorrect login details');

            return new Response(
                new LoginPage(),
                200
            );
        }

        Authorization::authorize($user);

        return new RedirectResponse('.');
    }
}