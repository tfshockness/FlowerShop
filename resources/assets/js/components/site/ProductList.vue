<template>
    <div class="col-md-4 text-center">

        <a :href="link">
            <img src="https://demo.woothemes.com/storefront/wp-content/plugins/woocommerce/assets/images/placeholder.png"
                 alt="product image" height="300" width="230">
        </a>
        <div class="text-center">
            <p class="display_product_name">{{product.name}}</p>
            <p class="display_product_price">CAD {{product.price}}</p>
            <button type="button" class="btn btn-sm add_to_cart_btn" href="#" v-on:click="addToCart">Add to cart</button>
        </div>

    </div>
</template>

<script>
    export default {
        props: ['product'],
        computed: {
            link: function () {
                return '/shop/' + this.product.slug
            }
        },
        methods:{
            addToCart(){
                axios.post('/api/addtocart',{
                    id: this.product.id,
                    quantity: 1
                })
                    .then(function(response){
                        console.log(response);
                    })
                    .catch(function(error){
                        console.log(error);
                    })
            }
    }

    }
</script>

<style>
</style>