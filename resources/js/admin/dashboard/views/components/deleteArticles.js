import Axios from "axios"

export default {
    props: ["item", "articles"],
    data() {
        return {
            dialog: false,
        }
    },
    methods: {

        deleteItem(item) {
            const index = this.articles.indexOf(item);
            if (confirm("Voulez-vous vraiment supprimer l'article?") === true) {
                Axios({
                    method: 'delete',
                    url: '../api/dashboard/articles/' + this.articles[index].id
                }).then(this.articles.splice(index, 1))
            } else {
                this.dialog = false
            }
        },
    }
}