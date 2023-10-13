<template id="Pokemon">
    <div class="container">
        <modal-pokemon :poke_data="this.poke_data" :img_pokemon="this.img_pokemon" :loading="this.loading" />
        <div class="row d-flex justify-content-between">
            <div class="m-3 col-3"
                v-for="(pokemon, index) in pokemons.results" :key="index">

                <a class="text-decoration-none text-white text-center text-capitalize"
                    href=" " @click.prevent="modalPokemon(pokemon.url)">

                    <div class="rounded bg-success p-3">
                        {{pokemon.name}}
                    </div>

                </a>

            </div>
        </div>
    </div>
</template>
<script>

    import ModalPokemon from './ModalPokemon'

export default{
    components: {
        ModalPokemon,
    },
    data() {
		return {
            loading: false,
			pokemons: [],
            poke_data: [],
            img_pokemon: '',
		}
	},
    mounted() {
        this.getPokemons(this.url_data);
    },
    updated() {
        this.getPokemons(this.url_data);
    },
    methods: {
        getPokemons(url){

            axios
            .get('https://pokeapi.co/api/v2/pokemon?limit=102')
            .then( response => {
                this.pokemons = response.data;
            })
            .catch( error => console.log(error));

        },
        modalPokemon(url){
            this.loading = true;

            axios
            .get(url)
            .then( response => {
                this.poke_data = response.data
                this.img_pokemon = this.poke_data.sprites.front_default
                this.loading = false;
            })
            .catch( error => console.log(error));
            
            $('#modalPokemon').modal('show');
        },
    },
}
</script>