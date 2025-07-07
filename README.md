# PHP Form Validation

This is a simple PHP-based form that demonstrates how to securely collect and validate user inputs using server-side validation methods in PHP.

## 🚀 Features

- HTML + PHP form structure
- Server-side validation using POST method
- User input sanitization with:
  - `trim()`
  - `stripslashes()`
  - `htmlspecialchars()`
- Collects:
  - Name
  - Email
  - Website
  - Comment
  - Gender (radio button)

## 🛡️ Input Sanitization Function

The core function `test_input()` ensures input is trimmed, stripped of slashes, and made HTML-safe to prevent XSS or injection.

```php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
