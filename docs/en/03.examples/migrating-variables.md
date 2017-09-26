Start with migration:

    php artisan make:migration create_social_variables

Then populate the migration using short/Streams syntax:

    <?php

    use Anomaly\Streams\Platform\Database\Migration\Migration;

    class CreateSocialVariables extends Migration
    {

        protected $namespace = 'variables';

        protected $fields = [
            'facebook'   => [
                'en'   => [
                    'name' => 'Facebook',
                ],
                'type' => 'anomaly.field_type.url',
            ],
            'youtube' => [
                'en'   => [
                    'name' => 'YouTube',
                ],
                'type' => 'anomaly.field_type.url',
            ],
        ];

        protected $stream = [
            'en'        => [
                'name'        => 'Social',
                'description' => 'Site-wide social information.',
            ],
            'namespace' => 'variables',
            'slug'      => 'social',
        ];

        protected $assignments = [
            'facebook',
            'youtube',
        ];
    }

Then run:

    php artisan migrate
