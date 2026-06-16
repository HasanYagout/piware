<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Form Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #00e6cc, #0099ff);
            padding: 20px;
            color: white;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 0 0 8px 8px;
            border: 1px solid #ddd;
            border-top: none;
        }
        .field {
            margin-bottom: 15px;
            padding: 10px;
            background: white;
            border-radius: 5px;
            border-left: 4px solid #0099ff;
        }
        .field strong {
            color: #0099ff;
        }
        .message {
            background: white;
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid #00e6cc;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Contact Form Message</h1>
    </div>

    <div class="content">
        <div class="field">
            <strong>Name:</strong> {{ $name }}
        </div>

        <div class="field">
            <strong>Email:</strong> {{ $email }}
        </div>

        <div class="field">
            <strong>Subject:</strong> {{ $subject }}
        </div>

        <div class="message">
            <strong>Message:</strong><br>
            {{ nl2br(e($messageContent)) }}
        </div>

        <p style="margin-top: 20px; padding-top: 15px; border-top: 1px dashed #ddd; color: #666; font-size: 12px;">
            This message was sent from the contact form on your website at {{ now()->format('F j, Y \a\t g:i A') }}.
        </p>
    </div>
</body>
</html>
