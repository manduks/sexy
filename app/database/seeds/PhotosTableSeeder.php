<?php

class PhotosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('photos')->delete();

		$photos = array(
			array('title' =>'Pamela photo' , 'description' =>'El video fue dirigido por Stephen Schuster. Comienza con un avión aterrizando y chicas en bikini, bronceándose y nadando en la playa.' ),
			array('title' =>'Tania photo' , 'description' =>'l sencillo debutó el 6 de agosto de 2009, en el número ocho en la lista Swedish Singles Chart.' ),
		);

		// Uncomment the below to run the seeder
		DB::table('photos')->insert($photos);
	}

}