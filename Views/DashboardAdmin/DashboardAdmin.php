
<?php headerLanding($data); ?>






    <nav class="flex justify-between m-auto hidden">
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

    <!-- Content buy -->
    <!-- Tabs -->
     

    <main class="min-h-screen mt-10 px-5 md:px-20 lg:px-32">

                    
        <div class="grid grid-cols-1 xl:grid-cols-[300px_1fr] gap-5 text-white pb-20">
            <!-- Start menu -->
            <?php include_once 'Views/Templates/MenuAdmin.php'; ?>
            <!-- End menu -->
            <!-- Content Section -->
            <div>
                <div class="flex flex-wrap md:flex-nowrap items-center justify-between border-b pb-3 border-slate-800">
                    <div class="flex items-center gap-2 flex-wrap md:flex-nowrap">
                        <div class="text-xl font-bold">Jos Kingsman</div>
                        <span class="text-slate-600 text-xs">last session ago 1 day</span>
                    </div>
                    <div class="div">
                        <button class="button-blue rounded-full py-2 px-6 text-xs font-bold">Log Out</button>
                    </div>
                </div>
                <div class="breadcumb flex items-center mt-10 text-slate-">
                    <span class="text-xs"><?php echo $data['breadcumb']; ?></span>
                    <i class="material-icons-outlined text-xs text-slate-500">chevron_right</i>
                    <span class="text-xs">
                        <?php 
                        echo ($data['section'] == 'D2') ? '2D' : (($data['section'] == 'D3') ? '3D' : $data['section']); 
                        ?>
                    </span>
                </div>

            <?php include_once 'Views/Templates/Admin/'. $data['section'] .'.php'; ?>
            
        </div>
        

    </main>





    
<?php footerLanding($data); ?>


