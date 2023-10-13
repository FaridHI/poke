<template>
    <div class="container">
        <div class="modal text-center" id="modalPokemon">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div v-if="loading">
                        <loading />
                    </div>
                    <div v-else class="card text-capitalize text-center">
                        <div class="card-header fs-4 row">
                            <div class="col-8 border-end fw-bolder">
                                {{ poke_data.name }}
                            </div>
                            <div class="col-2 text-primary">
                                EXP
                            </div>
                            <div class="col-2 text-primary">
                                {{ poke_data.base_experience }}
                            </div>
                        </div>
                        <div class="card-body row py-0">
                            <img :src="img_pokemon" class="col-8" />
                            <ul class="list-group list-group-flush col-2 border-start p-0">
                                <li v-for="(stat, index) in stats_name" :key="index"
                                    class="list-group-item py-3">
                                        {{ stat }}
                                </li>
                            </ul>
                            <ul class="list-group list-group-flush col-2 border-start p-0">
                                <li v-for="(stats, index) in poke_data.stats" :key="index"
                                    class="list-group-item py-3">
                                        {{ stats.base_stat }}
                                </li>
                            </ul>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item fw-bolder">MOVES</li>
                            <li v-for="(abilities, index) in poke_data.abilities" :key="index"
                                class="list-group-item">{{ abilities.ability.name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import Loading from '../Loading'
export default{
    props: ['poke_data', 'img_pokemon', 'loading'],
    components:{
        Loading
    },
    data() {
        return{
            // abilities: [],
            // photo: '',
            stats_name: {
                hp: 'HP',
                attack: 'ATT',
                defense: 'DEF',
                special_attack: 'S-ATT',
                special_defense: 'S-DEF',
                speed: 'SPD',
            },
        }
    },
    // created() {
    //     this.poke_img = this.poke_data.sprites.front_default
    // },
    methods: {
    }
}
</script>