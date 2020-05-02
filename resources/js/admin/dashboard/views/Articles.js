import Axios from "axios";
import addArticles from "./components/addArticles.vue";
import editArticles from "./components/editArticles.vue";
import deleteArticles from "./components/deleteArticles.vue";

export default {
    components: {
        addArticles,
        editArticles,
        deleteArticles,
    },
    data: () => ({
        dialog: false,
        headers: [{
                text: "Articles",
                align: "start",
                sortable: false,
                value: "id"
            },
            { text: "id", value: "id" },
            { text: "réf_article", value: "réf_article" },
            { text: "designation", value: "designation" },
            { text: "description", value: "description" },
            { text: "fournisseur", value: "fournisseur" },
            { text: "quantité", value: "quantité" },
            { text: "prix", value: "prix" },
            { text: "photo", value: "photo" },
            { text: "actions", value: "actions" },


        ],
        articles: [],

    }),
    created() {
        this.initialize();
    },

    methods: {
        initialize() {
            Axios.get("../api/dashboard/articles").then(({ data }) =>
                data.data.forEach(data => {
                    this.articles.push(data);
                })
            );
        },
    }
};