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
                <div class="pl-6 text-start " data-aos-duration="2000" data-aos="fade-left">
                    <div class="grid grid-cols-3 ">
                        @foreach(['cyan','purple','red','indigo'] as $i)
                        <div class="text-gray-500 text-lg py-5 dark:text-white" data-aos="fade-in">bg-{{$i}}-500</div>
                        <div class="col-span-2 h-10 rounded-2xl bg-{{$i}}-500"></div>
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
                        Podemos aplicar degradados facilmente utilizando Tailwind primero usamos la clase <span class="text-red-500"> bg-gradient-to-r </span> <span class="text-green-500"> from-cyan-500 </span> <span class="text-indigo-300"> to-blue-500 </span>                        
                        </p>
                        <h1 class="text-center font-bold text-4xl my-10">Fuentes y Directivas</h1>
                        <p class="my-3 text-center">La directiva te provee las bases y utilidades de nuestras clases que podemos declarar en nuestro sistema </p>
                        <hr>
                        <h3 class="font-semibold mt-10 text-cyan-300">@tailwind</h3>
                        <p>Se utiliza para implementar directamente librerias de tailwind en nuestro css </p>
                        <div class="grid grid-cols-2  gap-7 p-3">
                            <div>
                                <h3 class="text-red-300">@tailwind base;</h3>
                                <p>Esto inyecta los estilos base de Tailwind y cualquier estilo base registrado por complementos.</p>
                            </div>
                            <div>
                                <h3 class="text-red-300">@tailwind components;</h3>
                                <p>Esto inyecta las clases de componentes de Tailwind y cualquier clase de componente registrado por complementos.
                                </p>
                            </div>
                            <div>
                                <h3 class="text-red-300">@tailwind utilities;</h3>
                                <p>Esto inyecta las clases de utilidad de Tailwind y cualquier clase de utilidad registrada por complementos.</p>
                            </div>
                            <div>
                                <h3 class="text-red-300">@tailwind variants;</h3>
                                <p>Utilice esta directiva para controlar dónde Tailwind inyecta el desplazamiento y otras variantes de cada clase.
                                    Si se omite, Tailwind agregará estas clases al final de tu hoja de estilo por defecto.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="grid grid-cols-2">
                            <div >
                                <h3 class="font-semibold mt-10 text-cyan-300">@layer</h3>
                                <p>Nos permite definir estilos para modificar los archivos por defecto de nuestros archivos importados por tailwind 
                                    <br>
                                    Por ejemplo definir por defecto que todos los h1 tengas cierto estilo definido </p>
                            </div>
                            <div class="bg-black p-5 rounded-xl mt-10">
                                <code>
                                    @layer base {
                                        &emsp; h1 { <br>
                                            &emsp; &emsp;@apply text-2xl;<br>
                                            &emsp;} <br>
                                            &emsp;h2 { <br>
                                                &emsp; &emsp;@apply text-xl; <br>
                                                &emsp;} <br>
                                  } <br>
                                  </code>
                            </div>
                        </div>
                        
                        <hr>
                        <div class="grid grid-cols-2">
                            <div >
                                <h3 class="font-semibold mt-10 text-cyan-300">@apply</h3>
                                <p>Nos permite aplicar estilos de clases directamente en codigo en nuestro css, no solo podemos usar clases de tailwind sino aplicar estilos creados por nosotros para customizar nuestra web.</p>
                             
                            </div>
                            <div class="bg-black p-5 rounded-xl mt-10">
                                <code>
                                    .navlink a <br>
                                    &emsp;{ <br>
                                        &emsp; &emsp;@apply rounded-md px-3 py-2 text-sm font-medium ;<br>
                                        &emsp; &emsp; &:hover{@apply underline underline-offset-8 text-indigo-500 trs}<br>
                                        &emsp; &emsp;&.active<br>
                                        &emsp; &emsp;&emsp;{<br>
                                            &emsp; &emsp; &emsp; @apply bg-indigo-500 text-white rounded-md px-3 py-2 text-sm font-medium shadow-md shadow-indigo-500/50;<br>
                                            &emsp; &emsp; &emsp;&:hover{text-decoration: none; @apply bg-indigo-400 trs}<br>
                                                
                                            &emsp; &emsp;}<br>
                                            &emsp;  }<br>
                                  </code>
                            </div>
                        </div>
                        <h1 class="text-center font-bold text-4xl my-10">Crear nuevos estilos</h1>
                        <p class="my-3 text-center">Podemos crear nuevos estilos e integrarlos en nuestro proyecto, hacemos uso de el con clases de tailwind solo debemos definirlas en el archivo de configuracion de este</p>
                        <hr>
                        <p class="mt-10">Puedes añadir nuevos elementos a nuestro tailwind modificando el archivo tailwind js, dentro del apartado extends{} podemos agregar nuevas paletas de colores o modificar las ya prestablecidas podemos tambien configurar para utilizar propiedades como primarias,secundarias de nuestra fuente de estilos, por ejemplo vamos a crear una web y esta requiere de una paleta de colores en especifico podemos modificar este archivo y agregar los con Custom properties.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-black p-5 rounded-xl mt-10 ">
                                <code>
                                    <span class="text-cyan-500">archivo de tailwind.config.js </span><br>
                                    &emsp;extend: <br>
                                    &emsp;{<br>
                                        &emsp;&emsp;colors:<br>
                                        &emsp;&emsp;{<br>
                                            &emsp;&emsp;&emsp;primary: 'var(--color-primary)',<br>
                                            &emsp;&emsp;&emsp;secondary: 'var(--color-secondary)'<br>
                                            &emsp;&emsp;},<br>
                                      &emsp;},<br>
                                      
                                  </code>
                            </div>
                            <div class="bg-black p-5 rounded-xl mt-10">
                                <code>
                                    <span class="text-red-200">archivo de app.scss </span><br>
                                    &emsp;:root<br>
                                    &emsp;{<br>
                                        &emsp;&emsp;--color-primary: #5f0f40;<br>
                                        &emsp;&emsp;--color-secondary: #70e000;<br>
                                 &emsp;}<br>
                                  </code>
                            </div>
                        </div>
                        <p class="mt-10">Esto podemos aplicarlo no solo con colores sino con espaciado y cualquier elemento de tailwind que implementemos con clases, en este ejemplo como estamos usando colores podemos aplicar estos estilos usando la clase color ya sea para fondo <span class="bg-primary text-white m-2 p-1 rounded-full "> bg-primary </span> o para texto <span class="text-secondary"> text-secondary </span></p>
                        
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


