<?php


return [

    /**
     * These commands will be automatically started when running `php artisan solo`
     */
    'autostart_commands' => [
        EnhancedTailCommand::make('Logs', 'tail -f -n 100 '.storage_path('logs/laravel.log')),
        'Vite' => 'pnpm run dev',
        // 'HTTP' => 'php artisan serve',
        'About' => 'php artisan solo:about',
        'Queue' => 'php artisan horizon:watch --without-tty',
    ],

    /**
     * These commands will appear in their panes, but you will have to elect to start them.
     */
    'lazy_commands' => [
        // ...
    ],
]