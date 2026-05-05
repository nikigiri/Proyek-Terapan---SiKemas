<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        :root { --card-shadow: 0 20px 60px rgba(80,100,200,0.15), 0 4px 20px rgba(80,100,200,0.08); }
        
        html, body {
            min-height: 100%;
            font-family: 'DM Sans', sans-serif;
        }

        body {
            min-height: 100vh;
            width: 100%;
            display: flex;
            align-items: start;
            justify-content: center;
            background: linear-gradient(135deg, #ddeeff 0%, #c5d8f8 15%, #a8c0f5 35%, #8fa8ee 50%, #9da8ef 65%, #b0a8f0 80%, #c8b8f5 100%);
            background-size: cover;
            background-attachment: fixed;
            padding: 72px 24px 32px;
            position: relative;
            overflow-x: hidden;
            overflow-y: auto;
        }

        body::before {
            content: '';
            position: fixed;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255,255,255,0.25) 0%, transparent 70%);
            top: -100px;
            left: -100px;
            pointer-events: none;
            z-index: 0;
        }

        body::after {
            content: '';
            position: fixed;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(180,160,255,0.2) 0%, transparent 70%);
            bottom: -80px;
            right: -80px;
            pointer-events: none;
            z-index: 0;
        }

        .card {
            background: rgba(255,255,255,0.97); border-radius: 20px;
            padding: 38px 36px; width: 100%; max-width: 440px;
            box-shadow: var(--card-shadow); position: relative; z-index: 5;
            animation: cardIn 0.5s cubic-bezier(0.22,1,0.36,1) both;
        }
        @keyframes cardIn {
            from { opacity:0; transform: translateY(16px) scale(0.98); }
            to   { opacity:1; transform: translateY(0) scale(1); }
        }
       
        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 6px;
        }

        .logo-icon {
            width: 150px;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .logo-icon img {
            width: 150px;
            height: 150px;
            object-fit: contain;
            display: block;
        }

        .logo-text {
            font-size: 22px;
            font-weight: 600;
            color: #1a1a2e;
            letter-spacing: 0.3px;
            line-height: 1;
        } 

        .card h1 { font-size: 21px; font-weight: 600; color: #1a1a2e; text-align: center; margin-bottom: 5px; }
        .subtitle { font-size: 13.5px; color: #8892a4; text-align: center; margin-bottom: 10px; }
        .alert-error {
            background: #fff0f0; border: 1px solid #ffd0d0;
            border-radius: 10px; padding: 10px 14px;
            font-size: 12.5px; color: #c0392b; margin-bottom: 16px;
        }
        .form-group { margin-bottom: 14px; }
        .form-group label { display: block; font-size: 13px; font-weight: 500; color: #3a3a5c; margin-bottom: 7px; }
        .input-wrap { position: relative; }
        .form-group input {
            width: 100%; padding: 11px 16px;
            border: 1.5px solid #e4e9f2; border-radius: 10px;
            font-size: 13.5px; font-family: 'DM Sans', sans-serif;
            color: #1a1a2e; background: #f8faff; outline: none;
            transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
        }
        .form-group input::placeholder { color: #b0b8cc; }
        .form-group input:focus {
            border-color: #6fa3ef; background: #fff;
            box-shadow: 0 0 0 3.5px rgba(111,163,239,0.15);
        }
        .pw-strength { margin-top: 6px; }
        .strength-bar { height: 3px; border-radius: 10px; background: #e4e9f2; overflow: hidden; margin-bottom: 4px; }
        .strength-fill { height: 100%; border-radius: 10px; transition: width 0.3s, background 0.3s; width: 0%; }
        .strength-text { font-size: 11px; color: #b0b8cc; }
        .toggle-pw {
            position: absolute; right: 12px; top: 50%; transform: translateY(-50%);
            background: none; border: none; cursor: pointer; padding: 4px;
            color: #b0b8cc; line-height: 0; transition: color 0.2s;
        }
        .toggle-pw:hover { color: #6fa3ef; }
        .toggle-pw svg { width: 17px; height: 17px; }
        .terms-row {
            display: flex; align-items: flex-start; gap: 8px;
            margin-bottom: 20px; margin-top: 4px;
        }
        .terms-row input[type="checkbox"] {
            width: 15px; height: 15px; margin-top: 2px;
            accent-color: #6fa3ef; flex-shrink: 0; cursor: pointer;
        }
        .terms-row label { font-size: 12.5px; color: #5a6270; line-height: 1.5; cursor: pointer; }
        .terms-row a { color: #6fa3ef; font-weight: 500; text-decoration: none; }
        .btn-primary {
            width: 100%; padding: 12px;
            background: linear-gradient(135deg, #6fa3ef 0%, #7a8ee8 50%, #9b8ee8 100%);
            color: white; border: none; border-radius: 10px;
            font-size: 14px; font-weight: 600; font-family: 'DM Sans', sans-serif;
            cursor: pointer; margin-bottom: 12px;
            transition: opacity 0.2s, transform 0.15s;
        }
        .btn-primary:hover { opacity: 0.92; transform: translateY(-1px); }
        .divider { display: flex; align-items: center; gap: 10px; margin-bottom: 12px; }
        .divider-line { flex: 1; height: 1px; background: #e4e9f2; }
        .divider-text { font-size: 12px; color: #b0b8cc; }
        .btn-google {
            width: 100%; padding: 11px; background: white; color: #3a3a5c;
            border: 1.5px solid #e4e9f2; border-radius: 10px;
            font-size: 13.5px; font-weight: 500; font-family: 'DM Sans', sans-serif;
            cursor: not-allowed; opacity: 0.6;
            display: flex; align-items: center; justify-content: center; gap: 8px;
            margin-bottom: 20px;
        }
        .btn-google svg { width: 18px; height: 18px; }
        .login-link { text-align: center; font-size: 13px; color: #8892a4; }
        .login-link a { color: #6fa3ef; font-weight: 600; text-decoration: none; }
        .login-link a:hover { color: #4f7fe8; }
    </style>
</head>
<body>
    <div class="card">
        <div class="logo">
            <div class="logo-icon">
                <img src="{{ asset('images/siKemasLogo.png') }}" alt="Logo SiKemas">
            </div>
        </div>

        <h1>Buat Akun Baru</h1>
        <p class="subtitle">Bergabung dan mulai buat kemasan produkmu!</p>

        @if ($errors->any())
            <div class="alert-error">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            {{-- Nama --}}
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name"
                       value="{{ old('name') }}"
                       placeholder="Masukkan nama lengkap kamu"
                       autocomplete="name" required>
            </div>

            {{-- Email --}}
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email"
                       value="{{ old('email') }}"
                       placeholder="Masukkan email aktif kamu"
                       autocomplete="email" required>
            </div>

            {{-- Password --}}
            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <div class="input-wrap">
                    <input type="password" id="password" name="password"
                           placeholder="Minimal 8 karakter"
                           autocomplete="new-password"
                           oninput="checkStrength(this.value)"
                           required>
                    <button type="button" class="toggle-pw"
                            onclick="togglePassword('password', this)">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17.94 17.94A10.07 10.07 0 0112 20c-7 0-11-8-11-8a18.45 18.45 0 015.06-5.94M9.9 4.24A9.12 9.12 0 0112 4c7 0 11 8 11 8a18.5 18.5 0 01-2.16 3.19m-6.72-1.07a3 3 0 11-4.24-4.24"/>
                            <line x1="1" y1="1" x2="23" y2="23"/>
                        </svg>
                    </button>
                </div>
                <div class="pw-strength">
                    <div class="strength-bar">
                        <div class="strength-fill" id="strengthBar"></div>
                    </div>
                    <span class="strength-text" id="strengthText"></span>
                </div>
            </div>

            {{-- Konfirmasi Password --}}
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                <div class="input-wrap">
                    <input type="password" id="password_confirmation"
                           name="password_confirmation"
                           placeholder="Ulangi kata sandi"
                           autocomplete="new-password" required>
                    <button type="button" class="toggle-pw"
                            onclick="togglePassword('password_confirmation', this)">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                             stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17.94 17.94A10.07 10.07 0 0112 20c-7 0-11-8-11-8a18.45 18.45 0 015.06-5.94M9.9 4.24A9.12 9.12 0 0112 4c7 0 11 8 11 8a18.5 18.5 0 01-2.16 3.19m-6.72-1.07a3 3 0 11-4.24-4.24"/>
                            <line x1="1" y1="1" x2="23" y2="23"/>
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Syarat & Ketentuan --}}
            <div class="terms-row">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">
                    Saya menyetujui
                    <a href="#">Syarat & Ketentuan</a> serta
                    <a href="#">Kebijakan Privasi</a> SiKemas
                </label>
            </div>

            <button type="submit" class="btn-primary">Buat Akun</button>
        </form>

        <div class="divider">
            <div class="divider-line"></div>
            <span class="divider-text">atau</span>
            <div class="divider-line"></div>
        </div>

        <button class="btn-google" type="button" disabled>
            <svg viewBox="0 0 48 48">
                <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
                <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
                <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.18 1.48-4.97 2.35-8.16 2.35-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
            </svg>
            Daftar dengan Google
        </button>

        <p class="login-link">
            Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a>
        </p>
    </div>

    <script>
        function togglePassword(fieldId, btn) {
            const input = document.getElementById(fieldId);
            const svg = btn.querySelector('svg');
            if (input.type === 'password') {
                input.type = 'text';
                svg.innerHTML = `<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>`;
            } else {
                input.type = 'password';
                svg.innerHTML = `<path d="M17.94 17.94A10.07 10.07 0 0112 20c-7 0-11-8-11-8a18.45 18.45 0 015.06-5.94M9.9 4.24A9.12 9.12 0 0112 4c7 0 11 8 11 8a18.5 18.5 0 01-2.16 3.19m-6.72-1.07a3 3 0 11-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/>`;
            }
        }

        function checkStrength(val) {
            const bar = document.getElementById('strengthBar');
            const txt = document.getElementById('strengthText');
            if (!val) { bar.style.width = '0%'; txt.textContent = ''; return; }
            let score = 0;
            if (val.length >= 8) score++;
            if (/[A-Z]/.test(val)) score++;
            if (/[0-9]/.test(val)) score++;
            if (/[^A-Za-z0-9]/.test(val)) score++;
            const levels = [
                { w: '25%', c: '#f5a0a0', t: 'Sangat lemah' },
                { w: '50%', c: '#f5c96a', t: 'Lemah' },
                { w: '75%', c: '#7bc99e', t: 'Cukup kuat' },
                { w: '100%', c: '#4caf80', t: 'Kuat' },
            ];
            const lv = levels[score - 1] || levels[0];
            bar.style.width = lv.w;
            bar.style.background = lv.c;
            txt.textContent = lv.t;
            txt.style.color = lv.c;
        }
    </script>
</body>
</html>