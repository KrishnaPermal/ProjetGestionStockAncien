import Axios from "axios";
import addArticle from "./components/addArticle.vue";
import editArticle from "./components/editArticle.vue";
import deleteArticle from "./components/deleteArticle.vue";

export default {
    components: {
        addArticle,
        editArticle,
        deleteArticle,
    },
    data: () => ({
        dialog: false,
        headers: [{
                text: "Matériels",
                align: "start",
                sortable: false,
                value: "id"
            },
            { text: "id", value: "id" },
            { text: "réf_article", value: "réf_article" },
            { text: "marque", value: "marque" },
            { text: "description", value: "description" },
            { text: "fournisseur", value: "fournisseur" },
            { text: "quantité", value: "quantité" },
            { text: "prix", value: "prix" },
            { text: "image", value: "image" },
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