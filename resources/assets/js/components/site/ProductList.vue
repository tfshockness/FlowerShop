<template>
    <div>
        <div class="row">
            <div class="col-md-3 text-center">
                <a :href="link">
                    <img src="https://demo.woothemes.com/storefront/wp-content/plugins/woocommerce/assets/images/placeholder.png" alt="product image" height="300" width="230">
                </a>
                <div class="text-center">
                    <p>CAD {{product.price}}</p>
                    <p>{{product.name}} <button href="#">Add to cart</button></p>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:['product'],
        computed:{
            link: function(){
                return '/shop/' + this.product.slug
            }
        }

    }
</script>

<style>

</style>