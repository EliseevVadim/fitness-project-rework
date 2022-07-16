import Vue from 'vue'
import Vuex from 'vuex'

//#region import modules
import lifeStyles from './modules/lifeStyles'
import trainingLocations from './modules/trainingLocations'
import menuCalories from './modules/menuCalories'
import menuTypes from './modules/menuType'
import menus from './modules/menus'
import trainings from './modules/trainings'
import notifications from './modules/notifications'
import personalAccount from './modules/personalAccount'
import userMenus from './modules/userMenus'
import trainingUsers from './modules/trainingUsers'
import serviceInfo from "./modules/serviceInfo";
//#endregion

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        lifeStyles,
        trainingLocations,
        menuCalories,
        menuTypes,
        personalAccount,
        menus,
        userMenus,
        trainings,
        trainingUsers,
        notifications,
        serviceInfo
    }
})
