<template>
    <v-card class="mx-auto">
      <v-card-title elevation class="text-xs-center justify-center py-6" color="cyan lighten-1" dark>
      <h1 class=" font-weight-medium display-2">DASHBOARD</h1>
    </v-card-title>

<v-divider></v-divider>

      <v-tabs v-model="tab" background-color="transparent" color="cyan darken-3" grow >

        <v-tab>
          <v-icon left>mdi-monitor-multiple</v-icon>
          <router-link :to="{name:'articles'}">Articles</router-link>
        </v-tab>

        <v-tab>
          <v-icon left>mdi-view-list</v-icon>
          <router-link :to="{name:'catégories'}">Catégories</router-link>
        </v-tab>

        <v-tab>
          <v-icon left>mdi-account</v-icon>
          <router-link :to="{name:'clients'}">Clients</router-link>
        </v-tab>

        <v-tab>
          <v-icon left>mdi-account-box</v-icon>
          <router-link :to="{name:'fournisseurs'}">Fournisseurs</router-link>
        </v-tab>

        <v-tab>
          <v-icon left>mdi-shopping</v-icon>
          <router-link :to="{name:'commandes_fournisseur'}">Commandes_Fournisseur</router-link>
        </v-tab>


        <v-tab-item>
          <v-card elevation >
            <v-card-text>
              <router-view></router-view>
            </v-card-text>
          </v-card>
        </v-tab-item> 
           
      </v-tabs>
    </v-card>

</template>



<script>
export default {
  data: () => ({
    items: [],
    model: 1
  })
};
</script>