<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback Confirmation</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 40px;">
    <div style="max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); padding: 30px;">
        <h2 style="color: #2c3e50;">Thank you for your feedback!</h2>
        <p style="font-size: 16px; color: #34495e;">We've received your feedback for:</p>

        <h3 style="color: #2980b9; margin-top: 10px;">{{ $event->name }}</h3>

        <table style="margin-top: 20px; font-size: 15px;">
            <tr>
                <td style="padding-right: 10px;"><strong>🗓 Date & Time:</strong></td>
                <td>{{ \Carbon\Carbon::parse($event->start_date)->format('d M Y H:i') }}</td>
            </tr>
            <tr>
                <td><strong>📍 Location:</strong></td>
                <td>{{ $event->venue->name ?? 'Online' }}</td>
            </tr>
        </table>

        <hr style="margin: 30px 0;">

        <h4 style="color: #2c3e50;">Your message:</h4>
        <p style="font-size: 15px; color: #2c3e50;">{{ $feedback }}</p>

        <p style="margin-top: 30px; font-size: 16px; color: #2c3e50;">We appreciate your input and will review it carefully. 🙏</p>

        <hr style="margin-top: 40px;">
        <p style="font-size: 13px; color: #999;">If you have any questions, feel free to reply to this email.</p>
    </div>
</body>
</html>
