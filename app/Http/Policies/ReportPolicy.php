<?php

namespace FluentCrm\App\Http\Policies;

use FluentCrm\Includes\Core\Policy;
use FluentCrm\Includes\Request\Request;

class ReportPolicy extends Policy
{
    /**
     * Check user permission for any method
     * @param  \FluentCrm\Includes\Request\Request $request
     * @return Boolean
     */
    public function verifyRequest(Request $request)
    {
        $permission = apply_filters('fluentcrm_permission', 'manage_options', 'report', 'all');

        if (!$permission) {
            return false;
        }

        return current_user_can($permission);
    }
}
