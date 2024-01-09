<?php

    print('
        <div class="space-y-12 pb-10">
            <form
                method="POST" 
                class="max-w-sm mx-auto space-y-5 border border-gray-300 mt-10 px-4 py-10 rounded-md shadow-md"
            >
                <div>
                    <label 
                        for="name"
                        class="block mb-2 text-base font-medium text-gray-900"
                    >
                        Nombres
                    </label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder=""
                      
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                    >
                </div>
                <div>
                    <label 
                        for="email"
                        class="block mb-2 text-base font-medium text-gray-900"
                    >
                        Correo Electrónico
                    </label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="example@gmail.com"
                 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                    >
                </div>
                <div>
                    <label 
                        for="password"
                        class="block mb-2 text-base font-medium text-gray-900"
                    >
                        Contraseña
                    </label>
                    <input
                        type="password"
                        id="password"
                        name="password"
     
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                    >
                </div>
                <div>
                    <label 
                        for="confirmPassword"
                        class="block mb-2 text-base font-medium text-gray-900"
                    >
                        Confirma tu Contraseña
                    </label>
                    <input
                        type="password"
                        id="confirmPassword"
                        name="confirmPassword"
          
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                    >
                </div>
                <input type="hidden" name="r" value="register" >
                <input type="hidden" name="register" value="set" >
                <button
                    type="submit"
                    class="text-white bg-pink-700 hover:bg-pink-800 focus:outline-none focus:ring-pink-300 font-medium rounded-md text-base w-full p-2"
                >
                    Crea tu Cuenta
                </button>
            </form>

            <div class="max-w-sm mx-auto space-y-2 border border-gray-300 px-4 py-4 rounded-md shadow-md">
                <p class="text-center text-sm">
                    ¿Tienes una cuenta?
                </p>
                <a 
                    href="login"
                    class="block text-center text-pink-700 border-2 border-pink-700 p-2 rounded-md hover:bg-pink-700 hover:text-white"
                >
                    Inicia Sesión
                </a>
            </div>
        </div>
    ');

    if (isset($_POST['r']) && isset($_POST['register'])) {

        if ($_POST['r'] == 'register' && $_POST['register'] == 'set') {
            $errors = array();
            $nameRegex = "/^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$/";
    
            if (empty($_POST['name'])) {
                $errors = array('name' => 'Ingrese un nombre');
            }
            else if (strlen($_POST['name']) <= 3) {
                $errors = array('name' => 'El nombre debe tener mas de tres caracteres');
            }
            else if (!preg_match($nameRegex, $_POST['name'])) {
                $errors = array('name' => 'El nombre solo acepta letras y espacios');
            }

            if (empty($_POST['email'])) {
                $errors = array('email' => 'Ingrese un email');
            }
    
            print_r($_POST);
    
            echo 'Hola Mundo estoy aqui';

            print_r($errors);
        }
    }

// 