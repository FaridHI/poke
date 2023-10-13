require('./bootstrap');

import Vue from 'vue'

import ListPokemons from './components/Pokemons/PokeList'
import LoadingModal from './components/LoadingModal'
new Vue({
    el: '#app',
    components: {
        ListPokemons,
        LoadingModal
    }
});
