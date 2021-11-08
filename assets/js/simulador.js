var app = new Vue({
    el: '#simulador',
    data: {
        step: 5,
        planos: [],
        beneficios: [],
        plano_id: 0,
        plano_title: 'Plano Base',
        plano_price: '0,00',
        dd: null,
        mm: null,
        aaaa: null,

        beneficio_id: null,
        beneficio_title: 'Opcionais',
        beneficio_price: '0,00',

        dependentes: []
    },
    methods: {
        nex() {
            if( this.step < 6 ) {
                ++this.step
            }
            this.update()
        },
        prev() {
            if( this.step > 1 ) {
                --this.step
            }
            this.update()
        },
        update() {
            // let payload = {
            //     step: this.step,
            //     planos: this.planos
            // }
            // localStorage.setItem('simulador_tmp', JSON.stringify( payload ) )
        },
        set_plano() {
            this.plano_title = this.planos[this.plano_id].titulo
            this.plano_price = this.planos[this.plano_id].valor_do_plano
        },
        set_beneficio() {
            let beneficio = this.beneficios.find( b => b.id == this.beneficio_id )
            this.beneficio_title = beneficio.titulo
            this.beneficio_price = beneficio.valor_mensal
        }

    },
    mounted() {
        this.planos = globalThis._planos
        this.beneficios = globalThis._beneficios
    }
})
