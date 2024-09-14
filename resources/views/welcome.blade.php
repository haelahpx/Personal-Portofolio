<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <script>
        if (
            localStorage.getItem('color-theme') === 'dark' ||
            (!('color-theme' in localStorage) &&
                window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
        var themeToggleBtn = document.getElementById('theme-toggle');

        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        themeToggleBtn.addEventListener('click', function() {
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
        });
    });

    $(document).ready(function() {
        $("#btnBack").click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
        });
        $("#btnAbout").click(function() {
            $('html, body').animate({
                scrollTop: 845
            }, 800);
        });
        $("#btnProject").click(function() {
            $('html, body').animate({
                scrollTop: 1600
            }, 800);
        });
        $("#btnContact").click(function() {
            $('html, body').animate({
                scrollTop: 3050
            }, 800);
        });
        $("#scrollup").click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const words = ["Hello, World!", "Website Developer", "This is my Portofolio."];
        let i = 0;
        let j = 0;
        let currentWord = "";
        let isDeleting = false;

        function type() {
            currentWord = words[i];
            const typewriterElement = document.getElementById("typewriter");
            typewriterElement.textContent = currentWord.substring(0, j);

            typewriterElement.style.width = `${typewriterElement.scrollWidth}px`;

            if (isDeleting) {
                j--;
                if (j == 0) {
                    isDeleting = false;
                    i++;
                    if (i == words.length) {
                        i = 0;
                    }
                }
            } else {
                j++;
                if (j == currentWord.length) {
                    isDeleting = true;
                }
            }
            setTimeout(type, 100);
        }

        type();
    });
</script>




@vite('resources/css/app.css')
<nav class="bg-slate-300 border-gray-200 dark:bg-black sticky top-0 z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a id="btnBack" class="cursor-pointer flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">haiʞall.</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false" onclick="document.getElementById('navbar-default').classList.toggle('hidden');">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="bg-slate-300 font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 dark:bg-black dark:border-gray-700">
                <li>
                    <a id="btnAbout" class="block py-2 px-3 rounded hover:bg-gray-100 dark:hover:bg-gray-700 text-black dark:text-white md:hover:text-blue-700 md:dark:hover:text-blue-400">About</a>
                </li>
                <li>
                    <a id="btnProject" class="block py-2 px-3 rounded hover:bg-gray-100 dark:hover:bg-gray-700 text-black dark:text-white md:hover:text-blue-700 md:dark:hover:text-blue-400">Project</a>
                </li>
                <li>
                    <a id="btnContact" class="block py-2 px-3 rounded hover:bg-gray-100 dark:hover:bg-gray-700 text-black dark:text-white md:hover:text-blue-700 md:dark:hover:text-blue-400">Contact</a>
                </li>
                <button
                    id="theme-toggle"
                    type="button"
                    class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                    <svg
                        id="theme-toggle-dark-icon"
                        class="w-5 h-5 hidden"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg
                        id="theme-toggle-light-icon"
                        class="w-5 h-5 hidden"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </ul>
        </div>
    </div>
</nav>

<body class="dark:bg-slate-900 bg-white">
    <div data-aos="fade-right" class="relative flex items-center justify-between  p-6">
        <div class="relative flex flex-col-reverse lg:flex-row">
            <div class="text-white z-10 lg:pt-48 p-4 lg:w-1/2">
                <div class="relative inline-block overflow-hidden text-gray-400 dark:text-gray-400">
                    <h1 id="typewriter" class="text-sm font-bold whitespace-nowrap"></h1>
                </div>
                <p class="text-5xl font-bold typing text-black dark:text-white">Hɘllo i'am Haikal</p>
                <p class="text-gray-500 dark:text-gray-400 py-6">
                    <a class="font-semibold text-gray-900 underline dark:text-white decoration-blue-500">
                        This portfolio website,
                    </a>
                    crafted with a focus on clean design and functionality, showcases my journey as an
                    Information Technology student at President University.
                    <a class="font-semibold text-gray-900 underline dark:text-white decoration-indigo-500">
                        Through this platform,
                    </a>
                    I aim to highlight my skills, projects, and dedication to the ever-evolving field of IT.
                    It serves as a hub for my work, reflecting both my technical abilities and passion for innovation.
                </p>

                <div class=" w-full h-auto py-8 flex items-center justify-center gap-2 flex-wrap">
                    <a href="https://www.instagram.com/mhmdhaikalll._/" target="_blank"
                        class="p-2 hover:scale-110 bg-white rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500 hover:border-gray-100 hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 71 72"
                            fill="none">
                            <path
                                d="M27.3762 35.7808C27.3762 31.1786 31.1083 27.4468 35.7132 27.4468C40.3182 27.4468 44.0522 31.1786 44.0522 35.7808C44.0522 40.383 40.3182 44.1148 35.7132 44.1148C31.1083 44.1148 27.3762 40.383 27.3762 35.7808ZM22.8683 35.7808C22.8683 42.8708 28.619 48.618 35.7132 48.618C42.8075 48.618 48.5581 42.8708 48.5581 35.7808C48.5581 28.6908 42.8075 22.9436 35.7132 22.9436C28.619 22.9436 22.8683 28.6908 22.8683 35.7808ZM46.0648 22.4346C46.0646 23.0279 46.2404 23.608 46.5701 24.1015C46.8997 24.595 47.3684 24.9797 47.9168 25.2069C48.4652 25.4342 49.0688 25.4939 49.6511 25.3784C50.2334 25.2628 50.7684 24.9773 51.1884 24.5579C51.6084 24.1385 51.8945 23.6041 52.0105 23.0222C52.1266 22.4403 52.0674 21.8371 51.8404 21.2888C51.6134 20.7406 51.2289 20.2719 50.7354 19.942C50.2418 19.6122 49.6615 19.436 49.0679 19.4358H49.0667C48.2708 19.4361 47.5077 19.7522 46.9449 20.3144C46.3821 20.8767 46.0655 21.6392 46.0648 22.4346ZM25.6072 56.1302C23.1683 56.0192 21.8427 55.6132 20.9618 55.2702C19.7939 54.8158 18.9606 54.2746 18.0845 53.4002C17.2083 52.5258 16.666 51.6938 16.2133 50.5266C15.8699 49.6466 15.4637 48.3214 15.3528 45.884C15.2316 43.2488 15.2073 42.4572 15.2073 35.781C15.2073 29.1048 15.2336 28.3154 15.3528 25.678C15.4639 23.2406 15.8731 21.918 16.2133 21.0354C16.668 19.8682 17.2095 19.0354 18.0845 18.1598C18.9594 17.2842 19.7919 16.7422 20.9618 16.2898C21.8423 15.9466 23.1683 15.5406 25.6072 15.4298C28.244 15.3086 29.036 15.2844 35.7132 15.2844C42.3904 15.2844 43.1833 15.3106 45.8223 15.4298C48.2612 15.5408 49.5846 15.9498 50.4677 16.2898C51.6356 16.7422 52.4689 17.2854 53.345 18.1598C54.2211 19.0342 54.7615 19.8682 55.2161 21.0354C55.5595 21.9154 55.9658 23.2406 56.0767 25.678C56.1979 28.3154 56.2221 29.1048 56.2221 35.781C56.2221 42.4572 56.1979 43.2466 56.0767 45.884C55.9656 48.3214 55.5573 49.6462 55.2161 50.5266C54.7615 51.6938 54.2199 52.5266 53.345 53.4002C52.4701 54.2738 51.6356 54.8158 50.4677 55.2702C49.5872 55.6134 48.2612 56.0194 45.8223 56.1302C43.1855 56.2514 42.3934 56.2756 35.7132 56.2756C29.033 56.2756 28.2432 56.2514 25.6072 56.1302ZM25.4001 10.9322C22.7371 11.0534 20.9174 11.4754 19.3282 12.0934C17.6824 12.7316 16.2892 13.5878 14.897 14.977C13.5047 16.3662 12.6502 17.7608 12.0116 19.4056C11.3933 20.9948 10.971 22.8124 10.8497 25.4738C10.7265 28.1394 10.6982 28.9916 10.6982 35.7808C10.6982 42.57 10.7265 43.4222 10.8497 46.0878C10.971 48.7494 11.3933 50.5668 12.0116 52.156C12.6502 53.7998 13.5049 55.196 14.897 56.5846C16.289 57.9732 17.6824 58.8282 19.3282 59.4682C20.9204 60.0862 22.7371 60.5082 25.4001 60.6294C28.0687 60.7506 28.92 60.7808 35.7132 60.7808C42.5065 60.7808 43.3592 60.7526 46.0264 60.6294C48.6896 60.5082 50.5081 60.0862 52.0983 59.4682C53.7431 58.8282 55.1373 57.9738 56.5295 56.5846C57.9218 55.1954 58.7745 53.7998 59.4149 52.156C60.0332 50.5668 60.4575 48.7492 60.5768 46.0878C60.698 43.4202 60.7262 42.57 60.7262 35.7808C60.7262 28.9916 60.698 28.1394 60.5768 25.4738C60.4555 22.8122 60.0332 20.9938 59.4149 19.4056C58.7745 17.7618 57.9196 16.3684 56.5295 14.977C55.1395 13.5856 53.7431 12.7316 52.1003 12.0934C50.5081 11.4754 48.6894 11.0514 46.0284 10.9322C43.3612 10.811 42.5085 10.7808 35.7152 10.7808C28.922 10.7808 28.0687 10.809 25.4001 10.9322Z"
                                fill="#111827" />
                        </svg></a>
                    <a href="https://www.linkedin.com/in/mhmdhaikalll/" target="_blank"
                        class="p-2 hover:scale-110 bg-white rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500 hover:border-gray-100 hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 72 72"
                            fill="none">
                            <path
                                d="M24.7612 55.999V28.3354H15.5433V55.999H24.7621H24.7612ZM20.1542 24.5591C23.3679 24.5591 25.3687 22.4348 25.3687 19.7801C25.3086 17.065 23.3679 15 20.2153 15C17.0605 15 15 17.065 15 19.7799C15 22.4346 17.0001 24.5588 20.0938 24.5588H20.1534L20.1542 24.5591ZM29.8633 55.999H39.0805V40.5521C39.0805 39.7264 39.1406 38.8985 39.3841 38.3088C40.0502 36.6562 41.5668 34.9455 44.1138 34.9455C47.4484 34.9455 48.7831 37.4821 48.7831 41.2014V55.999H58V40.1376C58 31.6408 53.4532 27.6869 47.3887 27.6869C42.4167 27.6869 40.233 30.4589 39.0198 32.347H39.0812V28.3364H29.8638C29.9841 30.9316 29.8631 56 29.8631 56L29.8633 55.999Z"
                                fill="#111827" />
                        </svg></a>
                    <a href="mailto:iniapa954@gmail.com" target="_blank"
                        class="p-2 hover:scale-110 bg-white rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500 hover:border-gray-100 hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 72 72"
                            fill="none">
                            <path
                                d="M11.9362 56.1235H20.4189V35.5227L8.30078 26.434V52.4881C8.30078 54.4997 9.93067 56.1235 11.9362 56.1235Z"
                                fill="#111827" />
                            <path
                                d="M49.5025 56.1235H57.9853C59.9969 56.1235 61.6207 54.4936 61.6207 52.4881V26.434L49.5025 35.5227"
                                fill="#111827" />
                            <path
                                d="M49.5025 19.7693V35.5227L61.6207 26.434V21.587C61.6207 17.0912 56.4887 14.5282 52.8956 17.2245"
                                fill="#111827" />
                            <path d="M20.4189 35.5227V19.769L34.9607 30.6754L49.5025 19.7693V35.5227L34.9607 46.429"
                                fill="#111827" />
                            <path
                                d="M8.30078 21.587V26.434L20.4189 35.5227V19.769L17.0259 17.2245C13.4268 14.5282 8.30078 17.0912 8.30078 21.587Z"
                                fill="#111827" />
                        </svg></a>
                </div>

            </div>

            <div class="absolute inset-y-0 right-5 flex items-center justify-center -z-1 ">
                <svg class="md:opacity-0 lg:opacity-100 sm:opacity-0 sm:w-screen lg:h-[45rem] lg:w-[45rem] rotate-6" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" version="1.1">
                    <defs>
                        <linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0">
                            <stop id="stop1" stop-color="rgba(30.936, 135.621, 202.919, 1)" offset="0%"></stop>
                            <stop id="stop2" stop-color="rgba(31, 150.752, 251, 1)" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <path fill="url(#sw-gradient)" d="M26.7,-33.7C33,-26.5,35.3,-16.6,36.1,-7.1C37,2.5,36.4,11.6,32.8,20C29.2,28.5,22.6,36.3,14.9,37.8C7.1,39.3,-1.9,34.5,-10.4,30.6C-19,26.6,-27.2,23.5,-33.5,17.1C-39.9,10.7,-44.5,1,-42.3,-6.8C-40.2,-14.7,-31.3,-20.7,-23.1,-27.4C-14.9,-34.2,-7.5,-41.7,1.4,-43.4C10.2,-45,20.4,-40.8,26.7,-33.7Z" width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: 0.3s;" stroke="url(#sw-gradient)"></path>
                </svg>
            </div>
            <div class="relative z-20 mb-12 lg:w-1/2 flex items-center justify-center">
                <img data-aos="fade-up" src="{{ asset('storage/images/haikalpoto.png') }}" alt="image" class="h-screen w-auto object-cover">
            </div>
        </div>
    </div>

    <div id="about" class="dark:bg-slate-900 bg-white min-h-screen py-8 px-4 sm:py-12 sm:px-6 lg:px-8">
        <h1 class="text-4xl sm:text-6xl font-extrabold text-black dark:text-white text-center mb-12">
            About Mɘ
        </h1>
        <div class="flex flex-col lg:flex-row items-center lg:items-start">
            <div class="relative flex-shrink-0 mb-6 lg:mb-0 lg:mr-8 w-full lg:w-1/2 flex flex-col items-center">
                <img data-aos="fade-up" src="{{ asset('storage/images/pp.jpg') }}" alt="image" class="h-48 sm:h-64 lg:h-72 w-3/4 lg:w-full object-cover rounded-lg shadow-lg mb-4">

                <div class="flex justify-between w-3/4 lg:w-full gap-x-2">
                    <div class="w-2/3 h-full flex justify-center">
                        <img class="rounded-lg object-cover" src="https://i.pinimg.com/originals/29/49/a9/2949a9bab6895a95e1e28802d2ccab26.gif" alt="cover" />
                    </div>
                    <a href="{{ asset('storage/images/Resume.pdf') }}" download="Resume.pdf" class="w-1/3 flex justify-center items-center dark:bg-blue-600 bg-blue-700 rounded-lg">
                        <button class="dark:bg-blue-600 bg-blue-700 hover:text-xl transition ease-in-out font-bold h-full w-full text-white px-4 py-2 rounded shadow hover:bg-blue-800 transition duration-300">
                            Download CV
                        </button>
                    </a>
                </div>
            </div>


            <div class="flex-1 mt-8 lg:mt-0 lg:ml-8">
                <div class="p-6 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-lg">
                    <p class="text-gray-700 dark:text-gray-300 mb-6">
                        I'm Muhammad Haikal Islami, currently a fourth-semester undergraduate student at President University, majoring in Informatics. I have a keen interest and skills in web development, including PHP, Laravel, and Java. Additionally, I've had experience in graphic design through past projects.
                        I believe that information technology is the driving force behind transforming our businesses and lives. I'm passionate about continuously expanding my knowledge and skills in the IT world, as well as contributing to innovative technology development.
                        I'm always eager to learn new things and seek opportunities to collaborate with individuals who share the same enthusiasm. If you'd like to discuss projects, technology, or share ideas, feel free to reach out to me.
                    </p>
                    <ol class="relative border-l border-gray-200 dark:border-gray-700">
                        <li class="mb-10 ml-4">
                            <div class="absolute w-3 h-3 bg-gray-200 rounded-full -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Jul 2020 - May 2023</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">SMA Negeri 3 Samarinda</h3>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Science</p>
                        </li>
                        <li class="mb-10 ml-4">
                            <div class="absolute w-3 h-3 bg-gray-200 rounded-full -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Aug 2023 - Present</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">President University</h3>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Bachelol's degree, Informatics</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div id="project" class="dark:bg-slate-200 bg-white  py-12 lg:py-24 px-4 lg:px-24">
        <h1 class="text-gray-900 text-4xl lg:text-5xl font-bold mb-8 text-center">Recent Projects</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 justify-items-center sm:justify-items-stretch">
            <div data-aos="zoom-in" class="flex flex-col w-72 bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 mx-auto">
                <a href="#">
                    <img class="rounded-t-lg w-full h-48 object-cover" src="{{ asset('storage/images/itseven.png') }}" alt="ItSeven Store" />
                </a>
                <div class="flex dark:bg-slate-900 bg-white flex-col flex-grow p-6 rounded-b-lg">
                    <a href="#">
                        <h5 class="text-xl font-semibold dark:text-white text-gray-900 mb-2">ItSeven Store</h5>
                    </a>
                    <div class="flex gap-2 mb-4">
                        <img class="w-20 h-20 transform hover:scale-110 transition duration-300" src="https://img.icons8.com/?size=100&id=fAMVO_fuoOuC&format=png&color=000000" alt="Skill 4" />
                        <img class="w-20 h-20 transform hover:scale-110 transition duration-300" src="https://img.icons8.com/?size=100&id=CIAZz2CYc6Kc&format=png&color=000000" alt="Skill 6" />
                        <img class="w-20 h-20 transform hover:scale-110 transition duration-300" src="https://img.icons8.com/?size=100&id=ByCcJFjqrzw8&format=png&color=000000" alt="Skill 7" />
                    </div>
                    <button data-modal-target="readMoreModal" data-modal-toggle="readMoreModal" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-colors duration-300 mt-auto">
                        Read more
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                </div>
            </div>

            <div id="readMoreModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full ">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                ItSeven Store Details
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="readMoreModal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <div class="p-6 space-y-6">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                Project Leader & Lead Developer - ItSeven
                                Developed a Game Shop platform, handling:
                                Frontend: Created a user-friendly, responsive interface.
                                Backend: Built server logic, integrated payments, and managed inventory.
                                Database: Optimized for scalability and data retrieval.
                                Delivered a complete e-commerce solution for games.
                            </p>
                            <iframe src="{{ asset('storage/images/WStore_ItSeven.pdf') }}" class="w-full h-64" frameborder="0"></iframe>
                        </div>
                        <div class="flex items-center p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="readMoreModal" type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div data-aos="zoom-in" class="flex flex-col w-72 bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 mx-auto">
                <a href="#">
                    <img class="rounded-t-lg w-full h-48 object-cover" src="{{ asset('storage/images/puta.png') }}" alt="PUTA" />
                </a>
                <div class="flex dark:bg-slate-900 bg-white flex-col flex-grow p-6 rounded-b-lg">
                    <a href="#">
                        <h5 class="text-xl font-semibold dark:text-white text-gray-900 mb-2">PUTA</h5>
                    </a>
                    <div class="flex gap-2 mb-4">
                        <img class="w-20 h-20 transform hover:scale-110 transition duration-300" src="https://img.icons8.com/?size=100&id=fAMVO_fuoOuC&format=png&color=000000" alt="Skill 4" />
                        <img class="w-20 h-20 transform hover:scale-110 transition duration-300" src="https://img.icons8.com/?size=100&id=CIAZz2CYc6Kc&format=png" alt="Skill 6" />
                        <img class="w-20 h-20 transform hover:scale-110 transition duration-300" src="https://img.icons8.com/?size=100&id=ByCcJFjqrzw8&format=png" alt="Skill 7" />
                    </div>
                    <button data-modal-target="putaModal" data-modal-toggle="putaModal" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-colors duration-300 mt-auto">
                        Read more
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                </div>
            </div>

            <div id="putaModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">PUTA Details</h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="putaModal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <div class="p-6 space-y-6">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">Developer, PUTA (President University Tech Assistant) | [2024]

                                Developed a website for President University to address electronic device issues. Key features:

                                Technical Support: Assistance and repair services for devices.
                                AI Integration: Chatbot for instant answers to common questions.
                                Appointment Scheduling: System for booking consultations.
                                Community Building: Forum for user interaction and advice.
                                Received high marks from faculty and positive community feedback.</p>
                            <iframe src="{{ asset('storage/images/PUTA.pdf') }}" class="w-full h-64" frameborder="0"></iframe>
                        </div>
                        <div class="flex items-center p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="putaModal" type="button" class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <div data-aos="zoom-in" class="flex flex-col w-72 bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 mx-auto">
                <a href="#">
                    <img class="rounded-t-lg w-full h-48 object-cover" src="{{ asset('storage/images/guardian.jpg') }}" alt="Guardian Stars" />
                </a>
                <div class="flex dark:bg-slate-900 bg-white flex-col flex-grow p-6 rounded-b-lg">
                    <a href="#">
                        <h5 class="text-xl font-semibold dark:text-white text-gray-900 mb-2">Guardian Stars</h5>
                    </a>
                    <div class="flex gap-2 mb-4">
                        <img src="https://pbs.twimg.com/profile_images/1191215092450246656/tXGyPGIz_400x400.png" class="hover:scale-110 transition duration-300" height="75px" width="75px" />
                        <img src="{{ asset('storage/images/guardians.png') }}" alt="image" class="object-cover hover:scale-110 transition duration-300" height="75px" width="75px">
                    </div>
                    <button data-modal-target="guardianStarsModal" data-modal-toggle="guardianStarsModal" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-colors duration-300 mt-auto">
                        Read more
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                </div>
            </div>

            <div id="guardianStarsModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Guardian Stars Details</h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="guardianStarsModal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <div class="p-6 space-y-6">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">This social project aims to educate kindergarten and elementary school children on Pancasila, citizenship, and religious values through educational games outside school. It addresses the imbalance in these values due to globalization and technology, which have led to issues like westernization and moral decline among youth. The project seeks to reinforce these values to safeguard the next generation.</p>
                        </div>
                        <div class="flex items-center p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="guardianStarsModal" type="button" class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <div data-aos="zoom-in" class="flex flex-col w-72 bg-white border border-gray-200 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 mx-auto">
                <a href="#">
                    <img class="rounded-t-lg w-full h-48 object-cover" src="{{ asset('storage/images/personal.png') }}" alt="Kost Graha as-Salam" />
                </a>
                <div class="flex flex-col dark:bg-slate-900 bg-white flex-grow p-6 rounded-b-lg">
                    <a href="#">
                        <h5 class="text-xl font-semibold dark:text-white text-gray-900 mb-2">Personal Portfolio</h5>
                    </a>
                    <div class="flex gap-2 mb-4">
                        <img class="w-20 h-20 transform hover:scale-110 transition duration-300" src="https://img.icons8.com/?size=100&id=hUvxmdu7Rloj&format=png" alt="Skill 3" />
                        <img class="w-20 h-20 transform hover:scale-110 transition duration-300" src="https://img.icons8.com/?size=100&id=CIAZz2CYc6Kc&format=png" alt="Skill 6" />
                    </div>
                    <button data-modal-target="portfolioModal" data-modal-toggle="portfolioModal" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-colors duration-300 mt-auto">
                        Read more
                        <svg class="w-4 h-4 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                </div>
            </div>

            <div id="portfolioModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Portfolio Details</h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="portfolioModal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <div class="p-6 space-y-6">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">Explore my personal portfolio showcasing various projects...</p>
                        </div>
                        <div class="flex items-center p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button data-modal-hide="portfolioModal" type="button" class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="dark:bg-slate-900 bg-white h-screen flex flex-col justify-center items-center">
        <h1 data-aos="fade-up" class="dark:text-white text-black text-4xl lg:text-5xl font-bold mb-8 text-center pt-12">
            Tech Stack & Tools
        </h1>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8 items-center justify-center mt-8">
            <img class="w-20 h-20 transform hover:scale-110 transition duration-300" src="https://img.icons8.com/?size=100&id=20909&format=png" alt="Skill 1" />
            <img class="w-20 h-20 transform hover:scale-110 transition duration-300" src="https://img.icons8.com/?size=100&id=21278&format=png" alt="Skill 2" />
            <img class="w-20 h-20 transform hover:scale-110 transition duration-300" src="https://img.icons8.com/?size=100&id=hUvxmdu7Rloj&format=png" alt="Skill 3" />
            <img class="w-20 h-20 transform hover:scale-110 transition duration-300" src="https://img.icons8.com/?size=100&id=fAMVO_fuoOuC&format=png&color=000000" alt="Skill 4" />
            <img class="w-20 h-20 transform hover:scale-110 transition duration-300" src="https://img.icons8.com/?size=100&id=108784&format=png" alt="Skill 5" />
            <img class="w-20 h-20 transform hover:scale-110 transition duration-300" src="https://img.icons8.com/?size=100&id=CIAZz2CYc6Kc&format=png" alt="Skill 6" />
            <img class="w-20 h-20 transform hover:scale-110 transition duration-300" src="https://img.icons8.com/?size=100&id=ByCcJFjqrzw8&format=png" alt="Skill 7" />
            <img class="w-20 h-20 transform hover:scale-110 transition duration-300" src="https://img.icons8.com/?size=100&id=PndQWK6M1Hjo&format=png" alt="Skill 8" />
        </div>
    </div>

    <div class="dark:bg-slate-200 bg-white">
        <div id="contact" class="flex justify-center items-center min-h-screen p-8">
            <div class="w-full max-w-lg p-6 bg-white rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-center text-gray-800">Get in Touch😗</h2>
                <p class="text-center text-gray-600 mt-2 mb-6">I'd love to hear from you. Feel free to drop a message!</p>

                <form class="space-y-4">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2" for="name">Name</label>
                        <input type="text" id="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Your Name">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2" for="email">Email</label>
                        <input type="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Your Email">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2" for="message">Message</label>
                        <textarea id="message" rows="4" class="resize-none w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Your Message"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
        <div>
            <a id="scrollup" class="cursor-pointer absolute right-20 -mt-24 animate-bounceUpDown">
                <img src="https://img.icons8.com/?size=100&id=26192&format=png&color=000000" width="50px" height="50px" alt="icon" />
            </a>
        </div>

    </div>


    <footer class="dark:bg-slate-900 bg-slate-300 h-12 flex items-center justify-center">
        <p class="text-white text-center">2024 haelahpx. All rights reserved.</p>
    </footer>


</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="../path/to/flowbite/dist/flowbite.bundle.js"></script>
<script>
    AOS.init();
</script>