import { Api } from './../core/bootstrap.js';

$(document).ready(function() {
    $('body #state-select').on('change', function() {
        const state_id = $('#state-select').val()
        const citySelect = $('#city-select');
        let cityOptions;
        axios.get('/api/citys', {params: {state: state_id}})
            .then( async (response) => {
                for (let city of await response.data){
                    cityOptions += `<option value="${city.id}">${city.name}</option>`.replace('undefined', '');
                }
                citySelect.html(cityOptions.replace('undefined', ''));
            })
    })
})
