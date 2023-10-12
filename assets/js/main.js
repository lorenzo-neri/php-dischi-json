const { createApp } = Vue
createApp({
    data() {
        return {
            title: 'Spotify Disks',
            disks: null,
        }
    },

    methods: {
        showDisk() {
            console.log('click');
        }
    },
    mounted() {
        axios
            .get('server.php')
            .then(response => {
                console.log(response);
                this.disks = response.data
                console.log(response.data);
            })
    }
}).mount('#app')