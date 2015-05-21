<?php

namespace Baileylo\Ogp\Renderers;

use Baileylo\Ogp\Objects\Profile;
use Baileylo\Ogp\Property;

class ProfileRenderer
{
    public function render(Profile $profile, $type = 'profile')
    {
        return array_filter([
            $type === 'profile' ? new Property('og:type', 'profile') : new Property('', null),
            new Property("{$type}:first_name", $profile->getFirstName()),
            new Property("{$type}:last_name", $profile->getLastName()),
            new Property("{$type}:username", $profile->getUsername()),
            new Property("{$type}:gender", $profile->getGender()),
        ], function (Property $property) {
            return !$property->isEmpty();
        });
    }
}
