<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - pombo.dev</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
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
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="index.php" class="hover:underline">Início</a>
                        <a href="#dashboard" class="hover:underline">Dashboard</a>
                        <a href="#config" class="hover:underline">Configurações</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button onclick="toggleMenu()" class="focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
            <a href="index.php" class="block py-2">Início</a>
            <a href="#dashboard" class="block py-2">Dashboard</a>
            <a href="#config" class="block py-2">Configurações</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <!-- Dashboard Section -->
        <section id="dashboard" class="py-20 px-6 bg-white" data-aos="fade-up">
            <div class="max-w-7xl mx-auto">
                <h1 class="text-4xl font-bold text-[#1C1C1C] mb-6">Bem-vindo ao Dashboard</h1>
                <p class="text-lg text-[#4F4F4F] mb-12">Aqui você pode gerenciar suas campanhas, visualizar relatórios e configurar sua conta.</p>
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <div class="bg-[#F4F4F4] rounded-lg p-6 shadow" data-aos="fade-up">
                        <h3 class="text-[#3FA7A3] font-semibold text-xl mb-2">Campanhas</h3>
                        <p>Gerencie suas campanhas de e-mail e acompanhe os resultados.</p>
                        <a href="#" class="text-[#F57C00] font-semibold hover:underline">Acessar</a>
                    </div>
                    <div class="bg-[#F4F4F4] rounded-lg p-6 shadow" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="text-[#3FA7A3] font-semibold text-xl mb-2">Relatórios</h3>
                        <p>Veja estatísticas detalhadas sobre suas campanhas.</p>
                        <a href="#" class="text-[#F57C00] font-semibold hover:underline">Acessar</a>
                    </div>
                    <div class="bg-[#F4F4F4] rounded-lg p-6 shadow" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="text-[#3FA7A3] font-semibold text-xl mb-2">Configurações</h3>
                        <p>Personalize sua conta e preferências.</p>
                        <a href="#" class="text-[#F57C00] font-semibold hover:underline">Acessar</a>
                    </div>
                </div>
            </div>
        </section>
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