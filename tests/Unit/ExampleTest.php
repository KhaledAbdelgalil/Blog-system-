<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
//added for transactions and migrations
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


use App\Post;
class ExampleTest extends TestCase
{

    use DatabaseTransactions;//to remove test cases after
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
    	/*Test1*/
       //Given that I have two records in the database that are posts.

    	//and each one of is posted a month apart.
    	$first=factory(Post::class)->create();
    	$second=factory(Post::class)->create([
    	'created_at'=>\Carbon\Carbon::now()->subMonth()
    	]);
    	
    	//when I fetch the archives.
    	$posts=Post::archives();
    	//Then the response should be in the proper format
        //dd($posts);
    	//$this->assertCount(3,$posts);
        $this->assertEquals([[
            'year'=>$first->created_at->format('Y'),
            'month'=>$first->created_at->format('F'),
            'published'=>1

        ],
        [
            'year'=>$second->created_at->format('Y'),
            'month'=>$second->created_at->format('F'),
            'published'=>1

        ]

    ],$posts);
    }
}
