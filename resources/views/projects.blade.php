@extends('layouts.app')

@section('title', 'Projects | Nicholas F.')

@section('styles')
    <style>
        .bg-card {
            background-color: rgba(255, 255, 255, 0.1); 
            backdrop-filter: blur(20px); 
            border: 1px solid rgba(255, 255, 255, 0.6);
            box-shadow: 0 25px 50px rgba(255, 255, 255, 0.1);
            padding: 50px;
            border-radius: 10px;
        }
        @media (max-width: 640px) {
            .bg-card {
                padding: 10px;
            }
        }
        .arrow {
            position: fixed;
            top: 78vh;
            left: 50%;
            transform: translate(-50%, -50%);
            transform: rotate(0deg);
        }

        .arrow span {
            display: block;
            width: 1.5vw;
            height: 1.5vw;
            border-bottom: 5px solid #15803d;
            border-right: 5px solid #15803d;
            transform: rotate(45deg);
            animation: animate 2s infinite;
        }

        .arrow span:nth-child(2) {
            animation-delay: -0.2s;
        }

        .arrow span:nth-child(3) {
            animation-delay: -0.4s;
        }

        @keyframes animate {
            0% {
                opacity: 0;
                transform: rotate(45deg) translate(-20px, -20px);
            }
            50% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                transform: rotate(45deg) translate(20px, 20px);
            }
        }
    </style>
@endsection

@section('content')
<div id="smooth-wrapper">
    <div id="smooth-content">
    <div class="container mx-auto px-4 py-8">

        <div class="wrapper" id="smooth-wrapper">
            <div class="content" id="smooth-content">
            <section class="hero bg-cover section bg-center h-screen flex items-center justify-center">
                <div class="text-center">
                    <h1 class="text-xl sm:text-3xl font-bold text-neutral-500 mx-auto max-w-[30vw] sm:max-w-[70vw]" data-aos="zoom-out-down" data-aos-duration="2000">currently on 'projects' page</h1>
                    <h1 class="text-5xl sm:text-8xl font-bold mb-48 text-white max-w-[50vw] sm:max-w-[70vw]" data-aos="zoom-out-down" data-aos-duration="2000">Check out some of my <span class="text-green-500">favourite</span> projects</h1>
                </div>
                <div class="arrow">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </section>


        <div class="grid grid-cols-1  gap-8">
            <!-- Project Card 1 -->
            <div class="flex flex-col-reverse md:flex-row justify-between items-center bg-card rounded-lg mt-10" data-aos="flip-down" data-aos-duration="2000" >
                <div class="sm:ml-8 md:max-w-[50%] w-full">
                    <h1 class="text-white text-3xl md:text-4xl font-bold">01  - { EPICLAIR }</h1>
                        <span class="text-base md:text-lg text-neutral-300">
                            An international website for various competitions. I was entrusted to lead the IT division to build an attractive and functional website.
                        </span>
                    
            
                    <div class="mt-4 flex flex-wrap ">
                        <span class="bg-black bg-opacity-10 border-2 border-neutral-500 text-neutral-300 px-3 py-2 sm:mt-0 mr-1 sm:mr-4 rounded-full text-xs">Laravel</span>
                        <span class="bg-black bg-opacity-10 border-2 border-neutral-500 text-neutral-300 px-3 py-2 sm:mt-0 mr-1 sm:mr-4 rounded-full text-xs">Parallax JS</span>
                        <span class="bg-black bg-opacity-10 border-2 border-neutral-500 text-neutral-300 px-3 py-2 sm:mt-0 mr-1 sm:mr-4 rounded-full text-xs">phpMyAdmin</span>
                        <span class="bg-black bg-opacity-10 border-2 border-neutral-500 text-neutral-300 px-3 py-2 sm:mt-0 mr-1 sm:mr-4 rounded-full text-xs">Cpanel</span>
                    </div>
                </div>
                <div class="relative w-full md:w-auto sm:mr-8 mb-2 sm:mb-0">
                    <img src="{{ url('/images/epi-porto.png') }}" alt="Project 1" class="w-full h-48 object-cover rounded-lg">
                </div>
            </div>
            

            <!-- Project Card 2 -->
            <div class="flex flex-col-reverse md:flex-row justify-between items-center bg-card rounded-lg mt-10" data-aos="flip-down" data-aos-duration="2000" >
                <div class="sm:ml-8 md:max-w-[50%] w-full">
                    <h1 class="text-white text-3xl md:text-4xl font-bold">02  - { BEM PETRA STORE }</h1>
                        <span class="text-base md:text-lg text-neutral-300">
                            A Student Executive Board e-commerce front-end website for selling various apparel and merchandises for event committees
                        </span>
                    
            
                    <div class="mt-4 flex flex-wrap ">
                        <span class="bg-black bg-opacity-10 border-2 border-neutral-500 text-neutral-300 px-3 py-2 sm:mt-0 mr-1 sm:mr-4 rounded-full text-xs">React JS</span>
                        <span class="bg-black bg-opacity-10 border-2 border-neutral-500 text-neutral-300 px-3 py-2 sm:mt-0 mr-1 sm:mr-4 rounded-full text-xs">Vite</span>
                        <span class="bg-black bg-opacity-10 border-2 border-neutral-500 text-neutral-300 px-3 py-2 sm:mt-0 mr-1 sm:mr-4 rounded-full text-xs">Javascript</span>
                    </div>
                </div>
                <div class="relative w-full md:w-auto sm:mr-8 mb-2 sm:mb-0">
                    <img src="{{ url('/images/bps-porto.png') }}" alt="Project 1" class="w-full h-48 object-cover rounded-lg">
                </div>
            </div>
            

            <!-- Project Card 3 -->
            <div class="flex flex-col-reverse md:flex-row justify-between items-center bg-card rounded-lg mt-10" data-aos="flip-down" data-aos-duration="2000" >
                <div class="sm:ml-8 md:max-w-[50%] w-full">
                    <h1 class="text-white text-3xl md:text-4xl font-bold">03  - { Fusion Works }</h1>
                        <span class="text-base md:text-lg text-neutral-300">
                            An online exhibition websites that collaborating many artworks into one. This is me and my friend project for the Web Design Competition.
                        </span>
                    
            
                    <div class="mt-4 flex flex-wrap ">
                        <span class="bg-black bg-opacity-10 border-2 border-neutral-500 text-neutral-300 px-3 py-2 sm:mt-0 mr-1 sm:mr-4 rounded-full text-xs">React JS</span>
                        <span class="bg-black bg-opacity-10 border-2 border-neutral-500 text-neutral-300 px-3 py-2 sm:mt-0 mr-1 sm:mr-4 rounded-full text-xs">Vercel</span>
                        <span class="bg-black bg-opacity-10 border-2 border-neutral-500 text-neutral-300 px-3 py-2 sm:mt-0 mr-1 sm:mr-4 rounded-full text-xs">Javascript</span>
                    </div>
                </div>
                <div class="relative w-full md:w-auto sm:mr-8 mb-2 sm:mb-0">
                    <img src="{{ url('/images/fusion-porto.png') }}" alt="Project 1" class="w-full h-48 object-cover rounded-lg">
                </div>
            </div>

            <!-- Project Card 4 -->
            <div class="flex flex-col-reverse md:flex-row justify-between items-center bg-card rounded-lg mt-10" data-aos="flip-down" data-aos-duration="2000" >
                <div class="sm:ml-8 md:max-w-[50%] w-full">
                    <h1 class="text-white text-3xl md:text-4xl font-bold">04  - { Welcome Grateful Generation }</h1>
                        <span class="text-base md:text-lg text-neutral-300">
                            WGG is the new student orientation program at my university. I had the opportunity to design a rally webpage, marking my first experience.
                        </span>
                    
            
                    <div class="mt-4 flex flex-wrap ">
                        <span class="bg-black bg-opacity-10 border-2 border-neutral-500 text-neutral-300 px-3 py-2 sm:mt-0 mr-1 sm:mr-4 rounded-full text-xs">Codeigniter</span>
                        <span class="bg-black bg-opacity-10 border-2 border-neutral-500 text-neutral-300 px-3 py-2 sm:mt-0 mr-1 sm:mr-4 rounded-full text-xs">php</span>
                        <span class="bg-black bg-opacity-10 border-2 border-neutral-500 text-neutral-300 px-3 py-2 sm:mt-0 mr-1 sm:mr-4 rounded-full text-xs">Javascript</span>
                    </div>
                </div>
                <div class="relative w-full md:w-auto sm:mr-8 mb-2 sm:mb-0">
                    <img src="{{ url('/images/wgg-porto.png') }}" alt="Project 1" class="w-full h-48 object-cover rounded-lg">
                </div>
            </div>

            <!-- Project Card 5 -->
            <div class="flex flex-col-reverse md:flex-row justify-between items-center bg-card rounded-lg mt-10" data-aos="flip-down" data-aos-duration="2000" >
                <div class="sm:ml-8 md:max-w-[50%] w-full">
                    <h1 class="text-white text-3xl md:text-4xl font-bold">05  - { Bharatika }</h1>
                        <span class="text-base md:text-lg text-neutral-300">
                            Bharatika was established as a platform for young individuals to channel their aspirations and creativity through art and design.
                        </span>
                    
            
                    <div class="mt-4 flex flex-wrap ">
                        <span class="bg-black bg-opacity-10 border-2 border-neutral-500 text-neutral-300 px-3 py-2 sm:mt-0 mr-1 sm:mr-4 rounded-full text-xs">JQuery</span>
                        <span class="bg-black bg-opacity-10 border-2 border-neutral-500 text-neutral-300 px-3 py-2 sm:mt-0 mr-1 sm:mr-4 rounded-full text-xs">php native</span>
                        <span class="bg-black bg-opacity-10 border-2 border-neutral-500 text-neutral-300 px-3 py-2 sm:mt-0 mr-1 sm:mr-4 rounded-full text-xs">Javascript</span>
                    </div>
                </div>
                <div class="relative w-full md:w-auto sm:mr-8 mb-2 sm:mb-0">
                    <img src="{{ url('/images/bhara-porto.png') }}" alt="Project 1" class="w-full h-48 object-cover rounded-lg">
                </div>
            </div>

            <!-- Add more project cards as needed -->
        </div>
        
    </div>

    
    </div>
    
</div>
<footer class="bg-contact mt-20 text-white py-6">
    <div class="containerflex justify-center ">
        <h2 class="text-lg sm:text-4xl font-bold text-center mt-16 mb-1">nicholasfransisco09@gmail.com</h2>
        <p class="text-center text-xs mx-auto max-w-[60vw] sm:text-sm mb-16 text-gray-300">Send follow-up email for any question or inquiries!</p>
    </div>
    <div class="container mx-auto px-6 text-center flex content-center items-center justify-between flex-col sm:flex-row">
        <p class="my-auto">Nicholas F © 2024.</p>
        <div class="flex flex-col md:flex-row">
            <button class="youtube-button my-4 sm:my-0 align-middle">Instagram →</button>
            <button class="youtube-button my-4 sm:my-0 sm:mx-8 align-middle">Linked In →</button>
            <button class="youtube-button my-4 sm:my-0 align-middle">Github →</button>
        </div>
        <p class="my-auto">All Rights Reserved.</p>
    </div>
</footer>
@endsection

@section('script')
<script>

    gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

    ScrollTrigger.normalizeScroll(true)

    // create the smooth scroller FIRST!
    let smoother = ScrollSmoother.create({
    smooth: 2,
    effects: true,
    normalizeScroll: true,
    });

</script>
@endsection