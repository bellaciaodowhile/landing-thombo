
<?php headerLanding($data); ?>

    <nav class="flex justify-between m-auto">
        <div class="cursor-pointer mt-10 ml-10 block lg:hidden trigger-sidebar fixed z-30">
            <div class="w-7 bg-white h-[1px]"></div>
            <div class="w-7 bg-white h-[1px] my-2"></div>
            <div class="w-7 bg-white h-[1px]"></div>
        </div>
        <div class="hidden lg:flex justify-between absolute items-start w-full left-0 top-0 px-5 md:px-20 lg:px-20 z-20">
            <img src="<?php echo media() . 'images/logo.png'; ?>" alt="Thombo Logo">
            <div class="flex gap-10 items-center pt-8">
                <ul class="flex gap-10">
                    <li>
                        <a href="#home" class="text-nav">Home</a>
                    </li>
                    <li>
                        <a href="#services" class="text-nav">Services</a>
                    </li>
                    <li>
                        <a href="#support" class="text-nav">Support</a>
                    </li>
                    <li>
                        <a href="#" class="text-nav">FAQs</a>
                       
                    </li>
                </ul>
                <?php if (isset($_SESSION['login'])) { ?>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="profile" class="capitalize text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"><?php echo $_SESSION['nombre']; ?> <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="profile" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="<?php echo BASE_URL . 'buy'; ?>" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Buy</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL . 'logout'; ?>" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                        </li>
                        </ul>
                    </div>

                <?php } else { ?>
                    <button type="button" class="rounded-full py-2 px-7 button-blue text-white trigger-login">Log In</button>
                <?php } ?>
            </div>
        </div>
    </nav>
    <aside class="fixed h-full z-30 top-0 left-0 w-full sidebar hidden">
        <div class="absolute w-full h-full bg-black opacity-70 blur-sm overlay"></div>
        <div class="max-w-[300px] w-[300px] bg-[#050323] h-full absolute z-20">
            <div class="close-sidebar text-white cursor-pointer float-right p-5">✕</div>
            <div class="flex flex-col items-center w-full">
                <img src="<?php echo media() . 'images/logo.png'; ?>" alt="Thombo Logo">
                <div class="flex flex-col gap-10 items-center pt-8">
                    <ul class="flex flex-col gap-10">
                        <li>
                            <a href="#home" class="text-nav">Home</a>
                        </li>
                        <li>
                            <a href="#services" class="text-nav">Services</a>
                        </li>
                        <li>
                            <a href="#support" class="text-nav">Support</a>
                        </li>
                        <li>
                            <a href="#" class="text-nav">FAQs</a>
                        </li>
                    </ul>
                    <?php if (isset($_SESSION['login'])) { ?>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="profileNavbar" class="capitalize text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"><?php echo $_SESSION['nombre']; ?> <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="profileNavbar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Buy</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="<?php echo BASE_URL . 'logout'; ?>" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                        </li>
                        </ul>
                    </div>

                <?php } else { ?>
                    <button type="button" class="rounded-full py-2 px-7 button-blue text-white trigger-login">Log In</button>
                <?php } ?>
                </div>
            </div>
        </div>
        
    </aside>
    <!-- Login and register -->

    <section class="fixed w-full md:w-[400px] right-0 top-0 bg-white h-full p-5 md:p-10 py-20 z-30 flex flex-col justify-center login right-[-400px] transition-all ease-in-out duration-300 ">
        <div class="float-right absolute top-[20px] right-[20px] cursor-pointer close-login">✕</div>
        <form class="sign-in animate__animated animate__fadeIn">
            <div class="text-xl font-bold">Welcome to back</div>
            <div class="flex flex-col mt-4">
                <small class="text-slate-600 text-xs ml-3 mb-2">Login</small>
                <input type="text" class="p-3 bg-gray-100 text-black rounded-lg outline-0 text-sm" name="email" required autocomplete="off" placeholder="Email or username">
            </div>
            <div class="flex flex-col mt-3 relative field-password">
                <small class="text-slate-600 text-xs ml-3 mb-2">Password</small>
                <input type="password" class="p-3 bg-gray-100 text-black rounded-lg outline-0 text-sm" name="password" required placeholder="Enter password">
                <i class="material-icons absolute text-gray-500 text-md right-[14px] top-[36px] cursor-pointer view-password">visibility</i>
            </div>
            <div class="mt-5 flex justify-between">
                <label class="inline-flex items-center mb-5 cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-300 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    <span class="ms-3 text-sm text-gray-900 dark:text-gray-300">Remember me</span>
                </label>
                <a href="#" class="text-blue-500 text-sm">Forgot password?</a>
            </div>
            <button type="submit" class="button-blue text-center py-2 rounded-md text-white w-full mt-6 font-semibold">
                Sign In
            </button>
            <button type="button" class="text-center py-2 rounded-md text-blue-500 w-full mt-6 font-semibold trigger-sign">
                Sign Up
            </button>
        </form>
        <form class="sign-up hidden animate__animated animate__fadeIn">
            <div class="text-xl font-bold">Register</div>
            <div class="flex flex-col mt-4">
                <small class="text-slate-600 text-xs ml-3 mb-2">Name</small>
                <input type="text" class="p-3 bg-gray-100 text-black rounded-lg outline-0 text-sm" required placeholder="Joe" name="name">
            </div>
            <div class="flex flex-col mt-3">
                <small class="text-slate-600 text-xs ml-3 mb-2">Lastname</small>
                <input type="text" class="p-3 bg-gray-100 text-black rounded-lg outline-0 text-sm" required placeholder="Kingsman" name="lastname">
            </div>
            <div class="flex flex-col mt-3">
                <small class="text-slate-600 text-xs ml-3 mb-2">Email</small>
                <input type="email" class="p-3 bg-gray-100 text-black rounded-lg outline-0 text-sm" required placeholder="email@mail.com" name="email">
            </div>
            <div class="flex flex-col mt-3 relative field-password">
                <small class="text-slate-600 text-xs ml-3 mb-2">Password</small>
                <input type="password" class="p-3 bg-gray-100 text-black rounded-lg outline-0 text-sm" required placeholder="Enter password" name="password">
                <i class="material-icons absolute text-gray-500 text-md right-[14px] top-[36px] cursor-pointer view-password">visibility</i>
            </div>
            <div class="flex flex-col mt-3 relative field-password">
                <small class="text-slate-600 text-xs ml-3 mb-2">Repeat password</small>
                <input type="password" class="p-3 bg-gray-100 text-black rounded-lg outline-0 text-sm" required placeholder="Enter password" name="repeat_password">
                <i class="material-icons absolute text-gray-500 text-md right-[14px] top-[36px] cursor-pointer view-password">visibility</i>
            </div>
            <button type="submit" class="button-blue text-center py-2 rounded-md text-white w-full mt-6 font-semibold">
                Sign Up
            </button>
            <button type="button" class="text-center py-2 rounded-md text-blue-500 w-full mt-6 font-semibold trigger-sign">
                Sign In
            </button>
        </form>
    </section>

     <!-- End login and register -->
    
    <header id="home" class="min-h-screen absolute w-full left-0 top-0 pt-[211px] px-5 md:px-20 lg:px-32 z-10">
        <h1 class="hero-title text-4xl md:text-6xl font-extralight mt-10">Fastest & secure <br> crypto marketplace</h1>
        <p class="mt-4 max-w-xl text-white font-extralight opacity-70 leading-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, porro, culpa doloremque explicabo asperiores aperiam quod officia, quidem iusto ad perspiciatis laborum dolorem voluptatem earum sunt minima nobis error. Doloribus!</p>
        <div class="flex flex-wrap max-w-lg gap-2 md:gap-5 mt-5">
            <a class="rounded-full text-white text-center py-3 px-7 button-blue grow buy-now" type="button" href="<?php echo BASE_URL . 'buy'; ?>">Buy Now</a>
            <a class="rounded-full text-white text-center py-3 px-7 button-purple grow sell-now" href="<?php echo BASE_URL . 'buy'; ?>">Sell</a>
            <button class="rounded-full text-white text-center py-3 px-7 button-orange grow">Trade</button>
        </div>
        <div class="flex flex-wrap max-w-xl mt-32 gap-10 items-center justify-center md:justify-start">
            <img src="<?php echo media() . 'images/coins/1.png'; ?>" alt="1" class="w-24 h-full p-1">
            <img src="<?php echo media() . 'images/coins/2.png'; ?>" alt="2" class="w-24 h-full p-1">
            <img src="<?php echo media() . 'images/coins/3.png'; ?>" alt="3" class="w-24 h-full p-1">
            <img src="<?php echo media() . 'images/coins/4.png'; ?>" alt="4" class="w-24 h-full p-1">
            <img src="<?php echo media() . 'images/coins/5.png'; ?>" alt="5" class="w-24 h-full p-1">
            <img src="<?php echo media() . 'images/coins/6.png'; ?>" alt="6" class="w-24 h-full p-1">
            <img src="<?php echo media() . 'images/coins/7.png'; ?>" alt="7" class="w-24 h-full p-1">
            <img src="<?php echo media() . 'images/coins/8.png'; ?>" alt="8" class="w-24 h-full p-1">
        </div>
    </header>
    <main class="mt-[900px] md:mt-screen px-5 md:px-20 lg:px-32">
        <section class="pt-72 pb-32 relative flex flex-wrap justify-center gap-5" id="services">
            <img src="<?php echo media() . 'images/helpers/points.png'; ?>" alt="PointsHelper" class="absolute top-[180px] left-[-40px]">
            <img src="<?php echo media() . 'images/helpers/points.png'; ?>" alt="PointsHelper" class="absolute bottom-0 right-[0px] md:right-[-40px]">
            <article class="card-border max-w-md md:max-w-xs text-center flex flex-col items-center p-10 rounded-lg">
                <div class="icon p-5 rounded-lg">
                    <img src="<?php echo media() . 'images/helpers/icons/messages.png'; ?>" alt="">
                </div>
                <h3 class="font-bold text-xl text-white mt-5">Support</h3>
                <p class="opacity-70 leading-7 text-white mt-2">Whether you have a team of 2 or 200, our shared team inboxes keep everyone</p>
            </article>
            <article class="card-border max-w-md md:max-w-xs text-center flex flex-col items-center p-10 rounded-lg blue-dark">
                <div class="icon p-5 rounded-lg">
                    <img src="<?php echo media() . 'images/helpers/icons/showcart.png'; ?>" alt="">
                </div>
                <h3 class="font-bold text-xl text-white mt-5">Quality & Fast</h3>
                <p class="opacity-70 leading-7 text-white mt-2">Whether you have a team of 2 or 200, our shared team inboxes keep everyone</p>
            </article>
            <article class="card-border max-w-md md:max-w-xs text-center flex flex-col items-center p-10 rounded-lg">
                <div class="icon p-5 rounded-lg">
                    <img src="<?php echo media() . 'images/helpers/icons/user.png'; ?>" alt="">
                </div>
                <h3 class="font-bold text-xl text-white mt-5">Transparent</h3>
                <p class="opacity-70 leading-7 text-white mt-2">Whether you have a team of 2 or 200, our shared team inboxes keep everyone</p>
            </article>
        </section>
        <section class="mt-20 pb-32">
            <h2 class="text-white text-4xl text-center">Popular Wallet</h2>
            <section class="flex flex-wrap gap-10 mt-12 justify-center">
                <article class="card-wallet rounded-[16px] p-5 min-w-full md:min-w-[300px]">
                    <div class="flex justify-between items-center">
                        <span class="text-white opacity-90">Bitcoin</span>
                        <span class="text-white opacity-70 text-xs">BTC/USDT</span>
                    </div>
                    <span class="text-white font-number text-3xl font-bold my-5 block">$40,322.50</span>
                    <div class="flex justify-between">
                        <button class="button-orange text-white font-light rounded-full p-1 text-xs">+0.23%</button>
                        <img src="<?php echo media() . 'images/helpers/icons/chart-orange.png'; ?>" class="w-20">
                    </div>
                </article>
                <article class="card-wallet rounded-[16px] p-5 min-w-full md:min-w-[300px]">
                    <div class="flex justify-between items-center">
                        <span class="text-white opacity-90">Ethereume</span>
                        <span class="text-white opacity-70 text-xs">ETH/USDT</span>
                    </div>
                    <span class="text-white font-number text-3xl font-bold my-5 block">$40,322.50</span>
                    <div class="flex justify-between">
                        <button class="button-purple text-white font-light rounded-full py-1 px-2 text-xs">+0.23%</button>
                        <img src="<?php echo media() . 'images/helpers/icons/chart-purple.png'; ?>" class="w-20">
                    </div>
                </article>
                <article class="card-wallet rounded-[16px] p-5 min-w-full md:min-w-[300px]">
                    <div class="flex justify-between items-center">
                        <span class="text-white opacity-90">Ripple</span>
                        <span class="text-white opacity-70 text-xs">XRP/USDT</span>
                    </div>
                    <span class="text-white font-number text-3xl font-bold my-5 block">$40,322.50</span>
                    <div class="flex justify-between">
                        <button class="button-lightblue text-white font-light rounded-full py-1 px-2 text-xs">+0.23%</button>
                        <img src="<?php echo media() . 'images/helpers/icons/chart-lightblue.png'; ?>" class="w-20">
                    </div>
                </article>
            </section>
            <button class="rounded-full py-2 px-5 button-outlined-blue-intensy mx-auto mt-12 block">
                Lorem ipsum
            </button>
        </section>
        <!-- Market trend -->
        <section class="mt-20">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-7">
                <div class="text-white lg:col-span-5">
                    <h3 class="text-4xl">Market Trend</h3>
                    <p class="my-10 leading-7 opacity-70">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis reiciendis, numquam illo doloribus unde sit alias tenetur, vel sint cum nostrum voluptatem dolores placeat architecto, dolore eaque amet minus ex.</p>
                    <button class="button-blue rounded-full py-2 px-5 text-sm">Lorem ipsum</button>
                </div>
                <div class="lg:col-span-7">
                    <img src="<?php echo media() . 'images/helpers/table-market-trend.png'; ?>" alt="Table Market Trend">
                </div>
            </div>
        </section>
        <!-- Numbers -->
        <section class="mt-32">
           <div class="flex flex-wrap gap-10 justify-center">
            <div class="flex flex-col justify-center text-center text-white">
                <span class="block text-5xl font-bold">45M+</span>
                <span class="block opacity-70 mt-2 font-extralight text-sm">User worldwide</span>
            </div>
            <div class="flex flex-col justify-center text-center text-white">
                <span class="block text-5xl font-bold">120</span>
                <span class="block opacity-70 mt-2 font-extralight text-sm">Country Supported</span>
            </div>
            <div class="flex flex-col justify-center text-center text-white">
                <span class="block text-5xl font-bold">73M+</span>
                <span class="block opacity-70 mt-2 font-extralight text-sm">Crypto Transactions</span>
            </div>
            <div class="flex flex-col justify-center text-center text-white">
                <span class="block text-5xl font-bold">$470B</span>
                <span class="block opacity-70 mt-2 font-extralight text-sm">Assets on Plataform</span>
            </div>
           </div>
        </section>
        <section class="mt-32 text-center flex flex-col justify-center items-center">
            <span class="block uppercase color-orange text-md tracking-[4px]">send and receive</span>
            <span class="block text-white text-3xl md:text-5xl max-w-lg mt-10">Easily send and receive cryptocurrency</span>
        </section>
    </main>
    <img src="<?php echo media() . 'images/helpers/map.png'; ?>" alt="Mapa" class="mt-32">
    <article class="px-5 md:px-20 lg:px-32">
        <section class="mt-20" id="support">
            <div class="text-4xl text-white text-center">Simple steps to get started</div>
            <div class="grid grid-cols-1 md:grid-cols-2 md:justify-items-center">
                <div class="items-numbers mt-12 grid grid-cols-1 gap-12">
                    <div class="item flex items-center gap-10 text-white">
                        <span class="text-4xl opacity-10 font-semibold">01.</span>
                        <div class="flex flex-col">
                            <div>Quick sign-up</div>
                            <span class="opacity-70 mt-3 text-sm">It’ll take you 2 minutes top</span>
                        </div>
                    </div>
                    <div class="item flex items-center gap-10 text-white">
                        <span class="text-4xl opacity-10 font-semibold">02.</span>
                        <div class="flex flex-col">
                            <div>Security setup</div>
                            <span class="opacity-70 mt-3 text-sm">It’ll take you 2 minutes top</span>
                        </div>
                    </div>
                    <div class="item flex items-center gap-10 text-white">
                        <span class="text-4xl opacity-10 font-semibold">03.</span>
                        <div class="flex flex-col">
                            <div>Connect bank</div>
                            <span class="opacity-70 mt-3 text-sm">It’ll take you 2 minutes top</span>
                        </div>
                    </div>
                </div>
                <div class="items-numbers mt-12 grid grid-cols-1 gap-12">
                    <div class="item flex items-center gap-10 text-white">
                        <span class="text-4xl opacity-10 font-semibold">04.</span>
                        <div class="flex flex-col">
                            <div>Start treading</div>
                            <span class="opacity-70 mt-3 text-sm">Start trading at your desired rate, and get paid.</span>
                        </div>
                    </div>
                    <div class="item flex items-center gap-10 text-white">
                        <span class="text-4xl opacity-10 font-semibold">05.</span>
                        <div class="flex flex-col">
                            <div>Lunch</div>
                            <span class="opacity-70 mt-3 text-sm">Enjoy your trading experiance</span>
                        </div>
                    </div>
                    <div class="item flex items-center gap-10 text-white">
                        <button class="button-blue py-3 px-8 text-white rounded-full text-sm w-full md:w-auto">Get Started</button>
                    </div>
                </div>
            </div>
            
        </section>
        <section class="card-footer text-white text-center py-20 px-5 md:p-20 mt-32 rounded-[20px] max-w-3xl mx-auto">
            <div class="text-4xl">Get ready to explore the crypto world</div>
            <div class="opacity-70 mt-5">Join now with <span class="opacity-100">Thombo</span> to get the latest news and start mining now.</div>
            <button class="button-blue rounded-full px-10 py-3 mt-10">Get Started</button>
        </section>
    </article>
    <footer class="px-5 md:px-20 lg:px-32 pt-32">
        <img src="<?php echo media() . 'images/logo.png'; ?>" alt="Thombo Logo" class="w-32">
        <div class="flex flex-col md:flex-row  md:justify-between flex-wrap gap-12">
            <div class="w-full md:max-w-sm">
                <p class="text-white"><strong>Thombo</strong><span class="opacity-70"> is the best platform to buy, sell and exchange multiple cryptos with ease.</span></p>
                <div class="flex items-center justify-center mt-5 xs:flex-wrap gap-3">
                    <input type="email" class="rounded-full p-3 bg-[#0000] border border-[#E5F2EF] opacity-70 text-white grow" placeholder="Your email">
                    <button class="button-blue rounded-full text-sm py-4 px-5">Subscribe</button>
                </div>
            </div>
            <div class="text-white">
                <div class="font-bold mb-3">Socials</div>
                <ul class="flex flex-wrap gap-5">
                    <li>
                        <a class="opacity-50 text-sm" href="#">
                            <img class="icon-white w-7" src="<?php echo media() . 'images/helpers/icons/socials/instagram.png'; ?>" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="opacity-50 text-sm" href="#">
                            <img class="icon-white w-7" src="<?php echo media() . 'images/helpers/icons/socials/x.png'; ?>" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="opacity-50 text-sm" href="#">
                            <img class="icon-white w-7" src="<?php echo media() . 'images/helpers/icons/socials/telegram.png'; ?>" alt="">
                        </a>
                    </li>
                    <li>
                        <a class="opacity-50 text-sm" href="#">
                            <img class="icon-white w-7" src="<?php echo media() . 'images/helpers/icons/socials/discord.png'; ?>" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="text-white">
                <li class="font-bold mb-3">Menu</li>
                <li>
                    <a class="opacity-50 text-sm" href="#home">
                        Home
                    </a>
                </li>
                <li>
                    <a class="opacity-50 text-sm" href="#services">
                        Services
                    </a>
                </li>
                <li>
                    <a class="opacity-50 text-sm" href="#support">
                        Support
                    </a>
                </li>
                <li>
                    <a class="opacity-50 text-sm" href="#">
                        FAQs
                    </a>
                </li>
                <li>
                    <a class="opacity-50 text-sm trigger-login trigger-login" href="javascript:void(0);">
                        Log In
                    </a>
                </li>
            </ul>
        </div>
        <hr class="opacity-20 my-3">
        <small class="text-white opacity-70 block mb-10">2024</small>
    </footer>





    
<?php footerLanding($data); ?>


