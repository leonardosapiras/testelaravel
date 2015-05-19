<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//Model::unguard();

		// $this->call('UserTableSeeder');
            DB::table('articles')->delete();
 
            $articles = array(
                ['titulo' => 'Project 1', 'conteudo' => 'project-1', 'autor' => 'Leonardo',  'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['titulo' => 'Project 2', 'conteudo' => 'project-2', 'autor' => 'Fernanda',  'created_at' => new DateTime, 'updated_at' => new DateTime],
                ['titulo' => 'Project 3', 'conteudo' => 'project-3', 'autor' => 'Leonardo',  'created_at' => new DateTime, 'updated_at' => new DateTime],
            );

            // Uncomment the below to run the seeder
            DB::table('articles')->insert($articles);
	}

}
