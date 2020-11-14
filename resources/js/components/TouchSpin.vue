<template>
    <div class="caja d-flex">
        <img id="mas" :src="'img/mas.svg'" alt="" height="20" class="pr-3" @click="sumar">
        <span id="total">200</span>
        <img id="menos" :src="'img/menos.svg'" alt="" height="20" class="pl-3">
    </div>
</template>

<script>
export default {
    props: ['monto'],
    data: function(){
        return{
            monto: this.monto
        }
    },
    methods:{
        sumar(){
            alert(this.monto);
        }
    }
}
</script>

<style>
    .caja{
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        padding: 5px;
        width: 110px;
    }

</style>
