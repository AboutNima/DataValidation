<?php
namespace C_J\DataValidation\Rules;
use C_J\DataValidation\AbstractValidationRule;
class In extends AbstractValidationRule{

	/**
	 * Custom error
	 * @var string
	 */
	private static $error='مقدار [?] شده در فیلد ([?]) معتبر نمی باشد';
	protected static function getError()
	{
		return self::$error;
	}

	public static function validationRule($value,$param)
	{
		$param=explode(',',$param);
		if($value!='')
		{
			if(!is_array($value)) $value=[$value];
			foreach($value as $item) $result[]=(bool)in_array($item,$param);
			return in_array(false,$result) ? false : true;
		}
	}
}
