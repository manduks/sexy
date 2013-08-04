<?php

class VideosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('videos')->delete();

		$videos = array(
			array('title' =>'Pamela video' , 'description' =>'El video fue dirigido por Stephen Schuster. Comienza con un avión aterrizando y chicas en bikini, bronceándose y nadando en la playa.' ),
		);

		// Uncomment the below to run the seeder
		DB::table('videos')->insert($videos);
	}

}