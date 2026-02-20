<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Baru dari Portofolio</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f9fafb;
            padding: 30px;
            border-radius: 0 0 10px 10px;
            border: 1px solid #e5e7eb;
        }
        .field {
            margin-bottom: 20px;
        }
        .label {
            font-weight: bold;
            color: #4b5563;
            margin-bottom: 5px;
            display: block;
        }
        .value {
            background: white;
            padding: 12px;
            border-radius: 6px;
            border: 1px solid #e5e7eb;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #9ca3af;
            font-size: 14px;
        }
        .reply-button {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>📬 Pesan Baru dari Portofolio</h1>
        <p>Ada seseorang yang ingin menghubungi Anda</p>
    </div>
    
    <div class="content">
        <div class="field">
            <span class="label">📝 Nama:</span>
            <div class="value">{{ $data['name'] }}</div>
        </div>
        
        <div class="field">
            <span class="label">📧 Email:</span>
            <div class="value">{{ $data['email'] }}</div>
        </div>
        
        <div class="field">
            <span class="label">🎯 Subject:</span>
            <div class="value">{{ $data['subject'] }}</div>
        </div>
        
        <div class="field">
            <span class="label">💬 Pesan:</span>
            <div class="value" style="white-space: pre-line;">{{ $data['message'] }}</div>
        </div>
        
        <div style="text-align: center;">
            <a href="mailto:{{ $data['email'] }}?subject=Re: {{ $data['subject'] }}" class="reply-button">
                Balas Pesan Ini
            </a>
        </div>
    </div>
    
    <div class="footer">
        <p>Email ini dikirim dari website portofolio Reyno Andrean Wijaksono</p>
        <p>Dikirim pada: {{ now()->format('d M Y H:i') }}</p>
    </div>
</body>
</html>