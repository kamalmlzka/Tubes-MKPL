<?php
use PHPUnit\Framework\TestCase;

class ProfileTest extends TestCase
{
    public function testProfilePage()
    {
        // Set session data
        $_SESSION['user_id'] = '1';
        $_SESSION['user_fname'] = 'John';
        $_SESSION['user_lname'] = 'Doe';
        $_SESSION['user_nim'] = '1302210032';
        $_SESSION['user_email'] = 'john.doe@example.com';
        $_SESSION['user_profile'] = 'profile.jpg';

        // Include profile page file
        ob_start(); // Capture output buffer
        include './app/Views/profile.php';
        ob_end_clean(); // Clean output buffer

        // Assertions for profile data
        $this->assertStringContainsString('John', $GLOBALS['user_fname']);
        $this->assertStringContainsString('Doe', $GLOBALS['user_lname']);
        $this->assertStringContainsString('1302210032', $GLOBALS['user_nim']);
        $this->assertStringContainsString('john.doe@example.com', $GLOBALS['user_email']);
        $this->assertStringContainsString('profile.jpg', $GLOBALS['user_profile']);
    }
}
?>
