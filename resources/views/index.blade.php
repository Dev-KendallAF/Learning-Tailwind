

<x-layouts.app titulo="Introduccion" subpage='{{$subpage}}'>
    <x-slot name="content">
        <div class="container my-36 mx-auto">
           <div class="grid sm:grid-cols-2 md:grid-cols-1">
            <div class="pl-6 sm:text-start md:text-center">
                <h1 class="text-4xl font-semibold my-3 dark:text-cyan-300" data-aos='zoom-in' >Utility First</h1>
                <hr class="md:mx-10">
                <p class="text-gray-500 text-lg md:p-5 dark:text-white" data-aos='zoom-in' data-aos-duration="1000">Construir componentes complejos a partir de un conjunto limitado de utilidades primitivas.
                    <span class="text-cyan-500">Usar clases de utilidad para crear diseños personalizados sin escribir CSS                    </span>
                </p>
            </div>
            <div class="pl-6 md:text-center m-24" id="info"> 
                <div class="relative columns-1 sm:columns-3 gap-8">
                    <div class="text-center" data-aos="fade-left" >
                        <h1 class="font-bold my-2 sm:hidden md:block dark:text-cyan-300">Layout</h1>
                        <a href="{{route('grids')}}" data-aos="fade-in" data-aos-duration="500" class="relative inline-block border text-gray-400 rounded-lg bg-gradient-to-r hover:border-indigo-500  hover:from-indigo-500 hover:to-cyan-500 hover:text-white p-10 aspect-w-16 aspect-h-5 trs-5 dark:text-white">
                            <i class="fa-solid fa-table-cells fa-2xl"></i>
                        </a>
                        <a href="{{route('grids')}}#text" data-aos="fade-in" data-aos-duration="1000" class="relative inline-block border text-gray-400 rounded-lg bg-gradient-to-r hover:border-indigo-500  hover:from-indigo-500 hover:to-cyan-500 hover:text-white p-10 aspect-w-16 aspect-h-5 trs-5 dark:text-white">
                            <i class="fa-solid fa-font  fa-2xl"></i>
                        </a>
                        <a href="{{route('grids')}}#border" data-aos="fade-in" data-aos-duration="1500" class="relative inline-block border text-gray-400 rounded-lg bg-gradient-to-r hover:border-indigo-500  hover:from-indigo-500 hover:to-cyan-500 hover:text-white p-10 aspect-w-16 aspect-h-5 trs-5 dark:text-white">
                            <i class="fa-solid fa-border-none  fa-2xl"></i>
                        </a>
                        <a href="{{route('grids')}}#pseudo" data-aos="fade-in" data-aos-duration="2000" class="relative inline-block border text-gray-400 rounded-lg bg-gradient-to-r hover:border-indigo-500  hover:from-indigo-500 hover:to-cyan-500 hover:text-white p-10 aspect-w-16 aspect-h-5 trs-5 dark:text-white">
                            <i class="fa-solid fa-diagram-project  fa-2xl"></i>
                        </a>
                    </div>
                   
                   
                    <div class="text-center" data-aos="fade-up">
                        <h1 class="font-bold my-2 sm:hidden md:block dark:text-cyan-300">Colores y Texto</h1>
                        <a href="{{route('colors')}}" data-aos="fade-in" data-aos-duration="500"  class="relative rounded-lg inline-block border text-gray-400 bg-gradient-to-r hover:border-indigo-500  hover:from-indigo-500 hover:to-cyan-500 hover:text-white p-10 aspect-w-16 aspect-h-5 trs-5 dark:text-white">
                            <i class="fa-solid fa-palette fa-2xl"></i>
                        </a>
                        <a href="{{route('colors')}}#text" data-aos="fade-in" data-aos-duration="1000" class="relative rounded-lg inline-block border text-gray-400 bg-gradient-to-r hover:border-indigo-500  hover:from-indigo-500 hover:to-cyan-500 hover:text-white p-10 aspect-w-16 aspect-h-5 trs-5 dark:text-white">
                            <i class="fa-solid fa-heading  fa-2xl"></i>
                        </a>
                        <a href="{{route('colors')}}#text" data-aos="fade-in" data-aos-duration="1500" class="relative rounded-lg inline-block border text-gray-400 bg-gradient-to-r hover:border-indigo-500  hover:from-indigo-500 hover:to-cyan-500 hover:text-white p-10 aspect-w-16 aspect-h-5 trs-5 dark:text-white">
                            <i class="fa-solid fa-moon  fa-2xl"></i>
                        </a>
                        <a href="{{route('colors')}}#text" data-aos="fade-in" data-aos-duration="2000" class="relative rounded-lg inline-block border text-gray-400 bg-gradient-to-r hover:border-indigo-500  hover:from-indigo-500 hover:to-cyan-500 hover:text-white p-10 aspect-w-16 aspect-h-5 trs-5 dark:text-white">
                            <i class="fa-solid fa-gear  fa-2xl"></i>
                        </a>
                    </div>
                    <div class="text-center " data-aos="fade-right">
                        <h1 class="font-bold my-2 sm:hidden md:block dark:text-cyan-300">Transición y animaciones</h1>
                        <a href="{{route('animations')}}"  data-aos="fade-in" data-aos-duration="500"  class="relative rounded-lg  inline-block border text-gray-400 bg-gradient-to-r hover:border-indigo-500  hover:from-indigo-500 hover:to-cyan-500 hover:text-white p-10 aspect-w-16 aspect-h-5 trs-5 dark:text-white">
                            <i class="fa-solid fa-film  fa-2xl"></i>
                        </a>
                        <a href="{{route('animations')}}#text"  data-aos="fade-in" data-aos-duration="1000" class="relative  rounded-lg inline-block border text-gray-400 bg-gradient-to-r hover:border-indigo-500  hover:from-indigo-500 hover:to-cyan-500 hover:text-white p-10 aspect-w-16 aspect-h-5 trs-5 dark:text-white">
                            <i class="fa-solid fa-maximize  fa-2xl"></i>
                        </a>
                        <a href="{{route('animations')}}#text"  data-aos="fade-in" data-aos-duration="1500" class="relative  rounded-lg inline-block border text-gray-400 bg-gradient-to-r hover:border-indigo-500  hover:from-indigo-500 hover:to-cyan-500 hover:text-white p-10 aspect-w-16 aspect-h-5 trs-5 dark:text-white">
                            <i class="fa-solid fa-forward  fa-2xl"></i>
                        </a>
                        <a href="{{route('animations')}}#text"  data-aos="fade-in" data-aos-duration="2000" class="relative  rounded-lg inline-block border text-gray-400 bg-gradient-to-r hover:border-indigo-500  hover:from-indigo-500 hover:to-cyan-500 hover:text-white p-10 aspect-w-16 aspect-h-5 trs-5 dark:text-white">
                            <i class="fa-solid fa-video  fa-2xl"></i>
                        </a>
                    </div>
                   
                </div>
            </div>
           </div>
            
        </div>

        <div class="container mx-auto my-36">
            <div>
                <div class="pl-6 sm:text-start md:text-center">
                <h1 class="text-4xl font-semibold my-3 dark:text-cyan-300" data-aos='zoom-in' >Preflight</h1>
                <hr class="md:mx-10">
                <p class="text-gray-500 text-lg md:p-5 dark:text-white" data-aos='zoom-in' data-aos-duration="1000"> 
                    Tailwind ya normaliza nuestros estilos y elimina los estilos por defecto que te da el navegador, por esa misma razón al utilizar etiquetas de encabezado como <span class="text-cyan-500"> H1 no aplicara ningún estilo </span> sobre ella.
                    Esta opción del preflight se puede desactivar desde la configuración del Tailwind.</p>
            </div>
            </div>
        </div>
        <div class="container mx-auto my-36">
            <div class="grid grid-cols-2">
                <div class="pl-6 text-start ">
                <h1 class="text-4xl font-semibold my-3 dark:text-cyan-300" data-aos="zoom-in">Mobile First</h1>
                <hr >
                <p class="text-gray-500 text-lg py-5 dark:text-white" data-aos="zoom-in"> 
                    Tailwind tiene la opcion de poder modificar nuestro sitio web para que este se adapte a los dispositivos mobiles o de pantalla pequeña, por ende las clases que podemos <span class="text-cyan-500">aplicar con sm, md, lg, xl, 2xl</span> aplicaran sus estilos de la clase en adelante </p>
            </div>

            <div class="pl-6 text-start " data-aos-duration="2000" data-aos="flip-right">
               <img src="https://www.pngmart.com/files/15/Apple-iPhone-11-PNG-Clipart.png" alt="" srcset="">
            </div>
            </div>
        </div>

    </x-slot>
</x-layouts.app>



