<?php
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function testValidLogin()
    {
        $nim = '1302210032';
        $password = 'kamalmlzka123';

        // Simulate login process here
        $loggedIn = $this->login($nim, $password);

        $this->assertTrue($loggedIn);
    }

    // Simulate login function
    private function login($nim, $password)
    {
        // Your login logic goes here
        // For simplicity, let's assume any non-empty nim and password is considered valid
        if (!empty($nim) && !empty($password)) {
            return true;
        } else {
            return false;
        }
    }
}
?>
