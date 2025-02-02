<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aplikasi Uang Kas</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: rgb(87, 3, 255);
            --primary-hover: rgb(56, 1, 253);
            --text-color: #333;
            --error-color: #e74c3c;
        }

        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, rgb(95, 2, 255), rgb(94, 1, 255));
            color: var(--text-color);
        }

        .login-container {
            background: #ffffff;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            animation: slideIn 0.6s ease;
        }

        .login-container h2 {
            margin-bottom: 30px;
            text-align: center;
            color: var(--primary-color);
            font-size: 2rem;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .input-group {
            position: relative;
        }

        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #aaa;
            transition: color 0.3s;
        }

        input {
            width: 100%;
            padding: 12px 12px 12px 40px;
            border: 2px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            outline: none;
            transition: all 0.3s;
            font-size: 1rem;
        }

        input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(87, 3, 255, 0.1);
        }

        input:focus + i {
            color: var(--primary-color);
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: var(--primary-color);
            color: white;
            font-size: 1rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        button:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(87, 3, 255, 0.2);
        }

        .error {
            color: var(--error-color);
            font-size: 0.9rem;
            margin-top: 15px;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .error.show {
            opacity: 1;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }

        .shake {
            animation: shake 0.5s ease-in-out;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2><i class="fas fa-coins"></i> Aplikasi Uang Kas</h2>
        <form id="loginForm" onsubmit="return login(event)">
            <div class="form-group">
                <label for="username">Username</label>
                <div class="input-group">
                    <input type="text" id="username" placeholder="Masukkan nama Anda" required>
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                    <input type="password" id="password" placeholder="Masukkan password Anda" required>
                    <i class="fas fa-lock"></i>
                </div>
            </div>
            <button type="submit">
                <i class="fas fa-sign-in-alt"></i>
                <span>Login</span>
            </button>
        </form>
        <div id="error" class="error"></div>
    </div>

    <script>
        function login(event) {
            event.preventDefault();
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            const errorElement = document.getElementById('error');
            const loginContainer = document.querySelector('.login-container');

            if (username === 'admin' && password === 'admin') {
                errorElement.textContent = '';
                errorElement.classList.remove('show');
                alert('Login berhasil!');
                window.location.href = '/uangkas';
            } else {
                errorElement.textContent = 'Password atau Username yang Anda masukkan salah.';
                errorElement.classList.add('show');
                loginContainer.classList.add('shake');
                setTimeout(() => loginContainer.classList.remove('shake'), 500);
            }
        }
    </script>
</body>
</html>

