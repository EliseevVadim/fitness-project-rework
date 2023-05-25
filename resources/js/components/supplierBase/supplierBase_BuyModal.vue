<template>
    <div>
        <div :id="'base-order-' + supplierBase.id"
             :class="'base-order-' + supplierBase.id"
             class="base-order"
        >
            <h3 class="base-order__title">
                ВАШ ЗАКАЗ
            </h3>
            <div class="base-order-price">
                <b class="base-order-price__text">
                    {{ supplierBase.name }}
                </b>
                <small class="base-order-price__price">
                    {{ supplierBase.discount_price }} р.
                </small>
            </div>
            <h5 class="base-order__subtitle">
                Внимательно вводите ваш электронный адрес без ошибок.
            </h5>
            <div class="base-order__caption">
                Доступ к выбранной базе придёт на указанную Вами электронную почту в течение нескольких минут после
                оплаты.
            </div>
            <form class="base-order__form" @submit.prevent="saveOrder">
                <div class="base-order__group">
                    <label class="base-order__label">Введите ваш Email</label>
                    <input type="email"
                           class="base-order__input"
                           placeholder="Email"
                           v-model="$v.email.$model"
                           :class="{'form-group_error': ($v.email.$dirty && !$v.email.required) || ($v.email.$dirty && !$v.email.email)}"
                    >
                    <input type="hidden" v-model="supplierBase.id">
                    <small v-if="$v.email.$dirty && !$v.email.required">
                        Поле не должно быть пустым
                    </small>
                    <small v-if="$v.email.$dirty && !$v.email.email">
                        Неверный формат
                    </small>
                </div>
                <button class="base-order__btn base-order-ready-open-modal"
                        :class="'base-order-ready-open-modal-' + supplierBase.base_type_id">
                    ОПЛАТИТЬ
                </button>
            </form>
            <small class="base-order__small">
                Нажимая “Оплатить”, я принимаю условия <a href="" class="base-order__link">Политики обработки
                персональных данный и условия Оферты</a>
            </small>
        </div>
        <div :id="'base-order-ready-' + supplierBase.id"
             :class="'base-order-ready-' + supplierBase.id"
             class="base-order-ready base-order"
        >
            <h3 class="base-order__title">
                ВАШ ЗАКАЗ
            </h3>
            <div class="base-order-price">
                <b class="base-order-price__text">
                    {{ supplierBase.name }}
                </b>
                <small class="base-order-price__price">
                    {{ supplierBase.discount_price }} р.
                </small>
            </div>
            <h5 class="base-order__subtitle">
                Внимательно вводите ваш электронный адрес без ошибок.
            </h5>
            <div class="base-order__caption">
                Доступ к выбранной базе придёт на указанную Вами электронную почту в течение нескольких минут после
                оплаты.
            </div>
            <div class="base-order__banner">
                Спасибо! Заказ оформлен. Пожалуйста, подождите. Идет переход к оплате...
            </div>
            <small class="base-order__small">
                Нажимая “Оплатить”, я принимаю условия <a href="" class="base-order__link">Политики обработки
                персональных данный и условия Оферты</a>
            </small>
        </div>
    </div>
</template>

<script>
import {validationMixin} from 'vuelidate';
import {required, email} from 'vuelidate/lib/validators';
import axios from "axios";

export default {
    name: "supplierBase_BuyModal",
    props: {
        supplierBase: {
            type: Object,
            required: true
        }
    },
    mixins: [validationMixin],
    data: () => ({
        email: null,
    }),
    validations: {
        email: {
            required,
            email
        },
    },
    methods: {
        saveOrder() {
            this.$v.$touch()
            if (!this.$v.$invalid) {
                axios
                    .post('/initialize-checkout/tinkoff-for-base',
                        {
                            email: this.email,
                            id: this.supplierBase.id
                        },
                        {
                            headers: {
                                "Content-Type": "application/json",
                                "x-access-token": "token-value",
                            }
                        })
                    .then(response => {
                        console.log(response.data);
                        window.location.href = response.data.paymentUrl;
                    })
                    .catch(error => {
                        console.log(error)
                    });
            }
        }
    }
}
</script>

<style scoped>

</style>
