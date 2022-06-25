***

# ezcBaseInit

Provides a method to implement delayed initialization of objects.

With the methods in this class you can implement callbacks to configure singleton classes. In order to do so you will
have to change the getInstance() method of your singleton class to include a call to ezcBaseInit::fetchConfig() as in
the following example:

<code>
<?php
public static function getInstance()
{
    if ( is_null( self::$instance ) )
    {
        self::$instance = new ezcConfigurationmanager();
        ezcBaseInit::fetchConfig( 'ezcInitConfigurationManager', self::$instance );
    }
    return self::$instance;
}
?>
</code>

You will also need to configure which callback class to call. This you do with the ezcBaseInit::setCallback() method.
The following examples sets the callback classname for the configuration identifier
'ezcInitConfigurationManager' to 'cfgConfigurationManager':

<code>
<?php
ezcBaseInit::setCallback( 'ezcInitConfigurationManager', 'cfgConfigurationManager' );
?>
</code>

The class 'cfgConfigurationManager' is required to implement the ezcBaseConfigurationInitializer interface, which
defines only one method:
configureObject(). An example on how to implement such a class could be:

<code>
<?php
class cfgConfigurationManager implements ezcBaseConfigurationInitializer
{
    static public function configureObject( ezcConfigurationManager $cfgManagerObject )
    {
        $cfgManagerObject->init( 'ezcConfigurationIniReader', 'settings', array( 'useComments' => true ) );
    }
}
?>
</code>

Of course the implementation of this callback class is up to the application developer that uses the component (in this
example the Configuration component's class ezcConfigurationManager).

* Full name: `\ezcBaseInit`

## Properties

### callbackMap

Contains the callback where the identifier is the key of the array, and the classname to callback to the value.

```php
private static $callbackMap
```

* This property is **static**.

***

## Methods

### setCallback

Adds the classname $callbackClassname as callback for the identifier $identifier.

```php
public static setCallback(string $identifier, string $callbackClassname): mixed
```

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$identifier` | **string** |  |
| `$callbackClassname` | **string** |  |

***

### fetchConfig

Uses the configured callback belonging to $identifier to configure the $object.

```php
public static fetchConfig(string $identifier, object $object): mixed
```

The method will return the return value of the callback method, or null in case there was no callback set for the
specified $identifier.

* This method is **static**.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$identifier` | **string** |  |
| `$object` | **object** |  |

yxorP::get('REQUEST')
