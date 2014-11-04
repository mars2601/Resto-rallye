<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('RallyeTableSeeder');
        $this->command->info('Rallye tables seeded!');
		$this->call('QuoteTableSeeder');
        $this->command->info('Quote tables seeded!');
        $this->call('AlbumTableSeeder');
        $this->command->info('Album table seeded!');
        $this->call('PhotoTableSeeder');
        $this->command->info('Photo table seeded!');
	}

}
