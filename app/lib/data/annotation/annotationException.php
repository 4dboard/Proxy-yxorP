<?php namespace yxorP\app\lib\data\annotation;

use Exception;
use Throwable;
use function get_class;
use function gettype;
use function implode;
use function is_object;
use function sprintf;

class annotationException extends Exception
{
    public static function syntaxError($message)
    {
        return new self('[Syntax Error] ' . $message);
    }

    public static function creationError($message, ?Throwable $previous = null)
    {
        return new self('[Creation Error] ' . $message, 0, $previous);
    }

    public static function semanticalErrorConstants($identifier, $context = null)
    {
        return self::semanticalError(sprintf("Couldn't find constant %s%s.", $identifier, $context ? ', ' . $context : ''));
    }

    public static function semanticalError($message)
    {
        return new self('[Semantical Error] ' . $message);
    }

    public static function attributeTypeError($attributeName, $annotationName, $context, $expected, $actual)
    {
        return self::typeError(sprintf('Attribute "%s" of @%s declared on %s expects %s, but got %s.', $attributeName, $annotationName, $context, $expected, is_object($actual) ? 'an instance of ' . get_class($actual) : gettype($actual)));
    }

    public static function typeError($message)
    {
        return new self('[Type Error] ' . $message);
    }

    public static function requiredError($attributeName, $annotationName, $context, $expected)
    {
        return self::typeError(sprintf('Attribute "%s" of @%s declared on %s expects %s. This value should not be null.', $attributeName, $annotationName, $context, $expected));
    }

    public static function enumeratorError($attributeName, $annotationName, $context, $available, $given)
    {
        return new self(sprintf('[Enum Error] Attribute "%s" of @%s declared on %s accepts only [%s], but got %s.', $attributeName, $annotationName, $context, implode(', ', $available), is_object($given) ? get_class($given) : $given));
    }

    public static function optimizerPlusSaveComments()
    {
        return new self('You have to enable opcache.save_comments=1 or zend_optimizerplus.save_comments=1.');
    }

    public static function optimizerPlusLoadComments()
    {
        return new self('You have to enable opcache.load_comments=1 or zend_optimizerplus.load_comments=1.');
    }
}
