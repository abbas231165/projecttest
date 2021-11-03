<?php

namespace App\filter;

use App\validate_email\Validate_email;

class Filter extends Validate_email
{

    private $inputs;

    public function __construct($inputs_email)
    {

        if ($this->validation_email($inputs_email)) {

            $this->inputs = $inputs_email;
        }
    }

    public function result()
    {
        return (isset($this->inputs) && $this->inputs !== '') ? true : 'no validate email inputs';
    }
}