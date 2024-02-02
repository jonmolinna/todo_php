<?php

    print('
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <script src="https://cdn.tailwindcss.com"></script>
            </head>
            <body>
    
    ');

    if ($_SESSION['ok']) {
        print('
            <header class="p-8">
                <div>
                    <h1 class="text-center text-red-700 font-semibold text-3xl">
                        Task Manager
                    </h1>
                </div>
                <nav class="flex justify-center mt-5">
                    <ul class="flex font-medium space-x-8">
                        <li>
                            <a href="./" class="hover:text-red-700">
                                Home
                            </a>
                        </li>
                        <span>|</span>
                        <li>
                            <a href="todo" class="hover:text-red-700">
                                To Do
                            </a>
                        </li>
                        <span>|</span>
                        <li>
                            <a href="completed" class="hover:text-red-700">
                                Completed
                            </a>
                        </li>
                        <span>|</span>
                        <li>
                            <a href="salir" class="hover:text-red-700">
                                Salir
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>
        ');
    };

    print('
        <main>
    ');