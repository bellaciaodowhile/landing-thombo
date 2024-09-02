
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
                <button type="button" class="rounded-full py-2 px-7 button-blue text-white">Log In</button>
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
                    <button type="button" class="rounded-full py-2 px-7 button-blue text-white">Log In</button>
                </div>
            </div>
        </div>
        
    </aside>
    
    <header id="home" class="min-h-screen absolute w-full left-0 top-0 pt-[211px] px-5 md:px-20 lg:px-32 z-10">
        <h1 class="hero-title text-4xl md:text-6xl font-extralight mt-10">Fastest & secure <br> crypto marketplace</h1>
        <p class="mt-4 max-w-xl text-white font-extralight opacity-70 leading-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, porro, culpa doloremque explicabo asperiores aperiam quod officia, quidem iusto ad perspiciatis laborum dolorem voluptatem earum sunt minima nobis error. Doloribus!</p>
        <div class="flex flex-wrap max-w-lg gap-2 md:gap-5 mt-5">
            <button class="rounded-full text-white py-3 px-7 button-blue grow">Buy Now</button>
            <button class="rounded-full text-white py-3 px-7 button-purple grow">Sell</button>
            <button class="rounded-full text-white py-3 px-7 button-orange grow">Trade</button>
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
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="w-full md:max-w-sm">
                <p class="text-white"><strong>Thombo</strong><span class="opacity-70"> is the best platform to buy, sell and exchange multiple cryptos with ease.</span></p>
                <div class="flex items-center justify-center mt-5 flex-wrap gap-3">
                    <input type="email" class="rounded-full p-3 bg-[#0000] border border-[#E5F2EF] opacity-70 text-white grow" placeholder="Your email">
                    <button class="button-blue rounded-full text-sm py-4 px-5">Subscribe</button>
                </div>
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
                    <a class="opacity-50 text-sm" href="#">
                        Log In
                    </a>
                </li>
            </ul>
        </div>
        <hr class="opacity-20 my-3">
        <small class="text-white opacity-70 block mb-10">2024</small>
    </footer>





    
<?php footerLanding($data); ?>


