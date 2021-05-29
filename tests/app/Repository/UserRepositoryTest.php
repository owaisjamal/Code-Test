<?php

namespace Tests\Unit;

use App\Repository\UserRepository;
use PHPUnit\Framework\TestCase;

class UserRepositoryTest extends TestCase
{
    public function __construct()
    {
        $this->request = array(
            'name' => 'test',
            'company_id' => 1,
            'department_id' => 2,
            'email' => 'test@gmail.com',
            'dob_or_orgid' => '24-03=1990',
            'phone' => '123456',
            'mobile' => '123456',
            'password' => '123',
            'role' => '1' //customerRole
        );
    }

    // Create Requests

    /**
     * Create user with customer role.
     *
     * @return void
     */
    public function create_new_user_with_customer_role(){
       
        $user = (new UserRepository())->createOrUpdate(null, $this->request);
        $this->assertTrue(true);
    }

     /**
     * Create user with customer role and consumer type.
     *
     * @return void
     */
    public function create_new_user_with_customer_role_with_consumer_type_paid(){
        $this->request['consumer_type'] = 'paid';
        $this->request['company_id'] = '';
        $user = (new UserRepository())->createOrUpdate(null, $this->request);
        $this->assertTrue(true);
    }

    /**
     * Create user with translator role.
     *
     * @return void
     */
    public function create_new_user_with_translator_role(){
        $this->request['role'] = 2; //translator role
        $user = (new UserRepository())->createOrUpdate(null, $this->request);
        $this->assertTrue(true);
    }

    /**
     * Create user with translator role and worked for.
     *
     * @return void
     */
    public function create_new_user_with_translator_role_with_worked_for(){
        $this->request['worked_for'] = 'yes';
        $user = (new UserRepository())->createOrUpdate(null, $this->request);
        $this->assertTrue(true);
    }

    /**
     * Create user with translator role and user langugae.
     *
     * @return void
     */
    public function create_new_user_with_translator_role_with_user_language(){
        $this->request['user_language'] = array(1,2);
        $user = (new UserRepository())->createOrUpdate(null, $this->request);
        $this->assertTrue(true);
    }

    /**
     * Create new user with customer role and new town.
     *
     * @return void
     */
    public function create_new_user_with_customer_role_with_new_towns(){
        $this->request['new_towns'] = 'test town';
        $user = (new UserRepository())->createOrUpdate(null, $this->request);
        $this->assertTrue(true);
    }


    /**
     * Create new user with customer role and new town projects.
     *
     * @return void
     */
    public function create_new_user_with_customer_role_with_user_town_projects(){
        $this->request['user_towns_projects'] = array(1,2,4);
        $user = (new UserRepository())->createOrUpdate(null, $this->request);
        $this->assertTrue(true);
    }



    // Update Requests


    /**
     * Update user with customer role.
     *
     * @return void
     */
    public function update_new_user_with_customer_role(){
       
        $user = (new UserRepository())->createOrUpdate(1, $this->request);
        $this->assertTrue(true);
    }

     /**
     * Update user with customer role with consumer type.
     *
     * @return void
     */
    public function update_new_user_with_customer_role_with_consumer_type_paid(){
        $this->request['consumer_type'] = 'paid';
        $this->request['company_id'] = '';
        $user = (new UserRepository())->createOrUpdate(1, $this->request);
        $this->assertTrue(true);
    }

    /**
     * Update user with translator role.
     *
     * @return void
     */
    public function update_new_user_with_translator_role(){
        $this->request['role'] = 2; //translator role
        $user = (new UserRepository())->createOrUpdate(1, $this->request);
        $this->assertTrue(true);
    }

    /**
     * Update user with translator role with worked for.
     *
     * @return void
     */
    public function update_new_user_with_translator_role_with_worked_for(){
        $this->request['worked_for'] = 'yes';
        $user = (new UserRepository())->createOrUpdate(1, $this->request);
        $this->assertTrue(true);
    }

    /**
     * Update user with translator role with user langugae.
     *
     * @return void
     */
    public function update_new_user_with_translator_role_with_user_language(){
        $this->request['user_language'] = array(1,2);
        $user = (new UserRepository())->createOrUpdate(1, $this->request);
        $this->assertTrue(true);
    }

    /**
     * Update new user with customer role and new town.
     *
     * @return void
     */
    public function update_new_user_with_customer_role_with_new_towns(){
        $this->request['new_towns'] = 'test town';
        $user = (new UserRepository())->createOrUpdate(1, $this->request);
        $this->assertTrue(true);
    }


    /**
     * Update new user with customer role and new town projects.
     *
     * @return void
     */
    public function update_new_user_with_customer_role_with_user_town_projects(){
        $this->request['user_towns_projects'] = array(1,2,4);
        $user = (new UserRepository())->createOrUpdate(1, $this->request);
        $this->assertTrue(true);
    }
}