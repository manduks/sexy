<?php

class VideosController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$videos = Video::all();
		return View::make('videos.index', compact('videos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$video = new Video;
		return View::make('videos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$video = new Video;
	    $video->title = Input::get('title');
	    $video->description = Input::get('description');
	    
	    // saving file	    
	   	$file = Input::file('file');

	   	// validating the files
	   	$input = array('file' => Input::file('file'));
	   	$rules = array('file' => 'mimes:mp4');
	   	// $rules = array('file' => 'image');
	   	$validator = Validator::make($input, $rules);

	   	if($validator->fails()){
		    return $validator->messages();
		}
		else{	
			$destinationPath = 'uploads/'.str_random(8);
			$filename = $file->getClientOriginalName();
			$upload_success = $file->move('public/'.$destinationPath, $filename);

			$video->file =  $destinationPath.'/'.$filename;
			if( $upload_success ) {
				$video->save();
			}    
		}
	    return Redirect::route('videos.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$video = Video::find($id);
		return View::make('videos.edit',compact('video'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$video = Video::find($id);
	    $video->title   = Input::get('title');
	    $video->description    = Input::get('description');

	     // saving file	    
	   	$file = Input::file('file');

	   	// validating the files
	   	$input = array('file' => Input::file('file'));
	   	$rules = array('file' => 'mimes:mp4');
	   	$validator = Validator::make($input, $rules);

	   	if($validator->fails()){
		    return $validator->messages();
		}
		else{	 
			$destinationPath = 'uploads/'.str_random(8);
			$filename = $file->getClientOriginalName();
			//$extension =$file->getClientOriginalExtension(); 
			$upload_success = $file->move('public/'.$destinationPath, $filename);

			$video->file =  $destinationPath.'/'.$filename;
			if( $upload_success ) {
				$video->save();
			}    
		}	 
	    return Redirect::route('videos.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$video = Video::find($id);
	    $video->delete();
	 
	    return Redirect::route('videos.index');
	}

}