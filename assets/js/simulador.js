var app = new Vue({
    el: '#simulador',
    data: {
        step: 1,
        planos: []
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
        }

    },
    mounted() {
        
    }
})
