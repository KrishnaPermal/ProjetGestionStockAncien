import Axios from "axios"

export default {
    data() {
        return {
            dialog: false,
            id: '',
            réf_article: '',
            designation: '',
            description: '',
            fournisseur: '',
            quantité: '',
            prix: '',
            photo:'',
        }
    },

    methods: {
        addDatas() {
            Axios.post('../api/dashboard/articles', {
                    id: this.id,
                    réf_article: this.réf_article,
                    designation: this.designation,
                    description: this.description,
                    fournisseur: this.fournisseur,
                    quantité: this.quantité,
                    prix: this.prix,
                    photo: this.photo,
                })
                .then(response => {
                    if (response.status === 201) {
                        console.log("Articles bien enregistrée")
                        this.$emit('addArticles', response.data.data)
                    }
                })
                .catch(response => {

                    console.log("Erreur code " + response)
                })
        }
    }
}