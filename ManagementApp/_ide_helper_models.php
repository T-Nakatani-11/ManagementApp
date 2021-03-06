<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Matter
 *
 * @property int $id
 * @property string $title
 * @property string $url
 * @property string $content
 * @property string|null $attention
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\MatterFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Matter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Matter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Matter query()
 * @method static \Illuminate\Database\Eloquent\Builder|Matter whereAttention($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matter whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matter whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matter whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Matter whereUrl($value)
 */
	class Matter extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

