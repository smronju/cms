<?php

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->truncate();

        DB::table('pages')->insert([
        	[
        		'title' => 'About',
        		'uri' => 'about',
        		'content' => 'This is the about page'
        	],
        	[
        		'title' => 'Contact',
        		'uri' => 'contact',
        		'content' => 'This is the contact page'
        	],
        	[
        		'title' => 'FAQ',
        		'uri' => 'faq',
        		'content' => 'This is the faq page'
        	],
        	[
        		'title' => 'Media',
        		'uri' => 'media',
        		'content' => 'This is the media page'
        	]
        ]);
    }
}
