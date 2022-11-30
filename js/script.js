const { createApp } = Vue;

createApp({
    data() {
        return {
            title: 'To Do List',
            toDo: [],
            newTask: ""

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
                newTask: this.newTask,
            };
            axios
                .post("server.php", data, {
                    headers: { "Content-Type": "multipart/form-data" },
                })
                .then((resp) => {
                    this.toDo = resp.data;
                    this.newTask = "";
                });
        },
        toggleDone(index) {
            // this.toDo[index].done = !this.toDo[index].done;
            const data = {
                indexToggle: index,
            };
            axios
                .post("server.php", data, {
                    headers: { "Content-Type": "multipart/form-data" },
                })
                .then((resp) => {
                    this.toDo = resp.data;
                });
        },
        cancelItem(index) {
            // this.toDo.splice(index, 1)
            const data = {
                indexCancel: index,
            };
            axios
                .post("server.php", data, {
                    headers: { "Content-Type": "multipart/form-data" },
                })
                .then((resp) => {
                    this.toDo = resp.data;
                });
        },
    },
}).mount('#app');