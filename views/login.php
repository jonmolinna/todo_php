<?php
    print('
        <div class="pb-7">
            <form
                method="POST"
                class="max-w-sm mx-auto space-y-5 border border-gray-300 mt-10 px-4 py-10 rounded-md shadow-md"
            >
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
                <input type="hidden" name="r" value="login" >
                <input type="hidden" name="login" value="set" >
                <button
                    type="submit"
                    class="text-white bg-pink-700 hover:bg-pink-800 focus:outline-none focus:ring-pink-300 font-medium rounded-md text-base w-full p-2"
                >
                    Iniciar Sessión
                </button>
            </form>
        </div>
    ');

    if (isset($_POST['r']) && isset($_POST['login'])) {
        if ($_POST['r'] == 'login' && $_POST['login'] == 'set') {
            $form = array(
                'email' => $_POST['email'],
                'password' => $_POST['password'],
            );

            $validate_auth = new ValidateAuth();
            $errors = $validate_auth->validar_auth($form);

            if (empty($errors)) {
                $auth_controller = new AuthController();
                $auth_controller->authentication($_POST['email']);
            }
            else {
                $template_errors = '<div class="max-w-sm mx-auto px-4 mb-4">';
                foreach ($errors as $error) {
                    $template_errors .= '
                        <p class="text-base font-medium text-red-700">' . $error  . '</p> '
                    ;
                }
                $template_errors .= '</div>';
                print($template_errors);
            }
        }
    }

    print('
        <div class="max-w-sm mx-auto space-y-2 border border-gray-300 px-4 py-4 rounded-md shadow-md">
            <p class="text-center text-sm">
                ¿Aún no tienes una cuenta?
            </p>
            <a 
                href="register"
                class="block text-center text-pink-700 border-2 border-pink-700 p-2 rounded-md hover:bg-pink-700 hover:text-white"
            >
                Crea tu Cuenta
            </a>
        </div>
    ');

    