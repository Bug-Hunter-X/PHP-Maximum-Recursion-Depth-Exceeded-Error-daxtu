```php
function processData(array $data, int $maxDepth = 100, int $currentDepth = 0): array {
    if ($currentDepth >= $maxDepth) {
        return []; // Return empty if maximum depth is reached
    }

    if (empty($data)) {
        return [];
    }

    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $data[$key] = processData($value, $maxDepth, $currentDepth + 1);
        }
    }

    return $data;
}

// Example usage:
$nestedArray = [
    'a' => 1,
    'b' => [
        'c' => 2,
        'd' => [
            'e' => 3,
            'f' => [
                'g' => 4,
                'h' => ['i' => 5]
            ]
        ]
    ]
];

$result = processData($nestedArray);
print_r($result);
```