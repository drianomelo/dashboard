<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="w-full h-screen font-oxygen">
    <div class="w-full h-full flex">
        <aside class="w-52 h-full bg-[#1F263E] flex flex-col transition-all">
            <div class="px-6 py-4 flex flex-col items-center">
                <h1
                    class="w-full text-white text-center font-light text-base uppercase tracking-[.3rem] border-b border-[#303750] pb-2.5">
                    Dashboard</h1>
                <h2 class="name text-[#50B8E4] font-bold uppercase pt-2.5 text-lg">Adriano Melo</h2>
            </div>
            <nav class="flex-1">
                <ul>
                    <li>
                        <a href="#"
                            class="item group py-3 text-[15px] px-6 font-normal text-white flex items-center gap-4 border-l-4 border-l-transparent transition-all duration-300
                                     hover:bg-[#303750] hover:border-l-[#50B8E4]">
                            <i
                                class="fa-solid text-lg fa-house transition-all duration-300 item group-hover:text-[#50B8E4]"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="item group py-3 text-[15px] px-6 font-normal text-white flex items-center gap-4 border-l-4 border-l-transparent transition-all duration-300
                                     hover:bg-[#303750] hover:border-l-[#50B8E4]">
                            <i
                                class="fa-solid text-lg fa-cube transition-all duration-300 group-hover:text-[#50B8E4]"></i>
                            <p>Teste</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <div>
                <a href="#"
                    class="item text-zinc-400 flex items-center gap-4 px-6 py-3 border-l-4 border-l-transparent transition-all duration-300
                                hover:text-red-500 hover:bg-red-950 hover:border-l-red-500">
                    <i class="fa-solid text-lg fa-power-off"></i>
                    <p>Sair</p>
                </a>
            </div>
        </aside>
        <main class="w-full h-full bg-[#f3f6fe]">
            <header class="w-full px-6 py-4 bg-[#FFF] flex justify-between">
                <div>
                    <button id="menu"><i class="fa-solid fa-bars"></i></button>
                </div>
                <div>
                    <a href="#"><i class="fa-solid fa-gear"></i></a>
                </div>
            </header>
        </main>
    </div>

    <script src="https://kit.fontawesome.com/555bf53180.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
