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
            const data = {
                text: this.newTask,
                done: false
            };
            axios.post("server.php", data, {
                headers: { "Content-Type": "multipart/form-data" },
            }).then((resp) => {
                console.log(resp);
                this.toDo = resp.data;
                this.toDo.push(data);
                this.newTask = "";
            });
        },
    }

}).mount('#app');