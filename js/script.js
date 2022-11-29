const { createApp } = Vue;

createApp({
    data() {
        return {
            title: 'To Do List',
            toDo: [],
        }
    },
    created() {
        axios.get('server.php').then((resp) =>
            this.toDo = resp.data
        );
    }
}).mount('#app');