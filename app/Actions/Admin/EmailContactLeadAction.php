<?php

namespace App\Actions\Admin;

use App\Models\ContactLead;

class EmailContactLeadAction
{
    public function __invoke(array $formData)
    {
        $this->getOrCreateContactLead($formData);
    }

    private function getOrCreateContactLead(array $formData): ContactLead
    {
        return ContactLead::firstOrCreate($formData);
    }
}
