import Axios from "axios"

export default {
    data() {
        return {
            dialog: false,
            id: '',
            réf_article: '',
            marque: '',
            description: '',
            fournisseur: '',
            quantité: '',
            prix: '',
            image:'',
        }
    },

    methods: {
        addDatas() {
            Axios.post('../api/dashboard/articles', {
                    id: this.id,
                    réf_article: this.réf_article,
                    marque: this.marque,
                    description: this.description,
                    fournisseur: this.fournisseur,
                    quantité: this.quantité,
                    prix: this.prix,
                    image: this.image,
                })
                .then(response => {
                    if (response.status === 201) {
                        console.log("Articles bien enregistrée")
                        this.$emit('addProduct', response.data.data)
                    }
                })
                .catch(response => {

                    console.log("Erreur code " + response)
                })
        }
    }
}