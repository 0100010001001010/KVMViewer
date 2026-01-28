<?php
echo "<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Dashboard + Login</title>
<style>
    body {
        margin: 0;
        font-family: 'Fira Code', monospace;
        background-color: #1E1E1E;
        color: #D4D4D4;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px 10px;
        gap: 30px;
        min-height: 100vh;
    }

    .panel {
        background-color: #2A2A2A;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.6);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        width: 90%;
        max-width: 700px;
        text-align: center;
    }

    .dashboard {
        min-height: 180px;
    }

    .login {
        width: 90%;
        max-width: 400px;
        min-height: 350px; /* taller than wide */
    }

    .panel:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.7);
    }

    h1 {
        color: #9CDCFE;
        margin-bottom: 20px;
    }

    p {
        color: #C8C8C8;
        font-size: 16px;
        margin-bottom: 20px;
    }

    .timestamp {
        color: #CE9178;
        font-family: monospace;
        font-size: 12px;
        margin-top: 15px;
    }

    input[type='text'], input[type='password'], select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: none;
        border-radius: 8px;
        background-color: #1E1E1E;
        color: #D4D4D4;
        font-size: 14px;
    }

    button {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: none;
        border-radius: 8px;
        background-color: #007ACC;
        color: #fff;
        font-size: 14px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #005A9E;
    }

    .oauth-buttons button {
        background-color: #DB4437; /* Google red */
        margin-top: 5px;
    }

    .oauth-buttons button.phone {
        background-color: #0F9D58; /* Phone green */
    }

    @media (max-width: 500px) {
        .panel {
            padding: 20px;
        }
        input[type='text'], input[type='password'], select, button {
            font-size: 12px;
        }
    }
</style>
</head>
<body>

<div class='panel dashboard'>
    <h1>NGINX + PHP Dashboard</h1>
    <p>Welcome to your local development environment.</p>
    <div class='timestamp'>Updated at: " . date('H:i:s') . "</div>
</div>

<div class='panel login'>
    <h1>Login</h1>
    <form method='post'>
        <input type='text' name='username' placeholder='Username'>
        <input type='password' name='password' placeholder='Password'>
        <select name='default_page'>
            <option value='home'>Home</option>
            <option value='dashboard'>Dashboard</option>
            <option value='settings'>Settings</option>
        </select>
        <button type='submit' name='login'>Submit</button>
        <button type='submit' name='create_user'>Create User</button>
    </form>
    <div class='oauth-buttons'>
        <button type='button'>Login with Google</button>
        <button type='button' class='phone'>Login with Phone</button>
    </div>
</div>

</body>
</html>";
