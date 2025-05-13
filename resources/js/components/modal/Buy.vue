<template>
    <div
        class="modal modal-custom fade modal-buy"
        id="buy"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-custom__content">
                <button
                    type="button"
                    class="modal__close"
                    data-dismiss="modal"
                    aria-label="Close"
                    @click="closeModal"
                >
                    <svg
                        width="18"
                        height="18"
                        viewBox="0 0 18 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            y="16.3125"
                            width="23.0694"
                            height="2.38648"
                            transform="rotate(-45 0 16.3125)"
                            fill="#9180FF"
                        />
                        <rect
                            x="1.68752"
                            width="23.0694"
                            height="2.38648"
                            transform="rotate(45 1.68752 0)"
                            fill="#9180FF"
                        />
                    </svg>
                </button>
                <h5 class="modal__title">ВАШ ЗАКАЗ</h5>

                <p class="buy-head__prg">
                    <b>ВАЖНО! Внимательно вводите ваш электронный адрес без ошибок.</b>
                </p>
                <!--                <div class="buy-head__txt-small">-->
                <!--                    Ссылка на папку с выбранной программой придёт на указанную Вами электронную почту в течении-->
                <!--                    суток после оплаты - используйте ее для начала Ваших тренировок!-->
                <!--                </div>-->
                <form class="buy-form mt-3" v-if="activeStep === 1" @submit.prevent="initializeTinkoffPayment">
                    <div class="buy__row">
                        <div class="buy__group d-none" v-for="(info, index) in users" :key="index">
                            <label :for="info.id" class="buy__label">
                                {{ info.name }}
                            </label>
                            <input
                                :id="info.id"
                                :type="info.type"
                                class="buy__input"
                                :placeholder="info.placeholder"
                                v-model="info.value"
                            />
                        </div>
                        <Myselect
                            :select="selects[0]"
                            :list="GetLifeStyles.data"
                            v-on:result="result"
                            ref="life_style_select"
                            class="d-none"
                        ></Myselect>
                        <Myselect
                            :select="selects[1]"
                            :list="trainingLocations"
                            v-on:result="resultForLocation"
                            ref="training_location_select"
                            class="d-none"
                        ></Myselect>
                        <Myselect
                            :select="selects[2]"
                            :list="GetMenuCalories"
                            v-on:result="result"
                            ref="menu_calories_select"
                            class="d-none"
                        ></Myselect>
                        <div class="buy__group">
                            <label for="email" class="buy__label">
                                Ваш Email
                            </label>
                            <input
                                required
                                id="email"
                                type="Email"
                                class="buy__input"
                                placeholder="Email"
                                v-model="email"
                            />
                        </div>
                    </div>
                    <div class="buy__price">Сумма: {{ SERVICE_INFO.price }}р.</div>
                    <div class="buy__agreement mt-3">
                        <label class="agreement-label">
                            <input
                                type="checkbox"
                                id="subscriptionAgreement"
                                v-model="agreed"
                                required
                                class="agreement-checkbox"
                            />
                            <span v-if="!SERVICE_INFO.is_marathon">
                                Я даю согласие на ежемесячные регулярные списания. <span class="desktop-br"></span>Отменить подписку можно в любой момент.
                            </span>
                            <span v-if="SERVICE_INFO.is_marathon">
                                Нажимая “Продолжить”,<span class="mobile-br"></span> я принимаю условия
                                <span class="text-decoration-underline">Политики<span class="desktop-br"></span> обработки персональных данных и условия Оферты </span>
                            </span>
                        </label>
                    </div>
                    <button type="submit" class="button buy-form__btn" :disabled="!agreed">
                        ПРОДОЛЖИТЬ
                    </button>
                </form>
                <div v-if="!SERVICE_INFO.is_marathon" class="buy-form__prg">
                    Нажимая “Продолжить”, я принимаю условия
                    <span>Политики обработки <br> персональных данных и условия Оферты </span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Myselect from "../general/Select.vue";
import {mapGetters} from "vuex";

export default {
    components: {
        Myselect,
    },
    mounted() {
        this.$store.dispatch('fetchLifeStyles');
        this.$store.dispatch('fetchMenuCalories');
        this.$store.dispatch('fetchTrainingLocations');
    },
    data: () => ({
        disabled: false,
        oldPrice: null,
        errors: [],
        activeStep: 1,
        deletepackage: false,
        returnpackage: true,
        email: '',
        agreed: false,
        users: [
            {
                id: "name",
                name: "Имя",
                placeholder: "Любовь Мишанкова",
                value: "MOVED_TO_BOT",
                type: "text"
            },
            {
                id: "age",
                name: "Ваш возраст",
                placeholder: "25 лет",
                value: "25",
                type: "number"
            },
            {
                id: "weight",
                name: "Ваш вес",
                placeholder: "60 кг",
                value: "60",
                type: "number"
            },
            {
                id: "tall",
                name: "Ваш рост",
                placeholder: "165 см",
                value: "165",
                type: "number"
            },
            {
                id: "required_weight",
                name: "Желаемый вес",
                placeholder: "55 кг",
                value: "55",
                type: "number"
            },
        ],
        additionValues: {
            'training_location_id': 1,
            'life_style_id': 1,
            'menu_calories_id': 1
        },
        selects: [
            {
                id: "life_style_id",
                label: "Выберите Ваш образ жизни: ",
                value: "Ваш образ жизни"
            },
            {
                id: "training_location_id",
                label: "Тренировки для: ",
                value: "Дома"
            },
            {
                id: "menu_calories_id",
                label: "Желаемая калорийность меню: ",
                value: "1300-1400"
            },
        ],
    }),
    computed: {
        ...mapGetters(['GetLifeStyles']),
        ...mapGetters(['GetMenuCalories']),
        ...mapGetters(['GetTrainingLocations']),
        ...mapGetters(['SERVICE_INFO']),
        trainingLocations() {
            try {
                if (!this.GetTrainingLocations[this.GetTrainingLocations.length - 1].name.endsWith(" (+ 1300р.)"))
                    this.GetTrainingLocations[this.GetTrainingLocations.length - 1].name += " (+ 1300р.)";
                this.GetTrainingLocations[this.GetTrainingLocations.length - 1].extra = 1300;
                return this.GetTrainingLocations;
            } catch (e) {
                return [];
            }
        }
    },
    methods: {
        toggleDelete() {
            this.deletepackage = !this.deletepackage;
        },
        result(item, id) {
            this.additionValues[id] = item.id;
        },
        resultForLocation(item, id) {
            if (item.extra && this.SERVICE_INFO.price === this.SERVICE_INFO.old_price) {
                this.SERVICE_INFO.price += item.extra;
                this.SERVICE_INFO.current_stripe_id = this.SERVICE_INFO.extended_stripe_id;
            } else if (!item.extra) {
                this.SERVICE_INFO.price = this.SERVICE_INFO.old_price;
                this.SERVICE_INFO.current_stripe_id = this.SERVICE_INFO.stripe_id;
            }
            this.additionValues[id] = item.id;
        },
        initializeTinkoffPayment() {
            let user = {
                "name": this.users[0].value,
                "age": this.users[1].value,
                "email": this.email,
                "weight": this.users[2].value,
                "tall": this.users[3].value,
                "required_weight": this.users[4].value,
                "training_location_id": this.additionValues.training_location_id,
                "menu_calories_id": this.additionValues.menu_calories_id,
                "life_style_id": this.additionValues.life_style_id,
                "product_name": this.SERVICE_INFO.name,
                "price": this.SERVICE_INFO.price,
                "stripe_id": this.SERVICE_INFO.current_stripe_id
            }
            let formData = new FormData();
            formData.append('user_info', JSON.stringify(user));
            axios.post('/initialize-checkout/tinkoff', formData)
                .then((response) => {
                    window.location.href = response.data.paymentUrl;
                })
                .catch((error) => {
                    console.log(error.response);
                })
        },
        closeModal() {
            // this.$refs.life_style_select.label = "Ваш образ жизни";
            // this.$refs.menu_calories_select.label = "1300-1400";
            // this.$refs.training_location_select.label = "Дома";
            // this.$refs.life_style_select.value = null;
            // this.$refs.menu_calories_select.value = null;
            // this.$refs.training_location_select.value = null;
            // this.$store.dispatch('fetchTrainingLocations');
        }
    },
};
</script>
<style scoped>
.button.buy-form__btn:disabled {
    background: #CCCCCC;
    color: #666666;
    cursor: not-allowed;
    opacity: 0.7;
}

.agreement-label {
    font-size: 14px;
}
</style>
