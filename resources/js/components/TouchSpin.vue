<template>
    <div>
        <div class="caja d-flex">
            <img id="mas" :src="'/img/mas.svg'" alt="" height="20" class="pr-3" @click="sumar">
            <span id="total">{{ total }}</span>
            <img id="menos" :src="'/img/menos.svg'" alt="" height="20" class="pl-3" @click="restar">
        </div>
        <input type="hidden" id="monto" name="monto" :value="this.total">
        <span class="text-danger"><strong>{{ error }}</strong></span>
    </div>


</template>

<script>
export default {
    data: function(){
        return{
            total: 200,
            error: ''
        }
    },
    methods:{
        sumar(){
            //alert(this.monto);
            this.total = this.total + 50;
            this.error = '';
        },
        restar(){
            if(this.total <= 200){
                this.error = "Error: el monto minimo debe ser 200mil"
            }else{
                this.total = this.total - 50;
            }
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
