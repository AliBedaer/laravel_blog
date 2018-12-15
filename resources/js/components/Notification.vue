<template>
    <div class="notification">
        <p class=".caption"> vuetify caption </p>
        <div class="alert alert-danger">
            {{ message }}
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                message:"new notification"
            }
        },
        name:"notifications"
    }
</script>
<style>
    .notification{
        background: #0f0;
    }
</style>
