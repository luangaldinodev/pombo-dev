<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro - pombo.dev</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        body > * {
            flex-shrink: 0;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-[#FAF9F6] text-[#1C1C1C] font-sans">
    <!-- Navbar -->
    <nav class="bg-[#3FA7A3] text-white" data-aos="fade-down">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <img src="src/images/logo_no_bg.png" alt="Logo pombo.dev" class="h-10 w-auto mr-3" />
                    <span class="font-bold text-xl">pombo.dev</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <div class="bg-white p-8 rounded-lg shadow-md max-w-md w-full" data-aos="fade-up">
            <h1 class="text-2xl font-bold text-center text-[#1C1C1C] mb-6">Cadastro</h1>
            <form action="register_action.php" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-[#4F4F4F]">Nome</label>
                    <input type="text" id="name" name="name" required class="mt-1 block w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#3FA7A3]" />
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-[#4F4F4F]">E-mail</label>
                    <input type="email" id="email" name="email" required class="mt-1 block w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#3FA7A3]" />
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-[#4F4F4F]">Senha</label>
                    <input type="password" id="password" name="password" required class="mt-1 block w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#3FA7A3]" />
                </div>
                <div class="mb-6">
                    <label for="confirm_password" class="block text-sm font-medium text-[#4F4F4F]">Confirme a Senha</label>
                    <input type="password" id="confirm_password" name="confirm_password" required class="mt-1 block w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#3FA7A3]" />
                </div>
                <button type="submit" class="w-full bg-[#3FA7A3] text-white py-2 px-4 rounded-lg font-semibold hover:bg-[#2F8F8B]">Cadastrar</button>
            </form>
            <p class="mt-4 text-sm text-center text-[#4F4F4F]">
                Já tem uma conta? <a href="login.php" class="text-[#F57C00] font-semibold hover:underline">Faça login</a>
            </p>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-[#3FA7A3] text-white text-center py-6">
        <p>&copy; 2025 pombo.dev — Plataforma simples e eficaz para envio de e-mails em massa 🐦</p>
    </footer>

    <script>
        AOS.init();
    </script>
</body>

</html>