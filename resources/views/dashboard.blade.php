<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard — SiKemas</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'DM Sans', sans-serif; background: #f0f4ff;
               display: flex; align-items: center; justify-content: center;
               min-height: 100vh; margin: 0; }
        .box { background: white; border-radius: 16px; padding: 40px;
               text-align: center; box-shadow: 0 4px 24px rgba(0,0,0,0.08); }
        h1 { color: #1a1a2e; margin-bottom: 8px; }
        p  { color: #8892a4; margin-bottom: 24px; }
        form button {
            padding: 10px 24px;
            background: linear-gradient(135deg, #6fa3ef, #9b8ee8);
            color: white; border: none; border-radius: 8px;
            font-size: 14px; font-weight: 500; cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Halo, {{ auth()->user()->name }}! 👋</h1>
        <p>Kamu berhasil masuk ke SiKemas.</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Keluar</button>
        </form>
    </div>
</body>
</html>