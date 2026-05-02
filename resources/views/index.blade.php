@extends('layouts.app')

@section('content')
    @include('partials.header')

    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-white dark:bg-gray-900 pt-20">
        <div class="absolute inset-0 bg-gradient-to-br from-gray-50 via-white to-blue-50/30 dark:from-gray-900 dark:via-gray-900 dark:to-blue-950/30">
            <div class="absolute inset-0 bg-grid-pattern opacity-[0.02] dark:opacity-[0.05]"></div>
            <div class="absolute top-0 right-0 -mr-40 -mt-40 w-[600px] h-[600px] bg-gradient-to-br from-blue-400/20 to-indigo-400/20 rounded-full blur-3xl animate-pulse-slow"></div>
            <div class="absolute bottom-0 left-0 -ml-40 -mb-40 w-[500px] h-[500px] bg-gradient-to-tr from-indigo-400/20 to-purple-400/20 rounded-full blur-3xl animate-pulse-slow" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-blue-500 rounded-full animate-float opacity-40"></div>
            <div class="absolute top-1/3 right-1/3 w-2 h-2 bg-indigo-500 rounded-full animate-float opacity-40" style="animation-delay: 0.5s;"></div>
            <div class="absolute bottom-1/4 right-1/4 w-2 h-2 bg-purple-500 rounded-full animate-float opacity-40" style="animation-delay: 1s;"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 text-center relative z-10 py-20">
            <div class="inline-flex items-center space-x-2 bg-blue-50 dark:bg-blue-950 border border-blue-100 dark:border-blue-900 px-4 py-2 rounded-full mb-8 animate-fade-in text-blue-700 dark:text-blue-300">
                <span data-lucide="rocket" class="w-4 h-4"></span>
                <span>New Release: AI Integration Available</span>
            </div>
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-gray-900 dark:text-white leading-[1.05] mb-8 tracking-tight animate-slide-up">
                Elevate Your Digital Presence with Premier Solutions.
            </h1>
            <p class="text-lg md:text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto mb-12 leading-relaxed animate-slide-up" style="animation-delay: 100ms">
                We craft bespoke software, cutting-edge mobile applications, and robust web platforms designed to propel your business forward.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16 animate-slide-up" style="animation-delay: 200ms">
                <a href="#products" class="group w-full sm:w-auto bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-bold px-10 py-5 rounded-full hover:shadow-2xl hover:shadow-blue-500/50 transition-all hover:-translate-y-1 active:scale-95 text-lg relative overflow-hidden">
                    Explore Solutions
                    <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </a>
                <a href="#" class="w-full sm:w-auto bg-white dark:bg-gray-800 text-gray-900 dark:text-white border-2 border-gray-200 dark:border-gray-700 font-bold px-10 py-5 rounded-full hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 transition-all hover:-translate-y-1 active:scale-95 text-lg">
                    Get a Quote
                </a>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-6 md:gap-12 animate-fade-in" style="animation-delay: 300ms">
                <div class="flex items-center space-x-2 group cursor-default text-gray-700 dark:text-gray-200">
                    <div class="w-10 h-10 bg-blue-50 dark:bg-blue-950 rounded-full flex items-center justify-center group-hover:bg-blue-100 dark:group-hover:bg-blue-900 transition-colors">
                        <span data-lucide="shield-check" class="w-5 h-5 text-blue-600 dark:text-blue-400"></span>
                    </div>
                    <span>Verified Secure</span>
                </div>
                <div class="flex items-center space-x-2 group cursor-default text-gray-700 dark:text-gray-200">
                    <div class="w-10 h-10 bg-blue-50 dark:bg-blue-950 rounded-full flex items-center justify-center group-hover:bg-blue-100 dark:group-hover:bg-blue-900 transition-colors">
                        <span data-lucide="zap" class="w-5 h-5 text-indigo-600 dark:text-indigo-400"></span>
                    </div>
                    <span>Peak Performance</span>
                </div>
                <div class="flex items-center space-x-2 group cursor-default text-gray-700 dark:text-gray-200">
                    <div class="w-10 h-10 bg-blue-50 dark:bg-blue-950 rounded-full flex items-center justify-center group-hover:bg-blue-100 dark:group-hover:bg-blue-900 transition-colors">
                        <span data-lucide="life-buoy" class="w-5 h-5 text-purple-600 dark:text-purple-400"></span>
                    </div>
                    <span>Dedicated Support</span>
                </div>
                <div class="flex items-center space-x-2 group cursor-default text-gray-700 dark:text-gray-200">
                    <div class="w-10 h-10 bg-blue-50 dark:bg-blue-950 rounded-full flex items-center justify-center group-hover:bg-blue-100 dark:group-hover:bg-blue-900 transition-colors">
                        <span data-lucide="refresh-cw" class="w-5 h-5 text-green-600 dark:text-green-400"></span>
                    </div>
                    <span>Continuous Updates</span>
                </div>
            </div>
        </div>
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <span data-lucide="chevron-down" class="w-8 h-8 text-gray-400 dark:text-gray-600"></span>
        </div>
    </section>

    <section id="services" class="py-24 bg-gray-50/30 dark:bg-gray-900/30">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-xs font-bold text-blue-600 dark:text-blue-400 uppercase tracking-[0.3em] mb-4">Our Advantage</h2>
                <h3 class="text-4xl md:text-5xl font-black text-gray-900 dark:text-white tracking-tight">Unlocking Excellence: Why Visionaries Partner With Us.</h3>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-gray-800 p-8 rounded-3xl border border-gray-100 dark:border-gray-700 hover:shadow-xl dark:hover:shadow-gray-700 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-blue-50 dark:bg-blue-950 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 transition-colors duration-300">
                        <span data-lucide="lock" class="w-6 h-6 text-blue-600 dark:text-blue-400 group-hover:text-white"></span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Enterprise Security</h4>
                    <p class="text-gray-500 dark:text-gray-400 leading-relaxed">Our code undergoes rigorous security audits to ensure your data and your users' data are always protected by industry-standard encryption.</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-3xl border border-gray-100 dark:border-gray-700 hover:shadow-xl dark:hover:shadow-gray-700 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-indigo-50 dark:bg-indigo-950 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-indigo-600 transition-colors duration-300">
                        <span data-lucide="gauge" class="w-6 h-6 text-indigo-600 dark:text-indigo-400 group-hover:text-white"></span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Optimized Core</h4>
                    <p class="text-gray-500 dark:text-gray-400 leading-relaxed">Built for speed. Every solution we deliver is optimized for lighthouse performance, ensuring fast load times and better SEO.</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-8 rounded-3xl border border-gray-100 dark:border-gray-700 hover:shadow-xl dark:hover:shadow-gray-700 transition-all duration-300 group">
                    <div class="w-14 h-14 bg-purple-50 dark:bg-purple-950 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-purple-600 transition-colors duration-300">
                        <span data-lucide="code" class="w-6 h-6 text-purple-600 dark:text-purple-400 group-hover:text-white"></span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-4">Developer Friendly</h4>
                    <p class="text-gray-500 dark:text-gray-400 leading-relaxed">Clean, commented, and modular code. We follow industry best practices to make customization and scaling a breeze for your team.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="solutions" class="py-24 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-xs font-bold text-blue-600 dark:text-blue-400 uppercase tracking-[0.3em] mb-4">Our Core Services</h2>
                    <h3 class="text-4xl md:text-5xl font-black text-gray-900 dark:text-white tracking-tight mb-6">Comprehensive Digital Solutions for Unprecedented Growth.</h3>
                    <p class="text-lg text-gray-500 dark:text-gray-300 leading-relaxed mb-8">We don't just deliver products; we provide an end-to-end ecosystem for your business. From custom development to mobile dominance, we've got you covered.</p>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-50 dark:bg-blue-950 rounded-xl flex items-center justify-center flex-shrink-0">
                                <span data-lucide="layout-panel-left" class="w-6 h-6 text-blue-600 dark:text-blue-400"></span>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white">Custom Software Development</h4>
                                <p class="text-gray-500 dark:text-gray-400 mt-2">Tailor-made solutions built on modern frameworks to fit your exact business requirements.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-indigo-50 dark:bg-indigo-950 rounded-xl flex items-center justify-center flex-shrink-0">
                                <span data-lucide="smartphone" class="w-6 h-6 text-indigo-600 dark:text-indigo-400"></span>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white">Mobile App Development</h4>
                                <p class="text-gray-500 dark:text-gray-400 mt-2">Native-performance cross-platform apps, fully integrated with your web backend.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-purple-50 dark:bg-purple-950 rounded-xl flex items-center justify-center flex-shrink-0">
                                <span data-lucide="palette" class="w-6 h-6 text-purple-600 dark:text-purple-400"></span>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white">UI/UX Design</h4>
                                <p class="text-gray-500 dark:text-gray-400 mt-2">Award-winning interfaces that drive conversion and provide delight to your users.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-tr from-blue-100 to-purple-100 dark:from-blue-900/50 dark:to-purple-900/50 rounded-[3rem] transform rotate-3 scale-105 opacity-50 dark:opacity-30"></div>
                    <div class="relative bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700 rounded-[2.5rem] p-8 shadow-2xl dark:shadow-gray-700/50">
                        <div class="bg-gray-50 dark:bg-gray-950 rounded-2xl h-80 flex items-center justify-center overflow-hidden relative">
                            <div class="absolute inset-0 bg-grid-pattern opacity-50"></div>
                            <img src="https://picsum.photos/seed/expertise/800/600" alt="Our Expertise" class="relative z-10 w-full h-full object-cover rounded-2xl opacity-80">
                            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 z-20">
                                <div class="bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm px-4 py-2 rounded-full shadow-lg border border-gray-200 dark:border-gray-700 text-gray-700 dark:text-gray-200">
                                    Innovation & Growth
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 flex justify-between items-center">
                            <div>
                                <p class="text-3xl font-black text-gray-900 dark:text-white">250+</p>
                                <p class="text-sm font-bold text-gray-400 uppercase tracking-wide">Projects Delivered </p>
                            </div>
                            <div class="h-10 w-px bg-gray-100 dark:bg-gray-700"></div>
                            <div>
                                <p class="text-3xl font-black text-gray-900 dark:text-white">98%</p>
                                <p class="text-sm font-bold text-gray-400 uppercase tracking-wide">Client Retention</p>
                            </div>
                            <div class="h-10 w-px bg-gray-100 dark:bg-gray-700"></div>
                            <div>
                                <p class="text-3xl font-black text-gray-900 dark:text-white">24/7</p>
                                <p class="text-sm font-bold text-gray-400 uppercase tracking-wide">Expert Support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="products" class="py-24 bg-white dark:bg-gray-900" x-data="{ activeTab: 'all' }">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-xs font-bold text-blue-600 dark:text-blue-400 uppercase tracking-[0.3em] mb-4">Our Portfolio</h2>
                <h3 class="text-4xl md:text-5xl font-black text-gray-900 dark:text-white tracking-tight">Curated Innovations for Every Business Need.</h3>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-2 mb-12">
                <button @click="activeTab = 'all'" :class="activeTab === 'all' ? 'bg-blue-600 text-white shadow-lg shadow-blue-500/25' : 'bg-gray-50 text-gray-600 dark:bg-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600'" class="px-8 py-3 rounded-full text-sm font-bold transition-all duration-300">All Products</button>
                <button @click="activeTab = 'php'" :class="activeTab === 'php' ? 'bg-blue-600 text-white shadow-lg shadow-blue-500/25' : 'bg-gray-50 text-gray-600 dark:bg-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600'" class="px-8 py-3 rounded-full text-sm font-bold transition-all duration-300">Web Apps</button>
                <button @click="activeTab = 'apps'" :class="activeTab === 'apps' ? 'bg-blue-600 text-white shadow-lg shadow-blue-500/25' : 'bg-gray-50 text-gray-600 dark:bg-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600'" class="px-8 py-3 rounded-full text-sm font-bold transition-all duration-300">Mobile Apps</button>
                <button @click="activeTab = 'saas'" :class="activeTab === 'saas' ? 'bg-blue-600 text-white shadow-lg shadow-blue-500/25' : 'bg-gray-50 text-gray-600 dark:bg-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600'" class="px-8 py-3 rounded-full text-sm font-bold transition-all duration-300">SaaS Platforms</button>
                <button @click="activeTab = 'ui'" :class="activeTab === 'ui' ? 'bg-blue-600 text-white shadow-lg shadow-blue-500/25' : 'bg-gray-50 text-gray-600 dark:bg-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600'" class="px-8 py-3 rounded-full text-sm font-bold transition-all duration-300">UI/UX Kits</button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <template x-for="i in 3" :key="i">
                    <div x-show="activeTab === 'all' || (i === 1 && activeTab === 'php') || (i === 2 && activeTab === 'apps') || (i === 3 && activeTab === 'saas')" class="group bg-white dark:bg-gray-800 rounded-[2rem] border border-gray-100 dark:border-gray-700 overflow-hidden hover:shadow-2xl dark:hover:shadow-gray-700 transition-all duration-500 hover:-translate-y-2">
                        <div class="aspect-[59/30] relative overflow-hidden bg-gray-50 dark:bg-gray-900">
                            <img :src="`https://picsum.photos/seed/product${i}/800/400`" alt="Product Image" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute top-4 left-4 bg-white/90 dark:bg-gray-800/90 backdrop-blur px-3 py-1 rounded-full border border-white/20 dark:border-gray-700 shadow-sm text-gray-700 dark:text-gray-200 flex items-center space-x-1">
                                <span data-lucide="tag" class="w-4 h-4 text-blue-500"></span>
                                <span>Featured</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center space-x-2 mb-3 text-sm text-gray-500 dark:text-gray-400">
                                <span data-lucide="layers" class="w-4 h-4"></span>
                                <span>Category: Web App</span>
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                NextGen CRM Platform
                            </h4>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mb-6 leading-relaxed line-clamp-3">
                                A powerful, scalable CRM solution designed to streamline your customer relationships and boost sales efficiency.
                            </p>
                            <div class="flex items-center justify-between pt-6 border-t border-gray-50 dark:border-gray-700">
                                <div class="flex items-center space-x-1 text-2xl font-black text-gray-900 dark:text-white">
                                    <span data-lucide="dollar-sign" class="w-5 h-5"></span>
                                    <span>99.00</span>
                                </div>
                                <a href="#" class="bg-gray-900 dark:bg-gray-700 text-white font-bold px-6 py-3 rounded-xl hover:bg-blue-600 dark:hover:bg-blue-500 transition-all active:scale-95 shadow-lg shadow-gray-200 dark:shadow-gray-700 hover:shadow-blue-200 dark:hover:shadow-blue-900">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </section>

    @include('partials.footer')
@endsection
