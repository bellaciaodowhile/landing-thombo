
<?php headerLanding($data); ?>






    <nav class="flex justify-between m-auto">
        <div class="cursor-pointer mt-10 ml-10 block lg:hidden trigger-sidebar fixed z-30">
            <div class="w-7 bg-white h-[1px]"></div>
            <div class="w-7 bg-white h-[1px] my-2"></div>
            <div class="w-7 bg-white h-[1px]"></div>
        </div>
        <div class="hidden lg:flex justify-end absolute items-start w-full left-0 top-0 px-5 md:px-20 lg:px-20 z-20">
            <!-- <img src="<?php echo media() . 'images/logo.png'; ?>" alt="Thombo Logo"> -->
            <div class="flex gap-10 items-center pt-8">
                <ul class="flex gap-10">
                    <li>
                        <a href="<?php echo BASE_URL; ?>" class="text-nav">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>#services" class="text-nav">Services</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>#support" class="text-nav">Support</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL; ?>" class="text-nav">FAQs</a>
                       
                    </li>
                </ul>
                <?php if ($_SESSION['login']) { ?>
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
                    <?php if ($_SESSION['login']) { ?>
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

    <!-- Content buy -->
    <!-- Tabs -->
     

    <main class="min-h-screen mt-[100px] px-5 md:px-20 lg:px-32 pb-20">
        

        <div class="mb-7">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-white hover:text-white-600 dark:text-white-500 dark:hover:text-white-500 border-blue-600 dark:border-blue-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 px-10 border-b-2 rounded-t-lg" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Buy</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 px-10 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Sell</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 px-10 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Trade</button>
                </li>
            </ul>
        </div>
        <div id="default-styled-tab-content">
            <div class="animate__animated animate__fadeIn hidden" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">

                <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-5 md:gap-10">
                    <div class="bg-white rounded-xl p-5 md:p-10 h-auto realtime-card">
                        <img src="<?php echo media() . 'images/coins/icons/usdt.png'; ?>" alt="USDT" class="mx-auto w-20">
                        <div class="mt-16 text-gray-400 text-center">You are buying</div>
                        <div class="flex flex-wrap md:flex-nowrap border-b border-gray-100 mt-5 justify-center">
                            <input type="number" class="outline-0 text-black font-bold inline-block text-right w-48 pb-3 text-xl md:text-6xl realtime-input" value="1000" min="0">
                            <span class="current-coin font-light text-gray-500 block uppercase md:pt-4 text-md md:text-5xl">usdt</span>
                        </div>
                        <div class="relative mt-10 field-password">
                            <input type="password" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer pr-12" placeholder=" " />
                            <i class="material-icons absolute text-gray-500 text-md right-[14px] top-[12px] cursor-pointer view-password">visibility</i>
                            <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Wallet Address</label>
                        </div>
                        <div class="mt-8">
                            <div class="flex flex-wrap justify-between text-sm">
                                <div class="text-gray-300"><span>USDT</span> Price</div>
                                <span class="text-gray-300">1.02 EUR</span>
                            </div>
                            <div class="flex flex-wrap justify-between text-sm my-3">
                                <div class="text-gray-300 flex items-center"><span class="mr-2">Fee</span> <i class="material-icons-outlined text-[20px]">info</i></div>
                                <span class="text-gray-300"><span class="fee">1</span> EUR</span>
                            </div>
                            <div class="flex flex-wrap justify-between text-sm">
                                <div class="text-gray-300">You pay</div>
                                <span class="text-gray-800 font-bold"><span class="total-price">999.02</span> EUR</span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl p-5 md:p-10 flex flex-col justify-between">
                        <div>
                            <div class="text-xl md:text-2xl font-bold">Select payment method</div>
                            <div class="text-gray-400 text-sm mt-5">
                                Credit / Debit card (supports  <img src="<?php echo media() . 'images/helpers/visa-mastercard.png'; ?>" alt="USDT" class="inline-flex">) 
                            </div>
                            <div class="flex items-center ps-4 border border-gray-100 rounded-full mt-4 pr-4">
                                <label for="bordered-radio-2" class="w-full py-4 pr-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300 flex justify-between">
                                    <div class="flex flex-wrap items-center">
                                        <img src="<?php echo media() . 'images/helpers/visa-only.png'; ?>" alt="Visa" class="inline-flex">
                                        <span class="font-semibold text-black">Visa (... 4321)</span>
                                    </div>
                                    <div class="flex flex-wrap items-center">
                                        <div>
                                            <span class="text-black font-semibold">1.21 EUR</span> 
                                            <span class="text-gray-300">/ 1 USDT</span>
                                        </div>
                                    </div>
                                </label>
                                <input checked id="bordered-radio-2" type="checkbox" value="" name="bordered-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 rounded-full">
                            </div>
                            <button  data-modal-target="addNewCard" data-modal-toggle="addNewCard" type="button" class="mt-3 rounded-full text-black flex justify-center p-4 text-center border w-full text-sm border-dashed font-semibold add-new-card">
                                <i class="material-icons-outlined text-[20px] mr-1">credit_card</i> Add a new card
                            </button>
                        </div>
                        <button class="bg-gray-900 text-white w-56 font-semibold text-sm text-center p-3 rounded-full mx-auto mt-32">
                            Pay
                        </button>
                    </div>
                </div>

            </div>
            <div class="animate__animated animate__fadeIn hidden p-4 rounded-lg" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-5 md:gap-10">
                    <div class="bg-white rounded-xl p-5 md:p-10 h-auto realtime-card">
                        <img src="<?php echo media() . 'images/coins/icons/usdt.png'; ?>" alt="USDT" class="mx-auto w-20">
                        <div class="mt-16 text-gray-400 text-center">You are buying</div>
                        <div class="flex flex-wrap md:flex-nowrap border-b border-gray-100 mt-5 justify-center">
                            <input type="number" class="outline-0 text-black font-bold inline-block text-right w-48 pb-3 text-xl md:text-6xl realtime-input" value="20" min="0">
                            <span class="current-coin font-light text-gray-500 block uppercase md:pt-4 text-md md:text-5xl">usdt</span>
                        </div>
                        <div class="mt-20">
                            <div class="flex flex-wrap justify-between text-sm">
                                <div class="text-gray-300"><span>USDT</span> Price</div>
                                <span class="text-gray-300">1.02 EUR</span>
                            </div>
                            <div class="flex flex-wrap justify-between text-sm my-3">
                                <div class="text-gray-300 flex items-center"><span class="mr-2">Fee</span> <i class="material-icons-outlined text-[20px]">info</i></div>
                                <span class="text-gray-300"><span class="fee">0.02</span> EUR</span>
                            </div>
                            <div class="flex flex-wrap justify-between text-sm">
                                <div class="text-gray-300">You pay</div>
                                <span class="text-gray-800 font-bold"><span class="total-price">19.04</span> EUR</span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl p-5 md:p-10 flex flex-col justify-between">

                    </div>
                </div>
            </div>
            <div class="animate__animated animate__fadeIn hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">
                <div class="text-2xl capitalize">trade</div>
            </div>
        </div>

    </main>
    <!-- Main modal -->
    <div id="addNewCard" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <div class="flex breadcumb-cardnumber">
                        <div class="flex items-center text-gray-500 active-breadcumb mr-3">
                            <span class="w-4 h-4 rounded-full text-gray-400 flex items-center justify-center text-xs mr-1 number bg-gray-200">1</span>
                            <span>Card details</span>
                        </div>
                        <div class="flex items-center text-gray-500">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="w-4 h-4 rounded-full flex items-center bg-gray-200 justify-center text-xs mr-1 number">2</span>
                            <span>Billing address</span>
                        </div>
                    </div>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="addNewCard">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 relative">
                    <div class="text-2xl font-bold">Card Details</div>
                    
                    <div class="bg-green-100 flex items-center justify-center text-green-500 p-2 rounded-md text-sm opacity-70 mt-10 block">
                        <i class="material-icons text-sm">verified_user</i>Your personal information is encrypted through the whole process
                    </div>

                    <div class="step-1 animate__animated animate__fadeIn">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div class="relative mt-10">
                                    <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-100 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">First name</label>
                                </div>
                                <div class="relative mt-10">
                                    <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-100 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Last name</label>
                                </div>
                        </div>
                        <div class="relative mt-5">
                            <input type="number" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-100 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer pr-20" placeholder=" " />
                            <img src="<?php echo media() . 'images/helpers/visa-input.png'; ?>" alt="Visa" class="absolute right-[10px] top-[15px]">
                            <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Card number</label>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                            <div class="relative">
                                <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-100 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Expiration</label>
                            </div>
                            <div class="relative">
                                <input type="number" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-100 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">CVV</label>
                            </div>
                        </div>

                        <div class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 rounded-b mt-20">
                            <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 next-add-newcard">Continue</button>
                        </div>
                    </div>
                    <div class="step-2 hidden animate__animated animate__fadeIn mt-10">
                        <select id="underline_select" class="block py-3 w-full text-sm text-gray-500 bg-transparent border-0 border-[1px] rounded-lg border-gray-100 appearance-none p-3 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option selected>Country/region</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                        <div class="relative mt-5">
                            <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-100 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Address line 1</label>
                        </div>
                        <div class="relative mt-5">
                            <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-100 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Address line 2</label>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-5">
                            <div class="relative">
                                <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-100 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">City</label>
                            </div>
                            <div class="relative">
                                <input type="number" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-100 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">ZIP/postal code</label>
                            </div>
                        </div>

                        <div class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 rounded-b mt-20">
                            <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 previous-add-newcard">Previous</button>
                            <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 confirm-add-newcard">Confirm</button>
                        </div>
                    </div>

                    <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center hidden add-card-success animate__animated animate__fadeIn">
                        <div class="m-auto py-2 px-3 rounded-md bg-black text-white">Add card successfully</div>
                    </div>

                   
                </div>
                
            </div>
        </div>
    </div>




    





    
<?php footerLanding($data); ?>


