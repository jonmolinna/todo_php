<?php

    print('
        <div class="max-w-4xl mx-auto">
            <a
                href="todoAdd"
                class="text-white bg-pink-700 hover:bg-pink-800 font-medium rounded-md px-5 py-2"
            >
                Añadir tarea
            </a>

            <div class="mt-7">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-base text-center text-gray-700 uppercase bg-gray-50">
                        <tr class="border-b-2 border-gray-300">
                            <th class="px-6 py-3">S.N</th>
                            <th class="px-6 py-3">Tarea</th>
                            <th class="px-6 py-3">Prioridad</th>
                            <th class="px-6 py-3">Fecha</th>
                             <th class="px-6 py-3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="font-medium border-b">
                            <td class="text-center">1</td>
                            <td class="px-6 py-3">Logo Design</td>
                            <td class="px-6 py-3">High</td>
                            <td class="px-6 py-3">31-01-2024</td>
                            <td class="px-6 py-3 flex flex-items justify-around">
                                <button class="text-white text-xs bg-pink-700 py-1 px-2 rounded-md hover:bg-pink-800">
                                    Editar
                                </button>
                                <button class="text-white text-xs bg-red-700 py-1 px-2 rounded-md hover:bg-red-800">
                                    Eliminar
                                </button>
                                <button class="text-white text-xs bg-green-700 py-1 px-2 rounded-md hover:bg-green-800">
                                    Completar
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    ');