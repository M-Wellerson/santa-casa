var app = new Vue({
    el: '#simulador',
    data: {
        step: 1,
        planos: [],
        plano_id: 0,
        plano_title: 'Plano Base',
        plano_price: '0,00' 
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
            let payload = {
                step: this.step,
                planos: this.planos
            }
            localStorage.setItem('simulador_tmp', JSON.stringify( payload ) )
        },
        set_plano() {
            this.plano_title = this.planos[this.plano_id].titulo
            this.plano_price = this.planos[this.plano_id].valor_do_plano
        }

    },
    mounted() {
        this.planos = globalThis._planos
    }
})
