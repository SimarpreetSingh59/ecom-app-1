<template>
    <div>
        <button class="btn btn-primary"
        v-on:click.prevent="addProductToCart()">
        Add to cart</button>
    </div>
</template>

<script>
import axios from 'axios';



export default {

    data() {
        return {
        
        }
    },

    props:['productId', 'userId'],

    methods: {
        async addProductToCart(){

            // Checking if user is loged in
            if(this.userId == 0){
                this.$toastr.e('You need to login, To add this product in cart');
                return;
            }
            
            //If user is loged in add item into cart

        var response = await axios.post('/cart', {
            'product_id': this.productId
        })
          

        }
    },

    mounted() {
        console.log("Component mounted.");
    },
};
</script> 
