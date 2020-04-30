import Axios from "axios";
import addClients from "./components/addClients.vue";
import editClients from "./components/editClients.vue";
import deleteClients from "./components/deleteClients.vue";

export default {
    components: {
        addClients,
        editClients,
        deleteClients,
    },
    data: () => ({
        dialog: false,
        headers: [{
                text: "Clients",
                align: "start",
                sortable: false,
                value: "id"
            },
            { text: "nom", value: "nom" },
            { text: "prenom", value: "prenom" },
            { text: "adresse", value: "adresse" },
            { text: "code_postale", value: "code_postale" },
            { text: "telephone", value: "telephone" },
            { text: "email", value: "email" },
            { text: "actions", value: "actions" },


        ],
        clients: [],

    }),
    created() {
        this.initialize();
    },

    methods: {
        initialize() {
            Axios.get("../api/dashboard/clients").then(({ data }) =>
                data.data.forEach(data => {
                    this.clients.push(data);
                })
            );
        },
    }
};