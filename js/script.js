const { createApp } = Vue;

createApp({
    data() {
        return {
            title: 'To Do List',
            arrayDebug: [],
        }
    },
    created() {
        axios.get('server.php').then((resp) =>
            this.arrayDebug = resp.data
        );
    }
}).mount('#app');