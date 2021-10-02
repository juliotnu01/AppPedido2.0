<template>
    <div>
        <div class="md:flex my-5 bg-white shadow-2xl mx-6 sm:mx-0 rounded-lg border-2 border-yellow-600" v-for="n in 10" >
            <div class="md:flex-shrink-0">
                <img src="https://picsum.photos/200" alt="ipsu" class="h-48 w-full object-fill md:h-full md:w-48">
            </div>
            <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold sm:flex grid grid-rows-1">
                    <div class="sm:w-9/12 w-11/12  sm:item-flex mb-2 sm:mb-0">
                        <span class="uppercase break-normal   tex-left"  >
                            Nombre del Producto esto es un texto bastante largo de prueba
                        </span>
                    </div>
                    <div class="sm:w-3/12 w-11/12  sm:item-flex ">
                        <span class=" text-right capitalize truncate text-lg text-yellow-700 text-bold " >
                            $99.999.99,99
                        </span>
                    </div>
                </div>
                <a href="#" class="block my-2  leading-tight font-medium text-gray-400 text-semibold text-lx">
                    este es uin texto bastante largo de ejemplo que sirva para probar la descripcion del producto
                </a>
                <div class="sm:flex grid grid-cols-3  w-full  align-middle sm:justify-between mt-5 bg-yellow-300 bg-opacity-95 rounded-lg shadow-xl border-2 border-black" style="text-align: center;"  >
                    <div class="sm:mx-5">
                        <add-btn class="uppercase text-3xl text-bold p-1 bg-green-500 bg-opacity-80  border-green-900  border-4 rounded-full">
                            +
                        </add-btn>
                    </div>
                    <div class="sm:mx-5 text-center align-middle my-auto text-white text-2xl text-bold">
                        99999
                    </div>
                    <div class="sm:mx-5">
                        <rest-btn class="uppercase text-3xl text-bold p-1 bg-red-500 bg-opacity-80  border-red-900  border-4 rounded-full">
                            -
                        </rest-btn>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";
import BotonAddCantidad from "@/Jetstream/Button.vue";
import BotonRestCantidad from "@/Jetstream/Button.vue";

export default defineComponent({
    components:{
        'add-btn':BotonAddCantidad,
        'rest-btn':BotonRestCantidad
    }
});
</script>
