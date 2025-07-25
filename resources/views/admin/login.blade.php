<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2e7d32;
            --primary-light: #60ad5e;
            --primary-dark: #005005;
            --text: #333333;
            --text-light: #666666;
            --bg: #f8f8f8;
            --white: #ffffff;
            --border: #e0e0e0;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            --success: #4caf50;
            --warning: #ff9800;
            --danger: #f44336;
            --info: #2196f3;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            color: var(--text);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 1rem;
            /* p-4 */
            margin: 0;
            box-sizing: border-box;
        }

        .login-container {
            background-color: var(--white);
            border-radius: 0.75rem;
            /* rounded-xl */
            box-shadow: var(--shadow);
            /* shadow-custom */
            display: flex;
            flex-direction: column;
            /* flex-col */
            width: 100%;
            max-width: 64rem;
            /* max-w-4xl */
            overflow: hidden;
        }

        /* Left Section (Image/Illustration) */
        .left-section {
            display: none;
            /* hidden */
            background-color: var(--primary);
            /* primary-bg */
            align-items: center;
            /* items-center */
            justify-content: center;
            /* justify-center */
            padding: 2rem;
            /* p-8 */
            text-align: center;
            /* text-center */
        }

        .left-section h1 {
            color: var(--white);
            /* white-color */
            font-size: 2.25rem;
            /* text-4xl */
            font-weight: 700;
            /* font-bold */
            margin-bottom: 1rem;
            /* mb-4 */
        }

        .left-section p {
            color: rgba(255, 255, 255, 0.8);
            /* text-white-color text-opacity-80 */
            font-size: 1.125rem;
            /* text-lg */
        }

        .left-section i {
            font-size: 10rem;
            color: var(--primary-light);
            margin-top: 2rem;
        }

        /* Right Section (Login Form) */
        .right-section {
            width: 100%;
            /* w-full */
            padding: 2rem;
            /* p-8 */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .right-section h2 {
            font-size: 1.875rem;
            /* text-3xl */
            font-weight: 700;
            /* font-bold */
            text-align: center;
            /* text-center */
            color: var(--primary);
            /* primary-text */
            margin-bottom: 2rem;
            /* mb-8 */
        }

        .form-group {
            margin-bottom: 1.5rem;
            /* space-y-6 equivalent for direct children */
        }

        .form-group label {
            display: block;
            /* block */
            font-size: 0.875rem;
            /* text-sm */
            font-weight: 500;
            /* font-medium */
            color: var(--text);
            /* text-text-color */
            margin-bottom: 0.5rem;
            /* mb-2 */
        }

        .input-field {
            width: 100%;
            /* w-full */
            padding: 0.75rem 1rem;
            /* px-4 py-3 */
            border-radius: 0.5rem;
            /* rounded-lg */
            border: 1px solid var(--border);
            /* input-field border */
            color: var(--text);
            /* input-field color */
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
            /* transition duration-200 */
        }

        .input-field:focus {
            border-color: var(--primary);
            /* focus:border-primary */
            outline: none;
            /* focus:outline-none */
            box-shadow: 0 0 0 2px rgba(46, 125, 50, 0.2);
            /* focus:ring-2 focus:ring-primary-light focus:ring-opacity-50 */
        }

        .form-options {
            display: flex;
            /* flex */
            align-items: center;
            /* items-center */
            justify-content: space-between;
            /* justify-between */
            margin-bottom: 1.5rem;
            /* space-y-6 equivalent */
        }

        .remember-me {
            display: flex;
            /* flex */
            align-items: center;
            /* items-center */
        }

        .remember-me input[type="checkbox"] {
            height: 1rem;
            /* h-4 */
            width: 1rem;
            /* w-4 */
            color: var(--primary);
            /* text-primary */
            border-radius: 0.25rem;
            /* rounded */
            border: 1px solid var(--border);
            /* border-border */
            outline: none;
            accent-color: var(--primary);
            /* For better browser compatibility */
        }

        .remember-me label {
            margin-left: 0.5rem;
            /* ml-2 */
            display: block;
            /* block */
            font-size: 0.875rem;
            /* text-sm */
            color: var(--text-light);
            /* text-text-light-color */
        }

        .forgot-password-link {
            font-size: 0.875rem;
            /* text-sm */
            color: var(--primary);
            /* primary-text */
            text-decoration: none;
        }

        .forgot-password-link:hover {
            text-decoration: underline;
            /* hover:underline */
        }

        .btn-primary {
            width: 100%;
            /* w-full */
            padding: 0.75rem 1rem;
            /* py-3 px-4 */
            border-radius: 0.5rem;
            /* rounded-lg */
            font-weight: 600;
            /* font-semibold */
            background-color: var(--primary);
            /* btn-primary background */
            color: var(--white);
            /* btn-primary color */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* shadow-md */
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            /* transition duration-300 ease-in-out */
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            /* hover:bg-primary-dark */
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            /* hover:shadow-lg */
        }

        .support-text {
            margin-top: 2rem;
            /* mt-8 */
            text-align: center;
            /* text-center */
            font-size: 0.875rem;
            /* text-sm */
            color: var(--text-light);
            /* text-text-light-color */
        }

        .support-text a {
            color: var(--primary);
            /* primary-text */
            text-decoration: none;
        }

        .support-text a:hover {
            text-decoration: underline;
            /* hover:underline */
        }

        /* Responsive adjustments */
        @media (min-width: 768px) {

            /* md: breakpoint */
            .login-container {
                flex-direction: row;
                /* md:flex-row */
            }

            .left-section {
                display: flex;
                /* md:flex */
                width: 50%;
                /* md:w-1/2 */
            }

            .right-section {
                width: 50%;
                /* md:w-1/2 */
                padding: 3rem;
                /* md:p-12 */
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <!-- Left Section (Image/Illustration) -->
        <div class="left-section">
            <div>
                <h1>Welcome Back!</h1>
                <p>
                    Manage your dashboard with ease.
                </p>
                <i class="fas fa-store"></i>
            </div>
        </div>

        <!-- Right Section (Login Form) -->
        <div class="right-section">
            <h2>Admin Login</h2>

            <form>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="you@example.com"
                        class="input-field" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" class="input-field"
                        required>
                </div>

                <div class="form-options">
                    <div class="remember-me">
                        <input id="remember_me" name="remember_me" type="checkbox">
                        <label for="remember_me">Remember me</label>
                    </div>

                    <a href="#" class="forgot-password-link">Forgot Password?</a>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn-primary">
                        Log In
                    </button>
                </div>
            </form>

            <p class="support-text">
                Need help? <a href="#">Contact Support</a>
            </p>
        </div>
    </div>

    <script>
        document.querySelector('.btn-primary').addEventListener('click', function(event) {
            event.preventDefault();
            if (document.getElementById('email').value === 'admin' || document.getElementById('password').value ===
                'admin') {
                window.location.href = "{{ route('admin-overview') }}";
            } else {
                alert('Invalid credentials! Please try again.');
            }
        });
    </script>

</body>

</html>
