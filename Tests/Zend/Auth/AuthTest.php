<?php
namespace Tests\Zend\Auth;

class AuthTest extends \Tests\TestCase
{
    protected $classes = array(
        '\Zend_Auth',
        '\Zend_Auth_Exception',
        '\Zend_Auth_Result',
        '\Zend_Auth_Adapter_DbTable',
        '\Zend_Auth_Adapter_Digest',
        '\Zend_Auth_Adapter_Exception',
        '\Zend_Auth_Adapter_Http',
        '\Zend_Auth_Adapter_InfoCard',
        '\Zend_Auth_Adapter_Interface',
        '\Zend_Auth_Adapter_Ldap',
        '\Zend_Auth_Adapter_OpenId',
        '\Zend_Auth_Adapter_HTTP_Resolver_Exception',
        '\Zend_Auth_Adapter_HTTP_Resolver_File',
        '\Zend_Auth_Adapter_HTTP_Resolver_Interface',
        '\Zend_Auth_Storage_Exception',
        '\Zend_Auth_Storage_Interface',
        '\Zend_Auth_Storage_NonPersistent',
        '\Zend_Auth_Storage_Session',
    );

    /**
     * Ensure that the composer autoloader is finding the classes correctly.
     */
    public function testCanFindClasses()
    {
        foreach ($this->classes as $class) {
            $this->assertTrue(class_exists($class) || interface_exists($class), "$class not found");
        }
    }
}