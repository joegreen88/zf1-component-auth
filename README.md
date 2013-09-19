zf1-component-auth
==================

The Zend_Auth component from Zend Framework 1.12 abstracted out for use with composer.

### Storage

By default Zend_Auth uses Zend_Session for its persistent storage, but Zend_Session has not been configured as a
dependency of this package. To use Zend_Session be sure to require it alongside this package:

    "require": {
        "hearstuk/zf1-component-auth": "*",
        "hearstuk/zf1-component-session": "*"
    }

You may instead opt to write your own persistent storage class by implementing Zend_Auth_Storage_Interface.

### Adapter

There is no default auth adapter configured for Zend_Auth so it's up to you to configure one. The adapters shipped in
this package each have their own requirements - Zend_Auth_Adapter_DbTable requires Zend_Db_Table, for example. You will
need to include these dependencies with composer to use these adapters.

You may prefer to write your own adapter by implementing Zend_Auth_Adapter_Interface.