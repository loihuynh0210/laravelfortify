<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Validator as ValidatorCustom;

class CustomRequest extends FormRequest
{
    public function __construct()
    {
        parent::__construct();

        ValidatorCustom::extend('halfsize', function ($attribute, $value, $parameters) {
            if ($value && mb_strlen($value, 'utf8') != strlen($value)) {
                return false;
            }
            return true;
        });

        ValidatorCustom::extend('max_str', function ($attribute, $value, $parameters, $validator) {
            $validator->addReplacer('max_str', function ($message, $attribute, $rule, $parameters) {
                return str_replace([':max'], $parameters, $message);
            });
            $value = strip_tags($value);
            $value = str_replace(["\r"], '', $value);
            $value = trim($value);
            return (mb_strlen($value) <= intval($parameters[0])) ? true : false;
        });

        ValidatorCustom::extend('not_empty_date', function ($attribute, $value, $parameters, $validator) {
            if (empty($value)) {
                return true;
            }

            if ($parameters && request($parameters[0])) {
                return true;
            }

            return false;
        });

        ValidatorCustom::extend('mb_required', function ($attribute, $value, $parameters, $validator) {
            $value = strip_tags($value);
            $value = str_replace(["&nbsp;", "\n"], '', $value);
            $value = trim($value, " 　");
            if ($value) {
                return true;
            }
            return false;
        });
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
