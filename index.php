<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME | $WAT</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Montserrat:wght@500&family=Poppins&family=Roboto:wght@500&family=Rubik+Bubbles&family=Rubik+Doodle+Shadow&family=Tomorrow:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">


    <script src="/js/reveal.min.js"></script>
    <script src="/js/board.min.js"></script>
    <link rel="icon" type="image/x-icon" href="/images/water-logo.png">

</head>

<body class="font-Montserrat bg-black">

    <!-- Header Section -->
    <nav class="nav-main ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="/images/water-icon.png" class="h-12 rounded-full md:h-14" alt="etf" />
                <span class=" md:hidden lg:block text-lg md:text-3xl font-extrabold whitespace-nowrap text-blue-500"
                    style="background-image: linear-gradient(to right, rgb(150, 24, 182), violet);
                color: transparent;
                -webkit-background-clip: text; /* For Safari and older versions of Chrome */
                background-clip: text;">WATER TOKEN</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" style="color: cyan;"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-sm md:hidden hover:bg-cyan-500  "
                aria-controls="navbar-default" aria-expanded="false" onclick="toggleMenu()">
                <span class="sr-only">Open menu</span>
                <span id="menuIcon" class="menu-icon">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </span>
            </button>
            <div class="w-full md:block md:w-auto hidden" id="navbar-default">
                <ul
                    class="font-medium flex flex-col  p-4 md:p-0 mt-4 border rounded-sm md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                    <li>
                        <a href="/"
                            class="violet block py-2 px-3 text-white text-lg lg:text-xl rounded hover:text-pink-500 md:hover:bg-transparent md:border-0 md:hover:text-pink-500 md:p-0"
                            aria-current="page"><i class="bx bx-coin"></i> HOME</a>
                    </li>
					<li>
                        <a href="#market"
                            class="violet block py-2 px-3 text-white text-lg lg:text-xl rounded hover:text-pink-500 md:hover:bg-transparent md:border-0 md:hover:text-pink-500 md:p-0"
                            aria-current="page"><i class="bx bx-coin"></i> MARKET SWAP</a>
                    </li>
					<li>
                        <a href="#mining"
                            class="violet block py-2 px-3 text-white text-lg lg:text-xl rounded hover:text-pink-500 md:hover:bg-transparent md:border-0 md:hover:text-pink-500 md:p-0  ">
                            <i class="bx bx-message-dots"></i> MINING</a>
                    </li>
                    <li>
                        <a href="#tokenomics"
                            class="violet block py-2 px-3 text-white text-lg lg:text-xl rounded hover:text-pink-500 md:hover:bg-transparent md:border-0 md:hover:text-pink-500 md:p-0"
                            aria-current="page"><i class="bx bx-coin"></i> TOKENOMICS</a>
                    </li>
					 <li>
                        <a href="#roadmap"
                            class="violet block py-2 px-3 text-white text-lg lg:text-xl rounded hover:text-pink-500 md:hover:bg-transparent md:border-0 md:hover:text-pink-500 md:p-0"
                            aria-current="page"><i class="bx bx-coin"></i> ROADMAP</a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <section
        class="flex flex-wrap justify-center items-center relative text-white text-center py-10 bg-cover bg-center">

        <div
            class="container min-w-fit hero relative z-10 lg:h-screen flex justify-center flex-col-reverse md:flex-row lg:flex-row items-center mx-5 lg:mx-10 ">
            <div
                class="main-head text-white w-full m-0 md:m-10 lg:m-0 md:w-1/3 lg:w-1/2 flex flex-col justify-center items-center gap-10">

                <h1 class="text-3xl text-center lg:text-5xl font-extrabold break-words lg:px-4 mt-6 lg:mt-0">MEME COIN
                    <br>
                    <span class="text-center text-4xl lg:text-7xl text-cyan-500 glow-text" style="background-image: linear-gradient(to right, cyan, violet);
                    color: transparent;
                    -webkit-background-clip: text;
                    background-clip: text;">WATER TOKEN</span>
                </h1>
				<p class="paragraph-centered">Water is indispensable but water is simply a meme coin without many features on the Polygon blockchain.<br/></p>
                <div class="flex justify-center items-center gap-x-3 mx-auto w-full">
                    <p class="text-white">Contract Address: </p>
                    <div id="hs-clipboard-basic" class=" text-white border border-blue-500 rounded-lg w-1/2 md:w-1/2">
                        <input id="hs-clipboard-input" type="text"
                            class="py-3 px-4 block rounded-lg text-sm w-full md:w-full placeholder:text-white focus:border-blue-500 focus:ring-blue-500 bg-gray-900 border-gray-700"
                            value="0x1e3cd7e7BDdFD6503070eb9A3fb43d15B3703f8F">
                    </div>
                    <button type="button"
                        class="js-clipboard p-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-blue-500 bg-gray-500 text-white shadow-sm hover:bg-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        data-clipboard-target="#hs-clipboard-basic" data-clipboard-action="copy"
                        data-clipboard-success-text="Copied" onclick="changeCopyText(this)">
                        <svg class="js-clipboard-default w-4 h-4 group-hover:rotate-6 transition"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="8" height="4" x="8" y="2" rx="1" ry="1" />
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
                        </svg>

                        <svg class="js-clipboard-success hidden w-4 h-4 text-blue-600"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12" />
                        </svg>
                        <span class="copy-text">COPY</span>
                    </button>
                </div>
            </div>
            <div class="main-logo  w-80 md:96 lg:w-1/2 ">
                <img class="imglogo" src="/images/water-logo.png" alt="Animated etf logo">
            </div>
        </div>

    </section>

    <!-- Market Section -->
    <section id="market" class=" text-white py-16">
        <div class="container mx-auto text-center">
            <div class="token1 flex flex-col-reverse md:flex-row md:items-center justify-start mx-4 md:mx-6 lg:mx-8">
                <h1 class="token text-5xl lg:text-7xl font-extrabold mb-8 text-white ">MARKET SWAP</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-8 m-10 align-middle ">
                <!-- UniSwap -->
                <div class="token1 p-6 border-4 border-white rounded-lg shadow-2xl">
                    <h1 class="text-3xl font-bold mb-4 text-white">UNISWAP</h1>
                    <a href="https://app.uniswap.org/swap?outputCurrency=0x1e3cd7e7BDdFD6503070eb9A3fb43d15B3703f8F&chain=polygon"
                    class="w-full md:w-1/2 lg:w-1/2">
                    <button type="button"
                        class="text-white flex justify-center gap-x-2 items-center  w-full bg-black hover:bg-white hover:text-black border border-white focus:outline-none focus:ring-4 focus:ring-white font-medium rounded-full text-lg px-5 py-2.5 me-2 mb-2 ">
                        BUY $WAT
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none"
                            class="svgg">
                            <path
                                d="M6.25 5.44702C5.56 5.44702 5 6.00702 5 6.69702V18.197C5 18.887 5.56 19.447 6.25 19.447H17.75C18.44 19.447 19 18.887 19 18.197V14.447C19 14.1818 19.1054 13.9275 19.2929 13.7399C19.4804 13.5524 19.7348 13.447 20 13.447C20.2652 13.447 20.5196 13.5524 20.7071 13.7399C20.8946 13.9275 21 14.1818 21 14.447V18.197C21 19.059 20.6576 19.8856 20.0481 20.4951C19.4386 21.1046 18.612 21.447 17.75 21.447H6.25C5.38805 21.447 4.5614 21.1046 3.9519 20.4951C3.34241 19.8856 3 19.059 3 18.197V6.69702C3 5.83507 3.34241 5.00842 3.9519 4.39892C4.5614 3.78943 5.38805 3.44702 6.25 3.44702H10C10.2652 3.44702 10.5196 3.55238 10.7071 3.73991C10.8946 3.92745 11 4.18181 11 4.44702C11 4.71224 10.8946 4.96659 10.7071 5.15413C10.5196 5.34166 10.2652 5.44702 10 5.44702H6.25ZM14 5.44702C13.7348 5.44702 13.4804 5.34166 13.2929 5.15413C13.1054 4.96659 13 4.71224 13 4.44702C13 4.18181 13.1054 3.92745 13.2929 3.73991C13.4804 3.55238 13.7348 3.44702 14 3.44702H20C20.2652 3.44702 20.5196 3.55238 20.7071 3.73991C20.8946 3.92745 21 4.18181 21 4.44702V10.447C21 10.7122 20.8946 10.9666 20.7071 11.1541C20.5196 11.3417 20.2652 11.447 20 11.447C19.7348 11.447 19.4804 11.3417 19.2929 11.1541C19.1054 10.9666 19 10.7122 19 10.447V6.86102L14.707 11.154C14.5184 11.3362 14.2658 11.437 14.0036 11.4347C13.7414 11.4324 13.4906 11.3272 13.3052 11.1418C13.1198 10.9564 13.0146 10.7056 13.0123 10.4434C13.01 10.1812 13.1108 9.92862 13.293 9.74002L17.586 5.44702H14Z"
                                fill="#ffffff"></path>
                        </svg>
                    </button>
                </a>               
                </div>
            </div>
        </div>
    </section>
	
	<!-- Mining -->
    <section id="mining" class=" text-white py-16">
        <div class="container mx-auto text-center">
            <div class="token1 flex flex-col-reverse md:flex-row md:items-center justify-start mx-4 md:mx-6 lg:mx-8">
                <h1 class="token text-5xl lg:text-7xl font-extrabold mb-8 text-white ">MINING TOKENS</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-8 m-10 align-middle ">
                <!-- Mining -->
                <div class="token1 p-6 border-4 border-white rounded-lg shadow-2xl">
                    <h1 class="text-3xl font-bold mb-4 text-white">MINING $WAT</h1>
                    <a href="#"
                    class="w-full md:w-1/2 lg:w-1/2">
                    <button type="button"
                        class="text-white flex justify-center gap-x-2 items-center  w-full bg-black hover:bg-white hover:text-black border border-white focus:outline-none focus:ring-4 focus:ring-white font-medium rounded-full text-lg px-5 py-2.5 me-2 mb-2 ">
                        START MINING
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none"
                            class="svgg">
                            <path
                                d="M6.25 5.44702C5.56 5.44702 5 6.00702 5 6.69702V18.197C5 18.887 5.56 19.447 6.25 19.447H17.75C18.44 19.447 19 18.887 19 18.197V14.447C19 14.1818 19.1054 13.9275 19.2929 13.7399C19.4804 13.5524 19.7348 13.447 20 13.447C20.2652 13.447 20.5196 13.5524 20.7071 13.7399C20.8946 13.9275 21 14.1818 21 14.447V18.197C21 19.059 20.6576 19.8856 20.0481 20.4951C19.4386 21.1046 18.612 21.447 17.75 21.447H6.25C5.38805 21.447 4.5614 21.1046 3.9519 20.4951C3.34241 19.8856 3 19.059 3 18.197V6.69702C3 5.83507 3.34241 5.00842 3.9519 4.39892C4.5614 3.78943 5.38805 3.44702 6.25 3.44702H10C10.2652 3.44702 10.5196 3.55238 10.7071 3.73991C10.8946 3.92745 11 4.18181 11 4.44702C11 4.71224 10.8946 4.96659 10.7071 5.15413C10.5196 5.34166 10.2652 5.44702 10 5.44702H6.25ZM14 5.44702C13.7348 5.44702 13.4804 5.34166 13.2929 5.15413C13.1054 4.96659 13 4.71224 13 4.44702C13 4.18181 13.1054 3.92745 13.2929 3.73991C13.4804 3.55238 13.7348 3.44702 14 3.44702H20C20.2652 3.44702 20.5196 3.55238 20.7071 3.73991C20.8946 3.92745 21 4.18181 21 4.44702V10.447C21 10.7122 20.8946 10.9666 20.7071 11.1541C20.5196 11.3417 20.2652 11.447 20 11.447C19.7348 11.447 19.4804 11.3417 19.2929 11.1541C19.1054 10.9666 19 10.7122 19 10.447V6.86102L14.707 11.154C14.5184 11.3362 14.2658 11.437 14.0036 11.4347C13.7414 11.4324 13.4906 11.3272 13.3052 11.1418C13.1198 10.9564 13.0146 10.7056 13.0123 10.4434C13.01 10.1812 13.1108 9.92862 13.293 9.74002L17.586 5.44702H14Z"
                                fill="#ffffff"></path>
                        </svg>
                    </button>
                </a>               
                </div>
            </div>
        </div>
    </section>
	
	<!-- Tokenomics Section -->
    <section id="tokenomics" class=" text-white py-16">
        <div class="container mx-auto text-center">
            <div class="token1 flex flex-col-reverse md:flex-row md:items-center justify-start mx-4 md:mx-6 lg:mx-8">
                <h1 class="token text-5xl lg:text-7xl font-extrabold mb-8 text-white ">TOKENOMICS</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-8 m-10 align-middle ">
                <!-- Total Supply -->
                <div class="token1 p-6 border-4 border-white rounded-lg shadow-2xl">
                    <h1 class="text-3xl font-bold mb-4 text-white">Token Supply</h1>
                    <p class="tok pt-5">90.000.000.000 $WAT </p>
                </div>
				<!-- Contract Renounced -->
				<div class="token1 p-6 border-4 border-white rounded-lg shadow-2xl">
                    <h1 class="text-3xl font-bold mb-4 text-white">Contract Renounced</h1>
                    <p class="tok pt-5">$WAT owners have relinquished control of it, for the benefit of everyone.</p>
                </div>
                <!-- Initial Liquidity -->
                <div class="token2 p-6 border-4 border-white rounded-lg shadow-md">
                    <h1 class="text-3xl font-bold mb-4 text-white">LP Burned</h1>
                    <p class="tok   pt-5">The $WAT Liquidity (LP) token is permanently removed from circulation.</p>
                </div>
                <!-- addd -->
                <div class="token2 p-6 border-4 border-white rounded-lg shadow-md">
                    <h1 class="text-3xl font-bold mb-4 text-white">TAX</h1>
                    <p class="tok   pt-5">No fees applied to buying, selling, or transferring $WAT</p>
                     </div>
                </div>
            </div>
        </div>
    </section>
	
	<!-- Roadmap Section -->
    <section id="roadmap" class=" text-white py-16">
        <div class="container mx-auto text-center">
            <div class="token1 flex flex-col-reverse md:flex-row md:items-center justify-start mx-4 md:mx-6 lg:mx-8">
                <h1 class="token text-5xl lg:text-7xl font-extrabold mb-8 text-white ">ROADMAP</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-8 m-10 align-middle ">
                <!-- Total Supply -->
                <div class="token1 p-6 border-4 border-white rounded-lg shadow-2xl">
                    <h1 class="text-3xl font-bold mb-4 text-white">Phase 1: Budding</h1>
                    <ul>
                    <li class="check"><i class='bx bx-check'></i>☑ Mainnet Launch</li>
                    <li class="check"><i class='bx bx-check'></i>☑ Website Launch</li>
                    <li class="check"><i class='bx bx-check'></i>☑ Contract implemented</li>
                </ul>
                </div>
                <!-- Initial Liquidity -->
                <div class="token2 p-6 border-4 border-white rounded-lg shadow-md">
                    <h1 class="text-3xl font-bold mb-4 text-white">Phase 2: Development</h1>
                    <ul>
                    <li class="check"><i class='bx bx-check'></i>☑ Social channel launched</li>
                    <li class="check"><i class='bx bx-check'></i>☑ Listing on CEX/DEX</li>
                    <li class="check"><i class='bx bx-check'></i>☒ Marketing promotion</li>
                </ul>
                </div>
                <!-- addd -->
                <div class="token2 p-6 border-4 border-white rounded-lg shadow-md">
                    <h1 class="text-3xl font-bold mb-4 text-white">Phase 3: Expansion</h1>
                    <ul>
                    <li class="check"><i class='bx bx-check'></i>☒ Deploy mining app</li>
                    <li class="check"><i class='bx bx-check'></i>☒ NFT development</li>
                    <li class="check"><i class='bx bx-check'></i>☒ Expand marketing</li>
                </ul>
                     </div>
                </div>
            </div>
        </div>
    </section>
	<!-- social section -->
    <section id="social">
        <div class="flex flex-col-reverse items-center md:flex-row justify-between gap-5 ">
            <div class="social w-full md:w-1/2 mx-4 px-4 flex justify-center items-center">
                <img class="w-80 md:96 lg:w-[1000px] mx-8" src="images/logo1.png" alt="">
            </div>

            <div class="social w-full md:w-1/2 mx-4 px-4">
                <h1 class="text-center md:text-left text-3xl lg:text-5xl font-extrabold mb-8 text-white ">Join our community</h1>
                <div class="flex items-center justify-center md:justify-start gap-4 ">  
                    <a href="https://x.com/WatertokenIO">
                        <img class="w-24 transform hover:scale-110 transition duration-200" src="/images/iconX.png"
                            alt="">
                    </a> 
                    <a href="https://t.me/Watertokenchannel">
                        <img class="w-24 transform hover:scale-110 transition duration-200" src="/images/iconTg.png"
                            alt="">
                    </a>					
                </div>
                
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-4 text-center mt-10">
        <div class="container mx-auto">
            <!-- Disclaimer, social media icons, copyright here -->
             <p class="text-sm text-white">©2024 $WAT, All Right Reserved.</p>
        </div>
    </footer>

</body>

<script>

    ScrollReveal().reveal(".social", { delay: 100, reset: true, origin: 'right', distance: '20px', duration: 300 });

    ScrollReveal().reveal(".token3", { delay: 100, reset: true, origin: 'right', distance: '500px', duration: 500 });
    ScrollReveal().reveal(".token2", { delay: 100, reset: true, origin: 'right', distance: '500px', duration: 500 });
    ScrollReveal().reveal(".token1", { delay: 100, reset: true, origin: 'right', distance: '500px', duration: 500 });

    ScrollReveal().reveal(".chart", { delay: 100, reset: true, origin: 'bottom', distance: '500px', duration: 300 });
    ScrollReveal().reveal(".main-head", { delay: 100, reset: true, origin: 'left', distance: '500px', duration: 300 });
    ScrollReveal().reveal(".main-logo", { delay: 100, reset: true, origin: 'right', distance: '500px', duration: 300 });
    ScrollReveal().reveal(".nav-main", { delay: 100, reset: true, origin: 'top', distance: '20px', duration: 300 });

    // button menu nav
    function toggleMenu() {
        var icon = document.getElementById("menuIcon");
        var navbar = document.getElementById("navbar-default");

        if (navbar.style.display === 'none' || navbar.style.display === '') {
            icon.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: cyan;"><path d="M4 6h16v2H4zm4 5h12v2H8zm5 5h7v2h-7z"></path></svg>';
            navbar.style.display = 'block';
        } else {
            icon.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: cyan;"><path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path></svg>';
            navbar.style.display = 'none';
        }
    }

    function changeCopyText(button) {
        var copyTextElement = button.querySelector('.copy-text');
        if (copyTextElement) {
            copyTextElement.textContent = 'copied';
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        var clipboard = new ClipboardJS('.js-clipboard');
    });


    const menuIcon = document.querySelector('#menu-icon');
    const navbar = document.querySelector('.navbar');
    const navbg = document.querySelector('.nav-bg');
    menuIcon.addEventListener('click', () => {
        menuIcon.classList.toggle('bx-x');
        navbar.classList.toggle('active');
        navbg.classList.toggle('active');
    });
</script>

</html>