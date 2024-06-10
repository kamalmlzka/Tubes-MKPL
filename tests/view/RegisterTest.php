<?php

use CodeIgniter\Test\FeatureTestCase;

class RegisterTest extends FeatureTestCase
{
    public function testRegisterPage()
    {
        $result = $this->call('GET', 'register');
        $this->assertStringContainsString('<title>Index</title>', $result);
        $this->assertStringContainsString('<h2 class="fw-bold mb-5 underlined-heading">Join now</h2>', $result);
    }

    public function testAddAccount()
    {
        $data = [
            'f_name' => 'John',
            'l_name' => 'Doe',
            'nim' => '123456',
            'email' => 'john.doe@example.com',
            'password' => 'password'
        ];

        $this->withRequest($data)
             ->post('addaccount/add');

        $this->assertRedirect('login');
    }
}
