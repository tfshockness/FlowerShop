<template>
    <div>
        <li class="category-list col"><a v-on:click="getProducts(category.id)">{{ category.name }}</a></li>
    </div>
</template>

<script>
    export default {
        props:['category'],
        methods:{
            getProducts: function(id){
                this.$emit('getProducts', id);
            }
        }
    }
</script>

<style>
</style>