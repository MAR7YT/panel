<?php

namespace Pterodactyl\Http\Requests\Admin\Settings;

use Illuminate\Validation\Rule;
use Pterodactyl\Traits\Helpers\AvailableLanguages;
use Pterodactyl\Http\Requests\Admin\AdminFormRequest;

class OAuthSettingsFormRequest extends AdminFormRequest
{
    use AvailableLanguages;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'pterodactyl:auth:oauth:enabled' => 'required|in:true,false',
            'pterodactyl:auth:oauth:required' => 'required|integer|in:0,1,2,3',
        ];
    }

    /**
     * @return array
     */
    public function attributes()
    {
        return [
            'pterodactyl:auth:oauth:enabled' => 'OAuth Enabled',
            'pterodactyl:auth:oauth:required' => 'Require OAuth Authentication',
        ];
    }
}
