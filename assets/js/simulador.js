var app = new Vue({
    el: '#simulador',
    data: {
        step: 1,
        planos: [],
        beneficios: [],
        plano_id: 0,
        plano_title: 'Plano Base',
        plano_price: '0,00',
        
        idade: '63 anos ou menos',

        beneficio_id: null,
        beneficio_title: 'Opcionais',
        beneficio_price: '0,00',

        dependentes: [
            {
                id: 0,
                nome: null,
                beneficio: null
            }
        ],

        nome_titular: null,
        email: null,
        telefone: null,
        celular: null,

        total: '0,00',

        idades: [
            "63 anos ou menos",
            "69 a 74 anos",
            "80 anos ou mais",
        ]

    },
    methods: {
        nex() {
            if (this.step < 6) {
                ++this.step
            }
            this.update()
        },
        prev() {
            if (this.step > 1) {
                --this.step
            }
            this.update()
        },
        update() {
            let payload = {
                step: this.step,
                plano_id: this.plano_id,
                plano_title: this.plano_title,
                plano_price: this.plano_price,
                dd: this.dd,
                mm: this.mm,
                aaaa: this.aaaa,
                beneficio_id: this.beneficio_id,
                beneficio_title: this.beneficio_title,
                beneficio_price: this.beneficio_price,
                dependentes: this.dependentes,
                nome_titular: this.nome_titular,
                email: this.email,
                telefone: this.telefone,
                celular: this.celular,
            }
            localStorage.setItem('simulador_tmp', JSON.stringify(payload))
        },
        set_plano() {
            this.plano_title = this.planos[this.plano_id].titulo
            this.plano_price = this.planos[this.plano_id].valor_do_plano
        },
        set_beneficio() {
            let beneficio = this.beneficios.find(b => b.id == this.beneficio_id)
            this.beneficio_title = beneficio.titulo
            this.beneficio_price = beneficio.valor_mensal
        },
        add_dependentes() {
            let id = this.dependentes.length + 1
            this.dependentes.push({
                id: this.min_max(1, 99),
                nome: null,
                beneficio: null
            })
            console.log(this.dependentes)

        },
        remove_dependentes(id) {
            console.log(id)
            this.dependentes = this.dependentes.filter(d => d.id != id)
        },
        min_max(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

    },
    mounted() {
        this.planos = globalThis._planos
        this.beneficios = globalThis._beneficios


        let backup = localStorage.getItem('simulador_tmp')
        if (backup) {
            backup = JSON.parse(backup)
            this.step = backup.step
            this.plano_id = backup.plano_id
            this.plano_title = backup.plano_title
            this.plano_price = backup.plano_price
            this.dd = backup.dd
            this.mm = backup.mm
            this.aaaa = backup.aaaa
            this.beneficio_id = backup.beneficio_id
            this.beneficio_title = backup.beneficio_title
            this.beneficio_price = backup.beneficio_price
            this.dependentes = backup.dependentes
            this.nome_titular = backup.nome_titular
            this.email = backup.email
            this.telefone = backup.telefone
            this.celular = backup.celular
        }

    }
})
