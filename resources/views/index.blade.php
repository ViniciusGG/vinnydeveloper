@extends('layouts.app')

@section('content')

    <!-- Header -->
    <header class="header-footer-bg-pattern backdrop-blur-sm fixed w-full top-0 z-50 border-b border-football-blue/20">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold"> VINICIUS <span class="text-football-blue">GOULART</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#hero-section" class="text-gray-300 hover:text-football-blue transition-colors duration-300">INÍCIO</a>
                    <a href="#about-section"
                        class="text-gray-300 hover:text-football-blue transition-colors duration-300">SOBRE</a>
                    <a href="#projects-section"
                        class="text-gray-300 hover:text-football-blue transition-colors duration-300">PROJETOS</a>
                    <a href="#contact-section"
                        class="text-gray-300 hover:text-football-blue transition-colors duration-300">CONTATO</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Home Section -->
    <section id="hero-section" class="min-h-screen flex items-center justify-center relative home-bg-pattern parallax-bg">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center justify-center gap-8 lg:gap-12">
                <div class="order-1 lg:order-2 w-full max-w-md lg:max-w-lg">
                    <img src="{{ asset('storage/images/me.png') }}" alt="Vinicius Goulart" class="w-full h-auto object-cover">
                </div>
                
                <div class="order-2 lg:order-1 max-w-4xl text-center lg:text-left">
                    <div class="mb-8">
                        <span class="text-2xl md:text-4xl font-bold mb-6 bg-gradient-to-r from-white via-football-blue  bg-clip-text text-transparent gradient-animate">
                            Olá, eu sou
                        </span>
                        <h1
                            class="text-4xl md:text-5xl lg:text-7xl font-black mb-6 bg-gradient-to-r from-white via-football-blue  bg-clip-text text-transparent gradient-animate">
                            <span class="typing-animation">Vinicius Goulart</span>
                        </h1>
                        <p class="text-lg md:text-2xl lg:text-4xl mb-8 font-medium typewriter">
                            Desenvolvedor Full Stack
                        </p>
                        {{-- <p class="text-lg md:text-xl lg:text-2xl max-w-2xl mx-auto lg:mx-0 leading-relaxed mb-4">
                            Apaixonado por tecnologia e futebol.
                        </p> --}}
                        <p class="text-base md:text-lg lg:text-2xl max-w-96 mx-auto lg:mx-0 leading-relaxed">
                            Especialista em Laravel, Shopify, WordPress e Desenvolvimento de APIs.
                        </p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#projetos"
                            class="bg-gradient-to-r from-football-blue to-green-600 hover:from-green-600 hover:to-football-blue text-white font-semibold py-3 px-6 lg:py-2 lg:px-8 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg pulse-glow gradient-animate text-center">
                            Ver Projetos
                        </a>
                        <a href="#contato"
                            class="border-2 border-football-blue text-football-blue hover:bg-football-blue hover:text-white font-semibold py-3 px-6 lg:py-2 lg:px-8 rounded-lg transition-all duration-300 gradient-animate text-center">
                            Entrar em Contato
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about-section" class="py-20 bg-pattern">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="relative ">
                        <div class="rounded-2xl overflow-hidden">
                            <img src="{{ asset('storage/images/about-me.png') }}" alt="Vinicius Goulart" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="space-y-6">
                        <h3 class="text-4xl font-bold text-white mb-4">
                            Sobre Mim
                        </h3>
                        <p class="leading-relaxed text-2xl">
                            Olá! Sou Vinicius Goulart, desenvolvedor full stack com mais de 6 de experiência.
                            <br>
                            Assim como no futebol, acredito que o trabalho em equipe e a estratégia são fundamentais
                            para alcançar grandes resultados, fazendo uso de tecnologias como
                        </p>
                        <div class="grid grid-cols-4 gap-6 mt-6">
                            <!-- Docker -->
                            <div class="group relative flex flex-col items-center">
                                <div class="bg-[#1e242a] rounded-2xl w-24 h-10 mt-5 shadow-lg group-hover:shadow-xl transition-all duration-300"></div>
                                <img src="{{ asset('storage/logos/docker.svg') }}" 
                                    alt="Docker Logo" 
                                    class="absolute -top-4 w-16 h-20 object-contain transition-transform duration-300 group-hover:scale-110" />
                            </div>

                            <!-- PHP -->
                            <div class="group relative flex flex-col items-center">
                                <div class="bg-[#1e242a] rounded-2xl w-24 h-10 mt-5 shadow-lg group-hover:shadow-xl transition-all duration-300"></div>
                                <img src="{{ asset('storage/logos/php.svg') }}" 
                                    alt="PHP Logo" 
                                    class="absolute -top-4 w-18 h-20 object-contain transition-transform duration-300 group-hover:scale-110" />
                            </div>
                            <!-- Laravel -->
                            <div class="group relative flex flex-col items-center">
                                <div class="bg-[#1e242a] rounded-2xl w-24 h-10 mt-5 shadow-lg group-hover:shadow-xl transition-all duration-300"></div>
                                <img src="{{ asset('storage/logos/laravel.svg') }}" 
                                    alt="Laravel Logo" 
                                    class="absolute -top-4 w-16 h-20 object-contain transition-transform duration-300 group-hover:scale-110" />
                            </div>
                            <!-- Shopify -->
                            <div class="group relative flex flex-col items-center">
                                <div class="bg-[#1e242a] rounded-2xl w-24 h-10 mt-5 shadow-lg group-hover:shadow-xl transition-all duration-300"></div>
                                <img src="{{ asset('storage/logos/shopify.svg') }}" 
                                    alt="Shopify Logo" 
                                    class="absolute -top-4 w-16 h-20 object-contain transition-transform duration-300 group-hover:scale-110" />
                            </div>
                            <!-- WordPress -->
                            <div class="group relative flex flex-col items-center">
                                <div class="bg-[#1e242a] rounded-2xl w-24 h-10 mt-5 shadow-lg group-hover:shadow-xl transition-all duration-300"></div>
                                <img src="{{ asset('storage/logos/wordpress.svg') }}" 
                                    alt="WordPress Logo" 
                                    class="absolute -top-4 w-16 h-20 object-contain transition-transform duration-300 group-hover:scale-110" />
                            </div>
                            <!-- Vue -->
                            <div class="group relative flex flex-col items-center">
                                <div class="bg-[#1e242a] rounded-2xl w-24 h-10 mt-5 shadow-lg group-hover:shadow-xl transition-all duration-300"></div>
                                <img src="{{ asset('storage/logos/vuejs.svg') }}" 
                                    alt="Vue Logo" 
                                    class="absolute -top-4 w-16 h-20 object-contain transition-transform duration-300 group-hover:scale-110" />
                            </div>
                            <!-- Git -->
                            <div class="group relative flex flex-col items-center">
                                <div class="bg-[#1e242a] rounded-2xl w-24 h-10 mt-5 shadow-lg group-hover:shadow-xl transition-all duration-300"></div>
                                <img src="{{ asset('storage/logos/git.svg') }}" 
                                    alt="Git Logo" 
                                    class="absolute -top-4 w-16 h-20 object-contain transition-transform duration-300 group-hover:scale-110" />
                            </div>
                            <!-- MySQL -->
                            <div class="group relative flex flex-col items-center">
                                <div class="bg-[#1e242a] rounded-2xl w-24 h-10 mt-5 shadow-lg group-hover:shadow-xl transition-all duration-300"></div>
                                <img src="{{ asset('storage/logos/mysql.svg') }}" 
                                    alt="MySQL Logo" 
                                    class="absolute -top-4 w-28 h-20 object-contain transition-transform duration-300 group-hover:scale-110" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects-section" class="py-20 bg-pattern">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16 ">
                    <h2
                        class="text-4xl md:text-5xl font-black mb-6 bg-gradient-to-r from-football-blue bg-clip-text text-transparent gradient-animate">
                        Meus Projetos
                    </h2>
                    <div
                        class="w-24 h-1 bg-gradient-to-r from-football-blue mx-auto mb-8 gradient-animate">
                    </div>
                    <p class="text-lg max-w-2xl mx-auto ">
                        Alguns dos meus trabalhos mais recentes e desafiadores
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Projeto 1 -->
                    <div
                        class="bg-gray-800/50  rounded-xl overflow-hidden border border-gray-200 hover:border-football-blue/40  transition-all duration-300 group shadow-lg hover:shadow-xl card-hover ">
                        <div
                            class="aspect-video bg-gradient-to-br from-football-blue/20 /20   flex items-center justify-center gradient-animate">
                            <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🏆</span>
                        </div>
                        <div class="p-6">
                            <h3
                                class="text-xl font-bold mb-3 group-hover:text-football-blue transition-colors">
                                Sistema de Gestão Esportiva</h3>
                            <p class="mb-4 leading-relaxed">
                                Plataforma completa para gestão de times de futebol, incluindo escalação,
                                estatísticas e acompanhamento de desempenho.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-football-blue/20  text-football-blue rounded-full text-sm hover:bg-football-blue/30 transition-colors">Laravel</span>
                                <span
                                    class="px-3 py-1 bg-football-yellow/20  text-football-yellow rounded-full text-sm hover:bg-football-yellow/30 transition-colors">React</span>
                                <span
                                    class="px-3 py-1 bg-gray-100  text-gray-600  rounded-full text-sm hover:bg-gray-200  transition-colors">MySQL</span>
                            </div>
                            <a href="#"
                                class="text-football-blue hover:text-football-yellow transition-colors font-semibold group-hover:translate-x-2 inline-block">
                                Ver Projeto →
                            </a>
                        </div>
                    </div>

                    <!-- Projeto 2 -->
                    <div
                        class="bg-gray-800/50  rounded-xl overflow-hidden border border-gray-200 hover:border-football-blue/40  transition-all duration-300 group shadow-lg hover:shadow-xl card-hover ">
                        <div
                            class="aspect-video bg-gradient-to-br from-football-yellow/20 to-green-600/20   flex items-center justify-center gradient-animate">
                            <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🎯</span>
                        </div>
                        <div class="p-6">
                            <h3
                                class="text-xl font-bold mb-3 group-hover:text-football-blue transition-colors">
                                API de Estatísticas</h3>
                            <p class="mb-4 leading-relaxed">
                                API RESTful para coleta e análise de dados esportivos em tempo real,
                                utilizada por aplicativos móveis e web.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-football-blue/20  text-football-blue rounded-full text-sm hover:bg-football-blue/30 transition-colors">Node.js</span>
                                <span
                                    class="px-3 py-1 bg-football-yellow/20  text-football-yellow rounded-full text-sm hover:bg-football-yellow/30 transition-colors">Express</span>
                                <span
                                    class="px-3 py-1 bg-gray-100  text-gray-600  rounded-full text-sm hover:bg-gray-200  transition-colors">MongoDB</span>
                            </div>
                            <a href="#"
                                class="text-football-blue hover:text-football-yellow transition-colors font-semibold group-hover:translate-x-2 inline-block">
                                Ver Projeto →
                            </a>
                        </div>
                    </div>

                    <!-- Projeto 3 -->
                    <div
                        class="bg-gray-800/50  rounded-xl overflow-hidden border border-gray-200 hover:border-football-blue/40  transition-all duration-300 group shadow-lg hover:shadow-xl card-hover ">
                        <div
                            class="aspect-video bg-gradient-to-br from-green-600/20 to-football-blue/20   flex items-center justify-center gradient-animate">
                            <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🚀</span>
                        </div>
                        <div class="p-6">
                            <h3
                                class="text-xl font-bold mb-3 group-hover:text-football-blue transition-colors">
                                Dashboard de Performance</h3>
                            <p class="mb-4 leading-relaxed">
                                Dashboard interativo para monitoramento de métricas de performance
                                de jogadores e times com gráficos em tempo real.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span
                                    class="px-3 py-1 bg-football-blue/20  text-football-blue rounded-full text-sm hover:bg-football-blue/30 transition-colors">Vue.js</span>
                                <span
                                    class="px-3 py-1 bg-football-yellow/20  text-football-yellow rounded-full text-sm hover:bg-football-yellow/30 transition-colors">D3.js</span>
                                <span
                                    class="px-3 py-1 bg-gray-100  text-gray-600  rounded-full text-sm hover:bg-gray-200  transition-colors">PostgreSQL</span>
                            </div>
                            <a href="#"
                                class="text-football-blue hover:text-football-yellow transition-colors font-semibold group-hover:translate-x-2 inline-block">
                                Ver Projeto →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact-section" class="py-20 bg-pattern">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <h2
                    class="text-4xl md:text-5xl font-black mb-6 bg-gradient-to-r from-football-blue  bg-clip-text text-transparent gradient-animate ">
                    Vamos Conversar?
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-football-blue  mx-auto mb-8 gradient-animate">
                </div>
                <p class="text-lg mb-12 max-w-2xl mx-auto ">
                    Tem um projeto em mente? Vamos trocar uma ideia e transformar sua visão em realidade!
                </p>

                <div class="grid md:grid-cols-3 gap-8 mb-12">
                    <div
                        class="flex flex-col items-center p-6 bg-gray-900/50  rounded-xl border border-football-blue/20  hover:bg-gray-800/50  transition-all duration-300 pulse-glow ">
                        <div class="w-16 h-16 flex items-center justify-center mb-4 gradient-animate">
                            <img src="{{ asset('storage/logos/mail.gif') }}" alt="Email Logo" class="w-16 h-16 object-contain">
                        </div>
                        <h3 class="text-lg font-semibold text-white  mb-2">Email</h3>
                        <a href="mailto:vinicius1663.vg@gmail.com"
                            class="text-football-blue hover:text-football-yellow transition-colors hover:scale-105 inline-block">
                            vinicius1663.vg@gmail.com
                        </a>
                    </div>

                    <div
                        class="flex flex-col items-center p-6 bg-gray-900/50  rounded-xl border border-football-blue/20  hover:bg-gray-800/50  transition-all duration-300 pulse-glow ">
                        <div class="w-16 h-16 flex items-center justify-center mb-4 gradient-animate">
                            <img src="{{ asset('storage/logos/call.gif') }}" alt="Phone Logo" class="w-16 h-16 object-contain">
                        </div>
                        <h3 class="text-lg font-semibold text-white  mb-2">Telefone</h3>
                        <a href="tel:+5518997371998"
                            class="text-football-blue hover:text-football-yellow transition-colors hover:scale-105 inline-block">
                            +55 18 99737-1998
                        </a>
                    </div>

                    <div
                        class="flex flex-col items-center p-6 bg-gray-900/50  rounded-xl border border-football-blue/20  hover:bg-gray-800/50  transition-all duration-300 pulse-glow ">
                        <div class="w-16 h-16 flex items-center justify-center mb-4 gradient-animate">
                            <img src="{{ asset('storage/logos/feedback.gif') }}" alt="LinkedIn Logo" class="w-16 h-16 object-contain">
                        </div>
                        <h3 class="text-lg font-semibold text-white  mb-2">LinkedIn</h3>
                        <a href="https://www.linkedin.com/in/vinicius-goulart-gouveia-176497197/"
                            class="text-football-blue hover:text-football-yellow transition-colors hover:scale-105 inline-block">
                            /in/vinicius-goulart-gouveia-176497197/
                        </a>
                    </div>
                </div>

                <div class="bg-gray-900/50  rounded-xl p-8 border border-football-blue/20 ">
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <input type="text" placeholder="Seu Nome"
                                class="w-full px-4 py-3 bg-gray-800  border border-gray-600  rounded-lg text-white  placeholder-gray-400  focus:border-football-blue focus:outline-none">
                            <input type="email" placeholder="Seu Email"
                                class="w-full px-4 py-3 bg-gray-800  border border-gray-600  rounded-lg text-white  placeholder-gray-400  focus:border-football-blue focus:outline-none">
                        </div>
                        <input type="text" placeholder="Assunto"
                            class="w-full px-4 py-3 bg-gray-800  border border-gray-600  rounded-lg text-white  placeholder-gray-400  focus:border-football-blue focus:outline-none">
                        <textarea rows="5" placeholder="Sua Mensagem"
                            class="w-full px-4 py-3 bg-gray-800  border border-gray-600  rounded-lg text-white  placeholder-gray-400  focus:border-football-blue focus:outline-none resize-none"></textarea>
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-football-blue   hover:to-football-blue text-white font-semibold py-4 px-8 rounded-lg transition-all duration-300">
                            Enviar Mensagem
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="header-footer-bg-pattern py-12 border-t border-football-blue/20">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="text-2xl font-bold"> VINICIUS <span class="text-football-blue">GOULART</span></div>
                    <div class="text-gray-400 text-center md:text-right">
                        <p>&copy; 2025 Vinicius Goulart. Todos os direitos reservados.</p>
                        <p class="mt-2">Feito com ❤️ e muito ☕</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
