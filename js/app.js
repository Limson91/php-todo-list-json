const { createApp } = Vue;

createApp({

    data() {
        return {
            todos: [],
        }
    },

    methods: {
        fetchTodoArray() {
            axios.get('server.php').then(res => {
                this.todos = res.data.results;
            })
        }
    },

    created() {
        this.fetchTodoArray()
    }
}).mount('#app');