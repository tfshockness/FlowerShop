<template>
    <div class="container">
        <h1>Your Cart</h1>

        <!-------------- Your Cart Table Starts Here ---------------->

        <table class="table yourCart-table">
            <thead>
            <tr>
                <th>ITEM</th>
                <th></th>
                <th>QTY</th>
                <th>SUBTOTAL</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <img src="https://demo.woothemes.com/storefront/wp-content/plugins/woocommerce/assets/images/placeholder.png"
                         alt="product image" width="80">
                </td>
                <td>Sunflower Arrangement</td>
                <td>
                    <input type="number" name="quantity"
                           min="1" max="100" step="1" value="1">
                </td>
                <td>$39.99</td>
                <td>
                    <button type="button" class="btn btn-outline-danger btn-sm btn-table-cancel">x</button>
                </td>
            </tr>
            <!-------------- First Row ---------------->
            <tr>
                <td>
                    <img src="https://demo.woothemes.com/storefront/wp-content/plugins/woocommerce/assets/images/placeholder.png"
                         alt="product image" width="80">
                </td>
                <td>Aloe Plant</td>
                <td>
                    <input type="number" name="quantity"
                           min="1" max="100" step="1" value="1">
                </td>
                <td>$35.99</td>
                <td>
                    <button type="button" class="btn btn-outline-danger btn-sm btn-table-cancel">x</button>
                </td>
            </tr>
            <!-------------- Second Row ---------------->
            </tbody>
        </table>

        <!-------------- Add-On Items Start Here ---------------->

        <h2>Add-ons</h2>
        <app-addons></app-addons>
        <!-------------- Message & Total Here -------------------->

        <div class="row">
            <div class="col">
                <h2>Message</h2>
                <div class="form-group">
                    <label for="messageTextarea">Enter the message (max 150 characters)</label>
                    <textarea class="form-control" id="messageTextarea" rows="3" maxlength="150"></textarea>
                </div>
            </div>
            <div class="col">
                <h2>Cart Totals</h2>

                <table class="table cartTotal-table">
                    <tbody>
                    <tr>
                        <th scope="row">Total</th>
                        <td>CAD 75.98</td>
                    </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-success btn-lg btn-block">Proceed to checkout</button>

            </div>
        </div>
    </div>
</template>

<script>
    import Addons from './Addons.vue';

    export default{
        components:{
            'app-addons': Addons
        }
    }
</script>

<style>

</style>