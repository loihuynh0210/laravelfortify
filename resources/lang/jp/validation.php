<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
     */

    'is_password'              => '新パスワードは8文字以上で、確認パスワードと一致するように設定してください。',
    'accepted'                 => 'The :attribute must be accepted.',
    'active_url'               => ':attribute は正しいURLの形式で入力してください。',
    'after'                    => 'The :attribute must be a date after :date.',
    'after_or_equal'           => 'The :attribute must be a date after or equal to :date.',
    'alpha'                    => 'The :attribute may only contain letters.',
    'alpha_dash'               => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num'                => 'The :attribute may only contain letters and numbers.',
    'array'                    => ':attributeを入力してください。',
    'my_array'                 => ':attributeを入力してください。',
    'before'                   => 'The :attribute must be a date before :date.',
    'before_or_equal'          => 'The :attribute must be a date before or equal to :date.',
    'between'                  => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'                  => 'The :attribute field must be true or false.',
    'birthdate_check'          => ':attributeを正しい形式で入力してください。',
    'birthdate_required'       => ':attributeを入力してください。',
    'confirmed'                => 'パスワードと確認用パスワードが一致しません。',
    'date'                     => 'The :attribute is not a valid date.',
    'date_equals'              => 'The :attribute must be a date equal to :date.',
    'date_format'              => ':attributeは正しく入力されていません。',
    'different'                => 'The :attribute and :other must be different.',
    'digits'                   => 'The :attribute must be :digits digits.',
    'digits_between'           => 'The :attribute must be between :min and :max digits.',
    'dimensions'               => 'The :attribute has invalid image dimensions.',
    'distinct'                 => 'The :attribute field has a duplicate value.',
    'email'                    => 'メールアドレスを正しい形式で入力してください。',
    'validate_email'           => 'メールアドレスを正しい形式で入力してください。',
    'exists'                   => ':attributeを選択してください 。',
    'file'                     => 'The :attribute must be a file.',
    'file_exists'              => ':attributeを入力してください。',
    'filled'                   => 'The :attribute field must have a value.',
    'gt'                       => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'string'  => 'The :attribute must be greater than :value characters.',
        'array'   => 'The :attribute must have more than :value items.',
    ],
    'gte'                      => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
        'array'   => 'The :attribute must have :value items or more.',
    ],
    'image'                    => 'The :attribute must be an image.',
    'in'                       => ':attributeを選択してください',
    'in_array'                 => 'The :attribute field does not exist in :other.',
    'integer'                  => ':attributeは半角数字のみで入力してください',
    'js_integer'               => ':attributeは半角数字のみで入力してください',
    'ip'                       => 'The :attribute must be a valid IP address.',
    'ipv4'                     => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                     => 'The :attribute must be a valid IPv6 address.',
    'json'                     => 'The :attribute must be a valid JSON string.',
    'kanji'                    => ':attributeは漢字で入力してください。',
    'lt'                       => [
        'numeric' => 'The :attribute must be less than :value.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'string'  => 'The :attribute must be less than :value characters.',
        'array'   => 'The :attribute must have less than :value items.',
    ],
    'lte'                      => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
        'array'   => 'The :attribute must not have more than :value items.',
    ],
    'max'                      => [
        'numeric' => ':attributeを半角で入力してください',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => ':attributeは:max文字以下で入力してください。',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                    => 'The :attribute must be a file of type: :values.',
    'mimetypes'                => 'The :attribute must be a file of type: :values.',
    'min'                      => [
        'numeric' => ':attributeは少なくとも以下でなければなりません:min。',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => ':attributeは:min文字以上で入力してください。',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'                   => 'The selected :attribute is invalid.',
    'not_regex'                => 'The :attribute format is invalid.',
    'numeric'                  => ':attributeは整数で入力してください。',
    'numeric_halfsize'         => ':attributeは半角数字のみで入力してください。',
    'halfsize'                 => ':attributeを半角で入力してください',
    'integer'                  => ':attributeを正しい形式で入力してください。',
    'zipcode_check'            => ':attributeを正しい形式で入力してください。',
    'phone_check'              => ':attributeを正しい形式で入力してください。',

    'present'                  => 'The :attribute field must be present.',
    'regex'                    => ':attributeは半角数字のみで入力してください',
    'required'                 => ':attributeを入力してください。',
    'mb_required'              => ':attributeを入力してください。',
    'zipcode_required'         => ':attributeを入力してください。',
    'required_if'              => ':attributeを選択してください。',
    'required_if1'             => ':attributeを入力してください。',
    //The :attribute field is required when :other is :value.
    'required_unless'          => 'The :attribute field is required unless :other is in :values.',
    'required_with'            => ':attributeを選択してください',
    'required_with_all'        => 'The :attribute field is required when :values are present.',
    'required_without'         => 'The :attribute field is required when :values is not present.',
    'required_without_all'     => 'The :attribute field is required when none of :values are present.',
    'same'                     => 'The :attribute and :other must match.',
    'size'                     => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'starts_with'              => 'The :attribute must start with one of the following: :values',
    'string'                   => 'The :attribute must be a string.',
    'timezone'                 => 'The :attribute must be a valid zone.',
    'unique'                   => 'この:attributeは既に使用されています。',
    'uploaded'                 => 'The :attribute failed to upload.',
    'url'                      => ':attributeは正しいURLの形式で入力してください。',
    'check_url'                => ':attributeは正しいURLの形式で入力してください。',
    'check_link'               => ':attributeは正しいURLの形式で入力してください。',
    'check_link_query'         => ':attributeは正しいURLの形式で入力してください。',
    'check_uri'                => ':attributeは正しいURIの形式で入力してください。',
    'check_slug'               => ':attributeは正しいURIの形式で入力してください。',
    'uuid'                     => 'The :attribute must be a valid UUID.',
    'katakana'                 => ':attributeはカタカナで入力してください。',
    'fullkana'                 => ':attributeはカタカナで入力してください。',
    'fullkana2'                => ':attributeはカタカナで入力してください。',
    'checkdate'                => '掲載期間の終了日は開始日より前に設定できません。',
    'array_required'           => ':attributeを入力してください。',
    'check_alpha'              => ':attributeをアルファベットで入力してください。',
    'check_alpha_num'          => ':attributeをアルファベットで入力してください。',
    'fullsize'                 => ':attributeを日本語で入力してください。',
    'japanese'                 => ':attributeを日本語で入力してください。',
    'max_str'                  => ':attributeは:max文字以下で入力してください。',
    'less'                     => ':attributeの上限は下限より小さく設定できません。',
    'less_time'                => ':attributeの上限は下限より小さく設定できません。',
    'phone_required'           => ':attributeを入力してください。',
    'month'                    => ':attributeを正しい形式で入力してください。',
    'year'                     => ':attributeは正しい形式で入力してください。',
    'hour'                     => ':attribute is in-valid hour',
    'minute'                   => ':attribute is in-valid minute',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
     */

    'custom'                   => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'data.end' => [
            'compare_date'   => '終了日が開始日より前の日付になっています。',
        ],
        'data.end_time' => [
            'not_empty_date' => ':attributeの日付を入力してください。',
        ],
        'data.release' => [
            'compare_date'   => '終了日が開始日より前の日付になっています。',
        ],
        'data.release_time' => [
            'not_empty_date' => ':attributeの日付を入力してください。',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
     */

    'attributes'               => [
        'email'        => 'メールアドレス',
        'password'     => 'パスワード',
    ],

];
