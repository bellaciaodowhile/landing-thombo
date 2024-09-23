    
    
    
<!-- Conexiones
Timeouts:
Un slider para ajustar el tiempo de espera en segundos para las conexiones.
Otro slider para el tiempo de espera de respuesta entre servidores.


Retries:
Un campo numérico o slider para definir cuántos reintentos se realizarán en caso de fallo.
Un campo para ajustar el intervalo entre reintentos.


Load Balancing:
Un menú desplegable con opciones para seleccionar el tipo de balanceo de carga (Round Robin, Least Connections, etc.).


Seguridad
SSL/TLS:
- Un interruptor (toggle) para activar o desactivar SSL/TLS.
- Un botón para subir certificados y gestionar las versiones de SSL/TLS permitidas.

Firewalls:
Una lista editable donde puedes agregar o eliminar reglas de firewall con campos para especificar puertos y protocolos.

White/Black Lists:
Un campo para ingresar IPs permitidas (lista blanca).
Otro campo para ingresar IPs bloqueadas (lista negra).

Integraciones

Sistemas de terceros:

Un formulario para ingresar los endpoints API de sistemas externos con campos para definir el nombre del sistema, URL, y credenciales.

Webhooks:
Un campo para agregar la URL de Webhook.
Un selector para elegir los eventos que dispararán el Webhook (transacciones completadas, fallos, etc.).

Listen :
Campos para definir los puertos de escucha y las IPs en los que el servidor recibirá conexiones.

Logs
Transaction Logs:

Un menú desplegable para seleccionar el nivel de registro (errores, advertencias, información completa).
Opciones para exportar los logs en diferentes formatos (CSV, JSON).

Auditoría:
Casillas para habilitar o deshabilitar el seguimiento de acciones críticas (cambios de configuración, accesos de usuarios).

Un panel para ver y administrar los eventos registrados.

Almacenamiento de Logs:
Un campo para configurar el tiempo de retención de los logs (en días o semanas).
Opciones para seleccionar el destino de almacenamiento (servidor local, en la nube, sistema de almacenamiento externo como S3). -->
    
    
    
    <input type="search" class="py-3 px-4 rounded-xl border border-slate-800 outline-0 bg-[#0000] mt-5" placeholder="Search">



    <div class="border p-5 rounded-xl border-slate-800 mt-5">

        <div class="relative">
            <div class="mt-3 rounded-xl p-4 flex items-center justify-between cursor-pointer duration-300 hover:bg-[#00000026] item-menu expand-more">
                <div class="flex gap-2">
                    <i class="material-icons-outlined text-slate-500">dns</i>
                    <span class="text-sm opacity-70">API</span>
                </div>
                <i class="material-icons-outlined opacity-70 text-sm">expand_more</i>
            </div>
            <div class="content-item-menu pl-5 border-l border-slate-300 w-[93%] ml-auto h-[0px] duration-300 invisible overflow-hidden" heightContent="120px">
                <div data-modal-target="endpoints" data-modal-toggle="endpoints" class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                    <div class="flex gap-2 items-center">
                        <span class="text-xs opacity-70 capitalize">Endpoints</span>
                    </div>
                </div>
                <div data-modal-target="methods" data-modal-toggle="methods" class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                    <div class="flex gap-2 items-center">
                        <span class="text-xs opacity-70 capitalize">HTTP Methods</span>
                    </div>
                </div>
                <!-- <a href="<?php echo BASE_URL . 'admin/settingss2s'; ?>" class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                    <div class="flex gap-2 items-center">
                        <span class="text-xs opacity-70 capitalize">Auth</span>
                    </div>
                </a> -->
            </div>
        </div>



        
        <div class="relative">
            <div class="mt-3 rounded-xl p-4 flex items-center justify-between cursor-pointer duration-300 hover:bg-[#00000026] item-menu expand-more">
                <div class="flex gap-2">
                    <i class="material-icons-outlined text-slate-500">dns</i>
                    <span class="text-sm opacity-70">Connections</span>
                </div>
                <i class="material-icons-outlined opacity-70 text-sm">expand_more</i>
            </div>
            <div class="content-item-menu pl-5 border-l border-slate-300 w-[93%] ml-auto h-[0px] duration-300 invisible overflow-hidden" heightContent="400px">
                <div data-modal-target="timeout" data-modal-toggle="timeout" class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                    <div class="flex gap-2 items-center">
                        <span class="text-xs opacity-70 capitalize">Timeouts</span>
                    </div>
                </div>
                <div data-modal-target="retries" data-modal-toggle="retries" class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                    <div class="flex gap-2 items-center">
                        <span class="text-xs opacity-70 capitalize">Retries</span>
                    </div>
                </div>


                <!-- <div data-modal-target="" data-modal-toggle="" class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                    <div class="flex gap-2 items-center">
                        <span class="text-xs opacity-70 capitalize">Load balancing</span>
                    </div>
                </div> -->
                <div class="relative">
                    <div class="mt-3 rounded-xl p-4 flex items-center justify-between cursor-pointer duration-300 hover:bg-[#00000026] item-menu expand-more">
                        <div class="flex gap-2">
                            <span class="text-sm opacity-70">Load balancing</span>
                        </div>
                        <i class="material-icons-outlined opacity-70 text-sm">expand_more</i>
                    </div>

                    <div class="content-item-menu pl-5 border-l border-slate-300 w-[93%] ml-auto h-[0px] duration-300 invisible overflow-hidden" heightContent="250px">
                        <div class="mt-1 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                            <div class="flex items-center">
                                <input id="link-checkbox1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="link-checkbox1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Round Robin
                                </label>
                            </div>
                        </div>
                        <div class="mt-1 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                            <div class="flex items-center">
                                <input id="link-checkbox2" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="link-checkbox2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Least Connections
                                </label>
                            </div>
                        </div>
                        <div class="mt-1 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                            
                            <form class="w-full">
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose currency</option>
                                <option value="1">USD</option>
                                <option value="2">EUR</option>
                                <option value="3">MXN</option>
                                <option value="4">ARS</option>
                            </select>
                            </form>
                        </div>
                        <div class="mt-1 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                            <form class="w-full">
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose time zone</option>
                                <option value="1">UTC</option>
                                <option value="2">Eastern Standard Time (EST)</option>
                                <option value="3">Pacific Standard Time (PST)</option>
                                <option value="4">Central European Time (CET)</option>
                                <option value="5">Central European Summer Time (CEST)</option>
                                <option value="6">Greenwich Mean Time (GMT)</option>
                                <option value="7">Argentina Time (ART)</option>
                                <option value="8">Brazil Time (BRT)</option>
                                <option value="9">Japan Standard Time (JST)</option>
                            </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="relative">
            <div class="mt-3 rounded-xl p-4 flex items-center justify-between cursor-pointer duration-300 hover:bg-[#00000026] item-menu expand-more">
                <div class="flex gap-2">
                    <i class="material-icons-outlined text-slate-500">security</i>
                    <span class="text-sm opacity-70">Security</span>
                </div>
                <i class="material-icons-outlined opacity-70 text-sm">expand_more</i>
            </div>
            <div class="content-item-menu pl-5 border-l border-slate-300 w-[93%] ml-auto h-[0px] duration-300 invisible overflow-hidden" heightContent="165px">
                <div data-modal-target="ssl" data-modal-toggle="ssl" class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                    <div class="flex gap-2 items-center">
                        <span class="text-xs opacity-70 capitalize">SSL / TLS</span>
                    </div>
                </div>
                <div data-modal-target="firewalls" data-modal-toggle="firewalls" class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                    <div class="flex gap-2 items-center">
                        <span class="text-xs opacity-70 capitalize">Firewalls</span>
                    </div>
                </div>
                <div data-modal-target="whitelist" data-modal-toggle="whitelist" class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                    <div class="flex gap-2 items-center">
                        <span class="text-xs opacity-70 capitalize">White / Black lists</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative">
            <div class="mt-3 rounded-xl p-4 flex items-center justify-between cursor-pointer duration-300 hover:bg-[#00000026] item-menu expand-more">
                <div class="flex gap-2">
                    <i class="material-icons-outlined text-slate-500">integration_instructions</i>
                    <span class="text-sm opacity-70">Integrations</span>
                </div>
                <i class="material-icons-outlined opacity-70 text-sm">expand_more</i>
            </div>
            <div class="content-item-menu pl-5 border-l border-slate-300 w-[93%] ml-auto h-[0px] duration-300 invisible overflow-hidden" heightContent="165px">
                <div data-modal-target="thirdPartySystems" data-modal-toggle="thirdPartySystems" class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                    <div class="flex gap-2 items-center">
                        <span class="text-xs opacity-70 capitalize">Third party systems</span>
                    </div>
                </div>
                <div data-modal-target="webhooks" data-modal-toggle="webhooks" class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                    <div class="flex gap-2 items-center">
                        <span class="text-xs opacity-70 capitalize">Webhooks</span>
                    </div>
                </div>
                <div data-modal-target="listen" data-modal-toggle="listen" class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                    <div class="flex gap-2 items-center">
                        <span class="text-xs opacity-70 capitalize">Listen</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative">
            <div class="mt-3 rounded-xl p-4 flex items-center justify-between cursor-pointer duration-300 hover:bg-[#00000026] item-menu expand-more">
                <div class="flex gap-2">
                    <i class="material-icons-outlined text-slate-500">assignment</i>
                    <span class="text-sm opacity-70">Records</span>
                </div>
                <i class="material-icons-outlined opacity-70 text-sm">expand_more</i>
            </div>
            <div class="content-item-menu pl-5 border-l border-slate-300 w-[93%] ml-auto h-[0px] duration-300 invisible overflow-hidden" heightContent="165px">
                <div data-modal-target="transaction-logs" data-modal-toggle="transaction-logs" class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                    <div class="flex gap-2 items-center">
                        <span class="text-xs opacity-70 capitalize">Transaction logs</span>
                    </div>
                </div>
                <div data-modal-target="audit" data-modal-toggle="audit" class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                    <div class="flex gap-2 items-center">
                        <span class="text-xs opacity-70 capitalize">Audit</span>
                    </div>
                </div>
                <div data-modal-target="log-storage" data-modal-toggle="log-storage" class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                    <div class="flex gap-2 items-center">
                        <span class="text-xs opacity-70 capitalize">Log storage</span>
                    </div>
                </div>
            </div>
           
        </div>
    </div>

    <div class="flex flex-wrap justify-between">
        <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 mt-5 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 save-time">Reset to default values</button>
        <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 mt-5 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 save-time">Save changes</button>
    </div>

</div>

    <div id="timeout" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <div class="flex breadcumb-cardnumber">
                        <div class="flex items-center text-gray-500 active-breadcumb mr-3">
                            <span class="mr-2">Configuration</span>
                            <div class="flex items-center text-gray-500">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span>Timeouts</span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="timeout">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 relative">
                    <div class="text-md font-bold text-black">Time for connections</div>
                    <div class="slider text-black">
                        <span id="range-value" class="mt-2 block text-sm text-gray-900">
                            Time: <span class="number">1</span> sec
                        </span>
                        <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-900"></label>
                        <input id="minmax-range" type="range" min="0" max="1000" value="1" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                    </div>
                    <div class="text-md font-bold text-black mt-10">Response time between servers</div>
                    <div class="slider text-black">
                        <span id="range-value" class="mt-2 block text-sm text-gray-900">
                            Time: <span class="number">1</span> sec
                        </span>
                        <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-900"></label>
                        <input id="minmax-range" type="range" min="0" max="1000" value="1" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                    </div>
                    <div class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 rounded-b mt-5">
                        <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 save-time">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <div id="retries" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <div class="flex breadcumb-cardnumber">
                        <div class="flex items-center text-gray-500 active-breadcumb mr-3">
                            <span class="mr-2">Configuration</span>
                            <div class="flex items-center text-gray-500">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span>Retries</span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="retries">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 relative">
                    <div class="text-md font-bold text-black">Define the number of attempts in case of failure</div>
                    <div class="slider text-black">
                        <span id="range-value" class="mt-2 block text-sm text-gray-900">
                            Number of attempts: <span class="number">1</span>
                        </span>
                        <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-900"></label>
                        <input id="minmax-range" type="range" min="0" max="1000" value="1" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                    </div>
                    <div class="text-md font-bold text-black mt-10">Adjust the interval between retries</div>
                    <div class="slider text-black">
                        <span id="range-value" class="mt-2 block text-sm text-gray-900">
                            Interval: <span class="number">1</span>
                        </span>
                        <label for="minmax-range" class="block mb-2 text-sm font-medium text-gray-900"></label>
                        <input id="minmax-range" type="range" min="0" max="1000" value="1" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                    </div>
                    <div class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 rounded-b mt-5">
                        <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 save-time">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="endpoints" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <div class="flex breadcumb-cardnumber">
                        <div class="flex items-center text-gray-500 active-breadcumb mr-3">
                            <span class="mr-2">Configuration</span>
                            <div class="flex items-center text-gray-500">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span>Endpoints</span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="endpoints">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 relative">
                    <div class="text-2xl font-bold text-black"></div>
                    
                    <div class="step-1 animate__animated animate__fadeIn">


                        
                        <form class="flex flex-wrap md:flex-nowrap mt-10 add-server" id="add-server">
                            <div class="relative grow item-center">
                                <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-100 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" name="server"/>
                                <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Define server URLs</label>
                            </div>
                            <button data-modal-hide="default-modal" type="submit" class="px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 save-time">Save</button>
                        </form>
                        <div class="list__servers mt-5">
                            <div class="p-3 rounded-lg border border-slate-300 text-black flex items-center justify-between">
                                <span>Server: fjkdsjfdskafa</span>
                                <i class="material-icons-outlined cursor-pointer text-slate-300">content_copy</i>
                            </div>
                        </div>


                        <!-- <div class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 rounded-b mt-20">
                            <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 save-time">Save</button>
                        </div> -->
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="methods" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <div class="flex breadcumb-cardnumber">
                        <div class="flex items-center text-gray-500 active-breadcumb mr-3">
                            <span class="mr-2">Configuration</span>
                            <div class="flex items-center text-gray-500">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span>Allowed methods</span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="methods">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 relative">
                    <div class="text-2xl font-bold text-black"></div>
                   <div class="flex flex-col">
                        <label class="inline-flex items-center mb-5 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            <span class="ms-3 text-sm font-medium text-gray-900">GET</span>
                        </label>
                        <label class="inline-flex items-center mb-5 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            <span class="ms-3 text-sm font-medium text-gray-900">POST</span>
                        </label>
                        <label class="inline-flex items-center mb-5 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            <span class="ms-3 text-sm font-medium text-gray-900">PUT</span>
                        </label>
                        <label class="inline-flex items-center mb-5 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                            <span class="ms-3 text-sm font-medium text-gray-900">DELETE</span>
                        </label>
                   </div>


                </div>
            </div>
        </div>
    </div>

    <div id="ssl" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <div class="flex breadcumb-cardnumber">
                        <div class="flex items-center text-gray-500 active-breadcumb mr-3">
                            <span class="mr-2">Configuration</span>
                            <div class="flex items-center text-gray-500">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span>SSL/TLS</span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="ssl">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 relative">
                    <div class="text-md font-bold text-black">SSL/TLS</div>

                    <label class="inline-flex items-center mb-5 cursor-pointer mt-4">
                        <input type="checkbox" value="" class="sr-only peer">
                        <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                        <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Toggle SSL/TLS</span>
                    </label>

                    
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload certificate</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" id="file_input" type="file">
                    <div class="text-md mt-5 text-black font-semibold">List of certificates</div>
                    <div class="mt-3">
                        <div class="border boder-slate-300 rounded-lg p-3 text-black flex justify-between items-center">
                            <span class="font-semibold text-slate-600">Certificate 1</span>
                            <i class="material-icons-outlined text-slate-500 text-sm cursor-pointer">edit</i>
                        </div>
                        <div class="mt-2 border boder-slate-300 rounded-lg p-3 text-black flex justify-between items-center">
                            <span class="font-semibold text-slate-600">Certificate 2</span>
                            <i class="material-icons-outlined text-slate-500 text-sm cursor-pointer">edit</i>
                        </div>
                        <div class="mt-2 border boder-slate-300 rounded-lg p-3 text-black flex justify-between items-center">
                            <span class="font-semibold text-slate-600">Certificate 3</span>
                            <i class="material-icons-outlined text-slate-500 text-sm cursor-pointer">edit</i>
                        </div>
                        <div class="mt-2 border boder-slate-300 rounded-lg p-3 text-black flex justify-between items-center">
                            <span class="font-semibold text-slate-600">Certificate 4</span>
                            <i class="material-icons-outlined text-slate-500 text-sm cursor-pointer">edit</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="firewalls" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <div class="flex breadcumb-cardnumber">
                        <div class="flex items-center text-gray-500 active-breadcumb mr-3">
                            <span class="mr-2">Configuration</span>
                            <div class="flex items-center text-gray-500">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span>Firewalls</span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="firewalls">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 relative">
                    <div class="text-md font-bold text-black">Firewalls</div>







                </div>
            </div>
        </div>
    </div>

    <div id="whitelist" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <div class="flex breadcumb-cardnumber">
                        <div class="flex items-center text-gray-500 active-breadcumb mr-3">
                            <span class="mr-2">Configuration</span>
                            <div class="flex items-center text-gray-500">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span>White/Black list</span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="whitelist">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 relative">
                    <div class="text-md font-bold text-black">White / Black list</div>

                    <div class="flex flex-wrap gap-5 md:flex-nowrap">
                        <div class="relative mt-10 grow">
                            <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-100 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" name="whitelist" placeholder=" " />
                            <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">White list</label>
                        </div>
                        <div class="relative mt-10 grow">
                            <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-100 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" name="blacklist" placeholder=" " />
                            <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Black list</label>
                        </div>
                    </div>
                    <button class="w-full button-blue rounded-lg p-2 mt-2 capitalize text-sm add-whiteblacklist"> Add </button>
                    <div class="border rounded-lg grid grid-cols-1 md:grid-cols-2 gap-5 p-3 mt-3">
                        <div>
                            <div class="text-sm text-black font-semibold">White list</div>
                            <div class="white-list">
                                <div class="p-3 rounded-lg bg-gray-100 text-slate-600 mt-2 flex justify-between items-center">
                                    <span class="ip">ip</span>
                                    <i class="material-icons-outlined cursor-pointer text-sm text-red-400">delete</i>
                                </div>
                                <div class="p-3 rounded-lg bg-gray-100 text-slate-600 mt-2 flex justify-between items-center">
                                    <span class="ip">ip</span>
                                    <i class="material-icons-outlined cursor-pointer text-sm text-red-400">delete</i>
                                </div>
                                <div class="p-3 rounded-lg bg-gray-100 text-slate-600 mt-2 flex justify-between items-center">
                                    <span class="ip">ip</span>
                                    <i class="material-icons-outlined cursor-pointer text-sm text-red-400">delete</i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="text-sm text-black font-semibold">Black list</div>
                            <div class="black-list">
                                <div class="p-3 rounded-lg bg-gray-100 text-slate-600 mt-2 flex justify-between items-center">
                                    <span class="ip">ip</span>
                                    <i class="material-icons-outlined cursor-pointer text-sm text-red-400">delete</i>
                                </div>
                                <div class="p-3 rounded-lg bg-gray-100 text-slate-600 mt-2 flex justify-between items-center">
                                    <span class="ip">ip</span>
                                    <i class="material-icons-outlined cursor-pointer text-sm text-red-400">delete</i>
                                </div>
                                <div class="p-3 rounded-lg bg-gray-100 text-slate-600 mt-2 flex justify-between items-center">
                                    <span class="ip">ip</span>
                                    <i class="material-icons-outlined cursor-pointer text-sm text-red-400">delete</i>
                                </div>
                            </div>
                        </div>
                        
                    </div>





                </div>
            </div>
        </div>
    </div>

    <div id="thirdPartySystems" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <div class="flex breadcumb-cardnumber">
                        <div class="flex items-center text-gray-500 active-breadcumb mr-3">
                            <span class="mr-2">Configuration</span>
                            <div class="flex items-center text-gray-500">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span>Third party systems</span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="thirdPartySystems">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 relative">
                    <div class="text-md font-bold text-black">Third party systems</div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="relative mt-5">
                            <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-100 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" name="name_endpoint" placeholder=" " />
                            <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Name</label>
                        </div>
                        <div class="relative mt-5">
                            <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-100 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" name="url_endpoint" placeholder=" " />
                            <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">URL</label>
                        </div>
                       
                    </div>
                    <div class="relative mt-5">
                        <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-100 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" name="credencials_endpoint" placeholder=" " />
                        <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Credencials</label>
                    </div>
                    <button class="w-full button-blue rounded-lg p-2 mt-2 capitalize text-sm add-endpoint"> Add </button>

                    <div class="text-sm text-black font-semibold mt-5">List Endpoints</div>
                    <div class="enpoints_list"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="webhooks" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <div class="flex breadcumb-cardnumber">
                        <div class="flex items-center text-gray-500 active-breadcumb mr-3">
                            <span class="mr-2">Configuration</span>
                            <div class="flex items-center text-gray-500">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span>Webhooks</span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="webhooks">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 relative">
                    <div class="text-md font-bold text-black">Webhooks</div>
                    <div class="relative mt-5">
                        <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-100 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" name="url_webhook" placeholder=" " />
                        <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">URL</label>
                    </div>
                    <button class="w-full button-blue rounded-lg p-2 mt-2 capitalize text-sm add-webhook"> Add </button>

                    
                    <div class="text-sm text-black font-semibold mt-5">List Webhooks</div>
                    <div class="webhooks_list"></div>

                    
                    <form class="w-full">
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option selected>Choose:</option>
                            <option value="1">Completed transactions</option>
                            <option value="2">Failed transactions</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="listen" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <div class="flex breadcumb-cardnumber">
                        <div class="flex items-center text-gray-500 active-breadcumb mr-3">
                            <span class="mr-2">Configuration</span>
                            <div class="flex items-center text-gray-500">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span>Listen</span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="listen">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 relative">
                    <div class="text-md font-bold text-black">Listen</div>

                    <div class="flex flex-wrap gap-5 md:flex-nowrap">
                        <div class="relative mt-10 grow">
                            <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-100 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" name="port" placeholder=" " />
                            <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Port</label>
                        </div>
                        <div class="relative mt-10 grow">
                            <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-100 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" name="ip" placeholder=" " />
                            <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">IP</label>
                        </div>
                    </div>
                    <button class="w-full button-blue rounded-lg p-2 mt-2 capitalize text-sm add-portip"> Add </button>
                    <div class="border rounded-lg grid grid-cols-1 md:grid-cols-2 gap-5 p-3 mt-3">
                        <div>
                            <div class="text-sm text-black font-semibold">Ports list</div>
                            <div class="listen-ports">
                                <div class="p-3 rounded-lg bg-gray-100 text-slate-600 mt-2 flex justify-between items-center">
                                    <span class="ip">ip</span>
                                    <i class="material-icons-outlined cursor-pointer text-sm text-red-400">delete</i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="text-sm text-black font-semibold">IP´s list</div>
                            <div class="listen-ip">
                                <div class="p-3 rounded-lg bg-gray-100 text-slate-600 mt-2 flex justify-between items-center">
                                    <span class="ip">ip</span>
                                    <i class="material-icons-outlined cursor-pointer text-sm text-red-400">delete</i>
                                </div>
                            </div>
                        </div>
                        
                    </div>







                </div>
            </div>
        </div>
    </div>

    <div id="transaction-logs" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <div class="flex breadcumb-cardnumber">
                        <div class="flex items-center text-gray-500 active-breadcumb mr-3">
                            <span class="mr-2">Configuration</span>
                            <div class="flex items-center text-gray-500">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span>Transaction logs</span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="transaction-logs">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 relative">
                    <div class="text-md font-bold text-black">Transaction logs</div>

                    <div class="relative text-black">
                        <div class="mt-3 rounded-xl p-4 flex items-center justify-between cursor-pointer duration-300 hover:bg-[#00000026] item-menu expand-more border border-gray-100">
                            <div class="flex gap-2">
                                <i class="material-icons-outlined text-red-500">error</i>
                                <span class="text-sm opacity-70">Errors</span>
                            </div>
                            <i class="material-icons-outlined opacity-70 text-sm">expand_more</i>
                        </div>
                        <div class="content-item-menu pl-5 border-l border-slate-300 w-[93%] ml-auto h-[0px] duration-300 invisible overflow-hidden" heightContent="180px">
                            <div class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                                <div class="flex gap-2 items-center">
                                    <span class="text-xs opacity-70 capitalize">Lorem ipsum</span>
                                </div>
                            </div>
                            <div class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                                <div class="flex gap-2 items-center">
                                    <span class="text-xs opacity-70 capitalize">Lorem ipsum</span>
                                </div>
                            </div>

                            <div class="flex gap-1 mt-2">
                                <span class="cursor-pointer rounded-full bg-gray-500 text-white flex items-center justify-center p-1 px-3 text-xs uppercase">export csv</span>
                                <span class="cursor-pointer rounded-full bg-gray-500 text-white flex items-center justify-center p-1 px-3 text-xs uppercase">export json</span>
                            </div>
                        </div>
                    </div>
                    <div class="relative text-black">
                        <div class="mt-3 rounded-xl p-4 flex items-center justify-between cursor-pointer duration-300 hover:bg-[#00000026] item-menu expand-more border border-gray-100">
                            <div class="flex gap-2">
                                <i class="material-icons-outlined text-orange-500">warning</i>
                                <span class="text-sm opacity-70">Warnings</span>
                            </div>
                            <i class="material-icons-outlined opacity-70 text-sm">expand_more</i>
                        </div>
                        <div class="content-item-menu pl-5 border-l border-slate-300 w-[93%] ml-auto h-[0px] duration-300 invisible overflow-hidden" heightContent="180px">
                            <div class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                                <div class="flex gap-2 items-center">
                                    <span class="text-xs opacity-70 capitalize">Lorem ipsum</span>
                                </div>
                            </div>
                            <div class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                                <div class="flex gap-2 items-center">
                                    <span class="text-xs opacity-70 capitalize">Lorem ipsum</span>
                                </div>
                            </div>

                            <div class="flex gap-1 mt-2">
                                <span class="cursor-pointer rounded-full bg-gray-500 text-white flex items-center justify-center p-1 px-3 text-xs uppercase">export csv</span>
                                <span class="cursor-pointer rounded-full bg-gray-500 text-white flex items-center justify-center p-1 px-3 text-xs uppercase">export json</span>
                            </div>
                        </div>
                    </div>
                    <div class="relative text-black">
                        <div class="mt-3 rounded-xl p-4 flex items-center justify-between cursor-pointer duration-300 hover:bg-[#00000026] item-menu expand-more border border-gray-100">
                            <div class="flex gap-2">
                                <i class="material-icons-outlined text-blue-500">info</i>
                                <span class="text-sm opacity-70">Info</span>
                            </div>
                            <i class="material-icons-outlined opacity-70 text-sm">expand_more</i>
                        </div>
                        <div class="content-item-menu pl-5 border-l border-slate-300 w-[93%] ml-auto h-[0px] duration-300 invisible overflow-hidden" heightContent="180px">
                            <div class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                                <div class="flex gap-2 items-center">
                                    <span class="text-xs opacity-70 capitalize">Lorem ipsum</span>
                                </div>
                            </div>
                            <div class="mt-3 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-[#00000026] item-menu">
                                <div class="flex gap-2 items-center">
                                    <span class="text-xs opacity-70 capitalize">Lorem ipsum</span>
                                </div>
                            </div>

                            <div class="flex gap-1 mt-2">
                                <span class="cursor-pointer rounded-full bg-gray-500 text-white flex items-center justify-center p-1 px-3 text-xs uppercase">export csv</span>
                                <span class="cursor-pointer rounded-full bg-gray-500 text-white flex items-center justify-center p-1 px-3 text-xs uppercase">export json</span>
                            </div>
                        </div>
                    </div>







                </div>
            </div>
        </div>
    </div>

    <div id="audit" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <div class="flex breadcumb-cardnumber">
                        <div class="flex items-center text-gray-500 active-breadcumb mr-3">
                            <span class="mr-2">Configuration</span>
                            <div class="flex items-center text-gray-500">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="capitalize">audit</span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="audit">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 relative">
                    <div class="text-md font-bold text-black capitalize mb-4">audit</div>

                    <div class="flex items-center mb-2">
                        <input id="default-checkbox1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                        <label for="default-checkbox1" class="ms-2 text-sm font-medium text-gray-900">Configuration changes</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="default-checkbox2" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                        <label for="default-checkbox2" class="ms-2 text-sm font-medium text-gray-900">User access</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="default-checkbox3" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                        <label for="default-checkbox3" class="ms-2 text-sm font-medium text-gray-900">Other</label>
                    </div>
                    <div class="flex items-center mb-2">
                        <input id="default-checkbox31" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                        <label for="default-checkbox31" class="ms-2 text-sm font-medium text-gray-900">Other</label>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <div id="log-storage" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <div class="flex breadcumb-cardnumber">
                        <div class="flex items-center text-gray-500 active-breadcumb mr-3">
                            <span class="mr-2">Configuration</span>
                            <div class="flex items-center text-gray-500">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="capitalize">log storage</span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="log-storage">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 relative">
                    <div class="text-md font-bold text-black capitalize">log storage</div>
                    <div class="text-sm text-gray-600 font-semibold mb-4 mt-2">Set logging stop time</div>
                    <form class="w-full">
                        <div class="flex">
                            <button id="states-button" data-dropdown-toggle="dropdown-states" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100" type="button">
                                Day <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                            </button>
                            <div id="dropdown-states" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                <ul class="py-2 text-sm text-gray-700" aria-labelledby="states-button">
                                    <li>
                                        <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            <div class="inline-flex items-center">
                                                Weeks
                                            </div>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            <div class="inline-flex items-center">
                                                Days
                                            </div>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="relative">
                                <input type="number" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border border-gray-100 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" name="" placeholder=" " />
                                <label for="floating_outlined" class="absolute text-sm text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Interval</label>
                            </div>
                        </div>
                    </form>
                    <div class="text-sm text-gray-600 font-semibold mb-3 mt-7">Select storage destination</div>

                    <div class="flex items-center mb-4">
                        <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                        <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900">Local server</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                        <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900">Cloud</label>
                    </div>
                    <div class="flex items-center">
                        <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500">
                        <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900">External storage system like S3</label>
                    </div>
                </div>
            </div>
        </div>
    </div>