# Contact Form Project

A simple PHP contact form with email functionality using sessions for message handling.

## Features

- Responsive contact form with Tailwind CSS
- Form validation
- Email sending capability
- Success/error message display using PHP sessions
- Clean, modern UI design

## Files

- `index.php` - Main contact form page
- `contact.php` - Form processing and email handling
- `README.md` - This file

## Setup

1. **Basic Setup:**
   ```bash
   # Start PHP development server
   php -S localhost:8000
   ```

2. **Access the form:**
   ```
   http://localhost:8000
   ```

## Email Configuration

### Option 1: PHPMailer (Recommended)
1. Download PHPMailer from https://github.com/PHPMailer/PHPMailer
2. Extract to `PHPMailer/` folder in project directory
3. Update `contact.php` with your Gmail credentials:
   ```php
   $mail->Username = 'your-email@gmail.com';
   $mail->Password = 'your-app-password';
   ```
4. Generate Gmail App Password:
   - Enable 2FA in Google Account
   - Create App Password for this application

### Option 2: Built-in mail() function
- Configure local mail server (sendmail/postfix)
- Update `php.ini` SMTP settings

## Usage

1. Fill out the contact form
2. Submit the form
3. View success/error message
4. Check your email for the message

## Requirements

- PHP 7.0+
- Web server (Apache/Nginx) or PHP built-in server
- Mail server configuration (for email functionality)

## Troubleshooting

- **"Error! Failed to send email"** - Mail server not configured
- **Form not submitting** - Check file paths and permissions
- **No email received** - Verify SMTP settings and credentials
