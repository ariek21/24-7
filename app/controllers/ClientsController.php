<?php

class ClientsController extends BaseController {

	protected $layout = 'master';

    public function getPageName ()
	{
		return 'clients';
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($orderBy = 'id', $order = 'desc')
	{
		if ($order == 'desc') {
			$order = 'asc';
		} else {
			$order = 'desc';
		}

		return View::make('clients.index')
               ->with('name', $this->getPageName())
        	   ->with('clients', Client::orderBy($orderBy, $order)->get())
        	   ->with('order', $order)
        	   ->with('orderBy', $orderBy);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

        return View::make('clients.create')
               ->with('name', $this->getPageName())
        	   ->with('clients', Client::all());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		// validate the info, create rules for the inputs
		$rules = array(
			'city' => 'required|min:2', // make sure the email is an actual email
			'address' => 'required|min:2' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('dashboard/client/new');
		}

		$city = Input::get('city');
		$address = Input::get('address');
		$addressNumber = Input::get('address-number');

		// @TODO | validate

		$client = new Client;

		$client->city = $city;
		$client->address = $address;
		$client->address_number = $addressNumber;
		$client->save();
		$insertedId = $client->id;
		return Redirect::to('dashboard/client/edit/' . $insertedId);

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('clients.show')
         			->with('name', $this->getPageName())
        			->with('client', Client::find($id));

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

        if(is_numeric($id))
		{
			$client = Client::find($id);
			$contacts = Contact::all();

			if (count($client) > 0) {
				$d = new DateTime($client->contract_start);
				$client->contract_start = $d->format('Y-m-d');
				$d = new DateTime($client->contract_end);
				$client->contract_end = $d->format('Y-m-d');
			}
			return View::make('clients.edit')
               ->with('name', $this->getPageName())
        	   ->with('client', $client)
        	   ->with('contacts', $contacts);
        } else {
        	die('no client');
        	return Redirect::to('dashboard/clients');
        }
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$id = Input::get('id');

		// validate the info, create rules for the inputs
		$rules = array(
			'city' => 'required|min:2', // make sure the email is an actual email
			'address' => 'required|min:2' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('dashboard/clients');
		}

		// @TODO | validate
		$client = Client::find($id);
		$client->city = Input::get('city');
		$client->address = Input::get('address');
		$client->address_number = Input::get('address-number');
		$client->contract_start = new DateTime(Input::get('contract_start'));
		$client->contract_end = new DateTime(Input::get('contract_end'));
		$client->number_of_floors = Input::get('number_of_floors');
		$client->number_of_apartments = Input::get('number_of_apartments');
		$client->general_comment = Input::get('general_comment');


		$client->save();
		return Redirect::to('dashboard/clients');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if(is_numeric($id))
		{
			$client = Client::find($id);
			$client->delete();
		}
		return Redirect::to('dashboard/clients');
	}

	public function addContact()
	{
		die('new contact');
	}

}
