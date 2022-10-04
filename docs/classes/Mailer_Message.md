***

# Mailer_Message

* Full name: `\Mailer_Message`

## Properties

### mail

```php
public $mail
```

***

## Methods

### __construct

```php
public __construct(\PHPMailer\PHPMailer\PHPMailer $mail): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mail` | **\PHPMailer\PHPMailer\PHPMailer** |  |

***

### setCharset

```php
public setCharset(string $charset): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$charset` | **string** |  |

***

### setSubject

```php
public setSubject(string $subject): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subject` | **string** |  |

***

### setFrom

```php
public setFrom(string $email, ?string $name = null): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **string** |  |
| `$name` | **?string** |  |

***

### addReplyTo

```php
public addReplyTo(string $email, string $name = &#039;&#039;): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **string** |  |
| `$name` | **string** |  |

***

### addTo

```php
public addTo(string $email, string $name = &#039;&#039;): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **string** |  |
| `$name` | **string** |  |

***

### addCC

```php
public addCC(string $email, string $name = &#039;&#039;): void
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$email` | **string** |  |
| `$name` | **string** |  |

***

### send

```php
public send(): mixed
```

***

### attach

```php
public attach(mixed $file, string $alias = &#039;&#039;): mixed
```

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **mixed** |  |
| `$alias` | **string** |  |

***


***

