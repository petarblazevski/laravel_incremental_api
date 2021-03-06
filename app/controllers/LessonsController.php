<?php

class LessonsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        // 1. All is bad
        // 2. No way to attach meta data
        // 3. Linking db structure to the API output
        // 4. No way to signal headers/response codes

        $lessons = Lesson::all();
        return Response::json([
            'data' => $lessons->toArray()
        ], 200);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$lesson = Lesson::find($id);

        if ( ! $lesson)
        {
            return Response::json([
                'error' => [
                    'message' => 'Lesson does not exist'
                ]
            ], 404);
        }

        return Response::json([
            'data' => $lesson->toArray()
        ], 200);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}