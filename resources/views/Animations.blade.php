<x-layouts.app titulo="Animations" nav={{$nav}} subpage="{{$subpage}}" navtitle="Animaciones y Transiciones" navsubtitle="Aplicar efectos" navtext="Aplica estilos para que tu web no sea estatica y tenga mayor interaccion con los usuarios, con Tailwind puedes aplicar animaciones a tus elementos utilizando clases facilmente" url='https://images.unsplash.com/photo-1632059368252-be6d65abc4e2?auto=format&fit=crop&q=80&w=1770&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'>
    <x-slot name="content">
        <section id="transform">
            <div class="container mx-auto my-36">
                    <div class="pl-6 text-center ">
                        <h1 class="text-4xl font-semibold my-3 dark:text-cyan-300" data-aos="zoom-in">Class Transform</h1>
                        <hr >
                        <p class="text-gray-500 text-lg py-5 dark:text-white" data-aos="zoom-in"> 
                            La clase transform permite cambiar las propiedades principales de cualqueir elemento. Las transformaciones se pueden utilizar de una forma muy simple con Tailwind, puedes modificar completamente la forma del elemento usando varias clases y aplicarlas con pseudoclases   
                        </p>
                    </div>
                    <div class="grid grid-cols-4 gap-7 p-3 text-center">
                       <div>
                        <div class="bg-cyan-300 text-cyan-600 rounded-full p-3 hover:transform hover:scale-75 ">Transform scale-75</div>
                       </div>
                       <div>
                        <div class="bg-red-300 text-red-600 rounded-full p-3 hover:transform hover:rotate-45 ">Transform rotate-45</div>
                       </div>
                       <div>
                        <div class="bg-green-300 text-green-600  p-3 hover:transform hover:skew-y-6 ">Transform skew-y-6</div>
                       </div>
                       <div>
                        <div class="bg-indigo-300 text-indigo-600 rounded-full p-3 hover:transform hover:translate-y-5 ">Transform translate-y-5</div>
                       </div>
                    </div>
            </div>
        </section>
        <section id="transition">
            <div class="container mx-auto my-36">
                    <div class="pl-6 text-center ">
                        <h1 class="text-4xl font-semibold my-3 dark:text-cyan-300" data-aos="zoom-in">Class Transition</h1>
                        <hr >
                        <p class="text-gray-500 text-lg py-5 dark:text-white" data-aos="zoom-in"> 
                            Las transiciones podemos aplicarla al aplicar un efecto a nuestro elemento utilizando los siguiente elementos 
                        </p>
                    </div>
                    <div class="grid grid-cols-3 gap-7 p-3 text-center">
                       <div>
                        <div class="bg-cyan-300 text-cyan-600 rounded-full p-3 transform transition ease-in hover:scale-125  cursor-pointer	">Transition ease-in</div>
                       </div>
                       <div>
                        <div class="bg-red-300 text-red-600 rounded-full p-3 transform transition ease-out  hover:scale-125 cursor-pointer	">Transition ease-out</div>
                       </div>
                       <div>
                        <div class="bg-green-300 text-green-600  rounded-full p-3 transform transition ease-in-out hover:scale-125  cursor-pointer">Transition ease-in-out</div>
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
                                   Configuraci&oacute;n del duration
                                </h3>
                                <p>
                                    La clase duration es el tiempo que tarda en realizar la transicion para ello vamos asignar la clases duration-x seguiro del valor en milisengundos en realizar el efecto sobre nuestro elemento.                                
                                </p>
                                <h3 class="font-semibold mt-10 text-cyan-300">
                                    Configuraci&oacute;n del delay
                                 </h3>
                                 <p>
                                     La clase delay es el tiempo que tarda antes de ejecutarse la transicion para utilizarlo aplicamos la clase delay-x seguiro del valor en milisengundos en realizar el efecto sobre nuestro elemento.                                
                                 </p>
                             </div>
                        </div>
                    </div>
            </div>
        </section>
        <section id="animation">
            <div class="container mx-auto my-36">
                    <div class="pl-6 text-center ">
                        <h1 class="text-4xl font-semibold my-3 dark:text-cyan-300" data-aos="zoom-in">Class Animation</h1>
                        <hr >
                        <p class="text-gray-500 text-lg py-5 dark:text-white" data-aos="zoom-in"> 
                            Las animaciones predefinidas de Tailwind son las siguientes normalmente se aplican con iconos o elementos para mejor interaccion con nuestra web                        </p>
                    </div>
                    <div class="grid grid-cols-4 gap-7 p-3 text-center">
                       <div>
                        <div class="bg-cyan-300 text-cyan-600 rounded-full p-3  ">animate-spin <i class="fa-solid fa-fan animate-spin"></i></div>
                       </div>
                       <div>
                        <div class="bg-white shadow-black shadow-lg rounded-lg p-3  ">
                            <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-sky-500 "></span>                           
                          </span>
                          New message <span class="text-sm">(animate-ping)</span>
                        </div>
                       </div>
                       <div>
                        <div class="bg-green-300 text-green-600  p-3 ">animate-bounce <i class="fa-solid fa-arrow-down-long animate-bounce"></i></div>
                       </div>
                       <div>
                        <div class="bg-indigo-300 text-indigo-600  p-3 ">animate-pulse <i class="fa-solid fa-circle-arrow-up animate-pulse"></i></div>
                       </div>
                    </div>
            </div>
        </section>
    </x-slot>
</x-layouts.app>
