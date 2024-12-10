<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Image Prompt Display</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #0f172a;
            font-family: 'SF Pro Display', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        .prompt-container {
            width: 500px;
            aspect-ratio: 1/1;
            background: rgba(30, 41, 59, 0.7);
            border: 1px solid rgba(148, 163, 184, 0.2);
            border-radius: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }

        .prompt-text {
            color: #e2e8f0;
            font-size: 2rem;
            line-height: 1.6;
            text-align: center;
            margin: 0;
            z-index: 2;
            font-weight: 400;
            letter-spacing: 0.015em;
        }

        /* AI-inspired animated background */
        .prompt-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent 0%,
                rgba(147, 51, 234, 0.1) 25%,
                transparent 50%,
                rgba(59, 130, 246, 0.1) 75%,
                transparent 100%
            );
            animation: rotate 20s linear infinite;
            z-index: 1;
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        /* Simulated AI processing indicator */
        .ai-indicator {
            position: absolute;
            top: 1rem;
            left: 50%;
            transform: translateX(-50%);
            color: #94a3b8;
            font-size: 0.875rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            opacity: 0.7;
        }

        .ai-indicator::before {
            content: '●';
            color: #10b981;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.5;
            }
        }

        .prompt-container::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 12px;
            padding: 1px;
            background: linear-gradient(
                45deg,
                rgba(147, 51, 234, 0.3),
                rgba(59, 130, 246, 0.3)
            );
            -webkit-mask: linear-gradient(#fff 0 0) content-box,
            linear-gradient(#fff 0 0);
            mask: linear-gradient(#fff 0 0) content-box,
            linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
        }

        @media (max-width: 768px) {
            .prompt-container {
                width: 90%;
                margin: 1rem;
            }

            .prompt-text {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
<div class="prompt-container">
    <div class="ai-indicator">AI Generated Image Prompt</div>
    <p class="prompt-text">
        {{ $text ?? 'A beautiful sunset' }}
    </p>
</div>
</body>
</html>
