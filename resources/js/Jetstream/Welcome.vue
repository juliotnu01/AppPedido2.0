<template>
    <div>
    <!-- banner -->
        <div class="bg-yellow-600 rounded-lg mx-5">
            <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
                <div class="flex  items-center justify-between flex-wrap">
                    <div class="w-0 flex-1 flex items-center">
                        <span class="flex p-2 rounded-lg bg-yellow-800 ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <search-input-producto placeholder="Buscar Producto" class="flex w-screen h-10 text-black mx-1" v-model="filter" />
                        <span class="flex p-2 rounded-lg bg-yellow-800 hover:cursor-pointer active:bg-yellow-700 mr-2" @click="show_modal = true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                        </span>
                        <span class="flex p-2 rounded-lg bg-yellow-800 hover:cursor-pointer active:bg-yellow-700 mr-1" @click="show_modal2 = true">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" h-6 w-6 text-white" stroke="currentColor" fill="currentColor" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                <g>
                                    <g>
                                        <rect x="122.435" y="445.217" width="33.391" height="33.391"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="233.739" y="478.609" width="44.522" height="33.391"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="155.826" y="478.609" width="44.522" height="33.391"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="311.652" y="478.609" width="44.522" height="33.391"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="356.174" y="445.217" width="33.391" height="33.391"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="200.348" y="445.217" width="33.391" height="33.391"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="278.261" y="445.217" width="33.391" height="33.391"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <polygon points="55.652,0 55.652,512 122.435,512 122.435,478.609 89.044,478.609 89.044,33.391 422.957,33.391 422.957,478.609 
                                            389.565,478.609 389.565,512 456.348,512 456.348,0 		"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="122.435" y="77.913" width="267.13" height="33.391"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="122.435" y="356.174" width="155.826" height="33.391"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="122.435" y="256" width="155.826" height="33.391"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="122.435" y="166.957" width="155.826" height="33.391"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="322.783" y="166.957" width="66.783" height="33.391"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="322.783" y="256" width="66.783" height="33.391"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="322.783" y="356.174" width="66.783" height="33.391"/>
                                    </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
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
                        <add-btn class="uppercase text-3xl text-bold p-1 bg-green-500 bg-opacity-80  border-green-900  border-4 rounded-full" @click="incrementarCantidad(producto)" >
                            +
                        </add-btn>
                    </div>
                    <div class="sm:mx-5 text-center align-middle my-auto text-white text-2xl text-bold">
                        {{producto.cantidad}}
                    </div>
                    <div class="sm:mx-5">
                        <rest-btn class="uppercase text-3xl text-bold p-1 bg-red-500 bg-opacity-80  border-red-900  border-4 rounded-full" @click="decrementarCantidad(producto)">
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
        <modal-factura :show="show_modal2">
            <div class="flex justify-center items-center">
                <div class="py-5 bg-white rounded-2xl shadow-xl z-20">
                    <div class="flex justify-between px-5">
                        <p class="font-semibold text-gray-800 uppercase">Factura</p>
                        <button class="bg-yellow-400 hover:bg-yellow-200 rounded-full bg-opacity-80 border-2 border-black p-1" @click="show_modal2 = !show_modal2">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="py-2 px-2  rounded-2xl z-20">
                        <div class="space-y-4">


                            <div class="flex flex-wrap mt-2 justify-center border-b-2 border-t-2 py-1" v-for="(producto_factura, pf) in productos_factura" :key="pf" >
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                    <div class="col-span-2 sm:col-span-1">
                                        <img alt="" :src="producto_factura.img_producto" class="h-24 w-24 rounded  mx-auto"/>
                                    </div>
                                    <div class="col-span-2 ">
                                        <h3 class="font-semibold text-black">{{producto_factura.nombre_producto}}</h3>
                                        <p >
                                            {{producto_factura.descripcion_producto}}
                                        </p>
                                    </div>
                                    <div class="col-span-2 sm:col-span-3 xl:col-span-1 italic float-right text-right">
                                        <span>${{producto_factura.precio_producto}}</span>
                                    </div>
                                    <div class="sm:col-span-3 grid grid-cols-3 sm:grid sm:grid-cols-3 bg-yellow-300 bg-opacity-95 rounded-lg shadow-xl border-2 border-black" style="text-align: center;"  >
                                        <div class="">
                                            <add-btn class="uppercase text-lx text-bold p-1 bg-green-500 bg-opacity-80  border-green-900  border-4 rounded-full"   @click="incrementarCantidad(producto_factura)"  >
                                                +
                                            </add-btn>
                                        </div>
                                        <div class="sm:mx-5 text-center align-middle my-auto text-white text-2xl text-bold">
                                            {{producto_factura.cantidad}}
                                        </div>
                                        <div class="">
                                            <rest-btn class="uppercase text-lx text-bold p-1 bg-red-500 bg-opacity-80  border-red-900  border-4 rounded-full" @click="decrementarCantidad(producto_factura)" >
                                                -
                                            </rest-btn>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-6">
                            <button class="py-3 w-64 text-xl text-white bg-yellow-400 rounded-2xl" @click="show_modal2 = false">Totalizar {{total_factura}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </modal-factura>
    </div>
</template>

<script>
import { defineComponent, ref, onMounted, } from "vue";
import JetApplicationLogo from "@/Jetstream/ApplicationLogo.vue";
import BotonAddCantidad from "@/Jetstream/Button.vue";
import BotonRestCantidad from "@/Jetstream/Button.vue";
import inputSearchProducto from "@/Jetstream/Input.vue";
import modalAddProducto from "@/Jetstream/Modal.vue";
import modalFactura from "@/Jetstream/Modal.vue";

export default defineComponent({
    components:{
        'add-btn':BotonAddCantidad,
        'rest-btn':BotonRestCantidad,
        'search-input-producto': inputSearchProducto,
        'modal-add-producto':modalAddProducto,
        'modal-factura': modalFactura
    },
    setup() {
        var show_modal = ref(false)
        var show_modal2 = ref(false)
        var model = ref({
                nombre_producto: '',
                precio_producto: '',
                descripcion_producto: '',
                stock_producto: '',
                img_producto: [],
            })
        return {
            show_modal,
            show_modal2,
            model,
        }
    },
    data(){
        return{
            productos:[],
             filter: '',
            productos_factura:[],
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
        total_factura(){
            var result = 0;

            for (let index = 0; index < this.productos_factura.length; index++) {
                const element = this.productos_factura[index];

                result += (element.cantidad * element.precio_producto)
            }
            return result
        }
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
                for (const a of data) {
                    a.cantidad = 0
                }
                this.productos = data
            } catch (error) {
                console.log(error)
            }
        },
        handleFileProducto(event){
            this.model.img_producto = event.target.files[0]
        },
        incrementarCantidad(item){
            var index = this.productos_factura.findIndex(i => i.id === item.id)
            if (index < 0) {
                item.cantidad++
                this.productos_factura.push(item)
            }else if(index >= 0){
                this.productos_factura[index].cantidad++
                
            }
        },
        decrementarCantidad(item){
            var index = this.productos_factura.findIndex(i => i.id === item.id)
            if (index >= 0) {
                item.cantidad--
                if (item.cantidad <= 0) {
                    this.productos_factura.splice(index,1)
                }
            }
        }
    },
});
</script>
