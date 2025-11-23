<!DOCTYPE html>
<html>
<head>
    <title>Verify Email - WMSU REO</title>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f8fafc; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 40px auto; background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .header { background-color: #8B0000; padding: 40px; text-align: center; }
        .header h1 { color: #ffffff; margin: 0; font-size: 24px; letter-spacing: 1px; }
        .content { padding: 40px; text-align: center; color: #334155; }
        .code-box { background-color: #f1f5f9; border: 2px dashed #cbd5e1; padding: 20px; font-size: 32px; font-weight: bold; letter-spacing: 8px; color: #1e293b; margin: 30px 0; border-radius: 8px; display: inline-block; }
        .footer { background-color: #f8fafc; padding: 20px; text-align: center; font-size: 12px; color: #94a3b8; border-top: 1px solid #e2e8f0; }
        .btn { display: inline-block; padding: 12px 24px; background-color: #8B0000; color: #ffffff; text-decoration: none; border-radius: 6px; font-weight: bold; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>WMSU REO</h1>
        </div>
        <div class="content">
            <h2 style="margin-top: 0;">Verify Your Identity</h2>
            <p>Hello,</p>
            <p>You recently requested to register an account with the Research Ethics Office portal. Please use the code below to complete your verification:</p>
            
            <div class="code-box">{{ $code }}</div>
            
            <p>If you did not request this, please ignore this email.</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} WMSU Research Ethics Office. All rights reserved.<br>
            Zamboanga City, Philippines
        </div>
    </div>
</body>
</html>