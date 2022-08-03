<?php namespace yxorP\app\lib\data\annotation;

use Exception;
use JetBrains\PhpStorm\Pure;
use Throwable;
use function get_class;
use function gettype;
use function implode;
use function is_object;
use function sprintf;

class annotationException extends Exception
{
    #[Pure] public static function syntaxError($message): annotationException
    {
        return new self('[Syntax Error] ' . $message);
    }

    #[Pure] public static function creationError($message, ?Throwable $previous = null): annotationException
    {
        return new self('[Creation Error] ' . $message, 0, $previous);
    }

    #[Pure] public static function semanticalErrorConstants($identifier, $context = null): annotationException
    {
        return self::semanticalError(sprintf("Couldn't find constant %s%s.", $identifier, $context ? ', ' . $context : ''));
    }

    #[Pure] public static function semanticalError($message): annotationException
    {
        return new self('[Semantical Error] ' . $message);
    }

    #[Pure] public static function attributeTypeError($attributeName, $annotationName, $context, $expected, $actual): annotationException
    {
        return self::typeError(sprintf('Attribute "%s" of @%s declared on %s expects %s, but got %s.', $attributeName, $annotationName, $context, $expected, is_object($actual) ? 'an instance of ' . get_class($actual) : gettype($actual)));
    }

    #[Pure] public static function typeError($message): annotationException
    {
        return new self('[Type Error] ' . $message);
    }

    #[Pure] public static function requiredError($attributeName, $annotationName, $context, $expected): annotationException
    {
        return self::typeError(sprintf('Attribute "%s" of @%s declared on %s expects %s. This value should not be null.', $attributeName, $annotationName, $context, $expected));
    }

    #[Pure] public static function enumeratorError($attributeName, $annotationName, $context, $available, $given): annotationException
    {
        return new self(sprintf('[Enum Error] Attribute "%s" of @%s declared on %s accepts only [%s], but got %s.', $attributeName, $annotationName, $context, implode(', ', $available), is_object($given) ? get_class($given) : $given));
    }

    #[Pure] public static function optimizerPlusSaveComments(): annotationException
    {
        return new self('You have to enable opcache.save_comments=1 or zend_optimizerplus.save_comments=1.');
    }

    #[Pure] public static function optimizerPlusLoadComments(): annotationException
    {
        return new self('You have to enable opcache.load_comments=1 or zend_optimizerplus.load_comments=1.');
    }
}
