<head>
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
        $(".btnBack").click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
        });
        $(".btnAbout").click(function() {
            $('html, body').animate({
                scrollTop: 845
            }, 800);
        });
        $(".btnProject").click(function() {
            $('html, body').animate({
                scrollTop: 1600
            }, 800);
        });
        $(".btnContact").click(function() {
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
    document.addEventListener("DOMContentLoaded", () => {
        const words = ["Hello, World!", "Website Developer", "This is my Portfolio."];
        let i = 0,
            j = 0,
            isDeleting = false;

        const typewriter = document.getElementById("typewriter");

        const getMaxWordDimensions = () => {
            const tempSpan = document.createElement('span');
            tempSpan.style.visibility = 'hidden';
            tempSpan.style.position = 'absolute';
            document.body.appendChild(tempSpan);

            let maxWidth = 0,
                maxHeight = 0;
            words.forEach(word => {
                tempSpan.textContent = word;
                const wordWidth = tempSpan.offsetWidth;
                const wordHeight = tempSpan.offsetHeight;
                if (wordWidth > maxWidth) maxWidth = wordWidth;
                if (wordHeight > maxHeight) maxHeight = wordHeight;
            });

            document.body.removeChild(tempSpan);
            return {
                maxWidth,
                maxHeight
            };
        };

        const {
            maxWidth,
            maxHeight
        } = getMaxWordDimensions();

        typewriter.style.minWidth = `${maxWidth}px`;
        typewriter.style.minHeight = `${maxHeight}px`;

        (function type() {
            const currentWord = words[i];
            typewriter.textContent = currentWord.slice(0, j);

            j = isDeleting ? j - 1 : j + 1;
            if (!isDeleting && j === currentWord.length) isDeleting = true;
            if (isDeleting && j === 0) isDeleting = false, i = (i + 1) % words.length;

            setTimeout(type, 100);
        })();
    });
</script>

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
        },
    });
</script>

<script>
    window.addEventListener("scroll", function() {
        const scrollup = document.getElementById("scrollup");

        const scrollPosition = window.scrollY + window.innerHeight;
        const pageHeight = document.documentElement.scrollHeight;

        if (scrollPosition >= pageHeight - 10) {
            scrollup.classList.remove("opacity-0");
            scrollup.classList.add("opacity-100");
        } else {
            scrollup.classList.remove("opacity-100");
            scrollup.classList.add("opacity-0");
        }
    });
</script>



@vite('resources/css/app.css')
<nav class="bg-slate-300 border-gray-200 dark:bg-black sticky top-0 z-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a class="cursor-pointer flex items-center space-x-3 rtl:space-x-reverse btnBack">
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white dark:text-white">haiʞall.</span>
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
                    <a class="btnAbout block py-2 px-3 rounded hover:bg-gray-100 dark:hover:bg-gray-700 text-black dark:text-white md:hover:text-blue-700 md:dark:hover:text-blue-400">About</a>
                </li>
                <li>
                    <a class="btnProject block py-2 px-3 rounded hover:bg-gray-100 dark:hover:bg-gray-700 text-black dark:text-white md:hover:text-blue-700 md:dark:hover:text-blue-400">Project</a>
                </li>
                <li>
                    <a class="btnContact block py-2 px-3 rounded hover:bg-gray-100 dark:hover:bg-gray-700 text-black dark:text-white md:hover:text-blue-700 md:dark:hover:text-blue-400">Contact</a>
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

<body class="dark:bg-slate-900 bg-white overflow-x-hidden">
    <div class="relative flex items-center justify-between p-6">
        <div class="relative flex flex-col-reverse lg:flex-row">
            <div class="text-white z-10 lg:pt-48 lg:w-1/2">
                <div class="relative inline-block overflow-hidden text-gray-400 dark:text-gray-400">
                    <h1 id="typewriter" class="text-sm font-bold whitespace-nowrap"></h1>
                </div>
                <p class="text-5xl font-bold typing text-black dark:text-white">Hɘllo I'am Haikal</p>
                <p class="text-gray-500 dark:text-gray-400 py-6">
                    <a class="font-semibold text-gray-900 underline dark:text-white decoration-blue-500">
                        This portfolio website,
                    </a>
                    crafted with a focus on clean design and functionality, showcases my journey as an
                    Information Technology student at President University.
                    <a class="font-semibold text-gray-900 underline dark:text-white decoration-indigo-500">
                        Through this platform,
                    </a>
                </p>
                <div class="flex items-center gap-5 flex-wrap">
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
                <img data-aos="fade-up" src="{{ asset('storage/images/haikalpoto.png') }}" alt="image" class=" h-screen w-auto object-cover">
            </div>
        </div>
    </div>

    <div id="about" class="dark:bg-slate-900 bg-white min-h-screen py-8 px-4 sm:py-12 sm:px-6 lg:px-8">
        <h1 class="text-4xl sm:text-6xl font-extrabold text-black dark:text-white text-center mb-12">
            About Mɘ
        </h1>
        <div class="flex flex-col lg:flex-row items-center lg:items-start">
            <div class="relative flex-shrink-0 mb-6 lg:mb-0 lg:mr-8 w-full lg:w-1/3 h-auto flex justify-center sm:justify-start">
                <img src="{{ asset('storage/images/pp.jpg') }}" alt="image" class="h-64 lg:h-80 w-3/4 lg:w-full object-cover rounded-lg shadow-lg mb-4">
            </div>
            <div class="flex-1 mt-8 lg:mt-0 lg:ml-8">
                <div class="p-6 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-lg h-full">
                    <p class="text-gray-700 dark:text-gray-300 mb-6">
                        Hello! My name is Muhammad Haikal Islami, and I am currently an IT student at President University. I have a strong passion for technology and specialize in web development, with skills in Laravel, PHP, HTML, CSS, JavaScript, and Java. In addition to my technical abilities, I enjoy reading and watching movies in my free time, which help me stay curious and expand my knowledge.

                        My ultimate goal is to become a Full Stack Developer, where I can create innovative and impactful solutions across the entire development stack. I am always eager to learn and grow, both as a developer and as a person.
                    </p>
                    <ol class="relative border-l border-blue-700 dark:border-blue-700">
                        <li class="mb-10 ml-4">
                            <div class="absolute w-3 h-3 bg-blue-800 rounded-full -left-1.5 border border-white dark:border-gray-900 dark:bg-blue-800"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Jul 2020 - May 2023</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">SMA Negeri 3 Samarinda</h3>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Science</p>
                        </li>
                        <li class="mb-10 ml-4">
                            <div class="absolute w-3 h-3 bg-blue-800 rounded-full -left-1.5 border border-white dark:border-gray-900 dark:bg-blue-800"></div>
                            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Aug 2023 - Present</time>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">President University</h3>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Bachelor's degree, Informatics</p>
                        </li>
                    </ol>
                    <a href="{{ asset('storage/images/Resume.pdf') }}" download="haikal_resume.pdf">
                        <button class="dark:bg-blue-600 bg-blue-700 dark:hover:bg-blue-700 hover:bg-blue-800 transition ease-in-out font-bold h-full w-full text-white px-4 py-2 rounded shadow hover:bg-blue-800 transition duration-300">
                            Download CV
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="project" class="dark:bg-slate-900 bg-white py-12 lg:py-24 px-4 lg:px-24">
        <h1 class="dark:text-white text-gray-900 text-4xl lg:text-5xl font-bold mb-12 text-center">Recent Projects</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 justify-items-center">
            <div class="flex flex-col w-full sm:w-80 border-b border-slate-400 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 mx-auto">
                <img class="rounded-t-xl w-full h-40 sm:h-48 object-cover" src="{{ asset('storage/images/itseven.png') }}" alt="ItSeven Store" />
                <div class="flex dark:bg-gray-800 bg-white flex-col flex-grow p-4 sm:p-6 rounded-b-xl">
                    <a href="#">
                        <h5 class="text-lg sm:text-xl font-semibold text-black dark:text-white mb-3">ItSeven Store</h5>
                    </a>
                    <div class="flex gap-2 sm:gap-3 mb-4">
                        <img class="w-12 h-12 sm:w-16 sm:h-16 transform hover:scale-110 transition-transform duration-300" src="https://img.icons8.com/?size=100&id=fAMVO_fuoOuC&format=png&color=000000" alt="Skill 4" />
                        <img class="w-12 h-12 sm:w-16 sm:h-16 transform hover:scale-110 transition-transform duration-300" src="https://img.icons8.com/?size=100&id=CIAZz2CYc6Kc&format=png&color=000000" alt="Skill 6" />
                        <img class="w-12 h-12 sm:w-16 sm:h-16 transform hover:scale-110 transition-transform duration-300" src="https://img.icons8.com/?size=100&id=ByCcJFjqrzw8&format=png&color=000000" alt="Skill 7" />
                    </div>
                    <button data-modal-target="itSevenModal" data-modal-toggle="itSevenModal" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-colors duration-300 mt-auto">
                        Read more
                        <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="flex flex-col w-full sm:w-80 border-b border-slate-400 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 mx-auto">
                <img class="rounded-t-xl w-full h-40 sm:h-48 object-cover" src="{{ asset('storage/images/puta.png') }}" alt="PUTA" />
                <div class="flex dark:bg-gray-800 bg-white flex-col flex-grow p-4 sm:p-6 rounded-b-xl">
                    <a href="#">
                        <h5 class="text-lg sm:text-xl font-semibold text-black dark:text-white mb-3">PUTA</h5>
                    </a>
                    <div class="flex gap-2 sm:gap-3 mb-4">
                        <img class="w-12 h-12 sm:w-16 sm:h-16 transform hover:scale-110 transition-transform duration-300" src="https://img.icons8.com/?size=100&id=fAMVO_fuoOuC&format=png&color=000000" alt="Skill 4" />
                        <img class="w-12 h-12 sm:w-16 sm:h-16 transform hover:scale-110 transition-transform duration-300" src="https://img.icons8.com/?size=100&id=CIAZz2CYc6Kc&format=png" alt="Skill 6" />
                        <img class="w-12 h-12 sm:w-16 sm:h-16 transform hover:scale-110 transition-transform duration-300" src="https://img.icons8.com/?size=100&id=ByCcJFjqrzw8&format=png" alt="Skill 7" />
                    </div>
                    <button data-modal-target="putaModal" data-modal-toggle="putaModal" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-lg hover:from-yellow-600 hover:to-yellow-700 transition-colors duration-300 mt-auto">
                        Read more
                        <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="flex flex-col w-full sm:w-80 border-b border-slate-400 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 mx-auto">
                <img class="rounded-t-xl w-full h-40 sm:h-48 object-cover" src="{{ asset('storage/images/guardian.jpg') }}" alt="Guardian Stars" />
                <div class="flex dark:bg-gray-800 bg-white flex-col flex-grow p-4 sm:p-6 rounded-b-xl">
                    <a href="#">
                        <h5 class="text-lg sm:text-xl font-semibold text-black dark:text-white mb-3">Guardian Stars</h5>
                    </a>
                    <div class="flex gap-2 sm:gap-3 mb-4">
                        <img src="https://pbs.twimg.com/profile_images/1191215092450246656/tXGyPGIz_400x400.png" class="w-12 h-12 sm:w-16 sm:h-16 transform hover:scale-110 transition-transform duration-300" alt="Guardian Stars Image 1" />
                        <img src="{{ asset('storage/images/guardians.png') }}" class="w-12 h-12 sm:w-16 sm:h-16 transform hover:scale-110 transition-transform duration-300" alt="Guardian Stars Image 2" />
                    </div>
                    <button data-modal-target="guardianStarsModal" data-modal-toggle="guardianStarsModal" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-green-500 to-green-600 rounded-lg hover:from-green-600 hover:to-green-700 transition-colors duration-300 mt-auto">
                        Read more
                        <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="flex flex-col w-full sm:w-80 border-b border-slate-400 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 mx-auto">
                <img class="rounded-t-xl w-full h-40 sm:h-48 object-cover" src="{{ asset('storage/images/personal.png') }}" alt="Personal Portfolio" />
                <div class="flex dark:bg-gray-800 bg-white flex-col flex-grow p-4 sm:p-6 rounded-b-xl">
                    <a href="#">
                        <h5 class="text-lg sm:text-xl font-semibold text-black dark:text-white mb-3">Personal Portfolio</h5>
                    </a>
                    <div class="flex gap-2 sm:gap-3 mb-4">
                        <img class="w-12 h-12 sm:w-16 sm:h-16 transform hover:scale-110 transition-transform duration-300" src="https://img.icons8.com/?size=100&id=hUvxmdu7Rloj&format=png" alt="Skill 3" />
                        <img class="w-12 h-12 sm:w-16 sm:h-16 transform hover:scale-110 transition-transform duration-300" src="https://img.icons8.com/?size=100&id=CIAZz2CYc6Kc&format=png" alt="Skill 6" />
                    </div>
                    <button data-modal-target="portfolioModal" data-modal-toggle="portfolioModal" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-purple-500 to-purple-600 rounded-lg hover:from-purple-600 hover:to-purple-700 transition-colors duration-300 mt-auto">
                        Read more
                        <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div id="itSevenModal" class="fixed inset-0 z-50 hidden bg-gray-800 bg-opacity-75 flex items-center justify-center">
            <div class="relative w-full max-w-lg mx-auto dark:bg-gray-800 bg-white rounded-lg shadow-lg p-6">
                <button data-modal-toggle="itSevenModal" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">ItSeven Store</h2>
                <p class="mb-4 text-gray-400">Project Leader & Lead Developer - ItSeven
                    Led the development of a Game Shop platform, managing both frontend and backend.
                    Frontend: Created a user-friendly, responsive interface.
                    Backend: Built server-side logic and added secure payment systems.
                    Database: Optimized for large product data and user accounts.
                    Delivered a fully functional e-commerce platform for digital and physical game products.</p>
                <iframe class="w-full h-48 object-cover rounded-lg" src="{{ asset('storage/images/WStore_ItSeven.pdf') }}" alt="ItSeven Store"></iframe>
            </div>
        </div>

        <div id="putaModal" class="fixed inset-0 z-50 hidden bg-gray-800 bg-opacity-75 flex items-center justify-center">
            <div class="relative w-full max-w-lg mx-auto dark:bg-gray-800 bg-white rounded-lg shadow-lg p-6">
                <button data-modal-toggle="putaModal" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">PUTA</h2>
                <p class="mb-4 text-gray-400">Developer - PUTA (President University Tech Assistant)
                    Created a website for students, faculty, and the community to resolve electronic device issues.
                    Technical Support: Offers repair services and assistance.
                    AI Chatbot: Provides instant answers to common tech questions.
                    Appointment Scheduling: Allows users to book consultations.
                    Community Forum: Enables users to share advice and troubleshoot together.
                    The project received high praise from faculty and the community.</p>
                <iframe class="w-full h-48 object-cover rounded-lg" src="{{ asset('storage/images/PUTA.pdf') }}" alt="ItSeven Store"></iframe>
            </div>
        </div>

        <div id="guardianStarsModal" class="fixed inset-0 z-50 hidden bg-gray-800 bg-opacity-75 flex items-center justify-center">
            <div class="relative w-full max-w-lg mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                <button data-modal-toggle="guardianStarsModal" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">Guardian Stars</h2>
                <p class="mb-4 text-gray-400">This social project aims to teach kindergarten and elementary school children about Pancasila, citizenship, and religious values through educational games outside of school.
                    The focus is on helping children apply these values in daily life, addressing the imbalance caused by globalization. The project seeks to counter negative influences like westernization and harmful behaviors among the younger generation, ensuring these values are preserved for the future.</p>
                <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('storage/images/guardian.jpg') }}" alt="Guardian Stars" />
            </div>
        </div>

        <div id="portfolioModal" class="fixed inset-0 z-50 hidden bg-gray-800 bg-opacity-75 flex items-center justify-center">
            <div class="relative w-full max-w-lg mx-auto bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                <button data-modal-toggle="portfolioModal" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">Personal Portfolio</h2>
                <p class="mb-4 text-gray-400">you're looking at it now.</p>
                <img class="w-full h-48 object-cover rounded-lg" src="{{ asset('storage/images/personal.png') }}" alt="Personal Portfolio" />
            </div>
        </div>
    </section>




    <div class="dark:bg-slate-900 bg-white h-screen flex flex-col justify-center items-center">
        <h1 class="dark:text-white text-black text-4xl lg:text-5xl font-bold mb-8 text-center pt-12">
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

    <div class="dark:bg-slate-900 bg-white pb-24">
        <div class="container mx-auto p-6">
            <h1 class="text-4xl font-bold dark:text-white text-black text-center mb-8 pb-8">Contact Me!</h1>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <div class="space-y-6 p-6 dark:bg-gray-800 bg-white rounded-lg shadow-md border border-slate-400">
                    <div class="flex items-center space-x-4">
                        <a
                            class="p-2 bg-white hover:scale-110 rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.82637 3.01587C6.73879 1.9283 4.97549 1.9283 3.88792 3.01587C1.63762 5.26617 1.63762 8.91462 3.88792 11.1649L12.8355 20.1125C15.0858 22.3628 18.7342 22.3628 20.9845 20.1125C22.0721 19.0249 22.0721 17.2616 20.9845 16.174L18.4991 13.6886C17.6215 12.811 16.1985 12.811 15.3209 13.6886C15.0681 13.9414 14.6582 13.9414 14.4054 13.6886L9.90243 9.18559C9.64963 8.93279 9.64963 8.52293 9.90243 8.27013C10.7801 7.3925 10.7801 5.96957 9.90243 5.09194L7.82637 3.01587Z" fill="black" class="my-path"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0704 6.03262C14.1202 5.59361 14.5164 5.27809 14.9555 5.32789C15.497 5.38931 16.2927 5.58687 17.0205 6.11C17.7703 6.64893 18.409 7.50781 18.6243 8.79713C18.6971 9.23292 18.4029 9.64521 17.9671 9.718C17.5313 9.79079 17.119 9.49653 17.0462 9.06073C16.9032 8.20454 16.5071 7.71142 16.0867 7.4092C15.6442 7.09118 15.1342 6.95842 14.7751 6.91769C14.3361 6.8679 14.0206 6.47164 14.0704 6.03262Z" fill="black" class="my-path"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4285 2.95541C15.464 2.51501 15.8498 2.18675 16.2902 2.22224C17.8633 2.34897 21.2281 3.54315 21.7434 7.39613C21.802 7.83406 21.4945 8.23655 21.0565 8.29512C20.6186 8.35369 20.2161 8.04615 20.1576 7.60823C19.7856 4.8267 17.3686 3.9143 16.1617 3.81707C15.7213 3.78159 15.3931 3.39581 15.4285 2.95541Z" fill="black" class="my-path"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.9114 9.24679C12.9612 8.80778 13.3574 8.49226 13.7965 8.54206C14.0565 8.57155 14.4441 8.66586 14.8061 8.92606C15.1901 9.20208 15.5053 9.63835 15.6087 10.257C15.6814 10.6928 15.3872 11.1051 14.9514 11.1779C14.5156 11.2507 14.1033 10.9564 14.0305 10.5206C14.0134 10.4185 13.9843 10.3562 13.9602 10.3181C13.9358 10.2795 13.9065 10.2499 13.8722 10.2253C13.7956 10.1702 13.6937 10.1407 13.6161 10.1319C13.1771 10.0821 12.8616 9.6858 12.9114 9.24679Z" fill="black" class="my-path"></path>
                            </svg></a>
                        <span class="text-lg text-black dark:text-white">085393335556</span>
                    </div>

                    <div class="flex items-center space-x-4">
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
                        <span class="text-lg text-black dark:text-white">mhmmdhaikalll12@gmail.com</span>
                    </div>
                </div>

                <div class="space-y-6 p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md border border-slate-400">
                    <div class="flex items-center space-x-4">
                        <a href="https://www.instagram.com/mhmdhaikalll._/" target="_blank"
                            class="p-2 hover:scale-110 bg-white rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500 hover:border-gray-100 hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 71 72"
                                fill="none">
                                <path
                                    d="M27.3762 35.7808C27.3762 31.1786 31.1083 27.4468 35.7132 27.4468C40.3182 27.4468 44.0522 31.1786 44.0522 35.7808C44.0522 40.383 40.3182 44.1148 35.7132 44.1148C31.1083 44.1148 27.3762 40.383 27.3762 35.7808ZM22.8683 35.7808C22.8683 42.8708 28.619 48.618 35.7132 48.618C42.8075 48.618 48.5581 42.8708 48.5581 35.7808C48.5581 28.6908 42.8075 22.9436 35.7132 22.9436C28.619 22.9436 22.8683 28.6908 22.8683 35.7808ZM46.0648 22.4346C46.0646 23.0279 46.2404 23.608 46.5701 24.1015C46.8997 24.595 47.3684 24.9797 47.9168 25.2069C48.4652 25.4342 49.0688 25.4939 49.6511 25.3784C50.2334 25.2628 50.7684 24.9773 51.1884 24.5579C51.6084 24.1385 51.8945 23.6041 52.0105 23.0222C52.1266 22.4403 52.0674 21.8371 51.8404 21.2888C51.6134 20.7406 51.2289 20.2719 50.7354 19.942C50.2418 19.6122 49.6615 19.436 49.0679 19.4358H49.0667C48.2708 19.4361 47.5077 19.7522 46.9449 20.3144C46.3821 20.8767 46.0655 21.6392 46.0648 22.4346ZM25.6072 56.1302C23.1683 56.0192 21.8427 55.6132 20.9618 55.2702C19.7939 54.8158 18.9606 54.2746 18.0845 53.4002C17.2083 52.5258 16.666 51.6938 16.2133 50.5266C15.8699 49.6466 15.4637 48.3214 15.3528 45.884C15.2316 43.2488 15.2073 42.4572 15.2073 35.781C15.2073 29.1048 15.2336 28.3154 15.3528 25.678C15.4639 23.2406 15.8731 21.918 16.2133 21.0354C16.668 19.8682 17.2095 19.0354 18.0845 18.1598C18.9594 17.2842 19.7919 16.7422 20.9618 16.2898C21.8423 15.9466 23.1683 15.5406 25.6072 15.4298C28.244 15.3086 29.036 15.2844 35.7132 15.2844C42.3904 15.2844 43.1833 15.3106 45.8223 15.4298C48.2612 15.5408 49.5846 15.9498 50.4677 16.2898C51.6356 16.7422 52.4689 17.2854 53.345 18.1598C54.2211 19.0342 54.7615 19.8682 55.2161 21.0354C55.5595 21.9154 55.9658 23.2406 56.0767 25.678C56.1979 28.3154 56.2221 29.1048 56.2221 35.781C56.2221 42.4572 56.1979 43.2466 56.0767 45.884C55.9656 48.3214 55.5573 49.6462 55.2161 50.5266C54.7615 51.6938 54.2199 52.5266 53.345 53.4002C52.4701 54.2738 51.6356 54.8158 50.4677 55.2702C49.5872 55.6134 48.2612 56.0194 45.8223 56.1302C43.1855 56.2514 42.3934 56.2756 35.7132 56.2756C29.033 56.2756 28.2432 56.2514 25.6072 56.1302ZM25.4001 10.9322C22.7371 11.0534 20.9174 11.4754 19.3282 12.0934C17.6824 12.7316 16.2892 13.5878 14.897 14.977C13.5047 16.3662 12.6502 17.7608 12.0116 19.4056C11.3933 20.9948 10.971 22.8124 10.8497 25.4738C10.7265 28.1394 10.6982 28.9916 10.6982 35.7808C10.6982 42.57 10.7265 43.4222 10.8497 46.0878C10.971 48.7494 11.3933 50.5668 12.0116 52.156C12.6502 53.7998 13.5049 55.196 14.897 56.5846C16.289 57.9732 17.6824 58.8282 19.3282 59.4682C20.9204 60.0862 22.7371 60.5082 25.4001 60.6294C28.0687 60.7506 28.92 60.7808 35.7132 60.7808C42.5065 60.7808 43.3592 60.7526 46.0264 60.6294C48.6896 60.5082 50.5081 60.0862 52.0983 59.4682C53.7431 58.8282 55.1373 57.9738 56.5295 56.5846C57.9218 55.1954 58.7745 53.7998 59.4149 52.156C60.0332 50.5668 60.4575 48.7492 60.5768 46.0878C60.698 43.4202 60.7262 42.57 60.7262 35.7808C60.7262 28.9916 60.698 28.1394 60.5768 25.4738C60.4555 22.8122 60.0332 20.9938 59.4149 19.4056C58.7745 17.7618 57.9196 16.3684 56.5295 14.977C55.1395 13.5856 53.7431 12.7316 52.1003 12.0934C50.5081 11.4754 48.6894 11.0514 46.0284 10.9322C43.3612 10.811 42.5085 10.7808 35.7152 10.7808C28.922 10.7808 28.0687 10.809 25.4001 10.9322Z"
                                    fill="#111827" />
                            </svg></a>
                        <span class="text-lg text-black dark:text-white">@mhmdhaikalll._</span>
                    </div>

                    <div class="flex items-center space-x-4 bg-">
                        <a
                            class="p-2 bg-white hover:scale-110 rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500">
                            <svg class="bg-white" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.6902 2.56877C11.0998 2.35082 11.518 2.19995 11.9992 2.19995C12.4805 2.19995 12.8987 2.35082 13.3082 2.56877C13.6919 2.77292 14.1259 3.06898 14.6342 3.41561L17.9191 5.65582C18.7643 6.23217 19.4442 6.69586 19.9684 7.13028C20.5121 7.58101 20.9323 8.03478 21.2348 8.6129C21.5368 9.19023 21.6721 9.79718 21.7368 10.5067C21.7992 11.1922 21.7992 12.0267 21.7992 13.0669V16.9623C21.7993 17.8806 21.7993 18.6479 21.7192 19.2573C21.6347 19.8999 21.4486 20.4863 20.9855 20.96C20.52 21.4362 19.9395 21.63 19.3028 21.7176C18.7034 21.8 17.9502 21.8 17.0551 21.7999H6.94329C6.0482 21.8 5.29503 21.8 4.69568 21.7176C4.05898 21.63 3.47847 21.4362 3.01294 20.96C2.54989 20.4863 2.36372 19.8999 2.27927 19.2573C2.19917 18.6479 2.19919 17.8806 2.19922 16.9623V10.8805C2.19921 10.3735 2.19919 9.94045 2.23211 9.57936C2.2672 9.19438 2.3433 8.83451 2.52702 8.48335C2.71116 8.13139 2.96318 7.86502 3.2594 7.6195C3.53608 7.39016 3.8895 7.14916 4.30112 6.86848L9.36425 3.41561C9.87248 3.06899 10.3066 2.77292 10.6902 2.56877ZM8.99922 16.2C8.55739 16.2 8.19922 16.5581 8.19922 17C8.19922 17.4418 8.55739 17.8 8.99922 17.8H14.9992C15.441 17.8 15.7992 17.4418 15.7992 17C15.7992 16.5581 15.441 16.2 14.9992 16.2L8.99922 16.2Z" fill="black" class="my-path"></path>
                            </svg> </a>
                        <span class="text-lg text-black dark:text-white">Cikarang, Indonesia</span>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <a id="scrollup" class="opacity-0 cursor-pointer fixed bottom-40 right-10 flex items-center justify-center w-14 h-14 rounded-full bg-white shadow-lg animate-bounceUpDown transition-opacity duration-500">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.99634 22.0004L11.9966 16.0001L18.0004 22.0039" stroke="#222" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="my-path"></path>
                    <path d="M5.99634 15.0009L11.9966 9.00061L18.0004 15.0044" stroke="#222" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="my-path"></path>
                    <path d="M5.99634 8.00085L11.9966 2.00061L18.0004 8.00439" stroke="#222" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="my-path"></path>
                </svg>
            </a>
        </div>


    </div>

    <footer class="dark:bg-black bg-slate-300 h-54 p-6 flex flex-col md:flex-row items-center justify-between border-t border-gray-200 dark:border-gray-700">
        <div class="text-center md:text-left mb-4 md:mb-0">
            <a class="text-white text-3xl font-bold cursor-pointer btnBack">haiʞall.</a>
            <div class="mt-2 flex flex-col md:flex-row md:space-x-6">
                <a class="btnAbout cursor-pointer text-gray-800 dark:text-gray-300 hover:text-blue-500 transition-colors duration-300">About</a>
                <a class="btnProject cursor-pointer text-gray-800 dark:text-gray-300 hover:text-blue-500 transition-colors duration-300">Project</a>
                <a class="btnContact cursor-pointer text-gray-800 dark:text-gray-300 hover:text-blue-500 transition-colors duration-300">Contact</a>
            </div>
            <p class="text-gray-600 dark:text-gray-400 text-sm">© 2024 haelahpx. All rights reserved.</p>

        </div>

        <div class="flex space-x-6">
            <a
                class="p-2 bg-white rounded-lg hover:scale-110 flex items-center border border-gray-300 justify-center transition-all duration-500">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.82637 3.01587C6.73879 1.9283 4.97549 1.9283 3.88792 3.01587C1.63762 5.26617 1.63762 8.91462 3.88792 11.1649L12.8355 20.1125C15.0858 22.3628 18.7342 22.3628 20.9845 20.1125C22.0721 19.0249 22.0721 17.2616 20.9845 16.174L18.4991 13.6886C17.6215 12.811 16.1985 12.811 15.3209 13.6886C15.0681 13.9414 14.6582 13.9414 14.4054 13.6886L9.90243 9.18559C9.64963 8.93279 9.64963 8.52293 9.90243 8.27013C10.7801 7.3925 10.7801 5.96957 9.90243 5.09194L7.82637 3.01587Z" fill="black" class="my-path"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0704 6.03262C14.1202 5.59361 14.5164 5.27809 14.9555 5.32789C15.497 5.38931 16.2927 5.58687 17.0205 6.11C17.7703 6.64893 18.409 7.50781 18.6243 8.79713C18.6971 9.23292 18.4029 9.64521 17.9671 9.718C17.5313 9.79079 17.119 9.49653 17.0462 9.06073C16.9032 8.20454 16.5071 7.71142 16.0867 7.4092C15.6442 7.09118 15.1342 6.95842 14.7751 6.91769C14.3361 6.8679 14.0206 6.47164 14.0704 6.03262Z" fill="black" class="my-path"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4285 2.95541C15.464 2.51501 15.8498 2.18675 16.2902 2.22224C17.8633 2.34897 21.2281 3.54315 21.7434 7.39613C21.802 7.83406 21.4945 8.23655 21.0565 8.29512C20.6186 8.35369 20.2161 8.04615 20.1576 7.60823C19.7856 4.8267 17.3686 3.9143 16.1617 3.81707C15.7213 3.78159 15.3931 3.39581 15.4285 2.95541Z" fill="black" class="my-path"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.9114 9.24679C12.9612 8.80778 13.3574 8.49226 13.7965 8.54206C14.0565 8.57155 14.4441 8.66586 14.8061 8.92606C15.1901 9.20208 15.5053 9.63835 15.6087 10.257C15.6814 10.6928 15.3872 11.1051 14.9514 11.1779C14.5156 11.2507 14.1033 10.9564 14.0305 10.5206C14.0134 10.4185 13.9843 10.3562 13.9602 10.3181C13.9358 10.2795 13.9065 10.2499 13.8722 10.2253C13.7956 10.1702 13.6937 10.1407 13.6161 10.1319C13.1771 10.0821 12.8616 9.6858 12.9114 9.24679Z" fill="black" class="my-path"></path>
                </svg>
            </a>
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
                </svg>
            </a>
            <a href="https://www.instagram.com/mhmdhaikalll._/" target="_blank"
                class="p-2 hover:scale-110 bg-white rounded-lg flex items-center border border-gray-300 justify-center transition-all duration-500 hover:border-gray-100 hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 71 72"
                    fill="none">
                    <path
                        d="M27.3762 35.7808C27.3762 31.1786 31.1083 27.4468 35.7132 27.4468C40.3182 27.4468 44.0522 31.1786 44.0522 35.7808C44.0522 40.383 40.3182 44.1148 35.7132 44.1148C31.1083 44.1148 27.3762 40.383 27.3762 35.7808ZM22.8683 35.7808C22.8683 42.8708 28.619 48.618 35.7132 48.618C42.8075 48.618 48.5581 42.8708 48.5581 35.7808C48.5581 28.6908 42.8075 22.9436 35.7132 22.9436C28.619 22.9436 22.8683 28.6908 22.8683 35.7808ZM46.0648 22.4346C46.0646 23.0279 46.2404 23.608 46.5701 24.1015C46.8997 24.595 47.3684 24.9797 47.9168 25.2069C48.4652 25.4342 49.0688 25.4939 49.6511 25.3784C50.2334 25.2628 50.7684 24.9773 51.1884 24.5579C51.6084 24.1385 51.8945 23.6041 52.0105 23.0222C52.1266 22.4403 52.0674 21.8371 51.8404 21.2888C51.6134 20.7406 51.2289 20.2719 50.7354 19.942C50.2418 19.6122 49.6615 19.436 49.0679 19.4358H49.0667C48.2708 19.4361 47.5077 19.7522 46.9449 20.3144C46.3821 20.8767 46.0655 21.6392 46.0648 22.4346ZM25.6072 56.1302C23.1683 56.0192 21.8427 55.6132 20.9618 55.2702C19.7939 54.8158 18.9606 54.2746 18.0845 53.4002C17.2083 52.5258 16.666 51.6938 16.2133 50.5266C15.8699 49.6466 15.4637 48.3214 15.3528 45.884C15.2316 43.2488 15.2073 42.4572 15.2073 35.781C15.2073 29.1048 15.2336 28.3154 15.3528 25.678C15.4639 23.2406 15.8731 21.918 16.2133 21.0354C16.668 19.8682 17.2095 19.0354 18.0845 18.1598C18.9594 17.2842 19.7919 16.7422 20.9618 16.2898C21.8423 15.9466 23.1683 15.5406 25.6072 15.4298C28.244 15.3086 29.036 15.2844 35.7132 15.2844C42.3904 15.2844 43.1833 15.3106 45.8223 15.4298C48.2612 15.5408 49.5846 15.9498 50.4677 16.2898C51.6356 16.7422 52.4689 17.2854 53.345 18.1598C54.2211 19.0342 54.7615 19.8682 55.2161 21.0354C55.5595 21.9154 55.9658 23.2406 56.0767 25.678C56.1979 28.3154 56.2221 29.1048 56.2221 35.781C56.2221 42.4572 56.1979 43.2466 56.0767 45.884C55.9656 48.3214 55.5573 49.6462 55.2161 50.5266C54.7615 51.6938 54.2199 52.5266 53.345 53.4002C52.4701 54.2738 51.6356 54.8158 50.4677 55.2702C49.5872 55.6134 48.2612 56.0194 45.8223 56.1302C43.1855 56.2514 42.3934 56.2756 35.7132 56.2756C29.033 56.2756 28.2432 56.2514 25.6072 56.1302ZM25.4001 10.9322C22.7371 11.0534 20.9174 11.4754 19.3282 12.0934C17.6824 12.7316 16.2892 13.5878 14.897 14.977C13.5047 16.3662 12.6502 17.7608 12.0116 19.4056C11.3933 20.9948 10.971 22.8124 10.8497 25.4738C10.7265 28.1394 10.6982 28.9916 10.6982 35.7808C10.6982 42.57 10.7265 43.4222 10.8497 46.0878C10.971 48.7494 11.3933 50.5668 12.0116 52.156C12.6502 53.7998 13.5049 55.196 14.897 56.5846C16.289 57.9732 17.6824 58.8282 19.3282 59.4682C20.9204 60.0862 22.7371 60.5082 25.4001 60.6294C28.0687 60.7506 28.92 60.7808 35.7132 60.7808C42.5065 60.7808 43.3592 60.7526 46.0264 60.6294C48.6896 60.5082 50.5081 60.0862 52.0983 59.4682C53.7431 58.8282 55.1373 57.9738 56.5295 56.5846C57.9218 55.1954 58.7745 53.7998 59.4149 52.156C60.0332 50.5668 60.4575 48.7492 60.5768 46.0878C60.698 43.4202 60.7262 42.57 60.7262 35.7808C60.7262 28.9916 60.698 28.1394 60.5768 25.4738C60.4555 22.8122 60.0332 20.9938 59.4149 19.4056C58.7745 17.7618 57.9196 16.3684 56.5295 14.977C55.1395 13.5856 53.7431 12.7316 52.1003 12.0934C50.5081 11.4754 48.6894 11.0514 46.0284 10.9322C43.3612 10.811 42.5085 10.7808 35.7152 10.7808C28.922 10.7808 28.0687 10.809 25.4001 10.9322Z"
                        fill="#111827" />
                </svg>
            </a>
        </div>
    </footer>



</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="../path/to/flowbite/dist/flowbite.bundle.js"></script>
<script>
    AOS.init();
</script>