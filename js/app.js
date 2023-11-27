const { createApp } = Vue;

createApp({

    data() {
        return {
            todos: [],
        }
    },

    methods: {
        fetchTodoArray() {
            //chiamata axios a server.php
        }
    },

    created() {
        this.fetchTodoArray()
    }
}).mount('#app');