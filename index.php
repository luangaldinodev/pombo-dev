<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>pombo.dev - Envie e-mails em massa com facilidade</title>
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
                        <a href="#features" class="hover:underline">Recursos</a>
                        <a href="#como-funciona" class="hover:underline">Como Funciona</a>
                        <a href="#contato" class="hover:underline">Contato</a>
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
            <a href="#features" class="block py-2">Recursos</a>
            <a href="#como-funciona" class="block py-2">Como Funciona</a>
            <a href="#contato" class="block py-2">Contato</a>
        </div>
    </nav>

    <!-- Hero -->
    <section class="text-center py-20 px-6 bg-white" data-aos="zoom-in">
        <h1 class="text-4xl md:text-5xl font-bold text-[#1C1C1C]">Envie e-mails em massa com rapidez e praticidade</h1>
        <p class="mt-4 text-lg text-[#4F4F4F] max-w-2xl mx-auto">
            O <strong>pombo.dev</strong> é a solução ideal para quem precisa disparar campanhas ou comunicados por e-mail direto do navegador. Sem código, sem complicação.
        </p>
        <a href="#" class="mt-8 inline-block bg-[#F57C00] text-white px-6 py-3 rounded-lg font-semibold hover:bg-orange-600">Experimente grátis</a>
    </section>

    <!-- Features -->
    <section id="features" class="py-20 bg-[#F4F4F4]">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-[#1C1C1C]" data-aos="fade-up">Por que usar o pombo.dev?</h2>
            <div class="mt-12 grid gap-10 md:grid-cols-2 lg:grid-cols-4">
                <div class="bg-white rounded-lg p-6 shadow" data-aos="fade-up">
                    <h3 class="text-[#3FA7A3] font-semibold text-xl mb-2">Envios em Massa</h3>
                    <p>Envie centenas ou milhares de e-mails de uma vez com poucos cliques, direto do seu navegador.</p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-[#3FA7A3] font-semibold text-xl mb-2">Templates Profissionais</h3>
                    <p>Utilize modelos prontos ou personalize seus próprios layouts com facilidade.</p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-[#3FA7A3] font-semibold text-xl mb-2">Sem Código</h3>
                    <p>Tudo feito por uma interface simples e intuitiva. Ideal para times de marketing e vendas.</p>
                </div>
                <div class="bg-white rounded-lg p-6 shadow" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-[#3FA7A3] font-semibold text-xl mb-2">Relatórios Rápidos</h3>
                    <p>Acompanhe quem abriu, clicou e recebeu seus e-mails em tempo real.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Como Funciona -->
    <section id="como-funciona" class="py-20 bg-white" data-aos="fade-up">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-8">Como começar a usar?</h2>
            <ol class="text-left space-y-6 text-[#4F4F4F]">
                <li><strong>1.</strong> Crie sua conta gratuitamente.</li>
                <li><strong>2.</strong> Escolha um modelo de e-mail ou envie o seu HTML.</li>
                <li><strong>3.</strong> Importe sua lista de contatos.</li>
                <li><strong>4.</strong> Dispare a campanha e acompanhe os resultados.</li>
            </ol>
        </div>
    </section>

    <!-- Contato -->
    <section id="contato" class="py-20 bg-[#F4F4F4] text-center" data-aos="fade-up">
        <div class="max-w-xl mx-auto px-4">
            <h2 class="text-3xl font-bold mb-6">Precisa de ajuda ou quer conversar? 🐦</h2>
            <p class="text-[#4F4F4F] mb-4">Fale com nossa equipe pelo e-mail <a href="mailto:contato@pombo.dev" class="text-[#3FA7A3] font-semibold">contato@pombo.dev</a> e tire suas dúvidas.</p>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-[#3FA7A3] text-white text-center py-6">
        <p>&copy; 2025 pombo.dev — Plataforma simples e eficaz para envio de e-mails em massa 🐦</p>
    </footer>

    <script>
        AOS.init();
    </script>
</body>

</html>
