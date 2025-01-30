```php
function processData(array $data): array {
    // ... some code to process data ...
    if (empty($data)) {
        return []; // Handle empty input
    }

    foreach ($data as $key => $value) {
        // ... more code ...
        if (is_array($value)) {
            $data[$key] = self::processData($value); // Recursive call, potential problem here
        }
    }

    return $data;
}

// Example usage that might trigger the error
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