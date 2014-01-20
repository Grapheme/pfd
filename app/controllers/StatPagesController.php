<?php

class StatPagesController extends BaseController {

	/**
	 * StatPage Repository
	 *
	 * @var StatPage
	 */
	protected $statPage;

	public function __construct(StatPage $statPage)
	{
		$this->statPage = $statPage;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$statPages = $this->statPage->all();

		return View::make('statPages.index', compact('statPages'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('statPages.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, StatPage::$rules);

		if ($validation->passes())
		{
			$this->statPage->create($input);

			return Redirect::route('admin.statPages.index');
		}

		return Redirect::route('admin.statPages.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$statPage = $this->statPage->findOrFail($id);

		return View::make('statPages.show', compact('statPage'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$statPage = $this->statPage->find($id);

		if (is_null($statPage))
		{
			return Redirect::route('admin.statPages.index');
		}

		return View::make('statPages.edit', compact('statPage'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, StatPage::$rules);

		if ($validation->passes())
		{
			$statPage = $this->statPage->find($id);
			$statPage->update($input);

			return Redirect::route('admin.statPages.show', $id);
		}

		return Redirect::route('admin.statPages.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->statPage->find($id)->delete();

		return Redirect::route('admin.statPages.index');
	}

}
