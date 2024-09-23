<?php headerLanding($data); ?>


<div class="min-h-screen mt-10 px-5 md:px-20 lg:px-32 text-white">
    <div>
        <div class="flex flex-wrap md:flex-nowrap items-center justify-between border-b pb-3 border-slate-800">
            <div class="flex items-center gap-2 flex-wrap md:flex-nowrap">
                <div class="text-xl font-bold capitalize"><?php echo $_SESSION['nombre']; ?></div>
                <span class="text-slate-600 text-xs">last session ago 1 day</span>
            </div>
            <div class="flex gap-2">
                <button id="dropdownDefaultButton" data-dropdown-toggle="profile" class="capitalize text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"><?php echo $_SESSION['nombre']; ?> <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="profile" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="<?php echo BASE_URL; ?>" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL . 'buy'; ?>" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Buy</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL . 'history'; ?>" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Transaction history</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL . 'logout'; ?>" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="breadcumb flex items-center mt-10">
            <span class="text-xs">Transactions</span>
            <i class="material-icons-outlined text-xs text-slate-500">chevron_right</i>
            <span class="text-xs">History</span>
        </div>
    </div>



    <div class="block flex items-center justify-between flex-wrap lg:flex-nowrap mt-5 gap-5">
        <div class="flex flex-wrap lg:flex-nowrap gap-5">
            <input type="search" class="py-3 px-4 rounded-xl border border-slate-800 outline-0 bg-[#0000] w-full lg:w-auto" placeholder="Search">
            <input type="date" class="py-3 px-4 rounded-xl border border-slate-800 outline-0 bg-[#0000] w-full lg:w-auto" placeholder="dd/mm/yy">
        </div>
        <div class="flex flex-wrap md:flex-nowrap gap-2">
            <button class="rounded-full px-5 py-2 capitalize bg-blue-500 border border-3 border-blue-500 duration-300 hover:-translate-y-1 filter-history">All</button>
            <button class="rounded-full px-5 py-2 capitalize border border-3 border-blue-500 duration-300 hover:-translate-y-1 filter-history">Bought</button>
            <button class="rounded-full px-5 py-2 capitalize border border-3 border-blue-500 duration-300 hover:-translate-y-1 filter-history">Sold</button>
            <button class="rounded-full px-5 py-2 capitalize border border-3 border-blue-500 duration-300 hover:-translate-y-1 filter-history">Traded</button>
        </div>
    </div>
    
    <div class="border border-slate-800 p-6 rounded-lg mt-5 overflow-x-auto">
        <table class="text-white w-full">
            <thead class="mb-5 opacity-80">
                <tr class="text-left">
                    <th scope="col" class="font-light text-sm px-3 py-2">#</th>
                    <th scope="col" class="font-light text-sm px-3 py-2">Name</th>
                    <th scope="col" class="font-light text-sm px-3 py-2">Movement</th>
                    <th scope="col" class="font-light text-sm px-3 py-2">Date</th>
                    <th scope="col" class="font-light text-sm px-3 py-2">Details</th>
                </tr>
            </thead>
            <tbody>
                <tr class="mt-5">
                    <td scope="row" class="px-5 py-4 font-semibold relative">
                        <span></span> 1
                    </td>
                    <td scope="row" class="px-5 py-4 flex items-center">
                        Transaction
                    </td>
                    <td scope="row" class="px-5 py-4 font-semibold">$00.00</td>
                    <td scope="row" class="px-5 py-4 font-semibold">00/00/0000</td>
                    <td scope="row" class="px-5 py-4">
                        <button data-modal-target="details-transaction" data-modal-toggle="details-transaction" class="button-outlined-blue-intensy flex items-center justify-center py-1 px-3 rounded-full">
                            <i class="material-icons-outlined">visibility</i>
                        </button>
                    </td>
                </tr>
                <tr class="mt-5">
                    <td scope="row" class="px-5 py-4 font-semibold relative">
                        <span></span> 2
                    </td>
                    <td scope="row" class="px-5 py-4 flex items-center">
                        Transaction
                    </td>
                    <td scope="row" class="px-5 py-4 font-semibold">$00.00</td>
                    <td scope="row" class="px-5 py-4 font-semibold">00/00/0000</td>
                    <td scope="row" class="px-5 py-4">
                        <button data-modal-target="details-transaction" data-modal-toggle="details-transaction" class="button-outlined-blue-intensy flex items-center justify-center py-1 px-3 rounded-full">
                            <i class="material-icons-outlined">visibility</i>
                        </button>
                    </td>
                </tr>
                <tr class="mt-5">
                    <td scope="row" class="px-5 py-4 font-semibold relative">
                        <span></span> 3
                    </td>
                    <td scope="row" class="px-5 py-4 flex items-center">
                        Transaction
                    </td>
                    <td scope="row" class="px-5 py-4 font-semibold">$00.00</td>
                    <td scope="row" class="px-5 py-4 font-semibold">00/00/0000</td>
                    <td scope="row" class="px-5 py-4">
                        <button data-modal-target="details-transaction" data-modal-toggle="details-transaction" class="button-outlined-blue-intensy flex items-center justify-center py-1 px-3 rounded-full">
                            <i class="material-icons-outlined">visibility</i>
                        </button>
                    </td>
                </tr>
                <tr class="mt-5">
                    <td scope="row" class="px-5 py-4 font-semibold relative">
                        <span></span> 4
                    </td>
                    <td scope="row" class="px-5 py-4 flex items-center">
                        Transaction
                    </td>
                    <td scope="row" class="px-5 py-4 font-semibold">$00.00</td>
                    <td scope="row" class="px-5 py-4 font-semibold">00/00/0000</td>
                    <td scope="row" class="px-5 py-4">
                        <button data-modal-target="details-transaction" data-modal-toggle="details-transaction" class="button-outlined-blue-intensy flex items-center justify-center py-1 px-3 rounded-full">
                            <i class="material-icons-outlined">visibility</i>
                        </button>
                    </td>
                </tr>
                <tr class="mt-5">
                    <td scope="row" class="px-5 py-4 font-semibold relative">
                        <span></span> 5
                    </td>
                    <td scope="row" class="px-5 py-4 flex items-center">
                        Transaction
                    </td>
                    <td scope="row" class="px-5 py-4 font-semibold">$00.00</td>
                    <td scope="row" class="px-5 py-4 font-semibold">00/00/0000</td>
                    <td scope="row" class="px-5 py-4">
                        <button data-modal-target="details-transaction" data-modal-toggle="details-transaction" class="button-outlined-blue-intensy flex items-center justify-center py-1 px-3 rounded-full">
                            <i class="material-icons-outlined">visibility</i>
                        </button>
                    </td>
                </tr>
                <tr class="mt-5">
                    <td scope="row" class="px-5 py-4 font-semibold relative">
                        <span></span> 6
                    </td>
                    <td scope="row" class="px-5 py-4 flex items-center">
                        Transaction
                    </td>
                    <td scope="row" class="px-5 py-4 font-semibold">$00.00</td>
                    <td scope="row" class="px-5 py-4 font-semibold">00/00/0000</td>
                    <td scope="row" class="px-5 py-4">
                        <button data-modal-target="details-transaction" data-modal-toggle="details-transaction" class="button-outlined-blue-intensy flex items-center justify-center py-1 px-3 rounded-full">
                            <i class="material-icons-outlined">visibility</i>
                        </button>
                    </td>
                </tr>
                <tr class="mt-5">
                    <td scope="row" class="px-5 py-4 font-semibold relative">
                        <span></span> 7
                    </td>
                    <td scope="row" class="px-5 py-4 flex items-center">
                        Transaction
                    </td>
                    <td scope="row" class="px-5 py-4 font-semibold">$00.00</td>
                    <td scope="row" class="px-5 py-4 font-semibold">00/00/0000</td>
                    <td scope="row" class="px-5 py-4">
                        <button data-modal-target="details-transaction" data-modal-toggle="details-transaction" class="button-outlined-blue-intensy flex items-center justify-center py-1 px-3 rounded-full">
                            <i class="material-icons-outlined">visibility</i>
                        </button>
                    </td>
                </tr>
                <tr class="mt-5">
                    <td scope="row" class="px-5 py-4 font-semibold relative">
                        <span></span> 8
                    </td>
                    <td scope="row" class="px-5 py-4 flex items-center">
                        Transaction
                    </td>
                    <td scope="row" class="px-5 py-4 font-semibold">$00.00</td>
                    <td scope="row" class="px-5 py-4 font-semibold">00/00/0000</td>
                    <td scope="row" class="px-5 py-4">
                        <button data-modal-target="details-transaction" data-modal-toggle="details-transaction" class="button-outlined-blue-intensy flex items-center justify-center py-1 px-3 rounded-full">
                            <i class="material-icons-outlined">visibility</i>
                        </button>
                    </td>
                </tr>
                <tr class="mt-5">
                    <td scope="row" class="px-5 py-4 font-semibold relative">
                        <span></span> 9
                    </td>
                    <td scope="row" class="px-5 py-4 flex items-center">
                        Transaction
                    </td>
                    <td scope="row" class="px-5 py-4 font-semibold">$00.00</td>
                    <td scope="row" class="px-5 py-4 font-semibold">00/00/0000</td>
                    <td scope="row" class="px-5 py-4">
                        <button data-modal-target="details-transaction" data-modal-toggle="details-transaction" class="button-outlined-blue-intensy flex items-center justify-center py-1 px-3 rounded-full">
                            <i class="material-icons-outlined">visibility</i>
                        </button>
                    </td>
                </tr>
                <tr class="mt-5">
                    <td scope="row" class="px-5 py-4 font-semibold relative">
                        <span></span> 10
                    </td>
                    <td scope="row" class="px-5 py-4 flex items-center">
                        Transaction
                    </td>
                    <td scope="row" class="px-5 py-4 font-semibold">$00.00</td>
                    <td scope="row" class="px-5 py-4 font-semibold">00/00/0000</td>
                    <td scope="row" class="px-5 py-4">
                        <button data-modal-target="details-transaction" data-modal-toggle="details-transaction" class="button-outlined-blue-intensy flex items-center justify-center py-1 px-3 rounded-full">
                            <i class="material-icons-outlined">visibility</i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>



</div>


<!-- Main modal -->
<div id="details-transaction" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-xl shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-sm font-semibold text-gray-900">
                    Details transaction
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="details-transaction">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4 text-black">

                <div class="text-xl font-bold">Transaction information</div>
                <span class="bg-[#28A309] py-2 px-5 rounded-full mt-5 inline-block text-white text-xs font-bold">Completed</span>
                <div class="flex flex-col gap-5">
                    <div class="text-xl md:text-3xl">1 BTC</div>
                    <div class="text-2xl md:text-5xl font-bold">$64.000,00</div>
                    <div class="relative mt-10 field-password">
                        <input type="password" id="floating_outlined" class="w-full block px-2.5 pb-2.5 pt-4 text-sm text-black bg-transparent rounded-lg border border-[#0000] appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer pr-12" placeholder=" " value="12356754362784326174839" disabled/>
                        <i class="material-icons absolute text-gray-500 text-md left-[60px] top-[-10px] cursor-pointer view-password">visibility</i>
                        <label for="floating_outlined" class="absolute text-sm text-black duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1 font-bold">Address</label>
                    </div>
                    <div class="flex flex-wrap md:flex-nowrap gap-5">
                        <div class="relative field-password">
                            <input type="password" id="floating_outlined" class="w-full block px-2.5 pb-2.5 pt-4 text-sm text-black bg-transparent rounded-lg border border-[#0000] appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer pr-12" placeholder=" " value="12356754362784326174839" disabled/>
                            <i class="material-icons absolute text-gray-500 text-md left-[40px] top-[-10px] cursor-pointer view-password">visibility</i>
                            <label for="floating_outlined" class="absolute text-sm text-black duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1 font-bold">Card</label>
                        </div>
                        <div class="relative">
                            <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-[#0000] appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer pr-12" placeholder=" " value="101.1" disabled/>
                            <label for="floating_outlined" class="absolute text-sm text-black duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1 font-bold">Protocol</label>
                        </div>
                    </div>
                    <div class="relative">
                            <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-[#0000] appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer pr-12" placeholder=" " value="02/12/2024" disabled/>
                            <label for="floating_outlined" class="absolute text-sm text-black duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1 font-bold">Date</label>
                        </div>

                </div>

            </div>
        </div>
    </div>
</div>








</div>



    
<?php footerLanding($data); ?>