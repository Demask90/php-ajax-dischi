Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        albums: [],
        APIurl: 'http://localhost/php-ajax-dischi/api/server.php'
    },
    created() {
        axios
            .get(this.APIurl)
            .then((res) => {
                console.log(res.data)
                this.albums = res.data;
                console.log(this.albums);
            })
    }
})