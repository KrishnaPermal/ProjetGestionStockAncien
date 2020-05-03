<template>
<div width="89%">
  <v-data-table :headers="headers" :items="articles" sort-by="calories" class="elevation-1">

    <template v-slot:top>
      <v-toolbar flat color="cyan darken-3">
        <v-spacer></v-spacer>
        <addProduct v-on:addArticles="articles.push($event)"></addProduct>
      </v-toolbar>
    </template>

    <template v-slot:item.actions="{ item }">
       <v-spacer></v-spacer>
      <editProduct  v-on:editArticles="articles.push($event)" v-bind:articles="articles" v-bind:item="item"></editProduct>
      <deleteProduct v-bind:articles="articles" v-bind:item="item"></deleteProduct>
    </template>
    
  </v-data-table>
</div>
</template>
<script src="./Articles.js"/>


