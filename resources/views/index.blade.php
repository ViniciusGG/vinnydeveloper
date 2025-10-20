@extends('layouts.app')

@section('content')
    <!-- Header -->
    <header class="header-footer-bg-pattern backdrop-blur-sm fixed w-full top-0 z-50 border-b border-football-blue/20">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold"> VINICIUS <span class="text-football-blue">GOULART</span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#hero-section"
                        class="text-gray-300 hover:text-football-blue transition-colors duration-300">INÍCIO</a>
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
                    <img src="{{ asset('storage/images/me.png') }}" alt="Vinicius Goulart"
                        class="w-full h-auto object-cover mt-20 md:mt-0">
                </div>

                <div class="order-2 lg:order-1 max-w-4xl text-center lg:text-left">
                    <div class="mb-8">
                        <span
                            class="text-2xl md:text-4xl font-bold mb-6 bg-gradient-to-r from-white via-football-blue  bg-clip-text text-transparent gradient-animate">
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
                        <a href="#projects-section"
                            class="bg-gradient-to-r from-football-blue to-green-600 hover:from-green-600 hover:to-football-blue text-white font-semibold py-3 px-6 lg:py-2 lg:px-8 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg pulse-glow gradient-animate text-center">
                            Ver Projetos
                        </a>
                        <a href="#contact-section"
                            class="border-2 border-football-blue text-football-blue hover:bg-football-blue hover:text-white font-semibold py-3 px-6 lg:py-2 lg:px-8 rounded-lg transition-all duration-300 gradient-animate text-center">
                            Entrar em Contato
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about-section" class="md:py-20 py-10 bg-pattern">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="relative ">
                        <div class="rounded-2xl overflow-hidden">
                            <img src="{{ asset('storage/images/about-me.png') }}" alt="Vinicius Goulart"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="space-y-6">
                        <h3 class="text-4xl font-bold text-white mb-4">
                            Sobre Mim
                        </h3>
                        <p class="leading-relaxed md:text-2xl text-lg">
                            Olá! Sou Vinicius Goulart, desenvolvedor full stack com mais de 6 de experiência.
                            <br>
                            Acredito que o trabalho em equipe e a estratégia são fundamentais
                            para alcançar grandes resultados, fazendo uso de tecnologias como
                        </p>
                        <div class="grid grid-cols-4 gap-6 mt-6">
                            <!-- Docker -->
                            <div class="group relative flex flex-col items-center">
                                <div
                                    class="bg-[#1e242a] rounded-2xl w-24 h-10 mt-5 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                </div>
                                <img src="{{ asset('storage/logos/docker.svg') }}" alt="Docker Logo"
                                    class="absolute -top-4 w-16 h-20 object-contain transition-transform duration-300 group-hover:scale-110" />
                            </div>

                            <!-- PHP -->
                            <div class="group relative flex flex-col items-center">
                                <div
                                    class="bg-[#1e242a] rounded-2xl w-24 h-10 mt-5 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                </div>
                                <img src="{{ asset('storage/logos/php.svg') }}" alt="PHP Logo"
                                    class="absolute -top-4 w-18 h-20 object-contain transition-transform duration-300 group-hover:scale-110" />
                            </div>
                            <!-- Laravel -->
                            <div class="group relative flex flex-col items-center">
                                <div
                                    class="bg-[#1e242a] rounded-2xl w-24 h-10 mt-5 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                </div>
                                <img src="{{ asset('storage/logos/laravel.svg') }}" alt="Laravel Logo"
                                    class="absolute -top-4 w-16 h-20 object-contain transition-transform duration-300 group-hover:scale-110" />
                            </div>
                            <!-- Shopify -->
                            <div class="group relative flex flex-col items-center">
                                <div
                                    class="bg-[#1e242a] rounded-2xl w-24 h-10 mt-5 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                </div>
                                <img src="{{ asset('storage/logos/shopify.svg') }}" alt="Shopify Logo"
                                    class="absolute -top-4 w-16 h-20 object-contain transition-transform duration-300 group-hover:scale-110" />
                            </div>
                            <!-- WordPress -->
                            <div class="group relative flex flex-col items-center">
                                <div
                                    class="bg-[#1e242a] rounded-2xl w-24 h-10 mt-5 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                </div>
                                <img src="{{ asset('storage/logos/wordpress.svg') }}" alt="WordPress Logo"
                                    class="absolute -top-4 w-16 h-20 object-contain transition-transform duration-300 group-hover:scale-110" />
                            </div>
                            <!-- Vue -->
                            <div class="group relative flex flex-col items-center">
                                <div
                                    class="bg-[#1e242a] rounded-2xl w-24 h-10 mt-5 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                </div>
                                <img src="{{ asset('storage/logos/vuejs.svg') }}" alt="Vue Logo"
                                    class="absolute -top-4 w-16 h-20 object-contain transition-transform duration-300 group-hover:scale-110" />
                            </div>
                            <!-- Git -->
                            <div class="group relative flex flex-col items-center">
                                <div
                                    class="bg-[#1e242a] rounded-2xl w-24 h-10 mt-5 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                </div>
                                <img src="{{ asset('storage/logos/git.svg') }}" alt="Git Logo"
                                    class="absolute -top-4 w-16 h-20 object-contain transition-transform duration-300 group-hover:scale-110" />
                            </div>
                            <!-- MySQL -->
                            <div class="group relative flex flex-col items-center">
                                <div
                                    class="bg-[#1e242a] rounded-2xl w-24 h-10 mt-5 shadow-lg group-hover:shadow-xl transition-all duration-300">
                                </div>
                                <img src="{{ asset('storage/logos/mysql.svg') }}" alt="MySQL Logo"
                                    class="absolute -top-4 w-28 h-20 object-contain transition-transform duration-300 group-hover:scale-110" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects-section" class="md:py-20 py-10 bg-pattern">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16 ">
                    <h2
                        class="text-4xl md:text-5xl font-black mb-6 bg-gradient-to-r from-football-blue bg-clip-text text-transparent gradient-animate">
                        Meus Projetos
                    </h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-football-blue mx-auto mb-8 gradient-animate">
                    </div>
                    <p class="text-lg max-w-2xl mx-auto ">
                        Alguns dos meus trabalhos mais recentes e desafiadores
                    </p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse($projects as $project)
                    <div
                        class="bg-gray-800/50  rounded-xl overflow-hidden border border-gray-200 hover:border-football-blue/40  transition-all duration-300 group shadow-lg hover:shadow-xl card-hover ">
                        <div
                            class="aspect-video bg-white flex items-center justify-center gradient-animate">
                            @if($project->image)
                                <img src="{{ asset('storage/images/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-contain">
                            @else
                                <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🚀</span>
                            @endif
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-3 group-hover:text-football-blue transition-colors">
                                {{ $project->title }}</h3>
                            <p class="mb-4 leading-relaxed">
                                {{ $project->description }}
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                @foreach($project->technologies as $tech)
                                <span
                                    class="px-3 py-1 bg-football-blue/20  text-football-blue rounded-full text-sm hover:bg-football-blue/30 transition-colors">{{ $tech }}</span>
                                @endforeach
                            </div>
                            @if($project->link)
                            <a href="{{ $project->link }}" target="_blank"
                                class="text-football-blue hover:text-football-yellow transition-colors font-semibold group-hover:translate-x-2 inline-block">
                                Ver Projeto →
                            </a>
                            @endif
                        </div>
                    </div>
                    @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-400 text-lg">Nenhum projeto encontrado.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact-section" class="md:py-20 py-10 bg-pattern">
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
                    <a class="flex flex-col items-center p-6 bg-gray-900/50  rounded-xl border border-football-blue/20  hover:bg-gray-800/50  transition-all duration-300 pulse-glow "
                        href="mailto:vinicius1663.vg@gmail.com" target="_blank">
                        <div class="w-16 h-16 flex items-center justify-center mb-4 gradient-animate">
                            <img src="{{ asset('storage/logos/mail.gif') }}" alt="Email Logo"
                                class="w-16 h-16 object-contain">
                        </div>
                        <h3 class="text-lg font-semibold text-white  mb-2">Email</h3>
                        <div class="text-football-blue hover:text-football-yellow transition-colors inline-block">
                            vinicius1663.vg@gmail.com
                        </div>
                    </a>

                    <a class="flex flex-col items-center p-6 bg-gray-900/50  rounded-xl border border-football-blue/20  hover:bg-gray-800/50  transition-all duration-300 pulse-glow "
                        href="tel:+5518997371998" target="_blank">
                        <div class="w-16 h-16 flex items-center justify-center mb-4 gradient-animate">
                            <img src="{{ asset('storage/logos/call.gif') }}" alt="Phone Logo"
                                class="w-16 h-16 object-contain">
                        </div>
                        <h3 class="text-lg font-semibold text-white  mb-2">Telefone</h3>
                        <div class="text-football-blue hover:text-football-yellow transition-colors inline-block">
                            +55 18 99737-1998
                        </div>
                    </a>

                    <a class="flex flex-col items-center p-6 bg-gray-900/50  rounded-xl border border-football-blue/20  hover:bg-gray-800/50  transition-all duration-300 pulse-glow "
                        href="https://www.linkedin.com/in/vinicius-goulart-gouveia-176497197/" target="_blank">
                        <div class="w-16 h-16 flex items-center justify-center mb-4 gradient-animate">
                            <img src="{{ asset('storage/logos/feedback.gif') }}" alt="LinkedIn Logo"
                                class="w-16 h-16 object-contain">
                        </div>
                        <h3 class="text-lg font-semibold text-white  mb-2">LinkedIn</h3>
                        <div class="text-football-blue hover:text-football-yellow transition-colors inline-block">
                            /in/vinicius-goulart-gouveia-176497197/
                        </div>
                    </a>

                </div>

                <div class="bg-gray-900/50  rounded-xl p-8 border border-football-blue/20 ">
                    <form id="contactForm" class="space-y-6">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="relative">
                                <input id="name" name="name" type="text" autocomplete="name" required
                                    class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-white bg-gray-800 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " />
                                <label for="name"
                                    class="absolute text-sm text-white duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">
                                    Seu Nome
                                </label>
                            </div>

                            <div class="relative">
                                <input id="email" name="email" type="email" autocomplete="email" required
                                    class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-white bg-gray-800 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                    placeholder=" " />
                                <label for="email"
                                    class="absolute text-sm text-white duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">
                                    Seu Email
                                </label>
                            </div>
                        </div>

                        <div class="relative">
                            <input id="subject" name="subject" type="text" autocomplete="off" required
                                class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-white bg-gray-800 border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " />
                            <label for="subject"
                                class="absolute text-sm text-white duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">
                                Assunto
                            </label>
                        </div>

                        <div class="relative">
                            <textarea id="message" name="message" rows="5" autocomplete="off" placeholder=" " required
                                class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-white bg-gray-800/50 backdrop-blur-md border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer resize-none"></textarea>
                            <label for="message"
                                class="absolute text-sm text-white duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 
                                        peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                        peer-focus:scale-75 peer-focus:-translate-y-4 peer-focus:text-blue-500 
                                        backdrop-blur-md bg-gray-800/30 px-1 rounded-sm">
                                Sua mensagem
                            </label>
                        </div>

                        <button type="submit" id="submitBtn"
                            class="w-full bg-gradient-to-r from-football-blue hover:to-football-blue text-white font-semibold py-4 px-8 rounded-lg transition-all duration-300">
                            <span id="submitText">Enviar Mensagem</span>
                            <span id="loadingText" class="hidden">Enviando...</span>
                        </button>
                        
                        <!-- Mensagem de feedback -->
                        <div id="formMessage" class="hidden mt-4 text-sm text-center"></div>
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

    <script>
        const form = document.getElementById('contactForm');
        const formMessage = document.getElementById('formMessage');
        const submitBtn = document.getElementById('submitBtn');
        const submitText = document.getElementById('submitText');
        const loadingText = document.getElementById('loadingText');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            formMessage.classList.add('hidden');
            document.querySelectorAll('.error-text').forEach(el => el.remove());

            submitBtn.disabled = true;
            submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
            submitText.classList.add('hidden');
            loadingText.classList.remove('hidden');

            const formData = new FormData(form);

            try {
                const response = await fetch('{{ route("contact.store") }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    }
                });

                const data = await response.json();

                if (data.success) {
                    formMessage.textContent = data.message;
                    formMessage.className = 'text-green-400 mt-4 text-sm text-center';
                    formMessage.classList.remove('hidden');
                    form.reset();
                } else if (data.errors) {
                    Object.entries(data.errors).forEach(([field, messages]) => {
                        const input = form.querySelector(`[name="${field}"]`);
                        if (input) {
                            const error = document.createElement('p');
                            error.textContent = messages[0];
                            error.className = 'error-text text-red-400 text-sm mt-1';
                            input.closest('.relative').appendChild(error);
                        }
                    });
                } else {
                    formMessage.textContent = data.message || 'Erro ao enviar mensagem.';
                    formMessage.className = 'text-red-400 mt-4 text-sm text-center';
                    formMessage.classList.remove('hidden');
                }
            } catch (error) {
                console.error(error);
                formMessage.textContent = 'Erro ao enviar mensagem. Tente novamente.';
                formMessage.className = 'text-red-400 mt-4 text-sm text-center';
                formMessage.classList.remove('hidden');
            } finally {
                submitBtn.disabled = false;
                submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                submitText.classList.remove('hidden');
                loadingText.classList.add('hidden');
            }
        });
    </script>
@endsection
