<!DOCTYPE html>
<html>
<head>
    <title>Appointment Confirmation - WMSU REO</title>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f8fafc; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 40px auto; background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 15px rgba(0,0,0,0.1); border: 1px solid #e2e8f0; }
        .header { background-color: #1e293b; padding: 30px; text-align: center; }
        .header h1 { color: #ffffff; margin: 0; font-size: 20px; }
        .content { padding: 40px; color: #334155; }
        .card { background-color: #f8fafc; border-left: 4px solid #8B0000; padding: 20px; border-radius: 0 8px 8px 0; margin: 20px 0; }
        .label { font-size: 11px; text-transform: uppercase; color: #64748b; font-weight: bold; letter-spacing: 0.5px; }
        .value { font-size: 16px; font-weight: bold; color: #0f172a; margin: 5px 0 15px 0; }
        .footer { padding: 20px; text-align: center; font-size: 12px; color: #94a3b8; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Appointment Scheduled</h1>
        </div>
        <div class="content">
            <p>Dear Researcher,</p>
            <p>Your appointment with the Research Ethics Office has been confirmed. Please see the details below:</p>
            
            <div class="card">
                <div class="label">Topic / Research Title</div>
                <div class="value">{{ $details['title'] ?? 'Research Consultation' }}</div>
                
                <div class="label">Date & Time</div>
                <div class="value">{{ $details['date'] }} at {{ $details['time'] }}</div>
                
                <div class="label">Location / Instructions</div>
                <div class="value">{{ $details['notes'] ?? 'REO Office, WMSU Campus' }}</div>
            </div>

            <p>Please arrive 10 minutes early and bring any necessary hard copies of your documents.</p>
        </div>
        <div class="footer">
            WMSU Research Ethics Office<br>
            Automated System Message
        </div>
    </div>
</body>
</html>