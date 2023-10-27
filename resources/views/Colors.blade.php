<x-layouts.app titulo="Introduccion" nav={{$nav}} subpage="{{$subpage}}" navtitle="Colores y Texto" navsubtitle="Aplicar estilos facilmente" navtext="Aplica estilos para tus sitios web facilmente con Tailwind con este Framework puedes aplicar diversos ajustes para que tu web se adapte a tus necesidades" url='https://images.unsplash.com/photo-1618004912476-29818d81ae2e?auto=format&fit=crop&q=80&w=1964&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'>
    <x-slot name="content">
        <section id="color">
            <div class="container mx-auto my-36">
                <div class="grid md:grid-cols-2 divide-x">
                    <div class="pl-6 text-start ">
                    <h1 class="text-4xl font-semibold my-3 dark:text-cyan-300" data-aos="zoom-in">Colores</h1>
                    <hr >
                    <p class="text-gray-500 text-lg py-5 dark:text-white" data-aos="zoom-in"> 
                        Podemos aplicar gran variedad de colores podemos variar su intensidad de 10 a 950 más oscuro, los mas utilizados son red, blue, green, black, entre muchos, para aplicae <span class="text-cyan-300"> bg-color-intensidad  </span>          
                     </p>  </div>
                <div class="pl-6 text-start " data-aos-duration="2000" data-aos="zoom-in">
                    <div class="grid grid-cols-3 ">
                        @foreach(['cyan','purple','red','indigo'] as $i)
                        <div class="text-gray-500 text-lg py-5 dark:text-white" data-aos="fade-in">bg-{{$i}}-500</div>
                        <div class="col-span-2 h-10 bg-{{$i}}-500"></div>
                        @endforeach
                    </div>
                </div>
                </div>
            </div>
        
            <div id="text" class="container mx-auto my-10 backdrop-blur-sm bg-black/80  shadow-lg dark:bg-white/10 rounded-lg p-10 text-white">
                <div class="rounded-lg text-center">
                <h2 class="font-semibold">M&aacute;s informaci&oacute;n</h2>
                    <span class="bg-white rounded-full p-1">
                        <i class="fa-solid fa-angles-down fa-bounce p-3 text-black"></i>
                    </span>
                    
                    <div class="text-start">
                        <h3 class="font-semibold mt-10 text-cyan-300">
                          Class text-color
                        </h3>
                        <p>Aplicando la clase text-color podemos agregar color a nuestras fuentes y textos para que se vean mejor, todos los colores en tailwind se aplican de una forma similar <span class="text-cyan-300">text-color-intensidad</span></p>
                        <h3 class="font-semibold mt-10 text-cyan-300">
                            Bordes 
                        </h3>
                        <p>Podemos aplicar que el color de nuestro bordes como requiera nuestra web de igual forma modificarlos</p>
                        <h3 class="font-semibold mt-10 text-cyan-300">Usar Fondos con degradado</h3>
                        <p>
Podemos aplicar degradados facilmente utilizando Tailwind primero usamos la clase <span class="text-red-500"> bg-gradient-to-r </span> <span class="text-green-500"> from-cyan-500 </span> <span class="text-indigo-300"> to-blue-500 </span>                        </p>
                    </div>
                </div>
            </div>
    
            
                </div>
            </div>
        </section>
     
       
        <section id="darkmode">
            <div class="container mx-auto my-36">
                <div class="grid md:grid-cols-2">
                    <div class="pl-6 text-start ">
                    <h1 class="text-4xl font-semibold my-3 dark:text-cyan-300" data-aos="zoom-in">Dark Mode</h1>
                    <hr >
                    <p class="text-gray-500 text-lg py-5 dark:text-white" data-aos="zoom-in"> 
                        En tailwind podemos  aplicar darkMode a nuestra web automaticamente, Vamos al archivo de configuracion de tailwind y añadimos dentro de theme{ darkMode:'media'} y podremos hacer uso de nuestra clase dark:estilo, por ejemplo queremos que nuestra aplicacion tenga color azul oscuro de fondo <span class="text-cyan-300"> dark:bg-blue-950</span>
                    </p>  
                </div>
                <div class="pl-6 text-start " data-aos-duration="2000" data-aos="zoom-in">
                   <div class="bg-black h-full content-center p-10">
                    <p class="text-white">
                        /** @type {import('tailwindcss').Config} */<br>
                        module.exports = {<br>
                            &emsp;content: [<br>
                                &emsp;&emsp;"./resources/**/*.blade.php",<br>
                                &emsp;&emsp;"./resources/**/*.js",<br>
                                &emsp;&emsp;"./resources/**/*.vue",<br>
                                &emsp;],<br>
    
                            &emsp;theme: {<br>
                                &emsp;&emsp;darkMode: 'class', <br>
                                &emsp;&emsp;extend: {},<br>
                                &emsp;},<br>
                                &emsp; plugins: [],<br>
                        }
                    </p>
                   </div>
                </div>
                </div>
            </div>

            <div class="container mx-auto my-10 backdrop-blur-sm bg-black/80  shadow-lg dark:bg-white/10  rounded-lg p-10 text-white">
                <div class="rounded-lg text-center">
                <h2 class="font-semibold">M&aacute;s informaci&oacute;n</h2>
                    <span class="bg-white rounded-full p-1">
                        <i class="fa-solid fa-angles-down fa-bounce p-3 text-black"></i>
                    </span>
                    
                    <div class="text-start">
                        <h3 class="font-semibold mt-10 text-cyan-300">
                           Sobre Dark Mode
                        </h3>
                        <p>
                            Para que sea automatico segun la configuracion de nuestro dispositivo podemos acceder mediante el archivo de configuracion y colocamos el darkMode fuera de theme {}
                            <br>
                            Otra forma de ver como se ve nuestro sitio en DarkMode es usando la clase dark dentro de un div y todos sus elementos internos que tengan la clase dark se activaran, para desctivarla desde inspeccionar podemos desctivar nuestra web                        
                        </p>
                     </div>
                     <h3 class="font-semibold my-5  text-cyan-300">
                        Activar y desactivar el DarkMode Manualmente
                     </h3>
                     
                     <button id="darkModeToggle" class="w-16 h-8 shadow-lg bg-gray-300 rounded-full p-1 duration-300 ease-in-out">
                        <div id="darkModeIndicator" class="w-6 h-6 bg-white text-black rounded-full shadow-md transform duration-300 ease-in-out"><i class="fa-solid fa-sun" id="iconDarkMode"></i></div>
                    </button>

                
            </div>
    
        </section> 
    </x-slot>
</x-layouts.app>


