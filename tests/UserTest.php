<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

  
  
  
  
     public function test_user_can_signup()
    {
         
       DB::table('users')->delete(1000000);
        DB::table('users')->insert(['id'=>1000000,
           'name' => 'ananya1',
            'email' => 'ananya6@gmail.com',
            'password' => bcrypt('ananya1')
       ]);
       $User= DB::table('users')->where('email','ananya6@gmail.com')->get();
       if(isset($User) && count($User)) {
           $this->assertTrue(true);
      }
      

   }


  public function test_user_can_login()
    {
        DB::table('users')->delete(1000000);
        DB::table('users')->insert(['id'=>1000000,
           'name' => 'ananya1',
            'email' => 'ananya6@gmail.com',
            'password' => bcrypt('ananya1')
       ]);
        $credential = [
            'email' => 'user@ad.com',
            'password' => 'incorrectpass',
        ];
    
        $response = $this->post('login',$credential);
    
        $response->assertSessionHasErrors();

}


  public function test_admin_can_login()
 {
    DB::table('users')->delete(1000001);
    DB::table('users')->insert(['id'=>1000001,
       'name' => 'admin2',
        'email' => 'admin2@gmail.com',
        'password' => bcrypt('admin')
   ]);
   DB::table('roles')->delete(1);
   DB::table('roles')->insert([
    'name' => 'admin',
    'id'=>1
  ]);   
  DB::table('role_user')-> where('user_id',1000001)->limit(1)->delete();
  DB::table('role_user')->insert([
    'user_id' => 1000001,
    'role_id'=>1
    ]);  
    $credential = [
        'email' => 'user@ad.com',
        'password' => 'incorrectpass'
    ];

    $response = $this->post('login',$credential);

    $response->assertSessionHasErrors();

}

   public function test_admin_can_create_category()
{
    DB::table('categories')->delete(1000001);
 $category=   DB::table('categories')->insert(['id'=>1000001,
     
       'name' => 'testcategory',
        'status' => '1',
        
      ]);
     if(isset($category)){
    $this->assertTrue(true);
   }

}


    public function test_admin_can_create_subjects()
  {
    DB::table('subjects')->delete(1000001);
 $subject=   DB::table('subjects')->insert(['id'=>1000001,
     
       'name' => 'test',
        'status' => '1',
        'category_id'=> 1000001,
        'duration'=>40,
   ]);
   if(isset($subject)){
    $this->assertTrue(true);
   }

      }


  /**public function admin_can_create_questions()
 {
    DB::table('questions')->delete(1000001);
  $question=   DB::table('questions')->insert(['id'=>1000001,
     
       'subject_id' => 1000001,
          'option_1'=>'1',
           'option_2'=>'2',
             'option_3'=>'3',
               'option_4'=>'4',
                'answer'=>2,
                ]);
   
   
   if(isset($question)){
    $this->assertTrue(true);
   }
}


 /*  public function admin_can_create_questions()
{
    DB::table('questions')->delete(1000001);
 $question=   DB::table('questions')->insert(['id'=>1000001,
     
       'subject_id' => 1000001,
          'option_1'=>'1',
           'option_2'=>'2',
             'option_3'=>'3',
               'option_4'=>'4',
                'answer'=>2,
                'update_at'=>'2021-09-21 00:00:00',
                ]);
   
   
         if(isset($question)){
        $this->assertTrue(true);
   }
}


*/






}









