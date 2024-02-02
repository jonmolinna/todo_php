<?php

    print('
        <div class="w-full max-w-sm p-4 bg-gray-50 border border-gray-200 rounded-lg shadow mx-auto">
            <form class="space-y-4">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nombre de la Tarea</label>
                    <input 
                        type="text" 
                        id="name"
                        placeholder="Content Writing"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-pink-500 focus:border-pink-500 block w-full p-2"
                    >
                </div>
                <div>
                    <label for="priority" class="block mb-2 text-sm font-medium text-gray-900">Seleccione una opción</label>
                    <select 
                        id="priority"
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-pink-500 focus:border-pink-500 block w-full p-2"
                    >
                        <option value="">- - -</option>
                        <option value="1">Alto</option>
                        <option value="2">Medio</option>
                        <option value="3">Bajo</option>
                    </select>
                </div>
                <div>
                    <label for="priority" class="block mb-2 text-sm font-medium text-gray-900">Seleccione una fecha</label>
                    <input 
                        datepicker
                        datepicker-orientation="top right"
                        datepicker-format="dd/mm/yyyy"
                        placeholder="dd/mm/yyyy"
                        type="text" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-pink-500 focus:border-pink-500 block w-full p-2" 
                    >
                </div>
                <div>
                    <button 
                        type="submit"
                        class="text-white bg-pink-700 w-full p-2 rounded-md hover:bg-pink-800"
                    >
                        Guardar
                    </button >
                </div>
            </form>
        </div>
    ');