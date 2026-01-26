# Contact Form Project

A simple PHP contact form with email functionality.

## Features

- Responsive design with Tailwind CSS
- Form validation
- Email sending
- Session-based messaging

## Files

- `index.php` - Contact form
- `contact.php` - Form handler
- `README.md` - Documentation

## Setup

```bash
php -S localhost:8000
```

Access: http://localhost:8000

## Email Configuration

**Mailpit (Development):**
1. Start Mailpit:
   ```bash
   docker-compose -f MailpitDocker/docker-compose.yml up -d
   ```
2. Configure PHP to use Mailpit SMTP:
   - Host: localhost
   - Port: 1025
   - No authentication required
3. View emails: http://localhost:8025

**PHPMailer (Production):**
1. Download: https://github.com/PHPMailer/PHPMailer
2. Extract to `PHPMailer/` folder
3. Update credentials in `contact.php`
4. Use Gmail App Password (requires 2FA)

## Requirements

- PHP 7.0+
- Mail server or PHPMailer

## Troubleshooting

- Email not sending → Check SMTP configuration
- Form errors → Verify file permissions
- No email received → Check credentials
