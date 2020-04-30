<template>
  <v-dialog v-model="dialog" persistent max-width="600px">
    <template v-slot:activator="{ on }">
      <v-btn color="cyan lighten-2" fab dark small v-on="on">
        <v-icon>mdi-plus-circle</v-icon>
      </v-btn>
    </template>
    <v-card>
      <v-card-title>
        <span class="headline">Ajouter un Client</span>
      </v-card-title>
      <v-card-text>


        <v-container>
          <v-row>
            <v-col cols="12" sm="6" md="4">
              <v-text-field color="cyan lighten-2" v-model="id" label="id*" required></v-text-field>
            </v-col>
            <v-col cols="12" sm="6" md="4">
              <v-text-field color="cyan lighten-2" v-model="nom" label="Nom*" required></v-text-field>
            </v-col>
            <v-col cols="12" sm="6" md="4">
              <v-text-field color="cyan lighten-2" v-model="prenom" label="Prenom*" required></v-text-field>
            </v-col>
            <v-col cols="12" sm="6" md="4">
              <v-text-field color="cyan lighten-2" v-model="adresse" label="Adresse*" required></v-text-field>
            </v-col>
            <v-col cols="12" sm="6" md="4">
              <v-text-field color="cyan lighten-2" v-model="code_postale" label="Code_Postale*" required></v-text-field>
            </v-col>
            <v-col cols="12" sm="6" md="4">
              <v-text-field color="cyan lighten-2" v-model="telephone" label="Telepone*" required></v-text-field>
            </v-col>
            <v-col cols="12" sm="6" md="4">
              <v-text-field color="cyan lighten-2" v-model="email" label="Email*" required></v-text-field>
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

<script src="./addClients.js"/>