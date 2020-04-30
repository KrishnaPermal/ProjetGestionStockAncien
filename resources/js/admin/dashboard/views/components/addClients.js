import Axios from "axios"

export default {
    data() {
        return {
            dialog: false,
            id: '',
            nom: '',
            prenom: '',
            adresse: '',
            code_postale: '',
            telephone: '',
            email: '',
        }
    },

    methods: {
        addDatas() {
            Axios.post('../api/dashboard/clients', {
                    id: this.id,
                    nom: this.nom,
                    prenom: this.prenom,
                    adresse: this.adresse,
                    code_postale: this.code_postale,
                    telephone: this.telephone,
                    email: this.email,
                })
                .then(response => {
                    if (response.status === 201) {
                        console.log("Clients bien enregistrée")
                        this.$emit('addClients', response.data.data)
                    }
                })
                .catch(response => {

                    console.log("Erreur code " + response)
                })
        }
    }
}