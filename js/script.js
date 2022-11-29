const { createApp } = Vue;

createApp({
    data() {
        return {
            title: 'To Do List',
            toDo: [],
            newTask: '',
        }
    },
    created() {
        axios.get('server.php').then((resp) =>
            this.toDo = resp.data
        );
    },
    methods: {
        createNewTask() {
            console.log(this.newTask);
            this.newTask = "";
        }
    }
}).mount('#app');