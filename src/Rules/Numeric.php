<?php
namespace C_J\DataValidation\Rules;
use C_J\DataValidation\AbstractValidationRule;
class Numeric extends AbstractValidationRule{

	/**
	 * Custom error
	 * @var string
	 */
	private static $error='مقدار وارد شده در فیلد ([?]) باید عدد باشد';
	protected static function getError()
	{
		return self::$error;
	}

	public static function validationRule($value,$param)
	{
		if($value!='')
		{
			if(!is_string($value) && !is_numeric($value)) return false;
			return (bool)preg_match('/^[0-9]+$/u',$value)>0;
		}
	}
}