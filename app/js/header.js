Vue.component('poll', {
    props: ['questionOne',
        'questionTwo',
        'clientName',
        'clientId',
        'sid',
        'typePoll',
        'from',
        'pollType',
        'epIdOne',
        'epIdTwo',
        'epIdThree',
        'typeQuestionOne',
        'typeQuestionTwo',
        'typeQuestionThree',
        'img'
    ],
    template: `
            `,
    data: function () {
        return {
            value: '',
            maxlenght: 280,
            restlenght: 280,
            displayStar: null,
            currentStar: null,
            starset: "",
            displayStar_owner: null,
            currentStar_owner: null,
            starset_owner: "",
            starseted: "",
            starseted_owner: "",
            show_1: false,
            show_2: false,
            buttonactive: true,
            disabledTextarea: true,
            count: "",
            progress: "progress-bar__progress",
            arrayPoll: [],
            content_div: "",
            title_textarea: "Déjanos tu testimonio",
        }
    },
    methods: {
        rating: function (number) {
            if (number) {
                this.displayStar = number;
            } else {
                this.displayStar = null;
            }
        },
        rating_owner: function (number) {
            if (number) {
                this.displayStar_owner = number;
            } else {
                this.displayStar_owner = null;
            }
        },
        setstar: function (number) {
            this.currentStar = number;
            this.starseted = number;
            this.show_1 = true;
        },
        setstar_owner: function (number) {
            this.currentStar_owner = number;
            this.starset_owner = number;
            this.show_2 = true;
            this.starseted_owner = number;
            var client = this.clientName;
            if (this.starseted != 0 && this.starseted_owner != 0) {
                this.disabledTextarea = false;
            } else {
                this.disabledTextarea = true;
            }
            if (number <= 2) {
                this.title_textarea = "¿Cómo puede mejorar <span class='text-bold'>" + client + "<span>?";
            } else {
                this.title_textarea = "Déjanos tu testimonio";
            }
        },
        updateValue(e) {
            this.value = e.target.value;
            var len = e.target.value.trim().length;
            //caculo del 100% para el indicador//
            //var percentageComplete = (len * 100 / this.maxlenght);
            //caculo del 100% para el indicador//
            //var strokeDashOffsetValue = 100 - (percentageComplete);
            //var progressBar = document.querySelector(".js-progress-bar");
            var btnactive = 0;
            //progressBar.style.strokeDashoffset = strokeDashOffsetValue;
            this.count = (this.maxlenght - len) + "/280 ";
            //switch para cambiar clase color al indicador segun avance al maximo o retroceda el nro de caracteres//
            /* switch (percentageComplete) {
                case 67.5:
                    this.progress = "progress-bar__progress"
                    break;
                case 70:
                    this.progress = "progress-bar__progress_warning"
                    break;
                case 92.5:
                    this.progress = "progress-bar__progress_warning"
                    break;
                case 95:
                    this.progress = "progress-bar__progress_danger"
                    break;
            } */
            //switch para cambiar clase color al indicador segun avance al maximo o retroceda el nro de caracteres//
            //disable o active button enviar
            if (len > btnactive) {
                this.buttonactive = false;
            } else {
                this.buttonactive = true;
            }
            //disable o active button enviar
            /* if (len >= this.maxlenght) {
                this.count = "Límite alcanzado.";
                e.stopPropagation();
                this.value = this.value.substring(0, this.maxlenght);
                progressBar.style.strokeDashoffset = 0;
            } */
        },
        savePoll() {
            var l = this.type_question;
            var p = this.ep_id;
            var array = [];
            if (this.epIdOne) {
                array.push({
                    "tipo_preg": this.typeQuestionOne,
                    "ep": this.epIdOne,
                    "value": this.starseted,
                    "cli_id": this.clientId
                });
            }
            if (this.epIdTwo) {
                array.push({
                    "tipo_preg": this.typeQuestionTwo,
                    "ep": this.epIdTwo,
                    "value": this.starseted_owner,
                    "cli_id": this.clientId
                });
            }
            if (this.epIdThree) {
                array.push({
                    "tipo_preg": this.typeQuestionThree,
                    "ep": this.epIdThree,
                    "value": this.value.trim(),
                    "cli_id": this.clientId
                });
            }

            this.buttonactive = true;
            this.disabledTextarea = true;
            agregarEncuestaAjax(array, this.sid, this.clientId, this.pollType, this.from);
        }
    }
});
// crear la instancia principal
new Vue({
    el: '#appPollHistory'
});