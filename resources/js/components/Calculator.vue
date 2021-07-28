<template>
    <app-layout>
        <form class="calculator" @submit.prevent="onSubmit">
            <h1>Enter the numbers</h1>

            <input type="number" placeholder="number 1" v-model="numbA">
            <input type="number" placeholder="number 2" v-model="numbB">
            <Button>Sum</Button>

            <hr class="clear">

            <h1>Result</h1>
            <input type="number" placeholder="Result" v-model="result">
        </form>
    </app-layout>
</template>

<script>
import AppLayout from './AppLayout.vue'
import Button from './Button.vue'

export default {
    components: { AppLayout, Button },
    name: "Calculator",
    data() {
        return {
            numbA: 0,
            numbB: 0,
            result: 0
        }
    },

    methods: {
        onSubmit() {
            if(!this.numbA || !this.numbB) {
                alert("Empty value A or B");
                return;
            }

            const data = {
                numbA: this.numbA,
                numbB: this.numbB
            }
            // call api here
            window.axios.post("/api/calculator", data).then((res) => {
                const {data} = res.data;
                this.result = data;
            })
        }
    }
}
</script>

<style lang="scss">
.calculator {
    max-width: 740px;
    margin: auto;
    box-shadow: 2px 6px 10px #00000029;
    border: 0.5px solid #A4A4A4;
    border-radius: 4px;
    padding: 45px 40px;

    display: flex;
    flex-direction: column;

    align-items: center;

    h1,h2 {
        text-align: center;
        font: normal normal normal 16px/16px Varela Round;
        letter-spacing: 0px;
        color: #A4A4A4;
        opacity: 1;
    }

    input {
        min-width: 227px;
        padding: 8px;
        margin-bottom: 10px;
    }

    .clear {
        background-color: #C10708;
        width: 100%;
        height: 1px;
        margin: 60px 0;
        border: 0;
    }

    
}
</style>