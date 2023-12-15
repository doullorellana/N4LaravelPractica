<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <title>Registro</title>
</head>

<body class="bg-gray-100">

    <!-- Incluyendo la seccion del HEADER -->
    @include('header')

    <div class="p-3"></div>

    <div class="mx-4 mb-6">


        <div
            class="w-full bg-white border border-gray-200 p-md rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <ul class="flex flex-wrap justify-between text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800"
                id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                <li class="me-2">
                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about"
                        aria-selected="true"
                        class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Operador</button>
                </li>
                <li>
                    <div class="me-2 pt-1.5 pr-4">
                        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            Agregar Operador
                        </button>
                    </div>
                </li>
            </ul>
            <div id="defaultTabContent">
                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel"
                    aria-labelledby="about-tab">
                    <h2 class="mb-3 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Reporte de
                        Operadores</h2>
                    <p class="mb-3 text-gray-500 dark:text-gray-400">El siguiente es un reporte de los Operadores.</p>
                </div>

            </div>

            <div class="px-6 pb-6">

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-slate-200 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Apellido
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Dirección
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Teléfono
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Edad
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($operadores as $operator)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        {{ $operator->id }}
                                    </td>

                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $operator->nombres }}
                                    </th>

                                    <td class="px-6 py-4">
                                        {{ $operator->apellidos }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $operator->direccion }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $operator->telefono }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ $operator->edad }}
                                    </td>

                                    <td class="px-6 py-4">
                                        <a href="#"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        <a href="#"
                                            class="font-medium pl-4 text-red-600 dark:text-blue-500 hover:underline">Delete</a>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>


        </div>

    </div>





    <!-- Main modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Crear Nuevo Operador
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Cerrar Modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" method="post" action="api/operadores">
                    <div class="grid gap-4 mb-4 grid-cols-2">

                        <div class="col-span-2">
                            <label for="nombres"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                            <input type="text" name="nombres" id="nombres"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Nombre" required="">
                        </div>
                        <div class="col-span-2">
                            <label for="apellidos"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido</label>
                            <input type="text" name="apellidos" id="apellidos"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Apellido" required="">
                        </div>
                        <div class="col-span-2">
                            <label for="direccion"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dirección</label>
                            <textarea id="direccion" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="direccion"
                                placeholder="Escriba la dirección aquí. Separe con comas la direccion, ciudad, departamento, país"></textarea>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="telefono"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono</label>
                            <input type="text" name="telefono" id="telefono"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="+504 2772-7764" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="edad"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edad</label>
                            <input type="number" name="edad" id="edad"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="99" required="">
                        </div>

                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Agregar nuevo Operador
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Incluyendo la seccion del FOOTER -->
    @include('footer')
</body>


</html>
