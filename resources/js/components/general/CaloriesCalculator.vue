<template>
    <div class="container">
        <form @submit.prevent="calculateCalories">
            <div class="form-group">
                <label for="calc-age">Ваш возраст:</label>
                <input type="number" class="form-control" id="calc-age" placeholder="Сколько вам лет?" required v-model="age">
            </div>
            <div class="mb-2">
                <span>Ваш пол:</span>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sex" id="male-option" value="0" checked v-model.number="sex">
                    <label class="form-check-label" for="male-option">
                        Мужской
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sex" id="female-option" value="1" v-model.number="sex">
                    <label class="form-check-label" for="female-option">
                        Женский
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="calc-weight">Ваш вес:</label>
                <input type="number" class="form-control" id="calc-weight" placeholder="Ваш вес (в кг)" required v-model="weight">
            </div>
            <div class="form-group">
                <label for="height">Ваш рост:</label>
                <input type="number" class="form-control" id="height" placeholder="Ваш рост (в см)" required v-model="height">
            </div>
            <div class="form-group">
                <label for="activity-level">Степень физической активности:</label>
                <select id="activity-level" class="form-control" v-model="activityLevel">
                    <option value="1.0">Основной обмен</option>
                    <option value="1.2">Минимум/отсутствие физической нагрузки</option>
                    <option value="1.375" selected>3 раза в неделю</option>
                    <option value="1.4625">5 раз в неделю</option>
                    <option value="1.550">5 раз в неделю (интенсивно)</option>
                    <option value="1.635">Каждый день</option>
                    <option value="1.725">Каждый день интенсивно или два раза в день</option>
                    <option value="1.9">Ежедневная физическая нагрузка+физическая работа</option>
                </select>
            </div>
            <div class="mb-2">
                <span>Формула:</span>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="calculating-formula" id="miffline-formula" value="0" checked v-model.number="formula">
                    <label class="form-check-label" for="miffline-formula">
                        Миффлина - Сан Жеора
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="calculating-formula" id="harris-formula" value="1" v-model.number="formula">
                    <label class="form-check-label" for="harris-formula">
                        Харриса-Бенедикта
                    </label>
                </div>
            </div>
            <div class="row d-flex w-100 justify-content-between m-0">
                <div class="col-12 col-md-6 text-center mb-2">
                    <button type="submit" class="btn btn-primary">Рассчитать</button>
                </div>
                <div class="col-12 col-md-6 text-center mb-2">
                    <button type="button" class="btn btn-danger" @click="clearAll">Очистить все</button>
                </div>
            </div>
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
        },
        clearAll() {
            this.age = null;
            this.lossResult = null;
            this.gainResult = null;
            this.holdingResult = null;
            this.height = null;
            this.weight = null;
            this.sex = 0;
            this.formula = 0;
            this.activityLevel = 1.375;
            this.resultWasCalculated = false;
        }
    }
}
</script>

<style scoped>

</style>
