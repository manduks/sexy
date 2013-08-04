<?php

class PhotosController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$photos = Photo::all();
		return View::make('photos.index', compact('photos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$photo = new Photo;
		return View::make('photos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$photo = new Photo;
	    $photo->title = Input::get('title');
	    $photo->description = Input::get('description');
	    
	    // saving file	    
	   	$file = Input::file('file');

	   	// validating the files
	   	$input = array('file' => Input::file('file'));
	   	// $rules = array('file' => 'mimes:png');
	   	$rules = array('file' => 'image');
	   	$validator = Validator::make($input, $rules);

	   	if($validator->fails()){
		    return $validator->messages();
		}
		else{	
			$destinationPath = 'uploads/'.str_random(8);
			$filename = $file->getClientOriginalName();
			//$extension =$file->getClientOriginalExtension(); 
			$upload_success = $file->move('public/'.$destinationPath, $filename);

			$photo->file =  $destinationPath.'/'.$filename;
			if( $upload_success ) {
				$photo->save();
			}    
		}
	    return Redirect::route('photos.index');
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
		$photo = Photo::find($id);
		return View::make('photos.edit',compact('photo'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$photo = Photo::find($id);
	    $photo->title   = Input::get('title');
	    $photo->description    = Input::get('description');

	     // saving file	    
	   	$file = Input::file('file');

	   	// validating the files
	   	$input = array('file' => Input::file('file'));
	   	// $rules = array('file' => 'mimes:png');
	   	$rules = array('file' => 'image');
	   	$validator = Validator::make($input, $rules);

	   	if($validator->fails()){
		    return $validator->messages();
		}
		else{	 
			$destinationPath = 'uploads/'.str_random(8);
			$filename = $file->getClientOriginalName();
			//$extension =$file->getClientOriginalExtension(); 
			$upload_success = $file->move('public/'.$destinationPath, $filename);

			$photo->file =  $destinationPath.'/'.$filename;
			if( $upload_success ) {
				$photo->save();
			}    
		}	 
	    return Redirect::route('photos.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$photo = Photo::find($id);
	    $photo->delete();
	 
	    return Redirect::route('photos.index');
	}

}