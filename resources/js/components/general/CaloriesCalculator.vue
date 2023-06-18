<template>
    <div class="calories-calculator__wrap">
        <form @submit.prevent="calculateCalories">
            <div class="calories-calculator__group">
                <label class="calories-calculator__label" for="calc-age">Ваш возраст:</label>
                <input type="number" class="calories-calculator__input" id="calc-age" placeholder="Сколько вам лет?" required v-model="age">
            </div>
            <div class="calories-calculator__group">
                <span class="calories-calculator__label">Ваш пол:</span>
                <div class="calories-calculator-check">
                    <input class="calories-calculator-check__input" type="radio" name="sex" id="male-option" value="0" checked v-model.number="sex">
                    <label class="calories-calculator-check__label calories-calculator__label" for="male-option">
                        Мужской
                    </label>
                </div>
                <div class="calories-calculator-check">
                    <input class="calories-calculator-check__input" type="radio" name="sex" id="female-option" value="1" v-model.number="sex">
                    <label class="calories-calculator-check__label calories-calculator__label" for="female-option">
                        Женский
                    </label>
                </div>
            </div>
            <div class="calories-calculator__group">
                <label class="calories-calculator__label" for="calc-weight">Ваш вес:</label>
                <input type="number" class="calories-calculator__input" id="calc-weight" placeholder="Ваш вес (в кг)" required v-model="weight">
            </div>
            <div class="calories-calculator__group">
                <label class="calories-calculator__label" for="height">Ваш рост:</label>
                <input type="number" class="calories-calculator__input" id="height" placeholder="Ваш рост (в см)" required v-model="height">
            </div>
            <div class="calories-calculator__group">
                <label class="calories-calculator__label" for="activity-level">Степень физической активности:</label>
                <select id="activity-level" class="calories-calculator__select calories-calculator__input" v-model="activityLevel">
                    <option value="1.2">Минимальная (сидячая работа, отсутствие физических нагрузок)</option>
                    <option value="1.375" selected>Низкая (тренировки не менее 20 мин 1-3 раза в неделю</option>
                    <option value="1.55">Умеренная (тренировки 30-60 мин 3-4 раза в неделю)</option>
                    <option value="1.7">Высокая (тренировки 30-60 мин 5-7 раза в неделю; тяжелая физическая работа)</option>
                    <option value="1.9">Экстремальная (несколько интенсивных тренировок в день 6-7 раз в неделю; очень трудоемкая работа)</option>
                </select>
            </div>
            <div class="calories-calculator__group">
                <span class="calories-calculator__label">Формула:</span>
                <div class="calories-calculator-check">
                    <input class="calories-calculator-check__input" type="radio" name="calculating-formula" id="miffline-formula" value="0" checked v-model.number="formula">
                    <label class="calories-calculator-check__label calories-calculator__label" for="miffline-formula">
                        Миффлина - Сан Жеора
                    </label>
                </div>
                <div class="calories-calculator-check">
                    <input class="calories-calculator-check__input" type="radio" name="calculating-formula" id="harris-formula" value="1" v-model.number="formula">
                    <label class="calories-calculator-check__label calories-calculator__label" for="harris-formula">
                        Харриса - Бенедикта
                    </label>
                </div>
            </div>
            <button type="submit" class="calories-calculator__btn button">Рассчитать</button>
        </form>
        <div class="row d-flex w-100" v-if="resultWasCalculated">
            <div class="col-12">
                Для поддержания веса необходимо: <b>{{holdingResult}}</b> ккал/день
            </div>
            <div class="col-12">
                Для набора веса необходимо: <b>{{gainResult}}</b> ккал/день
            </div>
            <div class="col-12">
                Для сброса веса необходимо: <b>{{lossResult}}</b> ккал/день
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CaloriesCalculator",
    data() {
        return {
            age: null,
            weight: null,
            height: null,
            sex: 0,
            formula: 0,
            activityLevel: 1.375,
            resultWasCalculated: false,
            holdingResult: null,
            gainResult: null,
            lossResult: null,
        }
    },
    methods: {
        calculateCalories() {
            switch (this.formula) {
                case 0:
                    switch (this.sex) {
                        case 0:
                            this.holdingResult = this.activityLevel * ((10 * this.weight) + (6.25 * this.height) - (5 * this.age) + 5);
                            break;
                        case 1:
                            this.holdingResult = this.activityLevel * ((10 * this.weight) + (6.25 * this.height) - (5 * this.age) - 161);
                            break;
                        default:
                            alert("Проверьте ввод");
                    }
                    this.gainResult = Math.floor(this.holdingResult * 115) / 100;
                    this.lossResult = Math.floor(this.holdingResult * 85) / 100;
                    this.holdingResult = Math.floor(this.holdingResult * 100) / 100;
                    break;
                case 1:
                    switch (this.sex) {
                        case 0:
                            this.holdingResult = (66 + (13.7 * this.weight) + (5 * this.height) - (6.76 * this.age)) * this.activityLevel;
                            break;
                        case 1:
                            this.holdingResult = (655 + (9.6 * this.weight) + (1.8 * this.height) - (4.7 * this.age)) * this.activityLevel;
                            break;
                        default:
                            alert("Проверьте ввод");
                    }
                    this.gainResult = Math.floor(this.holdingResult * 115) / 100;
                    this.lossResult = Math.floor(this.holdingResult * 85) / 100;
                    this.holdingResult = Math.floor(this.holdingResult * 100) / 100;
                    break;
                default:
                    alert("Проверьте ввод");
            }
            this.resultWasCalculated = true;
        }
    }
}
</script>

<style scoped>
    .clear-calculations-button {
        background-color: #ef1556 !important;
    }
    .colored-radio {
        accent-color: #9180ff;
    }
</style>
