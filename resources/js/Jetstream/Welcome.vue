<template>
    <div>
    <!-- banner -->
        <div class="bg-yellow-600 rounded-lg mx-5">
            <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
                <div class="flex space-x-4 items-center justify-between flex-wrap">
                    <div class="w-0 flex-1 flex items-center">
                        <span class="flex p-2 rounded-lg bg-yellow-800 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <search-input-producto placeholder="Buscar Producto" class="flex w-screen h-10 text-black mx-2" v-model="filter" />
                        <span class="flex p-2 rounded-lg bg-yellow-800 hover:cursor-pointer active:bg-yellow-700" @click="show_modal = true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    <!-- cards -->
        <div class="md:flex my-5 bg-white shadow-2xl mx-6 sm:mx-0 rounded-lg border-2 border-yellow-600" v-for="(producto, p) in filteredStudents" :key="p">
            <div class="md:flex-shrink-0">
                <img :src="producto.img_producto" class="h-48 w-full object-fill md:h-full md:w-48">
            </div>
            <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold sm:flex grid grid-rows-1">
                    <div class="sm:w-9/12 w-11/12  sm:item-flex mb-2 sm:mb-0">
                        <span class="uppercase break-normal   tex-left"  >
                            {{producto.nombre_producto}}
                        </span>
                    </div>
                    <div class="sm:w-3/12 w-11/12  sm:item-flex ">
                        <span class=" text-right capitalize truncate text-lg text-yellow-700 text-bold " >
                            ${{producto.precio_producto}}
                        </span>
                    </div>
                </div>
                <a href="#" class="block my-2  leading-tight font-medium text-gray-400 text-semibold text-lx">
                    {{producto.descripcion_producto}}
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
    <!-- modal -->
        <modal-add-producto :show="show_modal">
            <div class="flex justify-center items-center">
                <div class="py-5 bg-white rounded-2xl shadow-xl z-20">
                    <div class="flex justify-between px-5">
                        <p class="font-semibold text-gray-800 uppercase">Agregar Producto</p>
                        <button class="bg-yellow-400 hover:bg-yellow-200 rounded-full bg-opacity-80 border-2 border-black p-1" @click="show_modal = !show_modal">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="py-12 px-12  rounded-2xl z-20">
                        <div class="space-y-4">
                            <input      v-model="model.nombre_producto" type="text" placeholder="Nombre del producto" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                            <input      v-model="model.precio_producto"  type="number" placeholder="Precio" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                            <textarea   v-model="model.descripcion_producto" class="autoexpand tracking-wide py-2 px-4 mb-3 leading-relaxed appearance-none block w-full bg-gray-200 border border-gray-200 rounded focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Descripción..."/>
                            <input      v-model="model.stock_producto" type="text" placeholder="Stock" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                            <input      @change="handleFileProducto($event)"  type="file" placeholder="Stock" class="block text-sm py-3 px-4 rounded-lg w-full border outline-none" />
                        </div>
                        <div class="text-center mt-6">
                            <button class="py-3 w-64 text-xl text-white bg-yellow-400 rounded-2xl" @click="addProducto">Crear Producto</button>
                        </div>
                    </div>
                </div>
            </div>
        </modal-add-producto>
    </div>
</template>

<script>
import { defineComponent, ref, onMounted, } from "vue";
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";
import BotonAddCantidad from "@/Jetstream/Button.vue";
import BotonRestCantidad from "@/Jetstream/Button.vue";
import inputSearchProducto from "@/Jetstream/Input.vue";
import modalAddProducto from "@/Jetstream/Modal.vue";

export default defineComponent({
    components:{
        'add-btn':BotonAddCantidad,
        'rest-btn':BotonRestCantidad,
        'search-input-producto': inputSearchProducto,
        'modal-add-producto':modalAddProducto
    },
    setup() {
        var show_modal = ref(false)
        var model = ref({
                nombre_producto: '',
                precio_producto: '',
                descripcion_producto: '',
                stock_producto: '',
                img_producto: [],
            })
        return {
            show_modal,
            model,
        }
    },
    data(){
        return{
            productos:[],
             filter: '',
        }
    },
    computed:{
        filteredStudents() {
            return this.productos.filter(product => {
                const filter = this.filter.toUpperCase();
                const hasNombreMatch = String(product.nombre_producto).includes(filter);
                const hasdescripcionMatch = product.descripcion_producto.toUpperCase().includes(filter);
                const hasPrecioMatch = product.precio_producto.toUpperCase().includes(filter);

                return hasNombreMatch || hasdescripcionMatch || hasPrecioMatch;
            })
        },
    },
    mounted() {
        this.getProducto()
    },
    methods: {
        async addProducto(){
            try {
                var FData = new FormData();
                FData.append('img_producto', this.model.img_producto)
                FData.append('data', JSON.stringify(this.model))
                let {data} = await axios.post('/api/add-producto', FData, {headers: {'content-type': 'multipart/form-data'}})
                this.getProducto();
                this.show_modal = false;
                this.model = {
                    nombre_producto: '',
                    precio_producto: '',
                    descripcion_producto: '',
                    stock_producto: '',
                    img_producto: [],
                };
            } catch (error) {
                console.log(error)
            }
        },
        async getProducto(){
            try {
                let {data} = await axios('/api/get-productos')
                this.productos = data
            } catch (error) {
                console.log(error)
            }
        },
        handleFileProducto(event){
            this.model.img_producto = event.target.files[0]
        }
    },
});
</script>
