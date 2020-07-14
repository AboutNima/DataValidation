<?php
namespace C_J\DataValidation\Rules;
use C_J\DataValidation\AbstractValidationRule;
class Date extends AbstractValidationRule{

	/**
	 * Custom error
	 * @var string
	 */
	private static $error='تاریخ وارد شده در فیلد ([?]) معتبر نمی باشد';
	protected static function getError()
	{
		return self::$error;
	}

	public static function validationRule($value,$param)
	{
		if($value!='') return (bool)preg_match(
			"/^[1-4]\d{3}\/((0[1-6]\/((3[0-1])|([1-2][0-9])|(0[1-9])))|((1[0-2]|(0[7-9]))\/(30|([1-2][0-9])|(0[1-9]))))$/",
			$value
		);
	}
}
