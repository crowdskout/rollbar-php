<?php namespace Rollbar\TestHelpers\Performance;

class EncodedPayload extends \Rollbar\Payload\EncodedPayload
{
    protected static $encodingCount = 0;
    
    public function encode()
    {
        parent::encode();
        self::$encodingCount++;
    }
    
    public static function getEncodingCount()
    {
        return self::$encodingCount;
    }
    
    public static function resetEncodingCount()
    {
        self::$encodingCount = 0;
    }
}
