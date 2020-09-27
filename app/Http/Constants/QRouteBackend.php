<?php
namespace App\Http\Constants;

class QRouteBackend
{
    // namespace backend controller
    const namespaceBackend = '\\App\\Http\\Controllers\\Backend\\';

    // AuthController
    const AUTH_LOGIN = 'backend.auth.login';
    const AUTH_REGISTER = 'backend.auth.register';
    const AUTH_FORGOT_PASSWORD = 'backend.auth.forgot_password';
    const AUTH_LOGOUT = 'backend.auth.logout';
    const AUTH_AUTHENTICATION = 'backend.auth.authentication';

    // DashboardController
    const DASHBOARD_INDEX = 'backend.dashboard.index';
}
