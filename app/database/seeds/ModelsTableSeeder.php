<?php

class ModelsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('models')->delete();

		$models = array(
			array('name' =>'Pamela' ,'age' => '20', 'description' =>'El video fue dirigido por Stephen Schuster. Comienza con un avión aterrizando y chicas en bikini, bronceándose y nadando en la playa.' ),
			array('name' =>'Tania' ,'age' => '24', 'description' =>'l sencillo debutó el 6 de agosto de 2009, en el número ocho en la lista Swedish Singles Chart.' ),
		);

		// Uncomment the below to run the seeder
		DB::table('models')->insert($models);
	}

}