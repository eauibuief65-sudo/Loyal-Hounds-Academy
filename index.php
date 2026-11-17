<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expert Dog Training Coaching | Loyal Hounds Academy</title>
    <meta name="description" content="Professional dog training coaching. Transform your dog's behavior with positive reinforcement. Book your free evaluation today.">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            500: '#14b8a6',
                            600: '#0d9488',
                            700: '#0f766e',
                            900: '#134e4a',
                        },
                        accent: {
                            500: '#f59e0b',
                            600: '#d97706',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .hero-overlay {
            background: linear-gradient(to right, rgba(15, 118, 110, 0.9) 0%, rgba(15, 118, 110, 0.6) 50%, rgba(0, 0, 0, 0.3) 100%);
        }
    </style>
</head>
<body class="text-gray-800 antialiased bg-gray-50 flex flex-col min-h-screen">

    <!-- Header / Navigation -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center">
                    <!-- Brand Logo -->
                    <a href="#" class="flex items-center gap-2">
                        <svg class="w-8 h-8 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                        </svg>
                        <span class="font-bold text-2xl tracking-tight text-gray-900">Loyal Hounds<span class="text-brand-600">.</span></span>
                    </a>
                </div>
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="#about" class="text-gray-600 hover:text-brand-600 font-medium transition-colors">About Us</a>
                    <a href="#services" class="text-gray-600 hover:text-brand-600 font-medium transition-colors">Services</a>
                    <a href="#testimonials" class="text-gray-600 hover:text-brand-600 font-medium transition-colors">Testimonials</a>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="hidden lg:block text-right">
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wider">Call for support</p>
                        <a href="tel:+15551234567" class="text-lg font-bold text-gray-900 hover:text-brand-600 transition-colors">(555) 123-4567</a>
                    </div>
                    <a href="#contact" class="bg-brand-600 hover:bg-brand-700 text-white px-6 py-2.5 rounded-full font-semibold transition-colors shadow-md shadow-brand-500/30">
                        Book Free Consult
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-gray-900 h-[600px] md:h-[700px] flex items-center">
        <!-- Background Image with Unsplash -->
        <div class="absolute inset-0 w-full h-full">
            <img src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?auto=format&fit=crop&w=1920&q=80" alt="Attentive dog looking at trainer" class="w-full h-full object-cover object-center" />
            <div class="absolute inset-0 hero-overlay"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="max-w-2xl text-white">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-500/20 border border-brand-400/30 backdrop-blur-sm mb-6">
                    <span class="flex h-2 w-2 rounded-full bg-accent-500"></span>
                    <span class="text-sm font-medium text-brand-100">Accepting New Dogs for 2027</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight mb-6 leading-tight">
                    Stop the Pulling.<br>End the Barking.<br><span class="text-accent-500">Enjoy Your Dog Again.</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-200 mb-8 font-light leading-relaxed max-w-xl">
                    Professional, positive-reinforcement coaching tailored to your dog's unique personality. Build an unbreakable bond and a peaceful home today.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="bg-accent-500 hover:bg-accent-600 text-white text-center px-8 py-4 rounded-lg font-bold text-lg transition-all transform hover:-translate-y-0.5 shadow-lg shadow-accent-500/40">
                        Claim Your Free Evaluation
                    </a>
                    <a href="#services" class="bg-white/10 hover:bg-white/20 backdrop-blur-md text-white text-center px-8 py-4 rounded-lg font-semibold text-lg transition-all border border-white/20">
                        View Our Programs
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Bar -->
    <div class="bg-brand-900 py-4 border-b border-brand-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                <div class="flex items-center justify-center gap-2 text-brand-50">
                    <svg class="w-5 h-5 text-accent-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-sm font-medium">Certified Trainers</span>
                </div>
                <div class="flex items-center justify-center gap-2 text-brand-50">
                    <svg class="w-5 h-5 text-accent-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-sm font-medium">Positive Reinforcement</span>
                </div>
                <div class="flex items-center justify-center gap-2 text-brand-50">
                    <svg class="w-5 h-5 text-accent-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-sm font-medium">Veterinarian Recommended</span>
                </div>
                <div class="flex items-center justify-center gap-2 text-brand-50">
                    <svg class="w-5 h-5 text-accent-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-sm font-medium">Guaranteed Results</span>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-1/2">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1548199973-03cce0bbc87b?auto=format&fit=crop&w=800&q=80" alt="Trainer rewarding a happy dog" class="w-full h-auto object-cover rounded-2xl" />
                        <div class="absolute bottom-0 left-0 bg-white p-6 rounded-tr-2xl">
                            <p class="text-4xl font-extrabold text-brand-600 mb-1">10+</p>
                            <p class="text-sm text-gray-600 font-semibold uppercase tracking-wide">Years Experience</p>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h2 class="text-brand-600 font-bold tracking-wide uppercase text-sm mb-2">About Loyal Hounds</h2>
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">We Speak Dog, So You Don't Have To.</h3>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        At Loyal Hounds Academy, we believe every dog wants to be a good boy or girl—they just need the right communication. Our methods are rooted entirely in science-based, positive reinforcement training.
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        We don't use fear or intimidation. Instead, we empower both you and your canine companion, building trust, mutual respect, and lifelong obedience that naturally integrates into your lifestyle.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="w-5 h-5 text-brand-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            </div>
                            <p class="ml-3 text-gray-700 font-medium">In-Home & Facility Training Options</p>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="w-5 h-5 text-brand-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            </div>
                            <p class="ml-3 text-gray-700 font-medium">Customized Plans for Behavioral Issues</p>
                        </li>
                        <li class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <svg class="w-5 h-5 text-brand-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            </div>
                            <p class="ml-3 text-gray-700 font-medium">Lifetime Support Community Access</p>
                        </li>
                    </ul>
                    <a href="#contact" class="inline-flex items-center text-brand-600 font-bold hover:text-brand-700 group">
                        Meet the Trainers 
                        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-brand-600 font-bold tracking-wide uppercase text-sm mb-2">Our Programs</h2>
                <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Training tailored to every stage of life.</h3>
                <p class="text-lg text-gray-600">From nipping puppies to reactive adults, our specialized programs address the root cause of behaviors to ensure lasting results.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow flex flex-col">
                    <img src="https://images.unsplash.com/photo-1591160690555-5debfba289f0?auto=format&fit=crop&w=600&q=80" alt="Cute golden retriever puppy" class="w-full h-48 object-cover" />
                    <div class="p-8 flex-1 flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900 mb-3">Puppy Foundations</h4>
                        <p class="text-gray-600 mb-6 flex-1">Set your pup up for success. We cover potty training, crate training, bite inhibition, and basic socialization critical for the first 6 months.</p>
                        <a href="#contact" class="text-brand-600 font-semibold hover:text-brand-800 transition-colors inline-flex items-center">
                            Learn More <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow flex flex-col relative">
                    <div class="absolute top-4 right-4 bg-accent-500 text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Most Popular</div>
                    <img src="https://images.unsplash.com/photo-1517849845537-4d257902454a?auto=format&fit=crop&w=600&q=80" alt="Dog doing obedience training" class="w-full h-48 object-cover" />
                    <div class="p-8 flex-1 flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900 mb-3">Obedience Mastery</h4>
                        <p class="text-gray-600 mb-6 flex-1">Achieve reliable recall, loose-leash walking, and steadfast stay commands, even under heavy real-world distractions.</p>
                        <a href="#contact" class="text-brand-600 font-semibold hover:text-brand-800 transition-colors inline-flex items-center">
                            Learn More <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-shadow flex flex-col">
                    <img src="https://images.unsplash.com/photo-1552053831-71594a27632d?auto=format&fit=crop&w=600&q=80" alt="Focused dog looking at owner" class="w-full h-48 object-cover" />
                    <div class="p-8 flex-1 flex flex-col">
                        <h4 class="text-xl font-bold text-gray-900 mb-3">Behavior Modification</h4>
                        <p class="text-gray-600 mb-6 flex-1">Compassionate intervention for reactivity, resource guarding, separation anxiety, and excessive fearfulness.</p>
                        <a href="#contact" class="text-brand-600 font-semibold hover:text-brand-800 transition-colors inline-flex items-center">
                            Learn More <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-brand-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-brand-300 font-bold tracking-wide uppercase text-sm mb-2">Success Stories</h2>
                <h3 class="text-3xl md:text-4xl font-bold mb-4">Don't just take our word for it.</h3>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Review 1 -->
                <div class="bg-brand-800 p-8 rounded-2xl border border-brand-700">
                    <div class="flex text-accent-500 mb-4">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <p class="text-brand-50 italic mb-6">"Our rescue mix, Buster, was incredibly leash reactive. Walking him was a nightmare. Within 4 weeks with Loyal Hounds, the transformation was unbelievable. He actually looks at me now instead of lunging. Life-changing!"</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-brand-600 flex items-center justify-center font-bold text-sm">SM</div>
                        <div>
                            <p class="font-bold text-white">Sarah Miller</p>
                            <p class="text-sm text-brand-300">Owner of Buster</p>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="bg-brand-800 p-8 rounded-2xl border border-brand-700">
                    <div class="flex text-accent-500 mb-4">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <p class="text-brand-50 italic mb-6">"Highly professional and deeply knowledgeable. They explained the 'why' behind the methods, which made me a better dog parent. The Puppy Foundations class gave our Golden a perfect start."</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-brand-600 flex items-center justify-center font-bold text-sm">DJ</div>
                        <div>
                            <p class="font-bold text-white">David J.</p>
                            <p class="text-sm text-brand-300">Owner of Cooper</p>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="bg-brand-800 p-8 rounded-2xl border border-brand-700 md:col-span-2 lg:col-span-1">
                    <div class="flex text-accent-500 mb-4">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    </div>
                    <p class="text-brand-50 italic mb-6">"Worth every penny. We thought we'd have to re-home our adopted German Shepherd due to aggression issues. Thanks to the team, she is now a calm, integrated part of our family."</p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-brand-600 flex items-center justify-center font-bold text-sm">EW</div>
                        <div>
                            <p class="font-bold text-white">Emily W.</p>
                            <p class="text-sm text-brand-300">Owner of Luna</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lead Capture Form Section -->
    <section id="contact" class="py-20 bg-white flex-1">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gray-50 rounded-3xl p-8 md:p-12 shadow-xl border border-gray-100">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Get Your Free Behavioral Assessment</h2>
                    <p class="text-gray-600">Fill out the form below, and a lead trainer will reach out within 24 hours to schedule your complimentary phone consultation.</p>
                </div>
                
                <form action="#" method="POST" class="space-y-6" onsubmit="event.preventDefault(); this.innerHTML='<div class=\'text-center py-10\'><h3 class=\'text-2xl font-bold text-brand-600 mb-2\'>Request Received!</h3><p class=\'text-gray-600\'>We will contact you shortly to schedule your assessment.</p></div>';">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">First Name *</label>
                            <input type="text" name="first_name" id="first_name" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-colors shadow-sm" placeholder="John">
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Last Name *</label>
                            <input type="text" name="last_name" id="last_name" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-colors shadow-sm" placeholder="Doe">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address *</label>
                            <input type="email" name="email" id="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-colors shadow-sm" placeholder="john@example.com">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number *</label>
                            <input type="tel" name="phone" id="phone" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-colors shadow-sm" placeholder="(555) 123-4567">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="dog_name" class="block text-sm font-medium text-gray-700 mb-1">Dog's Name</label>
                            <input type="text" name="dog_name" id="dog_name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-colors shadow-sm" placeholder="Rex">
                        </div>
                        <div>
                            <label for="dog_age" class="block text-sm font-medium text-gray-700 mb-1">Dog's Age / Breed</label>
                            <input type="text" name="dog_age" id="dog_age" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-colors shadow-sm" placeholder="2 Years / Lab Mix">
                        </div>
                    </div>

                    <div>
                        <label for="primary_issue" class="block text-sm font-medium text-gray-700 mb-1">What is the primary behavior you want to change? *</label>
                        <select id="primary_issue" name="primary_issue" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-500 focus:border-brand-500 transition-colors shadow-sm bg-white">
                            <option value="">Select an option...</option>
                            <option value="leash">Leash Pulling / Reactivity</option>
                            <option value="aggression">Aggression / Biting</option>
                            <option value="anxiety">Separation Anxiety / Fear</option>
                            <option value="puppy">Basic Puppy Training</option>
                            <option value="obedience">Basic Obedience / Recall</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <p class="text-xs text-gray-500 text-center">
                        By submitting this form, you agree to our <a href="#privacy" class="underline hover:text-brand-600">Privacy Policy</a> and consent to be contacted regarding dog training services.
                    </p>

                    <button type="submit" class="w-full bg-brand-600 hover:bg-brand-700 text-white font-bold py-4 px-8 rounded-lg shadow-lg shadow-brand-500/30 transition-colors transform hover:-translate-y-0.5 text-lg">
                        Submit & Request Call
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer - Google Ads Trust Signals Compliant -->
    <footer class="bg-gray-900 text-gray-400 py-12 border-t border-gray-800 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                
                <!-- Business Info -->
                <div class="col-span-1 md:col-span-2">
                    <a href="#" class="flex items-center gap-2 mb-4">
                        <svg class="w-6 h-6 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                        </svg>
                        <span class="font-bold text-xl text-white">Loyal Hounds<span class="text-brand-500">.</span></span>
                    </a>
                    <p class="mb-4 text-sm max-w-sm">Professional dog training and behavioral coaching committed to strengthening the bond between you and your dog through positive reinforcement.</p>
                    
                    <!-- Required Contact Trust Signals -->
                    <div class="space-y-2 text-sm">
                        <p class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-gray-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span>1234 Canine Way, Suite 100<br>Denver, CO 80202</span>
                        </p>
                        <p class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-gray-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <span>(555) 123-4567</span>
                        </p>
                        <p class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-gray-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <span>support@loyalhoundsacademy.com</span>
                        </p>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-white font-bold mb-4 uppercase text-sm tracking-wider">Programs</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#services" class="hover:text-brand-400 transition-colors">Puppy Foundations</a></li>
                        <li><a href="#services" class="hover:text-brand-400 transition-colors">Obedience Mastery</a></li>
                        <li><a href="#services" class="hover:text-brand-400 transition-colors">Behavior Modification</a></li>
                        <li><a href="#contact" class="hover:text-brand-400 transition-colors">Free Evaluation</a></li>
                    </ul>
                </div>

                <!-- Legal / Trust Signals -->
                <div id="privacy">
                    <h4 class="text-white font-bold mb-4 uppercase text-sm tracking-wider">Legal & Trust</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#privacy" class="hover:text-brand-400 transition-colors">Privacy Policy</a></li>
                        <li><a href="#privacy" class="hover:text-brand-400 transition-colors">Terms of Service</a></li>
                        <li><a href="#contact" class="hover:text-brand-400 transition-colors">Contact Us</a></li>
                        <li><a href="#about" class="hover:text-brand-400 transition-colors">About the Company</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="pt-8 border-t border-gray-800 text-sm text-center">
                <p>&copy; 2027 Loyal Hounds Academy LLC. All rights reserved. This site is not a part of the Google website or Google Inc. Additionally, this site is NOT endorsed by Google in any way.</p>
            </div>
        </div>
    </footer>

</body>
</html>
