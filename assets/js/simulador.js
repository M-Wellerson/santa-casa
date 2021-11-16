var app = new Vue({
    el: '#simulador',
    data: {
        step: 1,
        planos: [],
        beneficios: [],
        plano_id: 0,
        plano_title: '...',
        plano_price: '0,00',

        urna_id: null,

        idade: null,

        beneficio_id: null,
        beneficio_title: 'Opcionais',
        beneficio_price: '0,00',

        dependentes: [
            {
                id: 0,
                nome: null,
                beneficio: null,
                data: null,
                taxa: "0,00"
            }
        ],

        nome_titular: null,
        email: null,
        telefone: null,
        celular: null,
        nascimento: null,

        total: '0,00',

        idades: [
            "até 59 anos",
            "de 60 a 69 anos",
            "de 70 a 79 anos",
            "acima de 80 anos",
        ],

        mensagem: '...',
        taxas: [],

    },
    watch: {
        plano_price() { this.calc_total() },
        beneficio_price() { this.calc_total() },
        urna_id() { this.set_valor_urna() },
        dependentes() {
            // this.add_taxa_dependente()
            // this.add_taxa_ao_total()
        }
    },
    methods: {
        render_taxas() {
            this.add_taxa_dependente()
            this.add_taxa_ao_total()
        },
        add_taxa_ao_total() {
            let to_cents = this.taxas.map( t => parseInt( t.replace(/\D/,'') ) )
            let total = parseInt( this.total.replace(/\D/,'') )
            let calc_total = to_cents.reduce((acc,t) => {
                acc = acc + t
                return acc
            }, 0)
            this.total = this.to_money( calc_total + total )
        },
        faixa_idade(faixa) {
            let lb = {
                "até 59 anos": "ate_56_anos",
                "de 60 a 69 anos": "de_60_a_69_anos",
                "de 70 a 79 anos": "de_70_a_79_anos",
                "acima de 80 anos": "acima_de_80",
            }
            return lb[faixa] || faixa
        },
        set_valor_urna() {
            this.plano_price = (this.planos[this.plano_id].urnas.find(u => u.id == this.urna_id))[this.faixa_idade(this.idade)]
        },
        to_money(valor) {
            return (valor / 100).toLocaleString('pt-br', { minimumFractionDigits: 2 })
        },
        get_idade(data_nascimento) {

            let dt2 = new Date(data_nascimento)
            let dt1 = new Date()
            var diff = (dt2.getTime() - dt1.getTime()) / 1000;
            diff /= (60 * 60 * 24);
            let gap = Math.abs(Math.round(diff / 365.25));
            return gap

        },
        taxa_dependente(idade) {
            if (idade < 18) return '1,50'
            if (idade > 18 && idade < 50) return '6,50'
            if (idade > 49 && idade < 60) return '8,00'
            if (idade > 59 && idade < 70) return '9,50'
            if (idade > 69 && idade < 80) return '30,00'
            if (idade > 79) return '40,00'
        },
        calc_total() {
            let plano_price = parseInt(this.plano_price.replace(/\D/, ''))
            let beneficio_price = parseInt(this.beneficio_price.replace(/\D/, ''))
            let soma = plano_price + beneficio_price
            this.total = this.to_money(soma)
            if (soma < 6000) {
                this.mensagem = 'No primeiro mês, pague somente a taxa de adesão no valor de R$ 60,00'
            } else {
                this.mensagem = '+ R$60,00 de taxa de adesão (unica)'
            }
        },
        nex() {
            if (this.step < 7) {
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
                idade: this.idade,
                beneficio_id: this.beneficio_id,
                beneficio_title: this.beneficio_title,
                beneficio_price: this.beneficio_price,
                dependentes: this.dependentes,
                nome_titular: this.nome_titular,
                email: this.email,
                telefone: this.telefone,
                celular: this.celular,
                urna_id: this.urna_id,
                taxas: this.taxas,
            }
            localStorage.setItem('simulador_tmp', JSON.stringify(payload))
        },
        set_plano() {
            this.plano_title = this.planos[this.plano_id].titulo
            this.plano_price = "0,00"
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
                beneficio: null,
                data: null,
                taxa: '0,00'
            })
        },
        remove_dependentes(id) {
            console.log(id)
            this.dependentes = this.dependentes.filter(d => d.id != id)
        },
        min_max(min, max) {
            min = Math.ceil(min);
            max = Math.floor(max);
            return Math.floor(Math.random() * (max - min + 1)) + min;
        },
        voltar() {
            localStorage.removeItem('simulador_tmp')
            window.location.reload()
        },
        async finalizar() {
            this.nex()
            let path = `${globalThis._domain}/wp-json/api/salva-pedido`;
            let res = await (await fetch(path, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    step: this.step,
                    plano_id: this.plano_id,
                    plano_title: this.plano_title,
                    plano_price: this.plano_price,
                    idade: this.idade,
                    beneficio_id: this.beneficio_id,
                    beneficio_title: this.beneficio_title,
                    beneficio_price: this.beneficio_price,
                    dependentes: this.dependentes,
                    nome_titular: this.nome_titular,
                    email: this.email,
                    telefone: this.telefone,
                    celular: this.celular,
                    urna_id: this.urna_id,
                    total: this.total,
                    taxas: this.taxas,
                })
            })).json();
        },
        next_idade() {
            if (this.idade == 'acima de 80') {
                this.nex()
                this.nex()
                return null
            }
            this.nex()
        },
        add_taxa_dependente() {
            this.taxas = this.dependentes.map( d => {
                if(d.data) {
                    let idade = this.get_idade(d.data)
                    return this.taxa_dependente(idade)
                }
                return "0,00"
            })
        }
    },
    mounted() {
        this.planos = globalThis._planos
        this.beneficios = globalThis._beneficios

        this.get_idade('1987-09-18')


        let backup = localStorage.getItem('simulador_tmp')
        if (backup) {
            backup = JSON.parse(backup)
            this.step = backup.step
            this.plano_id = backup.plano_id
            this.plano_title = backup.plano_title
            this.plano_price = backup.plano_price
            this.idade = backup.idade
            this.beneficio_id = backup.beneficio_id
            this.beneficio_title = backup.beneficio_title
            this.beneficio_price = backup.beneficio_price
            this.dependentes = backup.dependentes
            this.nome_titular = backup.nome_titular
            this.email = backup.email
            this.telefone = backup.telefone
            this.celular = backup.celular
            this.urna_id = backup.urna_id
        }

    }
})
