const app = new Vue({
    el: "#app",
    data: {
        database: [],
        genre: "",
    },
    created() {
        axios.get("http://localhost:8888/php-ajax-dischi/Milestone2/server.php")
        .then((resp) => {
            this.database = resp.data;
        });
        axios.get("http://localhost:8888/php-ajax-dischi/Milestone2/server.php", {
            params: {
                genre: "",
            }
        })
    },
})