<template>
<div width="89%">
  <v-data-table :headers="headers" :items="articles" class="elevation-1">

    <template v-slot:top>
      <v-toolbar flat color="cyan darken-3">
        <v-spacer></v-spacer>
        <addArticle v-on:addArticles="articles.push($event)"></addArticle>
      </v-toolbar>
    </template>

    <template v-slot:item.actions="{ item }">
       <v-spacer></v-spacer>
      <editArticle  v-on:editArticles="articles.push($event)" v-bind:articles="articles" v-bind:item="item"></editArticle>
      <deleteArticle v-bind:articles="articles" v-bind:item="item"></deleteArticle>
    </template>
    
  </v-data-table>
</div>
</template>
<script src="./Articles.js"/>


