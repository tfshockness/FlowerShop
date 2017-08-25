<template>
    <div>
        <ul>
            <li><a v-on:click="getProducts(category.id)">{{ category.name }}</a></li>
        </ul>
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