<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Enviar E-mails - pombo.dev</title>
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
                        <a href="dash.php" class="hover:underline">Dashboard</a>
                        <a href="send_email.php" class="hover:underline">Enviar E-mails</a>
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
            <a href="dash.php" class="block py-2">Dashboard</a>
            <a href="send_email.php" class="block py-2">Enviar E-mails</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <section id="send-email" class="py-20 px-6 bg-white" data-aos="fade-up">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-bold text-[#1C1C1C] mb-6">Enviar E-mails</h1>
                <p class="text-lg text-[#4F4F4F] mb-12">Preencha os campos abaixo para enviar sua campanha de e-mails.</p>
                <form action="app/functions/sendEmail.php" method="POST" class="bg-[#F4F4F4] p-8 rounded-lg shadow-md">
                    <div class="mb-4">
                        <label for="recipients" class="block text-sm font-medium text-[#4F4F4F]">Destinatários</label>
                        <textarea id="recipients" name="recipients" rows="4" required class="mt-1 block w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#3FA7A3]" placeholder="Digite os e-mails separados por vírgula"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="subject" class="block text-sm font-medium text-[#4F4F4F]">Assunto</label>
                        <input type="text" id="subject" name="subject" required class="mt-1 block w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#3FA7A3]" placeholder="Digite o assunto do e-mail" />
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block text-sm font-medium text-[#4F4F4F]">Mensagem</label>
                        <textarea id="message" name="message" rows="6" required class="mt-1 block w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#3FA7A3]" placeholder="Digite sua mensagem"></textarea>
                    </div>

                    <!-- Template Selection -->
                    <div class="mb-6">
                        <label for="template" class="block text-sm font-medium text-[#4F4F4F]">Escolha um Template</label>
                        <select id="template" name="template" required class="mt-1 block w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#3FA7A3]">
                            <option value="template1">Template 1</option>
                            <option value="template2">Template 2</option>
                            <option value="template3">Template 3</option>
                        </select>
                    </div>

                    <!-- Template Previews -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <div class="text-center">
                            <img src="src/images/template02.jpg" alt="Template 1" class="w-full h-auto rounded-lg shadow-md">
                            <p class="mt-2 text-sm font-medium text-[#4F4F4F]">Template 1</p>
                        </div>
                        <div class="text-center">
                            <img src="src/images/template02.jpg" alt="Template 2" class="w-full h-auto rounded-lg shadow-md">
                            <p class="mt-2 text-sm font-medium text-[#4F4F4F]">Template 2</p>
                        </div>
                        <div class="text-center">
                            <img src="src/images/template02.jpg" alt="Template 3" class="w-full h-auto rounded-lg shadow-md">
                            <p class="mt-2 text-sm font-medium text-[#4F4F4F]">Template 3</p>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-[#3FA7A3] text-white py-2 px-4 rounded-lg font-semibold hover:bg-[#2F8F8B]">Enviar</button>
                </form>
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