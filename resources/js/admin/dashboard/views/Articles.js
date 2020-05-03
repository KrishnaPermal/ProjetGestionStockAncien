import Axios from "axios";
import addProduct from "./components/addProduct.vue";
import editProduct from "./components/editProduct.vue";
import deleteProduct from "./components/deleteProduct.vue";

export default {
    components: {
        addProduct,
        editProduct,
        deleteProduct,
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