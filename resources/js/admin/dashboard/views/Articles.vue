<template>
<div width="89%">
  <v-data-table :headers="headers" :items="articles" sort-by="" class="elevation-1">

    <template v-slot:top>
      <v-toolbar flat color="cyan darken-3">
        <v-spacer></v-spacer>
        <addArticles v-on:addArticles="articles.push($event)"></addArticles>
      </v-toolbar>
    </template>

    <template v-slot:item.actions="{ item }">
       <v-spacer></v-spacer>
      <editArticles  v-on:editArticles="articles.push($event)" v-bind:articles="articles" v-bind:item="item"></editArticles>
      <deleteArticles v-bind:articles="articles" v-bind:item="item"></deleteArticles>
    </template>
    
  </v-data-table>
</div>
</template>
<script src="./Articles.js"/>