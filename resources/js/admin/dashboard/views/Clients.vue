<template>
<div width="89%">
  <v-data-table :headers="headers" :items="clients" sort-by="" class="elevation-1">

    <template v-slot:top>
      <v-toolbar flat color="cyan darken-3">
        <v-spacer></v-spacer>
        <addClients v-on:addClients="clients.push($event)"></addClients>
      </v-toolbar>
    </template>

    <template v-slot:item.actions="{ item }">
       <v-spacer></v-spacer>
      <editClients  v-on:editClients="clients.push($event)" v-bind:clients="clients" v-bind:item="item"></editClients>
      <deleteClients v-bind:clients="clients" v-bind:item="item"></deleteClients>
    </template>
    
  </v-data-table>
</div>
</template>
<script src="./Clients.js"/>