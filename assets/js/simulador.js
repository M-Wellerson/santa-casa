var app = new Vue({
    el: '#simulador',
    data: {
        step: 1
    },
    methods: {
        nex() {
            if( this.step < 6 ) {
                ++this.step
            }
        },
        prev() {
            if( this.step > 1 ) {
                --this.step
            }
        }
    }
})
