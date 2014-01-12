<?php

class DashboardController extends BaseController {

	public function getPageName ()
	{
		return 'dashboard';
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (!isset(User::find(Auth::user()->id)->role->title))
		{
			return Redirect::to('login');
		}

		$tasks = Tasks::where('user_id','=',Auth::user()->id)->take(4)->get();
        return View::make('dashboards.index')
        			 ->with('isSuperAdmin', User::isSuperAdmin())
        			 ->with('tasks', $tasks)
        			 ->with('clients', Client::take(4)->get())
                     ->with('name', $this->getPageName());
	}

}
