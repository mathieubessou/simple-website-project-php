<?php

	/*
		This file is part of the simple-website-project-php package.

		Copyright (c) Mathieu BESSOU

		MIT License

		For the license information, view the LICENSE file distributed with this source code.
	*/
	

	
	
class BackendLogin
{

	protected function __construct() { }
	protected function __clone() { }

    private const RootPath = __DIR__ . '/../..';
    const WarningMessage = 'The identif and password do not match.';
    const LockedMessage = 'The backend is locked because too many connection attempts have failed.';
    const WarningMessageForInvalidLoginInfo = 'Connection information in configuration file is invalid.';
    private static $backendUsername;
    private static $backendPassword;
    private static $maxAttempt = 3;
    private static $loginInfoIsValid = false;

    public static function login(string $username, string $password)
    {
        if (strtolower($username) == strtolower(self::$backendUsername) && $password == self::$backendPassword) {
            $_SESSION['isLogged'] = true;
            self::deleteAttemptCounter();
            return true;
        }
        else {
            self::incrementAttemptCounter();
            return false;
        }
    }

    public static function logout()
    {
        if (isset($_SESSION['isLogged'])) {
            unset($_SESSION['isLogged']);
        }
    }

    public static function isLogged()
    {
        return isset($_SESSION['isLogged']) ? $_SESSION['isLogged'] : false;
    }

    public static function lockBackend()
    {
        file_put_contents(self::RootPath . '/lockedBackend', self::LockedMessage . "\nDelete this file for unlock.");
    }

    public static function isBackendLocked()
    {
        if (file_exists(self::RootPath . '/lockedBackend')) {
            return true;
        }
        return false;
    }

    public static function getAttemptCounterValue()
    {
        return file_get_contents(self::RootPath . '/Temp/attemptCounter.txt');
    }

    public static function incrementAttemptCounter()
    {
        $acValue = 0;
        if (file_exists(self::RootPath . '/Temp/attemptCounter.txt')) {
            $acValue = intval(self::getAttemptCounterValue());
        }
        $acValue++;
        if ($acValue == self::$maxAttempt) {
            // Verrouillage du Backend
            self::lockBackend();
            self::deleteAttemptCounter();
        }
        else {
            // Sauvegarde de l'incrémentation
            file_put_contents(self::RootPath . '/Temp/attemptCounter.txt', $acValue);
        }
    }

    public static function deleteAttemptCounter()
    {
        unlink(self::RootPath . '/Temp/attemptCounter.txt');
    }

    public static function setBackendLoginInfo(string $username, string $password)
    {
        self::$loginInfoIsValid = self::checkUsername(self::$backendUsername = $username) && 
        self::checkPassword(self::$backendPassword = $password);
    }

    public function loginInfoIsValid()
    {
        return self::$loginInfoIsValid;
    }

    public static function checkUsername(string $username)
    {
        if (strlen($username) > 2) {
            return true;
        }
        return false;
    }

    public static function checkPassword(string $password)
    {
        if (preg_match('#^(?=(?:.*[a-z]){1,})(?=(?:.*[A-Z]){1,})(?=(?:.*\d){1,}).{10,}$#', $password)) {
            return true;
        }
        return false;
    }
}