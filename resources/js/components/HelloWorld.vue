<template>
<div>
    <h1>{{ message}}, World!</h1>
    <p @click="incrementCount"> count is: {{count}} </p>
    <p @click="decrementCount"> minus the count innit: {{count}} </p>
    <h1 :class="getClass()">{{message}}</h1>

    <input class="form-control" placeholder="enter ur name" v-model="name">
    <button @click="addName" class="btn btn-outline-secondary">add to list :)</button>

    <h3 v-for="(name, index) in names" :key="index">
        oh hi there {{ name }}
    </h3>

    <button @click="resetCount"> take me to 0 </button>
    <div v-if="count > 5" class="alert alert-success" role="alert">WOOOOOO</div>
    <div v-else class="alert alert-warning" role="alert">BOOOOO</div>
</div>
</template>

<script>
export default {
    name: 'HelloWorld',
    data() {
        return {
            message: 'Hello',
            count: 0,
            name: '',
            names: [
                'alice',
                'bob',
                'carole',
                'mark'
            ]
        };
    },
    mounted() {
        alert('hiya');
    },

    methods: {
        incrementCount() {
            this.count++;
        },
        decrementCount() {
            this.count--;
        },
        resetCount() {
            this.count = 0;
        },
        addName() {
            this.names.push(this.name);
            this.name = '';
        },
        getClass() {
            return 'text-success'
        }
    }
}
</script>

<style scoped>
    p {
        cursor: pointer;
        background-color: darkgreen;
        color: antiquewhite;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
</style>