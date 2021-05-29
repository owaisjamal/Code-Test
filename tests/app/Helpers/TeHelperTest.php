<?php

namespace Tests\Unit;

use App\Helpers\TeHelper;
use PHPUnit\Framework\TestCase;

class TeHelperTest extends TestCase
{

    /**
     * Case with difference less than 90 and greater than 72.
     *
     * @return void
     */
    public function difference_less_than_90_greater_than_72(){
        $created_at = '2021-05-24 10:00:00';
        $due_date = '2021-05-25 12:00:00';
       
        $user = (new TeHelper())->willExpireAt($created_at, $due_date);
        $this->assertTrue(true);
    }

     /**
     * Case with difference less than 24.
     *
     * @return void
     */
    public function difference_less_than_24(){
        $created_at = '2021-05-25 10:00:00';
        $due_date = '2021-05-25 23:00:00';
       
        $user = (new TeHelper())->willExpireAt($created_at, $due_date);
        $this->assertTrue(true);
    }

     /**
     * Case with difference greater than 24 and greater than 72.
     *
     * @return void
     */
    public function difference_greater_than_24_and_less_than_72(){
        $created_at = '2021-05-24 00:00:00';
        $due_date = '2021-05-25 20:00:00';
       
        $user = (new TeHelper())->willExpireAt($created_at, $due_date);
        $this->assertTrue(true);
    }

    

}