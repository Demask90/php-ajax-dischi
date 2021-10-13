
const app = new Vue({
    el: 'root',
    data: {
        musicBox: [],
        APIurl: 'http://localhost/php-ajax-dischi/api/serve.php'
    },
    created() {
        axios
            .get(this.APIurl)
            .then((res) => {
               console.log(res);
            })
    }
})