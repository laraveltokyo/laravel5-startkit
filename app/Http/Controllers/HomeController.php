<?php namespace App\Http\Controllers;

/**
 * @Get("/")
 */
class HomeController extends Controller {

    /**
     * @Get("/")
     */
	public function index()
	{
		return view('hello');
	}

	public function getIndex()
	{
		return view('hello');
	}

	public function getB()
	{
		return Response::json([
		], 200);
	}

    /**
     * @Get("b/{id}")
     */
	public function b($apartment, $memberId)
	{
		return Response::json([
			‘member_id’ => $memberId,
		], 200);
	}

}
