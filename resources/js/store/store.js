import Vuex from 'vuex'
import Vue from 'vue'

Vue.use(Vuex);

export default new Vuex.Store({
   state: {
       user: '',
   },

    getters: {

    },

    mutations: {
        saveUser(state, user) {
            state.user = user;
        }
    },

    actions: {
        handleSaveUser({ commit }, user) {
            commit('saveUser', user);
        }
    },
});
