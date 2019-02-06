<?php

return [

    'request' => [

        /*
         * Enable or disable request logger
         */

        'enabled' => true,

        /*
         * Array of handlers used for request logger
         */

        'handlers' => [
            Brackets\AdvancedLogger\Handlers\RequestLoggerHandler::class
        ],

        /*
         * Filename used for advanced logger
         */

        'file' => storage_path('logs/request.log'),

        /*
         * Log level to log requests
         */

        'level' => 'info',

        /*
         * Format of the log message, allowed values are:
         *
         * full - 'HTTP/{http-version} {status} | {remote-addr} | {user} | {method} {url} {query} | {response-time} ms | {user-agent} | {referer}',
         * combined - '{remote-addr} - {remote-user} [{date}] "{method} {url} HTTP/{http-version}" {status} {content-length} "{referer}" "{user-agent}"',
         * common - '{remote-addr} - {remote-user} [{date}] "{method} {url} HTTP/{http-version}" {status} {content-length}',
         * dev - '{method} {url} {status} {response-time} ms - {content-length}',
         * short - '{remote-addr} {remote-user} {method} {url} HTTP/{http-version} {status} {content-length} - {response-time} ms',
         * tiny - '{method} {url} {status} {content-length} - {response-time} ms'
         */

        'format' => 'full',

        /*
         * Url paths excluded from request logger
         */

        'excluded-paths' => [

        ],

        /*
         * Queue used to process request logger
         */
        
        'queue' => null,
    ],
];