<template>
  <v-dialog v-model="dialog" persistent max-width="600px">
    <template v-slot:activator="{ on }">
      <v-btn color="cyan lighten-2" fab dark small v-on="on">
        <v-icon>mdi-plus-circle</v-icon>
      </v-btn>
    </template>
    <v-card>
      <v-card-title>
        <span class="headline">Ajouter un Article</span>
      </v-card-title>
      <v-card-text>


        <v-container>
          <v-row>
            <v-col cols="12" sm="6" md="4">
              <v-text-field color="cyan lighten-2" v-model="id" label="id de l'article*" required></v-text-field>
            </v-col>
            <v-col cols="12" sm="6" md="4">
              <v-text-field color="cyan lighten-2" v-model="réf_articles" label="référence de l'article*" required></v-text-field>
            </v-col>
            <v-col cols="12" sm="6" md="4">
              <v-text-field color="cyan lighten-2" v-model="marque" label="marque*" required></v-text-field>
            </v-col>
            <v-col cols="12" sm="6" md="4">
              <v-text-field color="cyan lighten-2" v-model="description" label="Description*" required></v-text-field>
            </v-col>
            <v-col cols="12" sm="6" md="4">
              <v-text-field color="cyan lighten-2" v-model="fournisseur" label="Fournisseur*" required></v-text-field>
            </v-col>
            <v-col cols="12" sm="6" md="4">
              <v-text-field color="cyan lighten-2" v-model="quantité" label="Quantité*" required></v-text-field>
            </v-col>
            <v-col cols="12" sm="6" md="4">
              <v-text-field color="cyan lighten-2" v-model="prix" label="Prix*" required></v-text-field>
            </v-col>
            <v-col cols="12" sm="6" md="4">
              <v-text-field color="cyan lighten-2" v-model="image"  label="Image*"></v-text-field>
            </v-col>
          </v-row>
        </v-container>
        <small>*Champ obligatoire</small>
      </v-card-text>

      <v-card-actions>
        <v-spacer></v-spacer>
        <v-btn color="cyan lighten-2" text @click="dialog = false">Fermer</v-btn>
        <v-btn color="cyan lighten-2" text @click="dialog = false,addDatas()">Enregistrer</v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>
</template>

<script src="./addProduct.js"/>