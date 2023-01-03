import AppForm from '../app-components/Form/AppForm';

Vue.component('user-cedula-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                user_id:  '' ,
                cedula:  '' ,
                
            }
        }
    }

});