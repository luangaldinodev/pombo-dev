<img src="src/images/banner.png" alt="Texto Alternativo" style="display: block; margin: 0 auto; width: 100%; height: auto;">

---

# PHP Email Service with PHPMailer - Simple and Reliable Email Sending Solution

This project provides a robust PHP-based email sending service built on PHPMailer. 
It offers a streamlined way to send professionally formatted HTML emails with customizable templates and SMTP support.

The service features a modern, responsive email template system and secure SMTP configuration. 
It handles email encoding, supports multiple languages, and provides comprehensive error handling. 
The implementation uses PHPMailer's latest features for reliable email delivery and includes a customizable HTML template with a clean, professional design.

## Repository Structure
```
app/
├── functions/                     # Core functionality directory
│   ├── sendEmail.php             # Main email sending logic
│   └── templates_email/          # Email template directory
│       └── template_01.html      # Responsive HTML email template
├── composer.json                 # Composer dependency configuration
└── vendor/                       # Third-party dependencies
    └── phpmailer/               # PHPMailer library files
```

## Usage Instructions
### Prerequisites
- PHP 5.5.0 or higher
- Required PHP extensions:
  - ctype
  - filter
  - hash
  - openssl (recommended for secure SMTP)
  - mbstring (recommended for encoding support)
- Composer for dependency management
- SMTP server credentials

### Installation

1. Clone the repository:
```bash
git clone <repository-url>
cd <project-directory>
```

2. Install dependencies using Composer:
```bash
cd app
composer install
```

3. Configure SMTP credentials:
Create a `keys.php` file in the `app/functions/` directory with your SMTP credentials:
```php
<?php
$emailSend = 'your-email@domain.com';
$passwordSend = 'your-smtp-password';
```

### Quick Start

1. Basic usage example:
```php
<?php
require 'vendor/autoload.php';
require 'functions/sendEmail.php';

// Email parameters are configured in sendEmail.php
// Modify the recipient and content as needed
```

### More Detailed Examples

1. Sending an email with custom content:
```php
<?php
// Modify these variables in sendEmail.php
$nome = 'Recipient Name';
$bodyMensage = 'Your custom message here';

// The template will automatically use these variables
```

2. Customizing the email template:
- Modify `templates_email/template_01.html`
- Use placeholders: `[nome]` for name and `[mensagem]` for message content
- The template supports responsive design and custom styling

### Troubleshooting

Common issues and solutions:

1. SMTP Connection Errors
   - Error: "SMTP connect() failed"
   - Solution: 
     - Verify SMTP credentials in keys.php
     - Check if SMTP port (587) is not blocked
     - Ensure proper SSL/TLS configuration

2. Template Loading Issues
   - Error: "Failed to load template"
   - Solution:
     - Verify file permissions
     - Check file path relative to sendEmail.php
     - Ensure template file exists

3. Character Encoding Problems
   - Error: "Invalid characters in email"
   - Solution:
     - UTF-8 encoding is set by default
     - Verify content encoding matches
     - Check for BOM markers in template files

## Data Flow
The service processes email requests by loading templates, replacing placeholders with dynamic content, and sending via SMTP.

```ascii
[Input Data] -> [Template Loading] -> [Content Replacement] -> [SMTP Configuration] -> [Email Delivery]
     |               |                        |                         |                    |
     v               v                        v                         v                    v
User Input -> Template HTML -> Personalized Content -> SMTP Connection -> Delivery Status
```

Key component interactions:
1. Input data is validated and sanitized
2. HTML template is loaded from the filesystem
3. Template placeholders are replaced with dynamic content
4. SMTP connection is established with authentication
5. Email is encoded and sent through the SMTP server
6. Delivery status and errors are handled and reported
7. All operations are logged for debugging purposes