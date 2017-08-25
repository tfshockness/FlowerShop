<template>
    <div>
        <h2>All my categories and products</h2>

            <app-category-menu v-for="category in categories" :key="category.id" :category="category" v-on:getProducts="getProducts"></app-category-menu>
            <app-product-list v-for="product in products" :key="product.id" :product="product"></app-product-list>

    </div>

</template>

<script>

    import CategoryMenu from './CategoryMenu.vue';
    import ProductList from './ProductList.vue';

    export default {
        components:{
            'app-category-menu': CategoryMenu,
            'app-product-list': ProductList
        },
        data: function(){
            return {
                categories: '',
                products: ''
            }
        },
        methods:{
            getProducts: function($id){
                let vm = this;
                axios.get('/api/categorybyid/' + $id)
                    .then(function(response){
                        console.log(response.data.products);
                       vm.products = response.data.products;
                    })
                    .catch(function(error){
                    console.log(error);
                })

            }
        },
        created() {
            let vm = this;
            axios.get('/api/categories')
                .then(function(response){
                    console.log(response.data);
                   vm.categories = response.data;
                });
            axios.get('/api/productsbycategory')
                .then(function(response){
                    vm.products = response.data.products;
                    console.log(response.data.products);

                })
                .catch(function(error){
                    console.log(error);
                });
        }
    }
</script>

<style>

</style>