<x-layouts.app titulo="Introduccion" nav={{$nav}} subpage="{{$subpage}}" navtitle="Colores y Texto" navsubtitle="Aplicar estilos facilmente" navtext="Aplica estilos para tus sitios web facilmente con Tailwind con este Framework puedes aplicar diversos ajustes para que tu web se adapte a tus necesidades" url='https://images.unsplash.com/photo-1618004912476-29818d81ae2e?auto=format&fit=crop&q=80&w=1964&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'>
    <x-slot name="content">
        <section id="layout">
            <div class="container mx-auto my-36">
                <div class="grid md:grid-cols-2">
                    <div class="pl-6 text-start ">
                    <h1 class="text-4xl font-semibold my-3 dark:text-cyan-300" data-aos="zoom-in">Container</h1>
                    <hr >
                    <p class="text-gray-500 text-lg py-5 dark:text-white" data-aos="zoom-in"> 
                        La clase container tiene un maximo de 768px, es decir que para ventanas menores de 768px este va a cubrir todo el ancho de la pantalla pero al superar este limite va a empezar a dejar un espacio en blanco del lado derecho de nuestra web.          </p>  </div>
                <div class="pl-6 text-start " data-aos-duration="2000" data-aos="zoom-in">
                   <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/3D_model_of_a_Cube.stl/800px-3D_model_of_a_Cube.stl.png" alt="" class="rounded-lg ">
                </div>
                </div>
            </div>
            <div class="grid grid-cols-1">
                <div class="bg-purple-500 p-3">
                    <h1 class="text-2xl font-semibold">
                        Sin container (similar a container-fluid)
                    </h1>
                </div>
                <div class="container mx-auto bg-red-500 p-3">
                    
                    <h1 class="text-2xl font-semibold">
                        Con container mx-auto
                    </h1>
                </div>
                <div class="container bg-cyan-500 p-3">
                    <h1 class="text-2xl font-semibold">
                        Con container
                    </h1>
                </div>
            </div>
            <div class="container mx-auto my-10 backdrop-blur-sm bg-black/80  shadow-lg dark:bg-white/10 rounded-lg p-10 text-white">
                <div class="rounded-lg text-center">
                <h2 class="font-semibold">M&aacute;s informaci&oacute;n</h2>
                    <span class="bg-white rounded-full p-1">
                        <i class="fa-solid fa-angles-down fa-bounce p-3 text-black"></i>
                    </span>
                    
                    <div class="text-start">
                        <h3 class="font-semibold mt-10 text-cyan-300">
                           Class mx-auto
                        </h3>
                        <p>Aplicando la clase mx-auto añade centra nuestro contenedor para que no suceda esto podemos configurar que nuestro div empiece a tener margenes cuando este sea 1680px el contenido se centrara con los margenes lg:container lg:mx-auto</p>
                        <h3 class="font-semibold mt-10 text-cyan-300">
                            Configurar por defecto
                        </h3>
                        <p>Podemos aplicar que el centrado de nuestro container sea por default desde tailwind.config.js dentro de los parametros agregamos theme:{ container: { center: true }}
                        </p>
                        <h3 class="font-semibold mt-10 text-cyan-300">¿Que pasa si no usamos container?</h3>
                        <p>Container-fluid de bootstrap no existe en Tailwind, para obtener el mismo resultado solo colocamos el div sin ninguna clase y veremos que este se aplica a todo el ancho de la ventana, tambien si queremos ver nuestro div para terminos de layout podemos aplicar una altura con h-5.</p>
                    </div>
                </div>
            </div>
    
            <div class="container mx-auto my-36">
                <div class="grid grid-cols-1 md:grid-cols-2 ">
                    <div class="pl-6 text-start ">
                    <h1 class="text-4xl font-semibold my-3 dark:text-cyan-300" data-aos="zoom-in">Grids</h1>
                    <hr >
                    <p class="text-gray-500 text-lg py-5 dark:text-white" data-aos="zoom-in">
                        Los grids se utilizan para dividir el contenido de nuestra web por secciones este posicionamiento de elementos podemos aplicarlo por columnas, como se muestra en el espacio de la derecha es un posicionamiento de bloques de 4 columnas, con 3 filas. Podemos dividir nuestro contenido con etiquetas responsive para acomodar nuestros elementos segun lo requiera. 
                    </p>
                </div>
                <div class="pl-6 text-start">
                    <div class="grid grid-cols-4 gap-5 text-center text-white">
                        @foreach ([1,2,3,4,5,6,7,8,9,10,11,12] as $i)
                            @if ($i <= 4)
                            <div class="p-5 rounded bg-purple-500 data-aos-duration="{{$i}}{{$i++}}0" data-aos="zoom-in"">{{$i}}</div>   
                            @elseif($i > 4 && $i <= 8)
                            <div class="p-5 rounded bg-red-500 data-aos-duration="{{$i}}{{$i++}}0" data-aos="zoom-in"">{{$i}}</div>   
                            @else 
                            <div class="p-5 rounded bg-cyan-500 data-aos-duration="{{$i}}{{$i++}}0" data-aos="zoom-in"">{{$i}}</div>   
                            @endif
                        @endforeach
                    </div>
                </div>
                </div>
            </div>
        </section>
        <section id="text">
            <div class="container mx-auto my-36">
                <div class="grid md:grid-cols-2">
                    <div class="pl-6 text-start ">
                    <h1 class="text-4xl font-semibold my-3 dark:text-cyan-300" data-aos="zoom-in">Tipografia</h1>
                    <hr >
                    <p class="text-gray-500 text-lg py-5 dark:text-white" data-aos="zoom-in"> 
                        Puedes aplicar varios estilos a tus textos, el Preflight elimina todos los estilos por defecto que aplica nuestra web, por ende es necesario conocer <span class="text-cyan-300">como aplicar nuevos estilos a nuestros textos con tailwind.</span> 
                    </p>  
                </div>
                <div class="pl-6 text-start "  data-aos="zoom-in">
                    <h1 class="text-4xl font-semibold my-3 dark:text-cyan-300" data-aos="zoom-in">Fuente</h1>
                    <hr >
                    <p class="text-gray-500 text-lg py-5 dark:text-white" data-aos="zoom-in"> 
                        Podemos agregar diversos tamaños a nuestras fuentes de texto, ya que Tailwind esta normalizado podemos aplicar el estilo de fuente que deseamos.
                    </p>  
                    
                    <ul class="list-disc dark:text-white pl-10">
                        <li>text-sm</li>
                        <li>text-md</li>
                        <li>text-lg</li>
                        <li>text-2xl</li>
                        <li>...</li>
                        <li>text-9xl</li>
                    </ul>
                </div>
                </div>
            </div>

        </section>
        <section id="border">
            <div class="container mx-auto my-36">
                <div class="grid md:grid-cols-2">
                    <div class="pl-6 text-start ">
                    <h1 class="text-4xl font-semibold my-3 dark:text-cyan-300" data-aos="zoom-in">Margin y Padding</h1>
                    <hr >
                    <p class="text-gray-500 text-lg py-5 dark:text-white" data-aos="zoom-in"> 
                        Podemos aplicar margin y padding a nuestros elementos facilmente con la clase p- o m- , maximo que podemos aplicar a un elemento es 96.
                    </p>
                    <p class="my-3 text-gray-500 text-lg py-5 dark:text-white">
                        <b class="text-cyan-300">Border Sytle:</b> Podemos aplicar estilo de borde a nuestros elementos utilizando diversas clases como border border-color-intensidad del color, este tema de colores se vera en el apartado colores. Para aplicar estilos en el redondeado utilizamos rounded y para finalizar el tipo de borde que queremos aplicar usamos:	
                    </p>
                    <ul class="list-disc pl-10 text-lg text-white">
                        <li>border-solid </li>
                        <li>border-dashed</li>
                        <li>border-dotted</li>
                        <li>border-double</li>
                    </ul>
                </div>

                <div class="pl-6 text-start " data-aos-duration="2000" data-aos="zoom-in">
                    <div class="h-full p-5  backdrop-blur-sm bg-black/80  shadow-lg dark:bg-white/10 text-white rounded-lg">
                        <div class="border px-10">px-10 : es el espacio interno del elemento</div>
                        <div class="border ">sin padding</div>

                        <div class="border m-10">m-10 : es el espacio externo del elemento</div>
                        <div class="border ">sin margin</div>


                        <div class="border border-white bg"></div>

                    </div>
                </div>
            </div>

        </section> 

        <section id="pseudo">
            <div class="container mx-auto my-36">
                <div class="grid md:grid-cols-2">
                    <div class="pl-6 text-start ">
                    <h1 class="text-4xl font-semibold my-3 dark:text-cyan-300" data-aos="zoom-in">Pseudo Clases </h1>
                    <hr >
                    <p class="text-gray-500 text-lg py-5 dark:text-white" data-aos="zoom-in"> 
                        En tailwind podemos  aplicar pseudoClases utilizando los ":" seguido de la clase que queramos aplicar, dentro de nuestro elemento podemos aplicar inmediatamente efectos segun la interaccion del usuario con nuestro sitio web, para aplicar pseudo clases usamos dos puntos y seguido nuestro elemento 
                        <br>
                        Class hover: se activa cuando el usuario pasa el cursor por encima del elemento cada efecto que se quiera añadir a hover se sigue la misma estructura para las demas pseudo clases
                    </p>  
                </div>
                <div class="pl-6 text-start " data-aos-duration="2000" data-aos="zoom-in">
                   <div class="bg-black h-full content-center hover:rounded-full hover:bg-red-500 trs-5" style="cursor: pointer">
                    <div>
                        <h2 class="text-2xl font-semibold my-auto text-white text-center pt-36">Coloca el curso encima</h2>
                    </div>
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
                           Utilizando Sass
                        </h3>
                        <p>
                            Podemos aplicar clases de Tailwind con Sass solo en nuestra hoja de estilos agregamos <span class="text-red-500">@apply ...clases;</span> dentro de apply colocamos nuestras clases de estilos, al finaliza colocamos ;
                        </p>
                        <p class="my-3">
                            #box <br>
                            {<br>
                                &emsp;@apply bg-red-500 hover:bg-cyan-500;<br>
                            }
                        </p>
                        <hr>
                        <p class="my-3">
                            #box <br>
                            {<br>
                                &emsp;@apply bg-red-500 ;<br>
                                &emsp;&hover{<br>
                                    &emsp;&emsp; @apply bg-red-500 ;<br>
                                    &emsp;&emsp;transition: all ease-in 0.5s;<br>
                                    &emsp; }<br>
                            }
                        </p>
                     </div>
                </div>
            </div>
    
        </section> 
    </x-slot>
</x-layouts.app>
