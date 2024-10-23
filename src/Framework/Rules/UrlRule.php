<?php

declare(strict_types=1);

namespace Framework\Rules;

use Framework\Contracts\RuleInterface;

class UrlRule implements RuleInterface
{
    public function validate(array $data, string $field, array $params): bool
    {
        $url = $data[$field];
        // Add scheme if missing
        if (!preg_match('/^https?:\/\//', $url)) {
            $url = 'http://' . $url;
        }
        return (bool) filter_var($url, FILTER_VALIDATE_URL);
    }

    public function getMessage(array $data, string $field, array $params): string
    {
        return "Invalid URL";
    }
}

