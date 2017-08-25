<template>
    <div>
        <h2>All my categories and products</h2>
        <div>
            <ul v-for="category in categories" :key="category.id">
                <li> <a v-on:click="getProducts(category.id)"> {{ category.name }}</a></li>
            </ul>
        </div>
        <div v-for="product in products">
            <div class="row">
                <div class="col-md-3 text-center">
                    <img src="" alt="product image" height="300" width="230">
                    <div class="text-center">
                        <p>CAD {{product.price}}</p>
                        <p>{{product.name}} <button href="#">Add to cart</button></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>


    export default {
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
                        console.log(response.data);
                       vm.products = response.data;
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