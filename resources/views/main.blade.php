@extends('layouts.app')

@section('title', 'Portfolio | Nicholas F.')

{{-- I prefer using internal css instead of external ones --}}
@section('styles')
    <style type="text/css">

        .wrapper,
        .content {
        position: relative;
        width: 100%;
        z-index: 1;
        }

        .content .section {
        width: 100%;
        height: 100vh;
        }

        .image-container {
        width: 100%;
        height: 100vh;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: 2;
        perspective: 500px;
        overflow: hidden;
        }

        .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
        }

        .jobs {
        border-right: .05em solid;
        animation: caret 1s steps(1) infinite;
        }

        @keyframes caret {
        50% {
            border-color: transparent;
        }
        }

        
        h2 {
            font-family: fluro-light !important;
        }

        .bg-about {
            background-color: rgba(255, 255, 255, 0.1); 
            backdrop-filter: blur(20px); 
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.6);
            box-shadow: 0 25px 50px rgba(255, 255, 255, 0.1);
            margin: 5vh 10vw;
            padding: 50px 20px;
            border-radius: 10px;
        }

        .bg-ans {
            background-color: rgba(255, 255, 255, 0); 
            border: 1px solid #fff;
            border-radius: 10px;
            padding: 10px;
            color: #fff;
        }

        @media (max-width: 768px) {
            .bg-about {
                margin: 5vh 0;
            }
        }

        .text-about > p > div {
            font-size: 1.5rem;
            background: linear-gradient(
                to right,
                rgb(255, 255, 255) 50%,
                rgb(37, 37, 37) 50%
            );
            background-size: 200% 100%;
            background-position-x: 100%;
            color: transparent;
            background-clip: text;
            -webkit-background-clip: text;
            margin-left: 20px;
        }
        .image-about {
            object-position: center center;
            object-fit: cover;
            width: 270px;
            transition: 0.5s;
            border-radius: 10px;
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
      
    <body class="">

        <div class="wrapper" id="smooth-wrapper">
            <div class="content" id="smooth-content">
            <section class="hero bg-cover section bg-center h-screen flex items-center justify-center">
                <div class="text-center">
                    <div>
                    <h1 class="text-xl sm:text-3xl font-bold text-neutral-500 neon mx-auto max-w-[30vw] sm:max-w-[70vw]" data-aos="fade-down" data-aos-duration="3000">&lt; welcome &gt;</h1>
                    <h1 class="text-3xl sm:text-8xl font-bold text-white " data-aos="zoom-out-down" data-aos-duration="3000">Hi, I'm Nicholas, a</h1>
                    <h1 class="text-3xl sm:text-8xl font-bold   text-white  jobs inline-block" data-aos="zoom-out" data-aos-duration="3000">Fulltack</h1>
                    <p class="mt-8 mx-auto text-xs md:text-base text-gray-300 max-w-[45vw] md:w-[35vw]" data-aos="zoom-out-up" data-aos-duration="3000">I bring value to web development projects by merging technical expertise with creativity and aesthetics.</p>
                </div>
                <div class="arrow">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </section>
            
        
            

            <!-- Hero -->
            <section id="about" class="py-20 bg-about" data-aos="zoom-in-up" data-aos-duration="2000">
                <div class="container mx-auto px-6">
                    <h2 class="text-3xl  sm:text-7xl mb-8 text-white text-center">your <span class="text-green-500">website</span> artisan!</h2>
                    <div class="flex flex-col sm:flex-row justify-center items-center">
                        <div class="image-about-container sm:ml-16 mb-8 sm:mb-0">
                            <img class="image-about w-64 h-64 sm:w-80 sm:h-80 rounded-full" src="{{ url('/images/me.jpg') }}">
                        </div>
                        <div class="text-about sm:max-w-2xl sm:ml-8 text-left">
                            <p class="mt-4 text-sm sm:text-lg max-w-2xl about-paragraph leading-8  text-gray-300">
                                Starting as a curious learner, my enthusiasm for programming 
                                has grown from a simple curiosity into a deep commitment to 
                                mastering full-stack software engineering. I'm passionate
                                about both web design and mobile application development, where I
                                can bring my expertise in my front-end and back-end skills :D
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="projects" class="py-20 bg-about" data-aos="zoom-in-up" data-aos-duration="2000">
                <div class="container mx-auto px-6">
                    <h2 class="text-3xl sm:text-7xl mb-8 text-white text-center" >my fav <span class="text-green-500">projects</span> showcase</h2>
                    <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Project 1 -->
                        <div class="project  rounded-lg shadow-lg overflow-hidden">
                            <img src="{{ url('/images/epi-porto.png') }}" alt="Project 1" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h1 class="text-2xl font-bold text-white">EPICLAIR 2024</h1>
                                <p class="mt-2 text-base tracking-normal text-white">An international website for big various competition registration and brackets</p>
                            </div>
                        </div>
                        <!-- Project 2 -->
                        <div class="project  rounded-lg shadow-lg overflow-hidden">
                            <img src="{{ url('/images/bps-porto.png') }}" alt="Project 2" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h1 class="text-2xl font-bold text-white">BEM PETRA STORE</h1>
                                <p class="mt-2 text-base tracking-normal text-white">A Student Executive Board e-commerce website for selling apparel and merchandises</p>
                            </div>
                        </div>
                        <!-- Project 3 -->
                        <div class="project  rounded-lg shadow-lg overflow-hidden">
                            <img src="{{ url('/images/fusion-porto.png') }}" alt="Project 3" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h1 class="text-2xl font-bold text-white">Fusion Works</h1>
                                <p class="mt-2 text-base tracking-normal text-white">An online exhibition websites that supports and collaborating many artworks into one</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center mt-8">
                        <button class="transp-button  mx-auto  align-middle" onclick="location.href = '{{ url('projects') }}'">Show More →</button>
                    </div>
                </div>
            </section>

            <section id="contact" class="py-20 bg-about" data-aos="zoom-in-up" data-aos-duration="2000">
                <div class="container mx-auto px-6">
                    <h2 class="text-3xl sm:text-7xl mb-8 text-white text-center">feel free to <span class="text-green-500">contact</span> me</h2>
                    <form action="#" method="POST" class="mt-8 max-w-lg mx-auto">
                        <div class="mb-4">
                            <label for="name" class="block mb-3 text-white">Full Name</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 bg-ans border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 placeholder:italic placeholder:text-neutral-400" placeholder="Please enter your full name...">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block mb-3 text-white">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-4 py-2 bg-ans border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 placeholder:italic placeholder:text-neutral-400" placeholder="Please enter your personal email...">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block mb-3 text-white">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 bg-ans border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 placeholder:italic placeholder:text-neutral-400" placeholder="How can i help you with?"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-800">Send Message</button>
                    </form>
                </div>
            </section>

            
            <footer class="bg-contact mt-20 text-white py-6">
                <div class="containerflex justify-center ">
                    <h2 class="text-lg sm:text-4xl font-bold text-center mt-16 mb-1">nicholasfransisco09@gmail.com</h2>
                    <p class="text-center text-xs mx-auto max-w-[60vw] sm:text-sm mb-16 text-gray-300">Send follow-up email for any question or inquiries!</p>
                </div>
                <div class="container mx-auto px-6 text-center flex content-center items-center justify-between flex-col sm:flex-row">
                    <p class="my-auto">Nicholas F © 2024.</p>
                    <div class="flex flex-col md:flex-row">
                        <button class="transp-button my-4 sm:my-0 align-middle">Instagram →</button>
                        <button class="transp-button my-4 sm:my-0 sm:mx-8 align-middle">Linked In →</button>
                        <button class="transp-button my-4 sm:my-0 align-middle">Github →</button>
                    </div>
                    <p class="my-auto">All Rights Reserved.</p>
                </div>
            </footer>
            
            
            </div>
            
        </div>
    </body>
@endsection

@section('script')
{{-- about text --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {

        gsap.config({ trialWarn: false });
        console.clear();
        gsap.registerPlugin(ScrollTrigger, SplitText);
        const split = new SplitText(".about-paragraph", { type: "lines" });

        split.lines.forEach((target) => {
        gsap.to(target, {
            backgroundPositionX: 0,
            ease: "none",
            scrollTrigger: {
            trigger: target,
            scrub: 1,
            start: "top center",
            end: "bottom center"
            }
        });

        });

        
    });
</script>
    <!-- GSAP Animations -->
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
    {{-- Text animation --}}
    <script>
        document.addEventListener('DOMContentLoaded',function(event){
        // array with texts to type in typewriter
        var dataText = [ "Fullstack Web Developer", "Quality Assurance", "Mobile Apps Developer", "Cloud Enthusiast", "Fullstack Web Developer"];
        
        // type one text in the typwriter
        // keeps calling itself until the text is finished
        function typeWriter(text, i, fnCallback) {
            // chekc if text isn't finished yet
            if (i < (text.length)) {
            // add next character to h1
            document.querySelector(".jobs").innerHTML = text.substring(0, i+1) +'<span aria-hidden="true"></span>';

            // wait for a while and call this function again for next character
            setTimeout(function() {
                typeWriter(text, i + 1, fnCallback)
            }, 100);
            }
            // text finished, call callback if there is a callback function
            else if (typeof fnCallback == 'function') {
            // call callback after timeout
            setTimeout(fnCallback, 700);
            }
        }
        // start a typewriter animation for a text in the dataText array
        function StartTextAnimation(i) {
            if (typeof dataText[i] == 'undefined'){
                setTimeout(function() {
                StartTextAnimation(0);
                }, 20000);
            }
            // check if dataText[i] exists
            if (i < dataText[i].length) {
            // text exists! start typewriter animation
            typeWriter(dataText[i], 0, function(){
            // after callback (and whole text has been animated), start next text
            StartTextAnimation(i + 1);
            });
            }
        }
        // start the text animation
        StartTextAnimation(0);
        });
    </script>
@endsection
